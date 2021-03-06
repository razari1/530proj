 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tutorial</title>

      <link rel="stylesheet" href="{{ URL::asset('css/style2.css') }}">
      <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
      
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
    
    
    
  <div class = "content">
  <h1>How to create webpage using skeleton and pureCSS</h1>
  <ol>
  <li>First copy paste the html shell from this site</li><br>
  <div class="scrollpane">
    <xmp><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>

  </body>
</html></xmp>

</div><br>
  <li>Next reference the pure css and skeleton style sheets respectively</li><br>
    <div class="scrollpane" style=height:75px;>
      <xmp> <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"></xmp>
    </div><br>

  <li>All normal tags in html are going to be style by the skeleton</li><br>
  <iframe width="500" height="315" src="https://www.youtube.com/embed/nVANwdryGVc">
  </iframe>
  <br><br>

  <li>To use pure you need to add class="pure-WhateverYouNeed" ie class="pure-button". In the following demo pure table is used.</li><br>
  <div class="scrollpane">
    <xmp><table class="pure-table" align="center">
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
    </xmp>
  </div><br>
  </ol>
  </div>


</body>

</html>
