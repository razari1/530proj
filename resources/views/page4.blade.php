<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Panda World</title>
      <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
      <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
       
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
   
     
     <h1  class="title">Panda World</h1>

         <article>
            <h2>Fun Facts</h2>
            <p>The life span of  pandas in the wild is 20 years.</p>
            <p>The eyespots of a giant panda cub are initially in the shape of a circle but transfrom into teardrop as they age.</p>
            <p>Pandas are pigeon-toed.</p>
            <p>Skin under the black fur is black but under the white fur its pink.</p>
            <p>Pandas have a good sense of smell.</p>
            <p>Pandas are the symbol of the conservation organization WWF.</p>
            <p>In China the pandas are considered national treasure.</p>
         </article>
<div>
      
      <table class="pure-table" align="center">
        <thead>
          <tr>
          <th>Main Zoo of the country</th>
          <th>Number of male Pandas</th>
          <th>Number of female Pandas</th>
          </tr>
        </thead>
        <tbody>
          <tr class="pure-table-odd">
          <td>China</td>
          <td>50</td>
          <td>53</td>
          </tr>
          <tr>
          <td >Japan</td>
          <td>94</td>
          <td>95</td>
          </tr>
          <tr class="pure-table-odd" >
          <td>USA</td>
          <td>80</td>
          <td>78</td>
          </tr>
          <tr>
          <td >Total</td>
          <td colspan="2">500</td>
          </tr>
        </tbody>
        </table>
          </div>
         <figure>
          <img class="center" src="{{ URL::asset('images/panda3.jpg') }}" alt=black  height="400" >
        </figure>

   </body>
</html>
