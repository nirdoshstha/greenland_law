@extends('layouts.frontend')

@section('title')
Home
@endsection

@section('content')


    <!--hero section start-->
        @if(Request::is('/'))
            @include('layouts.inc.header')
        @endif
    <!--end hero section-->


    <!--our services-->
    <section id="services" class="section-introduct">
      <div class="container">
            <div class="row gx-5 gy-5">
            <div class="col-md-12 text-center" data-aos="fade-up">
                    <h1 data-aos="zoom-in">Our Services</h1>
                    <div class="divider" data-aos="fade-right"></div>
                    <p data-aos="fade-up">Greenland Law Associates was established to meet all the following functions as their core service to the clients<br/>from the court of law and work upon to protect their fundamental rights through these aspects:</p>
            </div>
            </div>

            <div class="row mt-1 gx-5 gy-3">
                {{--  <div class="row mt-1 gx-5 gy-3">  --}}
                    @foreach ($objectives as $objective )
                        <div class="col-md-4 features text-center bordered" data-aos="zoom-in">
                            <div class="icon mt-3">
                              <i class="{{$objective->icon}}"></i>
                              <h5 class="mt-4 mb-3 text-center">{{$objective->title}}</h5>
                              <p class="textjustify">{!!$objective->description!!}</p>
                            </div>
                        </div>
                    @endforeach


            </div>

            <div class="col-md-12 mt-4">
                <div class="text-center">
                    <a href="{{route('our_services')}}" class="btn btn-main" data-aos="flip-down" data-aos-duration="1000">Read More ++</a>
                </div>
            </div>

      </div>
    </section>
    <!--end our services-->


    <section id="work" class="bg-header " style="background-image: url('images/jakob-owens-fB_kHwH6Sf0-unsplash.jpg');">
        <div class="overlay-color"></div>

        <div class="container mt-2 section-introduct">
                <div class="row">
                        <div class="col-md-12 text-center text-white">
                            <h1 data-aos="zoom-in">Watch our work & Activities</h1>
                            <div class="divider"></div>
                            <p data-aos="fade-up" class="mb-4">
                                “We are highly involved in legal rights and have participation in various activities of law”.
                            </p>
                            {{--  <a href="#" class="video-btn" data-aos="flip-left" data-aos-duration="1500"><i class="icon-video"></i></a>  --}}
                        </div>

                </div>
        </div>

        <div class="container">
        <div class="our-work owl-carousel owl-theme">


                    @foreach ($activity as $activities )
                        <div class="item">

                            <div class="card bg-dark text-white">
                                <div class="card-header text-center">{{$activities->title}}</div>
                                    <div class="card-body">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#activity{{$activities->id}}">
                                    <img src="{{asset('uploads/activity/'.$activities->image)}}" class="img-fluid">
                                    </a>
                                    </div>
                            </div>
                        </div>
                        @endforeach



        </div>
        </div>
    </section>

    <!--about start-->
        <section id="about" class="section-introduct">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                            <h1 data-aos="zoom-in" class="text-center">About Us</h1>
                            <div class="divider" data-aos="fade-right"></div>
                            <p>We are your trusted law firm to give you full service and attention to all your grievances.
                            </p>
                    </div>
                </div>
            <div class="row">
            @foreach($about as $abouts)
                        <div class="col-md-5">
                            <img src="{{asset('uploads/aboutus/'.$abouts->image)}}" class="img-fluid img-thumbnail" data-aos="zoom-in" data-aos-duration="1000" width="450px">
                                </div>
                                <div class="col-md-7 shadow-sm">
                                    <p class="textjustify" data-aos="zoom-in">{!!($abouts->description)!!}</p>

                                {{--  <div class="text-center" data-aos="flip-right"><a href="{{route('about_us')}}"><button class="btn btn-main text-center hover">+ View All</button></a></div>  --}}
                        </div>

            @endforeach

                </div>
            </div>
        </section>
    <!--end about-->

    <!--features start-->
    <section id="services" class="section-introduct mt-0 p-0">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" >
                    <h1 data-aos="fade-right" data-aos-duration="2000">Our Legal Practices Area</h1>
                        <div class="divider" data-aos="fade-right"></div>
                            <p data-aos="fade-left" data-aos-duration="2000">
                                Get specialized attention over matter of legal disputes from team of advocates. We have proven <br/>track record of successful number of cases which have been in our clients favour
                            </p>
            </div>
        </div>

        <div class="row mt-0 g-4">
            {{--  <div class="row mt-1 gx-5 gy-3">  --}}
                @foreach ($services as $service )
             <div class="col-md-4" data-aos="zoom-in">

                 <div class="service text-center">
                     <div class="service-image">
                     <img src="{{asset('uploads/services/'.$service->image)}}" class="img-fluid" width="340px" data-aos="zoom-in">
                     <div class="icon"><i class="{{$service->icon}}"></i></div>
                     </div>
                     <h5 class="mt-4 pt-4" data-aos="fade-right">{{$service->title}}</h5>
                     <p class="textjustify" data-aos="fade-up">{!!($service->description)!!}</p>
                 </div>

             </div>
         @endforeach
        </div>

            <div class="col-md-12 mt-5">
                    <div class="text-center">
                        <a href="{{route('about_us')}}" class="btn btn-main" data-aos="flip-down" data-aos-duration="1000">Read More ++</a>
                    </div>
            </div>
      </div>
    </section>
    <!--features end-->

    <!--counter start-->
    <section class="bg-header section-introduct"  style="background-image: url('images/pexels-ekaterina-bolovtsova-6077861.jpg');">
      <div class="overlay-color"></div>
      <div class="container">
        <div class="row gy-4" data-aos="fade-up">
          <div class="col-md-4 text-white text-center" data-aos="flip-left" data-aos-duration="1500">
             <i class="icon-trophy bx-spin-hover h1"></i>
             <h2 class="mt-3 mb-2">100 +</h2>
             <p>Appreciation Received</p>
          </div>
          <div class="col-md-4 text-white text-center" data-aos="flip-left" data-aos-duration="1500">
            <i class="icon-happy bx-spin-hover h1"></i>
            <h2 class="mt-3 mb-2">95%</h2>
            <p>Happy Client</p>
         </div>
         <div class="col-md-4 text-white text-center" data-aos="flip-left" data-aos-duration="1500">
          <i class="icon-happy bx-spin-hover h1"></i>
          <h2 class="mt-3 mb-2">95%</h2>
          <p>Happy Client</p>
       </div>
        </div>
      </div>


    </section>
    <!--counter end-->


    <!--Message from CEO-->

        <section id="message-from-md" class="section-introduct">
        <div class="container-fluid">
            @foreach ($message as $messages )
            <div class="row">
            <div class="col-md-12 text-center py-5" >
                <h1 data-aos="zoom-in">{{$messages->title}}</h1>
                <div class="divider" data-aos="fade-right"></div>
                <p>Get specialized attention over matter of legal disputes from team of advocates. We have proven track record<br/> of successful number of cases which have been in our clients favour</p>
            </div>
            </div>
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-7 text-center text">
                {{--  <h3 data-aos="zoom-in">{{$messages->subtitle}}</h3>
                <div class="divider" data-aos="fade-right"></div>  --}}
                <p class="textjustify" data-aos="fade-up">
                    {!! substr($messages->description,0, 1270) !!}
                </p>
                {{--  <!-- <div><img src="images/signature.png"></div> -->  --}}
            </div>
            <div class="col-md-5 text-center messages">
                <img src="{{asset('uploads/message/'.$messages->image)}}" class="img-thumbnail p-2" width="450" data-aos="zoom-in" data-aos-duration="500">
            </div>
            </div>

            <div class="text-center">
                <a href="{{route('about_chairman')}}" class="btn btn-main" data-aos="flip-down" data-aos-duration="1000">Read More ++</a>
            </div>

    @endforeach
</div>
        </section>

    <!--end Message from CEO-->

    <!--portfolio start-->
    <section id="review" class="section-introduct">
      <div class="container px-5" style="background: #fafafa;">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h1 data-aos="zoom-in">Our Portfolio</h1>
                <div class="divider" data-aos="fade-right"></div>
                <p data-aos="zoom-in">What our valuable clients have to say.
                  </p>
              </div>
            </div>

          <div class="col-md-12 mt-4">

            <div class="review owl-carousel owl-theme">

            @foreach ($portfolio as $portfolios )
              <div class="item shadow-sm" data-aos="zoom-in">
                  <div class="portfolio p-4">
                      <div class="person">
                          @if($portfolios->image)
                              <img src="{{asset('uploads/portfolio/'.$portfolios->image)}}" alt="" class="img-fluid">
                              @else <img src="{{asset('images/no-image.png')}}" alt="No Image" class="img-fluid" width="50">
                          @endif

                        <div class="text ms-3">
                          <h6>{{$portfolios->name}}</h6>
                          <small>{{$portfolios->designation}}</small>
                        </div>
                      </div>
                    <p class="textjustify pt-4">{!!$portfolios->description!!}</p>
                      <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                      </div>
                  </div>
              </div>

            @endforeach


          </div>
          </div>
        </div>
      </div>
    </section>
    <!--portfolio end-->

    <!--contact start-->
    <section id="contact" class="bg-header text-white" style="background-image: url('images/law1.jpg');">
        <div class="overlay-color"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 section-introduct text-center">
                <h1 data-aos="zoom-in">Get in touch</h1>
                <div class="divider"></div>
                <p data-aos="fade-up">Remember us, whenever you are faced with problems so big to handle. <br/>”We provide 24/7 support and counseling to clients from our Professional Lawyers and advocates<br/> to give you the justice that you deserve so much.”
                </p>
                <div class="col-12 d-flex justify-content-center">
                    <i class='bx bxs-phone-call h2 text-primary '></i> Contact No:+977-9851036015<span class="p-3"></span>
                    <i class='bx bxs-home h2 text-primary'></i> Office: 015244197<span class="p-3"></span>
                    <i class='bx bx-envelope h2 text-primary'></i> E-mail : dahallaxmi606@gmail.com

                </div>
                  @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <form action="{{url('contact-submit')}}" method="POST">
                {{csrf_field()}}
                    <div class="row g-4" data-aos="zoom-in">
                        <div class="col-md-8 mx-auto">
                        <div class="row g-4">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Full Name">
                                <span class="text-danger">{{$errors->first('name')}}</span>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="email" class="form-control" placeholder="E-mail Address">
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="number" name="phone" class="form-control" placeholder="Phone">
                                <span class="text-danger">{{$errors->first('phone')}}</span>

                            </div><span class="text-danger">
                            <div class="form-group col-md-12">
                                <textarea name="message" cols="30" rows="4" class="form-control" placeholder="Type your messages.."></textarea>
                                <span class="text-danger">{{$errors->first('message')}}</span>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-main mt-4" >Send Message</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--contact end-->




<!-- Modal -->
@foreach ($activity as $activities )
<div class="modal fade" id="activity{{$activities->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$activities->title}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{asset('uploads/activity/'.$activities->image)}}" class="img-fluid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach



@endsection


@section('script')
@endsection
