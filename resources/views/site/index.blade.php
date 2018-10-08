@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/font/flaticon.css')}}">
@endsection

@extends('site-layouts.body')
@section('title','Клиника ортопедии')


@section('content')

    {{--<main role="main">--}}

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide img-fluid " style="max-width: 100%; height: auto;" src="{{url('public/images/main/homepage/slide1.jpg')}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide img-fluid" style="max-width: 100%; height: auto;" src="{{url('public/images/main/homepage/slide2.jpg')}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide img-fluid" style="max-width: 100%; height: auto;" src="{{url('public/images/main/homepage/slide3.jpg')}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.
        ================================================== -->

        <div class="jumbotron mb-0">
            <h1 class="display-5">Растяжения, травмы, боли в суставах?</h1>
            <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
            <hr class="my-2">
            <p>Свяжитесь со специалистами нашей клиники.</p>
            <a class="btn btn-primary btn-md" href="#" role="button">Live Chat Assistance</a>
        </div>

        <!-- Marketing messaging and featurettes
        ================================================== -->

        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-3 showText">
                    <div class="text-center mb-2"><img src="{{url('public/images/main/svg/users.svg')}}" alt="" width="100" height="100"></div>
                    <h4 class="text-center"><a href="{{url('/specialists')}}">Найти специалиста</a></h4>
                    <div class="text-center"><a href="{{url('/services')}}"><img src="{{url('public/images/main/svg/eye.svg')}}" alt="" width="35" height="35"></a></div>
                    <p class="text-center">We believe that our orthopaedic team is among the best in the world and our professionals care for each our clients.</p>
                </div>
                <div class="col-lg-3 showText">
                    <div class="text-center mb-2"><img src="{{url('public/images/main/svg/book.svg')}}" alt="" width="100" height="100"></div>
                    <h4 class="text-center"><a href="{{url('/specialists')}}">Записаться на приём</a></h4>
                    <div class="text-center"><a href="{{url('/services')}}"><img src="{{url('public/images/main/svg/eye.svg')}}" alt="" width="35" height="35"></a></div>
                    <p class="text-center">Please remember to bring completed forms, along with the following pieces of information to scheduled appointment</p>
                </div>
                <div class="col-lg-3 showText">
                    <div class="text-center mb-2"><img src="{{url('public/images/main/svg/settings-1.svg')}}" alt="" width="100" height="100"></div>
                    <h4 class="text-center"><a href="{{url('/specialists')}}">Подготовка к опрерации</a></h4>
                    <div class="text-center"><a href="{{url('/services')}}"><img src="{{url('public/images/main/svg/eye.svg')}}" alt="" width="35" height="35"></a></div>
                    <p class="text-center">In the days leading up to your surgery, you’ll need to relax, follow pre-surgery directions and think about what to pack.</p>
                </div>
                <div class="col-lg-3 showText">
                    <div class="text-center mb-2"><img src="{{url('public/images/main/svg/placeholder.svg')}}" alt="" width="100" height="100"></div>
                    <h4 class="text-center"><a href="{{url('/specialists')}}">Наш адрес</a></h4>
                    <div class="text-center"><a href="{{url('/services')}}"><img src="{{url('public/images/main/svg/eye.svg')}}" alt="" width="35" height="35"></a></div>
                    <p class="text-center">Welcome to our ortopedic clinic, is located in the Western part of the country. We are the best healthcare.</p>
                </div>
            </div>
        </div>
    <!-- Wrap the rest of the page in another container to center all the content. -->
        
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="mt-5">
                    <h6>Welcome to Our Orthopedics Clinic</h6>
                    <h2 class="notoSerif">We offer specialized orthopedics to meet your needs</h2>
                    <p>From routine doctor visits to the most advanced procedures, we’re here for you. Our physicians specialize in orthopedic surgery and handle the diagnosis and treatment of injuries of the bones, muscles and ligaments in both adults and children.
                    </p>
                    <a href="">More about us    <img src="{{url('public/images/main/svg/play-button.svg')}}" alt="" width="20" height="20"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{url('public/images/main/homepage/bg-17.jpg')}}" alt="" >
            </div>
        </div>
        
    </div>

    <!--  -->
    <div class="container m-auto p-5">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="notoSerif" >Tell us where it hurts</h2>
                <h6>Specialized Orthopedics to Meet Your Needs</h6>
            </div>
            <div class="col-lg-4">
                <a href="{{url('/services')}}" class="btn btn-success">Найти врача</a>
            </div>
        </div>
    </div>
    
    <div class="container marketing">




            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
@endsection





