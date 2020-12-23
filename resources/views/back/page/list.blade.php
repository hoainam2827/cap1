@extends('back.template.master')
@section('title', 'Quản Lý Trang')
@section('heading','Danh Sách Trang')
@section('page', 'active')
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card">  
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text_align_center">STT</th>
                        <th>Tên Trang</th>
                        <th class="text_align_center">Trạng Thái</th>
                        <th class="text_align_center">Sắp Xếp</th>
                        <th class="text_align_center"><i class="fas fa-user-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($Page) && count($Page) > 0)
                    @foreach($Page as $k => $v)
                    <tr>
                        <td class="text_align_center">{{$k+1}}</td>
                        <td>{{$v->Name}}</td>
                        <td class="text_align_center">
                            @if($v->Status ==1)
                                Bật
                            @else
                                Tắt
                            @endif
                        </td> 
                        <td class="text_align_center">{{$v->Sort}}</td>
                        <td class="text_align_center">
                            <a href="{{url('admin/page/edit/'.$v->RowID)}}" title="Chỉnh Sửa" class="ad_button">
                            <i class="fas fa-user-edit"></i>
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