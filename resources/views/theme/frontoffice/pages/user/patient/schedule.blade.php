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

					@include('theme.includes.user.patient.form_schedule',[
						'route' => route('frontoffice.patient.store_schedule')

						])

				</div>
			</div>	
		</div>
	</div>
</div>
@endsection()


@section('foot')

@include('theme.includes.user.patient.foot_schedule',[
		'material_select' => 'formSelect'

		])


@endsection()