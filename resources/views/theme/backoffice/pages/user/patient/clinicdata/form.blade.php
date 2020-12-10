@extends('theme.backoffice.layouts.admin')
@section('title', 'Editar historia clínica')
@section('head')
@endsection
@section('breadcrumbs')
{{-- <li><a href=""></a></li> --}}
<li><a href="{{ route('user.index') }}">Usuarios del sistema</a></li>
<li>Historia clínica {{ $user->name }}</li>
@endsection
@section('content')
<div class="section">
	<p class="caption">Actualiza los datos de historia clínica del usuario</p>
	<div class="divider"></div>
	<div class="section">
		<div class="row">
			<div class="col s12 m8 offset-m2">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Editar historia clínica</span>
						<div class="row">
							<form class="col s12" method="post" action="{{ route('clinic_data.store', $user) }}">
								{{ csrf_field() }}
								<u><h5>INFORMACION GENERAL:</h5></u>
								<div class="row">
									<div class="input-field col s12">
										<input
										id="dirrection"
										type="text"
										name="dirrection"
										value="{{ $user->clinic_data('dirrection', $datas) }}"
										required>
										<label for="dirrection">Dirrección</label>
										@if ($errors->has('dirrection'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('dirrection') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input
										id="dui"
										type="text"
										name="dui"
										value="{{ $user->clinic_data('dui', $datas) }}"
										required>
										<label for="dui">Documento de Identidad</label>
										@if ($errors->has('dui'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('dui') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input
										id="profesion"
										type="text"
										name="profesion"
										value="{{ $user->clinic_data('profesion', $datas) }}"
										required>
										<label for="profesion">Profesión u oficio </label>
										@if ($errors->has('profesion'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('profesion') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input
										id="name_father"
										type="text"
										name="name_father"
										value="{{ $user->clinic_data('name_father', $datas) }}"
										required>
										<label for="name_father">Nombre del Padre</label>
										@if ($errors->has('name_father'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('name_father') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input
										id="name_mother"
										type="text"
										
										name="name_mother"
										value="{{ $user->clinic_data('name_mother', $datas) }}"
										required>
										<label for="name_mother">Nombre de la Madre</label>
										@if ($errors->has('name_mother'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('name_mother') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input
										id="estado_civil"
										type="text"
										class="autocomplete"
										name="estado_civil"
										value="{{ $user->clinic_data('estado_civil', $datas) }}"
										required>
										<label for="estado_civil">Estado Civil</label>
										@if ($errors->has('estado_civil'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('estado_civil') }}</strong>
										</span>
										@endif
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input
										id="conyugue"
										type="text"
										class="autocomplete"
										name="conyugue"
										value="{{ $user->clinic_data('conyugue', $datas) }}"
										required>
										<label for="conyugue">Nombre del Conyugue *</label>
										@if ($errors->has('conyugue'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('conyugue') }}</strong>
										</span>
										@endif
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input
										id="sexo"
										type="text"
										class="autocomplete"
										name="sexo"
										value="{{ $user->clinic_data('sexo', $datas) }}"
										required>
										<label for="sexo">Sexo</label>
										@if ($errors->has('sexo'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('sexo') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<u><h5>SIGNOS VITALES:</h5></u>
								<div class="row">
									<div class="input-field col s12">
										<input
										id="temperatura"
										type="text"
										name="temperatura"
										value="{{ $user->clinic_data('temperatura', $datas) }}"
										required>
										<label for="temperatura">Temperatura (°C)</label>
										@if ($errors->has('temperatura'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('temperatura') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input
										id="altura"
										type="text"
										name="altura"
										value="{{ $user->clinic_data('altura', $datas) }}"
										required>
										<label for="altura">Altura (cm)</label>
										@if ($errors->has('altura'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('altura') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input
										id="peso"
										type="text"
										name="peso"
										value="{{ $user->clinic_data('peso', $datas) }}"
										required>
										<label for="peso">Peso: (lb)</label>
										@if ($errors->has('peso'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('peso') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input
										id="presion"
										type="text"
										name="presion"
										value="{{ $user->clinic_data('presion', $datas) }}"
										required>
										<label for="presion">Presión Alterial (mm de Hg)</label>
										@if ($errors->has('presion'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('presion') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input
										id="pulso"
										type="text"
										name="pulso"
										value="{{ $user->clinic_data('pulso', $datas) }}"
										required>
										<label for="pulso">Pulso Cardiaco</label>
										@if ($errors->has('pulso'))
										<span class="invalid-feedback" role="alert">
											<strong style="color: red">{{ $errors->first('pulso') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<label>* En caso que Aplique colocar nombre, caso contrario colocar N/A</label>
										<button class="btn waves-effect waves-light right" type="submit">Actualizar
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

<script type="text/javascript">
	

	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.autocomplete');
		var instances = M.Autocomplete.init(elems, options);
	});


  // Or with jQuery

  $(document).ready(function(){
  	$('#sexo').autocomplete({
  		data: {
  			"Hombre": null,
  			"Mujer": null

  		},
  	});
  });


  $(document).ready(function(){
  	$('#estado_civil').autocomplete({
  		data: {
  			"Casado/a": null,
  			"Soltero/a": null,
  			"Divorciado/a": null,
  			"Viudo/a": null

  		},
  	});
  });



</script>
@endsection