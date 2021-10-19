@extends("layouts.app")

@section("style")
<link href="{{ asset('assets/css/pages/wizard/wizard-1.css') }}" rel="stylesheet" />
@endsection

@section("header")
  <!-- HEADER -->
@endsection

@section("wrapper")
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="py-2 subheader py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container flex-wrap d-flex align-items-center justify-content-between flex-sm-nowrap">
            <!--begin::Info-->
            <div class="flex-wrap mr-1 d-flex align-items-center">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="my-2 mr-5 text-white font-weight-bold">{{ $order->limit_count }} de {{ $order->limit }} cartões gerados</h2>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <div class="my-2 d-flex align-items-center font-weight-bold">
                        <!--begin::Item-->
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="text-white flaticon2-shelter icon-1x"></i>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="mx-3 bg-white opacity-75 label label-dot label-sm"></span>
                        <a href=""
                            class="text-white opacity-75 text-hover-white hover-opacity-100">{{ env('APP_NAME') }}</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="mx-3 bg-white opacity-75 label label-dot label-sm"></span>
                        <a href="" class="text-white opacity-75 text-hover-white hover-opacity-100">Aprovação</a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <div class="d-flex align-items-center">
                <a href="{{ $order->order_link }}" target="_blank" class="px-6 py-3 mr-2 btn btn-transparent-white font-weight-bold">Proposta Comercial</a>
                <!--begin::Desconnect-->
                <form method="POST" action="{{ route('OrderLogout') }}">
                    @csrf
                    <div class="ml-2 dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="top" data-original-title="Desconectar">
                    
                        <button type="submit" class="px-6 py-3 btn btn-white font-weight-bold" >Sair</button>
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
                <div class="p-0 card-body">
                    <!--begin::Wizard-->
                    <div class="wizard wizard-1" id="kt_wizard" data-wizard-state="step-first"
                        data-wizard-clickable="false">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav border-bottom">
                            <div class="p-8 wizard-steps p-lg-10">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                      
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
        
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                            </div>
                        </div>
                        <!--end::Wizard Nav-->
                        <!--begin::Wizard Body-->
                        <div class="px-8 my-10 row justify-content-center my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-10">
                                <!--begin::Wizard Form-->
                                <div class="form">
                                    <!--begin::Wizard Step 1-->

                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">

                                        <div class="card card-custom gutter-b">
                                            <div class="flex-wrap py-3 card-header">
                                                <div class="card-title">
                                                    <h2 class="card-label"><br>#{{ $order->order_id }}: Aprovado
                                                        <span class="pt-2 d-block text-muted font-size-sm">
                                                            Aprovado em {{ Carbon::createFromFormat('Y-m-d H:i:s', $order->approved_at)->format('d/m/Y - H:i:s') }}<br>
                                                            Previsto para ser entregue em {{ Carbon::createFromFormat('Y-m-d H:i:s', $order->approved_at)->addDays($order->prompt)->format('d/m/Y') }}
                                                        </span>
                                                    </h2>
                                                </div>
                                            
                                            </div>
                                            <div class="card-body">
                                                <!--begin: Datatable-->
                                                <h4 class="text-center card-label"><br>
                                                    <p>
                                                        Olá <b>{{ $order->username }}<b>, seu pedido foi aprovado e enviado para a produção.<br>
                                                        O seu produto está previsto para ser entregue aproximadamente no dia 
                                                        <span style="color:rgb(163, 92, 92)">{{ Carbon::createFromFormat('Y-m-d H:i:s', $order->approved_at)->addDays($order->prompt)->format('d/m/Y') }}</span>.
                                                        Caso tenha alguma duvida pendente, por favor, entre em contato conosco através do numero.<br><br>
                                                        <b style="font-size:20px">(21) 2668-2128</b>
                                                    </p>
                                                    <p>
                                                        ou pelo whatsapp<br><br>
                                                        <a href="https://api.whatsapp.com/send?phone=552126673060"><font color="94d82d" style="font-size:50px" class="zoom fab fa-whatsapp"></font></a>
                                                    </p>
                                                </h4>
                                                <!--end: Datatable-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 1-->

                                    <!--begin::Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content" style="min-height:800px">
                                        <h4 class="mb-10 font-weight-bold text-dark">VISUALIZAR CARTÕES</h4>

                                        <div class="card-pagination">
                                            <ul id="pagination"></ul>
                                        </div>

                                        <div class="float-container" data-spy="scroll" data-target="#navigation">

                                            <div id="item-pages" class="item-pages">

                                                <!-- Start: Card -->
                                                @include('cards.card')
                                                <!-- End: Card -->
                                               
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 2-->

                                    <!--begin::Wizard Actions-->
                                    <form id="kt_form">
                                        
                                        <div class="pt-10 mt-5 d-flex justify-content-between border-top">
                                            <div class="mr-2">
                                                <button type="button"
                                                    class="py-4 btn btn-light-primary font-weight-bolder text-uppercase px-9"
                                                    data-wizard-type="action-prev">Voltar</button>
                                            </div>
                                            <div>
                                                @if($order->ready_at)
                                                <a 
                                                href="{{ route('OrderRenew') }}"
                                                type="button"
                                                data-toggle="tooltip" 
                                                data-theme="dark" 
                                                title="Ao fazer um novo pedido, todos os antigos dados serão apagados"
                                                class="py-4 btn btn-primary font-weight-bolder text-uppercase px-9"
                                                disabled>
                                                    Novo Pedido
                                                </a>
                                                @else
                                                <button
                                                type="button"
                                                data-toggle="tooltip" 
                                                data-theme="dark" 
                                                title="Ao fazer um novo pedido, todos os antigos dados serão apagados"
                                                class="py-4 btn btn-primary font-weight-bolder text-uppercase px-9"
                                                disabled>
                                                    Finalizando produção
                                                </button>
                                                @endif
                                                <button 
                                                type="button"
                                                class="py-4 btn btn-primary font-weight-bolder text-uppercase px-9"
                                                data-wizard-type="action-next">
                                                    Visualizar Cartões
                                                </button>
                                            </div>
                                        </div>
                                    <!--end::Wizard Actions-->
                                </div>
                                <!--end::Wizard Form-->
                            </div>
                        </div>
                        <!--end::Wizard Body-->
                    </div>
                    <!--end::Wizard-->
                </div>
                <!--end::Wizard-->
                <a href="https://api.whatsapp.com/send?phone=552126673060&text=*{{ $order->username }}*: preciso de ajuda com meu pedido." class="float" target="_blank">
                    <i class="fab fa-whatsapp wp-button"></i>
                </a>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@section("script")

<script src="{{ asset('assets/js/pages/custom/wizard/wizard-1.js') }}"></script>
<script src="{{ asset('assets/js/pages/crud/forms/widgets/jquery.twbsPagination.js') }}"></script>

<script>
    @if(Session::get('alert-type') == 'toaster')
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr.success("{!! Session::get('alert-response') !!}", "{!! Session::get('alert-title') !!}");
    @endif

    // Paginação dos Cards
    $(function () {
        var paginate = $('#item-pages');
        var paginateChildren = paginate.children();
        var totalItems = paginateChildren.length;
        var itemsPerPage = 8;
        var totalPages = Math.ceil(totalItems / itemsPerPage);

        if (totalItems > itemsPerPage) {

            var tempPage, startItem, lastItemm, currentPage;

            for (var page = 1; page <= totalPages; page++) {

                tempPage = $('<div id="item-page-' + page + '" class="item-page' + (page === 1 ? ' active' :
                    '') + '" />');
                startItem = (page - 1) * itemsPerPage;
                lastItem = startItem + itemsPerPage;
                if (lastItem >= totalItems) {
                    lastItem = totalItems;
                }
                while (startItem < lastItem) {
                    paginateChildren.eq(startItem).appendTo(tempPage);
                    startItem++;
                }

                paginate.append(tempPage);

                if (page === 1) {
                    currentPage = $('#item-page-' + page, paginate);
                }
            }

            $('#pagination').twbsPagination({
                totalPages: totalPages,
                visiblePages: 5,
                first: 'Primeiro',
                prev: 'Voltar',
                next: 'Proximo',
                last: 'Ultimo',
                onPageClick: function (event, page) {
                    currentPage.hide();
                    currentPage = $('#item-page-' + page, paginate);
                    currentPage.show();
                }
            });
        }
    });

</script>
@endsection
