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
   $hero = array('img' => "/images/about/about2.webp", 'title'=>"We not only design products, We design Dreams" );
   $height="h-[180px]";
   $data = array('title' => "ABOUT US", 'desc1'=>"YNOTZ IT Solutions is a software Solutions and Digital Marketing services provider company based at Cochin, Kerala, India.",'desc2'=>"We started off as a proprietary firm YNOTZ Web Solutions in the year 2017. We recently incorporated as a company under the name YNOTZ IT Solutions Private Limited.",'desc3'=>"We are a young and enthusiastic team of software developers, designers and content creators. We are passionate to do great work and produce amazing results. The one value we admire the most is integrity. Honesty, clear communication and honouring commitments are certain qualities that we strive to uphold.",'desc4'=>"We work with core web technologies such as HTML, CSS, Javascript, PHP, MySQL, Postgersql, Node.js and frameworks such as Laravel, Alpine JS, Tailwind CSS etc.",'desc5'=>"When faced with challenges, many feel dejected and think 'why' did it happen that way. But then, there are a few, who dare to think out of the box, conceive innovative solutions and think 'Why Not?'. We believe the latter are the ones who drive the world forward. We admire and celebrate that spirit. We are the YNOTZ.");
@endphp
{{-- <x-herowithtext :hero="$hero" :height="$height"></x-herowithtext> --}}
<x-common.about-hero></x-common.about-hero>

<x-about-body :data="$data"></x-about-body>

<x-common.about-body></x-common.about-body>

@php
    $paragraph="We are one of the renowned website Development Company and proficient in ecommerce website development proved to be one of best website design firm. Our methods are user friendly agile, professional website design pattern and standard codes architecture which offers uniformity is very open to any customization with very less efforts."
@endphp

{{-- <x-service-paragraph :paragraph="$paragraph"></x-service-paragraph> --}}

<div class=" my-6 lg:my-14"></div>

<x-lets-talk></x-lets-talk>

<x-common.footer></x-common.footer>

</x-defaultlayout>
