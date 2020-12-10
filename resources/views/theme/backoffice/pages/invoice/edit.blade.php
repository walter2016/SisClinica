@extends('theme.backoffice.layouts.admin')


@section('title','Editar Factura ' .  $invoice->id)

@section('head')
@endsection

@section('breadcrumbs')


<li>Editar Factura {{$invoice->id}} </li>
@endsection


@section('content') 
<div class="section">
	<p class="caption">Introduce los datos para editar la factura.</p>		
	<div class="divider"></div>
	<div class="section">
		<div class="row">
			<div class="col s12 m8 offset-m2">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Editar Fcatura</span>
						<div class="row">
							
							<form class="col s12" method="post" action="{{ route('patient.invoices.update',[$user,$invoice])}}">
								
								{{ csrf_field() }}	


								<div class="row">
									<div class="input-field col s12">
										<input id="amount" type="text" name="amount" value="{{$invoice->amount}}">
										<label for="amount">Monto de l afactura.</label>
										@if ($errors->has('amount'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('amount') }}</strong>
										</span>
										@endif
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<select name="status">
											<option value="pending"  @if($invoice->status == 'pending' ) selected="" @endif>Pendiente</option>
											<option value="approved" @if($invoice->status == 'approved' ) selected="" @endif>Pagado</option>
											<option value="rejected" @if($invoice->status == 'rejected' ) selected="" @endif>Rechazado</option>
											<option value="cancelled"@if($invoice->status == 'cancelled' ) selected="" @endif>Cancelado</option>
											<option value="refunded" @if($invoice->status == 'refunded' ) selected="" @endif>Devolucion</option>
										</select>
										@if ($errors->has('status'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('status') }}</strong>
										</span>
										@endif
										
									</div>
									
								</div>

								<div class="row">
									<div class="input-field col s12">
										<button class="btn waves-effect waves-light right" type="submit" name="action">Actualizar
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
