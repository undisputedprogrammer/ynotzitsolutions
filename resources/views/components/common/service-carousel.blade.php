<div class=" my-7 relative">
    {{-- <div class=" absolute top-0 w-full bg-white h-[20px] lg:h-[65px] rounded-b-[50%] z-50"></div>
    <div class=" absolute bottom-0 w-full bg-white h-[20px] lg:h-[65px] rounded-t-[50%] z-50"></div> --}}

    @php

$service1 = array('img' =>"/images/icons/Web Development.webp" , 'title'=>"Website Development", 'desc'=>"Impressive and functonal websites for your business | SEO Friendly | Responsive Design | Easy Page Loads" );

$service2 = array('img' =>"/images/icons/Mobile Applications.webp" ,'title'=>"Software Solutions & Mobile Apps", 'desc'=>"UI Design | Application Development | CMS | E-commerce | Hosting & Domain Registration | Custom Softwares" );

$service3 = array('img' =>"/images/icons/Digital Marketing.webp" ,'title'=>"Digital Marketing", 'desc'=>"Google Ads | Facebook Ads | Youtube Ads | Linked In Ads | Other Paid Promotions | Social Media Campaigns" );

$service4 = array('img' =>"/images/icons/Search Engine Optimisation.webp" , 'title'=>"Search Engine Optimisation (SEO)", 'desc'=>"Local SEO | E-Commerce SEO | Link Building | Social Media Optimisation | Keyword Tracking | Content Research." );

$service5 = array('img' => "/images/icons/Online Advertisements.webp", 'title'=>"Social Media Management", 'desc'=>"Build Followers | Reach & Brand Building | Promotional Campaigns | Regular Posts & Comments." );

$service6 = array('img' => "/images/icons/Social Media Management.webp",'title'=>"Graphics / Videos / Photos
", 'desc'=>"Photography | Videography | Explainer Videos | Whiteboard Animations | Graphic Design | Branding Materials Design." );

    @endphp





    <swiper-container id="container" class="   mx-auto slider-container " init="false">
        {{-- <div class=" absolute top-0 w-full bg-white h-[25px] lg:h-[65px] rounded-b-[50%]"> --}}
        <swiper-slide class="">
            <a href="/services/webDevelopment">
            <x-common.service-card :service="$service1"></x-common.service-card>
            </a>
        </swiper-slide>


            <swiper-slide class="  ">
                <a href="/services/softwaresolutions">
                <x-common.service-card :service="$service2"></x-common.service-card>
            </a>

            </swiper-slide>


            <swiper-slide class=" ">
                <a href="/services/digitalMarketing">
                <x-common.service-card :service="$service3"></x-common.service-card>
                </a>

            </swiper-slide>

            <swiper-slide class="">
            <a href="/services/SEO">
                <x-common.service-card :service="$service4"></x-common.service-card>
            </a>


            </swiper-slide>


            <swiper-slide class="">
                <a href="/services/socialMediaManagement">
                <x-common.service-card :service="$service5"></x-common.service-card>
            </a>

            </swiper-slide>

            <swiper-slide class="  ">
                <a href="/services/multimedia">
                <x-common.service-card :service="$service6"></x-common.service-card>
                </a>

            </swiper-slide>






          </swiper-container>

          <div class=" flex w-[50%] mx-auto justify-center space-x-3 mt-0 ">

            <img class=" lg:w-9" id="prev-2" src="{{asset('/images/icons/right-chevron.svg')}}" alt="">
          <img class="lg:w-9" id="next-2" src="{{asset('/images/icons/left-chevron.svg')}}" alt="">

        </div>


    </div>
    <script>
        const swiperE20 = document.getElementById('container');


const swiperParams20 = {
    loop:true,
    centeredSlides: true,
    spaceBetween:15,
  slidesPerView: 2,
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
delay: 3500,
disableOnInteraction: false
},
  breakpoints: {
    640: {
      slidesPerView: 3,
    },

    778: {
      slidesPerView: 4,
    },
    1024: {
      slidesPerView: 4,
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

const buttonEl3 = document.getElementById('next-2');

  buttonEl3.addEventListener('click', () => {
    swiperE20.swiper.slideNext();
  });

  const buttonE4 = document.getElementById('prev-2');

  buttonE4.addEventListener('click', () => {
    swiperE20.swiper.slidePrev();
  });


Object.assign(swiperE20, swiperParams20);


swiperE20.initialize();
    </script>
