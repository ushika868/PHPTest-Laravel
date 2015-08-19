<html lang="en">
    <head>
        <meta charset="utf-8">
        {{HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
        <title>Hotels</title>    
    </head>

    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{route('hotel.index')}}">Hotels</a></li>
                        <li><a href="{{route('hotel.create')}}">Create Hotel</a></li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container" style="margin-top: 60px;">
            @include('layouts.messages')

            {{Form::open(['route'=>'hotel.store'])}}
            <h2>Add Hotel</h2> 
            <div class="form-group">
                <label for="name">Name</label>    
                {{Form::text('name',Input::old('name'),['class'=>'form-control','style'=>'width:500px']) }}
            </div> 
            <div class="form-group">
                <label for="address">Address</label>
                {{Form::text('address',Input::old('address'),['class'=>'form-control','style'=>'width:500px']) }}
            </div>  
            <div class="form-group">
                <label for="location">Location</label>   
                {{Form::select('location',$location_lists, null, array('class' => 'form-control','style'=>'width:500px'))}}
            </div>  
            <button type="submit" class="btn btn-default">Add Hotel</button>
        </form>
    </div>
</body>
</html>