@extends('layouts.frontend')

@section('title')
Our Services
@endsection

@section('content')

 <!--our services-->
 <section id="services" class="section-introduct mt-5">
   <div class="container">
         <div class="row gx-5 gy-5">
         <div class="col-md-12 text-center" data-aos="fade-up">
                 <h1 data-aos="zoom-in">Our Services</h1>
                 <div class="divider" data-aos="fade-right"></div>
                 <p data-aos="fade-up">Greenland Law Associates was established to meet all the following functions as their core service to the clients<br/>from the court of law and work upon to protect their fundamental rights through these aspects:</p>
         </div>
         </div>

         <div class="row mt-1 g-4">
             {{--  <div class="row mt-1 gx-5 gy-3">  --}}
                 @foreach ($objectives as $objective )
                     <div class="col-md-4 features shadow-sm text-center" data-aos="zoom-in">
                         <div class="icon mt-3">
                           <i class="{{$objective->icon}}"></i>
                           <h5 class="mt-4 mb-3 text-center">{{$objective->title}}</h5>
                           <p class="textjustify">{!!$objective->description!!}</p>
                         </div>
                     </div>
                 @endforeach
         {{--  </div>  --}}
             {{--  @foreach ($services as $service )
                 <div class="col-md-4" data-aos="zoom-in">

                     <div class="service text-center">
                         <div class="service-image">
                         <img src="{{asset('uploads/services/'.$service->image)}}" class="img-fluid" width="340px" data-aos="zoom-in">
                         <div class="icon"><i class="{{$service->icon}}"></i></div>
                         </div>
                         <h5 class="mt-4 pt-4" data-aos="fade-right">{{$service->title}}</h5>
                         <p class="textjustify" data-aos="fade-up">{!! Str::limit($service->description, 170)!!}</p>
                     </div>

                 </div>
             @endforeach  --}}

         </div>


   </div>
 </section>
 <!--end our services-->



@endsection

@section('script')
@endsection

