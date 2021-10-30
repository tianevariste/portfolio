<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <nav>
        <div class="on">
            <img src="https://scontent.fabj4-1.fna.fbcdn.net/v/t1.6435-9/95726192_288261849005887_1715513103136849920_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=174925&_nc_ohc=TDaVFVmhjuoAX_YZXwH&_nc_oc=AQmcepRdgfamLy5nL3gwZ6861uSe1tMUtImMgKLGldeciN92qhKua8k5BbtMZnHwmvo&_nc_pt=1&_nc_ht=scontent.fabj4-1.fna&oh=55e5793da76a064da1acb69f847afc9a&oe=618E0BE9" alt="mon image">
            <h1>Tian ta zimbou evariste</h1>
        </div>
        <ul>
            <a href="https://www.facebook.com/evariste.tian/" target="blank"><li>Facebook</li></a>
            <a href="#mes projets"><li>Mes projets</li></a>
            <a href="https://tianevariste.github.io/tian.github.io/" target="blank"><li>Curriculum Vitae</li></a>
            <a href="#"><li>Mon blog</li></a>
        </ul>
    </nav>
    <section class="page-content">
        <header>
            <h1>Hello, je suis un technicien en réseaux informatiques et telecoms </h1>
                <p>
                  Avec les bonnes choses dites, il est facile de fuir les plaisirs de la haine elle-même, aucun architecte pour échapper aux difficultés dont le temps a besoin ! Nous pensons que nous devrions être choisis parce que nous visons des objetifs hauts.

				</p>
			</header>

			<section class="presentation-image">
				<img src="https://blog.ubaldi.com/wp-content/uploads/2019/01/image-couv-high-tech-1240x503.jpg" alt="AI image" />
			</section>

			<section class="projects-section">
				<h1 id="mes projets" style="text-decoration: underline;">Projets réalisés</h1>
				<div class="projects">
					<div class="project">
						<h4>Un Curriculum Vitae en html et css</h4>
						<p class="dates">Dates 2021</p>
					</div>
					<div class="project">
						<h4>Maquette d'un site web et d'un Portfolio</h4>
						<p class="dates">Dates 2021</p>
					</div>
				</div>
			</section>
		</section>

		<footer>
			<div class="colonne">
				<h3>Mes services</h3>
				<p>Développement de projet Web</p>
				<p>créateur de maquette</p>
			</div>
			<div class="colonne">
				<h3>Mes adresses</h3>
				<p>tianevariste990@gmail.com</p>
			</div>
			<?php

    $connect= new PDO("mysql:host=localhost;dbname=formulaire","root","") or die("Erreur");
    $mysql_select_db =("formulaire") or die("La base de donnée est introuvable.");
    if($_POST){
        $msg_mail = $_POST['msg_mail'];
        $msg_contenu = $_POST['msg_contenu'];
        if(!empty($msg_mail) AND !empty($msg_contenu)){
            $mysql_query = ('INSERT INTO tuto (msg_mail, msg_contenu) VALUES ("'.$msg_mail.'","'.$msg_contenu.'")') or die('Erreur:'.mysql_error());
            $connect->query($mysql_query);
            echo "ok";
        }else {
            echo "Erreur, un ou plusieurs champs sont vide.";
        }
    }
    ?>
    <form method="post" action="">
       <label for="msg_mail">EMAIL <div class="email"><input type="email" name="msg_mail" id="msg_mail"></div></label> 
        <label for="msg_contenu">PRECCUPATIONS <div class="objet"><textarea name="msg_contenu" id="msg_contenu" cols="30" rows="10"></textarea></div></label>
        <input type="submit" value="Envoyer">
    </form>
		</footer>
	</body>

</html>