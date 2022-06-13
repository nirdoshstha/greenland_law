@extends('layouts.frontend')

@section('title')
About Chairman |Greenland Law
@endsection

@section('content')

 <!--Message from CEO-->
    @foreach ($message as $messages )
        <section id="message-from-md" class="section-introduct mt-5">
        <div class="container">
            <div class="row py-4">
            <div class="col-md-12 text-center" >
                <h1 data-aos="zoom-in">{{$messages->title}}</h1>
                <div class="divider" data-aos="fade-right"></div>
                <p>{!!$messages->subtitle!!}</p>
            </div>
            </div>
        <div class="container">
            <div class="row">
            <div class="col-md-7 text-center text">
                {{--  <h3 data-aos="zoom-in">{{$messages->subtitle}}</h3>
                <div class="divider" data-aos="fade-right"></div>  --}}

                <p class="textjustify" data-aos="fade-up">
                    {!!$messages->description!!}</p>
                {{--  <div><img src="images/signature.png"></div>  --}}
            </div>
            <div class="col-md-5 text-center messages">
                <img src="{{asset('uploads/message/'.$messages->image)}}" class="img-thumbnail" data-aos="zoom-in" data-aos-duration="3000">
            </div>
            </div>
        </div>
        </section>

    @endforeach
    <!--end Message from CEO-->


<!--counter start-->
    <section class="bg-header section-introduct mb-0"  style="background-image: url('images/pexels-ekaterina-bolovtsova-6077861.jpg');">
      <div class="overlay-color"></div>
      <div class="container mb-0">
        <div class="row gy-4" data-aos="fade-up">
          <div class="col-md-12 text-white text-center" data-aos="flip-left" data-aos-duration="1500">
             <i class='bx bxs-institution h3'></i>
             <h1 class="display-6 text-lighter"data-aos="zoom-in">If you are Graduation in LLM, You can apply for <br/>free Internship in our Organization</h1>
             <p></p>
             <a href="{{url('/contact')}}"><button class="btn btn-main">Go to Apply</button></a>

          </div>

        </div>
      </div>


    </section>
    <!--counter end-->

@endsection


@section('script')
@endsection


