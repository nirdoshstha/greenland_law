@extends('layouts.frontend')
@section('title')
Gallery
@endsection

@section('content')
<!--Our Team-->
      <section id="gallery" class="section-introduct">
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-12 mb-5">
              <h1 class="text-center">Our Photo Gallery</h1>
              <div class="divider" data-aos="fade-right"></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row g-3" data-aos="fade-up">
        @foreach ($activity as $activities )
            <div class="col-md-3">
              <div class="our-gallery">
                <div class="img-wrapper">
                    <img src="{{asset('uploads/activity/'.$activities->image)}}" class="img-fluid img-thumbnail" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="overlay"></div>
                    <div class="social-links">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#gallery{{$activities->id}}"><i class='bx bx-link h1 text-white'></i></a>
                  </div>
                  </div>
                 <div class="content">
                  <h6>{{$activities->title}}</h6>
                  {{--  <p>Marketing Director</p>  --}}
                 </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
      </section>
      <!--End Our Team-->




<!-- Modal -->

@foreach ($activity as $activities )
<div class="modal fade" id="gallery{{$activities->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel{{$activities->id}}">Our Activity Portfolio</h5>
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
