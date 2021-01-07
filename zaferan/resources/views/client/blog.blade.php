@extends('client.layout')
@section('title')
    مطالب آموزشی
@endsection
@section('maincontent')
<!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($post as $item)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="images/{{ $item->image }}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>{{ Morilog\Jalali\CalendarUtils::strftime('d', strtotime($item->created_at)) }}</h3>
                                    <p>{{ Morilog\Jalali\CalendarUtils::strftime('F', strtotime($item->created_at)) }}</p>
                                </a>
                            </div>
                            <div class="blog_details">
                            <a class="d-inline-block" href="/blog/{{$item->slug}}">
                                <h2>{{ $item->title }}</h2>
                                </a>
                                <p>{{ \Illuminate\Support\Str::limit($item->content, $limit = 15, $end = '...') }}</p>
                                <ul class="blog-info-link">
                                </ul>
                            </div>
                        </article>
                        @endforeach
                        
                        {!! $post->render() !!}
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
    <!--================Blog Area =================-->
    @endsection