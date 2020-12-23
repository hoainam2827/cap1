@extends('front.template.master')

@section('title', 'Danh sách tin')
@section('heading','Danh sách tin')
@section($newsitem->NewsCatAlias,'active')
@section('url',url('/'.$newsitem->Alias.'.html'))
@section('content')

    <link rel="stylesheet" href="{{url('public/assets/css/newsitem.css')}}">
    <!-- ==================================start container=================================== -->
    <div class="container">
        <div class="container__page-one">
            <div class="grid">
                <div class="grid__row news moreinfo">
                    <div class="grid__column-9">
                        <div class="news-item">
                            <a href="#">
                                <h1 class="news-item__heading">{{$newsitem->Name}}</h1>
                            </a>
                            <small>({{$newsitem->created_at}})</small>
                            <p class="news-item__text">
                                {!!$newsitem->Description!!}
                            </p>
                        
                            
                            <hr>
                        </div>
                                            
                    </div>
                    <div class="grid__column-3">
                        <div class="moreinfo-right">
                            <div class="moreinfo-right-title">
                                Tin đọc nhiều
                            </div>
                            
                            @if(isset($AddNews)&& count($AddNews)>0)
                            @foreach($AddNews as $k => $v)
                            <div class="moreinfo-right-content">
                                <img src="{{url('images/news/'.$v->Images)}}"  alt="{{$v->Name}}">
                                <a href="{{url('/'.$v->Alias)}}.html" class="moreinfo-right-content-text">{{$v->Name}}</a>
                                <hr>
                            </div>
                            @endforeach
                            @endif 
                            <!-- <div class="moreinfo-right-content">
                                <img src="assets/img/news1.jpg" alt="#">
                                <a href="#" class="moreinfo-right-content-text">"Biến" phòng cách ly thành phòng đẻ để cứu 2 sản phụ</a>
                                <hr>
                            </div>
                            <div class="moreinfo-right-content">
                                <img src="assets/img/news1.jpg" alt="#">
                                <a href="#" class="moreinfo-right-content-text">"Biến" phòng cách ly thành phòng đẻ để cứu 2 sản phụ</a>
                                <hr>
                            </div>
                            <div class="moreinfo-right-content">
                                <img src="assets/img/news1.jpg" alt="#">
                                <a href="#" class="moreinfo-right-content-text">"Biến" phòng cách ly thành phòng đẻ để cứu 2 sản phụ</a>
                                <hr>
                            </div> -->
                            
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
    </div>
    <!-- =====================================end container================================== -->
@stop