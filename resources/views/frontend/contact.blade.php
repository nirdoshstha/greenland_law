@extends('layouts.frontend')

@section('title')
Contact Us
@endsection

@section('content')
<!--contact start-->
    <section id="contact" class="bg-header text-white mt-5" style="background-image: url('images/law1.jpg');">
        <div class="overlay-color"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 section-introduct text-center">
                <h1 data-aos="zoom-in">Get in touch</h1>
                <div class="divider"></div>
                <p data-aos="fade-up">Remember us for any kind of problem, we all team member are ready to serve you<br/>
                Pls call or send message we will contact you as soon as possible.
                </p>
                <div class="col-12 d-flex justify-content-center">
                    <i class='bx bxs-phone-call h2 text-primary '></i>Contact No: 9801014247<span class="p-3"></span>
                    <i class='bx bxs-home h2 text-primary'></i> Office: 015244197<span class="p-3"></span>
                    <i class='bx bx-envelope h2 text-primary'></i>E-mail : nirdoshsresta@gmail.com
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
                            <div class="text-center mt-3">
                                <button class="btn btn-main">Send Message</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--contact end-->


@endsection
