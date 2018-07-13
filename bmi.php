<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>BMI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<script src="main.js"></script>
	</head>
	<body>
		<br/><br/>
		<div class="container">
			<?php
			
				$wzrost = $_POST['wzrost'];
				$waga = $_POST['waga'];
				if ($wzrost && $waga){
				echo "Wzrost: " . $wzrost . " - " . "Waga: " . $waga . " Prawidlowe bmi 18 - 24,99";
				echo "<br/><hr/>";
				$wMetry = $wzrost/100;
				$bmi = ($waga)/pow($wMetry, 2);
				$roundBmi = round($bmi, 3);
				if ($bmi < 18) {
					echo "Niedowaga, twoje bmi: " . $roundBmi;
				} else if ($bmi >= 18 && $bmi <= 24.99) {
					echo "Waga prawidlowa, twoje bmi: " . $roundBmi;
				} else if ($bmi > 24.99) {
					echo "Nadwaga, twoje bmi: " . $roundBmi;
				} else echo "zle dane";
				echo "<br/><br/>";
				echo '<a 
					style="text-decoration: none;
					font-size: 18px; color: blue";
					href="index.php">powrot
					</a>';
			}
			else{
				echo "Podaj prawidłowe dane!";
				echo "<br/><hr/>";
				echo "Sprawdz czy wypelniles prawidlowo wszystkie pola.";
				echo "<br/><br/>";
				echo '<a 
					style="text-decoration: none;
					font-size: 18px; color: blue";
					href="index.php">powrot
					</a>';
			}
			?>
		</div>
	</body>
</html>


