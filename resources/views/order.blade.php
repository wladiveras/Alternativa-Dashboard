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
                                        <i class="wizard-icon flaticon-list"></i>
                                        <h3 class="wizard-title">1. Informações</h3>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
        
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <i class="wizard-icon flaticon-responsive"></i>
                                        <h3 class="wizard-title">2. Placa de Aprovação</h3>
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
                                                @if ($order->limit > $order->limit_count)
                                                <div class="card-title">
                                                    <h3 class="card-label"><br>Informações
                                                        <span class="d-block text-muted pt-2 font-size-sm">
                                                            Informe os dados a ser impresso na frente e verso dos
                                                            cartões, insira as informações clicando no botão
                                                            <b>Adicionar Dados</b>.
                                                        </span>
                                                    </h3>
                                                </div>
                                                
                                                <div class="card-toolbar">
                                                    <!--begin::Button-->
                                                    <a class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#insert-data">
                                                        <span class="svg-icon svg-icon-md">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                                                    <path
                                                                        d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>Adicionar dados</a>
                                                    <!--end::Button-->
                                                    <!-- 
                                                        <a class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#insert-csv">
                                                        <span class="svg-icon svg-icon-md">
                                                        </span>Enviar CSV</a>
                                                    -->
                                                </div>

                                                @else
                                                <div class="card-title">
                                                    <h3 class="card-label"><br>Informações
                                                        <span class="d-block text-muted pt-2 font-size-sm">
                                                            <b>{{ $order->username }}</b>, você já preencheu os dados do seu pacote. Antes de aprovar, confira as informações registradas pois
                                                            ao aprovar, o material é enviado para a produção e não será mais possivel fazer alterações nos dados informados.
                                                        </span>
                                                    </h3>
                                                </div>
                                                @endif

                                            </div>
                                            <div class="card-body">
                                                <!--begin: Datatable-->
                                                @include('cards.components.'.$card_front->model.'__table')
                                                <!--end: Datatable-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 1-->

                                    <!--begin::Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content" style="min-height:800px">
                                        <h4 class="mb-10 font-weight-bold text-dark">PLACA DE APROVAÇÃO</h4>

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
                                    <form method="POST" action="{{ route('OrderAprove') }}" id="kt_form">
                                        @csrf

                                        <input type="hidden" name="order-id" value="{{  $order->order_id }}">
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button"
                                                    class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                                    data-wizard-type="action-prev">Voltar</button>
                                            </div>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-success font-weight-bolder text-uppercase px-9 py-4"
                                                    data-wizard-type="action-submit">Aprovar</button>
                                                <button type="button"
                                                    class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4"
                                                    data-wizard-type="action-next">Proximo</button>
                                            </div>
                                        </div>
                                    </form>
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

<!-- Modal-->
@include('cards.modal')

<div class="modal fade" id="insert-csv" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insert-data">Informações</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">

                <div class="card card-custom">
                    <!--begin::Form-->
                    <form action="{{ route('ImportOrders') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                            <div class="custom-file text-left">
                               
                                <input type="hidden" name="orderid" value="{{ $order->order_id }}"/>
                                <input type="file" name="file" class="custom-file-input" id="customFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                <label class="custom-file-label" for="customFile">Buscar arquivo CSV</label>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary font-weight-bold">Enviar</button>
                        </div>
                    </form>
                </div>
               
                <!--end::Form-->
            </div>

        </div>
    </div>
</div>

@endsection

@section("script")

<script src="{{ asset('assets/js/pages/custom/wizard/wizard-1.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/crud/datatables/advanced/column-rendering.js') }}"></script>
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

        //Validação do formulario
        (() => {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach((form) => {
                form.addEventListener('submit', (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();

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
