<x-defaultlayout>

    <x-mobile.nav></x-mobile.nav>
{{-- navbar-mobile ends --}}

{{-- mobile-menu pop up begins--}}
@php
$home=false;
$about=false;
$services=false;
$blog=false;
@endphp
<x-mobile.menu :home="$home" :about="$about" :services="$services" :blog="$blog" class="font-satoshimedium text-[14px] ml-11 mb-[27px]"></x-mobile.menu>
{{-- mobile-menu pop up ends --}}

{{-- desktop-navbar begins --}}
@php
$ishome=false;
$isabout=false;
$isservices=false;
$iscontact=false;
$isblog=false;
@endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :iscontact="$iscontact"  :isblog="$isblog" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
{{-- desktop-navbar ends --}}

<div class="w-full mt-14 flex flex-col md:flex-row justify-evenly ">

    <form action="/coupons/create" method="POST" class="flex flex-col items-center space-y-4">
        @csrf
        <input type="text" name="code" required placeholder="Enter new coupon code" class=" border-b-2 border-gray-600">

        <button type="submit" class="px-2 py-1 bg-black text-white font-montsemibold text-sm rounded-md">Add</button>

    </form>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b font-medium dark:border-neutral-500">
                  <tr>
                    <th scope="col" class="px-6 py-4">#</th>
                    <th scope="col" class="px-6 py-4">Coupon Code</th>
                    <th scope="col" class="px-6 py-4">Action</th>

                  </tr>
                </thead>
                <tbody>
                    @if ($coupons)
                    @php
                        $no = 0;
                    @endphp
                        @foreach ($coupons as $coupon)
                        @php
                            $no++;
                        @endphp
                        <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{$no}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$coupon['code']}}</td>
                            <td class="whitespace-nowrap px-6 py-4"><a href="/coupon/delete/{{$coupon['id']}}"><img class="w-5" src="{{asset('images/icons/delete-icon.svg')}}" alt=""></a></td>

                        </tr>
                        @endforeach
                    @endif





                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

</div>

</x-defaultlayout>
