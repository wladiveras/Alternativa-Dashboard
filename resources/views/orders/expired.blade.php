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
                    <div class="wizard wizard-1" >
              
                        <!--begin::Wizard Body-->
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-10">
                                <!--begin::Wizard Form-->
                                <div class="form">
                                    <center>
                                    <br>
                                        <h1>
                                            {{ $order->username }}, por decorrência do atraso no envio dos dados e da aprovação, 
                                            seu pedido perdeu a posição na fila de impressão. Dessa forma, pode ocorrer do material não ser entregue no prazo acordado. 
                                            Para mais informações, ligue para (21) 2668-2128.<br>
                                            <br>ou chame no WhatsApp <br><br>
                                            <a href="https://api.whatsapp.com/send?phone=552126673060">
                                                <font color="94d82d" style="font-size:50px" class="zoom fab fa-whatsapp"></font>
                                            </a>
                                            <br>
                                            <br>
                                            Agradecemos sua compreensão.
                                        </h1>
                                    </center>
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
