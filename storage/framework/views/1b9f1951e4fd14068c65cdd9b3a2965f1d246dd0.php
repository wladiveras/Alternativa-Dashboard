<div class="modal fade" id="insert-data" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
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
                    <form method="POST" action="<?php echo e(route('OrderInsert')); ?>" enctype="multipart/form-data" class="needs-validation" novalidate>
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="order-id" value="<?php echo e($order->order_id); ?>" />
                        
                        <?php echo $__env->make('cards.components.'. $card_front->model.'__front_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                        <?php if($order->id_back > 0): ?>
                            <?php echo $__env->make('cards.components.'. $card_back->model.'__back_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                    <?php if($order->id_front == 66 or $order->id_back == 67): ?>
                    <div class="form-check" style="text-align: center; font-size: 16px; margin-top: 30px;">
                        <input type="checkbox" value="" id="confirm-check" required>
                        <label for="confirm-check" style="font-size:">
                          Confirmar
                        </label>
                        <div class="invalid-feedback">Marque <b>Confirmar</b> para enviar.</div>
                    </div>
                    <?php endif; ?>       
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary font-weight-bold">Enviar</button>
                    </div>
                </div>
                </form>
                <!--end::Form-->
            </div>

        </div>
    </div>
</div><?php /**PATH /home/wladi/workspace/Gabriel/Alternativa/Alternativa-Dashboard/resources/views/cards/modal.blade.php ENDPATH**/ ?>