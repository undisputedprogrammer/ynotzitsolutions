<div class=" w-[94%] mx-auto mt-7 lg:mt-16">
    <h2 class=" font-medium font-montsemibold text-center text-lg lg:text-4xl lg:mb-14">ARE YOU LOOKING FOR ANY OF THESE ?</h2>

    @php
        $img1="/images/icons/A website or blog.webp";
        $title1="Web development";
        $description1="Accomplishing the finest websites that are fulfilled by proficient and equipped expertise to fame your qualities.";
        $url="/services";
        $img2="/images/icons/E-commerce Website.webp";
        $title2="E-Commerce";
        $description2="To enhance your commercial dealing over the internet and also to build a connection with more international dealers.";
        $img3="/images/icons/Mobile App to promote.webp";
        $title3="Mobile applications";
        $description3="To implement more business campaigns and link with more clients for the crossing of target.";
        $img4="/images/icons/Manage accounts.webp";
        $title4="Social media management";
        $description4="To sustain your brand's social presence along with the maintenance of a relationship with the customer.";
        $img5="/images/icons/Employee & payroll.webp";
        $title5="Employee payroll management";
        $description5="To improve productivity and encouragement to implement a good employee and payroll management system";
        $img6="/images/icons/Production scheduling.webp";
        $title6="Production scheduling and management";
        $description6="To analyze and understand the whole process in a business and keep your operations under the budgets and customer friendly";
        $img7="/images/icons/Courses, Batches,.webp";
        $title7="Course, batches and students ";
        $description7="Manage academic data in a well-organized manner to track both school and college student's info like courses, attendance, extracurricular activities, etc.";
        $img8="/images/icons/A custom software to.webp";
        $title8="Custom software";
        $description8="The process of developing, designing, and working on a website connecting with all other functions and services provided by you.";
    @endphp

    <div class=" flex flex-wrap mt-4 justify-evenly">
        <x-common.query-card :img="$img1" :title="$title1" :description="$description1" :url="$url"></x-common.query-card>

        <x-common.query-card :img="$img2" :title="$title2" :description="$description2" :url="$url"></x-common.query-card>

        <x-common.query-card :img="$img3" :title="$title3" :description="$description3" :url="$url"></x-common.query-card>

        <x-common.query-card :img="$img4" :title="$title4" :description="$description4" :url="$url"></x-common.query-card>

        <x-common.query-card :img="$img5" :title="$title5" :description="$description5" :url="$url"></x-common.query-card>

        <x-common.query-card :img="$img6" :title="$title6" :description="$description6" :url="$url"></x-common.query-card>

        <x-common.query-card :img="$img7" :title="$title7" :description="$description7" :url="$url"></x-common.query-card>

        <x-common.query-card :img="$img8" :title="$title8" :description="$description8" :url="$url"></x-common.query-card>

    </div>
</div>
