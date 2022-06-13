@extends('layouts.frontend')

@section('title')
Our Objectives
@endsection

@section('content')

<!--features start-->
    <section id="features" class="section-introduct mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center" >
            <h1 data-aos="zoom-in">What we offer our clients</h1>
            <div class="divider" data-aos="fade-right"></div>
            <p data-aos="fade-up">you deserve the best defence lawyers. we are experts in business litigations.</br>
              Make a free consultation call and choose your lawyer.
              </p>
          </div>
        </div>

        <div class="row mt-1 gx-5 gy-3">
                @foreach ($objectives as $objective )
                    <div class="col-md-4 features shadow-sm text-center" data-aos="zoom-in">
                        <div class="icon mt-3" data-aos="flip-left" data-aos-duration="1500">
                          <i class="{{$objective->icon}}"></i>
                          <h5 class="mt-4 mb-3 text-center">{{$objective->title}}</h5>
                          <p>{!!$objective->description!!}</p>
                        </div>
                    </div>
                @endforeach
        </div>
      </div>
    </section>
    <!--features end-->
@endsection

@section('script')
@endsection
