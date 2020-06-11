@extends('layouts.app')

@section('content')
<div class="container bg-light p-2">
<div class="card mt-2">
  <div class="card-header">
      Social Influencer {{ $user->name }}
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:250px; height:250px; float:left; border-radius:50%; margin-right:25px;">
            <div class="float-left">
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <div class="form-group">
                        <label>Change Photo</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <div class="float-left">
                        <button type="submit" class="btn btn-dark">Add Photo</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="col-md-7">
            <h1 class="text-dark">{{ $user->name }}</h1>
            <p><i class="fas fa-envelope-open-text fa-lg"></i> {{ $user->email }}</p>
            <p><i class="fas fa-glasses fa-lg"></i> Change profile background <a href="profiles">click here</a></p>
            <p><i class="fab fa-telegram-plane fa-lg"></i> Get Telegram code  <a href="#"> click here</a></p>

            <a href="profiles" type="button" class="btn btn-primary float-left"><i class="fas fa-id-card"></i> View Profile</a>
        </div>

        </div>
    </div>
    </div>

@endsection
