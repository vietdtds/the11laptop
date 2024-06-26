
<?php $__env->startSection('title'); ?>
    <?php echo e(trans('home.home')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content-layout'); ?>
    <!-- Categorie Menu & Slider Area Start Here -->
    <div class="main-page-banner pb-50 off-white-bg">
        <div class="container">
            <div class="row">
                <!-- Vertical Menu Start Here -->
                <?php echo $__env->make('FrontEnd.Menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Vertical Menu End Here -->
                <!-- Slider Area Start Here -->
                <?php echo $__env->make('FrontEnd.Slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Slider Area End Here -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Categorie Menu & Slider Area End Here -->
    <!-- Brand Banner Area Start Here -->
    <div class="image-banner pb-50 off-white-bg">
        <div class="container">
            <div class="col-img">
                <a href="#"><img src="<?php echo e(asset('source/assets/frontend/img/banner/h1-banner.png')); ?>"
                        alt="image banner"></a>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Brand Banner Area End Here -->
    <!-- Hot Deal Products Start Here -->
    <div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
        <div class="container">
            <!-- Product Title Start -->
            <div class="post-title pb-30">
                <h2><?php echo e(trans('home.hotdeals')); ?></h2>
            </div>
            <!-- Product Title End -->
            <!-- Hot Deal Product Activation Start -->
            <div class="hot-deal-active owl-carousel">
                <!-- Single Product Start -->
                <?php $__currentLoopData = $sanpham_khuyenmai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_km): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-product">
                        <a href="<?php echo e(route('sosanh')); ?>" id="pagesosanh<?php echo e($product_km->id); ?>"
                            style="visibility: hidden;"></a>
                        <input type="hidden" id="wishList_product_name<?php echo e($product_km->id); ?>"
                            value="<?php echo e($product_km->$multisp); ?>">
                        <input type="hidden" id="wishList_price<?php echo e($product_km->id); ?>"
                            value="<?php if($product_km->promotion_price == 0): ?> <?php echo e(number_format($product_km->unit_price, 0, ',', '.')); ?> VNĐ
                        <?php else: ?>
                        <?php echo e(number_format($product_km->promotion_price, 0, ',', '.')); ?> VNĐ <?php endif; ?>">

                        <input type="hidden" id="instock<?php echo e($product_km->id); ?>" value="
                             <?php if($product_km->product_quantity > 0): ?> <?php echo e(trans('home.INSTOCK')); ?>

                         <?php else: ?>
                         <?php echo e(trans('home.OUTSTOCK')); ?> <?php endif; ?>
                             ">
                        <input type="hidden" id="mota<?php echo e($product_km->id); ?>" value="<?php echo $product_km->$multi_description; ?>">

                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a id="wishList_producturl<?php echo e($product_km->id); ?>"
                                href="<?php echo e(route('chitietsanpham', ['id' => $product_km->id, 'product_slug' => $product_km->product_slug])); ?>">
                                <img id="wishList_image<?php echo e($product_km->id); ?>" class="primary-img"
                                    src="source/image/product/<?php echo e($product_km->image); ?>" alt="single-product" height="226px"
                                    width="226px">
                                <img class="secondary-img" src="source/image/product/<?php echo e($product_km->image); ?>"
                                    alt="single-product" height="226px" width="226px">
                            </a>

                            <div class="countdown"
                                data-countdown="<?php echo e($product_km->date_sale); ?>"></div>
                            <a href="#" class="quick_view" data-toggle="modal"
                                data-target="#myModal_<?php echo e($product_km->id); ?>" title="Quick View"><i
                                    class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a
                                        href="<?php echo e(route('chitietsanpham', ['id' => $product_km->id, 'product_slug' => $product_km->product_slug])); ?>"><?php echo e($product_km->$multisp); ?></a>
                                </h4>
                                <p><span class="price"><?php echo e(number_format($product_km->promotion_price, 0, ',', '.')); ?>

                                        VNĐ</span><del
                                        class="prev-price"><?php echo e(number_format($product_km->unit_price, 0, ',', '.')); ?>

                                        VNĐ</del></p>
                                <div class="label-product l_sale">
                                    <?php echo e(number_format(100 - ($product_km->promotion_price / $product_km->unit_price) * 100)); ?><span
                                        class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <?php if($product_km->product_quantity > 0): ?>
                                        <!-- <a id="addcart<?php echo e($product_km->id); ?>"
                                        <?php if(Auth::check()): ?> href="<?php echo e(route('themgiohang', $product_km->id)); ?>"
                                    <?php else: ?> href="<?php echo e(route('dangnhap')); ?>" <?php endif; ?> title="<?php echo e(trans('home.addcart')); ?>"> + <?php echo e(trans('home.addcart')); ?></a> -->
                                        <a id="addcart<?php echo e($product_km->id); ?>" <?php
                                        if (Auth::check() || Session::get('user_name_login')) {
                                            $addnewcart = route('themgiohang', $product_km->id);
                                        } else {
                                           $addnewcart = route('dangnhap');
                                        }
                                        ?>
                                            href="<?php echo e($addnewcart); ?>" title="<?php echo e(trans('home.addcart')); ?>"> +
                                            <?php echo e(trans('home.addcart')); ?></a>
                                    <?php else: ?>
                                        <a id="addcart<?php echo e($product_km->id); ?>" class="disabled-link"> +
                                            <?php echo e(trans('home.addcart')); ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="actions-secondary">
                                    <a style="cursor: pointer;" id="<?php echo e($product_km->id); ?>" onclick="add_Compare(this.id)"
                                        title="<?php echo e(trans('home.addcompare')); ?>"><i class="lnr lnr-sync"></i>
                                        <span><?php echo e(trans('home.addcompare')); ?></span></a>
                                    <a style="cursor: pointer;" id="<?php echo e($product_km->id); ?>" onclick="add_wishList(this.id)"
                                        title="<?php echo e(trans('home.addwishlist')); ?>"><i class="lnr lnr-heart"></i>
                                        <span><?php echo e(trans('home.addwishlist')); ?></span></a>
                                </div>




                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Single Product End -->
            </div>
            <!-- Hot Deal Product Active End -->

        </div>
        <!-- Container End -->
    </div>
    <!-- Hot Deal Products End Here -->
    <!-- Hot Deal Products End Here -->



    <!-- Big Banner Start Here -->
    <div class="big-banner mt-100 pb-85 mt-sm-60 pb-sm-45">
        <div class="container banner-2">
            <div class="banner-box">
                <div class="col-img" style="width: 224px; height: 174.44px">
                    <a href="#"><img width="224px" height="174.44px"
                            src="https://lh3.googleusercontent.com/HV9Xh3UKxVixtsPVJOVRi0qlNtYSLWn62eb1WvYwlmPNUpH803EhwCSsUiAUT8VBd3ma-daR0WClHZW7IFjgBzQ-1HUZhHTD=w300-rw" alt="banner 3"></a>
                </div>
                <div class="col-img" style="width: 224px; height: 174.44px">
                    <a href="#"><img width="224px" height="174.44px"
                            src="<?php echo e(asset('source/assets/frontend/img/banner/uudai01.jpg')); ?>" alt="banner 3"></a>
                </div>
            </div>
            <div class="banner-box">
                <div class="col-img" style="width: 224px; height: 359.79px">
                    <a href="#"><img width="224px" height="359.79px"
                            src="https://lh3.googleusercontent.com/MAp_kIA2zHy8LpCAHOFXqWID6ZQu5SlebPq4Nafktu0zixFfuFdUtgvVnl2XQ1cTFVB5pRTct7unjJ--fmucvY3LoB4SOQJr" alt="banner 3"></a>
                </div>
            </div>
            <div class="banner-box">
                <div class="col-img" style="width: 224px; height: 174.44px">
                    <a href="#"><img width="224px" height="174.44px"
                            src="<?php echo e(asset('source/assets/frontend/img/banner/uudai02.png')); ?>" alt="banner 3"></a>
                </div>
                <div class="col-img" style="width: 224px; height: 174.44px">
                    <a href="#"><img width="224px" height="174.44px"
                            src="<?php echo e(asset('source/assets/frontend/img/banner/uudai03.jpg')); ?>" alt="banner 3"></a>
                </div>
            </div>
            <div class="banner-box">
                <div class="col-img" style="width: 224px; height: 359.79px">
                    <a href="#"><img width="224px" height="359.79px"
                            src="https://lh3.googleusercontent.com/0U65LCgsBBtls6MDCPOjpSS3YIb7G05a9OlysJWXe1NYCo0RTR6oRP4giE4pesfTu6txbL4kNtKJWucP32Fx5HHxc-ljNYk" alt="banner 3"></a>
                </div>
            </div>
            <div class="banner-box">
                <div class="col-img" style="width: 224px; height: 174.44px">
                    <a href="#"><img width="224px" height="174.44px"
                            src="<?php echo e(asset('source/assets/frontend/img/banner/uudai04.jpg')); ?>" alt="banner 3"></a>
                </div>
                <div class="col-img" style="width: 224px; height: 174.44px">
                    <a href="#"><img width="224px" height="174.44px"
                            src="<?php echo e(asset('source/assets/frontend/img/banner/uudai05.jpg')); ?>" alt="banner 3"></a>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Big Banner End Here -->
    <!-- Arrivals Products Area Start Here -->
    <div class="arrivals-product pb-85 pb-sm-45">
        <div class="container">
            <div class="main-product-tab-area">
                <div class="tab-menu mb-25">
                    <div class="section-ttitle">
                        <h2><?php echo e(trans('home.newproduct')); ?></h2>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav tabs-area" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#laptop"><?php echo e(trans('home.new')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#topLaptop-1"><?php echo e(trans('home.top')); ?></a>
                        </li>
                    </ul>

                </div>

                <!-- Tab Contetn Start -->
                <div class="tab-content">

                    <div id="laptop" class="tab-pane fade show active">
                        <!-- Arrivals Product Activation Start Here -->
                        <div class="electronics-pro-active owl-carousel">
                            <?php $__currentLoopData = $new_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="<?php echo e(route('sosanh')); ?>" id="pagesosanh<?php echo e($new->id); ?>"
                                            style="visibility: hidden;"></a>
                                        <input type="hidden" id="wishList_product_name<?php echo e($new->id); ?>"
                                            value="<?php echo e($new->$multisp); ?>">
                                        <input type="hidden" id="wishList_price<?php echo e($new->id); ?>"
                                            value="<?php if($new->promotion_price == 0): ?> <?php echo e(number_format($new->unit_price, 0, ',', '.')); ?> VNĐ
                                        <?php else: ?>
                                        <?php echo e(number_format($new->promotion_price, 0, ',', '.')); ?> VNĐ <?php endif; ?>">

                                        <input type="hidden" id="instock<?php echo e($new->id); ?>" value="
                                             <?php if($new->product_quantity > 0): ?> <?php echo e(trans('home.INSTOCK')); ?>

                                         <?php else: ?>
                                         <?php echo e(trans('home.OUTSTOCK')); ?> <?php endif; ?>
                                             ">
                                        <input type="hidden" id="mota<?php echo e($new->id); ?>" value="<?php echo $new->$multi_description; ?>">


                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a id="wishList_producturl<?php echo e($new->id); ?>"
                                                href="<?php echo e(route('chitietsanpham', ['id' => $new->id, 'product_slug' => $new->product_slug])); ?>">
                                                <img id="wishList_image<?php echo e($new->id); ?>" class="primary-img"
                                                    src="source/image/product/<?php echo e($new->image); ?>" alt="single-product"
                                                    height="276.45px">
                                                <img class="secondary-img" src="source/image/product/<?php echo e($new->image); ?>"
                                                    alt="single-product" height="276.45px">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal"
                                                data-target="#myModal_<?php echo e($new->id); ?>" title="Quick View"><i
                                                    class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a
                                                        href="<?php echo e(route('chitietsanpham', ['id' => $new->id, 'product_slug' => $new->product_slug])); ?>"><?php echo e($new->$multisp); ?></a>
                                                </h4>
                                                <p>
                                                    <?php if($new->promotion_price == 0): ?>
                                                        <span
                                                            class="price"><?php echo e(number_format($new->unit_price, 0, ',', '.')); ?>

                                                            VNĐ</span>
                                                    <?php else: ?>
                                                        <span
                                                            class="price"><?php echo e(number_format($new->promotion_price, 0, ',', '.')); ?>

                                                            VNĐ</span>
                                                        <del class="prev-price"><?php echo e(number_format($new->unit_price, 0, ',', '.')); ?>

                                                            VNĐ</del>
                                                    <?php endif; ?>
                                                </p>
                                                <?php if($new->promotion_price != 0): ?>
                                                    <div class="label-product l_sale">
                                                        <?php echo e(number_format(100 - ($new->promotion_price / $new->unit_price) * 100)); ?><span
                                                            class="symbol-percent">%</span></div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <?php if($new->product_quantity > 0): ?>
                                                        <a id="addcart<?php echo e($new->id); ?>" <?php
                                                    if (Auth::check() || Session::get('user_name_login')) {
                                                        $addnewcart = route('themgiohang', $new->id);
                                                    } else {
                                                        $addnewcart = route('dangnhap');
                                                    }
                                                    ?>
                                                            href="<?php echo e($addnewcart); ?>"
                                                            title="<?php echo e(trans('home.addcart')); ?>"> +
                                                            <?php echo e(trans('home.addcart')); ?></a>
                                                    <?php else: ?>
                                                        <a id="addcart<?php echo e($new->id); ?>" class="disabled-link"> +
                                                            <?php echo e(trans('home.addcart')); ?></a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a style="cursor: pointer;" id="<?php echo e($new->id); ?>"
                                                        onclick="add_Compare(this.id)"
                                                        title="<?php echo e(trans('home.addcompare')); ?>"><i
                                                            class="lnr lnr-sync"></i>
                                                        <span><?php echo e(trans('home.addcompare')); ?></span></a>
                                                    <a style="cursor: pointer;" id="<?php echo e($new->id); ?>"
                                                        onclick="add_wishList(this.id)"
                                                        title="<?php echo e(trans('home.addwishlist')); ?>"><i
                                                            class="lnr lnr-heart"></i>
                                                        <span><?php echo e(trans('home.addwishlist')); ?></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <?php if($new->promotion_price != 0): ?>
                                            <span class="sticker-new"><?php echo e(trans('home.sale')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- Double Product End -->
                        </div>
                        <!-- Arrivals Product Activation End Here -->
                    </div>
                    <!-- #newLaptop End Here -->
                    <!-- #topLaptop-1 Start Here -->
                    <div id="topLaptop-1" class="tab-pane fade">
                        <!-- Arrivals Product Activation Start Here -->
                        <div class="electronics-pro-active owl-carousel">
                            <?php $__currentLoopData = $top_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <a href="<?php echo e(route('sosanh')); ?>" id="pagesosanh<?php echo e($top->id); ?>"
                                        style="visibility: hidden;"></a>
                                    <input type="hidden" id="wishList_product_name<?php echo e($top->id); ?>"
                                        value="<?php echo e($top->$multisp); ?>">
                                    <input type="hidden" id="wishList_price<?php echo e($top->id); ?>"
                                        value="<?php if($top->promotion_price == 0): ?> <?php echo e(number_format($top->unit_price, 0, ',', '.')); ?> VNĐ
                                    <?php else: ?>
                                    <?php echo e(number_format($top->promotion_price, 0, ',', '.')); ?> VNĐ <?php endif; ?>">
                                    <input type="hidden" id="instock<?php echo e($top->id); ?>" value="
                                             <?php if($top->product_quantity > 0): ?> <?php echo e(trans('home.INSTOCK')); ?>

                                         <?php else: ?>
                                         <?php echo e(trans('home.OUTSTOCK')); ?> <?php endif; ?>
                                             ">
                                    <input type="hidden" id="mota<?php echo e($top->id); ?>" value="<?php echo $top->$multi_description; ?>">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a id="wishList_producturl<?php echo e($top->id); ?>"
                                                href="<?php echo e(route('chitietsanpham', ['id' => $top->id, 'product_slug' => $top->product_slug])); ?>">
                                                <img id="wishList_image<?php echo e($top->id); ?>" class="primary-img"
                                                    src="source/image/product/<?php echo e($top->image); ?>" alt="single-product"
                                                    height="276.45px">
                                                <img class="secondary-img" src="source/image/product/<?php echo e($top->image); ?>"
                                                    alt="single-product" height="276.45px">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal"
                                                data-target="#myModal_<?php echo e($top->id); ?>" title="Quick View"><i
                                                    class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a
                                                        href="<?php echo e(route('chitietsanpham', ['id' => $top->id, 'product_slug' => $top->product_slug])); ?>"><?php echo e($top->$multisp); ?></a>
                                                </h4>
                                                <p>
                                                    <?php if($top->promotion_price == 0): ?>
                                                        <span
                                                            class="price"><?php echo e(number_format($top->unit_price, 0, ',', '.')); ?>

                                                            VNĐ</span>
                                                    <?php else: ?>
                                                        <span
                                                            class="price"><?php echo e(number_format($top->promotion_price, 0, ',', '.')); ?>

                                                            VNĐ</span>
                                                        <del class="prev-price"><?php echo e(number_format($top->unit_price, 0, ',', '.')); ?>

                                                            VNĐ</del>
                                                    <?php endif; ?>
                                                </p>
                                                <?php if($top->promotion_price != 0): ?>
                                                    <div class="label-product l_sale">
                                                        <?php echo e(number_format(100 - ($top->promotion_price / $top->unit_price) * 100)); ?><span
                                                            class="symbol-percent"></span>%</div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <?php if($top->product_quantity > 0): ?>
                                                        <a id="addcart<?php echo e($top->id); ?>" <?php
                                                        if (Auth::check() || Session::get('user_name_login')) {
                                                            $addnewcart = route('themgiohang', $top->id);
                                                        } else {
                                                            $addnewcart = route('dangnhap');
                                                        }
                                                        ?>
                                                            href="<?php echo e($addnewcart); ?>"
                                                            title="<?php echo e(trans('home.addcart')); ?>"> +
                                                            <?php echo e(trans('home.addcart')); ?></a>
                                                    <?php else: ?>
                                                        <a id="addcart<?php echo e($top->id); ?>" class="disabled-link"> +
                                                            <?php echo e(trans('home.addcart')); ?></a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a style="cursor: pointer;" id="<?php echo e($top->id); ?>"
                                                        onclick="add_Compare(this.id)"
                                                        title="<?php echo e(trans('home.addcompare')); ?>"><i
                                                            class="lnr lnr-sync"></i>
                                                        <span><?php echo e(trans('home.addcompare')); ?></span></a>
                                                    <a style="cursor: pointer;" id="<?php echo e($top->id); ?>"
                                                        onclick="add_wishList(this.id)" title="Wish List"><i
                                                            class="lnr lnr-heart"></i>
                                                        <span><?php echo e(trans('home.addwishlist')); ?></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <?php if($top->promotion_price != 0): ?>
                                            <span class="sticker-new"><?php echo e(trans('home.sale')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- Double Product End -->
                        </div>
                        <!-- Arrivals Product Activation End Here -->
                    </div>
                </div>
                <!-- Tab Content End -->
            </div>
            <!-- main-product-tab-area-->
        </div>
        <!-- Container End -->
    </div>
    <!-- Arrivals Products Area End Here -->
    <!-- Arrivals Products Area Start Here -->
    <div class="second-arrivals-product pb-45 pb-sm-5">
        <div class="container">
            <div class="main-product-tab-area">
                <div class="tab-menu mb-25">
                    <div class="section-ttitle">
                        <h2><?php echo e(trans('home.topproduct')); ?></h2>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav tabs-area" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#topLaptop"><?php echo e(trans('home.top')); ?> </a>
                        </li>
                    </ul>

                </div>

                <!-- Tab Contetn Start -->
                <div class="tab-content">
                    <div id="topLaptop" class="tab-pane fade show active">
                        <!-- Arrivals Product Activation Start Here -->
                        <div class="best-seller-pro-active owl-carousel">
                            <!-- Single Product Start -->
                            <?php $__currentLoopData = $top_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top_pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-product">
                                    <a href="<?php echo e(route('sosanh')); ?>" id="pagesosanh<?php echo e($top_pr->id); ?>"
                                        style="visibility: hidden;"></a>
                                    <input type="hidden" id="wishList_product_name<?php echo e($top_pr->id); ?>"
                                        value="<?php echo e($top_pr->$multisp); ?>">
                                    <input type="hidden" id="wishList_price<?php echo e($top_pr->id); ?>"
                                        value="<?php if($top_pr->promotion_price == 0): ?> <?php echo e(number_format($top_pr->unit_price, 0, ',', '.')); ?> VNĐ
                                    <?php else: ?>
                                    <?php echo e(number_format($top_pr->promotion_price, 0, ',', '.')); ?> VNĐ <?php endif; ?>">
                                    <input type="hidden" id="instock<?php echo e($top_pr->id); ?>" value="
                                             <?php if($top_pr->product_quantity > 0): ?> <?php echo e(trans('home.INSTOCK')); ?>

                                         <?php else: ?>
                                         <?php echo e(trans('home.OUTSTOCK')); ?> <?php endif; ?>
                                             ">
                                    <input type="hidden" id="mota<?php echo e($top_pr->id); ?>" value="<?php echo $top_pr->$multi_description; ?>">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a id="wishList_producturl<?php echo e($top_pr->id); ?>"
                                            href="<?php echo e(route('chitietsanpham', ['id' => $top_pr->id, 'product_slug' => $top_pr->product_slug])); ?>">
                                            <img id="wishList_image<?php echo e($top_pr->id); ?>" class="primary-img"
                                                src="source/image/product/<?php echo e($top_pr->image); ?>" alt="single-product"
                                                height="154.8px">
                                            <img class="secondary-img" src="source/image/product/<?php echo e($top_pr->image); ?>"
                                                alt="single-product" height="154.8px">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal"
                                            data-target="#myModal_<?php echo e($top_pr->id); ?>" title="Quick View"><i
                                                class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a
                                                    href="<?php echo e(route('chitietsanpham', ['id' => $top_pr->id, 'product_slug' => $top_pr->product_slug])); ?>"><?php echo e($top_pr->$multisp); ?></a>
                                            </h4>
                                            <p>
                                                <?php if($top_pr->promotion_price == 0): ?>
                                                    <span
                                                        class="price"><?php echo e(number_format($top_pr->unit_price, 0, ',', '.')); ?>

                                                        VNĐ</span>
                                                <?php else: ?>
                                                    <span
                                                        class="price"><?php echo e(number_format($top_pr->promotion_price, 0, ',', '.')); ?>

                                                        VNĐ</span>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <?php if($top_pr->product_quantity > 0): ?>
                                                    <a id="addcart<?php echo e($top_pr->id); ?>" <?php
                                                if (Auth::check() || Session::get('user_name_login')) {
                                                    $addnewcart = route('themgiohang', $top_pr->id);
                                                } else {
                                                    $addnewcart = route('dangnhap');
                                                }
                                                ?>
                                                        href="<?php echo e($addnewcart); ?>"
                                                        title="<?php echo e(trans('home.addcart')); ?>"> +
                                                        <?php echo e(trans('home.addcart')); ?></a>
                                                <?php else: ?>
                                                    <a id="addcart<?php echo e($top_pr->id); ?>" class="disabled-link"> +
                                                        <?php echo e(trans('home.addcart')); ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="actions-secondary">
                                                <a style="cursor: pointer;" id="<?php echo e($top_pr->id); ?>"
                                                    onclick="add_Compare(this.id)"
                                                    title="<?php echo e(trans('home.addcompare')); ?>"><i
                                                        class="lnr lnr-sync"></i>
                                                    <span><?php echo e(trans('home.addcompare')); ?></span></a>
                                                <a style="cursor: pointer;" id="<?php echo e($top_pr->id); ?>"
                                                    onclick="add_wishList(this.id)"
                                                    title="<?php echo e(trans('home.addwishlist')); ?>"><i
                                                        class="lnr lnr-heart"></i>
                                                    <span><?php echo e(trans('home.addwishlist')); ?></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- Single Product End -->
                        </div>
                        <!-- Arrivals Product Activation End Here -->
                    </div>
                    <!-- #electronics End Here -->
                </div>
                <!-- Tab Content End -->
            </div>
            <!-- main-product-tab-area-->
        </div>
        <!-- Container End -->
    </div>
    <!-- Arrivals Products Area End Here -->
    <!-- Like Products Area Start Here -->
    <style type="text/css">
        #scrolllike {
            margin-left: 15%;
            height: 330px;
            overflow: scroll;
        }

        #scrolllike::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        #scrolllike::-webkit-scrollbar {
            width: 6px;
            height: 0px;
            background-color: #F5F5F5;
        }

        #scrolllike::-webkit-scrollbar-thumb {
            background-color: #E62E04;
        }

    </style>
    <div id="maylike">

    </div>
    <!-- Lile Products Area End Here -->
    <!-- Brand Banner Area Start Here -->
    <div class="main-brand-banner pt-95 pb-100 pt-sm-55 pb-sm-60">
        <div class="container">
            <div class="section-ttitle mb-20">
                <h2><?php echo e(trans('home.goodbrand')); ?></h2>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3">
                    <div class="col-img" style="width: 292.5px; height: 326.74px">
                        <img width="292.5px" height="326.74px"
                            src="<?php echo e(asset('source/assets/frontend/img/banner/thuonghieu01.jpg')); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Brand Banner Start -->
                    <div class="brand-banner owl-carousel">
                        <div class="single-brand">
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    class="img" src="<?php echo e(asset('source/assets/frontend/img/brand/4.jpg')); ?>"
                                    alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    class="img" src="<?php echo e(asset('source/assets/frontend/img/brand/6.jpg')); ?>"
                                    alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    class="img" src="<?php echo e(asset('source/assets/frontend/img/brand/2.jpg')); ?>"
                                    alt="brand-image"></a>
                        </div>
                        <div class="single-brand">
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    class="img" src="<?php echo e(asset('source/assets/frontend/img/brand/5.jpg')); ?>"
                                    alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/2.jpg')); ?>" alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/5.jpg')); ?>" alt="brand-image"></a>
                        </div>
                        <div class="single-brand">
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/1.jpg')); ?>" alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/5.jpg')); ?>" alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/3.jpg')); ?>" alt="brand-image"></a>

                        </div>
                        <div class="single-brand">
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/5.jpg')); ?>" alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/3.jpg')); ?>" alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/4.jpg')); ?>" alt="brand-image"></a>
                        </div>
                        <div class="single-brand">
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/3.jpg')); ?>" alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/2.jpg')); ?>" alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/5.jpg')); ?>" alt="brand-image"></a>
                        </div>
                        <div class="single-brand">
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/2.jpg')); ?>" alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/3.jpg')); ?>" alt="brand-image"></a>
                            <a style="width: 194.33px; height: 108.33px" href="#"><img width="173.33px" height="82.53px"
                                    src="<?php echo e(asset('source/assets/frontend/img/brand/4.jpg')); ?>" alt="brand-image"></a>
                        </div>
                    </div>
                    <!-- Brand Banner End -->

                </div>
                <div class="col-lg-3">
                    <div class="col-img" style="width: 292.5px; height: 326.74px">
                        <img width="292.5px" height="326.74px"
                            src="<?php echo e(asset('source/assets/frontend/img/banner/thuonghieu02.jpg')); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Brand Banner Area End Here -->
    <div class="big-banner pb-100 pb-sm-60">
        <div class="container big-banner-box">
            <div class="col-img" style="width: 580px; height: 240px">
                <a href="#">
                    <img width="580px" height="240px"
                        src="<?php echo e(asset('source/assets/frontend/img/banner/thuonghieu03.jpg')); ?>" alt="">
                </a>
            </div>
            <div class="col-img" style="width: 580px; height: 240px">
                <a href="#">
                    <img src="<?php echo e(asset('source/assets/frontend/img/banner/thuonghieu04.jpg')); ?>" alt="">
                </a>
            </div>
        </div>
        <!-- Container End -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\the11laptop\resources\views/FrontEnd/TrangChu.blade.php ENDPATH**/ ?>