@props(['blog'])
<div class=" w-[85%] md:w-[28%] mx-auto my-4 bg-gray-100 pb-3 flex flex-col">
<a href="/blog/1">
    <img src="{{$blog['img']}}" alt="">
    <p class=" text-gray-400 text-xs ml-5">{{$blog['date']}}</p>
    <h2 class=" font-arialbold text-base w-[96%] mx-auto text-center mt-3 mb-2">{{$blog['title']}}</h2>
    <p class=" font-myriadpro text-sm line-clamp-3 text-center  w-[95%] mx-auto pb-3">{{$blog['desc']}}</p>

</a>

</div>
