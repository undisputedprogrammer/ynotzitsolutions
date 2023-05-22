@props(['data','lists','listhead','img'])
<div class=" w-[88%] mx-auto mt-2 md:mt-3 xl:mt-10">
    <h1 class=" text-center font-montsemibold text-xl md:text-3xl xl:text-5xl ">{{$data['title']}}</h1>
    <p class=" font-montlight  text-[10px] md:text-xs xl:text-lg mt-3 xl:mt-9">{{$data['desc']}}
        </p>

        <div class=" md:flex md:mt-4 md:items-center xl:w-[88%] xl:mx-auto">
        <img class="w-full mt-3 xl:basis-[50%]" src="{{$img}}" alt="">

        <div class=" md:order-first md:basis-[60%]  ">
            <h3 class=" text-lg font-montsemibold xl:text-3xl xl:mb-5">{{$listhead}}</h3>
            <ul class=" list-disc  mx-auto text-sm xl:text-base font-montlight ">
                @foreach ($lists as $list)
                    <li>{{$list}}</li>
                @endforeach


            </ul>
        </div>
    </div>


</div>
