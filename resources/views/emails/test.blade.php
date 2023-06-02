<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .greeting{
            font: bold;

        }
        .regards{
            font: bold;
        }
    </style>
</head>
<body>

    <h4 class="greeting">Greetings {{$data['name']}}</h4>
    <br>
    <p style="" class=" font-montregular">Thank you for showing interest. You are requested to attend the online aptitude test before June 10 2023. Candidates will be shortlisted based on their performance in the aptitude test. The link for the test is given below. We wish you all the best.</p>

    <a href="/">Click here to attend aptitude test</a>

    <h4 class="regards">With regards - YNOTZ IT Solutions</h4>
    <a class=" w-14 p-1 mx-auto bg-red-700 text-black font-montregular" href="www.ynotzitsolutions.com">Visit site</a><br>


</body>
</html>
