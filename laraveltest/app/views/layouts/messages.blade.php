@if(count($errors))
<div class="alert alert-danger">
    @foreach($errors->all() as $e)
    <p>{{ $e }}</p>
    @endforeach
</div>
@endif

@if($message =Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif