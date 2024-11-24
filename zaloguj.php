<?php
session_start();
if (!isset($_SESSION['logged_in']) || ($_SESSION['logged_in'] === false)) 
{
    header("Location: stronasiudma.php");
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stronasiudma.css">
</head>
<body>
    
    <p>Jesteś zalogowany</p>
	
	<?php
		$imie = $_SESSION['imie'] ;
		echo "Imię: ".$imie."<br/>" ; 
		$nazwisko = $_SESSION['nazwisko'] ;
		
		echo "Nazwisko: ".$nazwisko."<br/>" ; 
		$ulica = $_SESSION['ulica'] ;
		echo "Ulica: ".$ulica."<br/>" ; 
		$dom = $_SESSION['dom'] ;
		echo "Dom: ".$dom."<br/>" ; 
		$mieszkanie = $_SESSION['mieszkanie'] ;
		echo "Mieszkanie: ".$mieszkanie."<br/>" ;
		$telefon = $_SESSION['telefon'] ;
		echo "Telefon: ".$telefon."<br/>" ; 
		$dataurodzenia = $_SESSION['dataurodzenia'] ;
		echo "Data urodzenia: ".$dataurodzenia."<br/>" ; 
		
		$prawojazdy = $_SESSION['prawojazdy'] ;
		echo "Prawo jazdy: ".$prawojazdy."<br/>" ; 
		$plec = $_SESSION['plec'] ;
		echo "Płeć: ".$plec."<br/>" ; 
		
		
		
		$miasto = $_SESSION['miasto'] ;
		echo "Miasto: ".$miasto."<br/>" ;
		$panstwo = $_SESSION['panstwo'] ;
		echo "Państwo: ".$panstwo."<br/>" ; 			
	?>
	
	<br/>
	<br/>
	<br/>
    <a href="wyloguj.php">Wyloguj się</a>
</body>
</html>
