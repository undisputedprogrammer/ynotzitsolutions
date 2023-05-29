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
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <script src="{{asset('js/aos.js')}}"></script>

</head>

<body x-data="{show:false, toggle(){this.show=!this.show}}">

    {{-- navbar-mobile --}}
<x-mobile.nav></x-mobile.nav>
{{-- navbar-mobile ends --}}

{{-- mobile-menu pop up begins--}}
@php
$home=false;
$about=false;
$services=false;
$blog=true;
@endphp
<x-mobile.menu :home="$home" :about="$about" :services="$services" :blog="$blog" class="font-satoshimedium text-[14px] ml-11 mb-[27px]"></x-mobile.menu>
{{-- mobile-menu pop up ends --}}

{{-- desktop-navbar begins --}}
@php
$ishome=false;
$isabout=false;
$isservices=false;
$iscontact=false;
$isblog=true;
@endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :iscontact="$iscontact"  :isblog="$isblog" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
{{-- desktop-navbar ends --}}

<div class="  mx-auto  mt-3 w-[90%] justify-between border-b-2 border-gray-400">
    <div class=" w-full flex flex-col md:flex-row items-center md:space-x-4  ">
        <div class="order-2 md:order-1 basis-1/4 md:basis-3/4">
            <h1 class="  text-lg lg:text-2xl xl:text-3xl text-black ">{{$data['blog']->title}}</h1>

            <p class=" font-montregular text-sm md:text-base xl:text-lg ">{{$data['blog']->description}}</p>
        </div>
        <div class="relative w-full  md:basis-1/4 order-1 md:order-2">
            <div class="absolute inset-y-0 right-0 flex items-center  pointer-events-none font-satoshimedium">
              <img class=" mr-1 h-8 " src="{{asset('images/blog/SEARCH-02.webp')}}" alt="">
            </div>
            <input id="phone" type="tel" class="  w-full border-2 border-stone-400 font-montregular " placeholder="Search">
          </div>
    </div>

    <div class=" lg:flex  justify-between">
    <div class=" basis-[74%]">


        <div class="w-full mb-9 lg:mb-0  ">
            @php

                $blog=$data['blog'];
                // dd($blog['image']);
                $datedata=strtotime($blog['created_at']);
                // $blog['created_at']=$datedata->format('d/m/Y');
            @endphp
            <img class="" src="/storage/images/{{$blog['image']}}" alt="">
            <div class=" flex justify-between items-center">
            <p class=" text-[10px] lg:text-xs font-montmedium text-gray-400 mt-1">{{$blog->created_at->format('d/m/y')}} | By YNOTZ IT Solutions</p>
            @auth
                <div class="flex">
                    <a href="/blog/update/{{$blog->id}}">
                        <img class="w-5 h-5 mr-3" src="{{asset('images/icons/update.png')}}" alt="">
                    </a>
                    <a href="/blog/delete/{{$blog->id}}">
                        <img class="w-5 h-5" src="{{asset('images/icons/delete.png')}}" alt="">
                    </a>
                </div>
            @endauth

            </div>
            {{-- {{dd($data)}} --}}
            {!!$data['blog']->content!!}
            {{-- {{dd($blog)}} --}}
        </div>
    </div>
    <div class=" basis-[25%]">
        <h1 class=" text-2xl font-montsemibold">Popular posts</h1>

        @foreach ($popular as $value)
            <div class=" flex w-full space-x-2 py-4 my-3 border-b-2">
                <img class="w-[40%] aspect-[2/1]" src="/storage/images/{{$value['image']}}" alt="">
                <h3 class=" font-montregular text-base line-clamp-2">{{$value['title']}}</h3>
            </div>
        @endforeach

        {{-- <div class=" flex w-full space-x-2 py-4 border-b-2">
            <img class="w-[40%] aspect-[2/1]" src="{{asset('images/blog/blog2-02.webp')}}" alt="">
            <h3 class=" font-montregular text-base">Scope of ecommerce: The future of online business in India</h3>
        </div>
        <div class=" flex w-full space-x-2 py-4 my-3 border-b-2">
            <img class="w-[40%] aspect-[2/1]" src="{{asset('images/blog/HOW CAN REGISTER STARTUP-02.webp')}}" alt="">
            <h3 class=" font-montregular text-base">Scope of ecommerce: The future of online business in India</h3>
        </div>
        <div class=" flex w-full space-x-2 py-4 border-b-2">
            <img class="w-[40%] aspect-[2/1]" src="{{asset('images/blog/blog2-02.webp')}}" alt="">
            <h3 class=" font-montregular text-base">Scope of ecommerce: The future of online business in India</h3>
        </div> --}}

        <h1 class=" text-2xl font-montsemibold mt-7 lg:mt-10">Categories</h1>
        @php
            $categories=['cms','digital marketing','e-commerce','mobile-app','online advertising','seo','ui','uncategorized','ux','web developmemt','web and craft','quality assurance'];
        @endphp
        <div class=" my-4 flex flex-wrap justify-start">

            @foreach ($categories as $category)
                <a class=" font-montmedium uppercase border border-black text-xs md:text-sm lg:text-base text-gray-600 py-1 px-2 rounded-md my-1 mx-1" href="#">{{$category}}</a>
            @endforeach

        </div>
    </div>
</div>
</div>


<div class=" my-10 lg:my-16">

</div>

@php
    $targetbg="bg-white";
@endphp

<x-common.recent-blogs :bg="$targetbg" :recents="$recents"></x-common.recent-blogs>

<x-lets-talk></x-lets-talk>

<x-common.footer></x-common.footer>

<script>
    AOS.init();
  </script>
  </body>

  </html>
