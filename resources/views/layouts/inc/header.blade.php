 <!--hero section start-->
    @foreach($header as $headers)
    <section id="home" class="bg-header hero-section" style="background-image: url('uploads/header/{{$headers->image}}');">
        <div class="overlay-color"></div>
        <div class="container text-white text-center">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <h1 class="display-4 text-lighter"data-aos="zoom-in">{!!$headers->title!!}<span id="auto-type"></span></h1>
                <div>
                <div class="col-md-10 offset-md-1 text-center">
                    <p class="my-4 fs-3 text-light" data-aos="fade-up">{!!$headers->subtitle!!}</p>
                </div>
                <div class="col-md-9 offset-md-1 text-center">
                <a href="{{route('contact_us')}}" class="btn btn-main mt-4" data-aos="flip-down" data-aos-duration="1000">Get Your Free Consultation</a>
                </div>
            </div>
        </div>
    </section>
    @endforeach
