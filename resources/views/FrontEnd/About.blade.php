@extends('Layout')
@section('title')
    {{ trans('home.about') }}
@endsection
@section('content-layout')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-area mt-30">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('trang-chu')}}">{{trans('home.home')}}</a></li>
                    <li class="active"><a href="about.html">{{trans('home.about')}}</a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Breadcrumb End -->
    <!-- About Us Start Here -->
    <div class="about-us pt-100 pt-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sidebar-img mb-all-30">
                        <img src="{{asset('source/assets/frontend/img/blog/vietdh.jpg')}}" alt="single-blog-img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-desc">
                        <h3 class="mb-10 about-title">GIỚI THIỆU CHUNG</h3>
                        <p class="mb-20">Công ty The11Laptop là một doanh nghiệp chuyên cung cấp các sản phẩm laptop chất lượng cao, phục vụ nhu cầu công nghệ của người dùng. The11Laptop do ông Doãn Huy Việt sở hữu và chính thức được thành lập vào ngày 1 tháng 1 năm 2024.</p>
                        <p class="mb-20">The11Laptop cam kết mang đến cho khách hàng những dòng sản phẩm laptop đa dạng từ các thương hiệu nổi tiếng trên thế giới. Công ty không chỉ chú trọng đến chất lượng sản phẩm mà còn đặt khách hàng lên hàng đầu với dịch vụ hỗ trợ tận tình, chu đáo.</p>
                        <p class="mb-20">Các sản phẩm của The11Laptop được chọn lọc kỹ càng để đảm bảo đáp ứng đầy đủ các tiêu chí về hiệu suất, độ bền và tính năng hiện đại. Bên cạnh việc cung cấp các dòng laptop mới, công ty còn cung cấp các dịch vụ bảo hành, sửa chữa và tư vấn kỹ thuật, nhằm đảm bảo rằng khách hàng sẽ luôn có được trải nghiệm tốt nhất khi sử dụng sản phẩm từ The11Laptop.</p>
                        <p class="mb-20">Với sự lãnh đạo của ông Doãn Huy Việt, một người có tầm nhìn và kinh nghiệm trong lĩnh vực công nghệ, The11Laptop đang dần khẳng định vị thế của mình trên thị trường, trở thành địa chỉ tin cậy cho những ai đang tìm kiếm các sản phẩm laptop chất lượng.</p>
                        <h3 class="mb-10 about-title">TẦM NHÌN VÀ SỨ MỆNH</h3>
                        <p><b>Tầm nhìn:</b></p>
                        <p>- Là chuỗi bán lẻ các sản phẩm công nghệ hàng đầu với độ phủ rộng khắp các tỉnh thành trên cả nước. </p>
                        <p><b>Sứ mệnh:</b></p>
                        <p>- Với sứ mệnh phụng sự, chúng tôi đem đến cho khách hàng những trải nghiệm và dịch vụ ưu việt, qua đó tạo nên những giá trị tốt đẹp hơn cho cộng đồng và cuộc sống.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- About Us End Here -->
    <!-- About Us Team Start Here -->
    <div class="about-team pt-100 pt-sm-60">
        <div class="container">
            <h3 class="mb-30 about-title">GIÁ TRỊ CỐT LÕI</h3>
            <div class="row text-center">
                <!-- Single Team Start Here -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="single-team mb-all-30">
                        <div class="team-img sidebar-img">
                            <img src="{{asset('source/assets/frontend/img/team/tantam.png')}}" alt="team-image">
                            <div class="team-link">
                                <ul>
                                    <li><h6>THE11LAPTOP đặt tận tâm là nền tảng của phục vụ, lấy khách hàng làm trung tâm, mang đến những giá trị đích thực tới khách hàng và đối tác.</h6></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>TẬN TÂM</h4>
                            <p>Vượt lên sự mong đợi</p>
                        </div>
                    </div>
                </div>
                <!-- Single Team End Here -->
                <!-- Single Team Start Here -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="single-team mb-all-30">
                        <div class="team-img sidebar-img">
                            <img src="{{asset('source/assets/frontend/img/team/trachnhiem.png')}}" alt="team-image">
                            <div class="team-link">
                                <ul>
                                    <li><h6>THE11LAPTOP đặt chữ TÍN lên hàng đầu, luôn thể hiện tinh thần trách nhiệm cao cùng phương châm “Làm hết việc chứ không làm hết giờ”.</h6></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>TRÁCH NHIỆM</h4>
                            <p>Chúng ta luôn cố gắng</p>
                        </div>
                    </div>
                </div>
                <!-- Single Team End Here -->
                <!-- Single Team Start Here -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="single-team mb-xxs-30">
                        <div class="team-img sidebar-img">
                            <img src="{{asset('source/assets/frontend/img/team/khacbiet.jpg')}}" alt="team-image">
                            <div class="team-link">
                                <ul>
                                    <li><h6>THE11LAPTOP đặt sự khác biệt là chủ trương để xây dựng công ty thành một doanh nghiệp dẫn đầu.</h6></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>KHÁC BIỆT</h4>
                            <p>Dám nghĩ - Dám làm</p>
                        </div>
                    </div>
                </div>
                <!-- Single Team End Here -->
                <!-- Single Team Start Here -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="single-team">
                        <div class="team-img sidebar-img">
                            <img src="{{asset('source/assets/frontend/img/team/sangtao.png')}}" alt="team-image">
                            <div class="team-link">
                                <ul>
                                    <li><h6>THE11LAPTOP coi sáng tạo là đòn bẩy để phát triển, luôn đề cao các sáng kiến để hoàn thiện, hiệu quả hơn, nâng tầm giá trị.</h6></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>SÁNG TẠO</h4>
                            <p>Không gì là không thể</p>
                        </div>
                    </div>
                </div>
                <!-- Single Team End Here -->
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- About Us Team End Here -->
    <!-- About Us Skills Start Here -->
    <div class="about-skill ptb-100 ptb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="about-title mb-20">NHÂN SỰ THE11LAPTOP</h3>
                    <div><h6>THỐNG KÊ TRÌNH ĐỘ HỌC VẤN</h6></div>
                    <div class="skill-progress mb-all-40">
                        <div class="progress">
                            <div class="skill-title">Trên đại học 20%</div>
                            <div class="progress-bar wow fadeInLeft" data-wow-delay="0.2s" role="progressbar" style="width: 20%; visibility: visible;   animation-delay: 0.2s; animation-name: fadeInLeft;">
                            </div>
                        </div>
                        <div class="progress">
                            <div class="skill-title">Đại học 60%</div>
                            <div  class="progress-bar wow fadeInLeft" data-wow-delay="0.3s" role="progressbar" style="width: 60%; visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                            </div>
                        </div>
                        <div class="progress">
                            <div class="skill-title">Cao đẳng, Trung cấp 15%</div>
                            <div class="progress-bar wow fadeInLeft" data-wow-delay="0.4s" role="progressbar" style="width: 15%; visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            </div>
                        </div>
                        <div class="progress">
                            <div class="skill-title">Trình độ khác 5%</div>
                            <div class="progress-bar wow fadeInLeft" data-wow-delay="0.5s" role="progressbar" style="width: 5%; visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                            </div>
                        </div>
                        <div>
                            <p class="mb-20" class="lnr lnr-pointer-right">Công Ty Cổ Phần Đầu Tư Công Nghệ THE11LAPTOP sở hữu đội ngũ cán bộ, nhân viên, kỹ thuật viên lên đến trên 500 người với tay nghề kỹ thuật cao, giàu chuyên môn và kinh nghiệm.</p>
                        </div>
                        <div>
                            <p class="mb-20" class="lnr lnr-pointer-right">Mục tiêu của THE11LAPTOP là đem đến chất lượng sản phẩm và dịch vụ công nghệ hoàn hảo nhất, đáp ứng nhu cầu đa dạng của khách hàng, sản phẩm phù hợp tiêu chuẩn quốc tế.</p>
                        </div>
                        <div>
                            <p class="mb-20" class="lnr lnr-pointer-right">Với tiêu chí "Môi trường tốt tạo ra những giá trị tuyệt vời”, THE11LAPTOP luôn là đơn vị tiên phong xây dựng môi trường làm việc trẻ trung, năng động với chính sách phúc lợi và đãi ngộ hàng đầu cho đội ngũ CBNV.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="ht-single-about">
                        <h3 class="about-title mb-20">HỆ THỐNG CÁC SHOWROOM CỦA THE11LAPTOP</h3>
                        <div class="ht-about-work">
                            <span>1</span>
                            <div class="ht-work-text">
                                <h5><a href="#">THE11LAPTOP - ĐÔNG SƠN</a></h5>
                                <p><i class="lnr lnr-map-marker"></i><a href="https://maps.app.goo.gl/UaRGcCmSbEGhB3nc9">Số 1 Đông Thịnh - Đông Sơn - Thanh Hoá</a></p>
                                <p><i class="lnr lnr-phone-handset"></i>Tel: 0398786520 - 0398786731</p>
                                <p><i class="lnr lnr-envelope"></i>Email: 1dongthinh@the11laptop</p>
                                <p><i class="lnr lnr-clock"></i>Thời gian mở cửa: Từ 8h-20h hàng ngày</p>
                            </div>
                        </div>
                        <div class="ht-about-work">
                            <span>2</span>
                            <div class="ht-work-text">
                                <h5><a href="#">THE11LAPTOP - KHƯƠNG TRUNG</a></h5>
                                <p><i class="lnr lnr-map-marker"></i><a href="https://maps.app.goo.gl/UaRGcCmSbEGhB3nc9">Số 97 Khương Trung - Thanh Xuân - Hà Nội</a></p>
                                <p><i class="lnr lnr-phone-handset"></i>Tel: 0398786520 - 0398786731</p>
                                <p><i class="lnr lnr-envelope"></i>Email: 97khuongtrung@the11laptop</p>
                                <p><i class="lnr lnr-clock"></i>Thời gian mở cửa: Từ 8h-20h hàng ngày</p>
                            </div>
                        </div>
                        <div class="ht-about-work">
                            <span>3</span>
                            <div class="ht-work-text">
                                <h5><a href="#">THE11LAPTOP - TP. THANH HOÁ</a></h5>
                                <p><i class="lnr lnr-map-marker"></i><a href="https://maps.app.goo.gl/UaRGcCmSbEGhB3nc9">Số 36 Phú Sơn - Lam Sơn - Thanh Hoá</a></p>
                                <p><i class="lnr lnr-phone-handset"></i>Tel: 0398786520 - 0398786731</p>
                                <p><i class="lnr lnr-envelope"></i>Email: 36phuson@the11laptop</p>
                                <p><i class="lnr lnr-clock"></i>Thời gian mở cửa: Từ 8h-20h hàng ngày</p>
                            </div>
                        </div>
                        <div class="ht-about-work">
                            <span>4</span>
                            <div class="ht-work-text">
                                <h5><a href="#">THE11LAPTOP - ĐỐNG ĐA</a></h5>
                                <p><i class="lnr lnr-map-marker"></i><a href="https://maps.app.goo.gl/UaRGcCmSbEGhB3nc9">Số 255 Tây Sơn - Đống Đa - Hà Nội</a></p>
                                <p><i class="lnr lnr-phone-handset"></i>Tel: 0398786520 - 0398786731</p>
                                <p><i class="lnr lnr-envelope"></i>Email: 255tayson@the11laptop</p>
                                <p><i class="lnr lnr-clock"></i>Thời gian mở cửa: Từ 8h-20h hàng ngày</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- About Us Skills End Here -->
@endsection
