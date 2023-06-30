@props(['hero','height'])
<div class="w-full relative  ">

    <img class=" {{$height}} lg:h-[200px] xl:h-fit object-cover w-full" src="{{$hero['img']}}" alt="">
    <div class=" absolute top-[42%] lg:top-[34%] xl:top-[35%] left-0 w-full">
        <div class=" w-full">
        <h2 data-aos="zoom-in" data-aos-duration="750" class=" w-[94%] mx-auto font-myriadpro text-3xl md:text-5xl  text-white  text-center lg:w-full mt-0   lg:text-5xl xl:text-6xl">{{$hero['title']}}</h2>
    </div>

    </div>


</div>
