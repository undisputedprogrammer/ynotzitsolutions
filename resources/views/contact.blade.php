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
$iscontact=true;
$isblog=false;
@endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :iscontact="$iscontact"  :isblog="$isblog" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
{{-- desktop-navbar ends --}}
@php
   $hero = array('img' => "/images/about/contact.webp", 'title'=>"Let us know how we can help you" );
   $height="h-[180px]";

@endphp
<x-herowithtext :hero="$hero" :height="$height"></x-herowithtext>

<x-contact-body></x-contact-body>

    <x-spinner></x-spinner>
    <x-success-alert></x-success-alert>
    <x-fail-alert></x-fail-alert>

<div class=" my-8 lg:my-14"></div>

<x-lets-talk></x-lets-talk>

<x-common.footer></x-common.footer>

<script>

    let form= document.getElementById('form');
            let spinner = document.getElementById('spinner');
            let submitBtn = document.getElementById('submit');
            let alert=document.getElementById('success-alert');
            let failalert=document.getElementById('fail-alert');
            let closefailAlert=document.getElementById('close-failalert');
            let closeAlert=document.getElementById('close-alert');
            let name=document.getElementById('name').value;
            let email=document.getElementById('email').value;
            let phone=document.getElementById('phone').value;
            let message=document.getElementById('message').value;
            let services=[];

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
                for(let i=1;i<=14;i++){
                    let cb=document.getElementById('cb'+i);
                    if(cb.checked){
                        services.push(cb.value)
                    }

                }
                console.log(document.getElementById('name').value);
                // console.log(name);
                submitBtn.disabled = true;
                spinner.classList.toggle('hidden');
                console.log(services)
                sendmail();
            }

            function sendmail(){
                axios.post('/api/send', {
                                name: document.getElementById('name').value,
                                email: document.getElementById('email').value,
                                phone : document.getElementById('phone').value,
                                services: services,
                                message: document.getElementById('message').value,
                            }, {
                                headers: {
                                    "Content-Type": "multipart/form-data",
                                },
                            }).then(function(response) {

                                    spinner.classList.toggle('hidden');
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
