<!DOCTYPE html>
<html lang="en">

@include('front.partials.header')




<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
@include('front.partials.spinner')
        <!-- Spinner End -->

        <div class="container-xxl position-relative p-0">

        <!-- Navbar & Hero Start -->
        @include('front.partials.navbar')

        <!-- Navbar & Hero End -->
        @yield('hero')
    </div>


       @yield('content')

        <!-- Footer Start -->
@include('front.partials.footer')
        <!-- Footer End -->


     @include('front.partials.scripts')
</body>

</html>
