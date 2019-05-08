<?php if(Session::has('flash_notification.message')): ?>
    <?php if(Session::has('flash_notification.overlay')): ?>
        <?php echo $__env->make('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <div class="alert alert-<?php echo e(Session::get('flash_notification.level')); ?>">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            <?php echo Session::get('flash_notification.message'); ?>

        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/html/Laravel/Protected_File/vendor/laracasts/flash/src/Laracasts/Flash/../../views/message.blade.php ENDPATH**/ ?>