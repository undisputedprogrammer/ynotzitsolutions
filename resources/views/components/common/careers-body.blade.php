<div class=" w-[94%] mx-auto mb-5 lg:mb-14">
<h2 class=" font-montsemibold text-lg md:text-2xl xl:text-4xl  mt-3 xl:mt-9 md:text-center">Developer Mentorship Program</h2>
{{-- <h2 class=" font-montsemibold text-lg md:text-2xl xl:text-4xl  lg:mt-2 md:text-center">With Assured Placement</h2> --}}
<p class=" font-montmedium text-sm md:text-base xl:text-lg mt-2 text-center">6 Months Training + 6 Months Internship With Stipend</p>
<p class=" font-montmedium text-sm md:text-base xl:text-lg mt-2 text-center">Start earning in 6 months</p>

<p class=" font-montmedium text-sm md:text-base xl:text-lg mt-1 text-center">Minimun Qualification : Plus-two/Diploma</p>


<h2 class=" font-montsemibold text-lg md:text-2xl xl:text-3xl  mt-3 lg:mt-7 xl:mt-9 mb-2">What do you get ?</h2>
<ul class=" list-disc w-[94%] mx-auto md:text-base xl:text-lg font-montmedium ">
    <li>Comprehensive training in web technologies:
        <ul class=" list-disc w-[84%] lg:w-[96%] mx-auto list-inside">
            <li>PHP</li>
            <li>MySQL</li>
            <li>PostgreSQL</li>
            <li>Javascript</li>
            <li>HTML</li>
            <li>CSS</li>

        </ul>
    </li>
    <li>Various PHP, Javascript, CSS Frameworks:
        <ul class=" list-disc w-[96%] mx-auto list-inside">
            <li>Laravel</li>
            <li>Node JS</li>
            <li>React JS</li>
            <li>JQuery</li>
            <li>Tailwind CSS</li>
            <li>Alpine JS</li>
            <li>Bootstrap etc</li>
        </ul>
    </li>
    <li>Version control, deployment with GIT</li>
    <li class=" font-montsemibold">Work on live projects</li>
    {{-- <li class=" font-montsemibold">Profile Building</li>
    <li class=" font-montsemibold">Interview Preparation</li> --}}
    <li class=" font-montsemibold">Assured Placement</li>

</ul>



<div class=" my-5 w-[98%] overflow-scroll hide-scroll">
    {{-- <div class="w-fit mx-auto border-2 border-black p-4 ">
        <div class=" flex space-x-3 "><h3 class=" font-montsemibold md:text-base lg:text-lg ">Training Fee: </h3><h3 class=" font-montmedium text-sm md:text-base lg:text-lg">Only Rs 5000/- per month</h3></div>

        <p class=" font-montmedium my-2 text-sm md:text-base lg:text-lg mt-1 text-center text-red-600">Admission Limited To Only 16 Candidates!</p>

        <div class=" flex space-x-3"><h3 class=" font-montsemibold md:text-base lg:text-lg">Placement: </h3><h3 class=" font-montmedium text-sm md:text-base lg:text-lg ">6 out of 16 trainees will be placed in our own team as Web Developers.<br> We will provide placement assistance for the remaining candidates.</h3></div>
    </div> --}}
    <table class="xl:max-w-2xl mx-auto text-left text-sm md:text-base xl:text-lg  ">
        <thead class="border-b  dark:border-neutral-500 font-montsemibold">
          <tr>
            {{-- <th scope="col" class="px-6 py-4">#</th> --}}
            <th scope="col" class="px-6 py-4">Particulars</th>
            <th scope="col" class="px-6 py-4">Amount(Rs.)/Month</th>
            <th scope="col" class="px-6 py-4">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b dark:border-neutral-500 font-montmedium">
            {{-- <td class="whitespace-nowrap px-6 py-4 font-medium">1</td> --}}
            <td class="whitespace-nowrap px-6 py-4">Fees for Training</td>
            <td class="whitespace-nowrap px-6 py-4">Rs.10000/Month</td>
            <td class="whitespace-nowrap px-6 py-4">60000/-</td>
          </tr>
          <tr class="border-b dark:border-neutral-500 font-montmedium">
            {{-- <td class="whitespace-nowrap px-6 py-4 font-medium">2</td> --}}
            <td class="whitespace-nowrap px-6 py-4">Stipend for Internship</td>
            <td class="whitespace-nowrap px-6 py-4">Rs.10000/Month</td>
            <td class="whitespace-nowrap px-6 py-4">60000/-</td>
          </tr>
          <tr class="border-b dark:border-neutral-500 font-montsemibold">
            {{-- <td class="whitespace-nowrap px-6 py-4 font-medium"></td> --}}
            <td class="whitespace-nowrap px-6 py-4 font-bold">Net Cost</td>
            <td class="whitespace-nowrap px-6 py-4"></td>
            <td class="whitespace-nowrap px-6 py-4 font-bold">0/-</td>
          </tr>
        </tbody>
      </table>



    </div>

    <p class=" text-center text-red-600 font-montsemibold text-sm md:text-base lg:text-lg">Only 6 seats available</p>


      <div class=" xl:max-w-2xl py-3 mx-auto my-10 md:my-14 border-2 border-dashed border-gray-400">
        <h1 class="block uppercase tracking-wide mb-4 text-sm lg:text-lg  text-center  font-bold text-blue-600">Application for Developer Mentorship Program</h1>
            <form action="/careers/apply" method="POST">
                @csrf
                <div class="w-full px-3 mb-3 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="name" type="text" placeholder="" required>



                </div>

                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                      Phone
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="phone" name="phone" type="phone" placeholder="" minlength="10" maxlength="10" required>


                  </div>
                  <div class="flex justify-center w-full my-5   ">
                    <button type="submit" class="px-2 py-1 md:py-1 md:px-1.5 font-montsemibold text-base lg:text-lg text-white rounded-xl bg-[#0D9CD4] hover:scale-105 transition-all ease-in-out duration-150" href="/test/apply">Apply Now</button>
                </div>
            </form>
      </div>




    {{-- <div class="flex justify-center w-full my-5 lg:my-9 md:mb-4 lg:mb-7 ">
        <a class="px-2 py-1 md:py-2 md:px-3 font-montsemibold text-base lg:text-lg text-white rounded-xl bg-[#0D9CD4] hover:scale-105 transition-all ease-in-out duration-150" href="/test/apply">Apply now</a>
    </div> --}}
    {{-- <p class=" font-montmedium text-sm md:text-base xl:text-lg mt-4 xl:mt-9">Fees For Training: Rs. 60,000/- (To be paid as Rs. 10000 / Month)</p>
    <p class=" font-montmedium text-sm md:text-base xl:text-lg mt-1">Remuneration for internship: Rs. 10,000/- per month (Total Rs. 60,000 for 6 months)</p>
    <p class=" font-montsemibold text-sm md:text-base xl:text-lg mt-1">Net Cost: Rs. 0.00/-</p> --}}


<h2 class=" font-montsemibold text-sm md:text-base text-center  mt-2 lg:mt-7 xl:mt-7 mb-2 lg:mb-3">For More Details, Contact : +91 9497344553</h2>

<div class=" my-6">

<x-mobile.accordions></x-mobile.accordions>
</div>

</div>
