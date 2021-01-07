@extends('admin.layout')
@section('maincontent')
<div class="col-lg-12">
    <h2>لیست تماس های دریافتی</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>نام </th>
                    <th>عنوان</th>
                    <th>آدرس ایمیل</th>
                    <th>متن پیام</th>
                    <th>تاریخ ارسال پیام</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->subject }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->message }}</td>
                            <td>{{ Morilog\Jalali\CalendarUtils::strftime('d F Y H:i:s', strtotime($item->created_at)) }}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection