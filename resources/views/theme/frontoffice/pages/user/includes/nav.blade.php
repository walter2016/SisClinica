{{-- Nuestro menu laterial--}}
<div class="col m4 s12">
	<div class="collection">
		<a
			href="{{route('frontoffice.user.profile')}}"
			class="collection-item {!! active_class(route('frontoffice.user.profile'))!!}">
			Perfil
		</a>

		@if(auth()->user()->has_role(config('app.patient_role')))
		<a
			href="{{route('frontoffice.patient.schedule')}}"
			class="collection-item {!! active_class(route('frontoffice.patient.schedule'))!!}">
			Agendar Cita
		</a>
		<a
			href="{{route('frontoffice.patient.appointments')}}"
			class="collection-item {!! active_class(route('frontoffice.patient.appointments'))!!}">
			Mis citas
		</a>
		{{--
		<a
			href="{{route('frontoffice.patient.prescriptions')}}"
			class="collection-item {!! active_class(route('frontoffice.patient.prescriptions'))!!}">
			Recetas
		</a>
			--}}
		<a
			href="{{route('frontoffice.patient.invoices')}}"
			class="collection-item {!! active_class(route('frontoffice.patient.invoices'))!!}">
			Facturación
		</a>
		@endif
		<a
			href="{{route('frontoffice.user.edit', [auth()->user(), 'view=frontoffice'])}}"
			class="collection-item {{ active_class(route('frontoffice.user.edit', auth()->user()))}}">
			Editar Perfil
		</a>
		<a
			href="{{route('frontoffice.user.edit_password')}}"
			class="collection-item {{ active_class(route('frontoffice.user.edit_password'))}}">
			Modificar contraseña
	  </a>
	  @if(auth()->user()->has_role(config('app.admin_role')) || auth()->user()->has_role(config('app.doctor_role')) || auth()->user()->has_role(config('app.secretary_role')))
	  <a
			href="{{route('admin.show')}}"
			class="collection-item ">
			Administracción
		</a>



	  @endif
	  <a
			href="{{ route('logout') }}"
			onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" 
			class="collection-item ">
			Salir
	  </a>
	   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
	</div>

</div>
