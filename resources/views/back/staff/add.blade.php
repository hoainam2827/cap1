@extends('back.template.master')

@section('title', 'Thông Tin Tài Khoản')
@section('heading','Thêm Tài Khoản')
@section('content')
<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form role="form" class="form" action="{{ url('admin/staff/add') }}" method="POST">
                <div class="card-body">
                {{ csrf_field()}}
                <div class="form-group">
                   <select  class="form-control" name="level">
                        @if(isset($UserLevel) && count($UserLevel) > 0)
                        @foreach($UserLevel as $k => $v)
                        <option value="{{$v->idLevel}}">Cấp bậc: {{$v->name}}</option>
                        @endforeach
                        @endif
                   </select>
                  </div>

                <div class="form-group">
                    <label for="exampleInputHvT1">Họ và Tên <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="fullname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email <span class="color_red">*</span></label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSdt1">Số Điện Thoại <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDC1">Địa Chỉ <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tài Khoản <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mật Khẩu <span class="color_red">*</span></label>
                    <input type="password" class="form-control" name="password">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
              </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
@stop