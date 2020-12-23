<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{url('public/admin/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{url('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{url('public/admin/plugins/jqvmap/jqvmap.min.css')}}">

    <link rel="stylesheet" href="{{url('public/admin/dist/css/adminlte.css')}}">

    <link rel="stylesheet" href="{{url('public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <link rel="stylesheet" href="{{url('public/admin/plugins/daterangepicker/daterangepicker.css')}}"> -->
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="{{url('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}"> -->


    
    <!-- <link rel="stylesheet" href="{{url('public/homepage/fonts/fontawesome-free-5.14.0-web/css/all.min.css')}}"> -->
    <link rel="stylesheet" href="{{url('public/assets/css/template.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/base.css')}}">
    <link rel="shortcut icon" href="{{url('images/favicon/'.$favicon->Description)}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public/assets/fonts/fontawesome-free-5.14.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{url('public/homepage/css/map/map.css')}}">

    


</head>
<body>
  {!! csrf_field() !!}
    <div class="wrapper">
        <!-- ==================================start header====================================== -->
        <header class="header">
            <nav class="header__navbar">
                <div class="header__navbar-list max-width">
             <!-- ==================================logo flag====================================== -->
                    <div class="flag">
                        <div class="vn-flag">
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-start">
                                <img src="{{url('public/assets/img/Plain_Yellow_Star.png')}}" alt="">
                            </div>
                        </div>
                        <div class="header__navbar-logo"><a href="{{url('/')}}">CWC-19</a></div>
                    </div>
                    <ul class="header__navbar-menu">
                      @if(isset($Page) && count($Page)>0)
                      @foreach($Page as $k => $v)
                        @if($v->Alias=='/')
                          <a href="{{url('/')}}" title="{{$v->Name}}" class="header__navbar-menu-item @yield('home')">
                          {!!$v->Name!!}
                          </a>
                        @else
                          <a href="{{url('/'.$v->Alias)}}" title="{{$v->Name}}" class="header__navbar-menu-item @yield($v->Alias)">
                          {{$v->Name}}
                          </a>
                        @endif
                      @endforeach
                      @endif
                      <div class="header__navbar-menu-animation"></div>
                        <!-- <a href="index.html" class="header__navbar-menu-item">Trang Chủ</a>
                        <a href="news.html" class="header__navbar-menu-item">Tin Tức</a>
                        <a href="#map" class="header__navbar-menu-item">Bản Đồ Dịch</a>
                        <a href="newslist.html" class="header__navbar-menu-item">Danh sách tin</a>
                        <div class="header__navbar-menu-animation start-home"></div> -->

                        <!-- <li><a href="#trangchu" class="header__navbar-menu-btn">Trang Chủ</a></li>
                        <li><a href="#covid19" class="header__navbar-menu-btn">Tin Tức</a></li>
                        <li><a href="#badodich" class="header__navbar-menu-btn">Bản Đồ Dịch</a></li>
                        <li><a href="#vanban" class="header__navbar-menu-btn">Văn Bản</a></li>
                        <div class="header__navbar-menu-animation start-home"></div> -->
                        <!-- <li><a href="#teams" class="menu-btn">Teams</a></li> -->
                        <!-- <li><a href="#contact" class="menu-btn">Contact</a></li> -->
                    </ul>
                    
                </div>
            </nav>
            
        </header>
        <!-- ========================================end header================================== -->

        <!-- ==================================start container=================================== -->
        @yield('content')
                <style>
                    .mapboxgl-popup {
                            max-width: 10000000px;
                            font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
                        }
                </style>
            @yield('script')



        <!-- chatbot  -->

        <div class="chat_icon">
        <i class="fas fa-shield-virus"></i>
        </div>

        <div class="chat_box">
            <div class="wrapper">
                <div class="titlechat">CWCovid Chatbot</div>
                <div class="form">
                    <div class="bot-inbox inbox">
                        <div class="icon">
                            <!-- <i class="fas fa-user"></i> -->
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="msg-header">
                            <p>Xin chào, tôi có thể giúp gì?</p>
                            <!-- <p>Xin chào, bạn muốn dùng ngôn ngữ gì?</p>
                            <p>Hi, what language would you like t use?</p>
                            <input class="option" type="button" value="Tiếng Việt">
                            <input class="option3" type="button" value="English"> -->
                        </div>o
                        <button id="start-btn" title="Start" class="start-btn"><i class="fas fa-microphone"></i></button>
                        <!-- <button id="start-btn" title="Start" class="stop-btn"><i class="fas fa-microphone-slash"></i></button> -->
                        <p id="instructions" class="hidden">Press the Start button</p>
                    </div>
                </div>
                <div class="typing-field">
                    <div class="input-data">
                        <input id="data" type="text" placeholder="Nhập câu hỏi.." required>
                        <button id="send-btn">Send</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- chatbot  -->
        <!-- =====================================end container================================== -->

        <!-- ==================================start footer====================================== -->
        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-4 left-col">
                        <div class="difine">
                            <div class="flag flag-bottom">
                                <div class="vn-flag">
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-start">
                                        <img src="{{url('public/assets/img/Plain_Yellow_Star.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="header__navbar-logo"><a href="{{url('/')}}">CWC-19</a></div>
                            </div>
                            <p class="footer__text">Cách tốt nhất để ngăn chặn và làm chậm quá trình lây truyền là được thông báo đầy đủ về vi rút COVID-19. Bảo vệ bản thân và những người khác khỏi nhiễm trùng bằng cách rửa tay.
                            </p>
                        </div>
                    </div>
                    <div class="grid__column-4">
                        <div class="difine">
                            <h1 class="define__heading">Liên hệ</h1>
                            <p class="footer__text">254 Nguyễn Văn Linh, Thanh Khê, Đà Nẵng
                            </p>
                            <p class="footer__text">Phone: +84535353535
                            </p>
                            <p class="footer__text">Email: hoainam2827@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="grid__column-4">
                        <div class="difine">
                            <h1 class="define__heading">Về chúng tôi</h1>
                            <div class="social-media">
                                <p class="social-media-text footer__text">Lê Hoài Nam
                                </p>
                                <div class="social-media-icon">
                                    <a href="https://www.facebook.com/profile.php?id=100029732933822"><i class="fab fa-facebook-f facebook"></i></a>
                                    <a href="https://www.instagram.com/hoainamrm"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UC2pbUBTQ75P3tzNHG8XX3NQ"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="social-media">
                                <p class="social-media-text footer__text">Võ Thành Lộc
                                </p>
                                <div class="social-media-icon">
                                    <a href="#"><i class="fab fa-facebook-f facebook"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="social-media">
                                <p class="social-media-text footer__text">Quang Trọng
                                </p>
                                <div class="social-media-icon">
                                    <a href="#"><i class="fab fa-facebook-f facebook"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="social-media">
                                <p class="social-media-text footer__text">Nguyễn Hoàng
                                </p>
                                <div class="social-media-icon">
                                    <a href="#"><i class="fab fa-facebook-f facebook"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>              
            </div>
            <div class="footer__bottom">
                <p>© 2020 Created By Lê Hoài Nam.</p>
            </div>
            
            <div class="img-virus-4-bottom">
                <img src="./assets/img/virus2.png" alt="">
            </div> 
        </footer>
        <!-- ======================================end footer==================================== -->

    </div>


    <script src="{{url('public/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{url('public/assets/js/chatbot.js')}}"></script>
    <script src="{{url('public/assets/js/flag.js')}}"></script>
    <script src="{{url('public/assets/js/scroll.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 150,
            duration:950
        });
    </script>


    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI="
      crossorigin="anonymous"
    ></script>
    <script
      language="JavaScript"
      src="http://www.geoplugin.net/javascript.gp"
      type="text/javascript"
    ></script>
    <script src="{{url('public/assets/js/countries.js')}}"></script>
    <script src="{{url('public/assets/js/app.js')}}"></script>
    <!-- <script src="./assets/js/chatbot.js"></script> -->
    
    

    <!-- <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
    <script>
    var myLandbot = new Landbot.Livechat({
        configUrl: 'https://chats.landbot.io/v3/H-755063-E077DJ6CRREG4QN7/index.json',
    });
    </script> -->


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fb3dbdb3e20f61525e447b2/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    
</body>
</html>