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
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tutorial</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Results</a></li>
        <li class="pure-menu-item"><a href="/page5" class="pure-menu-link">Conclusion</a></li>
        <li class="pure-menu-item"><a href="/page6" class="pure-menu-link">Credits</a></li>
    </ul>
  </div>
      
      <h1>How To Install:</h1>
      <img src="{{asset('images/purecss.png')}}">
      
    <div class="mycontent">
      <p>All you need to do to install Pure is simply add the following &lt;link&gt; tag to each page's &lt;head&gt; section:</p>
      <p><i>&lt;link rel=&quot;stylesheet&quot; href=&quot;https://unpkg.com/purecss@1.0.0/build/pure-min.css&quot; integrity=&quot;sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w&quot; crossorigin=&quot;anonymous&quot;&gt;</i></p>
    </div>
    <br>

    <img src="{{asset('images/lara.png')}}">
    <div class="mycontent">
      <ol>
        <li>Set up a Ubuntu server with the LEMP stack (Linux, Nginx, MySQL, PHP) installed on it.</li>
	<li>Install the PHP multi-byte string support & XML support extensions, as well as the dependency manager <i>Composer</i></li>
	<li>Create a MySQL database along with a new user to allow your web site to access it.</li>
	<li>Download the Laravel Installer using Composer, then use the "laravel new appname" command to create a new Laravel project with the name <i>appname</i></li>
	<li>Create a file called <i>.env</i> based on the default template <i>.env.example</i> in your project directory. This will be your environment configuration file, where you set values for variables like environment (local/production), app name, and URL</li>
	<li>Create an Nginx server block configuration file indicating your site's root directory (/var/www/html/appname/public) and domain name under /etc/nginx/sites-available/. Next, create a symbolic link from this file to /etc/nginx/sites-enabled/ and reload Nginx</li>
</ol>
    </div>

  </body>
</html>

