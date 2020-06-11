@extends('ranks.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CMM Models Net Worth</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ranks.create') }}"> Create New Model Rank</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th></th>
            <th>Details</th>

        </tr>
        @foreach ($ranks as $rank)
            <div class="card" >
                <div class="row no-gutters">
                    <div class="col-sm-5">
                        <img class="card-img img-fluid" src="{{ $rank->user_image }}" alt="{{ $rank->name }} Card">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">{{ ++$i }}-{{ $rank->name }}</h5>
                            <p class="card-text limit-paragraph">{{ $rank->detail }}</p>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </table>
  
    {!! $ranks->links() !!}
      
@endsection