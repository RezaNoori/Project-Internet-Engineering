@extends('client.layout')
@section('title')
 تماس با ما   
@endsection
@section('maincontent')
<!-- ================ contact section start ================= -->
    <section class="contact-section section_padding">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 480px;"></div>
                <script>
                    function initMap() {
                        var uluru = {
                            lat: -25.363,
                            lng: 131.044
                        };
                        var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                saturation: -90
                            },
                                {
                                    lightness: 50
                                }
                            ]
                        },
                            {
                                elementType: 'labels.text.fill',
                                stylers: [{
                                    color: '#ccdee9'
                                }]
                            }
                        ];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: -31.197,
                                lng: 150.744
                            },
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel: false
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
            </div>

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">با ما در ارتباط باشید</h2>
                </div>

                @if (\Session::has('success'))
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
                @endif
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('contact') }}" method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'پیام ...'" placeholder='پیام ...'></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'نام'" placeholder='نام'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'آدرس ایمیل'" placeholder='آدرس ایمیل'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'موضوع'" placeholder='موضوع'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn_3">ارسال پیام <i class="flaticon-left-arrow"></i> </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>ایران | قاین</h3>
                            <p>09053251041</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>05632101010</h3>
                            <p>همه روزه - 24/7</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>info@buqaen.ac.ir</h3>
                            <p>نظراتتان را برای ما ارسال کنید</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
    @endsection