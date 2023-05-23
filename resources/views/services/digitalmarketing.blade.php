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
    $hero = array('img' => "/images/services/image 6-02.webp");
    $height="h-[180px]";
    $data = array('title' => "Digital Marketing", 'desc'=>"Digital marketing provides businesses with a cost-effective and measurable way to reach their target audience, increase brand awareness, drive website traffic, generate leads, and ultimately boost sales. It allows for targeted marketing campaigns and provides valuable insights for continuous improvement. Businesses need to adapt and stay updated with the latest digital marketing trends and strategies to stay competitive in the digital landscape.


" );
    $listhead="Why should you choose us ?";
    $lists=['Quality oriented work force', 'In depth knowledge of frameworks and mobile technologies','On- demand capacity to meet tight deadlines','Timely delivery and cost effective service', 'Customer centric procedures'];
    $img="/images/services/Mobile Application Development-02.png";
@endphp

<x-herowithouthead :hero="$hero" :height="$height"></x-herowithouthead>

<x-service-body :data="$data"></x-service-body>

@php
    $mainbg="bg-[#e2e5f6]";
    $subbg="bg-[#B9B9DF]";

    $details = array('title1' => "Branding",'desc1'=>"Our main focus of digital marketing is to increase customer branding we are specialized in brand strategy and digital creation. Our approach us to take a bottom line of each project and consistently work on it to increase increased traffic, enhanced brand loyalty and new leads.. ", 'title2'=>"Innovation",'desc2'=>"Approach is innovative and focus is on increasing the marketing of the website. We use digital market tools, our team is constantly tinkering we follow digital marketing analytics and our in-house lab is a great place to come experience the latest in voice technology. We explore, innovate technology .", 'title3'=>"Dedication
",'desc3'=>"We become fully immersed into our client business and industry, acquiring the same vision to accomplish goals together. In addition, we’ve leveraged the best practices learned from across our experience in a plethora of industries around the globe." );
@endphp
<x-servicedetail :main="$mainbg" :sub="$subbg" :details="$details"></x-servicedetail>

@php
    $paragraph="We are one of the renowned website Development Company and proficient in ecommerce website development proved to be one of best website design firm. Our methods are user friendly agile, professional website design pattern and standard codes architecture which offers uniformity is very open to any customization with very less efforts."
@endphp

<x-service-paragraph :paragraph="$paragraph"></x-service-paragraph>

<x-lets-talk></x-lets-talk>

<x-common.footer></x-common.footer>

</x-defaultlayout>
