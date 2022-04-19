
<!-- Adiciona os estilos dos cartões -->
<?php $__env->startSection("front_style"); ?>
        <link href="<?php echo e(asset('assets/css/cards/'. $card_front->css)); ?>" rel="stylesheet" />
    <?php if($order->id_back > 0): ?>
        <link href="<?php echo e(asset('assets/css/cards/'. $card_back->css)); ?>" rel="stylesheet" />
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__currentLoopData = $order_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $D): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="float-left flip-container center" id="flip-toggle" ontouchstart="this.classList.toggle('hover');">
    
    <div class="flipper">
        <!-- front content -->
        <div class="front">
            <div class="watermark" style="top:0px"><?php echo e(env('APP_NAME')); ?></div>
            <div class="watermark" style="top:80px"><?php echo e(env('APP_NAME')); ?></div>
            <div class="watermark" style="top:160px"><?php echo e(env('APP_NAME')); ?></div>
            <div class="watermark" style="top:240px"><?php echo e(env('APP_NAME')); ?></div>

            <span class="element__tag1"><?php echo e($D->front_input1); ?></span>
            <span class="element__tag2"><?php echo e($D->front_input2); ?></span>
            <span class="element__tag3"><?php echo e($D->front_input3); ?></span>
            <span class="element__tag4"><?php echo e($D->front_input4); ?></span>
            <span class="element__tag5"><?php echo e($D->front_input5); ?></span>
            <span class="element__tag6"><?php echo e($D->front_input6); ?></span>
            <span class="element__tag7"><?php echo e($D->front_input7); ?></span>
            <span class="element__tag8"><?php echo e($D->front_input8); ?></span>
            <span class="element__tag9"><?php echo e($D->front_input9); ?></span>
            <span class="element__tag10"><?php echo e($D->front_input10); ?></span>
            <span class="element__tag11"><?php echo e($D->front_input11); ?></span>
            <span class="element__tag12"><?php echo e($D->front_input12); ?></span>

            <?php if($D->front_avatar): ?>
                <img class="element-avatar" src="<?php echo e(asset('assets/media/users/'. $order->order_id .'/'. $D->front_avatar)); ?>"  <?php if($order->code == 35): ?> width="213.54" height="332.59" <?php endif; ?>  />
            <?php endif; ?>

            <?php if($D->front_art): ?>
                <img style=" position:absolute" src="<?php echo e(asset('assets/media/users/'. $order->order_id .'/'. $D->front_art)); ?>" width="213.54" height="332.59" />
            <?php else: ?>
                <img style=" position:absolute; <?php if($order->code == 35): ?> z-index: 2; <?php endif; ?>" src="<?php echo e(asset('assets/media/cards/uploads/'. $order->order_id .'/'. $order->card_front)); ?>" width="213.54" height="332.59" />
            <?php endif; ?>
        </div>

        <?php if($order->id_back > 0): ?>
          <!-- back content -->
          <div class="back">
              <div class="watermark" style="top:0px">
                  <?php echo e(env('APP_NAME')); ?></div>
              <div class="watermark" style="top:80px">
                  <?php echo e(env('APP_NAME')); ?></div>
              <div class="watermark" style="top:160px">
                  <?php echo e(env('APP_NAME')); ?></div>
              <div class="watermark" style="top:240px">
                  <?php echo e(env('APP_NAME')); ?></div>

              <span class="element__back1"><?php echo e($D->back_input1); ?></span>
              <span class="element__back2"><?php echo e($D->back_input2); ?></span>
              <span class="element__back3"><?php echo e($D->back_input3); ?></span>
              <span class="element__back4"><?php echo e($D->back_input4); ?></span>
              <span class="element__back5"><?php echo e($D->back_input5); ?></span>
              <span class="element__back6"><?php echo e($D->back_input6); ?></span>
              <span class="element__back7"><?php echo e($D->back_input7); ?></span>
              <span class="element__back8"><?php echo e($D->back_input8); ?></span>
              <span class="element__back9"><?php echo e($D->back_input9); ?></span>
              <span class="element__back10"><?php echo e($D->back_input10); ?></span>
              <span class="element__back11"><?php echo e($D->back_input11); ?></span>
              <span class="element__back12"><?php echo e($D->back_input12); ?></span>    
               
              <?php if($D->back_art): ?>
              <img style="position:absolute;" src="<?php echo e(asset('assets/media/users/'. $order->order_id .'/'. $D->back_art)); ?>" width="213.54" height="332.59" />
              <?php else: ?>
                <img id="card" style="position: absolute" src="<?php echo e(asset('assets/media/cards/uploads/'. $order->order_id .'/'. $order->card_back)); ?>" width="213.54"height="332.59" />
              <?php endif; ?>
          </div>
        <?php else: ?>
        <div class="back">
            <img id="card" style="position: absolute" width="213.54"height="332.59" />
        </div>
        <?php endif; ?>
      </div>
  </div>                                    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/wladi/workspace/Gabriel/Alternativa/Alternativa-Dashboard/resources/views/cards/card.blade.php ENDPATH**/ ?>