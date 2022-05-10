<!doctype html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/Thời trang nam casual/front-end/fontawesome-free-6.1.1-web/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/Thời trang nam casual/front-end/css/csstrangchu/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Thời trang nam casual/front-end/css/base.css">

</head>

<body>
    <header class="body_headerindex--top">
        <ul class="body__bannertop--indexleft">
            <li class="body__bannertop--index__li">
                <a style="color: #b00;" href="">
                    SALE
                </a>
            </li>
            <li class="body__bannertop--index__li">
                <a href="">
                    HÀNG MỚI

                </a>
            </li>
            <li class="body__bannertop--index__li">
                <a href="">
                    SẢN PHẨM

                </a>
            </li>
            <li class="body__bannertop--index__li">
                <a href="">
                    CÂU CHUYỆN

                </a>
            </li>
        </ul>
        <img class="body__imglogo" src="/Thời trang nam casual/front-end/img/imgtrangchu/imglogo.png" alt="">

        <div class="body__bannertop--indexright">
            <span>TIN TỨC</span>
            <a onclick="signIn()"><span style="cursor: pointer;">ĐĂNG NHẬP</span></a>
            <form action="" method="post">
                <div class="body__signin--main">

                    <div class="body__signin--left">
                        <h2>Đăng nhập</h2> <br>
                        <input type="email" name="email" placeholder="Điền địa chỉ Email của bạn"> <br>
                        <input type="password" name="password" placeholder="Mật khẩu"><br>
                        <a href="">Quên mật khẩu?</a><br>
                        <button type="submit">Đăng nhập</button>

                    </div>



                    <div class="body__signin--right">
                        <h2>Khách hàng mới</h2> <i style="cursor: pointer;" onclick="signIn()"
                            class="fa-solid fa-xmark"></i><br>
                        <div class="login__frame--copy">
                            <p>-Đặt hàng thuận tiện và nhanh chóng.</p>
                            <p>-Tra cứu lịch sử mua hàng và điểm tích lũy.</p>
                            <p>-Nhận các thông tin về sản phẩm và <br>
                                khuyến mãi đặc biệt.

                            </p>
                            <p></p>
                            <a onclick="signUp()"><span style="cursor: pointer;">Đăng ký</span></a>
                        </div>

                    </div>

                </div>
            </form>
            <form action="" method="post">
            <div class="body__signup--main">
                
                    <div class="body__signup--left">
                        <h2>Đăng ký</h2> <br>
                        <p>Vui lòng điền đầy đủ các thông tin bên dưới để tạo tài khoản mới</p> <br>
                        <p>Những trường thông tin có dấu"*" là bắt buộc!</p><br>
                        <input type="text" name="name" placeholder="*Học và tên">
                        <input type="email" name="email" placeholder="*Điền địa chỉ Email của bạn"> <br>
                        <input type="password" name="password" placeholder="*Mật khẩu"><br>

                    </div>
                    <div class="body__signup--right">
                        <h2>Khách hàng mới</h2> <i style="cursor: pointer;" onclick="signUp()"
                            class="fa-solid fa-xmark"></i><br>
                        <input type="number" name="phone_number" placeholder="*Số điện thoại"><br>
                        <input type="date" name="dateOfBirth"><br>
                        <input type="text" name="address" placeholder="Địa chỉ">

                        <button type="submit">Đăng kí</button>
                    </div>

            </div>
            
        
     </form>

        <span>GIỎ HÀNG</span>
        <div class="body__bannertop--indexright__languageicon">
            <span>
                <select name="language" id="language">
                    <option value="0">VN</option>
                    <option value="1">EN</option>

                </select></span>


        </div>


    </div>

    </header>
    <div class="body_siderimg--top">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href=""><img class="imgindextop" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgTop1.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imgindextop" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgTop2.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imgindextop" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgTop3.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imgindextop" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgTop4.jpg" alt=""></a>
                </div>
                <!-- <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div> -->
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    </div>
    <div class="body__banner">
        <div class="body__banner--left">
            <img src="/Thời trang nam casual/front-end/img/imgtrangchu/imgindexcuban.jpg" alt="">
            <a href="">
                <span>
                    SƠ MI CUBAN
                </span>
            </a>




        </div>
        <div class="body__banner--right">
            <img src="/Thời trang nam casual/front-end/img/imgtrangchu/imgindexpolo.png" alt="">
            <a href="">
                <span>
                    ÁO POLO
                </span>
            </a>



        </div>
    </div>
    <div class="body__newProduct--content">
        <h2 id="newproduct">
            <a href="">SẢN PHẨM MỚI

            </a>
        </h2>
        <h2 id="seemore">
            <a href="">Xem thêm</a>
        </h2>
    </div>
    <div class="body__newProduct--slider">
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href=""><img class="imgNewproduct" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgNewproduct1.jpg"
                            alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imgNewproduct" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgNewproduct2.jpg"
                            alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imgNewproduct" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgNewproduct3.jpg"
                            alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imgNewproduct" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgNewproduct4.jpg"
                            alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imgNewproduct" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgNewproduct5.jpg"
                            alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imgNewproduct" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgNewproduct6.jpg"
                            alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imgNewproduct" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgNewproduct7.jpg"
                            alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imgNewproduct" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgNewproduct8.jpg"
                            alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imgNewproduct" src="/Thời trang nam casual/front-end/img/imgtrangchu/imgNewproduct1.jpg"
                            alt=""></a>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="body__newFeed">
        <h2>TIN TỨC</h2>
        <div class="swiper mySwiper3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href=""><img src="/Thời trang nam casual/front-end/img/imgtrangchu/newfeed1.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img src="/Thời trang nam casual/front-end/img/imgtrangchu/newfeed2.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img src="/Thời trang nam casual/front-end/img/imgtrangchu/newfeed3.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img src="/Thời trang nam casual/front-end/img/imgtrangchu/newfeed4.jpg" alt=""></a>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
    <div class="body__main--instagram">
        <h2>INSTAGRAM</h2>
        <div class="swiper mySwiper4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href=""><img class="imginsta" src="/Thời trang nam casual/front-end/img/imgtrangchu/imginsta1.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imginsta" src="/Thời trang nam casual/front-end/img/imgtrangchu/imginsta2.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imginsta" src="/Thời trang nam casual/front-end/img/imgtrangchu/imginsta3.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imginsta" src="/Thời trang nam casual/front-end/img/imgtrangchu/imginsta4.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imginsta" src="/Thời trang nam casual/front-end/img/imgtrangchu/imginsta5.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imginsta" src="/Thời trang nam casual/front-end/img/imgtrangchu/imginsta6.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imginsta" src="/Thời trang nam casual/front-end/img/imgtrangchu/imginsta7.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imginsta" src="/Thời trang nam casual/front-end/img/imgtrangchu/imginsta8.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imginsta" src="/Thời trang nam casual/front-end/img/imgtrangchu/imginsta9.jpg" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img class="imginsta" src="/Thời trang nam casual/front-end/img/imgtrangchu/imginsta10.jpg" alt=""></a>>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        </a>
    </div>
    <!--footer-->
    <div class="main-footer">
        <div class="container-fluid">
            <div class="top-footer">
                <a href="#">
                    <img src="/Thời trang nam casual/front-end/img/imgtrangchu/imglogo.png" alt="logo">
                </a>
            </div>
            <div class="footer-content">
                <div class="wrapper-home-newsletter">
                    <div class="content-newsletter">
                        <h4>đăng ký để nhận ưu đãi</h4>
                        <div class="form-newsletter">
                            <form accept-charset="UTF-8" class="contact-form">
                                <div class="form-group">
                                    <input id="contactFormEmail" class="inputNew form-control newsletter-input"
                                        required="" type="email" placeholder="Điền địa chỉ Email của bạn"
                                        name="contact[email]" size="18" autocomplete="off">
                                    <button type="submit" name="submitNewsletter" id="contactFormSubmit"
                                        class="tp_button">
                                        <span>Gửi</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <p class="tp_text_color">BẢN QUYỀN THUỘC VỀ HIGHWAY MENSWEAR©</p>
                    </div>
                    <div class="footer-col">
                        <h4 class="footer-title">VỀ CHÚNG TÔI</h4>
                        <div class="about">
                            <ul>
                                <li>
                                    <a href="">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="">Tuyển dụng</a>
                                </li>
                                <li>
                                    <a href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4 class="footer-title">DỊCH VỤ KHÁCH HÀNG</h4>
                        <div class="about">
                            <ul>
                                <li>
                                    <a href="">Highway's VIP club</a>
                                </li>
                                <li>
                                    <a href="">Hướng dẫn mua hàng</a>
                                </li>
                                <li>
                                    <a href="#">Chính sách bảo hành</a>
                                </li>
                                <li>
                                    <a href="#">Chính sách đổi trả</a>
                                </li>
                                <li>
                                    <a href="#">Chính sách bảo mật</a>
                                </li>
                                <li>
                                    <a href="#">Hotline khiếu nại</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4 class="footer-title">HỆ THỐNG CỬA HÀNG</h4>
                        <div class="about">
                            <ul>
                                <li>
                                    <a href="">1. 100 Đông Các, Quận Đống Đa, Hà Nội</a>
                                </li>
                                <li>
                                    <a href="">2. 109 Lò Đúc, Quận Hai Bà Trưng, Hà Nội</a>
                                </li>
                                <li>
                                    <a href="#">3. 367 Lê Văn Sỹ, Phường 12, Quận 3, Hồ Chí Minh</a>
                                </li>
                                <li>
                                    <a href="#">4. 66 Lê Thị Riêng, Bến Thành, Quận 1, Hồ Chí Minh</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4 class="footer-title">FANPAGE</h4>
                        <div class="about">
                            <ul>
                                <li>
                                    <a href="">Facebook</a>
                                </li>
                                <li>
                                    <a href="">Instagram</a>
                                </li>
                                <li>
                                    <a href="#">Tiktok</a>
                                </li>
                                <li>
                                    <a href="#">Youtube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="/Thời trang nam casual/front-end/js/main.js"></script>
</body>

</html>