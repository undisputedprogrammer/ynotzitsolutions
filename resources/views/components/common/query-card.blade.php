@props(['img','title','description','url','services'])
<div data-aos="zoom-in-down" data-aos-duration="800" class=" w-[90%] md:w-[46%] xl:w-[23%] flex flex-col  mb-5 lg:mb-8 items-center h-full">
    <img class="w-[30%] xl:w-[45%] mx-auto" src="{{$img}}" alt="">
    <div class=" flex h-[40px] sm:h-fit items-center">
    <h3 class=" text-center text-base text-dark-blue font-montregular lg:text-xl  py-auto ">{{$title}}</h3>
    </div>

    <p class=" text-sm text-center text-dark-gray font-montmedium font-medium  lg:text-sm  lg:mt-2 lg:h-[40px] xl:h-fit ">{{$description}}</p>
    <p class="text-xs text-center text-black font-montmedium font-medium mt-2  lg:text-sm  lg:mt-2 xl:h-[100px] 2xl:h-[80px] ">
        {{$services}}
    </p>
    <a class=" border border-blue-400 rounded-3xl text-dark-blue text-[10px] font-montregular px-2 py-1 mt-3 lg:mt-3 mb-2 lg:text-sm lg:px-3" href="{{$url}}">LEARN MORE</a>
</div>
