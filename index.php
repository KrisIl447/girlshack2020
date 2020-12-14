<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Početna</title>
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
#osnovno2{
    width: 100%;
    float: left;
    /*margin-top: 170px;*/
    background: radial-gradient(#d9d9d9,#fff);
    text-align: center;
    margin-top: 5%;
    margin-bottom: 5%;
    border-radius: 50px;
    opacity: 0.8; 
    font-family: 'Cormorant Garamond', serif;
    font-size: 20px;
    color: black;
    z-index: auto;
   
    /*z-index: 0;*/
}
</style>

<?php include 'header.php'; ?>
    <div id="naslov">
        <h1>Green family</h1>
    </div>

    <div id="app">
        <h5>Skini <a href="">našu aplikaciju</a> i učini svoju okolinu lepšom i zdravijom.</h5>
        
    </div>
    <div id="oNama" >
             <article id="osnovno2">

                <section id="oNamaNaslov">
                 <h1>O nama</h1>
                </section>

                <section id="text">
                  <p>
                  Math is cool5 je privatna škola matematike koja pomaže učenicima da savladaju gradivo
                koje uče u školi i dobiju ocene koje žele. Već godinu dana vredno radimo i zajedno postižemo
                odlične rezultate. Radimo sa decom iz Srbije, Bosna i Hercegovine, Crne Gore i Hrvatske. 
                  <i>Postani i ti deo naše porodice!</i>                  </p>     
                <img data-u="thumb" src="imgs/drvo.jpg" width="500" height="356" />   
                <hr>     
                </section> 
              </article> 
          </div>
    <?php include 'footer.php'; ?>
</body>
</html>