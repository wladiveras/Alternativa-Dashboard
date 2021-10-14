@extends('beautymail::templates.widgets')

@section('content')

	@include('beautymail::templates.widgets.newfeatureStart')
    
		<h4 class="secondary"><strong>{{$order->username }}:: Recorrência de pedido</strong></h4>
		<p>
			<b>CPF/CNPJ </b> {{ $order->order_id }}<br>
			<b>Email:   </b> {{ $order->token }}<br>
            <b>Quantidade de Cartões: </b> {{ $order->limit }}<br>
            <b>Descrição: </b><br>  {{ $order->description }}<br>
		<p>
			Operação realizada em :: 
			<b>{{ Carbon::createFromFormat('Y-m-d H:i:s', now()) }}</b>
		</p>

	@include('beautymail::templates.widgets.newfeatureEnd')

@stop