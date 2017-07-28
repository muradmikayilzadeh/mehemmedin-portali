@extends("layout.layout")
@section("nav")
<nav class="navbar navbar-inverse">
		<div class="container-fluid">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
              <li>
                <a href="/home">Home</a>
              </li>
                <li>
                  <a href="{{url('/category/'.$cat->find(14)->id)}}">{{$cat->find(14)->category_name}}</a>
                </li>
              <li>
                <a href="{{url('/category/'.$cat->find(13)->id)}}">{{$cat->find(13)->category_name}}</a>
              </li>
              <li>
                <a href="{{url('/category/'.$cat->find(5)->id)}}">{{$cat->find(5)->category_name}}</a>
              </li>
              <li>
                <a href="{{url('/category/'.$cat->find(11)->id)}}">{{$cat->find(11)->category_name}}</a>
              </li>
              <li>
                <a href="{{url('/category/'.$cat->find(12)->id)}}">{{$cat->find(12)->category_name}}</a>
              </li>
						</ul>
				</div>
		</div>
</nav>
@endsection
@section("content")



<section id="worldSingle">
    <div class="container-fluid">
        <div class="container">
            <div class="row margin">
							  @foreach($cat->xeber()->take(1)->get() as $news)
                	<h5>{{$news->category->category_name}}</h5>
								@endforeach
                <ul>
                    <li><a href="{{url('/category/'.$cat->find(5)->id)}}">{{$cat->find(5)->category_name}}</a></li>
										<li><a href="{{url('/category/'.$cat->find(4)->id)}}">{{$cat->find(4)->category_name}}</a></li>
										<li><a href="{{url('/category/'.$cat->find(7)->id)}}">{{$cat->find(7)->category_name}}</a></li>
										<li><a href="{{url('/category/'.$cat->find(9)->id)}}">{{$cat->find(9)->category_name}}</a></li>
										<li><a href="{{url('/category/'.$cat->find(6)->id)}}">{{$cat->find(6)->category_name}}</a></li>
                </ul>
                <div class="height"></div>
            </div>
            <div class="row">
                @foreach($cat->xeber()->orderBy("id","desc")->take(2)->get() as $news)
                <div class="col-md-6">

                    <div class="WorldSimg" style="width:570px;">
                        <a href="url(single/{{$news->id}})">
                            <img src="{{'/images/'.$news->news_image}}">
                            <div class="WorlSdesc">
                                <button>{{ $news->category->category_name }}</button></button>
                                <h5> {{ $news->news_title }} </h5>
                                <p><span>David Lee</span> - September 23, 2015</p>
                            </div>
                        </a>
                    </div>

                </div>

              @endforeach
            </div>
            <div class="height"></div>
            <div class="row">
                <div class="col-md-8">
                    <section id="WorldHeader">
                        @foreach($cat->xeber()->orderBy("id","desc")->take(4)->get() as $news)
                        <div class="row">
                            <div class="col-md-4 col-xs-4">
                                <div class="WorldHeaderImg">
                                    <a href="single/{{$news->id}}">
                                        <img src="{{'/images/'.$news->news_image}}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 col-xs-8 padding">
                                <div class="WorldHeaderDesc">
                                    <a href="single/{{$news->id}}">
                                        <h5>{{ $news->news_title }}</h5>
                                    </a>
                                    <button>{{ $news->category->category_name }}</button>
                                    <p><span>David Lee</span>-  September 23, 2015</p>
                                    <h6>{!! substr(($news->news_text),0,200) !!}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </section>
                </div>
                <div class="col-md-4">
                    <section id="stayConnected">
                        <div class="row margin" style="border-bottom:2px solid #009688;">
                            <h5>STAY CONNECTED</h5>
                        </div>
                        <div style="height:30px;"></div>
                            <div class="row text-center">
                                <div class="col-md-4 col-xs-4">
                                    <div class="social">
                                    <a href="#">
                                        <i class="fa fa-facebook" style="color:color:#516eab;"></i>
                                        <p>2,263</p>
                                        <span>Fans</span>
                                    </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-4">
                                    <div class="social">
                                    <a href="#">
                                        <i class="fa fa-twitter" style="color:#29c5f6;"></i>
                                        <p>60,765</p>
                                        <span>Followers</span>
                                    </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-4">
                                    <div class="social">
                                    <a href="#">
                                        <i class="fa fa-youtube-play" style="color:#e14e42;"></i>
                                        <p>1,778</p>
                                        <span>Subscribe</span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="height"></div>
                            <div class="row text-center">
                                <a href="#">
                                    <img src="/images/img11.jpg">
                                </a>
                            </div>
                    </section>
                    <section id="latestArticle">
                            <div class="row margin" style="border-bottom:2px solid #009688;margin-left:10px;margin-top:20px;">
                            <div style="height:40px;"></div>
                                <div class="row margin">
                                        <h5>Latest Article</h5>
                                </div>
                            </div>
                            <div class="height"></div>
                            <div class="mostPopular">
                              @foreach($cat->xeber()->orderBy("count","desc")->take(4)->get() as $news)
                                <div class="row">
                                    <div class="col-md-4 col-xs-2">
                                        <div class="mostImg">
                                            <img src="{{ '/images/'.$news->news_image }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-8">
                                        <div class="mostTitle">
                                            <a href="single/{{$news->id}}">
                                                <h5>{{ substr(($news->news_title),0,50) }}</h5>
                                            </a>
                                            <div class="row">
                                                <button>{{ $news->category_name }}</button>
                                                <span>September 23, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="height2"></div>
                                @endforeach

                            <!-- <div class="row">
                                <button class="left_right"><i class="fa fa-angle-left"></i></button>
                                <button class="left_right"><i class="fa fa-angle-right"></i></button>
                            </div> -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
