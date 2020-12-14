<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mapa</title>
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
 
}</style>

<?php include 'header.php'; ?>
    <div id="mapa">
    <h1>Na ovim lokacijama možeš da odložiš svoj otpad</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d181139.3549118124!2d20.282511569463374!3d44.81540328995773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aa3d7b53fbd%3A0x1db8645cf2177ee4!2z0JHQtdC-0LPRgNCw0LQsINCh0YDQsdC40ZjQsA!5e0!3m2!1ssr!2sba!4v1607957998175!5m2!1ssr!2sba" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>