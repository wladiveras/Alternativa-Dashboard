
<table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Detalhe</th>

            <th>Nome</th>
            <th>Função</th>

            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $order_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $D): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($D->id); ?></td>
            <td><?php echo e(asset('assets/media/users/'. $order->order_id .'/'.$D->front_avatar)); ?></td>

            <td><?php echo e($D->front_input1); ?></td>
            <td><?php echo e($D->front_input2); ?></td>
            
            <td nowrap="nowrap">
                <form method="POST" action="<?php echo e(route('OrderDelelete')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="itemid" value="<?php echo e($D->id); ?>" />
                    <input type="hidden" name="orderid" value="<?php echo e($order->order_id); ?>" />
                    <button type="submit" class="btn btn-sm btn-clean btn-icon" title="Deletar">
                        <i class="la la-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /home/wladi/workspace/Gabriel/Alternativa/Alternativa-Dashboard/resources/views/cards/components/card133__table.blade.php ENDPATH**/ ?>