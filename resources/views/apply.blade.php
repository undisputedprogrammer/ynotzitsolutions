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


        <div class="rounded-lg bg-white p-5 shadow-lg lg:col-span-3 lg:p-12 w-full">
            <form id="form" class="w-full sm:w-[80%] md:w-[70%] mx-auto " onsubmit="formSubmit();return false" method="post" enctype="multipart/form-data">

                @csrf

                <h1 class="block uppercase tracking-wide text-gray-700 text-center  font-bold">Application for full stack web development training</h1>
                <h1 class="block uppercase tracking-wide text-gray-700 text-center mb-4 md:mb-8 lg:mb-10 font-bold">Apply for aptitude test</h1>

                  <div class="w-full px-3 mb-3 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="name" type="text" placeholder="" required>



                </div>



                  <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="mail">
                      Email
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" name="email" type="email" placeholder="" required>
                    <p class="text-xs font-montregular mb-3">Online test link will be sent through email</p>
                  </div>


                    <div class="w-full px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                        Phone
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="phone" name="phone" type="phone" placeholder="" minlength="10" maxlength="10" required>


                    </div>

                <div class="md:flex  mb-2 md:justify-between">

                  <div class="w-full md:basis-2/3 px-3 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="education">
                      Highest educational qualification
                    </label>
                    <div class="relative">
                      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="education" name="qualification">
                        <option value="PG">Post Graduate</option>

                        <option value="UG">Graduate</option>

                        <option value="DIP">Diploma</option>

                        <option value="PLUSTWO">Plus Two</option>

                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">

                      </div>
                    </div>
                  </div>
                  <div class="w-full md:basis-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="passing">
                      Year of passing
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="passing" name="passing" type="number" minlength="4" required>
                  </div>
                </div>

                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="course">
                      Course name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="course" type="text" name="course" minlength="3" placeholder="" required>

                  </div>

                <div class=" flex justify-center mt-4 md:mt-7 lg:mt-9">
                    <button class=" text-white rounded-xl bg-[#0D9CD4] hover:scale-105 transition-all ease-in-out duration-150 font-montsemibold text-base lg:text-lg px-3 py-2" type="submit" name="submit" >Apply for test</button>
                </div>

              </form>
        </div>
      </div>
    </div>
  </section>





    <x-test-spinner></x-test-spinner>
    <x-test-success></x-test-success>
    <x-fail-alert></x-fail-alert>

<x-common.footer></x-common.footer>

<script>
    let form= document.getElementById('form');
            let spinner = document.getElementById('spinner');
            // let submitBtn = document.getElementById('submit');
            let alert=document.getElementById('success-alert');
            let failalert=document.getElementById('fail-alert');
            let closefailAlert=document.getElementById('close-failalert');
            let closeAlert=document.getElementById('close-alert');
            let name=document.getElementById('name').value;
            let email=document.getElementById('email').value;
            let phone=document.getElementById('phone').value;
            let message=document.getElementById('education').value;


            let aftersubmission = document.createElement("div");
            aftersubmission.classList=['w-full sm:w-[80%] md:w-[70%] mx-auto ']

            let afterheading= document.createElement("h3");
            afterheading.classList=['uppercase tracking-wide text-gray-700 text-center  font-bold'];
            afterheading.innerText="Great";
            aftersubmission.appendChild(afterheading);
            let afterpara=document.createElement("p");
            afterpara.innerText="You have successfully registered for the test, a mail containing the test link will be sent to your provided email address. Or you can directly attend the aptitude test by clicking the link below.";
            afterpara.classList=['text-sm md:text-base font-montregular my-3']
            aftersubmission.appendChild(afterpara);
            let afterlink=document.createElement("a");
            afterlink.href="https://www.flexiquiz.com/SC/N/ynotz-it-aptitude";
            afterlink.innerText="https://www.flexiquiz.com/SC/N/ynotz-it-aptitude";
            afterlink.classList=['text-center text-blue-600']
            aftersubmission.appendChild(afterlink);


            alert.classList.toggle('hidden');


            closeAlert.addEventListener('click',function(){
                alert.classList.toggle('hidden');
                form.reset();
            })

            closefailAlert.addEventListener('click',function(){
                failalert.classList.toggle('hidden');
                form.reset();
            })

            function formSubmit(){
                // for(let i=1;i<=14;i++){
                //     let cb=document.getElementById('cb'+i);
                //     if(cb.checked){
                //         services.push(cb.value)
                //     }

                // }
                console.log(document.getElementById('education').value);
                // console.log(name);
                // submitBtn.disabled = true;
                spinner.classList.toggle('hidden');
                // console.log(services)
                sendmail();
            }

            function sendmail(){
                axios.post('/api/test/submit', {
                                name: document.getElementById('name').value,
                                email: document.getElementById('email').value,
                                phone : document.getElementById('phone').value,

                                qualification: document.getElementById('education').value,
                                yop:document.getElementById('passing').value,
                                course: document.getElementById('course').value,
                            }, {
                                headers: {
                                    "Content-Type": "multipart/form-data",
                                },
                            }).then(function(response) {

                                    spinner.classList.toggle('hidden');
                                    form.replaceWith(aftersubmission);
                                    alert.classList.toggle('hidden');

                                })
                                .catch(function(error) {
                                    spinner.classList.toggle('hidden');
                                    failalert.classList.toggle('hidden');
                                    console.log(error)
                                });
            }
</script>

</x-defaultlayout>
