@extends('theme.backoffice.layouts.admin')


@section('title',$role->name)

@section('head')
@endsection

@section('breadcrumbs')

<li><a href="{{route('role.index')}}">Roles del Sistema</a></li>
<li>{{ $role->name}}</li>
@endsection


@section('content') 
<div class="section">
	<p class="caption"><strong>Rol: </strong> {{ $role->name}}</p>
	<div class="divider"></div>
	<div id="basic-form" class="section">
		<div class="row">
			<div class="col s12 m8 offset-m2">

				<div class="card">
					<div class="card-content">
						<span class="card-title"> Usuario con el rol de {{ $role->name}}</span>
						
						<p><strong>Slug: </strong>{{$role->slug}}</p>
						<p><strong>Descripcion: </strong>{{$role->description}}</p>


					</div>

					<div class="card-action">
						<a href="{{route('role.edit',$role)}}">EDITAR</a>
						<a href="#" style="color:red" onclick="enviar_formulario()">ELIMINAR</a>
						

					</div>
				</div>


			</div>
		</div>

		<div class="row">
			<div class="col s12 m8 offset-m2">

				<div class="card">
					<div class="card-content">
						<span class="card-title"> Permisos del rol</span>
						<table>
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Slug</th>
									<th>Descripcion</th>
							
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($permissions as $permission)
									<tr>
									<td><a href="{{route('permission.show',$permission)}}">{{ $permission->name}}<a/></td>
									<td>{{ $permission->slug}}</td>
									<td>{{ $permission->description}}</td>
									

									<td><a href="{{route('permission.edit',$permission)}}">Editar</a></td>
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

<form method="post" action="{{ route('role.destroy',$role) }}"  name="delete_form">
	{{ csrf_field()}}
	{{ method_field('DELETE')}}

</form>



@endsection

@section('foot')
<script>
	function enviar_formulario()
	{
		swal({
			title: "¿Deseas eliminar este rol?",
			text: "Esta accion no se puede deshacer",
			type: "warning",
			showCancelButton: true,
			confirmButtonText: "Si, continuar",
			cancelButtonText: "No, Cancelar",
			closeOnCancel: false,
			closeOnConfirm: true
		}).then((result)=>{

			if(result.value){
				document.delete_form.submit();
			}else{
				swal(
					'Operacion cancelada',
					'registro no eliminado',
					'error'	


					)
			}
		});
	}



</script>


@endsection
