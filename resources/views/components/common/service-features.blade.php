@props(['features'])
<div  class=" my-7 lg:my-16">
    <div class=" flex-col flex lg:flex-row w-full lg:w-[96%] xl:w-[72%] mx-auto justify-center">

        <div class="w-[80%] sm:w-[65%] md:w-[55%] mx-auto lg:basis-1/4 flex relative rounded-[2rem]  ">

            <div class=" absolute w-[35%] aspect-square rounded-full bottom-0 left-[50%] -translate-x-[50%] translate-y-[40%] z-30 bg-[#208da4] ">
                <div class=" w-[84%] h-[84%] my-[8%] rounded-full bg-white mx-auto ">

                </div>
            </div>

            <img style="rotate: -37deg" class="w-[24px] absolute top-[46%]  left-0" src="{{asset('images/icons/icons8-triangle-arrow-24.webp')}}" alt="">
            <img style="rotate: 31deg" class="w-[24px] absolute top-[46%]  right-0" src="{{asset('images/icons/icons8-triangle-arrow-24.webp')}}" alt="">
            <div class="absolute bg-[#208da4] rounded-t-[2rem] top-0 left-0 w-full h-[50%] -z-10"></div>
            <div class="absolute bg-white rounded-b-[2rem] bottom-0 left-0 w-full h-[50%] -z-10"></div>
            <div class=" z-20 m-4 bg-white rounded-[2rem] p-4 h-[265px] flex flex-col justify-center shadow-md">
                {{-- <div class=""> --}}
                <h3 class=" font-montregular text-lg mb-3">{{$features[0]['title']}}</h3>
                <p class="  font-montlight text-sm ">{{$features[0]['desc']}}</p>
            {{-- </div> --}}
            </div>
        </div>

        <div class="w-[80%] sm:w-[65%] md:w-[55%] mx-auto lg:basis-1/4 mt-[100px] sm:mt-[130px]  lg:mt-0 flex relative rounded-[2rem]  ">
            <div class=" absolute w-[35%] aspect-square rounded-full top-0 left-[50%] -translate-x-[50%] -translate-y-[40%] z-30 bg-[#046b8e] ">
                <div class=" w-[84%] h-[84%] my-[8%] rounded-full bg-white mx-auto ">

                </div>
            </div>
            <img style="rotate: -30deg" class="w-[24px] absolute top-[46%] -rotate-[40] left-0" src="{{asset('images/icons/icons8-triangle-arrow-24.webp')}}" alt="">
            <img style="rotate: 26deg" class="w-[24px] absolute top-[46%] -rotate-[40] right-0" src="{{asset('images/icons/icons8-triangle-arrow-24.webp')}}" alt="">
            <div class="absolute bg-[#046b8e] rounded-b-[2rem] bottom-0 left-0 w-full h-[50%] -z-10"></div>
            <div class="absolute bg-white rounded-t-[2rem] top-0 left-0 w-full h-[50%] -z-10"></div>
            <div class="m-4 bg-white rounded-[2rem] p-4 h-[265px] flex flex-col justify-center shadow-md">
                {{-- <div class=""> --}}
                <h3 class=" font-montregular text-lg mb-3">{{$features[1]['title']}}</h3>
                <p class="  font-montlight text-sm ">{{$features[1]['desc']}}</p>
            {{-- </div> --}}
            </div>
        </div>

        <div class=" w-[80%] sm:w-[65%] md:w-[55%] mx-auto lg:basis-1/4 mt-[10px] lg:mt-0 flex relative rounded-[2rem]  ">
            <div class=" absolute w-[35%] aspect-square rounded-full bottom-0 left-[50%] -translate-x-[50%] translate-y-[40%] z-30 bg-[#208da4] ">
                <div class=" w-[84%] h-[84%] my-[8%] rounded-full bg-white mx-auto ">

                </div>
            </div>
            <img style="rotate: -35deg" class="w-[24px] absolute top-[46%] -rotate-[40] left-0" src="{{asset('images/icons/icons8-triangle-arrow-24.webp')}}" alt="">
            <img style="rotate: 31deg" class="w-[24px] absolute top-[46%] -rotate-[40] right-0" src="{{asset('images/icons/icons8-triangle-arrow-24.webp')}}" alt="">
            <div class="absolute bg-[#208da4] rounded-t-[2rem] top-0 left-0 w-full h-[50%] -z-10"></div>
            <div class="absolute bg-white rounded-b-[2rem] bottom-0 left-0 w-full h-[50%] -z-10"></div>
            <div class="m-4 bg-white rounded-[2rem] p-4 h-[265px] flex flex-col justify-center shadow-md">
                {{-- <div class=""> --}}
                <h3 class=" font-montregular text-lg mb-3">{{$features[2]['title']}}</h3>
                <p class="  font-montlight text-sm ">{{$features[2]['desc']}}</p>
            {{-- </div> --}}
            </div>
        </div>

        <div class=" w-[80%] sm:w-[65%] md:w-[55%] mx-auto lg:basis-1/4 mt-[100px] sm:mt-[130px] lg:mt-0 flex relative rounded-[2rem]  ">
            <div class=" absolute w-[35%] aspect-square rounded-full top-0 left-[50%] -translate-x-[50%] -translate-y-[40%] z-30 bg-[#046b8e] ">
                <div class=" w-[84%] h-[84%] my-[8%] rounded-full bg-white mx-auto">

                </div>
            </div>
            <img style="rotate: -30deg" class="w-[24px] absolute top-[46%] -rotate-[40] left-0" src="{{asset('images/icons/icons8-triangle-arrow-24.webp')}}" alt="">
            <img style="rotate: 26deg" class="w-[24px] absolute top-[46%] -rotate-[40] right-0" src="{{asset('images/icons/icons8-triangle-arrow-24.webp')}}" alt="">
            <div class="absolute bg-[#046b8e] rounded-b-[2rem] bottom-0 left-0 w-full h-[50%] -z-10"></div>
            <div class="absolute bg-white rounded-t-[2rem] top-0 left-0 w-full h-[50%] -z-10"></div>
            <div class="m-4 bg-white rounded-[2rem] p-4 h-[265px] flex flex-col justify-center shadow-md">
                {{-- <div class=""> --}}
                <h3 class=" font-montregular text-lg mb-3">{{$features[3]['title']}}</h3>
                <p class="  font-montlight text-sm ">{{$features[3]['desc']}}</p>
            {{-- </div> --}}
            </div>
        </div>

    </div>
    </div>
