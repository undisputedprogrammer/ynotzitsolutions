<x-defaultlayout>

    @php
        $active ='home';
    @endphp
   <x-marketer.marketer-bars :active="$active"></x-marketer.marketer-bars>

    <div class="mt-20 md:mt-20 lg:mt-24 xl:ml-60">

        @if (session('message'))



        <div role="alert" class="w-[90%] mx-auto lg:w-[80%] mb-5">
            <div class="bg-green-400 text-white font-bold rounded-t px-4 py-2">
              Success
            </div>
            <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
              <p>{{session('message')}}</p>
            </div>
          </div>

        @endif

        <h1 class=" text-stone-600 text-center font-montsemibold text-lg md:text-xl xl:text-2xl">Hi {{$marketer['name']}}</h1>

        <div class="w-[96%] mx-auto justify-evenly flex flex-col space-y-3 sm:space-y-0 font-montsemibold sm:flex-row sm:flex-wrap mt-3">
            <a href="/marketer/manage-coupons" class=" w-[90%] sm:w-[45%] mx-auto md:w-[30%] rounded-md from-gray-700 to-black bg-gradient-to-r  text-white font-bold text-center py-5">Coupons Generated : {{count($coupons)}}</a>

            <a href="/marketer/refferals" class=" w-[90%] sm:w-[45%] mx-auto md:w-[30%] rounded-md from-orange-400 bg-gradient-to-r to-orange-600 text-white font-bold text-center py-5">Refferal leads : {{count($refferals)}}</a>

            <a href="/marketer/refferals" class=" w-[90%] sm:w-[45%] mx-auto md:w-[30%] rounded-md from-pink-400 bg-gradient-to-r to-pink-600 text-white font-bold text-center py-5">Leads Closed : {{count($refferalsClosed)}}</a>

        </div>

            {{-- <div class=" w-[90%] sm:w-[45%] mx-auto md:w-[30%] rounded-md from-cyan-400 bg-gradient-to-r to-cyan-600 text-white font-bold text-center py-5">Create Coupon</div>
        </div> --}}

        {{-- <div class="mt-4 w-[86%] md:max-w-[390px] mx-auto flex flex-col space-y-2">
            <h3 class=" bg-gray-200 text-black font-montmedium rounded-md text-sm md:text-base px-3 py-1">Your Coupon Codes</h3>
            @if(count($coupons)>0)
            @foreach ($coupons as $coupon)

                <div class="border-gray-200 border-l-2 border-r-2 w-[96%]  mx-auto py-1 px-2">
                    <div class=" flex justify-between ">
                        <p class="text-gray-500 text-sm font-montsemibold">{{$coupon['code']}}</p>
                        <button class=" bg-gray-600 text-white px-1.5 py-1 text-xs font-montmedium rounded-md">Copy</button>
                    </div>
                </div>
            @endforeach
            @else
            <p class=" font-montmedium text-sm text-center">You haven't created any coupons yet</p>
            @endif


        </div> --}}
        <div class=" w-[96%] xl:w-fit mx-auto">

        <div class="flex flex-col py-6 md:py-9">
            <h1 class=" font-montsemibold text-xl">Current Offers</h1>
            <div class="overflow-x-auto hide-scroll sm:-mx-6 lg:-mx-8">
              <div class="inline-block w-fit mx-auto py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full text-left border-2 text-sm font-light">
                    <thead class="border-b font-medium dark:border-neutral-500">
                      <tr>
                        <th scope="col" class="px-3 lg:px-6 py-4">#</th>
                        <th scope="col" class="px-3 lg:px-6 py-4">Short code</th>
                        <th scope="col" class="px-3 lg:px-6 py-4">Offer name</th>
                        <th scope="col" class="px-3 lg:px-6 py-4">Link</th>
                        <th scope="col" class="px-3 lg:px-6 py-4">MRP</th>
                        <th scope="col" class="px-3 lg:px-6 py-4">Offer price</th>
                        <th scope="col" class="px-3 lg:px-6 py-4">Refferal commission</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $sno=1;
                        @endphp
                        @foreach ($offers as $offer)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-3 lg:px-6 py-4 font-medium">{{$sno++}}</td>
                            <td class="whitespace-nowrap px-3 lg:px-6 py-4 font-medium">{{$offer['short_code']}}</td>
                            <td class="whitespace-nowrap px-3 lg:px-6 py-4 ">{{$offer['name']}}</td>
                            <td class="whitespace-nowrap px-3 lg:px-6 py-4 text-blue-500 underline">
                                <div class="flex space-x-2">
                                    <a href="{{$offer['url']}}" target="_blank">{{$offer['url']}}</a>
                                    <x-marketer.copy-group></x-marketer.copy-group>


                                </div>
                            </td>
                            <td class="whitespace-nowrap px-3 lg:px-6 py-4">{{$offer['rate']}}/-</td>
                            <td class="whitespace-nowrap px-3 lg:px-6 py-4">{{$offer['discount']}}/-</td>
                            <td class="whitespace-nowrap px-3 lg:px-6 py-4">{{$offer['commission']}}%</td>
                          </tr>

                        @endforeach


                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>

    <script>

document.addEventListener("DOMContentLoaded", () => {
        let copyBtn = document.getElementById('copy-btn');
        let copiedBtn = document.getElementById('copied-btn');


        copyBtn.addEventListener('click',(e)=>{
            navigator.clipboard.writeText(e.target.previousElementSibling.innerText);
            console.log(e.target.previousElementSibling.innerText);
            copyBtn.classList.toggle('hidden');
            copiedBtn.classList.toggle('hidden');

            setTimeout(() => {
                copyBtn.classList.toggle('hidden');
                copiedBtn.classList.toggle('hidden');
            }, 2000);
        });

    });



    </script>


</x-defaultlayout>
