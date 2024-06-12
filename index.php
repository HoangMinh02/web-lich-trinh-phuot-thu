<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travelix</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Travelix Project" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css" />
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css" />
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
    <link rel="stylesheet" type="text/css" href="styles/responsive.css" />
</head>

<body>
    <?php
    require_once('Database.php');
    $sql = 'SELECT * FROM diadiem WHERE pho_bien = 1';

    $result = mysqli_query($connect, $sql);

    mysqli_fetch_assoc($result);
    mysqli_fetch_assoc($result);
    mysqli_fetch_assoc($result);

    mysqli_data_seek($result, 0);

    $datas = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $datas[] = $row;
    }
    ?>
    <div class="super_container">
        <!-- Header -->

        <header class="header">
            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="phone">0123456789</div>
                            <div class="social">
                                <ul class="social_list">
                                    <li class="social_list_item">
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="social_list_item">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="social_list_item">
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="social_list_item">
                                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="social_list_item">
                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="social_list_item">
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="user_box ml-auto">
                                <div class="user_box_login user_box_link"><a href="#">Đăng nhập</a></div>
                                <div class="user_box_register user_box_link"><a href="#">Đăng kí</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                            <div class="logo_container">
                                <div class="logo">
                                    <a href="#"><img src="images/logo.png" alt="" />travelix</a>
                                </div>
                            </div>
                            <div class="main_nav_container ml-auto">
                                <ul class="main_nav_list">
                                    <li class="main_nav_item"><a href="#">Trang chủ</a></li>
                                    <li class="main_nav_item"><a href="about.html">Lịch trình</a></li>
                                    <li class="main_nav_item"><a href="blog.html">Địa điểm</a></li>
                                    <li class="main_nav_item"><a href="contact.html">Về chúng tôi</a></li>
                                </ul>
                            </div>
                            <div class="hamburger">
                                <i class="fa fa-bars trans_200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container">
                    <div class="menu_close"></div>
                </div>
                <div class="logo menu_logo">
                    <a href="#"><img src="images/logo.png" alt="" /></a>
                </div>
                <ul>
                    <li class="menu_item"><a href="#">Trang chủ</a></li>
                    <li class="menu_item"><a href="about.html">Lịch trình</a></li>
                    <li class="menu_item"><a href="blog.html">Địa điểm</a></li>
                    <li class="menu_item"><a href="contact.html">Về chúng tôi</a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
            <!-- Home Slider -->

            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">
                    <!-- Slider Item -->
                    <div class="owl-item home_slider_item">
                        <!-- Image by https://unsplash.com/@anikindimitry -->
                        <div class="home_slider_background" style="background-image: url(http://canthomekongtour.com/static/media/hanoi/ma_so_1229271218.jpg)"></div>

                        <div class="home_slider_content text-center">
                            <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                                <h1>Hè rồi!!!</h1>
                                <h1>lên kèo đi phượt thôi</h1>
                                <div class="button home_slider_button">
                                    <div class="button_bcg"></div>
                                    <a href="#">Khám phá ngay<span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="owl-item home_slider_item">
                        <!-- Image by https://unsplash.com/@anikindimitry -->
                        <div class="home_slider_background" style="background-image: url(http://canthomekongtour.com/static/media/hanoi/ma_so_1229271218.jpg)"></div>

                        <div class="home_slider_content text-center">
                            <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                                <h1>Hè rồi!!!</h1>
                                <h1>lên kèo đi phượt thôi</h1>
                                <div class="button home_slider_button">
                                    <div class="button_bcg"></div>
                                    <a href="#">Khám phá ngay<span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="owl-item home_slider_item">
                        <!-- Image by https://unsplash.com/@anikindimitry -->
                        <div class="home_slider_background" style="background-image: url(http://canthomekongtour.com/static/media/hanoi/ma_so_1229271218.jpg)"></div>

                        <div class="home_slider_content text-center">
                            <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                                <h1>Hè rồi!!!</h1>
                                <h1>lên kèo đi phượt thôi</h1>
                                <div class="button home_slider_button">
                                    <div class="button_bcg"></div>
                                    <a href="#">Khám phá ngay<span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Home Slider Nav - Prev -->
                <div class="home_slider_nav home_slider_prev">
                    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                        <defs>
                            <linearGradient id="home_grad_prev">
                                <stop offset="0%" stop-color="#fa9e1b" />
                                <stop offset="100%" stop-color="#8d4fff" />
                            </linearGradient>
                        </defs>
                        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z" />
                        <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 " />
                    </svg>
                </div>

                <!-- Home Slider Nav - Next -->
                <div class="home_slider_nav home_slider_next">
                    <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                        <defs>
                            <linearGradient id="home_grad_next">
                                <stop offset="0%" stop-color="#fa9e1b" />
                                <stop offset="100%" stop-color="#8d4fff" />
                            </linearGradient>
                        </defs>
                        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z" />
                        <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 " />
                    </svg>
                </div>

                <!-- Home Slider Dots -->

                <div class="home_slider_dots">
                    <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                        <li class="home_slider_custom_dot active">
                            <div></div>
                            01.
                        </li>
                        <li class="home_slider_custom_dot">
                            <div></div>
                            02.
                        </li>
                        <li class="home_slider_custom_dot">
                            <div></div>
                            03.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Intro -->

        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="intro_title text-center">Lịch trình nổi bật dành cho bạn</h2>
                    </div>
                </div>
                <div class="row intro_items">
                    <!-- Intro Item -->
                    <?php foreach ($datas as $data) : ?>
                        <div class="col-lg-4 intro_col">
                            <div class="intro_item">
                                <div class="intro_item_overlay"></div>
                                <!-- Image by https://unsplash.com/@dnevozhai -->
                                <div class="intro_item_background" style="
                                        background-image: url(https://scr.vn/wp-content/uploads/2020/07/H%C3%ACnh-%E1%BA%A3nh-V%E1%BB%8Bnh-H%E1%BA%A1-Long.jpg);
                                    "></div>
                                <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                    <div class="button intro_button">
                                        <div class="button_bcg"></div>
                                        <a href="#">Xem thêm<span></span><span></span><span></span></a>
                                    </div>
                                    <div class="intro_center text-center">
                                        <h1><?= $data['ten_dia_diem'] ?></h1>
                                        <div class="rating rating_4">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>

        <!-- Offers -->

        <div class="offers">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="section_title">Điểm đến phổ biến</h2>
                    </div>
                </div>
                <div class="row offers_items">
                    <!-- Offers Item -->
                    <?php foreach ($datas as $data) : ?>
                        <div class="col-lg-6 offers_col">
                            <div class="offers_item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="offers_image_container">
                                            <!-- Image by https://unsplash.com/@kensuarez -->
                                            <div class="offers_image_background" style="background-image: url(https://phunugioi.com/wp-content/uploads/2020/10/anh-ha-noi.jpg)"></div>
                                            <div class="offer_name"><a href="#"><?= $data['ten_dia_diem'] ?></a></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="offers_content">
                                            <!-- <div class="offers_price">$70<span>per night</span></div> -->

                                            <p class="offers_text"><?= $data['mo_ta'] ?></p>
                                            <!-- <div class="offers_icons">
                                                <ul class="offers_icons_list">
                                                    <li class="offers_icons_item"><img src="images/post.png" alt="" /></li>
                                                    <li class="offers_icons_item"><img src="images/compass.png" alt="" /></li>
                                                    <li class="offers_icons_item"><img src="images/bicycle.png" alt="" /></li>
                                                    <li class="offers_icons_item"><img src="images/sailboat.png" alt="" /></li>
                                                </ul>
                                            </div> -->

                                            <div class="offers_link"><a href="offers.html">Xem thêm</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>

        <div class="video_area video_bg overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video_wrap text-center">
                            <h3>Việt Nam là những chuyến đi</h3>
                            <div class="video_icon">
                                <a class="popup-video video_play_button" href="https://youtu.be/46EjkkDo00g?si=vohTOQSLjmT2Re2J">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- Footer Column -->
                    <div class="col-lg-4 footer_column">
                        <div class="footer_col">
                            <div class="footer_content footer_about">
                                <div class="logo_container footer_logo">
                                    <div class="logo">
                                        <a href="#"><img src="images/logo.png" alt="" />travelix</a>
                                    </div>
                                </div>
                                <p class="footer_about_text">
                                    Travelix là trang web tin tức du lịch hàng đầu, cung cấp thông tin về các điểm đến hấp dẫn, kinh nghiệm du
                                    lịch, ẩm thực đặc sắc và nhiều hơn nữa.
                                </p>
                                <ul class="footer_social_list">
                                    <li class="footer_social_item">
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                    <li class="footer_social_item">
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    </li>
                                    <li class="footer_social_item">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="footer_social_item">
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li class="footer_social_item">
                                        <a href="#"><i class="fa fa-behance"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-4 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">Bài viết</div>
                            <div class="footer_content footer_blog">
                                <!-- Footer blog item -->
                                <div class="footer_blog_item clearfix">
                                    <div class="footer_blog_image">
                                        <img src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov" />
                                    </div>
                                    <div class="footer_blog_content">
                                        <div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
                                        <div class="footer_blog_date">Nov 29, 2017</div>
                                    </div>
                                </div>

                                <!-- Footer blog item -->
                                <div class="footer_blog_item clearfix">
                                    <div class="footer_blog_image">
                                        <img src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie" />
                                    </div>
                                    <div class="footer_blog_content">
                                        <div class="footer_blog_title"><a href="blog.html">New destinations for you</a></div>
                                        <div class="footer_blog_date">Nov 29, 2017</div>
                                    </div>
                                </div>

                                <!-- Footer blog item -->
                                <div class="footer_blog_item clearfix">
                                    <div class="footer_blog_image">
                                        <img src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87" />
                                    </div>
                                    <div class="footer_blog_content">
                                        <div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
                                        <div class="footer_blog_date">Nov 29, 2017</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-4 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">Thông tin liên hệ</div>
                            <div class="footer_content footer_contact">
                                <ul class="contact_info_list">
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/placeholder.svg" alt="" /></div>
                                        </div>
                                        <div class="contact_info_text">65 Huỳnh Thúc Kháng, Phường Bến Nghé, Quận 1, TP.Hồ Chí Minh</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/phone-call.svg" alt="" /></div>
                                        </div>
                                        <div class="contact_info_text">0123456789</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/message.svg" alt="" /></div>
                                        </div>
                                        <div class="contact_info_text">
                                            <a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">lichtrinhphuotthu@gmail.com</a>
                                        </div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/planet-earth.svg" alt="" /></div>
                                        </div>
                                        <div class="contact_info_text"><a href="https://colorlib.com">www.lichtrinhphuotthu.com</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <div class="copyright_content d-flex flex-row align-items-center">
                            <div>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
                                <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                            <div class="footer_nav">
                                <ul class="footer_nav_list">
                                    <li class="footer_nav_item"><a href="#">Trang chủ</a></li>
                                    <li class="footer_nav_item"><a href="about.html">Lịch trình</a></li>
                                    <li class="footer_nav_item"><a href="blog.html">Địa điểm</a></li>
                                    <li class="footer_nav_item"><a href="contact.html">Về chúng tôi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>