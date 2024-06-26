<div class="col-xl-3 col-lg-4 d-none d-lg-block">
    <div class="vertical-menu mb-all-30">
        <nav>
            <ul class="vertical-menu-list">

                <?php $__currentLoopData = $loai_sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('loaisanpham', $sl->id)); ?>">
                            <span>
                                <img width="20px" height="20px"
                                     src="<?php echo e(asset('source/image/type_product/' . $sl->image)); ?>" alt="menu-icon">
                            </span>
                            <?php echo e($sl->name_type); ?>

                        </a>
                    </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- More Categoies Start -->
                <li id="cate-toggle" class="category-menu v-cat-menu">
                    <ul>
                        <li class="has-sub"><a href="#">More</a>
                            <ul class="category-sub">
                                <?php $__currentLoopData = $loai_sanpham_next; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $next): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('loaisanpham', $next->id)); ?>">
                                            <span>
                                                <img width="20px" height="20px"
                                                     src="<?php echo e(asset('source/image/type_product/' . $next->image)); ?>"
                                                     alt="menu-icon">
                                            </span>
                                            <?php echo e($next->name_type); ?>

                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- More Categoies End -->
            </ul>
        </nav>
    </div>
</div>
<?php /**PATH C:\laragon\www\the11laptop\resources\views/FrontEnd/Menu.blade.php ENDPATH**/ ?>