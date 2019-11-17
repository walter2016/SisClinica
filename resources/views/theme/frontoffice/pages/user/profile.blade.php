@extends('theme.frontoffice.layouts.main')

@section('title','Perfil de '. $user->name)



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
					<p><strong>Nombre: </strong>{{$user->name}}</p>
					<p><strong>Edad: </strong>{{$user->age()}}</p>
					<p><strong>Email: </strong>{{$user->email}}</p>
					<p><strong>Miembro desde: </strong>{{$user->created_at->diffForHumans()}}</p>
				</div>
			</div>
			
		</div>

	</div>
	

</div>
@endsection()


@section('foot')
@endsection()