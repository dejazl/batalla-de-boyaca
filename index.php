<!DOCTYPE html>
<html>
<head>
	<title>Batalla de Boyacá</title>
	<link rel="stylesheet" type="text/css" href="cauca.css">
</head>
<body>
	<center>
		<h1>Batalla de Boyacá</h1>
		<h3>¡grito de libertad!</h3>
		<div class="claro"><img src="no.gif"></div>
		<div class="movistar"><img src="see.png"></div>


	

	<div><img src="si.jpg"></div>
	<form action="index.php" method="POST">
    
    <input type="submit" name="acandi" class="uno" value="">
    <input type="submit" name="quibdo" class="dos" value="">
    <input type="submit" name="iro" class="tres" value="">
    <input type="submit" name="riosucio" class="cuatro" value="">
   </form>

   <h5>presione los botones de colores para interactuar</h5>
    </center>
<?php  
if (isset($_POST['acandi'])) {
	echo "El Campo de Boyacá, ​​​ comúnmente conocido como el Puente de Boyacá es un monumento declarado Patrimonio Cultural de la Nación y pertenece al Distrito Histórico y Cultural de la ciudad de Tunja en el municipio de Ventaquemada, es la representación de la batalla de independencia de colombia llevada a cabo el 7 de agosto de 2020";
}
if (isset($_POST['quibdo'])) {
	echo "Bajo el mando de Simón Bolívar, la Campaña Libertadora consiguió una victoria contundente en la Batalla del Puente de Boyacá, evento que determinó la independencia colombiana, su estrategia de atacar por sorpresa al ejercito realista fue clave para ganar la batalla";
}
if (isset($_POST['iro'])) {
	echo "a pesar de sus constantes disputas con bolivar, es considerado el heroe de Boyacá, pues con su división de retaguaria acorraló a el general realista, jose maria barreiro y lo obligó a enfrentarse con la división de bolivar, la estrategia y el edebilitamiento progresivo de las tropas fueron claves en esta disputa";
}
if (isset($_POST['riosucio'])) {
	echo "Este acontecimiento tuvo lugar el día 7 de agosto de 1819 en el cruce del río Teatinos, en inmediaciones de Tunja. La batalla finaliza con la rendición en masa de la división realista, y fue la culminación de 78 días de campaña iniciada desde Venezuela por el Libertador Simón Bolívar para independizar la Nueva Granada.";
}




?>
</body>
</html>