@extends('theme.backoffice.layouts.admin')


@section('title','Especialidades del sistema')

@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/datatable/jquery.dataTables.css')}}">
@endsection
@section('breadcrumbs')

<li><a href="{{route('speciality.index')}}">Especialidades Medicas</a></li>
@endsection

@section('dropdown_settings')
<li><a href="{{route('speciality.create')}}" class="grey-text text-darken-2">Crear Especialidades</a></li>
@endsection

@section('content') 
<div class="section">
	<p class="caption"><strong>Especialidades Medicas</strong></p>
	<div class="divider"></div>
	<div id="basic-form" class="section">
		<div class="row">
			<div class="col s12 ">
				<div class="card">
					<div class="card-content">
						<table id="my_table">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Cuenta</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($specialities as $speciality)
									<tr>
									<td><a href="{{route('speciality.show',$speciality)}}">{{ $speciality->name}}<a/></td>
									<td>{{$speciality->users->count()}}</td>
									<td><a href="{{route('speciality.edit',$speciality)}}">Editar</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>

@endsection

@section('foot')
<script src='{{ asset('assets/plugins/datatable/jquery.dataTables.js')}}'></script>


<script type="text/javascript">
	$(document).ready( function () {
    $('#my_table').DataTable();
} );

</script>
@endsection
