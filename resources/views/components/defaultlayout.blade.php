<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YNOTZ IT SOLUTIONS</title>
    {{-- <script src="{{asset('js/swiper.js')}}"></script> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="{{asset('js/swiper.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <script src="{{asset('js/aos.js')}}"></script>

</head>

<body x-data="{show:false, toggle(){this.show=!this.show}}">
    {{$slot}}

    <script>
  AOS.init();
</script>
</body>

</html>
