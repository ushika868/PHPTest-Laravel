<?php

class HotelController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $hotel['list'] = DB::table('hotel')
                ->join('locations', 'hotel.location', '=', 'locations.id')
                ->select('hotel.*', 'locations.name as location_name')
                ->orderBy('locations.name', 'asc')
                ->paginate(5);
        return View::make('hotel.list', $hotel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $location_lists = Location::orderBy('name')->lists('name', 'id');
        return View::make('hotel.create')
                        ->with('location_lists', $location_lists);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        $rules = [
            'name' => 'required|unique:hotel',
            'address' => 'required',
            'location' => 'required',
        ];

        $messages = [];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()
                            ->withInput()
                            ->withErrors($validator->errors());
        }

        $hotel = new Hotel(Input::all());
        $hotel->save();

        Session::flash('success', 'Successfully created hotel!');
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return Redirect::back();
    }

    public function search() {
        $location = Input::get('searchtext');
        $hotel['list'] = DB::table('hotel')
                ->join('locations', 'hotel.location', '=', 'locations.id')
                ->select('hotel.*', 'locations.name as location_name')
                ->where('locations.name', 'LIKE', $location . '%')
                ->orderBy('locations.name', 'asc')
                ->get();
        if ($hotel['list']) {
            return $hotel;
        } else {
            $hotel['message'] = 'error';
            return $hotel;
        }
    }

    public function searchdatasort() {
        $location = Input::get('searchtext');
        $sort = Input::get('sort');
        $hotel['list'] = DB::table('hotel')
                ->join('locations', 'hotel.location', '=', 'locations.id')
                ->select('hotel.*', 'locations.name as location_name')
                ->where('locations.name', 'LIKE', $location . '%')
                ->orderBy('locations.name', $sort)
                ->get();
        if ($hotel['list']) {
            return $hotel;
        } else {
            $hotel['message'] = 'error';
            return $hotel;
        }
    }

}
