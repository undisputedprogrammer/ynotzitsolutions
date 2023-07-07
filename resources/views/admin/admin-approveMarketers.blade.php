<x-defaultlayout>
    <!-- component -->

    @php
        $active = 'approve-marketer';
    @endphp

        <x-admin.admin-bars :active="$active"></x-admin.admin-bars>
            <!-- ./Sidebar -->

            <div class="h-full ml-14 mt-14 py-8 mb-10 md:ml-64  rounded-tl-md bg-gray-100 min-h-screen">

                <x-admin.admin-alert></x-admin.admin-alert>
                <div class="flex flex-col w-[90%] mx-auto my-5">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                          <table class="min-w-full bg-white text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500 bg-ynotz text-white">
                              <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Name</th>
                                <th scope="col" class="px-6 py-4">Email</th>
                                <th scope="col" class="px-6 py-4">Phone</th>
                                <th scope="col" class="px-6 py-4">Influencer</th>
                                <th scope="col" class="px-6 py-4">Place</th>
                                <th scope="col" class="px-6 py-4">Gender</th>
                                <th scope="col" class="px-6 py-4">Age</th>
                                <th scope="col" class="px-6 py-4">Action</th>


                              </tr>
                            </thead>
                            <tbody>
                                @if (count($registrations)>0)
                                @php
                                    $no = 0;
                                @endphp
                                    @foreach ($registrations as $registration)
                                    @php
                                        $no++;
                                    @endphp
                                    <tr class="border-b dark:border-neutral-500 font-montmedium">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{$no}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$registration['name']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$registration['email']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$registration['phone']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            @if ($registration['influencer']==1)
                                                Yes
                                                @else
                                                No
                                            @endif
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$registration['place']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$registration['gender']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$registration['age']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4 flex space-x-5">

                                        <a href="/admin/marketer/approve?rid={{$registration['id']}}"><img class="w-5" src="{{asset('images/icons/user-plus.svg')}}" alt=""></a>

                                        <a href="/admin/marketer/reject?rid={{$registration['id']}}"><img class="w-5" src="{{asset('images/icons/user-minus.svg')}}" alt=""></a></td>

                                    </tr>
                                    @endforeach

                                    @else
                                    <tr>
                                        <td colspan="9" class=" py-3 font-montregular text-center">No fresh registrations to show</td>
                                    </tr>
                                @endif





                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

            </div>

</x-defaultlayout>
