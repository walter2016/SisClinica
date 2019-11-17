@extends('theme.frontoffice.layouts.main')

@section('title','Agendar una Cita')



@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontoffice/plugins/pickdate/themes/default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontoffice/plugins/pickdate/themes/default.date.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontoffice/plugins/pickdate/themes/default.time.css')}}">
@endsection()

@section('nav')
@endsection()

@section('content')
<div class="container">
	<div class="row">
		@include('theme.frontoffice.pages.user.includes.nav')
		<div class="col m8 s12">
			<div class="card">
				
				<div class="card-content">
					<span class="card-title">@yield('title')</span>
					<form action="#" method="POST">
						{{csrf_field()}}
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">people</i>
								<select name="doctor">
									<option value="1">Raul</option>
									<option value="2">Carlos</option>
									<option value="3">Julio</option>
								</select>
								<label>Selecciona al doctor</label>

							</div>
						</div>


						<div class="row">
							<div class="input-field col s12 m6">
								<i class="material-icons prefix">today</i>
								<input id="datepicker" type="text" name="date" class="datepicker">
								<label for="datepicker">Selecciona una Fecha</label>
							</div>
							<div class="input-field col s12 m6">
								<i class="material-icons prefix">access_time</i>
								<input id="timepicker" type="text" name="time" class="timepicker">
								<label for="timepicker">Selecciona un Horario</label>
							</div>


						</div>
						<div class="row">
							<button class="btn waves-effect waves-light" type="submit">Agendar <i class="material-icons right">send</i></button>

						</div>


					</form>
				</div>
			</div>
			
		</div>

	</div>
	

</div>
@endsection()


@section('foot')
<script type="text/javascript" src="{{asset('assets/frontoffice/plugins/pickdate/picker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontoffice/plugins/pickdate/picker.date.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontoffice/plugins/pickdate/picker.time.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontoffice/plugins/pickdate/legacy.js')}}"></script>
<script type="text/javascript">
	$('select').formSelect();
	var input_date = $('.datepicker').pickadate({
		min: true 
	});
	var date_picker = input_date.pickadate('picker');

	{{-- date_picker.set('disable',[1]) --}}
	
	var input_time = $('.timepicker').pickatime({
		min: 4
	});
	var time_picker = input_time.pickatime('picker');

	{{--time_picker.set('disable',[4])--}}
</script>



@endsection()