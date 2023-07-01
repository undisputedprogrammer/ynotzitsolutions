<x-defaultlayout>

        {{-- navbar-mobile --}}
<x-mobile.nav></x-mobile.nav>
{{-- navbar-mobile ends --}}

{{-- mobile-menu pop up begins--}}
@php
    $home=true;
    $about=false;
    $services=false;
    $blog=false;
@endphp
<x-mobile.menu :home="$home" :about="$about" :services="$services" :blog="$blog" class="font-satoshimedium text-[14px] ml-11 mb-[27px]"></x-mobile.menu>
{{-- mobile-menu pop up ends --}}

{{-- desktop-navbar begins --}}
@php
    $ishome=true;
    $isabout=false;
    $isservices=false;
    $iscontact=false;
    $isblog=false;
@endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :iscontact="$iscontact"  :isblog="$isblog" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
{{-- desktop-navbar ends --}}


<x-common.index-hero></x-common.index-hero>

<x-common.index-query></x-common.index-query>

<x-common.index-services></x-common.index-services>

@php
    $targetbg="bg-recent-blogs";
@endphp

@if(count($recents)>2)
<x-common.recent-blogs :bg="$targetbg" :recents="$recents"></x-common.recent-blogs>
@endif
<x-common.why-us></x-common.why-us>

<x-lets-talk></x-lets-talk>

<x-common.footer></x-common.footer>

</x-defaultlayout>
