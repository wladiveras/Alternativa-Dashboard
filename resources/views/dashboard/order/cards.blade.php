@extends("layouts.app")

@section("style")
<link href="{{ asset('assets/css/pages/wizard/wizard-2.css') }}" rel="stylesheet" />
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
                    <h2 class="text-white font-weight-bold my-2 mr-5">Selecionar a <b>Frente</b> do Cartão</h2>
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
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Paginas</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Cartões</a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="{{ url()->previous() }}" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Voltar</a>
                <!--end::Button-->

            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            @if(!$front_id)
            <div class="card card-custom">
                <div class="card-body p-0" style="padding-left:30px">
                    @foreach($data__cards as $K => $C)
                    <a href="{{ route('dash:card_back', ['frontid' => $C->id]) }}">
                        <div class="zoom preview-invert float-left">
                            <img src="{{ asset('assets/media/cards/'.$C->preview) }}" width="213" height="332" />
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @else
            <div class="card card-custom">
                <div class="card-body p-0" style="padding-left:30px">
                    <a href="{{ route('dash:orders', ['front' => $front_id, 'back' => 0] ) }}">
                        <div class="zoom preview-invert float-left">
                            <img src="{{ asset('assets/media/cards/') }}" width="213" height="332" />
                        </div>
                    </a>
                    @foreach($data__cards as $K => $C)
                    <a href="{{ route('dash:orders', ['front' => $front_id, 'back' => $C->id] ) }}">
                        <div class="zoom preview-invert float-left">
                            <img src="{{ asset('assets/media/cards/'.$C->preview) }}" width="213" height="332" />
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

@endsection
@section("script")
<script src="{{ asset('assets/js/pages/custom/wizard/wizard-2.js') }}"></script>
@endsection
