<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                color: #070707;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                         
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        
    </head>
    <body>
        @yield('content')
    </body>
<style>

    .header{
        background-color: #ffffff;
        text-align: left;
        padding-left: 20px; 
        padding-top: 5px;

    }

    .wrapper{
        background-color: #ADCDE8; 
        padding: 70px;
        

    }

    .box{
        background-color: #ffffff;
        padding: 10px 40px 40px 40px;
        line-height: 2.2;
        text-align: left;
        border-radius: 20px;
        margin: 0%;
    }

    hr.line1{
        width: 100%;
        height: 5px;
        margin-top: 30px;
        margin-bottom: 20px;
        margin-left: auto;
        margin-right: auto;
        background-color: #b7d0e2;
        border: 0 none;
    }

    hr.line2{
        width: 100%;
        height: 5px;
        margin-bottom: 20px;
        margin-left: auto;
        margin-right: auto;
        background-color: #b7d0e2;
        border: 0 none;
    }

    .oath{
        background-color: #99b8d1;
        padding: 20px;
        border-radius: 20px;
        text-align: center;
        margin:0%;
    }

    .references{
        padding-bottom: 20px;
    }
   
    .id{
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .button{
        padding-top: 60px;
        text-align: center;
        
    
    }
    
    .pdf-form-bg-1 {
        background: lightgray;
    }

</style>
</html>
