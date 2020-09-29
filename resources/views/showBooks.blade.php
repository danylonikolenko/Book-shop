
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

    </nav>

    @include("myAccountModal")
    @include("articleAddModal")
    @include("loginModal")
    @include("registrationModal")
    @include("changeArticle")



    <div class="main-article">
        <div class="article-pageUser">

            @foreach($orders as $val)
                <form method="POST" action="{{ url("changeUser/$val->id_order")}}">
                    {{csrf_field()}}
                    <div class="userShow">

                        <p class="userField">Name: {{$val->name}}</p>
                        <p class="userField">email:{{$val->email}}</p>
                        <p class="userField">Num: {{$val->number}}</p>
                        <p class="userField">Book:  {{$val->tittle}}</p>
                        <p class="userField">Price:  {{$val->price}}</p>

                </form>

            @endforeach




        </div>


    </div>
</main>


<footer  >
    <!-- Copyright -->
    <div class="footer-content">

        <p   style="text-align: center; color: white; margin-top: 10px; font-size: 14px">tel: +380999302216</p>
    </div>

</footer >
<script src="{{URL::asset('/js/script.js')}}"></script>
</body>
</html>

