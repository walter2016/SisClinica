<nav class="blue darken-4">
	<div class="nav-wrapper container">
		<a href="#" class="brand-logo">Clinica</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="">{{ Auth::user()->name }} </a></li>
			@yield('nav')
		</ul>
	</div>
</nav>