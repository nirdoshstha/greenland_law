@extends('layouts.frontend')

@section('title')
Our Team
@endsection

@section('content')

<section class="section-introduct mt-5" >
    {{--  <div class="container service-container">
        <h2 class="main-heading text-center fw-bold text-shadow"></h2>
        <h5 class="text-center text-muted">(Our team is ready to help you today. Contacting us is no-cost, risk-free, and confidential. <br/>We want to hear your story.)</h5>
    </div>  --}}
    <div class="container">
            <div class="row">
            <div class="col-md-12 text-center" >
                <h1 data-aos="zoom-in">Our Team Member </h1>
                <p>Not any case is difficult to sort out by our highly experienced legal team members</p>
                <div class="divider" data-aos="fade-right"></div>
            </div>
            </div>

<div class="container teammaindiv mb-5 py-5">
    <div class="row">
    @foreach ($team as $teams )
        <div class="col" style="margin-bottom: 100px;">
            <img src={{asset('uploads/ourteam/'.$teams->image)}} class="" />
            <div class="layer">
                <img src="{{asset('uploads/ourteam/'.$teams->image)}}" class="pic" />
            </div>
            <div class="info">
                <h2>{{$teams->name}}</h2>
                <p>{{$teams->designation}}</p>
                <div class="icons">
                    <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube' ></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                </div>
            </div>

        </div>

    @endforeach

    </div>
</div>


</section>
@endsection

@section('script')
@endsection
