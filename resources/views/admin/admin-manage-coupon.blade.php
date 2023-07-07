{{-- {{dd($coupons[0]->user->email)}} --}}
<x-defaultlayout>
    <!-- component -->

    @php
        $active = 'manage-coupons';
    @endphp

        <x-admin.admin-bars :active="$active"></x-admin.admin-bars>
            <!-- ./Sidebar -->

            <div class="h-full ml-14 mt-14 py-8 mb-10 md:ml-64  rounded-tl-md bg-gray-100 min-h-screen">

                <x-admin.admin-alert></x-admin.admin-alerts>

                <form action="/admin/create-coupon" method="POST" class=" bg-white shadow-sm rounded-2xl px-3 pb-4 w-[90%] mx-auto sm:max-w-sm md:max-w-xl md:py-4 h-fit">
                    @csrf
                    <h1 class="font-montsemibold text-lg text-start w-[95%] mx-auto mb-1.5">Create new coupon</h1>
                    <div class="flex flex-col md:flex-row md:justify-evenly items-center space-y-4 md:space-y-0">
                    <input type="text" name="code" class=" bg-gray-50 rounded-xl w-[90%] md:w-[65%] border-gray-600 h-11" placeholder="New coupon code">
                    <button type="submit" class=" bg-black text-white font-montsemibold text-sm rounded-xl w-[90%] md:w-[30%] h-11">Add</button>
                    </div>
                    @error('code')
                      <p class=" w-[92%] mx-auto text-xs text-red-600 font-montmedium">{{$message}}</p>
                    @enderror

                </form>

                <div class="flex flex-col bg-white p-3 rounded-2xl shadow-sm w-[90%] mx-auto md:max-w-xl mt-10">
                    <h3 class=" font-semibold text-lg">Listing all coupons</h3>
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                          <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                              <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Coupon Code</th>
                                <th scope="col" class="px-6 py-4">User ID</th>
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
                                        <td class="whitespace-nowrap px-6 py-4">{{$coupon->user->id}}</td>
                                        <td class="whitespace-nowrap px-6 py-4"><a href="/admin/coupon/delete/{{$coupon['id']}}"><img class="w-5" src="{{asset('images/icons/delete-icon.svg')}}" alt=""></a></td>

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

            <script>
              let alert = document.getElementById('success-alert');
              let closeAlert = document.getElementById('hide-alert');
              closeAlert.addEventListener('click',()=>{
                alert.classList.toggle('hidden');
              });
            </script>
</x-defaultlayout>
