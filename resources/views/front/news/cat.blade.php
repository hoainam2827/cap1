@extends('front.template.master')

@section('title', 'Danh sách tin')
@section('heading','Danh sách tin')
@section($newsCat->Alias,'active')
@section('content')

    <link rel="stylesheet" href="{{url('public/assets/css/newslist.css')}}">
    <!-- ==================================start container=================================== -->
    <div class="container">
            <div class="container__page-one">
                <div class="grid">
                    <div class="grid__row news-list">
                        
                        
                        @if(isset($listNews)&& count($listNews)>0)
                        @foreach($listNews as $k => $v)
                        <div class="grid__column-4 " data-aos="fade-right">
                            <div class="new-list-morelist-img">
                                <a href="{{url('/'.$v->Alias)}}.html" title="{{$v->Name}}">
                                    <img src="{{url('images/news/'.$v->Images)}}"  alt="{{$v->Name}}">
                                </a>
                                
                            </div>
                        </div>
                        
                        <div class="grid__column-8" data-aos="fade-left">
                            <div class="new-list-morelist-text">
                                <a href="{{url('/'.$v->Alias)}}.html">{{$v->Name}}</a>
                                <br>
                                <small>{{$v->created_at}}</small>
                                <div>
                                    <p class="news-list-item__text">
                                        {{$v->SmallDescription}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        
                        <!-- <div class="grid__column-4 " data-aos="fade-right">
                            <div class="new-list-morelist-img">
                                <img src="{{url('public/assets/img/news2.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="grid__column-8" data-aos="fade-left">
                            <div class="new-list-morelist-text">
                                <a href="#">Dịch COVID-19: Những đô thị lớn, mật độ dân cư đông cần áp dụng bắt buộc người dân đeo khẩu trang</a>
                                <br>
                                <small>Thứ năm, 15/10/2020, 18:47</small>
                                <div>
                                    <p class="news-list-item__text">
                                        Những đô thị lớn, mật độ dân cư đông, người qua lại nhiều như Hà Nội, Đà Nẵng, Hải Phòng, Nha Trang… cũng cần áp dụng biện pháp buộc người dân phải đeo khẩu trang, và xử phạt nếu vi phạm như TP Hồ Chí Minh.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-4 " data-aos="fade-right">
                            <div class="new-list-morelist-img">
                                <img src="{{url('public/assets/img/news2.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="grid__column-8" data-aos="fade-left">
                            <div class="new-list-morelist-text">
                                <a href="#">Dịch COVID-19: Những đô thị lớn, mật độ dân cư đông cần áp dụng bắt buộc người dân đeo khẩu trang</a>
                                <br>
                                <small>Thứ năm, 15/10/2020, 18:47</small>
                                <div>
                                    <p class="news-list-item__text">
                                        Những đô thị lớn, mật độ dân cư đông, người qua lại nhiều như Hà Nội, Đà Nẵng, Hải Phòng, Nha Trang… cũng cần áp dụng biện pháp buộc người dân phải đeo khẩu trang, và xử phạt nếu vi phạm như TP Hồ Chí Minh.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-4 " data-aos="fade-right">
                            <div class="new-list-morelist-img">
                                <img src="{{url('public/assets/img/news2.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="grid__column-8" data-aos="fade-left">
                            <div class="new-list-morelist-text">
                                <a href="#">Dịch COVID-19: Những đô thị lớn, mật độ dân cư đông cần áp dụng bắt buộc người dân đeo khẩu trang</a>
                                <br>
                                <small>Thứ năm, 15/10/2020, 18:47</small>
                                <div>
                                    <p class="news-list-item__text">
                                        Những đô thị lớn, mật độ dân cư đông, người qua lại nhiều như Hà Nội, Đà Nẵng, Hải Phòng, Nha Trang… cũng cần áp dụng biện pháp buộc người dân phải đeo khẩu trang, và xử phạt nếu vi phạm như TP Hồ Chí Minh.
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    
                    <div class="content__paging">
                        <div class="page">
                            <ul>
                                <li class="btn-prev btn-active fas fa-angle-left"></li>
                                <div class="number-page" id="number-page">
                                    {{ $listNews->links() }}
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