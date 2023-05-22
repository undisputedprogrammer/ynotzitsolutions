@php

$service1 = array('img' =>"/images/icons/Web Development.webp" , 'title'=>"Web Development", 'desc'=>"Accomplishing the finest websites that are fulfilled by proficient and equipped expertise to fame your qualities." );

$service2 = array('img' =>"/images/icons/Mobile Applications.webp" ,'title'=>"Mobile Applications", 'desc'=>"To generate simple, efficient, and reliable ways for maintaining and extending your business and for more social integration." );

$service3 = array('img' =>"/images/icons/Digital Marketing.webp" ,'title'=>"Digital Marketing", 'desc'=>"we serve to expand your brand and identity digitally to connect with new individuals and meet their desires" );

$service4 = array('img' =>"/images/icons/Search Engine Optimisation.webp" , 'title'=>"Search Engine Optimisation", 'desc'=>"To set your ranking at the top level on the search engine results page through effective ways." );

$service5 = array('img' => "/images/icons/Online Advertisements.webp", 'title'=>"Online Advertisement", 'desc'=>"Advertise and market your products through the internet to access the desired audience." );

$service6 = array('img' => "/images/icons/Social Media Management.webp",'title'=>"Social Media Management", 'desc'=>"To sustain your brand's social presence along with the maintenance of a relationship with the customer.." );

@endphp

<div class=" my-7 flex flex-wrap w-[90%] xl:w-[80%] mx-auto justify-between">

    <div data-aos="fade-up-right" class=" w-[28%]">
        <a href="/services/webDevelopment">
            <x-common.service-card :service="$service1"></x-common.service-card>
        </a>
    </div>
    <div data-aos="fade-up-right" class=" w-[28%]">
        <a href="/services/mobileApp">
            <x-common.service-card :service="$service2"></x-common.service-card>
        </a>
    </div>
    <div data-aos="fade-up-right" class=" w-[28%]">
        <a href="/services/digitalMarketing">
            <x-common.service-card :service="$service3"></x-common.service-card>
        </a>
    </div>
    <div data-aos="fade-up-left" class=" w-[28%]">
        <a href="/services/SEO">
            <x-common.service-card :service="$service4"></x-common.service-card>
        </a>
    </div>
    <div data-aos="fade-up-left" class=" w-[28%]">
        <a href="/services/onlineAdvertisements">
            <x-common.service-card :service="$service5"></x-common.service-card>
        </a>
    </div>
    <div data-aos="fade-up-left" class=" w-[28%]">
        <a href="/services/socialMediaManagement">
            <x-common.service-card :service="$service6"></x-common.service-card>
        </a>
    </div>

</div>
