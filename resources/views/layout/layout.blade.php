@inject('n','App\Category')

<!DOCTYPE html>
<html>
<head>
    <title>NewsPortal</title>
    <link rel="stylesheet" type="text/css" href="{{url('assets/vendors/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
</head>
<body>

  {{-- header part  --}}

  <section id="header">
      <div class="container-fluid">
          <div class="container">
              <div class="row">
                  <div class="topHeader container col-md-12">
                      <div class="col-md-8 col-sm-12">
                          <ul class="topHeaderWeather list-unstyled list-inline displayInline">
                              <li><i class="fa fa-cloud"></i></li>
                              <li><span>25.4 &#8451</span></li>
                              <li><span>New York</span></li>
                          </ul>
                          <ul class="topHeaderNav list-unstyled list-inline displayInline">
                              <li><a href="#">Sign in/ Join</a> </li>
                              <li><a href="#">Advertisement</a> </li>
                              <li><a href="#">Blog</a> </li>
                              <li><a href="#">Contact Us</a> </li>
                              <li><a href="#">Buy now</a> </li>
                          </ul>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <ul class="topHeaderSocial list-unstyled list-inline displayInline pull-right">
                              <li><a href="#"><i class="fa fa-behance"></i></a></li>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-vine"></i></a></li>
                              <li><a href="#"><i class="fa fa-vk"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="container add">
                      <ul class="list-inline list-unstyled displayInline">
                          <li><img class="img-responsive" src="/img/logo-header.png"></li>
                          <li><img class="img-responsive" src="/img/rec728.jpg"></li>
                      </ul>
                  </div>
                  @yield("nav")
              </div>
          </div>
      </div>
  </section>

    @yield("content")

    {{-- footer part --}}

<section id="footer">
        <div class="container-fluid text-center">
            <div class="container">
                <div class="row background">
                    <ul class="list-unstyled list-inline">
                        <li><img src="/img/logo-footer.png"></li>
                        <li>
                            <p>Newspaper is your news, entertainment, music fashion website. We provide you with the latest breaking news and videos straight from the entertainment industry.</p>
                        </li>
                        <li>Contact us: <a href="#">contact@yoursite.com</a></li>
                        <br>
                        <li>
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="#"> <i class="fa fa-behance"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-instagram"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-vine"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-vk"></i> </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="row bottom">
                    <div class="pull-left">
                        <p>&copy Newspaper WordPress Theme by TagDiv</p>
                    </div>
                    <div class="pull-right">
                        <ul class="list-unstyled list-inline">
                            <li><a href="#">Advertisement</a> </li>
                            <li><a href="#">Blog</a> </li>
                            <li><a href="#">Contact Us</a> </li>
                            <li><a href="#">Buy now</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <script type="text/javascript" src="assets/vendors/jquery/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="assets/vendors/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
