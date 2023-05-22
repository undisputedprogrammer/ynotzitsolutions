<div class="  mx-auto  mt-3 w-[90%] justify-between border-b-2 border-gray-400">
    <div class=" w-[74%] flex items-center space-x-4  ">
        <h1 class=" basis-1/4 text-2xl lg:text-4xl xl:text-5xl text-[#1976bc] text-center">Blogs</h1>
        <div class="relative basis-3/4">
            <div class="absolute inset-y-0 right-0 flex items-center pl-6 pointer-events-none font-satoshimedium">
              <img class=" mr-1 h-8 " src="{{asset('images/about/SEARCH-02.png')}}" alt="">
            </div>
            <input id="phone" type="tel" class=" w-full border-2 border-stone-400 font-montregular " placeholder="Search">
          </div>
    </div>

    <div class=" lg:flex mt-5 mb-16 lg:mt-9 lg:mb-16 xl:mt-12 justify-between">
    <div class=" basis-[74%]">


        <div class="w-full mb-9 lg:mb-0  ">
            <img class="" src="{{asset('images/about/blog-02.png')}}" alt="">
            <p class=" text-[10px] lg:text-xs font-montlight text-gray-400 mt-1">May 18 2023 | By YNOTZ IT Solutions</p>
            <h2 class=" font-montsemibold text-lg my-4 lg:text-xl xl:text-2xl">Traditional Marketing vs Digital Marketing - Which one is better and why.</h2>
            <p class=" font-montlight text-sm lg:text-lg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                veniam, quis nostrud exerci Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                Ut wisi enim ad minim veniam, quis nostrud exerciLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci</p>
        </div>
    </div>
    <div class=" basis-[25%]">
        <h1 class=" text-2xl font-montsemibold">Popular posts</h1>

        <div class=" flex w-full space-x-2 py-4 my-3 border-b-2">
            <img class="w-[90%] aspect-[2/1]" src="{{asset('images/blog/HOW CAN REGISTER STARTUP-02.jpg')}}" alt="">
            <h3 class=" font-montregular text-base">Scope of ecommerce: The future of online business in India</h3>
        </div>
        <div class=" flex w-full space-x-2 py-4 border-b-2">
            <img class="w-[90%] aspect-[2/1]" src="{{asset('images/blog/blog 2-02.png')}}" alt="">
            <h3 class=" font-montregular text-base">Scope of ecommerce: The future of online business in India</h3>
        </div>
        <div class=" flex w-full space-x-2 py-4 my-3 border-b-2">
            <img class="w-[90%] aspect-[2/1]" src="{{asset('images/blog/HOW CAN REGISTER STARTUP-02.jpg')}}" alt="">
            <h3 class=" font-montregular text-base">Scope of ecommerce: The future of online business in India</h3>
        </div>
        <div class=" flex w-full space-x-2 py-4 border-b-2">
            <img class="w-[90%] aspect-[2/1]" src="{{asset('images/blog/blog 2-02.png')}}" alt="">
            <h3 class=" font-montregular text-base">Scope of ecommerce: The future of online business in India</h3>
        </div>

        <h1 class=" text-2xl font-montsemibold mt-7 lg:mt-10">Categories</h1>
        @php
            $categories=['cms','digital marketing','e-commerce','mobile-app','online advertising','seo','ui','uncategorized','ux','web developmemt','web and craft','quality assurance'];
        @endphp
        <div class=" my-4 flex flex-wrap justify-start">

            @foreach ($categories as $category)
                <a class=" font-montlight uppercase border border-black text-gray-600 py-1 px-2 rounded-md my-1 mx-1" href="#">{{$category}}</a>
            @endforeach

        </div>
    </div>
</div>
</div>
