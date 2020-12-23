@extends('back.template.master') 
@section('title', 'Information Patient Maps') 
@section('heading','Thêm Lộ Trình Bệnh Nhân') 
@section('map', 'active') 
@section('content') 
@section('script')
<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic2tpcHBlcmhvYSIsImEiOiJjazE2MjNqMjkxMTljM2luejl0aGRyOTAxIn0.Wyvywisw6bsheh7wJZcq3Q';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [108.202242, 16.053270], //lng,lat 10.818746, 106.629179
        zoom: 11
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
                .setHTML('<h5>' + marker.properties.title + '</h5><p>' + marker.properties.description + '</p><p>' + marker.properties.ThoiGian + '</p><p>' + marker.properties.DiaChi + '</p>'))
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
    <div class="card card-primary">
        <form role="form" class="form" action="{{ url('admin/map/add') }}" method="POST">
            <div class="card-body">
                {{ csrf_field()}}
                <div class="form-group">
                    <select class="form-control" name="patient_id">
                        @if(isset($Patient) && count($Patient) > 0)
                        @foreach($Patient as $k => $v)
                        <option value="{{$v->RowID}}" >  Mã Bệnh Nhân: {{$v->fullname}} </option>
                        @endforeach
                        @endif
                   </select>
                </div>
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
                            @endif
                            <form action="{{url('admin/map/add')}}" method="post" id="boxmap">
                                {{ csrf_field()}}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" placeholder="title" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <input type="text" name="description" placeholder="Description" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="DiaChi">Address</label>
                                    <input type="text" name="DiaChi" placeholder="Address" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="Time">Time</label>
                                    <input type="text" name="ThoiGian" placeholder="Time" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="lat">lat</label>
                                    <input type="text" name="lat" placeholder="lat" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="lng">lng</label>
                                    <input type="text" name="lng" placeholder="lng" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Add Map" class="btn btn-success" />
                                </div>
                            </form>
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