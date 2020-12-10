<table id="my_table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Concepto</th>

			<th>Monto</th>
			<th>Estado</th>
			<th @if(isset($user)) colspan="2" @endif>Accion</th>

		</tr>
	</thead>
	<tbody>
		@forelse($invoices as $key => $invoice)
		<tr>
			<td>{{$invoice->id}}</td>
			<td>{{$invoice->concept()}}</td>

			<td>${{$invoice->amount}}</td>
			<td>{{$invoice->status}}</td>

			<td>
				<a href="#modal" data-invoice="{{$invoice->id}}" onclick="modal_invoice(this)" class="modal-trigger">
					Ver
				</a>
			</td>
			@if(isset($user))
				<td>
					<a href="{{ route('patient.invoices.edit', [$user, $invoice])}}">Editar</a>
				</td>
			@endif

		</tr>
		@empty
		<tr>
			<td colspan="5">No tiene registrada ninguna factura</td>
		</tr>
		@endforelse
	</tbody>
</table>