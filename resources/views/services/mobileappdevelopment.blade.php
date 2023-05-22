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
    $hero = array('img' => "/images/services/mobile2.png", 'title'=>"Mobile Application Development" );
    $height="h-[180px]";
    $data = array('title' => "Let your business grow with us", 'desc'=>"Mobile applications have become an integral part of modern business strategies. They offer numerous benefits and opportunities for businesses to connect with their customers, enhance productivity, and improve overall efficiency.
It's important for businesses to carefully plan and strategize their mobile app development to align with their specific goals and target audience. A well-designed and user-friendly mobile application can significantly contribute to business growth, customer satisfaction, and operational efficiency.

" );
    $listhead="Why should you choose us ?";
    $lists=['Quality oriented work force', 'In depth knowledge of frameworks and mobile technologies','On- demand capacity to meet tight deadlines','Timely delivery and cost effective service', 'Customer centric procedures'];
    $img="/images/services/Mobile Application Development-02.png";
@endphp

<x-herowithtext :hero="$hero" :height="$height"></x-herowithtext>

<x-service-bodywithlist :data="$data" :listhead="$listhead" :lists="$lists" :img="$img"></x-service-bodywithlist>

@php
    $mainbg="bg-service-mob-main";
    $subbg="bg-service-mob-sub";

    $details = array('heading'=>"Services we offer", 'title1' => "iOS Development",'desc1'=>"we strive for perfection in every app we build. Our iOS consultant team has clear cut knowledge of the development environment and related technologies. They work closely with our designers and connect with the clients to create pixel-perfect, visually striking products.", 'title2'=>"Android Development",'desc2'=>"It is the largest installed base of any mobile platform and growing in a pace which can't be defeated by anything else in the current scenario. Every day more and more users power up their android devices and keep searching for Apps, games and other related", 'title3'=>"Application Development
",'desc3'=>"Clients from across the world have kept our Mobile development team really busy. Being one of the best mobile app development companies in India we have developed a variety of apps in-house with outstanding features and these apps have been widely appreciated" );
@endphp
<x-servicedetailwithheading :main="$mainbg" :sub="$subbg" :details="$details"></x-servicedetailwithheading>

@php
    $paragraph="We are one of the renowned website Development Company and proficient in ecommerce website development proved to be one of best website design firm. Our methods are user friendly agile, professional website design pattern and standard codes architecture which offers uniformity is very open to any customization with very less efforts."
@endphp

<x-service-paragraph :paragraph="$paragraph"></x-service-paragraph>

<x-lets-talk></x-lets-talk>

<x-common.footer></x-common.footer>

</x-defaultlayout>
