@extends('layouts.frontend')

@section('title')
About
@endsection

@section('content')

 <!--about start-->
    <section id="about" class="section-introduct mt-5">
        <div class="container">
            <div class="row align-items-center">
                @foreach($about as $abouts)
                        <div class="col-md-5 ">
                            <img src="{{asset('uploads/aboutus/'.$abouts->image)}}" class="img-fluid img-thumbnail" data-aos="zoom-in" data-aos-duration="1000" width="400px">
                                </div>
                                <div class="col-md-7">
                                    <h1 data-aos="zoom-in" class="text-center">{{$abouts->title}}</h1>
                                    <div class="divider" data-aos="fade-right"></div>

                                    <p class="textjustify mt-5" data-aos="zoom-in">{!!Str::limit($abouts->description, 800)!!}</p>
                        </div>

                @endforeach

            </div>
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                  <h1 data-aos="zoom-in">Our Legal Practices Area</h1>
                  <div class="divider" data-aos="fade-right"></div>
                  {{--  <p data-aos="zoom-in">What our valuable clients have to say.
                    </p>  --}}
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
    </section>
<!--end about-->



@endsection

@section('script')
@endsection
