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
    $hero = array('img' => "/images/services/seo.webp");
    $height="h-[180px]";
    $data = array('title' => "Search Engine Optimisation", 'desc'=>"SEO, which stands for Search Engine Optimization, is the practice of optimizing websites and online content to improve their visibility and ranking in search engine results pages (SERPs). SEO plays a crucial role in digital marketing strategies for businesses.  Staying up-to-date with the ever-evolving SEO landscape, including algorithm changes and industry trends, is crucial for businesses to maintain their online visibility and drive sustainable organic traffic to their websites.

" );
    $listhead="Why should you choose us ?";
    $lists=['Quality oriented work force', 'In depth knowledge of frameworks and mobile technologies','On- demand capacity to meet tight deadlines','Timely delivery and cost effective service', 'Customer centric procedures'];
    $img="/images/services/Mobile Application Development-02.png";
@endphp

<x-herowithouthead :hero="$hero" :height="$height"></x-herowithouthead>

<x-service-body :data="$data"></x-service-body>

@php
    $mainbg="bg-[#ddf5f7]";
    $subbg="bg-[#92dce7]";


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
