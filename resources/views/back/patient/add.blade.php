@extends('back.template.master') 
@section('title', 'Quản Lý Bệnh Nhân') 
@section('heading','Thêm Thông Tin Bệnh Nhân') 
@section('patient', 'active') 
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <!-- form start -->
        <form role="form" class="form" action="{{ url('admin/patient/add') }}" method="POST">
            <div class="card-body">
                {{ csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputHvT1">Họ và Tên <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="fullname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quê Quán <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="quequan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tuổi <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Age">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Địa điểm <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Location">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ghi Chú<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="ghichu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tác Giả <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="level">
                  </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@stop