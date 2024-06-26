<!-- Support Area Start Here -->
<div class="support-area bdr-top" >
    <div class="container">
        <div class="d-flex flex-wrap text-center" >
            <div class="single-support" >
                <div class="support-icon">
                    <i class="lnr lnr-laptop"></i>
                </div>
                <div class="support-desc">
                    <h6><?php echo e(trans('home.GENUINE PRODUCT')); ?></h6>
                    <span>Uy tín tạo niềm tin</span>
                </div>
            </div>
            <div class="single-support" >
                <div class="support-icon">
                    <i class="lnr lnr-car" ></i>
                </div>
                <div class="support-desc">
                    <h6><?php echo e(trans('home.DELIVERY POLICY')); ?></h6>
                    <span>Nhận hàng và thanh toán tại nhà</span>
                </div>
            </div>
            <div class="single-support">
                <div class="support-icon">
                   <i class="lnr lnr-sync"></i>
                </div>
                <div class="support-desc">
                    <h6><?php echo e(trans('home.EASY RETURN')); ?></h6>
                    <span>1 đổi 1 trong 15 ngày</span>
                </div>
            </div>
            <div class="single-support">
                <div class="support-icon">
                   <i class="lnr lnr-select"></i>
                </div>
                <div class="support-desc">
                    <h6><?php echo e(trans('home.CONVENIENT PAYMENT')); ?></h6>
                    <span>Trả tiền mặt, CK nhanh chóng, bảo mật</span>
                </div>
            </div>
            <div class="single-support">
                <div class="support-icon">
                   <i class="lnr lnr-bubble"></i>
                </div>
                <div class="support-desc">
                    <h6><?php echo e(trans('home.ENTHUSIASTIC SUPPORT')); ?></h6>
                    <span>Tư vấn, giải đáp mọi thắc mắc</span>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Support Area End Here -->
<!-- them so sanh -->
<div class="modal" id="sosanhsp">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">

              <table class="table table-hover" id="row_compare" >
                <thead>
                  <tr style="text-align: center;">
                    <th><?php echo e(trans('home.nameproduct')); ?></th>
                    <th><?php echo e(trans('home.hinhanh')); ?></th>
                    <th><?php echo e(trans('home.del')); ?></th>
                    <th><?php echo e(trans('home.chitiet')); ?></th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
</div>

<!-- them yeu thich -->
<div class="modal" id="yeuthichsp">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">

              <table class="table table-hover" id="row_yeuthich" >
                <thead>
                  <tr style="text-align: center;">
                    <th><?php echo e(trans('home.nameproduct')); ?></th>
                    <th><?php echo e(trans('home.hinhanh')); ?></th>
                    <th><?php echo e(trans('home.del')); ?></th>
                    <th><?php echo e(trans('home.chitiet')); ?></th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="<?php echo e(route('wishlist')); ?>" class="btn btn-danger"><?php echo e(trans('home.chitiet')); ?></a>
        </div>

      </div>
    </div>
</div>
<!-- Footer Area Start Here -->
<footer class="off-white-bg2 pt-95 bdr-top pt-sm-55 " >
    <!-- Footer Top Start -->
    <div class="footer-top">
        <div class="container">
            <!-- Signup Newsletter Start -->
            <div class="row mb-60">
                 <div class="col-xl-7 col-lg-7 ml-auto mr-auto col-md-8">
                    <div class="footer-newsletter-title">
                         <h4>ĐĂNG KÝ NHẬN EMAIL THÔNG BÁO KHUYẾN MẠI</h4>
                     </div>
                     <div class="newsletter-box">
                         <form action="#">
                              <input class="subscribe" placeholder="Nhập email hoặc sđt của bạn" name="email" id="subscribe" type="text">
                              <button type="submit" class="submit" >Gửi!</button>
                         </form>
                     </div>
                 </div>
            </div>
            <!-- Signup-Newsletter End -->
            <div class="row">
                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-footer mb-sm-40">
                        <h3 class="footer-title">THE11LAPTOP</h3>
                        <div class="footer-content">
                            <ul class="footer-list">
                                <li><a href="<?php echo e(route('gioithieu')); ?>"><?php echo e(trans('home.about')); ?></a></li>
                                <li><a href="<?php echo e(route('gioithieu')); ?>"><?php echo e(trans('home.Delivery Information')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.Privacy Policy')); ?></a></li>
                                <li><a href="lien-he"><?php echo e(trans('home.Terms & Conditions')); ?></a></li>
                                <li><a href="<?php echo e(route('dangnhap')); ?>"><?php echo e(trans('home.FAQs')); ?></a></li>
                                <li><a href="<?php echo e(route('dangnhap')); ?>"><?php echo e(trans('home.Return Policy')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-footer mb-sm-40">
                        <h3 class="footer-title"><?php echo e(trans('home.Customer Service')); ?></h3>
                        <div class="footer-content">
                            <ul class="footer-list">
                                <li><a href="lien-he"><?php echo e(trans('home.Customer Service')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.Contact Us')); ?></a></li>
                                <li><a href="<?php echo e(route('wishlist')); ?>"><?php echo e(trans('home.addwishlist')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.Order History')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.Site Map')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.CodeCoupon')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-footer mb-sm-40">
                        <h3 class="footer-title"><?php echo e(trans('home.GENERAL POLICY')); ?></h3>
                        <div class="footer-content">
                            <ul class="footer-list">
                                <li><a href="#"><?php echo e(trans('home.General policies and regulations')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.Warranty Policy')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.Genuine product policy')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.Policy for businesses')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.Secure customer information')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.Delivery policy')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-footer mb-sm-40">
                        <h3 class="footer-title"><?php echo e(trans('home.PROMOTION INFORMATION')); ?></h3>
                        <div class="footer-content">
                            <ul class="footer-list">
                                <li><a href="#"><?php echo e(trans('home.Promotional information')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.Promotional products')); ?></a></li>
                                <li><a href="#"><?php echo e(trans('home.New product')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer mb-sm-40">
                        <h3 class="footer-title">My Account</h3>
                        <div class="footer-content">
                            <ul class="footer-list address-content">
                                <li><i class="lnr lnr-map-marker"></i><a href="https://maps.app.goo.gl/UaRGcCmSbEGhB3nc9">Address: Ngách 97/16 Khương Trung</a> </li>
                                <li><i class="lnr lnr-envelope"></i><a href="mailto:vietdtds@gmail.com"> mail Us: 2051060780@e.tlu.edu.vn </a></li>
                                <li>
                                    <i class="lnr lnr-phone-handset"></i><a href="tel:+84398786520"> Phone: (+84) 398786520) </a>
                                </li>
                            </ul>
                            <div class="payment mt-25 bdr-top pt-30">
                                <a href="#"><img class="img" src="<?php echo e(asset('source/assets/frontend/img/payment/1.png')); ?>" alt="payment-image"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Footer Top End -->
    <!-- Footer Middle Start -->
    <div class="footer-middle text-center">
        <div class="container">
            <div class="footer-middle-content pt-20 pb-30">
                    <ul class="social-footer">
                        <li><a href="https://www.facebook.com/huyvietds1"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
<!--                         <li><a href="#"><img src="<?php echo e(asset('source/assets/frontend/img/icon/social-img1.png')); ?>" alt="google play"></a></li>
                        <li><a href="#"><img src="<?php echo e(asset('source/assets/frontend/img/icon/social-img2.png')); ?>" alt="app store"></a></li> -->
                    </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Footer Middle End -->
    <!-- Footer Bottom Start -->
    <div class="footer-bottom pb-30">
        <div class="container">

             <div class="copyright-text text-center">
                <p>© 2024 <a target="_blank" href="#">The11Laptop</a> Công ty trách nhiệm hữu hạn một thành viên</p>
             </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Footer Bottom End -->
</footer>
<!-- Footer Area End Here -->
<!-- Quick View Content Start -->
<div class="main-product-thumbnail quick-thumb-content">
    <div class="container">
        <!-- The Modal -->
        <?php $__currentLoopData = $all_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="myModal_<?php echo e($all->id); ?>">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <!-- Main Thumbnail Image Start -->
                            <div class="col-lg-5 col-md-6 col-sm-5">
                                <!-- Thumbnail Large Image start -->
                                <div class="tab-content">
                                    <div id="thumb1_<?php echo e($all->id); ?>" class="tab-pane fade show active">
                                        <a data-fancybox="images" href="source/image/product/<?php echo e($all->image); ?>"><img src="source/image/product/<?php echo e($all->image); ?>" alt="product-view" height="331.66px" width="331.66px"></a>
                                    </div>
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="product-thumbnail mt-20">
                                    <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                        <a class="active" data-toggle="tab" href="#thumb1_<?php echo e($all->id); ?>"><img src="source/image/product/<?php echo e($all->image); ?>" alt="product-thumbnail" height="98.55px" width="98.55px"></a>
                                    </div>
                                </div>
                                <!-- Thumbnail image end -->
                            </div>
                            <!-- Main Thumbnail Image End -->
                            <!-- Thumbnail Description Start -->
                            <div class="col-lg-7 col-md-6 col-sm-7">
                                <div class="thubnail-desc fix mt-sm-40">
                                    <h3 class="product-header"><?php echo e($all->$multisp); ?></h3>
                                    <div class="pro-price mtb-30">
                                        <p class="d-flex align-items-center">
                                            <?php if($all->promotion_price != 0): ?>
                                            <span class="prev-price"><?php echo e(number_format($all->unit_price,0,',','.')); ?> VNĐ</span>
                                            <span class="price"><?php echo e(number_format($all->promotion_price,0,',','.')); ?> VNĐ</span>
                                            <span class="saving-price">sale <?php echo e(number_format(100-($all->promotion_price/$all->unit_price)*100)); ?>%</span>
                                            <?php else: ?>
                                            <span class="price"><?php echo e(number_format($all->unit_price,0,',','.')); ?> VNĐ</span>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                    <p class="mb-20 pro-desc-details"><?php echo $all->$multi_description; ?></p>
<!--                                     <div class="color mb-20">
                                        <label>color</label>
                                        <ul class="color-list">
                                            <li>
                                                <a class="orange active" href="#"></a>
                                            </li>
                                            <li>
                                                <a class="paste" href="#"></a>
                                            </li>
                                        </ul>
                                    </div> -->
                                    <div class="box-quantity d-flex">
                                        <form action="#">
                                            <input class="quantity mr-40" type="number" min="1" value="1">
                                        </form>
                                        <?php if($all->product_quantity>0): ?>
                                        <a class="add-cart"
                                        <?php
                                            if(Auth::check() || Session::get('user_name_login')){
                                                $addnewcart = route('themgiohang',$all->id);
                                            }else{
                                                $addnewcart = route('dangnhap');
                                            }
                                        ?>
                                        href="<?php echo e($addnewcart); ?>" title="<?php echo e(trans('home.addcart')); ?>">+ <?php echo e(trans('home.addcart')); ?></a>
                                        <?php else: ?>
                                        <a class="add-cart disabled-link"> + <?php echo e(trans('home.addcart')); ?></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="pro-ref mt-15">
                                        <p>
                                            <?php if($all->product_quantity>0): ?>
                                            <span class="in-stock"><i class="ion-checkmark-round"></i> <?php echo e(trans('home.INSTOCK')); ?></span>
                                            <?php else: ?>
                                            <span class="out-stock"><i class="ion-close"></i> <?php echo e(trans('home.OUTSTOCK')); ?></span>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnail Description End -->
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="custom-footer">
                        <div class="socila-sharing">
                            <ul class="d-flex">
                                <li>share</li>
                                <li><a class="share" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($url_canonical); ?>&amp;src=sdkpreparse"><i class="fa fa-facebook " aria-hidden="true"></i></a></li>
                                <li><a class="share" href="http://twitter.com/share?url=<?php echo e($url_canonical); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a class="share" href="https://plus.google.com/share?url=<?php echo e($url_canonical); ?>"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                                <li><a class="share" href="http://pinterest.com/pin/create/button/?url=<?php echo e($url_canonical); ?>&description=<?php echo e($all->$multi_description); ?>&media=<?php echo e($image_og); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- Quick View Content End -->
<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
 attribution="setup_tool"
 page_id="100286602132094"
 theme_color="#0A7CFF">
</div>

<?php /**PATH C:\laragon\www\the11laptop\resources\views/FrontEnd/Footer.blade.php ENDPATH**/ ?>