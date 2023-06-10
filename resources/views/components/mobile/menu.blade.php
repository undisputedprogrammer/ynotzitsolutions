@props(['home','about','services','blog'])


<div x-cloak x-transition x-show="show" class="h-[380px] flex flex-col justify-between bg-white absolute top-0 left-0 z-20 w-full lg:hidden">
    <div class="flex justify-between h-[75px]">
        <img class="mx-[45px] my-auto h-[40px]" src="{{asset('images/home/ynotz it solutions-01.webp')}}" alt="">
        <img @click="toggle()" id="close-menu" class="mr-[25px] h-[24px] my-auto" src="{{asset('/images/icons/close.svg')}}" alt="">
    </div>
    <div class="flex flex-col h-fit font-montregular">
        <a {{ $attributes->class([ 'text-blue' => $home]) }} class=" " href="/">HOME</a>
        <a {{ $attributes->class(['text-blue' => $about]) }} class=" " href="/about">ABOUT US</a>
        <a {{ $attributes->class(['text-blue' => $services]) }} class=" " href="/services">OUR SERVICES</a>
        {{-- <a {{ $attributes->class(['text-blue' => $blog]) }} class=" " href="/careers">CAREERS</a> --}}
    </div>
    <a class=" w-[104px] text-white btn-blue text-center font-myriadpro  py-[6px] text-sm rounded-xl ml-11 mb-[45px]" href="/contact">CONTACT US</a>
</div>
