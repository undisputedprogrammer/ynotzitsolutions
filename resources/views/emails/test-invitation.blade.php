<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .mail-head{
        width: 100%;

    }

    .bg-black{
        background-color: black;
        color: white;
    }

    .icon-holder{
        display: flex;
        justify-content: center;
        padding-top: 25px;

    }
    .icon{
        width: 35px;
        height:auto;
        margin-right: 10px;
    }
    .address{
        padding-bottom: 25px;
    }

    .logo{
        height:45px;
        width: auto;
    }

    .paragraph{
        color: black;
    }

    .heading{
        font-weight: bold;

    }

    .font{
        font-family: Arial;
    }
    .wrapper{
        width:90%;
        margin-left: auto;
        margin-right: auto;
    }

    @media(min-width:640px){
        .logo{
            height:60px;
        }

        .icon-holder{
            padding-top: 35px;
        }

        .address{
            padding-bottom: 35px;
        }
    }

    @media(min-width:1024px){
        .logo{
            height: 75px;
        }
    }

    </style>
<body style="background-color:white; margin:0;">
    <div class="wrapper">
    <div class="mail-head">
        <img class="logo" style="margin-top:20px" src="{{asset('images/logo.png')}}" alt="">
    </div>
    <div>
        <h4 class="heading font">Hi {{$data['name']}}</h4>
        <p class="paragraph font">You have successfully registered for the APTITUDE TEST for our 1 Year Full-stack Web Development Training Program.
        </p>
        <p class="paragraph font">Here is the link to the test:

        </p>
        <a style="text-align: center" class=" font" href="https://www.flexiquiz.com/SC/N/ynotz-it-aptitude">Click here to attempt aptitude test</a>

        <p class="paragraph font">
            The last date for attempting the test is 10th June 2023.
            </p>
            <br>

            <p class="paragraph font">Good luck for your test.
            </p>

            <p class="paragraph font">
                Thank You!
                </p>
                <p class="paragraph font">
                    <strong>Revathy Vijayan</strong> <br>
                    HR Executive
                    </p>


    </div>
</div>
    <div class="bg-black">
        <div class="icon-holder">
            <a href="https://www.facebook.com/ynotzitsolutions"><img class="icon" src="{{asset('images/email/image-1.png')}}" alt=""></a>

            <a href="https://www.linkedin.com/company/ynotzitsolutions/"><img class="icon" src="{{asset('images/email/image-2.png')}}" alt=""></a>

            <a href="https://instagram.com/ynotzit?igshid=MmJiY2I4NDBkZg=="><img class="icon" src="{{asset('images/email/image-4.png')}}" alt=""></a>
        </div>
        <div class="address font">
            <p style="text-align: center;">YNOTZ IT Solutions, FS6, 6th Floor, Heavenly Plaza, Padamugal, Kakkanad, Kochi - 682021</p>
        </div>
    </div>

</body>
</html>
