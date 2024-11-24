<?php
session_start(); 

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: zaloguj.php");
    exit();
}
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    
	
	$username = $_POST['username'] ;
    $password = $_POST['password'] ;
    $imie = $_POST['Imie'] ;
    $nazwisko = $_POST['Nazwisko'] ;
    $ulica = $_POST['Ulica'] ;
    $dom = $_POST['Dom'] ;
    $mieszkanie = $_POST['Mieszkanie'] ;
    $telefon = $_POST['Telefon'] ;
    $dataurodzenia = $_POST['DataUrodzenia'] ;
    $miasto = $_POST['Miasto'] ;
    $panstwo = $_POST['Państwo'] ;
	
	if (isset($_POST['PrawoJazdy'])) 
	{
        $prawojazdy = "Posiada";  
    } 
	else 
	{
       $prawojazdy = "Nie posiada"; 
    }
	
	if ($_POST['plec'] === "1")
	{
		$plec = "Mężczyzna" ;
	}
	if ($_POST['plec'] === "2")
	{
		$plec = "Kobieta" ;
	}
	if ($_POST['plec'] === "3")
	{
		$plec = "Użytkownik nie podał" ;
	}
	
	
	
    
    $correct_username = "KapitanBomba123";
    $correct_password = "12345678";

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['logged_in'] = true; 
        $_SESSION['username'] = $username;
		$_SESSION['imie'] = $imie ;
		$_SESSION['nazwisko'] = $nazwisko ;
		$_SESSION['ulica'] = $ulica ;
		$_SESSION['dom'] = $dom ;
		$_SESSION['mieszkanie'] = $mieszkanie ;
		$_SESSION['telefon'] = $telefon ;
		$_SESSION['dataurodzenia'] = $dataurodzenia ;
		$_SESSION['prawojazdy'] = $prawojazdy ;
		$_SESSION['plec'] = $plec;
		$_SESSION['miasto'] = $miasto ;
		$_SESSION['panstwo'] = $panstwo ;
		
		
        header("Location: zaloguj.php");
        exit();
    } 
	else 
	{
       $error = "Niepoprawny login lub hasło!";
    }  
	
}

?>



<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="stronasiudma.css"/>
	</head>
	
	
	
	<body>
		<?php 
			if ($error!=="")
			{
				echo $error;
			}
		?>
		
		<form method="POST" action="stronasiudma.php">
			<div class="reset">
				<label for="login" class ="dwa"> 
					Login:
				</label>
				<input type="text" id="login" value="KapitanBomba123" class ="dwa" name="username">
			</div>
			<div class="reset">
				<label for="haslo" class ="dwa">
					Hasło:
				</label>
				<input type="password" id="haslo" value="12345678" class ="dwa" name="password">
			</div>
			<br/>
			<br/>
			<br/>

			
			
			
			
			<div class="reset">
				<label for="fimie" class ="dwa">
					Imię:
				</label>
				<input type="text" id="fimie" class ="dwa" value="Kapitan" name="Imie">
			</div>
			
			
			
			
			<div class="reset">
				<label for="fnazwisko" class="dwa">
					Nazwisko:
				</label>
				<input type="text" id="fnazwisko" class="dwa" value="Bomba" name="Nazwisko">
			</div>
			
			<div class="reset">
				<label for="fulica" class="dwa">
					Ulica:
				</label>
			
				<input type="text" id="fulica" class="dwa" value="Szkolna" name="Ulica">
			</div>
			
			
			
			<div class="reset">
				<label for="fdom" class="dwa">
					Dom:
				</label>
			
				<input type="number" id="fdom" class="dwa" value="17" name="Dom"/>
			</div>
			
			
			<div class="reset">
				<label for="fmieszkanie" class="dwa">
					Mieszkanie:
				</label>
			
				<input type="number" id="fmieszkanie" class="dwa" name="Mieszkanie"/>
			</div>
			
			<div class="reset">
				<label for="ftelefon" class="dwa">
					Telefon:
				</label>
			
				<input type="tel" id ="ftelefon" class="dwa" value="09227" name="Telefon"/>
			</div>
			
			<div class="reset"> 
				<label for="fdataurodzenia" class = "dwa">
					Data urodzenia:
				</label>
			
				<input type="date" id="fdataurodzenia" class="dwa" value="1945-09-01" name="DataUrodzenia"/>
			</div>
			
			
			<div class="reset">
				<label for="fprawojazdy" class="dwa">
					Prawo jazdy:
				</label>
			
				<input type="checkbox" id="fprawojazdy" class="dwa" name="PrawoJazdy" value="1"/>
			</div>
			

			<div class="reset">
			<label for="plec" class="dwa">
				Płeć:
			</label>
			
			<input type="radio" id="fmenzczyzna" name="plec" class="dwa" checked  value="1">
			<label for="fmenzczyzna" class="dwa">Mężczyzna</label>
			<input type="radio" id="fkobieta" name="plec" class="dwa"  value="2">
			<label for="css" class="dwa">Kobieta</label>
			<input type="radio" id="finna" name="plec"  class="dwa" value="3">
			<label for="finna" class="dwa">Wolę nie podawać</label>
			
			</div>
			
			<div class="reset">
				<label for="fmiasto" class="dwa">
					Miasto:
				</label>
			
				<input type="text" id="fmiasto" class="dwa" value="Zbąszynek" name="Miasto">
			</div>
			<div class="reset">
				<label for="fpanstwo" class="dwa">
					Państwo:
				</label>
			
				<input type="text" id="fpanstwo" class="dwa" value="Albania" name="Państwo">
			</div>
			
			
			
			<div class="reset">
				<input type="submit" value="Zaloguj się">
			</div>
		</form>
		
		<br/>
		<br/>
		<br/>
		<br/>
		
		<a href="kod.html">
			Strona z kodem
		</a>
	</body>
</html>
