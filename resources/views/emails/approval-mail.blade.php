<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h4>Hi {{$data['name']}}</h1>
    <p>This mail is to notify that you have been approved as a marketing affiliate for our Super Startup Offer. The credentials of your new account is given below.</p>
    <p>Email ID : {{$data['email']}}</p>
    <p>Password : {{$data['password']}}</p>
    <p>You can login using the link given below, use your registered Email ID and above given password to login</p>
    <a href="https://www.ynotzitsolutions.com/marketer/login">Click here to login</a>
</body>
</html>
