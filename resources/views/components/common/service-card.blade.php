@props(['service'])
<div class=" mb-8 mx-auto rounded-2xl shadow-xl bg-white px-4 lg:px-9 py-5 h-[230px] lg:h-[255px]">
    <img class=" w-12 lg:w-[3.7rem] xl:w-[4.5rem]" src="{{$service['img']}}" alt="">
    <h3 class=" font-montsemibold border-b-2 w-fit border-blue-500 text-sm mt-1 my-3 lg:text-base">{{$service['title']}}</h3>
    <p class=" font-montmedium text-xs lg:text-sm xl:text-sm ">{{$service['desc']}}</p>
</div>
