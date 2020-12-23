@extends('back.template.master') 
@section('title', 'Quản Lý Bệnh Nhân') 
@section('heading','Chỉnh Sửa Thông Tin Bệnh Nhân') 
@section('patient', 'active') 
@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <!-- form start -->
        <form role="form" class="form" action="{{ url('admin/patient/edit/' .$Patient->RowID) }}" method="POST">
            <div class="card-body">
                {{ csrf_field()}}
                <div class="form-group">
                    <select class="form-control" name='Status'>
                        <option value="1" @if($Patient->Status == 1) selected="" @endif>
                            Tình Trạng: Đang Điều Trị
                        </option>
                        <option value="2" @if($Patient->Status == 2) selected="" @endif>
                            Tình Trạng: Đã Khỏi Bệnh
                        </option>
                        <option value="0" @if($Patient->Status == 0) selected="" @endif>
                            Tình Trạng: Tử Vong
                        </option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputHvT1">Họ và Tên<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="fullname" value="{{$Patient->fullname}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quê Quán <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="quequan" value="{{$Patient->quequan}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tuổi <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Age" value="{{$Patient->Age}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Địa điểm <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Location" value="{{$Patient->Location}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputSdt1">Ghi Chú<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="ghichu" value="{{$Patient->ghichu}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tác Giả</label>
                    <input type="text" class="form-control" name="level" value="{{$Patient->level}}" disabled="">
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