@extends('front.template.master')

@section('title', 'Trang chủ')
@section('heading','Trang chủ')
@section('home','active')
@section('content')

<link rel="stylesheet" href="{{url('public/assets/css/main.css')}}">
    <div class="container">
        <div class="container__page-one"> 
            <div class="grid">
                <div class="grid__row grid__row-one" >
                    <div class="grid__column-6" data-aos="fade-right">
                        <div class="difine">
                            <h1 class="define__heading">CORONAVIRUS LÀ GÌ?</h1>
                            <p class="define__text">Coronavirus (COVID-19) lần đầu tiên được báo cáo ở Vũ Hán, Hồ Bắc, Trung Quốc vào tháng 12 năm 2019, bùng phát sau đó đã được WHO công nhận là đại dịch. Coronavirus là một loại vi rút. Có nhiều loại khác nhau và một số gây bệnh. Một loại mới được xác định đã gây ra một đợt bùng phát bệnh đường hô hấp gần đây được gọi là COVID-19.
                            </p>
                        </div>
                    </div>
                    <div class="grid__column-6" data-aos="fade-left">
                        <div class="page-one-video">
                            <a href="https://www.youtube.com/watch?v=5DGwOJXSxqg" target="blank">
                                <img src="{{url('public/assets/img/virus-video.jpg')}}" alt="" class="page-one-video-img">
                                <div class="page-one-video-item"><i class="far fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                        </div>
                        <div class="img-virus">
                            <img src="{{url('public/assets/img/anim-icon-virus.png')}}" alt="">
                        </div>                         
                        <div class="img-virus-2">
                            <img src="{{url('public/assets/img/anim-icon-virus.png')}}" alt="">
                        </div>                         
                    </div>
                </div>
                
            </div>    
        </div>

        <!-- ========================================page 3 spreads======================================== -->
        <div class="container__page-three" data-aos="fade-up">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-12">
                        <div class=grid__row-three-title">
                            <h2 class="title-row-three-1">Những con đường lây lan?</h2>
                            <h1 class="title-row-three-2" >Cách virus lây lan</h1>
                        </div>
                    </div>                       
                </div>
                <div class="grid__row" >
                    <div class="grid__column-4">
                        <div class="grid__column-4-prevention">
                            <div class="spreads__img">
                                <img src="{{url('public/assets/img/spreads_human_contact.jpg')}}" alt="">
                            </div>
                            <div class="spreads__text">
                                <h2>Tiếp xúc với người nhiễm bệnh</h2>
                                <p>COVID-19 được cho là lây lan chủ yếu qua tiếp xúc gần gũi từ người sang người với các giọt đường hô hấp từ người bị nhiễm bệnh. Những người bị nhiễm coronavirus thường có các triệu chứng bệnh tật.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-4">
                        <div class="grid__column-4-prevention">
                            <div class="spreads__img">
                                <img src="{{url('public/assets/img/spreads_contaminated_objects.jpg')}}" alt="">
                            </div>
                            <div class="spreads__text">
                                <h2>Tiếp xúc vật có virus</h2>
                                <p>Có thể một người có thể bị nhiễm COVID-19 bằng cách chạm vào bề mặt hoặc đồ vật có vi-rút trên đó và sau đó chạm vào miệng, mũi hoặc có thể là mắt của họ. Đây không được cho là cách lây lan chính của virus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-4">
                        <div class="grid__column-4-prevention">
                            <div class="spreads__img">
                                <img src="{{url('public/assets/img/spreads_social_gathering.jpg')}}" alt="">
                            </div>
                            <div class="spreads__text">
                                <h2>Tụ tập nơi đông người</h2>
                                <p>Nếu một người bị bệnh ho hoặc hắt hơi, các giọt của họ có thể lây nhiễm sang những người xung quanh. Đó là lý do tại sao điều quan trọng là tránh tiếp xúc gần gũi với những người khác. Mọi người có thể bị nhiễm bệnh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================page 2 prevention======================================== -->
        <div class="container__page-two" data-aos="fade-up">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-12">
                        <div class=grid__row-two-title">
                            <h2 class="title-row-two-1">Phòng tránh</h2>
                            <h1 class="title-row-two-2" >Các cách phòng tránh Covid19</h1>
                        </div>
                    </div>                       
                </div>
                <div class="grid__row">
                    <div class="grid__column-4">
                        <div class="grid__column-4-prevention">
                            <div class="prevention__img">
                                <img src="{{url('public/assets/img/Prevention-wash.webp')}}" alt="">
                            </div>
                            <div class="prevention__text">
                                <h2>Rửa tay với xà phòng</h2>
                                <p>Rửa tay thường xuyên là một trong những cách tốt nhất để loại bỏ vi trùng, tránh bị bệnh và ngăn ngừa sự lây lan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-4">
                        <div class="grid__column-4-prevention">
                            <div class="prevention__img">
                                <img src="{{url('public/assets/img/prevention-sanitize.webp')}}" alt="">
                            </div>
                            <div class="prevention__text">
                                <h2>Làm sạch & Khử trùng</h2>
                                <p>Bệnh coronavirus (COVID-19) là một bệnh truyền nhiễm do một loại coronavirus mới phát hiện gây ra.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-4">
                        <div class="grid__column-4-prevention">
                            <div class="prevention__img">
                                <img src="{{url('public/assets/img/Prevention-mask.webp')}}" alt="">
                            </div>
                            <div class="prevention__text">
                                <h2>Sử dụng khẩu trang</h2>
                                <p>Che miệng và mũi bằng mặt nạ và đảm bảo không có khoảng trống giữa mặt bạn và mặt nạ.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-virus-3">
                    <img src="{{url('public/assets/img/virus-pink.png')}}" alt="">
                </div>
                <div class="img-virus-2">
                    <img src="{{url('public/assets/img/anim-icon-virus.png')}}" alt="">
                </div>
                <div class="img-virus-4">
                    <img src="{{url('public/assets/img/virus2.png')}}" alt="">
                </div>
            </div>
        </div>
        
        <!-- ========================================page 4 wash your hand======================================== -->

        <div class="container__page-four" data-aos="fade-up">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-12">
                        <div class=grid__row-three-title">
                            <h2 class="title-row-four-1">Rửa tay</h2>
                            <h1 class="title-row-four-2" >Làm thế nào để rửa tay đúng cách
                            </h1>
                        </div>
                    </div>                       
                </div>
                <div class="grid__row">
                    <div class="grid__column-2" data-aos="fade-up">
                        <div class="grid__column-2-wash">
                            
                            <div class="wash__img">
                                <img src="{{url('public/assets/img/hadnwash-1.webp')}}" alt="">
                                <div class="wash-step">1</div>
                            </div>
                            <div class="wash__text">
                                <h2>Sử dụng xà phòng</h2>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-2" data-aos="fade-up">
                        <div class="grid__column-2-wash">
                            <div class="wash__img">
                                <img src="{{url('public/assets/img/hadnwash-2.webp')}}" alt="">
                                <div class="wash-step">2</div>
                            </div>
                            <div class="wash__text">
                                <h2>Chà sát</h2>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-2" data-aos="fade-up">
                        <div class="grid__column-2-wash">
                            <div class="wash__img">
                                <img src="{{url('public/assets/img/hadnwash-3.webp')}}" alt="">
                                <div class="wash-step">3</div>
                            </div>
                            <div class="wash__text">
                                <h2>Chú ý các ngón tay</h2>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-2" data-aos="fade-up">
                        <div class="grid__column-2-wash">
                            <div class="wash__img">
                                <img src="{{url('public/assets/img/hadnwash-4.webp')}}" alt="">
                                <div class="wash-step">4</div>
                            </div>
                            <div class="wash__text">
                                <h2>Hãy nhớ mu bàn tay</h2>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-2" data-aos="fade-up">
                        <div class="grid__column-2-wash">
                            <div class="wash__img">
                                <img src="{{url('public/assets/img/hadnwash-5.webp')}}" alt="">
                                <div class="wash-step">5</div>
                            </div>
                            <div class="wash__text">
                                <h2>Rửa lại với nước</h2>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-2" data-aos="fade-up">
                        <div class="grid__column-2-wash">
                            <div class="wash__img">
                                <img src="{{url('public/assets/img/hadnwash-6.webp')}}" alt="">
                                <div class="wash-step">6</div>
                            </div>
                            <div class="wash__text">
                                <h2>Dùng khăn lau khô</h2>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- ========================================page5 symptoms======================================== -->
        <div class="container__page-five">
            <div class="grid">
                <div class="grid__row grid__row-five symptoms-row">
                    <div class="grid__column-6 symptoms-column" data-aos="fade-right">
                        <div class="symptoms-difine">
                            <h2 class="title-row-five">Các triệu chứng chính</h2>
                            <h1 class="define__heading">Các triệu chứng nhiễm bệnh chính?</h1>
                            <p class="define__text">Virus COVID-19 ảnh hưởng đến những người khác nhau theo những cách khác nhau .COVID-19 là một bệnh đường hô hấp và hầu hết những người bị nhiễm sẽ phát triển các triệu chứng nhẹ đến trung bình và hồi phục mà không cần điều trị đặc biệt. Những người có bệnh lý cơ bản và những người trên 60 tuổi có nguy cơ mắc bệnh nặng và tử vong cao hơn
                            </p>

                            <div class="grid__column-12 symptoms-other">
                                <div class="symptoms-other-1">
                                    <h4>Các triệu chứng chung:</h4>
                                    <ul>
                                        <li>
                                            Sốt
                                        </li>
                                        <li>
                                            Mệt Mỏi
                                        </li>
                                        <li>
                                            Ho Khan
                                        </li>
                                    </ul>
                                </div>
                                <div class="symptoms-other-2">
                                    <h4>Các triệu chứng khác:</h4>
                                    <ul>
                                        <li>
                                            Hụt Hơi
                                        </li>
                                        <li>
                                            Nhức Mỏi
                                        </li>
                                        <li>
                                            Đau Họng
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>                   
                    </div>
                    <div class="grid__column-6 symptoms-column" data-aos="fade-left">
                        <div class="img-symptoms">
                            <img src="{{url('public/assets/img/SYMPTOMS.webp')}}" alt="">
                        </div>                        
                    </div>
                    <div class="img-virus-3">
                        <img src="{{url('public/assets/img/virus-pink.png')}}" alt="">
                    </div>
                    <div class="img-virus-2">
                        <img src="{{url('public/assets/img/anim-icon-virus.png')}}" alt="">
                    </div>
                </div>
            </div>    
        </div>
    </div>
@stop