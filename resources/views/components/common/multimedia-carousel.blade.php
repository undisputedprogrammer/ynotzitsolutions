
<swiper-container id="swiper-2" class="   mx-auto slider-container mt-4 " init="false">
    {{-- <div class=" absolute top-0 w-full bg-white h-[25px] lg:h-[65px] rounded-b-[50%]"> --}}
    <swiper-slide class="">
        <a class=" aspect-square border-black shadow-sm border-2 rounded-full flex flex-col items-center justify-center" href="/services/branding">
            <img class="w-[50%] " src="{{asset('images/icons/Branding-01.webp')}}" alt="">
            <h4 class=" font-montmedium text-sm text-center">Branding</h4>
        </a>

    </swiper-slide>


        <swiper-slide class="  ">
            <a class=" aspect-square border-black shadow-sm border-2 rounded-full flex flex-col items-center justify-center" href="/services/branding">
                <img class="w-[50%] " src="{{asset('images/icons/Logo design-01.webp')}}" alt="">
                <h4 class=" font-montmedium text-sm text-center">Logo Design</h4>
            </a>

        </swiper-slide>


        <swiper-slide class=" ">
            <a class=" aspect-square border-black shadow-sm border-2 rounded-full flex flex-col items-center justify-center" href="/services/branding">
                <img class="w-[50%] " src="{{asset('images/icons/Business card-01.webp')}}" alt="">
                <h4 class=" font-montmedium text-sm text-center">Business card design</h4>
            </a>

        </swiper-slide>

        <swiper-slide class="">
            <a class=" aspect-square border-black shadow-sm border-2 rounded-full flex flex-col items-center justify-center" href="/services/branding">
                <img class="w-[50%] " src="{{asset('images/icons/Stationeries-01.webp')}}" alt="">
                <h4 class=" font-montmedium text-sm text-center">Stationaries</h4>
            </a>
        </swiper-slide>


        <swiper-slide class="">
            <a class=" aspect-square border-black shadow-sm border-2 rounded-full flex flex-col items-center justify-center" href="/services/branding">
                <img class="w-[50%] " src="{{asset('images/icons/Catalogues-01.webp')}}" alt="">
                <h4 class=" font-montmedium text-sm text-center">Catalogues</h4>
            </a>
        </swiper-slide>

        <swiper-slide class="  ">
            <a class=" aspect-square border-black shadow-sm border-2 rounded-full flex flex-col items-center justify-center" href="/services/branding">
                <img class="w-[50%] " src="{{asset('images/icons/Leaflets -01.webp')}}" alt="">
                <h4 class=" font-montmedium text-sm text-center">Leaflets & Brochures</h4>
            </a>
        </swiper-slide>

        <swiper-slide class="  ">
            <a class=" aspect-square border-black shadow-sm border-2 rounded-full flex flex-col items-center justify-center" href="/services/branding">
                <img class="w-[50%] " src="{{asset('images/icons/Promo Videos-01.webp')}}" alt="">
                <h4 class=" font-montmedium text-sm text-center">Promo videos</h4>
            </a>
        </swiper-slide>

        <swiper-slide class=" ">
            <a class=" aspect-square border-black shadow-sm border-2 rounded-full flex flex-col items-center justify-center" href="/services/branding">
                <img class="w-[50%] " src="{{asset('images/icons/Custom-01.webp')}}" alt="">
                <h4 class=" font-montmedium text-sm text-center">Custom solutions</h4>
            </a>
        </swiper-slide>




      </swiper-container>

      <div class=" flex w-[50%] mx-auto justify-center space-x-3 mt-5 ">

        <img class=" lg:w-9" id="prev" src="{{asset('/images/icons/right-chevron.svg')}}" alt="">
      <img class="lg:w-9" id="next" src="{{asset('/images/icons/left-chevron.svg')}}" alt="">

    </div>
    <script>
        const swiperE21 = document.getElementById('swiper-2');


const swiperParams21 = {
    loop:true,
    centeredSlides: true,
    spaceBetween:15,
  slidesPerView: 3,
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
//       autoplay: {
// delay: 3500,
// disableOnInteraction: false
// },
  breakpoints: {
    640: {
      slidesPerView: 5,
    },
    1024: {
      slidesPerView: 6,
      spaceBetween: 40,
      panoramaEffect: {
            rotate: 30,
            depth: 200
        }
    },
  },
  on: {
    init() {

    },
  },
};

const buttonEl4 = document.getElementById('next');

  buttonEl4.addEventListener('click', () => {
    swiperE21.swiper.slideNext();
  });

  const buttonE15 = document.getElementById('prev');

  buttonE15.addEventListener('click', () => {
    swiperE21.swiper.slidePrev();
  });


Object.assign(swiperE21, swiperParams21);


swiperE21.initialize();
    </script>

