@extends('theme.frontoffice.layouts.main')

@section('title', 'Mis Citas')


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
								<th>Especialista</th>
								<th>Fecha</th>
								<th>Hora</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Jorge</td>
								<td>15 de Julio</td>
								<td>15:00</td>
								<td>Pendiente</td>
							</tr>
						</tbody>
					</table>
					
				</div>
			</div>
			
		</div>

	</div>
	

</div>
@endsection()


@section('foot')
@endsection()