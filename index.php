<?php 

include('counter.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.rawgit.com/mrdoob/three.js/r128/build/three.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>portefolio</title>
    <script></script>
</head>
<body >
    <header>
        <a>samuel durand</a>
        <p>Nombre de visite <?php echo $nombre_total_de_vues; ?></p>
    </header>

        <script>
      // Rafraîchissement automatique de la page toutes les 5 minutes (300000 millisecondes)
      setTimeout(function(){
        location.reload();
    }, 300000);
    </script>
<div id="test">

  <div class="content">
    <div class="wrapper">
      <div class="box">
        <div class="img">
            <img src="./114388132.jpg">
            <p>Develepper Web junior ,<br> en formation à la plateforme</p>
        </div>
      </div>
    </div>
            <h1>Projets Réaliser</h1>
            <p>cliquer sur l'image pour voir le projet</p>
            <section id="projects">
                <div class="project">
                  <p>module de connexion mysqli</p>
                  <a href="https://samuel-durand.students-laplateforme.io/module-connexion/inscription.php" target="_blank"><img class="image" src="./module connexion.PNG"></a>
                </div>
                <div class="project">
                  <p>livre d'or php</p>
                  <a href="https://samuel-durand.students-laplateforme.io/livre-or/" target="_blank"><img  class="image"src="./livre d'or.PNG"></a>
                </div>
                <div class="project">
                  <p>boutique Wordpress</p>
                  <a href="https://samuel-durand.students-laplateforme.io/mycms/" target="_blank"><img class="image" src="./boutique wordpress.PNG"></a>
                </div>
                <div class="project">
                  <p>clicker game</p>
                  <a href="https://samuel-durand.students-laplateforme.io/clicker/" target="_blank"><img class="image" src="./ffff.PNG" alt=""></a>
                </div>
                <div class="project">
                  <p>Livre d'or asynchrone</p>
                  <a href="https://samuel-durand.students-laplateforme.io/livre%20or/index.php" target="_blank"><img class="image" src="./fezeee.PNG" alt=""></a>
                </div>
                <div class="project">
                  <p>Autocomplétion</p>
                  <a href="https://samuel-durand.students-laplateforme.io/Autocompl%c3%a9tion/" target="_blank"><img  class="image" src="./autocompletion.PNG" alt=""></a>
                </div>
                <div class="project">
                  <p>module de connexion async</p>
                  <a href="https://samuel-durand.students-laplateforme.io/Projet/register.php" target="_blank"><img class="image" src="./module async.PNG" alt=""></a>
                </div>
                <div class="project">
                  <p>Todo List asynchrone</p>
                  <a href="https://samuel-durand.students-laplateforme.io/todolist/tdl/index.php" target="_blank"><img class="image" src="./todo list.PNG" alt=""></a>
                </div>
                <div class="project">
                  <p>O'CLOCK</p>
                  <a href="https://samuel-durand.students-laplateforme.io/oclock/" target="_blank"><img class="image" src="./o'clock.PNG" alt=""></a>
                </div>
                <div class="project">
                    <p>Metéo api</p>
                    <a href="https://samuel-durand.students-laplateforme.io/meteo/"><img class="image" src="meteo.PNG" alt=""></a>
                </div>
              </section>
   </div>

   <script src="animation.js"></script>
    <footer>
      <ul>
        <li><a href="">github</a></li>
      </ul>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
<script>
VANTA.BIRDS({
  el: "#test",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00
})
</script>
</div>

</body>
</html>