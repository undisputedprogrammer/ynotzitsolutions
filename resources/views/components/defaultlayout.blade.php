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

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '804649157949495');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=804649157949495&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

</head>

<body x-data="{show:false, toggle(){this.show=!this.show}}">

    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-M3W265KSKZ"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-M3W265KSKZ');
        </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11222827292">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-11222827292');
    </script>

    {{$slot}}

    <script>
  AOS.init();
</script>

</body>

</html>
