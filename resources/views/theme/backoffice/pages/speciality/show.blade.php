@extends('theme.backoffice.layouts.admin')


@section('title',$speciality->name)

@section('head')
@endsection

@section('breadcrumbs')

<li><a href="{{route('speciality.index')}}">Especialidades Medicas</a></li>
<li><a href="" class="active">{{ $speciality->name}}</a></li>
@endsection

@section('dropdown_settings')
<li><a href="{{route('speciality.edit',$speciality)}}" class="grey-text text-darken-2">Editar Especialidad</a></li>
@endsection


@section('content') 
<div class="section">
	<p class="caption"><strong>Especialidad: </strong> {{ $speciality->name}}</p>
	<div class="divider"></div>
	<div id="basic-form" class="section">
		<div class="row">
			<div class="col s12 m8 offset-m2">

				<div class="card">
					<div class="card-content">
						<span class="card-title"> {{ $speciality->name}}</span>
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Correo</th>
								</tr>
							</thead>
							<tbody>
								@forelse($users as $user)
								<tr>
									<td>{{$user->id}}</td>
									<td>
										<a href="{{route('user.show',$user)}}" target="_blanck">
											{{$user->name}}
										</a>
									</td>
									<td>{{$user->email}}</td>
								</tr>
								@empty
								<tr>
									<td colspan="3">No hay medicos registrados</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="card-action">
						<a href="{{route('speciality.edit',$speciality)}}">EDITAR</a>
						<a href="#" style="color:red" onclick="enviar_formulario()">ELIMINAR</a>
						

					</div>
				</div>


			</div>
		</div>

	</div> 
</div>

<form method="post" action="{{ route('speciality.destroy',$speciality) }}"  name="delete_form">
	{{ csrf_field()}}
	{{ method_field('DELETE')}}

</form>



@endsection

@section('foot')
<script>
	function enviar_formulario()
	{
		swal({
			title: "¿Deseas eliminar esta especialidad?",
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
