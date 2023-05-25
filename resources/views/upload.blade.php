<x-defaultlayout>

    {{-- navbar-mobile --}}
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


<section class="bg-gray-100">
    <div class="mx-auto max-w-screen-lg px-4 py-16 sm:px-6 lg:px-8">
      <div class="flex justify-center w-full">


        <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12 w-full">
          <form action="/blog/new/create" class="space-y-4 w-full" method="post" enctype="multipart/form-data">
            @csrf
            <div>
              <label class="sr-only" for="title">Title</label>
              <input
                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                placeholder="Blog title"
                type="text"
                name="title"
                id="title"
              />
            </div>

            <div>
                <label class="sr-only" for="title">Description</label>
                <input
                  class="w-full rounded-lg border-gray-200 p-3 text-sm"
                  placeholder="Enter a short description"
                  type="text"
                  name="description"
                  id="description"
                />
              </div>

            {{-- <div>
                <label class="block text-sm font-medium text-white">
                Image
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-black hover:text-white hover:bg-black border border-black font-montmedium px-1 ">

                        <input type="file" name="blogimg" required id="blogimg" class="border-0">
                      </label>

                </div>
              </div>
            </div>
            </div> --}}

            <input type="file" name="blogimg">




            <div>
              <label class="sr-only" for="message">Code</label>

              <textarea
                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                placeholder="Code"
                rows="8"
                id="code"
                name="code"
                required
              ></textarea>
            </div>

            <div class="mt-4">
              <button
                type="submit"
                class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
              >
                See Preview
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <x-lets-talk></x-lets-talk>

<x-common.footer></x-common.footer>

</x-defaultlayout>
