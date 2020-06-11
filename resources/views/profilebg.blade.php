@extends('layouts.app')

@section('content')
<div class="container">



    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/covers/{{ $user->cover }}" style="width:100%; height:400px; ">

            <form enctype="multipart/form-data" action="profilebg" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="cover">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-dark">Replace Pic</button>

            </form>
        </div>

</div>
</div>
@endsection
