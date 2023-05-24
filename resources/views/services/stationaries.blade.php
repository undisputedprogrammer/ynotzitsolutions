<x-defaultlayout>

    {{-- navbar-mobile --}}
<x-mobile.nav></x-mobile.nav>
{{-- navbar-mobile ends --}}

{{-- mobile-menu pop up begins--}}

@php
$home=false;
$about=false;
$services=true;
$blog=false;
@endphp
<x-mobile.menu :home="$home" :about="$about" :services="$services" :blog="$blog" class="font-satoshimedium text-[14px] ml-11 mb-[27px]"></x-mobile.menu>

{{-- mobile-menu pop up ends --}}

{{-- desktop-navbar begins --}}
@php
$ishome=false;
$isabout=false;
$isservices=true;
$iscontact=false;
$isblog=false;
@endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :iscontact="$iscontact"  :isblog="$isblog" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
{{-- desktop-navbar ends --}}

@php
    $hero = array('img' => "/images/services/Stationeries-02.webp");
    $height="h-[180px]";
    $data = array('title' => "Stationaries", 'desc'=>"In this dynamic modern world, no one can imagine a business without proper high-end mobile solutions. With massive knowledge and
expertise gained through years of experience, our Mobile Application development team is always ready to take a step beyond your expectations. We have an expert team of mobile app developers who create stunning mobile app designs. Our service expertise will cover all major Smartphone platforms including iOS, Android, and HTML5 app development.
" );
    $listhead="Why should you choose us ?";
    $lists=['Quality oriented work force', 'In depth knowledge of frameworks and mobile technologies','On- demand capacity to meet tight deadlines','Timely delivery and cost effective service', 'Customer centric procedures'];
    $img="/images/services/Mobile Application Development-02.png";
@endphp

<x-multimedia-herowithbgimg :hero="$hero"></x-multimedia-herowithbgimg>

{{-- <img src="{{asset('images/services/Stationeries-02.png')}}" alt=""> --}}
<x-service-body :data="$data"></x-service-body>

@php
    $mainbg="bg-[#c7d8ea]";
    $subbg="bg-[#b1c4d2]";

    $features=[array('title'=>"Engagement",'desc'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat non explicabo accusantium distinctio soluta molestiae, doloremque  quis ipsam, fuga adipisci?"), array('title'=>"Engagement",'desc'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat non explicabo accusantium distinctio soluta molestiae, doloremque  quis ipsam, fuga adipisci?"), array('title'=>"Engagement",'desc'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat non explicabo accusantium distinctio soluta molestiae, doloremque  quis ipsam, fuga adipisci?"), array('title'=>"Engagement",'desc'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat non explicabo accusantium distinctio soluta molestiae, doloremque  quis ipsam, fuga adipisci?")];
@endphp

<x-common.service-features :features="$features"></x-common.service-features>
@php
    $paragraph="We are one of the renowned website Development Company and proficient in ecommerce website development proved to be one of best website design firm. Our methods are user friendly agile, professional website design pattern and standard codes architecture which offers uniformity is very open to any customization with very less efforts."
@endphp

<x-service-paragraph :paragraph="$paragraph"></x-service-paragraph>

<x-lets-talk></x-lets-talk>

<x-common.footer></x-common.footer>

</x-defaultlayout>
