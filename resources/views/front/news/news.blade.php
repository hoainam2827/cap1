@extends('front.template.master')

@section('title', 'Thống kê')
@section('heading','Thống kê')
@section($news->Alias,'active')
@section('content')

<link rel="stylesheet" href="{{url('public/assets/css/news.css')}}">
<link rel="stylesheet" href="{{url('public/assets/css/style.css')}}">
     <!-- ==================================start container=================================== -->
     <div class="container">
            <div class="container__page-one">
                <div class="grid">
                    <div class="grid__row news">
                        <div class="grid__column-6" >
                            @if(isset($HomeNews1)&& count($HomeNews1)>0)
                            @foreach($HomeNews1 as $k => $v)
                            <div class="news-1">
                                <img src="{{url('images/news/'.$v->Images)}}" alt="" class="news-1_img">
                                <a href="{{url('/'.$v->Alias)}}.html" >
                                    <h1 class="news-1__heading">{{$v->Name}}</h1>
                                </a>
                                
                                <p class="news-1__text">{{$v->SmallDescription}}
                                </p>
                            </div>
                            @endforeach
                            @endif
                            
                            
                            <div class="news-2" data-aos="fade-up">
                            @if(isset($HomeNews2)&& count($HomeNews2)>0)
                            @foreach($HomeNews2 as $k => $v)
                        
                                <div class="news-2-infor">
                                    <a href="{{url('/'.$v->Alias)}}.html" class="news-2-infor-link">
                                        <img src="{{url('images/news/'.$v->Images)}}" alt="" class="news-2-infor-img">
                                        <div class="fakeclass"></div>
                                        <p class="news-2-infor-text">{{$v->Name}}</p>
                                    </a>
                                </div>
                            @endforeach
                            @endif
                            </div>
                            
                            <div class="news-3" data-aos="fade-up">
                                <a href="{{url('/danh-sach-tin')}}" class="news__seemore">
                                    <p >Xem thêm</p> 
                                </a>
                            </div>
                                             
                        </div>

                        
                        <div class="grid__column-6">
                            <!-- <div class="news__statistic">
                                <div class="news__statistic-vietnam">
                                    <span class="news__statistic-vietnam-text">Việt Nam</span>
                                </div>
                                <div class="news__statistic-detail">
                                    <div class="news__statistic-detail-vietnam detail-1">
                                        Số ca nhiễm
                                        <br>
                                        <span>1.122</span>
                                    </div>
                                    <div class="news__statistic-detail-vietnam detail-2">
                                        Đang điều trị
                                        <br>
                                        <span>55</span>
                                    </div>
                                    <div class="news__statistic-detail-vietnam detail-3">
                                        Khỏi
                                        <br>
                                        <span>1.029</span>
                                    </div>
                                    <div class="news__statistic-detail-vietnam detail-4">
                                        Tử vong
                                        <br>
                                        <span>35</span>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="news__statistic">
                                <div class="news__statistic-world">
                                    <span class="news__statistic-world-text">Thế Giới</span>
                                </div>
                                <div class="news__statistic-detail">
                                    <div class="news__statistic-detail-world detail-1">
                                        Số ca nhiễm
                                        <br>
                                        <span>38.727.284</span>
                                    </div>
                                    <div class="news__statistic-detail-world detail-2">
                                        Đang điều trị
                                        <br>
                                        <span>8.520.424</span>
                                    </div>
                                    <div class="news__statistic-detail-world detail-3">
                                        Khỏi
                                        <br>
                                        <span>29.110.568</span>
                                    </div>
                                    <div class="news__statistic-detail-world detail-4">
                                        Tử vong
                                        <br>
                                        <span>1.096.292</span>
                                    </div>
                                    
                                </div>
                            </div> -->
                           

                            <ul class="news-ul-list" data-aos="fade-left">
                                @if(isset($HomeNews)&& count($HomeNews)>0)
                                @foreach($HomeNews as $k => $v)
                                <li>
                                    <img src="{{url('public/assets/img/li.png')}}" alt="">
                                    <a href="{{url('/'.$v->Alias)}}.html">
                                    {{$v->Name}}
                                    </a>
                                </li>
                                @endforeach
                                @endif

                               
                            </ul>
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

            <!-- ========================================page 2 ======================================== -->
            <div class="container__page-three">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-12 page-2" data-aos="fade-in">                    
                            <table >
                                <thead>
                                    <tr>
                                        <th>Bệnh nhân</th>
                                        <th>Tuổi</th>                          
                                        <th>Địa điểm</th>                           
                                        <th>Tình trạng</th>                          
                                        <th>Quốc tịch</th>                                                
                                    </tr>
                                </thead>
                                
                                <tbody>
                                @if(isset($listpatient)&& count($listpatient)>0)
                                @foreach($listpatient as $k => $v)
                                    <tr>
                                        <td>{{$v->fullname}}</td>                           
                                        <td>{{$v->Age}}</td>                           
                                        <td>{{$v->Location}}</td>

                                        @if($v->Status == 1)
                                            <td style="color:#848484;">Đang Điều Trị</td>
                                        @elseif($v->Status == 0)
                                            <td style="color:#FF4C4C;">Tử Vong</td>
                                        @elseif($v->Status == 2)
                                            <td style="color:#50C75A;">Đã Khỏi Bệnh</td>
                                        @endif

                                        <td>{{$v->quequan}}</td>                          
                                    </tr>
                                @endforeach
                                @endif
                                    <!-- <tr>
                                        <td>BN1113</td>                           
                                        <td>37</td>                           
                                        <td>Bà Rịa - Vũng Tàu</td>                          
                                        <td>Đang điều trị</td>                                                
                                        <td>Malaysia</td>                          
                                    </tr>    
                                    <tr>
                                        <td>BN1113</td>                           
                                        <td>37</td>                           
                                        <td>Bà Rịa - Vũng Tàu</td>                          
                                        <td>Đang điều trị</td>                                                
                                        <td>Malaysia</td>                          
                                    </tr>    
                                    <tr>
                                        <td>BN1113</td>                           
                                        <td>37</td>                           
                                        <td>Bà Rịa - Vũng Tàu</td>                          
                                        <td>Đang điều trị</td>                                                
                                        <td>Malaysia</td>                          
                                    </tr>    
                                    <tr>
                                        <td>BN1113</td>                           
                                        <td>37</td>                           
                                        <td>Bà Rịa - Vũng Tàu</td>                          
                                        <td>Đang điều trị</td>                                                
                                        <td>Malaysia</td>                          
                                    </tr>    
                                    <tr>
                                        <td>BN1113</td>                           
                                        <td>37</td>                           
                                        <td>Bà Rịa - Vũng Tàu</td>                          
                                        <td>Đang điều trị</td>                                                
                                        <td>Malaysia</td>                          
                                    </tr>    
                                    <tr>
                                        <td>BN1113</td>                           
                                        <td>37</td>                           
                                        <td>Bà Rịa - Vũng Tàu</td>                          
                                        <td>Đang điều trị</td>                                                
                                        <td>Malaysia</td>                          
                                    </tr>    
                                    <tr>
                                        <td>BN1113</td>                           
                                        <td>37</td>                           
                                        <td>Bà Rịa - Vũng Tàu</td>                          
                                        <td>Đang điều trị</td>                                                
                                        <td>Malaysia</td>                          
                                    </tr>    
                                    <tr>
                                        <td>BN1113</td>                           
                                        <td>37</td>                           
                                        <td>Bà Rịa - Vũng Tàu</td>                          
                                        <td>Đang điều trị</td>                                                
                                        <td>Malaysia</td>                          
                                    </tr>     -->
                                </tbody>
                            </table> 
                        </div>                       
                    </div>
                </div>
            </div>

            <!-- ========================================page 3 prevention======================================== -->
            <div class="stats" data-aos="zoom-in">
                <div class="latest-report">
                  <div class="country">
                    <div class="name">Loading...</div>
                    <div class="change-country">Thay đổi</div>
                    <div class="search-country hide">
                      <div class="search-box">
                        <input
                          type="text"
                          id="search-input"
                          placeholder="Search Country..."
                        />
                        <img class="close" src="{{url('public/assets/img/close.svg')}}" alt="" />
                      </div>
                      <div class="country-list"></div>
                    </div>
                  </div>
                  <div class="total-cases">
                    <div class="title">Tổng số ca nhiễm</div>
                    <div class="value">0</div>
                    <div class="new-value">+0</div>
                  </div>
                  <div class="recovered">
                    <div class="title">Phục hồi</div>
                    <div class="value">0</div>
                    <div class="new-value">+0</div>
                  </div>
                  <div class="deaths">
                    <div class="title">Tử vong</div>
                    <div class="value">0</div>
                    <div class="new-value">+0</div>
                  </div>
                </div>
                <div class="chart">
                  <canvas id="axes_line_chart"></canvas>
                </div>
            </div>
            
            <!-- ========================================page4 symptoms======================================== -->
            <div class="container__page-five">
                <div class="grid">
                    <div class="grid__row">
                        <!-- <div class="grid__column-6 news">
                            <div class="news-left">
                                <h2 class="title-row-4">Tin tức</h2>
                                <img src="assets/img/news1.jpg" alt="" class="news-left_img">
                                <a href="#">
                                    <h1 class="news-left__heading">Việt Nam kiên định thực hiện “mục tiêu kép” nhưng phải đảm bảo an toàn </h1>
                                </a>
                                <small >Thứ sáu, 16/10/2020 07:17</small>
                                <p class="news-left__text">Những đô thị lớn, mật độ dân cư đông, người qua lại nhiều như Hà Nội, Đà Nẵng, Hải Phòng, Nha Trang… cũng cần áp dụng biện pháp buộc người dân phải đeo khẩu trang, và xử phạt nếu vi phạm như TP Hồ Chí Minh.</p>
                            </div>
                            <hr>

                            <ul class="news-ul-list">
                                <li>
                                    <img src="assets/img/li.png" alt="">
                                    <a href="#">
                                        Kỹ thuật ECMO cứu sống hàng trăm bệnh nhân "thập tử nhất sinh" và kỳ tích BN91
                                    </a>
                                </li>
                                <li>
                                    <img src="assets/img/li.png" alt="">
                                    <a href="#">
                                        Bản tin dịch COVID-19 trong 24h: Cần cảnh giác cao độ khi mùa đông đến và làn sóng dịch trên thế giới tăng mạnh trở lại
                                    </a>
                                </li>
                                <li>
                                    <img src="assets/img/li.png" alt="">
                                    <a href="#">
                                        Thủ tướng: Cho phép đặt hàng cung cấp dịch vụ xét nghiệm SARS-CoV-2
                                    </a>
                                </li>
                                <li>
                                    <img src="assets/img/li.png" alt="">
                                    <a href="#">
                                        Sáng 16/10 không ca mắc COVID-19, Việt Nam chữa khỏi 1.030 bệnh nhân
                                    </a>
                                </li>
                            </ul>
                            <div class="news-textcenter">
                                <a href="#" class="news__seemore">
                                    Xem thêm
                                </a>
                            </div>
                        </div> -->
                        
                        <section id="features" class="features">
                            <div class="container" data-aos="fade-up">
                    
                                <div class="row">
                                    <div class="col-lg-6 order-2 order-lg-1 vertical-line" data-aos="fade-right">
                    
                                        <script src="https://code.highcharts.com/maps/highmaps.js"></script>
                                        <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
                                        <script src="https://code.highcharts.com/mapdata/countries/vn/vn-all.js"></script>
                    
                                        <div id="map" style="max-width: 100%; height: 515px;">
                                            <script>
                                                var data = [
                                                    ['vn-3655', 0],
                                                    ['vn-qn', 1],
                                                    ['vn-kh', 2],
                                                    ['vn-tg', 3],
                                                    ['vn-bv', 4],
                                                    ['vn-bu', 5],
                                                    ['vn-hc', 6],
                                                    ['vn-br', 7],
                                                    ['vn-st', 8],
                                                    ['vn-pt', 9],
                                                    ['vn-yb', 10],
                                                    ['vn-hd', 11],
                                                    ['vn-bn', 12],
                                                    ['vn-317', 13],
                                                    ['vn-nb', 14],
                                                    ['vn-hm', 15],
                                                    ['vn-ho', 16],
                                                    ['vn-vc', 17],
                                                    ['vn-318', 18],
                                                    ['vn-bg', 19],
                                                    ['vn-tb', 20],
                                                    ['vn-ld', 21],
                                                    ['vn-bp', 22],
                                                    ['vn-py', 23],
                                                    ['vn-bd', 24],
                                                    ['vn-724', 25],
                                                    ['vn-qg', 26],
                                                    ['vn-331', 27],
                                                    ['vn-dt', 28],
                                                    ['vn-la', 29],
                                                    ['vn-3623', 30],
                                                    ['vn-337', 31],
                                                    ['vn-bl', 32],
                                                    ['vn-vl', 33],
                                                    ['vn-tn', 34],
                                                    ['vn-ty', 35],
                                                    ['vn-li', 36],
                                                    ['vn-311', 37],
                                                    ['vn-hg', 38],
                                                    ['vn-nd', 39],
                                                    ['vn-328', 40],
                                                    ['vn-na', 41],
                                                    ['vn-qb', 42],
                                                    ['vn-723', 43],
                                                    ['vn-nt', 44],
                                                    ['vn-6365', 45],
                                                    ['vn-299', 46],
                                                    ['vn-300', 47],
                                                    ['vn-qt', 48],
                                                    ['vn-tt', 49],
                                                    ['vn-da', 67],
                                                    ['vn-ag', 51],
                                                    ['vn-cm', 52],
                                                    ['vn-tv', 53],
                                                    ['vn-cb', 54],
                                                    ['vn-kg', 55],
                                                    ['vn-lo', 56],
                                                    ['vn-db', 57],
                                                    ['vn-ls', 58],
                                                    ['vn-th', 59],
                                                    ['vn-307', 60],
                                                    ['vn-tq', 61],
                                                    ['vn-bi', 62],
                                                    ['vn-333', 63]
                                                ];
                    
                                                // Create the chart
                                                Highcharts.mapChart('map', {
                                                    chart: {
                                                        map: 'countries/vn/vn-all'
                                                    },
                    
                                                    title: {
                                                        text: 'BẢN ĐỒ'
                    
                                                    },
                    
                                                    subtitle: {
                                                        text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/vn/vn-all.js">Vietnam</a>'
                                                    },
                    
                                                    mapNavigation: {
                                                        enabled: true,
                                                        buttonOptions: {
                                                            verticalAlign: 'bottom'
                                                        }
                                                    },
                    
                                                    colorAxis: {
                                                        min: 0
                                                    },
                    
                                                    series: [{
                                                        data: data,
                                                        name: 'Số ca nhiễm',
                                                        states: {
                                                            hover: {
                                                                color: '#FF4C4C'
                                                            }
                                                        },
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.name}'
                                                        }
                                                    }]
                                                });
                                            </script>
                                        </div>
                                    </div>
                    
                    
                                    <div class="db col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
                                        <a href="/dienbiendich" role="button" class="btn btn-success btn-block">Lịch trình chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="grid__column-6 timeline" data-aos="fade-up">
                            <div class="timeline-heading">
                                <h2 class="title-row-4">Diễn biến dịch</h2>
                            </div>
                            <div class="timeline-content">
                                <ul>
                                    @if(isset($Timeline)&& count($Timeline)>0)
                                    @foreach($Timeline as $k => $v)
                                    <li>
                                        <span></span>
                                        
                                        <div class="timeline-detail">
                                            <div class="timeline-day">
                                                <h3>{{$v->created_at}}</h3>
                                            </div>
                                            <div class="timeline-text">
                                                <p></p>
                                            
                                                {!!$v->Description!!}
                                                
                                            </div>
                                        </div>
                                        
                                    </li>
                                    @endforeach
                                    @endif
                                    <!-- <li>
                                        <span></span>
                                        <div class="timeline-detail">
                                            <div class="timeline-day">
                                                <h3>17:56 19/10/2020</h3>
                                            </div>
                                            <div class="timeline-text">
                                                <p></p>
                                                <p>THÔNG BÁO VỀ 6 CA MẮC MỚI (BN1135-1140): Là các ca nhập cảnh, được cách ly ngay. Cụ thể:</p>
                                                <p>- CA BỆNH 1135 (BN1135): nam, 40 tuổi, có địa chỉ tại xã Quân Chu, huyện Đại Từ, tỉnh Thái Nguyên. Ngày 16/10/2020, bệnh nhân từ Nga nhập cảnh Sân bay Vân Đồn trên chuyến bay VN5062, được chuyển đến cách ly tại Trung đoàn 855 thuộc Bộ Chỉ huy Quân sự tỉnh Ninh Bình ngay sau khi nhập cảnh. Lấy mẫu ngày 16/10/2020, kết quả xét nghiệm ngày 17/10/2020 tại Bệnh viện Đa khoa tỉnh Ninh Bình dương tính với SARS-CoV-2. Hiện tại bệnh nhân đang được cách ly, điều trị tại Phòng khám Đa khoa Khu vực Cầu Yên, huyện Hoa Lư, tỉnh Ninh Bình.</p>
                                                <p>- CA BỆNH 1136 (BN1136): nữ, 32 tuổi, là chuyên gia người Pháp, vào Việt Nam làm việc tại Thành phố Hồ Chí Minh. Ngày 17/10/2020, bệnh nhân từ Dubai (UAE) nhập cảnh Sân bay Tân Sơn Nhất trên chuyến bay EK392, được chuyển đến cách ly ngay tại TP. Hồ Chí Minh. Kết quả xét nghiệm ngày 18/10/2020 tại Trung tâm Kiểm soát bệnh tật TP. Hồ Chí Minh dương tính với SARS-CoV-2. Hiện tại bệnh nhân đang được cách ly, điều trị tại Bệnh viện dã chiến Củ Chi.</p>
                                                <p>- CA BỆNH 1137 (BN1137): nữ, 26 tuổi, có địa chỉ tại phường Yên Bắc, thị xã Duy Tiên, tỉnh Hà Nam.
                                                <br>
                                                - CA BỆNH 1138 (BN1138): nam, 32 tuổi, có địa chỉ tại phường Bồ Đề, quận Long Biên, Thành phố Hà Nội.
                                                <br>
                                                - CA BỆNH 1139 (BN1139): nam, 40 tuổi, có địa chỉ tại phường Cẩm Bình, thành phố Cẩm Phả, tỉnh Quảng Ninh.
                                                <br>
                                                - CA BỆNH 1140 (BN1140): nam, 36 tuổi, có địa chỉ tại xã Công Thành, huyện Yên Thành, tỉnh Nghệ An.
                                                <br>

                                                </p>
                                                <p>Ngày 16/10/2020, các bệnh nhân BN1137-1140 từ Nga nhập cảnh Sân bay Vân Đồn trên chuyến bay VN5062, được chuyển đến cách ly tại Trung đoàn 180, Bộ Chỉ huy quân sự tỉnh Nam Định ngay sau khi nhập cảnh. Kết quả xét nghiệm ngày 18/10/2020 tại Viện Vệ sinh dịch tễ Trung ương dương tính với SARS-CoV-2. Hiện tại các bệnh nhân đang được cách ly, điều trị tại Bệnh viện Đa khoa tỉnh Nam Định.</p>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <!-- <div class="news-textcenter">
                                <a href="{{url('/danh-sach-tin')}}" class="news__seemore">
                                    Xem thêm
                                </a>
                            </div> -->

                            
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
        <!-- =====================================end container================================== -->
@stop