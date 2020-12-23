@extends('back.template.master') 
@section('title', 'Information Patient Maps') 
@section('heading','Chỉnh Sửa Lộ Trình Bệnh Nhân') 
@section('map', 'active') 
@section('content') 
@section('script')
<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic2tpcHBlcmhvYSIsImEiOiJjazE2MjNqMjkxMTljM2luejl0aGRyOTAxIn0.Wyvywisw6bsheh7wJZcq3Q';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [108.202242, 16.053270], //lng,lat 10.818746, 106.629179
        zoom: 12
    });
    var test = '<?php echo $dataArray;?>'; //ta nhận dữ liệu từ Controller
    var dataMap = JSON.parse(test); //chuyển đổi nó về dạng mà Mapbox yêu cầu

    // ta tạo dòng lặp để for ra các đối tượng
    dataMap.features.forEach(function(marker) {

        //tạo thẻ div có class là market, để hồi chỉnh css cho market
        var el = document.createElement('div');
        el.className = 'marker';

        //gắn marker đó tại vị trí tọa độ
        new mapboxgl.Marker(el)
            .setLngLat(marker.geometry.coordinates)
            .setPopup(new mapboxgl.Popup({
                    offset: 25
                }) // add popups
                .setHTML('<h5>' + marker.properties.title + '</h5><p>' + marker.properties.description + '</p>'
                +'<p>'+ marker.properties.DiaChi + '</p>' + '<p>' + marker.properties.ThoiGian + '</p>'))
            .addTo(map);
    });
</script>
<style>
    .marker {
        background-image: url('/public/homepage/img/warning.png');
        background-repeat: no-repeat;
        background-size: 100%;
        width: 1.5rem;
        height: 1.5rem;
        cursor: pointer;
    }
</style>
@endsection
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <!-- form start -->
        <form role="form" class="form" action="{{ url('admin/map/edit/' .$Boxmap->id) }}" method="POST">
            <div class="card-body">
                {{ csrf_field()}}
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <h2>Add Patient Information</h2>
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif {{ csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title <span class="color_red">*</span></label>
                                <input type="text" class="form-control" name="title" value="{{$Boxmap->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description <span class="color_red">*</span></label>
                                <input type="text" class="form-control" name="description" value="{{$Boxmap->description}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address <span class="color_red">*</span></label>
                                <input type="text" class="form-control" name="DiaChi" value="{{$Boxmap->DiaChi}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Time <span class="color_red">*</span></label>
                                <input type="text" class="form-control" name="ThoiGian" value="{{$Boxmap->ThoiGian}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDC1">lng<span class="color_red">*</span></label>
                                <input type="text" class="form-control" name="lng" value="{{$Boxmap->lng}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputSdt1">lat<span class="color_red">*</span></label>
                                <input type="text" class="form-control" name="lat" value="{{$Boxmap->lat}}">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Edit Map" class="btn btn-success" />
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h2>Show Route Map </h2>
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>        
        </form>
    </div>
</div>
@stop