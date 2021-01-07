@extends('admin.layout')
@section('maincontent')
<div class="col-lg-12">
    <h2>لیست مطالب آموزشی</h2>
    <div class="table-responsive">
        <a class="btn btn-primary" role="button" href="{{ url('/admin/blog/new') }}">ثبت یک مطلب جدید  </a><br>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>نام مطلب</th>
                    <th>تاریخ ایجاد</th>
                    <th>لینک به مطلب</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ Morilog\Jalali\CalendarUtils::strftime('d F Y H:i:s', strtotime($item->created_at)) }}</td>
                            <td><a href="/blog/{{ $item->slug }}">مشاهده مطلب  </a></td>
                            <td>
                                <form method="post" action="/admin/posts/delete">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" id="id" value="{{ $item->id }}"/>
                                    <input type="submit" value="حذف" />
                                </form>
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection