<table class="table table-separate table-head-custom table-checkable" id="kt_datatable_clear">
    <thead>
            <th>ID</th>
            <th>Cartão</th>
            <th style="text-align:right">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order_data as $D)
        <tr>
            <td>{{ $D->id }}</td>
            <td>
                <a href="{{ asset('assets/media/users/'. $order->order_id .'/'. $D->front_art) }}" target="_blank">
                    <img class="zoom" src="{{ asset('assets/media/users/'. $order->order_id .'/'. $D->front_art) }}" style="border-radius:50%;width:50px;height:50px;"/>
                </a>
            </td>
            
            <td nowrap="nowrap" style="text-align:right">
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
