
<swiper-container id="swiper-2" class="   mx-auto slider-container mt-4 " init="false">
    {{-- <div class=" absolute top-0 w-full bg-white h-[25px] lg:h-[65px] rounded-b-[50%]"> --}}
    <swiper-slide class="">
        <a href="/services/branding">
            <img src="{{asset('images/icons/Branding.webp')}}" alt="">
        </a>

    </swiper-slide>


        <swiper-slide class="  ">
        <a href="/services/logoDesign">
            <img src="{{asset('images/icons/logo design.webp')}}" alt="">
        </a>
        </swiper-slide>


        <swiper-slide class=" ">
            <a href="/services/buisinesCardDesign">
                <img src="{{asset('images/icons/Business card design.webp')}}" alt="">
            </a>

        </swiper-slide>

        <swiper-slide class="">
            <a href="/services/stationaries">
                <img src="{{asset('images/icons/Stationeries.webp')}}" alt="">
            </a>
        </swiper-slide>


        <swiper-slide class="">
            <a href="/services/catalogues">
                <img src="{{asset('images/icons/catalogues.webp')}}" alt="">
            </a>
        </swiper-slide>

        <swiper-slide class="  ">
            <a href="/services/leaflets&brochures">
                <img src="{{asset('images/icons/leaflets and brochures.webp')}}" alt="">
            </a>
        </swiper-slide>

        <swiper-slide class="  ">
            <a href="/services/promoVideos">
            <img src="{{asset('images/icons/promo video.webp')}}" alt="">
        </a>
        </swiper-slide>

        <swiper-slide class=" ">
            <a href="/services/customRequirements">
                <img src="{{asset('images/icons/custom reruirements.webp')}}" alt="">
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
    centeredSlides: false,
    spaceBetween:15,
  slidesPerView: 4,
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

