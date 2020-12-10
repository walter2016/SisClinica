@extends('theme.backoffice.layouts.admin')


@section('title','Asignar Especialdiades')

@section('head')
@endsection

@section('breadcrumbs')

<li><a href="{{route('user.index')}}">Usuarios del Sistema</a></li>
<li><a href="{{route('user.show', $user)}}">{{$user->name}}</a></li>
<li><a href="" class="active">Asignar Especialidades</a></li>
@endsection


@section('content') 
<div class="section">
	<p class="caption">Selecciona las especialidades que deseas asignar.</p>		
	<div class="divider"></div>
	<div class="section">
		<div class="row">
			<div class="col s12 m8 ">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Asignar Especialidades</span>
						<div class="row">
							
							<form class="col s12" method="post" action="{{route('user.speciality_assignment', $user)}}">
								
								{{ csrf_field() }}	


								@foreach($specialities as $speciality)
								<p>
									<input 
									type="checkbox" 
									id="{{$speciality->id}}"  
									name="specialities[]" 
									value="{{ $speciality->id}}"  
									@if($user->has_speciality($speciality->id)) 
									checked 
									@endif/>
									<label for="{{$speciality->id}}">
										<span>{{$speciality->name}}</span>
									</label>
								</p>
								@endforeach()
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
