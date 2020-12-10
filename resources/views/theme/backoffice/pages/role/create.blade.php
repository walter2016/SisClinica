@extends('theme.backoffice.layouts.admin')


@section('title','Crear Rol')

@section('head')
@endsection

@section('breadcrumbs')

<li><a href="{{route('role.index')}}">Roles del Sistema</a></li>
<li>Crear Rol</li>
@endsection


@section('content') 
<div class="section">
	<p class="caption">Introduce los datos para crear un nuevo rol.</p>		
	<div class="divider"></div>
	<div class="section">
		<div class="row">
			<div class="col s12 m8 offset-m2">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Crear Rol</span>
						<div class="row">
							
							<form class="col s12" method="post" action="{{ route('role.store') }}">
								
								{{ csrf_field() }}	

								<div class="row">
									<div class="input-field col s12">
										<input id="name" type="text" name="name">
										<label for="name">Nombre del rol.</label>
										@if ($errors->has('name'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="description" class="materialize-textarea" name="description"></textarea>
										<label for="description">Descripcion del Rol</label>
										@if ($errors->has('description'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('description') }}</strong>
										</span>
										@endif
									</div>
									
								</div>
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
		</div>
	</div> 
</div>

@endsection

@section('foot')
@endsection
