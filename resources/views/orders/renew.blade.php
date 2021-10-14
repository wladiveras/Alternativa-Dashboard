@extends("layouts.app")

@section("style")
<link href="{{ asset('assets/css/pages/wizard/wizard-1.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section("header")
<!-- HEADER -->
@endsection

@section("wrapper")
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="text-white font-weight-bold my-2 mr-5">{{ $order->username }} - Refazer pedido</h2>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <!--begin::Item-->
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href=""
                            class="text-white text-hover-white opacity-75 hover-opacity-100">{{ env('APP_NAME') }}</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Aprovação</a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <div class="d-flex align-items-center">
                <a href="{{ $order->order_link }}" target="_blank"
                    class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Proposta Comercial</a>
                <!--begin::Desconnect-->
                <form method="POST" action="{{ route('OrderLogout') }}">
                    @csrf
                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="top"
                        data-original-title="Desconectar">

                        <button type="submit" class="btn btn-white font-weight-bold py-3 px-6">Sair</button>
                    </div>
                </form>
                <!--end::Desconnect-->
            </div>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin::Wizard-->
                    <div class="wizard wizard-1">

                        <!--begin::Wizard Body-->
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-10">
                                <!--begin::Wizard Form-->
                                <div class="my-5">
                                    <h5 class="text-dark font-weight-bold mb-10">Refazer pedido</h5>
                                    <p>
                                        Informe a quantidade de cartões para seu novo pedido, caso precise de algo
                                        adicional como, cordões, porta-crachá entre outros, informe na descrição.
                                        <b>Atenção<b>, ao refazer pedido todas as informações anteriores serão
                                                <b>DELETADAS</b> do sistema.
                                    </p>
                                    
                                    <br>
                                    <br>

                                    <center>
                                        <img class="preview-card zoom" src="{{ asset('assets/media/cards/uploads/'. $order->order_id .'/'. $order->card_front) }}"
                                            width="213.54" height="332.59" />
                                        @if($order->card_back)
                                        <img class="preview-card zoom" src="{{ asset('assets/media/cards/uploads/'. $order->order_id .'/'. $order->card_back) }}"
                                            width="213.54" height="332.59" />
                                        @endif
                                    </center>

                                    <form action="{{ route('OrderRenewRequest') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="order_id" value="{{ $order->order_id }}" />

                                        <div class="form-row align-items-center">
                                            <div class="col-auto col-xl-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Quantidade de Cartões</div>
                                                    </div>
                                                    <input type="number" class="form-control" name="amount"
                                                        placeholder="20">
                                                </div>
                                            </div>

                                            <div class="col-auto col-xl-6">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Descrição do pedido</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="description"
                                                        placeholder="Ex: 20 crachás, 20 cordões 20mm">
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary mb-2">Refazer
                                                    pedido</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Wizard Form-->
                                </div>
                            </div>
                            <!--end::Wizard Body-->
                        </div>
                        <!--end::Wizard-->
                    </div>
                    <!--end::Wizard-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
    @endsection

    @section("script")
    @endsection
