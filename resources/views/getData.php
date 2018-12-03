<?php
?>
<!DOCTYPE html>
<html>
  <head>
     <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="styles.css">
  </head>
  <body>
      
      <div class="pure-menu pure-menu-horizontal toolbar-custom">
    <a href="#" class="pure-menu-heading pure-menu-link">HOME</a>
    <ul class="pure-menu-list ">
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Summary</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Install</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tutorial</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Results</a></li>
        <li class="pure-menu-item"><a href="page5.html" class="pure-menu-link">Conclusion</a></li>
        <li class="pure-menu-item"><a href="page6.html" class="pure-menu-link">Credits</a></li>
    </ul>
  </div>
<?php
//print_r($_POST);
$whichPerson = $_POST['name'];
?>
<div class="contributors">
    
    <?php
    if($whichPerson == "Gabriel")
    {
    ?>
    <div class="Gabriel">
        <img src="p1.png"> 
        <p>Gabriel did Conclusion page and Credits page</p>
        <p>
            <ul>Strengths: 
                <li>Programming</li>
                <li>Design</li>
            </ul>
            <ul>Hobbies: 
                <li>Gaming</li>
                <li>Basket</li>
            </ul>
        </p>
    </div>
    <?php
    }
    ?>
    <?php
    if($whichPerson == "Ali")
    {
    ?>
        <img src="p2.png"> 
      <div class="Ali">
        <p>Ali did Tutorial page and Results page</p>
       <p>
            <ul>Strengths: 
                <li>Programming</li>
                <li>Conceptual design</li>
            </ul>
            <ul>Hobbies: 
                <li>Food</li>
                <li>Work</li>
            </ul>
        </p>
    </div>
     <?php
    }
    ?>
    <?php
    if($whichPerson == "Ramtin")
    {
    ?>
    <div class="Ramtin">
        <img src="p3.png"> 
    
        <p>Ramtin did Install page and Summary page</p>
     <p>
            <ul>Strengths: 
                <li>Backend programming</li>
                <li>Design</li>
            </ul>
            <ul>Hobbies: 
                <li>Reading</li>
                <li>Studying</li>
            </ul>
        </p>
    
    </div>
     <?php
    }
    ?>
</div>
      <div>
          <form action="getData.php" method="POST">
              Please enter the First Name:<input type="text" name="name">
              <input type="submit" value="Get Additional Data" class="pure-menu-link">
          </form>
          <div id="addData">
              
          </div>
      </div>
  </body>
</html>
<?php
?>