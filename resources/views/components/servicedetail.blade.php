@props(['main','sub','details'])
<div class=" w-full {{$sub}} my-6 xl:my-14">
    <div class="w-[90%] mx-auto {{$main}} pt-1 lg:pt-4 pb-2 lg:pb-6 lg:flex lg:justify-evenly ">
        <div class=" w-[90%] mx-auto lg:basis-[28%] xl:basis-[22%]">
            <h3 class=" font-montregular text-sm lg:text-base xl:text-lg mt-2">{{$details['title1']}}</h3>
            <p class=" font-montmedium text-[10px] lg:text-sm xl:text-base mt-1 xl:my-4">{{$details['desc1']}}</p>

        </div>
        <div class=" w-[90%] mx-auto lg:basis-[28%] xl:basis-[22%]">
            <h3 class=" font-montregular text-sm lg:text-base xl:text-lg mt-2">{{$details['title2']}}</h3>
            <p class=" font-montmedium text-[10px] lg:text-sm xl:text-base mt-2 xl:my-4">{{$details['desc2']}}</p>

        </div>
        <div class=" w-[90%] mx-auto lg:basis-[28%] xl:basis-[22%]">
            <h3 class=" font-montregular text-sm lg:text-base xl:text-lg mt-2">{{$details['title3']}}</h3>
            <p class=" font-montmedium text-[10px] lg:text-sm xl:text-base mt-2 xl:my-4">{{$details['desc3']}}</p>

        </div>
    </div>
</div>
