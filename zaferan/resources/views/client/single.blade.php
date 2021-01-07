@extends('client.layout')
@section('title')
    مطلب بلاگ
@endsection
@section('maincontent')
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="/images/{{$post->image}}" alt="">
                        </div>
                        <div class="blog_details">
                        <h2> {{ $post->title }}</h2>
                            <ul class="blog-info-link mt-3 mb-4">                                
                            </ul>
                            <p class="excert">{{ $post->content }} </p>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="blog_left_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='جستجو' onfocus="this.placeholder = ''" onblur="this.placeholder = 'جستجو'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">جستجو</button>
                            </form>
                        </aside>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area end =================-->
    @endsection