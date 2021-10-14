@extends('beautymail::templates.widgets')

@section('content')

	@include('beautymail::templates.widgets.newfeatureStart')
    
		<h4 class="secondary"><strong>{{$order->username }}:: Pedido aprovado</strong></h4>
		<p>
			<b>{{$order->limit_count }}</b> de <b>{{ $order->limit }}</b> cartões aprovados para produção as <b>{{$order->approved_at }}</b>.
		</p>
		<p>
			Previsão para entrega :: 
			<b>{{ Carbon::createFromFormat('Y-m-d H:i:s', $order->approved_at)->addDays($order->prompt)->format('d/m/Y') }}</b>
		</p>

	@include('beautymail::templates.widgets.newfeatureEnd')

@stop