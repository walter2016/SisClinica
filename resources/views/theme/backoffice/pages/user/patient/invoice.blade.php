@extends('theme.backoffice.layouts.admin')


@section('title','Facturas de '. $user->name)

@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/datatable/jquery.dataTables.css')}}">
@endsection
@section('breadcrumbs')
<li><a href="{{route('user.index')}}">Usuarios del Sistema</a></li>
<li><a href="{{route('user.show', $user)}}">{{$user->name}}</a></li>
<li><a class="active" href="{{route('patient.invoices', $user)}}">{{'Facturas de '. $user->name}}</a></li>
@endsection

@section('dropdown_settings')
<li><a href="{{route('patient.schedule',$user)}}" class="grey-text text-darken-2">Agendar nueva Cita</a></li>
<li><a href="" class="grey-text text-darken-2">Añadir Facturas</a></li>
@endsection

@section('content') 
<div class="section">
	<p class="caption"><strong>{{'Facturas de '. $user->name}}</strong></p>
	<div class="divider"></div>
	<div class="row">
		<div id="basic-form" class="section">
			<div class="col s12 m8">
				<div class="card">
					<div class="card-content">
					@include('theme.includes.user.patient.invoice_table')
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				@include('theme.backoffice.pages.user.includes.user_nav')
			</div>
		</div>
	</div>
	@include('theme.includes.user.patient.invoice_modal')
</div>

@endsection

@section('foot')
<script src='{{ asset('assets/plugins/datatable/jquery.dataTables.js')}}'></script>


<script type="text/javascript">
	$(document).ready( function () {
    $('#my_table').DataTable();
} );


	
</script>
@include('theme.includes.user.patient.invoice_foot')

@endsection
