<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bookstore</title>


   <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('js/preload.js')}}"></script>





</head>
<body style="background-color: #f5f2ff" >
<!--Прелоудер-->
<div class="preloader">
    <div class="preloader_content">
        <div class="preloader_first"></div>
        <div class="preloader-second"></div>
        <div class="preloader_third"></div>

        <div class="preloader_content_inside">
            <div class="preloader_first_inside"></div>
            <div class="preloader-second_inside"></div>
            <div class="preloader_third_inside"></div>
            <div class="preloader_circle"></div>
        </div>
    </div>
</div>
<!--Шапка -->
<main class="">
    <nav class="nav" >
        <p style="color: white; font-size: 20px">Bookstore</p>

       <?php
       if(Session::get('logged_user')=="admin"){
        echo "<div class='writearticle' id='writearticle'>Add one book</div>";
        }
        ?>




        <?php
        if(Session::has('logged_user')){
            $name = Session::get('logged_user');
            echo " <div id=\"myAccount\" >$name</div>";
        }else{
            echo " <div class=\"logIn\" >Log in</div>";
        }
        ?>




    </nav>

    <!--Модалка аккаунт -->
@include("myAccountModal")
@include("articleAddModal")
@include("loginModal")
@include("registrationModal")
@include("changeArticle")

    <p style="font-size: 28px;color:white;text-align: center; font-weight: bolder;margin-top: 15px" >Books</p>


    <!--Вывод поста -->


    <div class="articles-content" >

        @foreach($articles as $val)
            <div class="article">
                @if(Session::get('logged_user')=="admin")
                <a href="{{ url("deleteArticle/$val->id")}}"><img  class="closeIco" src="{{asset('img/cancel-512.png')}}"></a>
                @endif
                <div class='articleTitle' >{{$val->tittle}}</div>
                <img  class='imgArticle' src={{ asset('/storage/'.$val->image) }}>
                <p class='outputArticle'>{{$val->text}}<p>
                <div class='articleAuthor'>{{$val->author}}</div>
                <div class='articleDate'  >{{$val->date}}</div>
                <a style="text-align: center" href="{{ url("articleShow/$val->id")}}">Read more..</a>
                <p class="price">{{$val->price}} $</p>
               <a  href="{{ url("buyForm/$val->id")}}"> <button class="buyBookBut">Buy</button></a>
                <input class="hiddenIdArticle" type="hidden" value="{{$val->id}}">
{{--                @if(Session::get('logged_user')=="admin")--}}
{{--                 <button class="changeBut1" >Change</button>--}}
{{--                 @endif--}}
            </div>
        @endforeach
    </div>






    <div style="width: 40%; margin: auto">
        <output class="otpTxt">
            “If you’re in pain, read this book. If you’re scared, read this book. If you are lost, read this book.
            If you are happy, read this book. If you have time, read this book. If you don’t have time, read this book. Read this book, read this book.”
        </output>
    </div>

</main>

{{--<section class="videosec" >--}}

{{--    <div style="display: flex; align-items: center;justify-content: center">--}}
{{--        <output class="videoOutput"  style="text-align: center">--}}
{{--            Transform Your Life Today--}}
{{--        </output>--}}
{{--    </div>--}}



{{--    <div class="container" style="color: black; text-align: center">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm">--}}
{{--                Books--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                change--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                your life--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <output class="videoOutput" >--}}
{{--            “If you’re in pain, read this book. If you’re scared, read this book. If you are lost, read this book.--}}
{{--            If you are happy, read this book. If you have time, read this book. If you don’t have time, read this book. Read this book, read this book.”--}}
{{--        </output>--}}
{{--    </div>--}}


{{--</section>--}}

<footer  >
    <!-- Copyright -->
    <div class="footer-content">

        <p   style="text-align: center; color: white; margin-top: 10px; font-size: 14px">tel: +380999302216</p>
    </div>

</footer >
<script src="{{URL::asset('/js/script.js')}}"></script>
</body>
</html>
