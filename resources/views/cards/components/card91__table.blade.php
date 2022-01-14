{{-- <table class="table table-separate table-head-custom table-checkable" id="kt_datatable_clear"> --}}
<table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Detalhe</th>

            <th>Nome</th>

            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach($order_data as $D)
        <tr>
            <td>{{$D->id}}</td>
            <td>{{ asset('assets/media/users/'. $order->order_id .'/'.$D->front_avatar)}}</td>

            <td>{{ $D->front_input1 }}</td>

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