<table class="table table-separate table-head-custom table-checkable" id="kt_datatable_clear">
    <thead>
            <th>Contrato</th>
            <th>Titular</th>
            <th>Dependentes</th>

            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order_data as $D)
        <tr>
            <td>{{ $D->back_input1 }}</td>
            <td>{{ $D->back_input2 }}</td>
            <td>{{ $D->back_input3 }}</td>
        
            <td nowrap="nowrap">
                <form method="POST" action="{{ route('OrderDelelete') }}">
                    @csrf
                    <input type="hidden" name="itemid" value="{{ $D->id }}" />
                    <input type="hidden" name="orderid" value="{{ $order->order_id }}" />
                    <button type="submit" class="btn btn-sm btn-clean btn-icon" title="Deletar">
                        <i class="la la-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
