
<div class="col-xl-9 col-lg-8 slider_box">
    <div class="slider-wrapper theme-default">
        <!-- Slider Background  Image Start-->
        <div id="slider" class="nivoSlider" style="height: 409px">
        	<?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($sl->link); ?>" target="_blank"><img src="source/image/slide/<?php echo e($sl -> image); ?>" data-thumb="source/image/slide/<?php echo e($sl -> image); ?>" alt="" title="#htmlcaption" /></a>
           <!--  <a href="#" target="_blank"><img src="<?php echo e(asset('source/assets/frontend/img/slider/2.jpg')); ?>" data-thumb="<?php echo e(asset('source/assets/frontend/img/slider/2.jpg')); ?>" alt="" title="#htmlcaption2" /></a> -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- Slider Background  Image Start-->
    </div>
</div>

<?php /**PATH C:\laragon\www\the11laptop\resources\views/FrontEnd/Slider.blade.php ENDPATH**/ ?>