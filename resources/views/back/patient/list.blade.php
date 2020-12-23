@extends('back.template.master') 
@section('title', 'Quản Lý Bệnh Nhân') 
@section('heading','Danh Sách Bệnh Nhân') 
@section('patient', 'active') 
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card">
        <div div class="card-header">
            <a class="btn btn-block btn-primary ad_add" href="{{url('admin/patient/add')}}" title="Them">Thêm</a>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text_align_center">STT</th>
                        <th>Họ và Tên</th>
                        <th class="text_align_center">Trạng Thái</th>
                        <th class="text_align_center">Quê Quán</th>
                        <th class="text_align_center">Age</th>
                        <th class="text_align_center">Location</th>
                        <th class="text_align_center">Ghi Chú</th>
                        <th class="text_align_center">Tác Giả</th>
                        <th class="text_align_center"><i class="fas fa-user-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($Patient) && count($Patient) > 0) @foreach($Patient as $k => $v)
                    <tr>
                        <td class="text_align_center">{{$k+1}}</td>
                        <td>{{$v->fullname}}</td>
                        <td class="text_align_center">
                            @if($v->Status ==1) Đang Điều Trị 
                            @elseif($v->Status ==2) Đã Khỏi Bệnh 
                            @else Tử Vong 
                            @endif
                        </td>
                        <td class="text_align_center">{{$v->quequan}}</td>
                        <td class="text_align_center">{{$v->Age}}</td>
                        <td class="text_align_center">{{$v->Location}}</td>
                        <td class="text_align_center">{{$v->ghichu}}</td>
                        <td class="text_align_center">{{$v->name}}</td>
                        <td class="text_align_center">
                            <a href="{{url('admin/patient/edit/'.$v->RowID)}}" title="Chỉnh Sửa" class="ad_button">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="{{url('admin/patient/delete/'.$v->RowID)}}" title="Xóa" class="ad_button ad_button_delete">
                                <i class="fas fa-user-minus"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop