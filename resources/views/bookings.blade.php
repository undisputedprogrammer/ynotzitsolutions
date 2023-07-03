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

<h1 class=" uppercase font-montsemibold text-xl lg:text-2xl my-7 text-center text-blue-600">Super Startup offer bookings</h1>

<div class="flex flex-col w-[90%] mx-auto">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium dark:border-neutral-500">
              <tr>
                <th scope="col" class="px-6 py-4">#</th>
                <th scope="col" class="px-6 py-4">Name</th>
                <th scope="col" class="px-6 py-4">Company</th>
                <th scope="col" class="px-6 py-4">Mobile</th>
                <th scope="col" class="px-6 py-4">Coupon used</th>
                <th scope="col" class="px-6 py-4">Discounted Price</th>
                <th scope="col" class="px-6 py-4">Action</th>


              </tr>
            </thead>
            <tbody>
                @if ($bookings)
                @php
                    $no = 0;
                @endphp
                    @foreach ($bookings as $booking)
                    @php
                        $no++;
                    @endphp
                    <tr class="border-b dark:border-neutral-500">
                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{$no}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{$booking['name']}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{$booking['company']}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{$booking['phone']}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{$booking['coupon']}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{$booking['price']}}/-</td>
                        <td class="whitespace-nowrap px-6 py-4"><a href="/booking/delete/{{$booking['id']}}"><img class="w-5" src="{{asset('images/icons/delete-icon.svg')}}" alt=""></a></td>

                    </tr>
                    @endforeach
                @endif





            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</x-defaultlayout>
