@extends('theme.backoffice.layouts.admin')


@section('title','Citas Programadas')

@section('head')
<link href='{{ asset('assets/plugins/fullcalendar/packages/core/main.css')}}' rel='stylesheet' />
<link href='{{ asset('assets/plugins/fullcalendar/packages/daygrid/main.css')}}' rel='stylesheet' />
<link href='{{ asset('assets/plugins/fullcalendar/packages/timegrid/main.css')}}' rel='stylesheet' />
@endsection
@section('breadcrumbs')
<li><a href="{{route('user.index')}}">Citas Programadas</a></li>

@endsection

@section('dropdown_settings')

@endsection

@section('content') 
<div class="section">
	<p class="caption"><strong>Citas del Sistema</strong></p>
	<div class="divider"></div>
	<div class="row">
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<div id="calendar"></div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>

@endsection

@section('foot')
<script src='{{ asset('assets/plugins/fullcalendar/packages/core/main.min.js')}}'></script>
<script src='{{ asset('assets/plugins/fullcalendar/packages/interaction/main.js')}}'></script>
<script src='{{ asset('assets/plugins/fullcalendar/packages/daygrid/main.js')}}'></script>
<script src='{{ asset('assets/plugins/fullcalendar/packages/Timegrid/main.js')}}'></script>

<script>

	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
			},
			editable: false,
			eventLimit: true, 
			events: {!! $appointments!!}
		});

		calendar.render();
	});

</script>

@endsection
