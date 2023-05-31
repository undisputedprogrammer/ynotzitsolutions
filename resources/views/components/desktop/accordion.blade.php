@props(['title','description'])
<div {{ $attributes->merge(['class' => '']) }}>
        <div x-data="{show:false,toggle(){this.show=!this.show;

        }}" class=" w-[90%] mx-auto  rounded-xl ">
            <div id="accordion-1" @click="toggle()" :class="show? ' rounded-t-lg' : 'rounded-lg' " class=" bg-gray accordion flex justify-between py-[15px] lg:py-[18px] items-center" onclick="show()">
                <h3 class=" ml-[21px] lg:pl-[17px] font-satoshimedium text-[15px] text-medium-lg ">{{$title}}</h3>
                <img :class="show ? 'rotate-180' : '' " class="mr-[12px] lg:mr-8 px-1 py-2  bg-white rounded-full lg:h-[40px] lg:w-[40px] lg:p-3 lg:rounded-xl" src="{{asset('/images/icons/down.svg')}}" alt="">

            </div>
            <div id="panel-1" class="panel w-full mx-auto  ease-in-out">
                <div class="bg-gray pb-3 pt-2 rounded-b-lg">

                <p class=" w-[88%] mx-auto mt-2 font-satoshiregular text-[15px] lg:text-lg text-default ">{{$description}}</p>
                </div>
            </div>

        </div>
        <script>

        function show(){
            let panel = this.nextElementSibling;

            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                }
            }

            </script>


</div>
