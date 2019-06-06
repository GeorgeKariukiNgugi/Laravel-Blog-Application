<!DOCTYPE html>
<html>

{{-- Including the head template with the head information. --}}

@include('sharedCode.head')

<body>
    @include('sharedCode.navigation')
    @yield('content')
    @include('sharedCode.footer')
    @include('sharedCode.javascript')
</body>

</html>    