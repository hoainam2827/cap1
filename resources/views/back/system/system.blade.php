@extends('back.template.master')
@section('title', 'Settings')
@section('heading','Settings')
@section('system', 'active')
@section('content')
<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form role="form" class="form" action="{{ url('admin/system') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                {{ csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputHvT1">Tên Công Ty<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{$name->Description}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputHvT1">Logo</label>
                    <img src="{{url('images/logo/'.$logo->Description)}}" alt="Logo"/>
                    <input type="file" class="form-control" name="logo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputHvT1">Favicon</label>
                    <img src="{{url('images/favicon/'.$favicon->Description)}}" alt="favicon"/>
                    <input type="file" class="form-control" name="favicon">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email <span class="color_red">*</span></label>
                    <input type="email" class="form-control" name="email" value="{{$email->Description}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSdt1">Số Điện Thoại <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="phone" value="{{$phone->Description}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDC1">Địa Chỉ <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="address" value="{{$address->Description}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDC1">Địa Chỉ <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="copyright" value="{{$copyright->Description}}">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
@stop