@extends('theme.backoffice.layouts.admin')


@section('title',$permission->name)

@section('head')
@endsection

@section('breadcrumbs')
<li><a href="{{route('role.index')}}">Roles del sistema</a></li>
<li><a href="{{route('role.show', $permission->role)}}">{{$permission->role->name}}</a></li>
<li>{{ $permission->name}}</li>
@endsection


@section('content') 
<div class="section">
	<p class="caption"><strong>Permiso: </strong> {{ $permission->name}}</p>
	<div class="divider"></div>
	<div id="basic-form" class="section">
		<div class="row">
			<div class="col s12 m8 offset-m2">

				<div class="card">
					<div class="card-content">
						<span class="card-title">{{$permission->name}}</span>
						
						<p><strong>Slug: </strong>{{$permission->slug}}</p>
						<p><strong>Descripcion: </strong>{{$permission->description}}</p>


					</div>

					<div class="card-action">
						<a href="{{route('permission.edit',$permission)}}">EDITAR</a>
						<a href="#" style="color:red" onclick="enviar_formulario()">ELIMINAR</a>
						

					</div>
				</div>


			</div>
		</div>
	</div> 
</div>

<form method="post" action="{{ route('permission.destroy',$permission) }}"  name="delete_form">
	{{ csrf_field()}}
	{{ method_field('DELETE')}}

</form>



@endsection

@section('foot')
<script>
	function enviar_formulario()
	{
		swal({
			title: "¿Deseas eliminar este permiso?",
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
