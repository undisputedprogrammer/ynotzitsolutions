<div class="  mx-auto lg:flex mt-3">
    <div>
        <div class="flex items-center space-x-4 w-[90%] mx-auto">
            <h1 class=" basis-1/4 text-2xl lg:text-4xl xl:text-5xl text-[#1976bc] text-center">Blogs</h1>
            <div class="relative basis-3/4">
                <div class="absolute inset-y-0 right-0 flex items-center pl-6 pointer-events-none font-satoshimedium">
                  <img class=" mr-1 h-8 " src="{{asset('images/blog/SEARCH-02.webp')}}" alt="">
                </div>
                <input id="phone" type="tel" class=" w-full border-2 border-stone-400 font-montregular " placeholder="Search">
              </div>
        </div>

        <div class="w-full mt-5 mb-16 lg:mt-9 lg:mb-32 xl:mt-12 ">
            {{-- <h2 class=" font-montsemibold text-lg xl:text-3xl mb-3 xl:mb-6 w-[90%] mx-auto">Read our latest blogs</h2> --}}
            @php
            $blog1 = array('img' => "/images/blog/HOW CAN REGISTER STARTUP-02.webp", 'date'=>"24 May 2023", 'title'=>"HOW CAN YOU REGISTER A START-UP COMPANY ?", 'desc'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptatibus maiores explicabo nam quia eligendi minus iure reiciendis dignissimos sapiente!");
        @endphp
        <div class=" md:flex md:flex-wrap">
           <x-blog-card :blog="$blog1"></x-blog-card>
           <x-blog-card :blog="$blog1"></x-blog-card>
           <x-blog-card :blog="$blog1"></x-blog-card>
           <x-blog-card :blog="$blog1"></x-blog-card>
           <x-blog-card :blog="$blog1"></x-blog-card>
           <x-blog-card :blog="$blog1"></x-blog-card>
        </div>
        </div>
    </div>
</div>
