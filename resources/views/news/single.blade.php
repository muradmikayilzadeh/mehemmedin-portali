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

	<div class="container whiteBack">
		<section id="single" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="row">
					<a href="#" class="category">{{$xeber->category->category_name}}</a>
					<h1>
						{{ $xeber->news_title }}
					</h1>
					<p>By David Lee - September 24, 2015</p>
					<div >
						<a href="#">Facebook</a>
						<a href="#">Twitter</a>
						<a href="#">Gmail</a>
						<a href="#">Pinterest</a>
					</div>
				</div>
				<h4>{{$xeber_count}}</h4>
				<div class="row">
					<img src="{{ '/images/'.$xeber->news_image }}" class="sekil">
						<p class="sekil_p">

							{!! $xeber->news_text !!}

						</p>




				</div>
				<div class="row" style="margin-bottom:50px;">
					<div class="share">
						<b>SHARE</b>
						<a href="#" class="share_p" style="background-color:#516eab; color:white;">Facebook</a>
						<a href="#" class="share_p" style="background-color:#29c5f6;color:white;">Twitter</a>
						<a href="#" class="share_p"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="#" class="share_p"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
					</div>
				</div>

				<div class="row img_p">
						<img src="/images/img6.jpg" style="width:100px;height:100px" class="pull-left">
						<p>David Lee</p>
						<p class="sekil_p">
							My name is David Lee. I'm a social boy from Romania with a big smile and 3 passions: People, Travel and Social Media. I try to make this blog practical, full of great advice and inspiring ideas.
						</p>
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal">
							  <div class="form-group">
							  	<div>
							  		<textarea class="form-control" rows="9"></textarea>
							  	</div>
							  </div>
							  	<div class="form-group">
								    <div>
								      <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
								    </div>
							    </div>
							  	<div class="form-group">
								    <div>
								      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								    </div>
							    </div>
							  <div class="form-group">
							    <div>
							      <input type="password" class="form-control" id="inputPassword3" placeholder="Website">
							    </div>
							  </div>
							  <div class="form-group">
							  </div>
							  <div class="form-group">
							    <div class="col-md-2 row">
							      <button type="submit" class="btn btn-info">POST COMMENT</button>
							    </div>
							  </div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class=" stay_p">
					<h4><b>STAY CONNECTED</b></h4>
				</div>
				<div class="items">
					<div class="item">
						<a href="#" class="text-center"><i class="fa fa-facebook fa-2x" style="color:#5b76af;" aria-hidden="true"></i></a>
						<p>2293</p>
						<p>Fans</p>
					</div>
					<div class="item">
						<a href="#" class="text-center"><i class="fa fa-twitter fa-2x" style="color:#29c5f6;" aria-hidden="true"></i></a>
						<p>2293</p>
						<p>Fans</p>
					</div>
					<div class="item">
						<a href="#" class="text-center"><i class="fa fa-youtube-play fa-2x" style="color:#e14e42;" aria-hidden="true"></i></a>
						<p>2293</p>
						<p>Fans</p>
					</div>
				</div>
				<div class="row">
					<img src="/images/img7.jpg" class="ads img-responsive">
				</div>
				<h4 class="latest"><b>LATEST ARTICLE</b></h4>
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object" src="/images/img1.jpg" style="width:100px; height:100px;">
				    </a>
				  </div>
				  <div class="media-body">
				    <h4  class="media-heading sekil_p">Celebrity make-up artist Gary Cockerill shows you beauty trick</h4>
				    <a href="#" class="category">Photography</a>
				  </div>
				</div>
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object" src="/images/img2.jpg" style="width:100px; height:100px;">
				    </a>
				  </div>
				  <div class="media-body">
				    <h4  class="media-heading sekil_p">Summer Sports That Torch Serious Calories</h4>
				    <a href="#" class="category">Health</a>
				  </div>
				</div>
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object" src="/images/img3.jpg" style="width:100px; height:100px;">
				    </a>
				  </div>
				  <div class="media-body">
				    <h4  class="media-heading sekil_p">The Workout That Burns More Calories Than Running</h4>
				    <a href="#" class="category">Health</a>
				  </div>
				</div>
			</div>
		</section>
	</div>

@stop
