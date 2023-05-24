@props(['img','title','description','url'])
<div data-aos="zoom-in-down" data-aos-duration="800" class=" w-[46%] lg:w-[23%] flex flex-col items-center mb-5 lg:mb-8">
    <img class="w-[45%] mx-auto" src="{{$img}}" alt="">
    <h3 class=" text-center text-dark-blue font-montregular lg:text-xl  ">{{$title}}</h3>
    <p class=" text-[10px] text-center text-dark-gray font-montmedium font-medium line-clamp-3 lg:text-sm  lg:mt-2  ">{{$description}}</p>
    <a class=" border border-blue-400 rounded-3xl text-dark-blue text-[10px] font-montregular px-2 py-1 mt-3 lg:mt-3 mb-2 lg:text-sm lg:px-3" href="{{$url}}">LEARN MORE</a>
</div>
