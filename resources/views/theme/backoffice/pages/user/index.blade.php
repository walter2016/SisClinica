@extends('theme.backoffice.layouts.admin')


@section('title','Usuarios del sistema')

@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/datatable/jquery.dataTables.css')}}">
@endsection
@section('breadcrumbs')

<li><a href="{{route('user.index')}}">Usuarios del Sistema</a></li>
@endsection

@section('dropdown_settings')
<li><a href="{{route('user.create')}}" class="grey-text text-darken-2">Crear Usuarios</a></li>
@endsection

@section('content') 
<div class="section">
	<p class="caption"><strong>Usuarios del Sistema</strong></p>
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
									<th>Edad</th>
									<th>Correo</th>
									<th>Roles</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
								<tr>
									<td><a href="{{route('user.show', $user)}}">{{$user->name}}</a></td>
									<td>{{$user->age()}}</td>
									<td>{{$user->email}}</td>
									<td>
										{{$user->list_roles()}}
									</td>
									<td><a href="{{route('user.edit',$user)}}">Editar</a></td>
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
