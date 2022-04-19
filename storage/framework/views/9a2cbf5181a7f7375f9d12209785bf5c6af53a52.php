<?php $__env->startSection("style"); ?>
<link href="<?php echo e(asset('assets/css/pages/wizard/wizard-2.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection("header"); ?>
<?php echo $__env->make("layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("wrapper"); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="text-white font-weight-bold my-2 mr-5">Cadastrar Pedido</h2>
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
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Pedido</a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <a href="<?php echo e(url()->previous()); ?>"
                    class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Voltar</a>
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin: Wizard-->
                    <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first"
                        data-wizard-clickable="false">
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                            <!--begin::Wizard Step 1 Nav-->
                            <div class="wizard-steps">
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">Informações do Pedido</h3>
                                            <div class="wizard-desc">Descreva as informações do pedido</div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->

                                <!--begin::Wizard Step 6 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Like.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z"
                                                            fill="#000000" />
                                                        <rect fill="#000000" opacity="0.3" x="2" y="9" width="5"
                                                            height="11" rx="1" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">Resumo</h3>
                                            <div class="wizard-desc">Resumir e Confirmar</div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 6 Nav-->
                            </div>
                        </div>
                        <!--end: Wizard Nav-->
                        <!--begin: Wizard Body-->
                        <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                            <!--begin: Wizard Form-->
                            <div class="row">
                                <div class="offset-xxl-2 col-xxl-8">
                                    <form class="form" id="kt_form" enctype="multipart/form-data" method="POST" action="<?php echo e(route('dash:addorder')); ?>">
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Informações do Pedido</h4>
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="card-frontid" value="<?php echo e($front); ?>" />
                                            <input type="hidden" name="card-backid" value="<?php echo e($back); ?>" />

                                            <!--begin::Input-->
                                            <div class="row">
                                                <div class="col-xl-6 form-group">
                                                    <label>Nome do Cliente</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="order_client" value="" />
                                                </div>

                                                <div class="col-xl-6 form-group">
                                                    <label>Email do Cliente</label>
                                                    <input type="email"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="order_email" value="" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>CPF/CNPJ</label>
                                                        <input type="number"
                                                            class="form-control form-control-solid form-control-lg"
                                                            name="order_number" value="" />
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="form-group col-xl-6">
                                                    <label>Prazo de entrega após aprovar (dias)</label>
                                                    <input type="number"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="order_time" value="7" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Link da Proposta</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-lg"
                                                            name="order_bling" value="" />
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Quantidade de Cartões</label>
                                                        <input type="number"
                                                            class="form-control form-control-solid form-control-lg"
                                                            name="order_limit" value="" />
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="front-art">Arte Frontal</label>
                                                <input type="file"
                                                    class="form-control-file uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                    id="front-art" name="artwork[]" multiple>
                                            </div>

                                            <?php if($back > 0): ?>
                                            <div class="form-group row">
                                                <label for="back-art">Arte do Verso</label>
                                                <input type="file"
                                                    class="form-control-file uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                    id="back-art" name="artwork[]" multiple>
                                            </div>
                                            <?php endif; ?>


                                        </div>
                                        <!--end: Wizard Step 1-->

                                        <!--begin: Wizard Step 6-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Section-->
                                            <h4 class="mb-10 font-weight-bold text-dark">Ao confirmar informe o numero
                                                do pedido ao cliente
                                            </h4>
                                            <h6 class="font-weight-bolder mb-3">numero do pedido:</h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>32423</div>

                                            </div>
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <h6 class="font-weight-bolder mb-3">Veja isso:</h6>
                                            <div class="text-dark-50 line-height-lg">
                                                Alguma informação
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 6-->
                                        <!--begin: Wizard Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button"
                                                    class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                                    data-wizard-type="action-prev">Voltar</button>
                                            </div>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-success font-weight-bolder text-uppercase px-9 py-4"
                                                    data-wizard-type="action-submit">Enviar</button>
                                                <button type="button"
                                                    class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4"
                                                    data-wizard-type="action-next">Proximo</button>
                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->
                                    </form>
                                </div>
                                <!--end: Wizard-->
                            </div>
                            <!--end: Wizard Form-->
                        </div>
                        <!--end: Wizard Body-->
                    </div>
                    <!--end: Wizard-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<?php $__env->stopSection(); ?>
<!-- test -->
<?php $__env->startSection("script"); ?>
<script src="<?php echo e(asset('assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/pages/custom/wizard/wizard-2.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wladi/workspace/Gabriel/Alternativa/Alternativa-Dashboard/resources/views/dashboard/order/order.blade.php ENDPATH**/ ?>