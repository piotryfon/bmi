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
        <h4>Oblicz bmi!</h4>
        <form action="bmi.php" method="post">
			podaj swój wzrost w cm:
            <input name="wzrost" type="number" >
			<br><br>
			podaj swoją wagę w kg:
            <input name="waga" type="number" />
            <br/><br/>
            <input type="submit" name="policz" value="policz"/>
        </form>
		
    </div>
    
</body>
</html>