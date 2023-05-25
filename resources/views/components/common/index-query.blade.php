<div class=" w-[90%] xl:w-[92%] mx-auto mt-7 lg:mt-16">
    <h2 class=" uppercase font-medium font-montsemibold text-center text-lg lg:text-4xl lg:mb-14">We help you build your business</h2>

    @php
        $img1="/images/icons/A website or blog.webp";
        $title1="Get started";
        $description1="Get the digital props for your start-up. Build a brand identity.";
        $service1="Websites, Brochures, Printable stationaries, Online brand building";
        $url="/services";
        $img2="/images/icons/E-commerce Website.webp";
        $title2="Accelerate Growth";
        $description2="Increase brand awareness, sales and customer satisfaction.";
        $service2="Social Media Campaigns, Online Advertisements, Re-Targeting, E-commerce";
        $img3="/images/icons/Mobile App to promote.webp";
        $title3="Better efficiency & Control";
        $description3="Software solutions to manage various aspects of your business";
        $service3=" Products, Inventory, Sales, Accounting, Customer Relations Management, Production Management, Custom Software Solutions, Mobile Apps";
        $img4="/images/icons/Manage accounts.webp";
        $title4="Creative Ideas";
        $description4="Plan something extra ordinary for your business.";
        $service4="Amazing Promo Graphics & Videos, Posters, Brochures, Promo Videos, Unique Social Media Campaigns, Striking Online Ads";


    @endphp

    <div class=" flex flex-wrap mt-4 justify-evenly">
        <x-common.query-card :img="$img1" :title="$title1" :description="$description1" :url="$url" :services="$service1"></x-common.query-card>

        <x-common.query-card :img="$img2" :title="$title2" :description="$description2" :url="$url" :services="$service2"></x-common.query-card>

        <x-common.query-card :img="$img3" :title="$title3" :description="$description3" :url="$url" :services="$service3"></x-common.query-card>

        <x-common.query-card :img="$img4" :title="$title4" :description="$description4" :url="$url" :services="$service4"></x-common.query-card>



    </div>
</div>
