<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Log in</title>
</head>
<body>
    <style>body {
  background: linear-gradient(white,green);
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-bottom: 100px;
  font-size:15px;
  text-align: center;
 
}
#forma{
  height: 350px;
    opacity: 0.8;
    color: white;
    border-radius: 10px;
    margin-top: 10%;
    border: 3px solid #555;
    background-color: lightgreen;
    background-position: 10px 10px;
    width: 100%;
  padding: 16px 20px;
  border-radius: 4px;


}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
<?php include 'header.php'; ?>
<div id="forma">
<form action="">
<input type="text" name="ucenikid" placeholder="Vaš e-mail"/> <br>
<input type="text" name="ime" placeholder="Vaša lozinka"/><br>
<input type="submit" name="posalji" value="Prijavi se"/>
</div>

<?php include 'footer.php'; ?>  

</body>
</html>