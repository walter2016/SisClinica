
<script type="text/javascript" src="{{asset('assets/frontoffice/plugins/pickdate/picker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontoffice/plugins/pickdate/picker.date.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontoffice/plugins/pickdate/picker.time.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontoffice/plugins/pickdate/legacy.js')}}"></script>
<script type="text/javascript">



	var input_date = $('.datepicker').pickadate({
		min: true,
		formatSubmit: 'yyyy-m-d',
	});
	var date_picker = input_date.pickadate('picker');

	{{-- date_picker.set('disable',[1]) --}}
	
	var input_time = $('.timepicker').pickatime({
		min: 4,
		formatSubmit: 'HH:i',
	});
	var time_picker = input_time.pickatime('picker');

	{{--time_picker.set('disable',[4])--}}


	@if(!isset($appointment))
	$('select').{!! $material_select!!}();
	var speciality = $('#speciality');
	var doctor = $('#doctor');


	speciality.change(function(){
		$.ajax({
			url:"{{route('ajax.user_speciality')}}",
			method: 'GET',
			data: {
				speciality: speciality.val(),
			},
			success: function(data){
				doctor.empty();

				doctor.append('<option disabled selected>-- Selecciona un medico --</option>');

				$.each(data, function(index, element){
					doctor.append('<option value="'+ element.id +'">' + element.name + '</option>')
				});

				doctor.{!! $material_select!!}();
			}
		});
	});
	@endif


</script>
