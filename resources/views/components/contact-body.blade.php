<div class=" w-[90%] md:w-[80%] xl:w-[68%] mx-auto my-12 md:my-20">
    {{-- <h3 class=" font-montsemibold text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-blue mb-4">Get in touch with us</h3> --}}
    <form id="form" class="flex flex-col " onsubmit="formSubmit();return false" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex-col flex lg:flex-row space-y-6 lg:space-y-0 justify-between border-2 border-gray-500 border-dashed p-4 rounded-2xl">
        <div class=" basis-1/2">
        <input id="name" class="  w-full border-2 border-stone-400 font-montregular pl-5 lg:py-[16px] mt-3 lg:mt-6" type="text" placeholder="Name" required>

        <div class=" xl:flex justify-between">
        <input id="email" class=" xl:basis-[49%] mt-3 lg:mt-6 w-full border-2 border-stone-400 font-montregular pl-5 lg:py-[16px]" type="email" placeholder="Email" required>

        <div class="relative mt-3 lg:mt-6 xl:basis-[49%]">
            <div class="absolute inset-y-0 left-0 flex items-center pl-6 pointer-events-none font-satoshimedium">
              <img class=" mr-1" src="{{asset('images/India.png')}}" alt=""> +91
            </div>
            <input id="phone" type="tel" class=" border-2 border-stone-400  font-montregular text-[16px] h-[44px] block w-full pl-24 lg:py-[16px] lg:h-[59px]" placeholder="Phone">
          </div>

        </div>




        <textarea id="message" class="  w-full border-2 border-stone-400 font-montregular pl-5 lg:py-[16px] mt-3 lg:mt-6" type="text" placeholder="Requirement" required></textarea>



        </div>

    <div class="">
        <h3 class="font-regular text-xl">Select the services required</h3>
    <div class="flex justify-evenly space-x-3 lg:space-x-10 mt-1">
        @php
            $services1=['Web Development','Mobile Applications','Digital Marketing','Search Engine Optimisation','Online Advertisements','Social Media Management','Branding'];

            $services2=['Logo Design','Business Card Design','Stationaries','Catalogues','Leaflets and Brochures','Promo Videos','Custom Requirements'];
            $no=0;
        @endphp
        <div class="flex flex-col">

            @foreach ($services1 as $service)
                @php
                    $no++;
                @endphp
                <div class=" my-3">
                    <input type="checkbox" id="cb{{$no}}" name="check1" value="{{$service}}">
                    <label class=" text-sm lg:text-base" for="cb{{$no}}">{{$service}}</label>
                </div>

            @endforeach

        </div>

        <div class="flex flex-col">

            @foreach ($services2 as $service)
            @php
                $no++;
            @endphp
                <div class=" my-3">
                    <input type="checkbox" id="cb{{$no}}" name="check1" value="{{$service}}">
                    <label class="text-sm lg:text-base" for="cb{{$no}}">{{$service}}</label>
                </div>

            @endforeach

        </div>

    </div>
    </div>
</div>
<button id="submit" class=" border-2 border-[#1976bc]  hover:bg-[#1976bc] hover:text-white  text-blue font-montsemibold w-[150px] self-center py-2 mt-3 lg:mt-8  lg:py-[13px] lg:text-lg" type="submit" name="submit">Send Enquiry</button>
</form>
</div>
