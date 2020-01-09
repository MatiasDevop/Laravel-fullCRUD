<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .imgheader{
            float:right;
            padding-right: 150px;
            width:150px;
        }
        .header{
            text-align: center;
            font-size: x-large;
            font-family: sans-serif;
            margin-bottom: 100px;
            color:#090;
        }
        .content form, table{
            width: 500px;
            margin:0 auto;
        }
        .footer{
            position: fixed;
            bottom: 0px;
            width: 100%;
            font-size: 0.7em;
            margin-bottom: 15px;
        }
    
    </style>
</head>
<body>
    <div class="header">
        @include('layouts.navbar')
        @yield('header')
        <img src="/images/user.png" alt="" class="imgheader"/>
    
    </div>
    <div class="content">

        @yield("content")
    
    </div>
    <div class="footer">

        @yield('footer')
        Courser for informatic and laravel full stack
    </div>
</body>
</html>