@props(['data'])
<div class=" w-[88%] mx-auto mt-2 md:mt-3 xl:mt-10">
    {{-- <h1 class=" text-center font-montsemibold text-2xl md:text-3xl xl:text-5xl ">{{$data['title']}}</h1> --}}
    <p class=" font-montmedium  text-[10px] sm:text-xs md:text-sm lg:text-base  xl:text-lg mt-3 xl:mt-9">{{$data['desc1']}}
        </p>

    <p class=" font-montmedium  text-[10px] sm:text-xs md:text-sm lg:text-base  xl:text-lg mt-2 xl:mt-4">{{$data['desc2']}}
    </p>

    <p class=" font-montmedium  text-[10px] sm:text-xs md:text-sm lg:text-base xl:text-lg mt-2 xl:mt-4">{{$data['desc3']}}
    </p>

    <p class=" font-montmedium  text-[10px] sm:text-xs md:text-sm lg:text-base xl:text-lg mt-2 xl:mt-4">{{$data['desc4']}}
    </p>

    <x-quote></x-quote>

    <p class=" font-montmedium  text-[10px] sm:text-xs md:text-sm lg:text-base xl:text-lg mt-2 xl:mt-4">{{$data['desc5']}}
    </p>


</div>
