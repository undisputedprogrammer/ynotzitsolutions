@props(['blog'])
<div class=" w-[85%] md:w-[28%] mx-auto my-4 bg-gray-100 pb-3 flex flex-col">
<a href="/blog/{{$blog['id']}}">
    <img class="h-[280px] w-full" src="/storage/images/{{$blog->image}}" alt="">
    <p class=" text-gray-400 text-xs ml-5">{{$blog['date']}}</p>
    <h2 class=" font-arialbold text-base lg:text-lg w-[96%] mx-auto  mt-3 mb-2">{{$blog['title']}}</h2>
    <p class=" font-myriadpro text-sm lg:text-base line-clamp-3   w-[95%] mx-auto ">{{$blog['description']}}</p>

</a>

</div>
