<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
         <style>
@import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC');
</style>
  </head>
  <body>
      
  <div class="pure-menu pure-menu-horizontal toolbar-custom">
    <a href="/" class="pure-menu-heading pure-menu-link">HOME</a>
    <ul class="pure-menu-list ">
        <li class="pure-menu-item"><a href="/page1" class="pure-menu-link">Summary</a></li>
        <li class="pure-menu-item"><a href="/page2" class="pure-menu-link">Install</a></li>
        <li class="pure-menu-item"><a href="/page3" class="pure-menu-link">Tutorial</a></li>
        <li class="pure-menu-item"><a href="/page4" class="pure-menu-link">Results</a></li>
        <li class="pure-menu-item"><a href="/page5" class="pure-menu-link">Conclusion</a></li>
        <li class="pure-menu-item"><a href="/page6" class="pure-menu-link">Credits</a></li>
    </ul>
  </div>
      
      <h1>Summary</h1>
      <img src="{{asset('images/purecss.png')}}">
      
    <div class="mycontent">
      <h3>Popularity</h3>
      <p>While not as commonly used as Bootstrap, for example, Pure is a fairly popular framework as it is lightweight and versatile.</p>
      <h3>Strengths</h3>
      <p>Pure's miniscule size of 3.8KB will save you a ton of space, and it's compatible with all web projects since it consists only of CSS. It has a clean and minimal esthetic and is responsive out of the box, similar to Bootstrap.</p>
      <h3>Weaknesses</h3>
      <p>Pure has a limited number of designs and templates compared to most other popular front-end frameworks. It also lacks a substantial development community for support.</p>
      <h3>Who Uses It?/What Kind of Sites?</h3>
      <p>Any developer/site who don't want reduced performance due to the large size of frameworks like Bootstrap would make use of Pure.</p>
    </div>
    <br>

    <img src="{{asset('images/lara.png')}}">
    <div class="mycontent">
      <h3>Popularity</h3>
      <p>Laravel is definitely one of the most popular PHP frameworks right now, with over 47,000 stars on its primary GitHub repository. </p>
      <h3>Strengths</h3>
      <p>Laravel has a relatively easy setup and deployment process compared to many other frameworks. It also has a powerful Query builder & Object-Relational Mapping which makes working with your database very simple.</p>
      <h3>Weaknesses</h3>
      <p>Laravel lacks the scaffolding of MVC (Model-View-Controller) frameworks like Ruby on Rails. You may also encounter more bugs in Laravel as it's still being developed, unlike other PHP frameworks like Zend & Symfony which have been around much longer.</p>
      <h3>Who Uses It?/What Kind of Sites?</h3>
      <p>Laravel is used by many novice developers because of how easy it is to program in PHP, but there are certainly more experienced devs who use it as well. Its versatility means it's used in all different kinds of sites, including social networks, e-commerce sites, and content management systems.</p>
    </div>

  </body>
</html>

