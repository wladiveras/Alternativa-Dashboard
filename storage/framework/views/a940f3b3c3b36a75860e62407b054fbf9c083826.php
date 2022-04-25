<?php $__env->startSection("style"); ?>
<link href="<?php echo e(asset('assets/css/pages/login/login-2.css?v=7.2.8')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("wrapper"); ?>
<div class="d-flex flex-column flex-root">
	<!--begin::Access-->
	<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
		<!--begin::Aside-->
		<div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
			<!--begin: Aside Container-->
			<div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
				<!--begin::Logo-->
				<a href="#" class="text-center pt-2">
					<img src="<?php echo e(asset('assets/media/logos/logo.png')); ?>" class="max-h-75px" alt="" />
				</a>
				<!--end::Logo-->
				<!--begin::Aside body-->
				<div class="d-flex flex-column-fluid flex-column flex-center">
					<!--begin::Signin-->
					<div class="login-form login-signin py-11">
						<!--begin::Form-->
						
						<form method="POST" action="<?php echo e(route('OrderAccess')); ?>" class="needs-validation" novalidate>
							<?php echo csrf_field(); ?>
							<!--begin::Title-->
							<div class="text-center pb-8">
								<h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Acessar Pedido</h2>
								
							</div>
							<!--end::Title-->
							<!--begin::Form group-->
							<div class="form-group">
								<label class="font-size-h6 font-weight-bolder text-dark">Email cadastrado</label>
								<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="email" name="email" required>
								<div class="invalid-feedback">É necessário informar seu <b>Email</b> de acesso.</div>
							</div>
							<!--end::Form group-->
							<!--begin::Form group-->
							<div class="form-group">
								<div class="d-flex justify-content-between mt-n5">
									<label class="font-size-h6 font-weight-bolder text-dark pt-5">Numero do Pedido</label>
								</div>
								<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="orderid" arequired>
								<div class="invalid-feedback">É necessário informar o <b>Nº do Pedido</b>.</div>
							</div>
							<!--end::Form group-->
							<!--begin::Action-->
							<div class="text-center pt-2">
								<button type="submit" class="submit-access btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">Acessar</button>
							</div>
							<!--end::Action-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Signin-->

				</div>
				<!--end::Aside body-->

			</div>
			<!--end: Aside Container-->
		</div>
		<!--begin::Aside-->
		<!--begin::Content-->
		<div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #B1DCED;">
			<!--begin::Title-->
			<div class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
				<h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;"><?php echo e(env('APP_NAME')); ?> Card</h3>
				<p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">Adicione as informações e visualize em tempo real seus cards<br>
				Tecnologia e qualidade em um só lugar</p>
			</div>
			<!--end::Title-->
			<!--begin::Image-->
			<div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(<?php echo e(asset('assets/media/svg/illustrations/login-visual-2.svg')); ?>);"></div>
			<!--end::Image-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Access -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>
<script type="text/javascript">

 <?php if(Session::get('alert-type') == 'toaster'): ?>
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
        toastr.error("<?php echo Session::get('alert-response'); ?>", "<?php echo Session::get('alert-title'); ?>");
    <?php endif; ?>

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


</script>




<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wladi/workspace/Gabriel/Alternativa/Alternativa-Dashboard/resources/views/order_login.blade.php ENDPATH**/ ?>