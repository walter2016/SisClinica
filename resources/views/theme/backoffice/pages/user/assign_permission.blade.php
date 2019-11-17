@extends('theme.backoffice.layouts.admin')


@section('title','Asignar permisos')

@section('head')
@endsection

@section('breadcrumbs')

<li><a href="{{route('user.index')}}">Usuarios del Sistema</a></li>
<li><a href="{{route('user.show', $user)}}">{{$user->name}}</a></li>
<li>Asignar permisos</li>
@endsection


@section('content') 
<div class="section">
	<p class="caption">Selecciona los permisos que deseas asignar.</p>		
	<div class="divider"></div>
	<div class="section">
		<div class="row">
			<div class="col s12 m8 ">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Asignar Permisos</span>
						<div class="row">
							
							<form class="col s12" method="post" action="{{route('user.permission_assignment', $user)}}">
								
								{{ csrf_field() }}	

								@foreach($roles as $role)
								<p>{{$role->name}}</p>
								@foreach($role->permissions as $permission)
								<p>

									<input type="checkbox" name="permissions[]" id="{{$permission->id}}" value="{{$permission->id}}" @if($user->has_permission($permission->id)) checked @endif >
									<label for="{{$permission->id}}"></label>
									<span>{{$permission->name}}</span>
								</p>
								@endforeach

								@endforeach

								<div class="row">
									<div class="input-field col s12">
										<button class="btn waves-effect waves-light right" type="submit" name="action">Guardar
											<i class="material-icons right">send</i>
										</button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col s12 m4">
				@include('theme.backoffice.pages.user.includes.user_nav')
			</div>
		</div>
	</div> 
</div>

@endsection

@section('foot')
@endsection
