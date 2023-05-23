@props(['bg'])
<div class=" w-[94%] {{$bg}}  mx-auto py-5">
    <h2 class=" font-myriadpro text-xl lg:text-3xl text-center">Recent Blogs</h2>
    <div class="lg:flex lg:justify-evenly">
        @php
            $blog1 = array('img' => "/images/blog/HOW CAN REGISTER STARTUP-02.webp", 'date'=>"24 May 2023", 'title'=>"HOW CAN YOU REGISTER A START-UP COMPANY ?", 'desc'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptatibus maiores explicabo nam quia eligendi minus iure reiciendis dignissimos sapiente!");
        @endphp
        <x-blog-card :blog="$blog1"></x-blog-card>
        <x-blog-card :blog="$blog1"></x-blog-card>
        <x-blog-card :blog="$blog1"></x-blog-card>
    </div>
    <div class="flex justify-center">
        <a class=" font-arialnarrow border-2 border-gray-400 text-gray-600 rounded-lg px-6 py-1 text-sm md:mt-5" href="/blogs">VIEW MORE</a>
    </div>
</div>
