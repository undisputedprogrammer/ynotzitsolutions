<div class="my-3 lg:mb-6 lg:mt-6 bg-[url('../../public/images/icons/Q.webp')]">
    {{-- <h1 class=" text-xl font-arialbold bold text-center lg:text-3xl">OUR SERVICES</h1> --}}
    {{-- <h2 class=" font-montregular text-xl text-center mt-2 mb-4 lg:mb-9 lg:text-3xl xl:text-4xl">Software Development & Digital Marketing</h2> --}}

    @php
        $img1="/images/icons/Mobile Applications.webp";
        $title1="Mobile Applications";
        $desc1="To generate simple, efficient, and
            reliable ways for maintaining and
            extending your business and for
            more social integration.";
    @endphp

    {{-- mobile carousel --}}
    <div class=" lg:hidden my-3">
        <x-common.service-carousel></x-common.service-carousel>
    </div>

    <div class=" hidden lg:flex lg:my-7">
        <x-common.service-grid></x-common.service-grid>
    </div>


    {{-- <div>
        <h2 class=" font-montregular text-xl text-center mt-6 mb-4 lg:mb-9 lg:text-3xl xl:text-4xl">Multimedia Creatives</h2>

        <div class=" lg:hidden">

        <x-common.multimedia-carousel></x-common.multimedia-carousel>

    </div>

    <div class=" hidden lg:flex">

        <x-common.multimedia-grid></x-common.multimedia-grid>

    </div>


    </div> --}}

</div>
