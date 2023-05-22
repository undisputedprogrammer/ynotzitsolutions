@props(['ishome','isabout','isservices','iscontact', 'isblog'])
<nav class=" h-fit pt-10 hidden lg:flex items-center justify-between w-full  box-shadow">
<img data-aos="zoom-out-right"  class="ml-[3.5rem] h-[75px] mb-3" src="{{asset('images/logo.png')}}" alt="">
<div class="flex h-fit mt-3 w-[79%] border-t-2 border-black items-end pt-[18px] relative mr-7 pl-28 pr-10 justify-between font-arialbold">
    <div  class=" absolute h-1 w-14 bg-black top-0 left-0"></div>
    <a data-aos="fade-up"
    data-aos-anchor-placement="center-bottom" {{ $attributes->class([ 'text-blue' => $ishome]) }} class="  " href="/">Home</a>
    <a data-aos="fade-up"
    data-aos-anchor-placement="center-bottom" {{ $attributes->class([ 'text-blue' => $isabout]) }} class="" href="/about">About Us</a>
    <a data-aos="fade-up"
    data-aos-anchor-placement="center-bottom" {{ $attributes->class([ 'text-blue' => $isservices]) }} class=" " href="/services">Our Services</a>
    <a data-aos="fade-up"
    data-aos-anchor-placement="center-bottom" {{ $attributes->class([ 'text-blue' => $iscontact]) }} class=" " href="/contact">Contact Us</a>
    <a data-aos="fade-up"
    data-aos-anchor-placement="center-bottom" {{ $attributes->class([ 'text-blue' => $isblog]) }} class=" " href="/blogs">Blog</a>
</div>

</nav>
