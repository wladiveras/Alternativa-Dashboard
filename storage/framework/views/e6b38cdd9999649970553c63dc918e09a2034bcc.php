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
                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Voltar</a>
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
            <?php if(!$front_id): ?>
            <div class="card card-custom">
                <div class="card-body p-0" style="padding-left:30px">
                    <?php $__currentLoopData = $data__cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $K => $C): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('dash:card_back', ['frontid' => $C->id])); ?>">
                        <div class="zoom preview-invert float-left">
                            <img src="<?php echo e(asset('assets/media/cards/'.$C->preview)); ?>" width="213" height="332" />
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php else: ?>
            <div class="card card-custom">
                <div class="card-body p-0" style="padding-left:30px">
                    <a href="<?php echo e(route('dash:orders', ['front' => $front_id, 'back' => 0] )); ?>">
                        <div class="zoom preview-invert float-left">
                            <img src="<?php echo e(asset('assets/media/cards/')); ?>" width="213" height="332" />
                        </div>
                    </a>
                    <?php $__currentLoopData = $data__cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $K => $C): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('dash:orders', ['front' => $front_id, 'back' => $C->id] )); ?>">
                        <div class="zoom preview-invert float-left">
                            <img src="<?php echo e(asset('assets/media/cards/'.$C->preview)); ?>" width="213" height="332" />
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("script"); ?>
<script src="<?php echo e(asset('assets/js/pages/custom/wizard/wizard-2.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wladi/workspace/Gabriel/Alternativa/Alternativa-Dashboard/resources/views/dashboard/order/cards.blade.php ENDPATH**/ ?>