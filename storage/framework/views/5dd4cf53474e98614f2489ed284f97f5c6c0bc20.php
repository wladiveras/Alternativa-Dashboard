		<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
		    <!--begin::Header-->
		    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
		        <h3 class="font-weight-bold m-0"><?php echo e(env('APP_NAME')); ?></h3>
		        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
		            <i class="ki ki-close icon-xs text-muted"></i>
		        </a>
		    </div>
		    <!--end::Header-->
		    <!--begin::Content-->
		    <div class="offcanvas-content pr-5 mr-n5">
		        <!--begin::Header-->
		        <div class="d-flex align-items-center mt-5">
		            <div class="symbol symbol-100 mr-5">
		                <div class="symbol-label"
		                    style="background-image:url('<?php echo e(asset('assets/media/users/300_21.jpg')); ?>')"></div>
		                <i class="symbol-badge bg-success"></i>
		            </div>
		            <div class="d-flex flex-column">
		                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?php if(auth()->guard()->check()): ?>
		                    <?php echo e(Auth::user()->name); ?> <?php endif; ?></a>
		                <div class="text-muted mt-1">Proposta <b>#4575</b></div>
		                <div class="navi mt-2">
		                    <a href="#" class="navi-item">
		                        <span class="navi-link p-0 pb-2">
		                            <span class="navi-icon mr-1">
		                                <span class="svg-icon svg-icon-lg svg-icon-primary">
		                                    <!--begin::Svg Icon | media/svg/icons/Communication/Mail-notification.svg-->
		                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
		                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
		                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		                                            <rect x="0" y="0" width="24" height="24" />
		                                            <path
		                                                d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
		                                                fill="#000000" />
		                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
		                                        </g>
		                                    </svg>
		                                    <!--end::Svg Icon-->
		                                </span>
		                            </span>
		                            <span class="navi-text text-muted text-hover-primary">email@bling.com</span>
		                        </span>
		                    </a>
		                    <form method="POST" action="<?php echo e(route('logout')); ?>">
		                        <?php echo csrf_field(); ?>
		                        <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5"
		                            onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
		                    </form>
		                </div>
		            </div>
		        </div>
		        <!--end::Header-->
		        <!--begin::Separator-->
		        <div class="separator separator-dashed mt-8 mb-5"></div>
		        <!--end::Separator-->
		        <!--begin::Nav-->
		        <div class="navi navi-spacer-x-0 p-0">


		            <!--begin::Card-->
		            <div class="card card-custom gutter-b">
		                <div class="card-header">
		                    <div class="card-title">
		                        <h3 class="card-label">Andamento do Pedido</h3>
		                    </div>
		                </div>

		                <!--begin::Timeline-->
		                <div class="timeline timeline-3">
		                    <div class="timeline-items">
		                        <div class="timeline-item">
		                            <div class="timeline-media">
		                                <img alt="Pic" src="assets/media/users/300_25.jpg" />
		                            </div>
		                            <div class="timeline-content">
		                                <div class="d-flex align-items-center justify-content-between mb-3">
		                                    <div class="mr-2">
		                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Pedido Realizado</a>
		                                        <span class="text-muted ml-2"><br>Hoje</span>
		                                        <span
		                                            class="label label-light-success font-weight-bolder label-inline ml-2">new</span>
		                                    </div>

		                                </div>
		                                <p class="p-0">Pedido aprovado, estamos analisando sua proposta e preparando o material para envio</p>
		                            </div>
		                        </div>
		                        <div class="timeline-item">
		                            <div class="timeline-media">
		                                <i class="flaticon2-shield text-danger"></i>
		                            </div>
		                            <div class="timeline-content">
		                                <div class="d-flex align-items-center justify-content-between mb-3">
		                                    <div class="mr-2">
		                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Aprovação de Placa</a>
		                                        <span class="text-muted ml-2">8:30PM, 20 Junho</span>
		                                        <span
		                                            class="label label-light-danger font-weight-bolder label-inline ml-2">Pendente</span>
		                                    </div>
		                                </div>
		                                <p class="p-0">Aguardando aprovação da Placa para realizarmos o envio <br>(O prazo de entraga começa a contar a partir de aprovação). </p>
		                            </div>
		                        </div>
		                        <div class="timeline-item">
		                            <div class="timeline-media">
		                                <i class="flaticon2-layers text-warning"></i>
		                            </div>
		                            <div class="timeline-content">
		                                <div class="d-flex align-items-center justify-content-between mb-3">
		                                    <div class="mr-2">
		                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Atraso.</a>
		                                        <span class="text-muted ml-2">11:00AM, 30 Junho</span>
		                                        <span class="label label-light-warning font-weight-bolder label-inline ml-2">Finalizado</span>
		                                    </div>

		                                </div>
		                                <p class="p-0">Seu pedido ja chegou, Fala pra gente o que você achou do nosso produto clicando <a href='#'>AQUI</a>.</p>
		                            </div>
		                        </div>

		                    </div>
		                </div>
		                <!--end::Timeline-->


		            </div>
		            <!--end::Card-->




		        </div>
		        <!--end::Nav-->
		        <!--begin::Separator-->
		        <div class="separator separator-dashed my-7"></div>
		        <!--end::Separator-->

		    </div>
		    <!--end::Content-->
		</div>
		<!-- end::User Panel-->
<?php /**PATH /home/wladi/workspace/Gabriel/Alternativa/Alternativa-Dashboard/resources/views/layouts/panels.blade.php ENDPATH**/ ?>