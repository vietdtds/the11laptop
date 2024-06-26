<?php echo $__env->yieldContent('content-dx'); ?>

<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(trans('home.logout_1')); ?></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body"><?php echo e(trans('home.logout_2')); ?></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo e(trans('home.cancel')); ?></button>
                    <a class="btn btn-primary" href="<?php echo e(route('dangxuat')); ?>"><?php echo e(trans('home.logout')); ?></a>
                </div>
            </div>
        </div>
    </div><?php /**PATH C:\laragon\www\the11laptop\resources\views/dk-dn-dx/dangxuat.blade.php ENDPATH**/ ?>