@extends('theme.frontoffice.layouts.main')

@section('title', 'Facturación')


@section('head')
@endsection()

@section('nav')
@endsection()

@section('content')
<div class="container">
	<div class="row">
		@include('theme.frontoffice.pages.user.includes.nav')
		<div class="col m8 s12">
			<div class="card">
				
				<div class="card-content">
					<span class="card-title">@yield('title')</span>
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Concepto</th>
								<th>Monto</th>
								<th>Estado</th>
								<th>Accion</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Consulta con Dr Jorge</td>
								<th>$10</th>
								<th>Pendeinte</th>
								<td><a href="#modal" data-prescription="1" class="modal-trigger">Ver</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
		</div>

	</div>
	<div class="modal" id="modal">
		<div class="modal-content">
			<h4>Titulo</h4>
			<p>Hola Mundo</p>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close waves-effect btn-flat">Cerrar</a>
			<a href="#!" class="waves-effect btn-flat">Imprimir</a>
		</div>
	</div>

</div>
@endsection()


@section('foot')
<script type="text/javascript">
	$('.modal').modal();

</script>
@endsection()