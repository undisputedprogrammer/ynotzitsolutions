<div class=" w-[90%] md:w-[80%] xl:w-[55%] mx-auto my-12 md:my-20">
    <h3 class=" font-montsemibold text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-blue mb-4">Get in touch with us</h3>
    <form class=" flex flex-col " action="">
        @csrf

        <input id="name" class="  w-full border-2 border-stone-400 font-montregular pl-5 lg:py-[16px] mt-3 lg:mt-6" type="text" placeholder="Name" required>

        <div class=" xl:flex justify-between">
        <input id="email" class=" xl:basis-[49%] mt-3 lg:mt-6 w-full border-2 border-stone-400 font-montregular pl-5 lg:py-[16px]" type="email" placeholder="Email" required>

        <div class="relative mt-3 lg:mt-6 xl:basis-[49%]">
            <div class="absolute inset-y-0 left-0 flex items-center pl-6 pointer-events-none font-satoshimedium">
              <img class=" mr-1" src="{{asset('images/India.png')}}" alt=""> +91
            </div>
            <input id="phone" type="tel" class=" border-2 border-stone-400  font-montregular text-[16px] h-[44px] block w-full pl-24 lg:py-[16px] lg:h-[59px]" placeholder="Phone">
          </div>

        </div>




        <textarea id="message" class="  w-full border-2 border-stone-400 font-montregular pl-5 lg:py-[16px] mt-3 lg:mt-6" type="text" placeholder="Requirement" required></textarea>


          <button id="submit" class=" border-2 border-[#1976bc]  hover:bg-[#1976bc] hover:text-white  text-blue font-montsemibold w-[150px] self-center py-2 mt-3 lg:mt-8  lg:py-[13px] lg:text-lg" type="submit" name="submit">Send Enquiry</button>
    </form>
</div>
