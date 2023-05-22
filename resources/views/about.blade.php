<x-defaultlayout>

    {{-- navbar-mobile --}}
<x-mobile.nav></x-mobile.nav>
{{-- navbar-mobile ends --}}

{{-- mobile-menu pop up begins--}}
@php
$home=false;
$about=true;
$services=false;
$blog=false;
@endphp
<x-mobile.menu :home="$home" :about="$about" :services="$services" :blog="$blog" class="font-satoshimedium text-[14px] ml-11 mb-[27px]"></x-mobile.menu>
{{-- mobile-menu pop up ends --}}

{{-- desktop-navbar begins --}}
@php
$ishome=false;
$isabout=true;
$isservices=false;
$iscontact=false;
$isblog=false;
@endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :iscontact="$iscontact"  :isblog="$isblog" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
{{-- desktop-navbar ends --}}
@php
   $hero = array('img' => "/images/about/about.png", 'title'=>"We not only design products, We design Dreams" );
   $height="h-[180px]";
   $data = array('title' => "ABOUT US", 'desc'=>"Having known as a website development company in the initial stages, Webandcrafts have now blossomed into a global IT solution provider.
Today, we create custom made mobility solutions, web and mobile applications and dynamic digital marketing strategies for our customers
in Asia, the Middle East, Northern and Southern parts of America. The journey was not easy, but with a team of talented developers, designers,
and managers, we’ve been able to make ourselves known to some of the big names in the industry and to help them redesign and power up
their digital marketplace. Along with other services, e-commerce development is a service we actively proffer and have been able to successfully
 land customers whose names are recognized worldwide.
" );
@endphp
<x-herowithtext :hero="$hero" :height="$height"></x-herowithtext>

<x-service-body :data="$data"></x-service-body>

<div class=" my-8 lg:my-14"></div>

<x-lets-talk></x-lets-talk>

<x-common.footer></x-common.footer>

</x-defaultlayout>
