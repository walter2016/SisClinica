@extends('theme.backoffice.layouts.admin')


@section('title','Agendar cita para: ' .$user->name)

@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontoffice/plugins/pickdate/themes/default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontoffice/plugins/pickdate/themes/default.date.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontoffice/plugins/pickdate/themes/default.time.css')}}">
@endsection

@section('breadcrumbs')

<li><a href="{{route('user.index')}}">Usuarios del Sistema</a></li>
<li><a href="{{route('user.show',$user)}}">{{ $user->name}}</a></li>
<li><a href="">Agendar Cita</a></li>
@endsection

@section('dropdown_settings')
<li><a href="{{route('user.edit', $user)}}" class="grey-text text-darken-2">Editar Usuario</a></li>
@endsection



@section('content') 
<div class="section">
	<p class="caption"><strong>Usuario: </strong> {{ $user->name}}</p>
	<div class="divider"></div>
	<div id="basic-form" class="section">
		<div class="row">
			<div class="col m8 s12">
				<div class="card">

					<div class="card-content">
						<span class="card-title">@yield('title')</span>
						@include('theme.includes.user.patient.form_schedule',[
					'route' => route('patient.store_back_schedule', $user)
					])
					</div>
				</div>	
			</div>
			<div class="col s12 m4">
				@include('theme.backoffice.pages.user.includes.user_nav')
			</div>
		</div>

	</div>

	@endsection

	@section('foot')
	@include('theme.includes.user.patient.foot_schedule',[
		'material_select' => 'material_select'

		])

	@endsection
