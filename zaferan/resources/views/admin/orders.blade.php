@extends('admin.layout')
@section('maincontent')
<div class="col-lg-12">
    <h2>لیست سفارشات ثبتی</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>نام کاربری</th>
                    <th>نوع سفارش</th>
                    <th>میزان سفارش</th>
                    <th>تلفن</th>
                    <th>آدرس</th>
                    <th>وضعیت</th>
                    <th>تاریخ سفارش</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $item)
                        <tr>
                            <td>{{ $item->user->name }}</td>
                            <td>
                                @if($item->product == '1')
                                زعفران
                                    @else
                                پسته
                                    @endif
                            </td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>
                            <td>
                                @if($item->approved == '1')
                                تایید شده
                                    @else
                                تایید نشده
                                    @endif
                            </td>
                            <td>{{ Morilog\Jalali\CalendarUtils::strftime('d F Y H:i:s', strtotime($item->created_at)) }}</td>
                            <td>
                                <form method="post" action="/admin/orders/approve">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" id="id" value="{{ $item->id }}"/>
                                    <input type="submit" value="تایید" />
                                </form>
                                <form method="post" action="/admin/orders/disapprove">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" id="id" value="{{ $item->id }}"/>
                                    <input type="submit" value="رد سفارش" />
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