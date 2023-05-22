<x-defaultlayout>

    {{-- navbar-mobile --}}
<x-mobile.nav></x-mobile.nav>
{{-- navbar-mobile ends --}}

{{-- mobile-menu pop up begins--}}
@php
$home=false;
$about=false;
$services=false;
$blog=false;
@endphp
<x-mobile.menu :home="$home" :about="$about" :services="$services" :blog="$blog" class="font-satoshimedium text-[14px] ml-11 mb-[27px]"></x-mobile.menu>
{{-- mobile-menu pop up ends --}}

{{-- desktop-navbar begins --}}
@php
$ishome=false;
$isabout=false;
$isservices=false;
$iscontact=true;
$isblog=false;
@endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :iscontact="$iscontact"  :isblog="$isblog" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
{{-- desktop-navbar ends --}}
@php
   $hero = array('img' => "/images/about/contact.png", 'title'=>"Let us know how we can help you" );
   $height="h-[180px]";

@endphp
<x-herowithtext :hero="$hero" :height="$height"></x-herowithtext>

<x-contact-body></x-contact-body>

<div class=" my-8 lg:my-14"></div>

<x-lets-talk></x-lets-talk>

<x-common.footer></x-common.footer>

</x-defaultlayout>
