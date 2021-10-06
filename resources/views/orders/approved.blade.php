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
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="text-white font-weight-bold my-2 mr-5">{{ $order->limit_count }} de {{ $order->limit }} cartões gerados</h2>
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
                <a href="{{ $order->order_link }}" target="_blank" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Proposta Comercial</a>
                <!--begin::Desconnect-->
                <form method="POST" action="{{ route('OrderLogout') }}">
                    @csrf
                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Desconectar">
                    
                        <button type="submit" class="btn btn-white font-weight-bold py-3 px-6" >Sair</button>
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
                    <div class="wizard wizard-1" id="kt_wizard" data-wizard-state="step-first"
                        data-wizard-clickable="false">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav border-bottom">
                            <div class="wizard-steps p-8 p-lg-10">
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
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-10">
                                <!--begin::Wizard Form-->
                                <div class="form">
                                    <!--begin::Wizard Step 1-->

                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">

                                        <div class="card card-custom gutter-b">
                                            <div class="card-header flex-wrap py-3">
                                                <div class="card-title">
                                                    <h2 class="card-label"><br>#{{ $order->order_id }}: Aprovado
                                                        <span class="d-block text-muted pt-2 font-size-sm">
                                                            Aprovado em {{ Carbon::createFromFormat('Y-m-d H:i:s', $order->approved_at)->format('d/m/Y - H:i:s') }}<br>
                                                            Previsto para ser entregue em {{ Carbon::createFromFormat('Y-m-d H:i:s', $order->approved_at)->addDays($order->prompt)->format('d/m/Y') }}
                                                        </span>
                                                    </h2>
                                                </div>
                                            
                                            </div>
                                            <div class="card-body">
                                                <!--begin: Datatable-->
                                                <h4 class="card-label text-center"><br>
                                                    <p>
                                                        Olá <b>{{ $order->username }}<b>, seu pedido foi aprovado e enviado para a produção.<br>
                                                        O seu produto está previsto para ser entregue aproximadamente no dia 
                                                        <span style="color:red">{{ Carbon::createFromFormat('Y-m-d H:i:s', $order->approved_at)->addDays($order->prompt)->format('d/m/Y') }}</span>.
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
                                        
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button"
                                                    class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                                    data-wizard-type="action-prev">Voltar</button>
                                            </div>
                                            <div>
                                              
                                                <button type="button"
                                                    class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4"
                                                    data-wizard-type="action-next">Visualizar Cartões</button>
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
