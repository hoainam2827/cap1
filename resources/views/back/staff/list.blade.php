@extends('back.template.master')
@section('title', 'Thông Tin Tài Khoản')
@section('heading','Danh Sách Quản Trị Viên')
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card">
        <div class="card-header">
        <a class="btn btn-block btn-primary ad_add" href="{{url('admin/staff/add')}}" title="Them">Thêm</a>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text_align_center">STT</th>
                        <th>Họ và Tên</th>
                        <th>Cấp Bậc</th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                        <th class="text_align_center"><i class="fas fa-user-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($User) && count($User) > 0)
                    @foreach($User as $k => $v)
                    <tr>
                        <td class="text_align_center">{{$k+1}}</td>
                        <td>{{$v->fullname}}</td>
                        <td>{{$v->name}}</td> 
                        <td>{{$v->email}}</td>
                        <td>{{$v->phone}}</td>
                        <td class="text_align_center">
                            <a href="{{url('admin/staff/edit/'.$v->id)}}" title="Chỉnh Sửa" class="ad_button">
                            <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="{{url('admin/staff/delete/'.$v->id)}}" title="Xóa" class="ad_button ad_button_delete">
                            <i class="fas fa-user-minus"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop