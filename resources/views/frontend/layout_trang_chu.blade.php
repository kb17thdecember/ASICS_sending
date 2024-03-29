<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asics</title>
    <link rel="stylesheet" href="{{  asset('frontend/fonts/quicksand/css/Quicksand_300,400,500,700.css')  }}">
    <link rel="stylesheet" href="{{  asset('frontend/fonts/awesome/css/all.min.css')  }}">
    <link rel="stylesheet" href="{{  asset('frontend/sass/css/style.css')  }}">
    <link rel="stylesheet" href="{{  asset('frontend/sass/css/chat.css')  }}">
    <link rel="stylesheet" href="{{ asset('frontend/sass/css/css1.css') }}">
    <link rel="stylesheet" href="{{  asset('frontend/slick/slick.min.css')  }}">
    <link rel="stylesheet" href="{{  asset('frontend/slick/slick-theme.min.css')  }}">
</head>
<body>
    <div class="main-body">
                {{-- chat box --}}
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6585864670c9f2407f828d44/1hi8p910h';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
{{-- import file header.blade.php vao day --}}
@include("frontend.header")

<!-- main begin -->
       @yield("append-du-lieu")
<!-- collection home -->


<!-- banner about home -->   
</main>
<!-- main end -->



<!-- footer begin -->
        <section id="send-for-gmail" class="section section-for-email">
            <div class="container-fluid">
                <div class="rowFlexMargin flexAlignCenter flexJustiCenter">
                    <div class="col-md-6">
                        <h3 class="title">Phản hồi của bạn</h3>
                        <p class="content">Để lại phản hồi của bạn giúp chúng ta hiểu nhau hơn.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-newsletter"> 
                            <form {{ url('customers/register-post') }} class="contact-form" method="post">
                                <div class="form-group">
                                    <input type="text" placeholder="Nhập nội dung ở đây" class="inputNew form-control grey newsletter-input">
                                    <button style="background-color: darkblue" type="submit" class="button dark submitNewsletter"><span>Gửi</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="mainFooter footer mainfooter-toolbar">
            <div class="main-footer collapse">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-col footer-content1">
                                <h4 class="footer-title in"> Giới thiệu</h4>
                                <div class="footer-content">
                                    <p>Trang mua sắm trực tuyến giày thể thao và thời trang</p>
                                    <div class="logo-footer">
                                        <a class="fade-box" href="#"><img src="{{  asset('frontend/img/logo-bct.png')  }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="footer-col footer-block">
                                <h4 class="footer-title in"> Liên kết</h4>
                                <div class="footer-content toggle-footer">
                                    <ul>
                                        <li class="item"><a href="#">Tìm kiếm</a></li>
                                        <li class="item"><a href="#">Giới thiệu</a></li>
                                        <li class="item"><a href="#">Chính sách đổi trả</a></li>
                                        <li class="item"><a href="#">Chính sách bảo mật</a></li>
                                        <li class="item"><a href="#">Điều khoản dịch vụ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-col in">
                                <h4 class="footer-title">Thông tin liên hệ</h4>
                                <div class="footer-content footer-contact">
                                    <ul>
                                        <li class="contact-1"><span>Tầng 4, tòa nhà Flemington, số 182, đường Lê Đại Hành, phường 15, quận 11, Tp. Hồ Chí Minh.</span></li>
                                        <li class="contact-2"><span>0962999170</span></li>
                                        <li class="contact-3"><span>1900.636.099</span></li>
                                        <li class="contact-4"><span>customers-vn@asics.com</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-col in">
                                <h4 class="footer-title">Fanpage</h4>
                                <div class="footer-content footer-contact footer-fanpage">
                                    <!-- Facebook widget -->						
                                    <div class="footer-static-content"> 
                                        <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/asicsvietnamofficial" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=363772567412181&amp;container_width=335&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fharavan.official&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false">
                                            <span style="vertical-align: bottom; width: 335px; height: 130px;">
                                                <iframe name="fa9f69fe27b948" width="1000px" height="300px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v16.0/plugins/page.php?adapt_container_width=true&amp;app_id=363772567412181&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df135c56e38f2094%26domain%3Dgreenzone.myharavan.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fgreenzone.myharavan.com%252Ff44b2e97c1ebe4%26relation%3Dparent.parent&amp;container_width=335&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fharavan.official&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 335px; height: 130px;" class=""></iframe>
                                            </span>
                                        </div>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="bottom-footer text-center">
                <div class="container">
                    <p>Copyright © 2023<a href="#"> Asics</a>.<a href="#"> Powered by Haravan</a></p>
                </div>
            </div>
        </footer>
        
<!-- footer end -->
    </div>
    <script type="text/javascript" src="{{ asset('frontend/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/slick/slick.min.js') }}"></script>
    <script type="text/javascript">
        $('.fade').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
        });
    </script>
    <script>
        $(document).ready(function () {
            /* on click header icon */
            $(document).on("click", ".header-site-nav", function(e){
                e.preventDefault();
                if($(this).parent().hasClass('active')){
                    $('#site-overlay').removeClass('active');
                    $(this).parent().removeClass('active');
                    $('body').removeClass('locked-scroll');
                }
                else{
                    $('body').addClass('locked-scroll');
                    $('.header--icon').removeClass('active');
                    $("#site-menu-handle").removeClass('active');
                    $('.menu-mobile').removeClass('active');
                    $('#site-overlay').addClass('active');
                    $(this).parent().addClass('active');
                }
            });

            /* on click site menu mobile */
            $("#site-menu-handle").on("click", function(){
                if($(this).hasClass('active')){
                    $(this).removeClass("active");
                    $('.menu-mobile').removeClass('active');
                    $('body').removeClass('locked-scroll');
                }
                else{
                    $(this).addClass("active");
                    $('.header--icon').removeClass('active');
                    $('#site-overlay').removeClass('active');
                    $('.menu-mobile').addClass('active');
                    $('body').addClass('locked-scroll');
                }
            });
        });
    </script>
    <script>
        $('.qty-click .qtyplus').on('click',function(e){
            e.preventDefault();
            var input = $(this).parent('.quantity-partent').find('input');
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                input.val(currentVal + 1);
            } else {
                input.val(1);
            }
        });
        $(".qty-click .qtyminus").on('click',function(e) {
            e.preventDefault();
            var input = $(this).parent('.quantity-partent').find('input');
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal) && currentVal > 1) {
                input.val(currentVal - 1);
            } else {
                input.val(1);
            }
        });
    </script>

</body>
</html>