<x-defaultlayout>
    @php
        $active = 'change-password';
    @endphp
    <x-marketer.marketer-bars :active="$active"></x-marketer.marketer-bars>


    <section class="bg-gray-50 mt-24 xl:ml-60">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-[70vh] lg:py-0">

            <div class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                    Change Password
                </h2>
                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" method="POST" action="/marketer/password/store">
                    @csrf
                    {{-- <div>
                        <label for="oldpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Old Password</label>
                        <input type="password" name="old-password" id="oldpassword" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="••••••••" required>
                    </div> --}}
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required>
                    </div>
                    <div>
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required>
                        @error('password')
                            <p class=" text-xs text-red-600">{{$message}}</p>
                        @enderror
                    </div>


                    <button type="submit" class="w-full font-semibold text-white bg-ynotz hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300  rounded-lg text-sm px-5 py-2.5 text-center ">Reset password</button>
                </form>
            </div>
        </div>
      </section>

</x-defaultlayout>
