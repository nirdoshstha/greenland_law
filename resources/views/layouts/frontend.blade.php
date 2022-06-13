<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" >
     <link rel="stylesheet" href="{{asset('backend/dist/css/jquery.dataTables.min.css')}}">
     <link rel="stylesheet" href="{{asset('frontend/css/line-icons.css')}}" >
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/law.png')}}">
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar">

    {{-- Navbar Start --}}
    @include('layouts.inc.frontend-navbar')

        @yield('content')

        {{-- Footer Us --}}
    @include('layouts.inc.frontend-footer')



    <script src="{{asset('backend/dist/js/jquery-3.5.1.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('frontend/js/app.js')}}"></script>
    <script src="{{asset('backend/dist/js/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
    var typed = new Typed('#auto-type', {
            strings: ['We are the best defense lawyer', 'Your Trusted Legal Counselor.'],
            typeSpeed:100,
            backSpeed:100,
            loop:true,
            });
    </script>


@yield('script')

</body>
</html>
