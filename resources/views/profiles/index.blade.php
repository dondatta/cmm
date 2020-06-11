@extends('layouts.app')

@section('content')
    <div class="container ">

        <div class="card bg-dark text-white">
            <img class="card-img" src="/uploads/covers/{{ $user[0]->cover }}" style="width:100%; height:400px; "  alt="Cover Background">
            <div class="card-img-overlay">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body bg-dark">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <img src="/uploads/avatars/{{ $user[0]->avatar }}"
                                                 style="width:200px; height:200px; float:left; border-radius:50%; margin-right:25px;">
                                        </div>
                                        <div class="col">
                                            <h1 class="display-6">{{ $user[0]->name }}</h1>
                                            <div class="card bg-dark border border-light">
                                                <div class="card-body">
                                                     <ul class="list-unstyled">
                                                        <li>Ethnicity</li>
                                                        <li>{{ $user[0]->ethnicity }}</li>
                                                        <li>Experience</li>
                                                        <li>{{ $user[0]->experience }}</li>
                                                        <li>Compensation</li>
                                                        <li>{{ $user[0]->compensation }}</li>
                                                     </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row" >
            <div class="col-md-3"><h5><i class="fab fa-adn">  Available For:</i></h5>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold" >Art</li>
                            <li>{{ $user[0]->art }}</li>
                            <li class="font-weight-bold" >Bodypaint</li>
                            <li>{{ $user[0]->bodypaint}}</li>
                            <li class="font-weight-bold" >Cosplay</li>
                            <li>{{ $user[0]->cosplay }}</li>
                            <li class="font-weight-bold" >Arting</li>
                            <li>{{ $user[0]->acting }}</li>
                            <li class="font-weight-bold" >Bodypaint</li>
                            <li>{{ $user[0]->bodypaint}}</li>
                            <li class="font-weight-bold" >Dance</li>
                            <li>{{ $user[0]->dance }}</li>
                            <li class="font-weight-bold" >Editorial</li>
                            <li>{{ $user[0]->editorial }}</li>
                            <li class="font-weight-bold" >Erotic</li>
                            <li>{{ $user[0]->erotic }}</li>
                            <li class="font-weight-bold" >Fashion</li>
                            <li>{{ $user[0]->fashion }}</li>
                            <li class="font-weight-bold" >Fetish</li>
                            <li>{{ $user[0]->fetish }}</li>
                            <li class="font-weight-bold" >Fitmodeling</li>
                            <li>{{ $user[0]->fitmodeling}}</li>
                            <li class="font-weight-bold" >Fitness</li>
                            <li>{{ $user[0]->fitness }}</li>
                        </ul>
                    </div>
                </div>
             </div>
            <div class="col-md-8 offset-1">
          <h3 class="shadow bg-dark-blue rounded"><i class="fab fa-accusoft">Characteristics</i></h3>
        <div class="row m-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Haircolor</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->haircolor }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Hairlength</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->hairlength }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Skincolor</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->skincolor }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Eyecolor</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->eyecolor }}
                    </div>
                </div>
            </div>

        </div>
        <div class="row m-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Bust(in)</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->bust }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Cup Size</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->cup }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Dress</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->dress }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Waist</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->waist }}
                    </div>
                </div>
            </div>

        </div>
        <div class="row m-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Height</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->height }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Weight</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->weight }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Shoe Size</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->shoe }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <b>Eyecolor</b>
                    </div>
                    <div class="card-body">
                        {{ $user[0]->eyecolor }}
                    </div>
                </div>
            </div>

        </div>
            </div>
        </div>
    </div>

    @if(count($user))
        @foreach($user as $profile)

            <a href="{{ url('profiles/'.$profile->id.'/edit')}}">{{ $profile->user_id }}</a>


        @endforeach
    @else
        <p>no profile yet</p>
        </div>
    @endif

@endsection
