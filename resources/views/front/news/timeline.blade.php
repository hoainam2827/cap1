@extends('front.template.master')

@section('title', 'Danh sách thông báo')
@section('heading','Danh sách thông báo')
@section($timeLineList->TimelineAlias,'active')
@section('url',url('/'.$timeLineList->Alias.'.html'))
@section('content')

    <link rel="stylesheet" href="{{url('public/assets/css/timelinelist.css')}}">
    <!-- ==================================start container=================================== -->
    <div class="container">
        <div class="container__page-one">
            <div class="grid">
                <div class="grid__row news-list">
                    <div class="grid__column-12 timeline">
                        <div class="timeline-content">
                            <ul>
                            @if(isset($timeLineList)&& count($timeLineList)>0)
                            @foreach($timeLineList as $k => $v)
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
                                </li>
                                <li>
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
                                </li>
                                <li>
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
                                </li>
                                <li>
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
                    </div>
                </div>
                <div class="content__paging">
                        <div class="page">
                            <ul>
                                <li class="btn-prev btn-active fas fa-angle-left"></li>
                                <div class="number-page" id="number-page">
                                    {{ $timeLineList->links() }}
                                    <!-- <li class="active">
                                    <a>1</a>
                                </li>
                                <li>
                                    <a>2</a>
                                </li>
                                <li>
                                    <a>3</a>
                                </li> -->
                                </div>
                                <li class="btn-next fas fa-angle-right"></li>
                            </ul>
                        </div>  
                    </div>
            </div>    
        </div>
    </div>
    <!-- =====================================end container================================== -->
@stop