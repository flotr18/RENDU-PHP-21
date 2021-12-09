<!DOCTYPE html>

<html>


<head>

	<title>Site pour l'IIM le 9 Décembre 2021</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css.css">

</head>


<body>
<header>

	<div class="container">
	  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
		<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
		  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>

		</a>
		
        <?php include 'bar-nav.php';?>

	  </div>


</header>
	</div>
	


<center>
<div class="login">
    <form method="post" action"#"> <!-- dans action mettre l'url de destination -->
    <input type="text" placeholder="Identifiant" id="username"> 
    <input type="password" placeholder="Mots de Passe" id="password"> 
    <a href="#" class="forgot">Mots de Passe oublié</a>
    <input type="submit" value="connexion">
    </form>
    </div>
    <div class="shadow"></div><br>


<img src="https://media.melty.fr/article-4687070-thumb/media.jpg" alt="Product" height="500" width="800"/><br><br>
</center>

</body>
</html>