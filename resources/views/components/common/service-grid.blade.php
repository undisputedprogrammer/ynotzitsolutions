@php

    $service1 = ['img' => '/images/icons/Web Development.webp', 'title' => 'Website Development', 'desc' => 'Impressive and functonal websites for your business | SEO Friendly | Responsive Design | Easy Page Loads'];

    $service2 = ['img' => '/images/icons/Mobile Applications.webp', 'title' => 'Software Solutions & Mobile Apps', 'desc' => 'UI Design | Application Development | CMS | E-commerce | Hosting & Domain Registration | Custom Softwares'];

    $service3 = ['img' => '/images/icons/Digital Marketing.webp', 'title' => 'Digital Marketing', 'desc' => 'Google Ads | Facebook Ads | Youtube Ads | Linked In Ads | Other Paid Promotions | Social Media Campaigns'];

    $service4 = ['img' => '/images/icons/Search Engine Optimisation.webp', 'title' => 'Search Engine Optimisation (SEO)', 'desc' => 'Local SEO | E-Commerce SEO | Link Building | Social Media Optimisation | Keyword Tracking | Content Research.'];

    $service5 = ['img' => '/images/icons/Online Advertisements.webp', 'title' => 'Social Media Management', 'desc' => 'Build Followers | Reach & Brand Building | Promotional Campaigns | Regular Posts & Comments.'];

    $service6 = [
        'img' => '/images/icons/Social Media Management.webp',
        'title' => "Graphics / Videos / Photos
",
        'desc' => 'Photography | Videography | Explainer Videos | Whiteboard Animations | Graphic Design | Branding Materials Design.',
    ];

@endphp
<div class="flex flex-wrap w-[90%] mx-auto justify-evenly">



    <div data-aos="fade-up-right" data-aos-duration="600" class=" w-[30%] xl:w-[27%]">
        <a href="/services/webDevelopment">
            <x-common.service-card :service="$service1"></x-common.service-card>
        </a>
    </div>
    <div data-aos="fade-up-right" data-aos-duration="600" class=" w-[30%] xl:w-[27%]">
        <a href="/services/softwaresolutions">
            <x-common.service-card :service="$service2"></x-common.service-card>
        </a>
    </div>
    <div data-aos="fade-up-right" data-aos-duration="600" class=" w-[30%] xl:w-[27%]">
        <a href="/services/digitalMarketing">
            <x-common.service-card :service="$service3"></x-common.service-card>
        </a>
    </div>
    <div data-aos="fade-up-left" data-aos-duration="600" class=" w-[30%] xl:w-[27%]">
        <a href="/services/SEO">
            <x-common.service-card :service="$service4"></x-common.service-card>
        </a>
    </div>



    <div data-aos="fade-up-left" data-aos-duration="600" class=" w-[30%] xl:w-[27%]">
        <a href="/services/socialMediaManagement">
            <x-common.service-card :service="$service5"></x-common.service-card>
        </a>
    </div>
    <div data-aos="fade-up-left" data-aos-duration="600" class=" w-[30%] xl:w-[27%]">
        <a href="/services/multimedia">
            <x-common.service-card :service="$service6"></x-common.service-card>
        </a>
    </div>




</div>
