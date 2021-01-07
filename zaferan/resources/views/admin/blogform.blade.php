@extends('admin.layout')
@section('maincontent')
@if (\Session::has('success'))
<br>
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                    <br>
                @endif
                
<form method="POST" action="/admin/blog/savepost" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>عنوان</label>
        <input class="form-control" name="title" id="title">
        <p class="help-block">عنوان مطلب در این قسمت وارد شود</p>
    </div>

    <div class="form-group">
        <label>تصویر نوشته</label>
        <input type="file" name="image" id="image">
    </div>

    <div class="form-group">
        <label>محتوای مطلب</label>
        <textarea class="form-control" rows="6" name="content" id="content"></textarea>
    </div>
    <button type="submit" class="btn btn-default">ذخیره نوشته</button>
</form>
@endsection