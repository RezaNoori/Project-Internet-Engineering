@extends('client.layout')
@section('title')
    صفحه اصلی   
@endsection
@section('maincontent')
<!-- service part start-->
<section class="service_part">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-4 col-sm-10">
                <div class="service_text">
                    <h2> ما تولید کننده پسته و زعران در ایران هستیم .</h2>
                    <p>علاوه بر تولید به شما آموزش میدهیم که چگونه محصول خود را تولید کنید </p>
                    <a href="/blog" class="btn_3">بیشتر بدانید</a>
                </div>
            </div>
            <div class="col-lg-7 col-xl-6">
                <div class="service_part_iner">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_service_text ">
                                <i class="flaticon-money"></i>
                                <h4>بخش سفارش </h4>
                                <p>شما میتوانید سفارش خود را به صورت آنلاین ثبت کنید . ما آن را بررسی میکنیم و با شما تماس میگیریم</p>
                                <a href="{{ url('/order') }}"> سفارش خود را ثبت کنید</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_service_text">
                                <i class="flaticon-money"></i>
                                <h4>تماس</h4>
                                <p>در فرم تماس درخواست خود را ثبت کنید . در صورت نیاز با شما تماس میگیریم</p>
                                <a href="{{ url('/contact') }}">تماس با ما</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_service_text">
                                <i class="flaticon-money"></i>
                                <h4>داوطلب شدن</h4>
                                <p>میتوانید داوطلب در زمینه بررسی نوآوری های کشاورزی بر روی محصولات خودتان شوید</p>
                                <a href="#">بیشتر بدانید</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_service_text">
                                <i class="flaticon-money"></i>
                                <h4>کمک مالی</h4>
                                <p> به دلیل رایگان بودن آموزش ها در صورت تمایل میتوانید از ما حمایت کنید. </p>
                                <a href="#">هم اکنون کمک کنید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service part end-->   

@endsection