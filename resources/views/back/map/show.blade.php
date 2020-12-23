@extends('back.template.master') 
@section('title', 'Information Patient Maps') 
@section('heading','Thêm Lộ Trình Bệnh Nhân') 
@section('map', 'active') 
@section('content')
<style type="text/css">
	.no-padding {
		padding: 0px; 
	}
	.container, .container-fluid {
		padding-left: 0px;
		padding-right: 0px;
	}
	.filter-gmaps{
		position: absolute;
		z-index: 999;
		margin: 69px;
		/*width: 100px;*/
	}
	.summary-gmaps{
		position: absolute;
		z-index: 999;
		margin-top: 121px;
		margin-left: 10px;
		width: 199px;
	}
	.form-inline{
		display: flex;
	}
	.panel {
		margin-bottom: 22px;
		background-color: #ffffff3d;
		border: 1px solid transparent;
		border-radius: 4px;
		box-shadow: 0 1px 1px rgba(0,0,0,.05);
	}
</style>
<div class="filter-gmaps">
	<form action="" method="GET" role="form" class="form-inline">
        <div class="form-group" placeholder="Bệnh Nhân">
            <select class="form-control form-option1" name="patient_id" >
                @if(isset($Patient) && count($Patient) > 0)
                @foreach($Patient as $k => $v)
                <option value="{{$v->RowID}}" >  Mã Bệnh Nhân: {{$v->fullname}} </option>
                @endforeach
                @endif
            </select>
         </div>
		<button type="submit" class="btn btn-default ad_button"><i class="fa fa-search"></i></button>
	</form>
</div>
<div class="summary-gmaps">
	<div class="panel1 panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Thống Kê</h3>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Mã</th>
					<th>Số Lần Di Chuyển</th>
				</tr>
			</thead>
			<tbody>
				<?php $jml=0; ?>
				@foreach($patientCount as $cc)

				<tr>
					<td>{{$cc->fullname}}</td>
					<td class="text_align_center">{{$cc->jml}}</td>
				</tr>
				<?php $jml+=$cc->jml; ?>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<div id="map"></div>
@section('script')
<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic2tpcHBlcmhvYSIsImEiOiJjazE2MjNqMjkxMTljM2luejl0aGRyOTAxIn0.Wyvywisw6bsheh7wJZcq3Q';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [108.202242, 16.053270], //lng,lat 10.818746, 106.629179
        zoom: 11
    });
	//@foreach($dataMap as $d)
	
	var el = document.createElement('div');
        el.className = 'marker';

        //gắn marker đó tại vị trí tọa độ
    new mapboxgl.Marker(el)
    .setLngLat(['{{$d->lng}}', '{{$d->lat}}'] )
    
    .setPopup(new mapboxgl.Popup({
        offset: 25
    }) 
    .setHTML('<h5>' + '{{$d->title}}' + '</h5><p>' + '{{$d->description}}' + '</p>'))
    .addTo(map);
    //@endforeach
</script>
<style>
	.marker {
        background-image: url('/public/homepage/img/warning.png');
        background-repeat: no-repeat;
        background-size: 100%;
        width: 50px;
        height: 100px;
        cursor: pointer;
    }
    #map{
        margin-left: 25%;
        margin-top: -2px;
        width: 75%;
    }
    .form-option1 {
        margin-left: -5rem;

    }
	::-webkit-scrollbar {
     width: 2px;
     background: white;
    }
    ::-webkit-scrollbar-thumb {
     background-color: #E54646;
    }
    .table-statis {
        color: red;
    }
    .panel1{
        width: 120%;
		height: 42.5rem;
		overflow-y: scroll;
    }
</style>
@endsection
@stop