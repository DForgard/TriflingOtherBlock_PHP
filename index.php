<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p><i>Hello Buddy, </i></p><br>';
      echo '<p><b>Voici la liste de vos animaux préférés :</b></p>';
      $animals = ['Lion', 'Chat', 'Chien', 'Cheval', 'Tigre', 'Singe']; // Ici, nous avons un tableau de 6 animaux
      echo '<ul>';
      foreach ($animals as $animal) { // On construit une balise <li></li> par animal, qui contient son nom
        echo '<li>'.$animal.'</li>';
      }
      echo '</ul>';
   
    $login = 'David';
    echo $login.", il y a ".count($animals). ' animaux dans votre liste !</p><br>' 
  ;
    $greeting = 'Bonne journée ';
    $sentence = $greeting;
    $sentence .= $login;
    echo $sentence
  
?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>