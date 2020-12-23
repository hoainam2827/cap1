@extends('back.template.master')

@section('title', 'Quản lí danh sách tin tức')
@section('heading','Chỉnh sửa danh sách tin tức')
@section('news','active')
@section('content')
<div class="col-md-12">
        <div class="card-header">
            <a class="btn btn-block btn-danger ad_add" href="{{url('admin/news/list')}}" title="Them">Quay lại</a>
        </div>
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form role="form" class="form" action="{{ url('admin/news/edit/'.$News->RowID) }}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                {{ csrf_field()}}
                <div class="form-group">
                  <select  class="form-control" name="Status">
                      <option value="1" @if($News->Status==1) selected="" @endif>
                          Trạng thái: Bật
                      </option>
                      <option value="0" @if($News->Status==0) selected="" @endif>
                          Trạng thái: Tắt
                      </option>
                  </select>
                </div>
                
                <div class="form-group">
                  <select  class="form-control" name="RowIDCat">
                      @if(isset($NewsCategory) && count($NewsCategory) > 0)
                      @foreach($NewsCategory as $k=>$v)
                      <option value="{{$v->RowID}}" @if($News->RowIDCat==$v->RowID) selected="" @endif>
                          Danh mục: {{$v->Name}}
                      </option>
                      @endforeach
                      @endif
                  </select>
                </div>
                  
                <div class="form-group">
                    <label for="exampleInputHvT1">Tên tin tức<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Name" value="{{$News->Name}}" id="title" onkeyup="ChangeToSlug();">
                </div>

                <div class="form-group">
                    <label for="exampleInputHvT1">Đường dẫn</label>
                    <input type="text" class="form-control" name="Alias" id="slug" value="{{$News->Alias}}">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Tác Giả</label>
                    <input type="text" class="form-control" name="level" value="{{$News->level}}" disabled="">
                </div>

                <div class="form-group">
                    <label for="exampleInputHvT1">Tên meta title</label>
                    <textarea name="MetaTitle" rows="2" class="form-control">{{$News->MetaTitle}}</textarea>
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputHvT1">Tên meta description</label>
                    <textarea name="MetaDescription" rows="4" class="form-control">{{$News->MetaDescription}}</textarea>
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputHvT1">Tên meta keyword</label>
                    <textarea name="MetaKeyword" rows="3" class="form-control">{{$News->MetaKeyword}}</textarea>
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputHvT1">Giới thiệu ngắn</label>
                    <textarea name="SmallDescription" rows="2" class="form-control">{{$News->SmallDescription}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputHvT1">Ảnh đại diện</label>
                    @if($News->Images != NULL)
                    <br>
                    <img src="{{url('images/news/'.$News->Images)}}" alt="Avatar">
                    @endif
                    <input type="file" class="form-control" name="Images">
                </div>
                <div class="form-group">
                    <label for="exampleInputHvT1">Mô tả tin tức<span class="color_red">*</span></label>
                    <textarea name="Description" rows="16" class="form-control" id="ckeditor">{{$News->Description}}</textarea>
                </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                </div>
              </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
@stop