@extends('theme.backoffice.layouts.admin')


@section('title',$user->name)

@section('head')
@endsection

@section('breadcrumbs')

<li><a href="{{route('user.index')}}">Usuarios del Sistema</a></li>
<li>{{ $user->name}}</li>
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
			<div class="col s12 m8 ">

				<div class="card">
					<div class="card-content">
						<span class="card-title">{{ $user->name}}</span>
						<p><strong>Edad: </strong>{{$user->age()}}</p>
					</div>

					<div class="card-action">
						<a href="{{route('user.edit',$user)}}">EDITAR</a>
						<a href="#" style="color:red" onclick="enviar_formulario()">ELIMINAR</a>
						

					</div>
				</div>


			</div>
			<div class="col s12 m4">
				@include('theme.backoffice.pages.user.includes.user_nav')
			</div>
		</div>

	</div>

	<form method="post" action="{{ route('user.destroy',$user) }}"  name="delete_form">
		{{ csrf_field()}}
		{{ method_field('DELETE')}}

	</form>



	@endsection

	@section('foot')
	<script>
		function enviar_formulario()
		{
			swal({
				title: "¿Deseas eliminar este usuario?",
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
