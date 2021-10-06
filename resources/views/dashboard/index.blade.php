@extends("layouts.app")

@section("style")

@endsection

@section("header")
@include("layouts.header")
@endsection

@section("wrapper")
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="text-white font-weight-bold my-2 mr-5">Dashboard</h2>
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
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
                        <!--end::Item-->
                    
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
               
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-4">
                    <!--begin::Tiles Widget 1-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <div class="card-title">
                                <div class="card-label">
                                    <div class="font-weight-bolder">Prioridade</div>
                                    <div class="font-size-sm text-muted mt-2">Material com urgencia</div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column px-0">
                            <!--begin::Chart-->
                            <div id="kt_tiles_widget_1_chart" data-color="danger" style="height: 125px"></div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class="flex-grow-1 card-spacer-x">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center justify-content-between mb-10">
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                            <div class="symbol-label">
                                                <img src="assets/media/svg/misc/006-plurk.svg" alt="" class="h-50" />
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Escola
                                                da Maria Joana</a>
                                            <div class="font-size-sm text-muted font-weight-bold mt-1">#4059 - 905
                                                Cartões, 30 cordões</div>
                                        </div>
                                    </div>
                                    <div
                                        class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">
                                        Vencido</div>
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center justify-content-between mb-10">
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                            <div class="symbol-label">
                                                <img src="assets/media/svg/misc/006-plurk.svg" alt="" class="h-50" />
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Escola
                                                da Maria Joana</a>
                                            <div class="font-size-sm text-muted font-weight-bold mt-1">#4059 - 905
                                                Cartões, 30 cordões</div>
                                        </div>
                                    </div>
                                    <div
                                        class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">
                                        Atraso</div>
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center justify-content-between mb-10">
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                            <div class="symbol-label">
                                                <img src="assets/media/svg/misc/006-plurk.svg" alt="" class="h-50" />
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Escola
                                                da Maria Joana</a>
                                            <div class="font-size-sm text-muted font-weight-bold mt-1">#4059 - 905
                                                Cartões, 30 cordões</div>
                                        </div>
                                    </div>
                                    <div
                                        class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">
                                        Atraso</div>
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tiles Widget 1-->
                </div>
                <div class="col-xl-8">

                    <div class="row">

                        <div class="col-xl-6">

                            <div class="row">
                                <div class="col-xl-6">
                                    <!--begin::Tiles Widget 11-->
                                    <div class="card card-custom bg-primary gutter-b" style="height: 150px">
                                        <div class="card-body">
                                            <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" x="4" y="4" width="7" height="7"
                                                            rx="1.5" />
                                                        <path
                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3">{{ $orders_count }}
                                            </div>
                                            <a href="#"
                                                class="text-inverse-primary font-weight-bold font-size-lg mt-1">Pedidos</a>
                                        </div>
                                    </div>
                                    <!--end::Tiles Widget 11-->
                                </div>
                                <div class="col-xl-6">
                                    <!--begin::Tiles Widget 12-->
                                    <div class="card card-custom gutter-b" style="height: 150px">
                                        <div class="card-body">
                                            <span class="svg-icon svg-icon-3x svg-icon-success">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{ $cards_count }}</div>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Cartões
                                                Gerados</a>
                                        </div>
                                    </div>
                                    <!--end::Tiles Widget 12-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <!--begin::Mixed Widget 10-->
                            <div class="card card-custom gutter-b" style="height: 150px">
                                <!--begin::Body-->
                                <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="mr-2">
                                        <h3 class="font-weight-bolder">Novo Pedido</h3>
                                        <div class="text-dark-50 font-size-lg mt-2">Criar um novo pedido de Cartões
                                        </div>
                                    </div>
                                    <a href="{{ route('dash:card_front') }}" class="btn btn-primary font-weight-bold py-3 px-6">Começar</a>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Mixed Widget 10-->
                        </div>

                        <div class="col-lg-6 col-xxl-12">
                            <!--begin::Advance Table Widget 1-->
                            <div class="card card-custom card-stretch gutter-b">
                                <!--begin::Header-->
                                <div class="card-header border-0 py-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label font-weight-bolder text-dark">Status de Pedidos</span>
                                        <span class="text-muted mt-3 font-weight-bold font-size-sm">Pedidos não
                                            aprovados em andamento</span>
                                    </h3>
                                    <div class="card-toolbar">
                                        <a href="{{ route('dash:card_front') }}" class="btn btn-success font-weight-bolder font-size-sm">
                                            <span class="svg-icon svg-icon-md svg-icon-white">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>Adicionar pedido</a>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-0">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-vertical-center"
                                            id="kt_advance_table_widget_1">
                                            <thead>
                                                <tr class="text-left">
                                                    <th class="pr-0" style="width: 50px">Cliente</th>
                                                    <th style="min-width: 200px"></th>
                                                    <th style="min-width: 150px">Pedido</th>
                                                    <th style="min-width: 150px">Progresso</th>
                                                    <th class="pr-0 text-right" style="min-width: 150px">Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ( $orders as $O)
                                                <tr>
                                                    <td class="pr-0">
                                                        <div class="symbol symbol-50 symbol-light mt-1">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/001-boy.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#"
                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $O->username }}</a>
                                                        <span
                                                            class="text-muted font-weight-bold text-muted d-block">{{ $O->token }}</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">Nº
                                                            #{{ $O->order_id }}</span>
                                                        <span class="text-muted font-weight-bold">{{ $O->limit }} Cartões</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between mb-2">
                                                                <span
                                                                    class="text-muted mr-2 font-size-sm font-weight-bold">{{ Wladi::Percent($O->limit_count, $O->limit) }}%</span>
                                                                <span
                                                                    class="text-muted font-size-sm font-weight-bold">finalizado</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar 
                                                                    @if(Wladi::Percent($O->limit_count, $O->limit) >= 80.00)
                                                                    bg-success
                                                                    @elseif(Wladi::Percent($O->limit_count, $O->limit) >= 50.00)
                                                                    bg-primary
                                                                    @else
                                                                    bg-danger
                                                                    @endif" 
                                                                    role="progressbar"
                                                                    style="width: {{ Wladi::Percent($O->limit_count, $O->limit) }}%;"
                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="pr-0 text-right">
                                                        <a href="{{ route('OrdersExport', ['id' => $O->order_id]) }}"
                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                <i class="fas fa-file-csv"></i>
                                                            </span>
                                                        </a>
                                                        <a href="{{ route('OrdersDownload', ['id' => $O->order_id]) }}"
                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                <i class="fas fa-image"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                <i class="fas fa-edit"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Advance Table Widget 1-->
                        </div>

                    </div>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->


            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-6">
                    <!--begin::List Widget 10-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Em produção</h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Item-->
                            <div class="mb-6">
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column align-items-cente py-2 w-75">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">#495
                                                - 90 cartões</a>
                                            <!--end::Title-->
                                            <!--begin::Data-->
                                            <span class="text-muted font-weight-bold"></span>
                                            <!--end::Data-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Label-->
                                        <span
                                            class="label label-lg label-light-primary label-inline font-weight-bold py-4">Approved</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column align-items-cente py-2 w-75">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">#4948
                                                - 6000 cartões</a>
                                            <!--end::Title-->
                                            <!--begin::Data-->
                                            <span class="text-muted font-weight-bold">Vence em 2 dias</span>
                                            <!--end::Data-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Label-->
                                        <span
                                            class="label label-lg label-light-warning label-inline font-weight-bold py-4">Em
                                            produção</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column align-items-cente py-2 w-75">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Next
                                                sprint planning and estimations</a>
                                            <!--end::Title-->
                                            <!--begin::Data-->
                                            <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                            <!--end::Data-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Label-->
                                        <span
                                            class="label label-lg label-light-success label-inline font-weight-bold py-4">Success</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column align-items-cente py-2 w-75">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Sprint
                                                delivery and project deployment</a>
                                            <!--end::Title-->
                                            <!--begin::Data-->
                                            <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                            <!--end::Data-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Label-->
                                        <span
                                            class="label label-lg label-light-danger label-inline font-weight-bold py-4">Rejected</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="">
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column align-items-cente py-2 w-75">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Data
                                                analytics research showcase</a>
                                            <!--end::Title-->
                                            <!--begin::Data-->
                                            <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                            <!--end::Data-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Label-->
                                        <span
                                            class="label label-lg label-light-warning label-inline font-weight-bold py-4">In
                                            Progress</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end: Item-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end: Card-->
                    <!--end: List Widget 10-->
                </div>

				<div class="col-lg-6">
					<!--begin::List Widget 11-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0">
							<h3 class="card-title font-weight-bolder text-dark">Atualizações</h3>
							
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-0">
			
							<!--begin::Item-->
							<div class="app__notify"></div>
							<!--end::Item-->
				
						</div>
						<!--end::Body-->
					</div>
					<!--end::List Widget 11-->
				</div>

            </div>
            <!--end::Row-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection

@section("script")
<script src="{{ asset('../assets/js/pages/widgets.js?v=7.2.8') }}"></script>
@endsection
