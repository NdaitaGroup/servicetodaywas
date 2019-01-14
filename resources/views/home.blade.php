<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>#STW KINGS HOTEL AND GALLERYS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>

<!-- Header -->
<header id="header">
    <div class="inner">
        <a href="/" class="logo" > <img src="images/logo.jpg" alt="Pic 01" /><strong>KINGS HOTEL AND GALLERY</strong></a>
        <nav id="nav">
            <a href="/">Home</a>

        </nav>
        <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
    </div>
</header>

<!-- Banner -->
<section id="banner">
    <div class="inner">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('status') }}
            </div>
        @endif
        <header>
            <h1>Welcome to kings Hotel and Gallery </h1>
        </header>

        <div class="flex ">



            <div>
                <div class="image round">
                    <img src="images/pic01.jpg" alt="Pic 01" />
                </div>

            </div>



        </div>

        <footer>
            <a href="#" class="button">Take a look at our specials</a>
        </footer>
    </div>
</section>


<!-- Three -->
<section id="three" class="wrapper align-center">
    <div class="inner">
        <div class="flex flex-2">
            <article>
                <div class="image round">
                    <img src="images/pic01.jpg" alt="Pic 01" />
                </div>
                <header>
                    <h3>kings Hotel and Gallery<br /></h3>
                </header>


            </article>
            <article>
                <div class="image round">
                    <img src="images/pic4.jpg" alt="Pic 02" />
                </div>
                <header>
                    <h3>#STW<br /></h3>
                </header>


            </article>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="inner">

        <h3>How was our todays service</h3>

        <form action="{{route('post.rating')}}" method="post">
            @csrf
            <div class="field half first">
                <label for="name">Enter Your Unique rating code</label>
                <input name="code" id="code" type="text" placeholder="rating code">
            </div>
            <div class="field half">
                <label for="email">Email</label>
                <input name="email" id="email" type="email" placeholder="Email">
            </div>
            <div class="field">
                <label for="message">Comment</label>
                <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
            </div>
            <ul class="actions">
                <li><input value="Send Comment" class="button alt" type="submit"></li>
            </ul>
        </form>



    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</body>
</html>