<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>


    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('js/preload.js')}}"></script>


</head>
<body>


<main class="contentPage">
    <nav class="nav" >
        <a href="{{ url("/")}}"><p style="color: white; font-size: 20px">Bookstore</p></a>
        <?php
        if(Session::has('logged_user')){
            $name = Session::get('logged_user');
            echo " <div id=\"myAccount\" >$name</div>";
        }else{
            echo " <div class='logIn' >Log in</div>";
        }
        ?>
    </nav>

    @include("myAccountModal")
    @include("articleAddModal")
    @include("loginModal")
    @include("registrationModal")
    @include("changeArticle")


    <div class="main-article">
        <div class="article-pageBuy">

            @foreach($article as $val)
            <form id="makeOrderForm" method="POST" action="/makeOrder">
                {{csrf_field()}}
                <div class="makeOrderContent">
                    <div class="formOrder"><label>Your name:</label><input name="nameOrder" class="formOrderInp orderName" placeholder="Your name" type="text"></div>
                    <div class="formOrder"><label>Email:</label><input name="emailOrder" placeholder="Your email"  class="formOrderInp orderEmail" type="text"></div>
                    <div class="formOrder"><label>Mobile number:</label><input name="numberOrder" placeholder="More than 8 symbols" class="formOrderInp orderNumber" type="text"></div>
                    <input onclick="ValidateOrder()" type="button" name="makeOrder" class="makeOrderBut" value="Make an order">
                    <input type="hidden" name="id_book" value="{{$val->id}}">
                </div>
            </form>

                    <div class='articleTitle' >{{$val->tittle}}</div>
                    <div class="priceBlock">
                        <p class="priceOrderOForm">{{$val->price}} $</p>
                        <img  class='imgArticleShow' src={{ asset('storage/'.$val->image) }}>
                    </div>
                    <output class='outputArticle-pageBuy'>{{$val->text}}</output>
                    <div class='articleAuthor'>{{$val->author}}</div>
                    <div class='articleDate'  >{{$val->date}}</div>

            @endforeach
        </div>
    </div>
</main>


<footer>
    <div class="footer-content">
        <p   style="text-align: center; color: white; margin-top: 10px; font-size: 14px">tel: +380999302216</p>
    </div>
</footer >


<script src="{{URL::asset('/js/script.js')}}"></script>
</body>
</html>
