<?php $__env->startSection("style"); ?>
<link href="<?php echo e(asset('assets/css/pages/login/login-2.css?v=7.2.8')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("wrapper"); ?>
<div class="d-flex flex-column flex-root">
	<!--begin::Login-->
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
						
						<form class="form" id="kt_login_signin_form">
							<div class="alert alert-danger print-error-msg" style="display:none">
								<ul></ul>
							</div>
							<?php echo csrf_field(); ?>
							<!--begin::Title-->
							<div class="text-center pb-8">
								<h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg"><?php if(auth()->guard()->check()): ?>  <?php echo e(Auth::user()->name); ?> <?php endif; ?> Conecte-se a <?php echo e(ENV('APP_NAME')); ?></h2>
								
							</div>
							<!--end::Title-->
							<!--begin::Form group-->
							<div class="form-group">
								<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
								<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="email" name="email" autocomplete="off" />
							</div>
							<!--end::Form group-->
							<!--begin::Form group-->
							<div class="form-group">
								<div class="d-flex justify-content-between mt-n5">
									<label class="font-size-h6 font-weight-bolder text-dark pt-5">Senha</label>
									<a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Esqueceu sua senha ?</a>
								</div>
								<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password" autocomplete="off" />
							</div>
							<!--end::Form group-->
							<!--begin::Action-->
							<div class="text-center pt-2">
								<button class="submit-login btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">Conectar</button>
							</div>
							<!--end::Action-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Signin-->
	
					<!--begin::Forgot-->
					<div class="login-form login-forgot pt-11">
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" id="kt_login_forgot_form" method="post">
							<!--begin::Title-->
							<div class="text-center pb-8">
								<h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Esqueceu sua senha?</h2>
								<p class="text-muted font-weight-bold font-size-h4">Digite seu email que vamos te ajudar a resetar a senha</p>
							</div>
							<!--end::Title-->
							<!--begin::Form group-->
							<div class="form-group">
								<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
							</div>
							<!--end::Form group-->
							<!--begin::Form group-->
							<div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
								<button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Recuperar</button>
								<button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Cancelar</button>
							</div>
							<!--end::Form group-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Forgot-->
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
				<h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">Amazing Wireframes</h3>
				<p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">User Experience &amp; Interface Design, Product Strategy 
				<br />Web Application SaaS Solutions</p>
			</div>
			<!--end::Title-->
			<!--begin::Image-->
			<div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(<?php echo e(asset('assets/media/svg/illustrations/login-visual-2.svg')); ?>);"></div>
			<!--end::Image-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Login-->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="<?php echo e(asset('assets/js/pages/custom/login/login-general.js?v=7.2.8')); ?>"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $(".submit-login").click(function(e){

            e.preventDefault();

            var email = $("input[name='email']").val();
            var pass = $("input[name='password']").val();
			var _token = $("input[name='_token']").val();

            $.ajax({
                type:'POST',
                url:'<?php echo e(route("login")); ?>',
                dataType: 'json',
                data:{
                    _token: _token,
                    email: email,
                    password: pass,
                },
                success:function (data) {
                    if ($.isEmptyObject(data.error)) {
						sessionStorage.setItem('login', 'success');
						$(location).attr('href', '/dashboard');
                    }else{
                        console.log(data.error)
                    }
                },
				error: function(result) {
                    swal.fire({
		                text: "Ooops, verifique os campos preenchidos, não foi possivel se contectar.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Ok, got it!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            });
                }
            });
        }); 
    });


</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wladi/workspace/Gabriel/Alternativa/Alternativa-Dashboard/resources/views/login.blade.php ENDPATH**/ ?>