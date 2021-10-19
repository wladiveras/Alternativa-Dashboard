@extends('beautymail::templates.widgets')

@section('content')

@include('beautymail::templates.widgets.newfeatureStart')

<h4 class="secondary"><strong>{{$order->username }}:: Pedido em produção</strong></h4>
<p>
<p>Olá {{$order->username }}, seu pedido foi recebido pela equipe de produção e está em confecção no momento.</p>
<p>Caso precise realizar um novo pedido, é só voltar a pagina do seu pedido e clicar no botão <b>"NOVO PEDIDO"</b>.</p>

AlternativaCard ::
<b>{{ Carbon::createFromFormat('Y-m-d H:i:s', now()) }}</b>
</p>

@include('beautymail::templates.widgets.newfeatureEnd')

@stop