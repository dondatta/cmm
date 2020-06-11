@extends('layouts.app')

@section('content')
<div class="container bg-light p-2">
<div class="card mt-2">
  <div class="card-header">
    {{ $user->name }}'s Profile
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-dark">Replace Pic</button>

            </form>
        </div>
    </div>
    </div>
    </div>
{!! Form::open(['route' => 'profiles.store'] ) !!}

     <div class="card mt-2 " >
      <div class="card-body">
     {!! Form::label('gender', 'Gender:') !!}
     {!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], 'Female', ['class' => 'form-control']) !!}
        <div class="form-row align-items-center">
            <div class="col-sm-3 my-1">
     {!! Form::label('skincolor', 'Skin Color:') !!}
     {!! Form::select('skincolor', ['Brown' => 'Brown', 'Olive' => 'Olive','Tan' => 'Tan', 'White' => 'White','Other' => 'Other'], 'Brown', ['class' => 'form-control']); !!}
        </div>
        <div class="col-sm-3 my-1">
     {!! Form::label('haircolor', 'Hair Color:') !!}
     {!! Form::select('haircolor', ['Brown' => 'Brown', 'Black' => 'Black','Auburn' => 'Auburn', 'Blond' => 'Blond','Grey' => 'Grey', 'Red' => 'Red','Other' => 'Other'], 'Brown', ['class' => 'form-control']); !!}
       </div>
     <div class="col-sm-3 my-1">
     {!! Form::label('hairlength', 'Hair Length:') !!}
     {!! Form::select('hairlength', ['Bald' => 'Bald', 'Long' => 'Long','Medium' => 'Medium', 'Short' => 'Short','Shoulder Length' => 'Shoulder Length','Very Long' => 'Very Long'], 'Very Long', ['class' => 'form-control']); !!}
         </div>
     <div class="col-sm-3 my-1">
     {!! Form::label('eyecolor', 'Eye Color:') !!}
     {!! Form::select('eyecolor', ['Black' => 'Black','Brown' => 'Brown', 'Green' => 'Green','Blue' => 'Blue', 'Hazel' => 'Hazel','Other' => 'Other'], 'Blue', ['class' => 'form-control']); !!}
        </div>
      </div>
         <div class="form-row align-items-center">
      <div class="col-sm-3 my-1">
      {!! Form::label('tattoos', 'Tattoos:') !!}
     {!! Form::select('tattoos', ['None' => 'None', 'Some' => 'Some','Many' => 'Many'], 'None', ['class' => 'form-control']); !!}
      </div>
     <div class="col-sm-3 my-1">
     {!! Form::label('piercings', 'Piercings:') !!}
     {!! Form::select('piercings', ['None' => 'None', 'Some' => 'Some','Many' => 'Many'], 'Many', ['class' => 'form-control']); !!}
     </div>
     </div>
      <div class="container bg-light p-2">
    <div class="card mt-2">
        <div class="card-header">
            <span>Measurements (optional):</span>
        </div>
        <div class="card-body">
            <div class="form-row align-items-center">
                <div class="col-sm-3 my-1">
                    <label for="bust">Bust:</label>
                    {!! Form::selectRange('bust',0, 96); !!}
                </div>
                <div class="col-sm-3 my-1">
                    <label for="p_f_hips">Hips:</label>
                    {!! Form::selectRange('hips',0, 96); !!}
                </div>
                <div class="col-sm-3 my-1">
                    <label for="bust">Dress:</label>
                    {!! Form::selectRange('dress',0, 96); !!}
                </div>
                <div class="col-sm-3 my-1">
                    <label for="bust">Waist:</label>
                    {!! Form::selectRange('waist',0, 96); !!}
                </div>
                <div class="col-sm-3 my-1">
                    <label for="bust">Cup:</label>
                    <select id="cup" class="short" name="cup">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="DD">DD</option>
                        <option value="DDD">DDD</option>
                        <option value="E">E</option>
                        <option value="EE">EE</option>
                        <option value="EEE">EEE</option>
                        <option value="F">F</option>
                        <option value="FF">FF</option>
                        <option value="FFF">FFF</option>
                        <option value="G">G</option>
                        <option value="GG">GG</option>
                        <option value="GGG">GGG</option>
                    </select>
                </div>
                <div class="col-sm-3 my-1">
                    <label for="shoe">Shoe:</label>
                    <select id="shoe" class="short" name="shoe" >
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                        <option value="4.5">4.5</option>
                        <option value="5">5</option>
                        <option value="5.5">5.5</option>
                        <option value="6">6</option>
                        <option value="6.5">6.5</option>
                        <option value="7">7</option>
                        <option value="7.5">7.5</option>
                        <option value="8">8</option>
                        <option value="8.5">8.5</option>
                        <option value="9">9</option>
                        <option value="9.5">9.5</option>
                        <option value="10">10</option>
                        <option value="10.5">10.5</option>
                        <option value="11">11</option>
                        <option value="11.5">11.5</option>
                        <option value="12">12</option>
                        <option value="12.5">12.5</option>

                        <option value="14">14</option>
                        <option value="14.5">14.5</option>
                        <option value="15">15</option>
                        <option value="15.5">15.5</option>
                        <option value="16">16</option>
                        <option value="16.5">16.5</option>
                        <option value="17">17</option>
                        <option value="17.5">17.5</option>
                        <option value="18">18</option>
                        <option value="18.5">18.5</option>
                        <option value="19">19</option>
                        <option value="19.5">19.5</option>
                        <option value="20">20</option>
                        <option value="20.5">20.5</option>
                        <option value="21">21</option>
                        <option value="21.5">21.5</option>
                        <option value="22">22</option>
                        <option value="22.5">22.5</option>
                        <option value="23">23</option>
                        <option value="23.5">23.5</option>
                        <option value="24">24</option>
                        <option value="24.5">24.5</option>
                        <option value="25">25</option>
                        <option value="25.5">25.5</option>
                        <option value="26">26</option>
                        <option value="26.5">26.5</option>
                        <option value="27">27</option>
                        <option value="27.5">27.5</option>
                        <option value="28">28</option>
                        <option value="28.5">28.5</option>
                        <option value="29">29</option>
                        <option value="29.5">29.5</option>
                        <option value="30">30</option>
                    </select>
                </div>
                <div class="col-sm-3 my-1">
                    {!! Form::label('height', 'Height(in):') !!}
                    {!! Form::selectRange('height', 48, 96); !!}
                </div>
                <div class="col-sm-3 my-1">
                    {!! Form::label('weight', 'Weight(lb):') !!}
                    {!! Form::selectRange('weight', 20, 400, ['class' => 'form-control']); !!}
                </div>
            </div>


        </div>
    </div>
      {!! Form::label('ethnicity', 'Ethnicity:') !!}
     {!! Form::select('ethnicity', ['Black' => 'Black','Asian' => 'Asian', 'Caucasian' => 'Caucasian','Eastern European' => 'Eastern European', 'East Indian' => 'East Indian','Hispanic' => 'Hispanic','Middle Eastern' => 'Middle Eastern', 'Native American' => 'Native American', 'No Answer' => 'No Answer','Other' => 'Other', 'Pacific Islander' => 'Pacific Islander'], 'Pacific Islander', ['class' => 'form-control']); !!}

     {!! Form::label('compensation', 'Compensation:') !!}
     {!! Form::select('compensation', ['Any' => 'Any', 'Depends on Assignment' => 'Depends on Assignment','Paid Assignments Only' => 'Paid Assignments Only', 'Time for Print' => 'Time for Print'], 'Time for Print', ['class' => 'form-control']); !!}

     {!! Form::label('experience', 'Experience:') !!}
     {!! Form::select('experience', ['No Experience' => 'No Experience','Some Experience' => 'Some Experience', 'Experience' => 'Experience','Very Experience' => 'Very Experience'], 'Very Experience', ['class' => 'form-control']); !!}

  <div class="card m-2 p-2" style="width: 50rem;">
	<div class="form-check-label card-body" >

      <h6 class="card-subtitle mb-2 ">Choose the genres you are available for</h6>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_0_0" value="no">
            <input class="form-check-input" name="check_0_0" type="checkbox" value="yes" >
			<label for="check_0_0" class="form-check-label">Acting</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_0_1" value="no">
			<input class="form-check-input" name="check_0_1" type="checkbox" value="yes">
			<label for="check_0_1" class="form-check-label">Art</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_0_2" value="no">
			<input class="form-check-input" name="check_0_2" type="checkbox" value="yes">
			<label for="check_0_2" class="form-check-label">Bodypaint</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_0_3" value="no">
			<input class="form-check-input" name="check_0_3" type="checkbox" value="yes">
			<label for="check_0_3" class="form-check-label">Cosplay</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_0_4" value="no">
			<input class="form-check-input" name="check_0_4" type="checkbox" value="yes">
			<label for="check_0_4" class="form-check-label">Dance</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_0_5" value="no">
			<input class="form-check-input" name="check_0_5" type="checkbox" value="yes">
			<label for="check_0_5" class="form-check-label">Editorial</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_0_6" value="no">
			<input class="form-check-input" name="check_0_6" type="checkbox" value="yes">
			<label for="check_0_6" class="form-check-label">Erotic</label>
		</div>


		<div class="form-check form-check-inline">
            <input type="hidden" name="check_1_0" value="no">
			<input class="form-check-input" name="check_1_0" type="checkbox" value="yes">
			<label for="check_1_0" class="form-check-label">Fashion</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_1_1" value="no">
			<input class="form-check-input" name="check_1_1" type="checkbox" value="yes">
			<label for="check_1_1" class="form-check-label">Fetish</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_1_2" value="no">
			<input class="form-check-input" name="check_1_2" type="checkbox" value="yes">
			<label for="check_1_2" class="form-check-label">Fit Modeling</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_1_3" value="no">
			<input class="form-check-input" name="check_1_3" type="checkbox" value="yes">
			<label for="check_1_3" class="form-check-label">Fitness</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_1_4" value="no">
			<input class="form-check-input" name="check_1_4" type="checkbox" value="yes">
			<label for="check_1_4" class="form-check-label">Glamour</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_1_5" value="no">
			<input class="form-check-input" name="check_1_5" type="checkbox" value="yes">
			<label for="check_1_5" class="form-check-label">Hair/Makeup</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_1_6" value="no">
			<input class="form-check-input" name="check_1_6" type="checkbox" value="yes">
			<label for="check_1_6" class="form-check-label">Lifestyle</label>
		</div>


		<div class="form-check form-check-inline">
            <input type="hidden" name="check_2_0" value="no">
			<input class="form-check-input" name="check_2_0" type="checkbox" value="yes">
			<label for="check_2_0" class="form-check-label">Lingerie</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_2_1" value="no">
			<input class="form-check-input" name="check_2_1" type="checkbox" value="yes">
			<label for="check_2_1" class="form-check-label">Parts Modeling</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_2_2" value="no">
			<input class="form-check-input" name="check_2_2" type="checkbox" value="yes">
			<label for="check_2_2" class="form-check-label">Performance Artist</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_2_3" value="no">
			<input class="form-check-input" name="check_2_3" type="checkbox" value="yes">
			<label for="check_2_3" class="form-check-label">Pinup</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_2_4" value="no">
			<input class="form-check-input" name="check_2_4" type="checkbox" value="yes">
			<label for="check_2_4" class="form-check-label">Pregnancy</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_2_5" value="no">
			<input class="form-check-input" name="check_2_5" type="checkbox" value="yes">
			<label for="check_2_5" class="form-check-label">Promotional Modeling</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_2_6" value="no">
			<input class="form-check-input" name="check_2_6" type="checkbox" value="yes">
			<label for="check_2_6" class="form-check-label">Runway</label>
		</div>


		<div class="form-check form-check-inline">
            <input type="hidden" name="check_3_0" value="no">
			<input class="form-check-input" name="check_3_0" type="checkbox" value="yes">
			<label for="check_3_0" class="form-check-label">Spokesperson / Host</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_3_1" value="no">
			<input class="form-check-input" name="check_3_1" type="checkbox" value="yes">
			<label for="check_3_1" class="form-check-label">Sports</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_3_02" value="no">
			<input class="form-check-input" name="check_3_2" type="checkbox" value="yes">
			<label for="check_3_2" class="form-check-label">Stunt</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_3_3" value="no">
			<input class="form-check-input" name="check_3_3" type="checkbox" value="yes">
			<label for="check_3_3" class="form-check-label">Swimwear</label>
		</div>
		<div class="form-check form-check-inline">
            <input type="hidden" name="check_3_4" value="no">
			<input class="form-check-input" name="check_3_4" type="checkbox" value="yes">
			<label for="check_3_4" class="form-check-label">Underwater</label>
		</div>
	</div>
</div>
     {!!  Form::submit('Submit!') !!}

{!! Form::close() !!}

@endsection
