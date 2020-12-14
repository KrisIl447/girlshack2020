<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-grid.css">
    <link rel="stylesheet" href="gallery-grid.css">
    <title>Kompanije</title>
</head>
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
<body>
<?php include 'header.php'; ?>

    <div class="container gallery-container">

        <h1>Naši sponzori</h1>
        <div class="container gallery-container">
        <p class="page-description text-center"></p>
        
        <div class="tz-gallery">
    
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="imgs/ikea.jpg">
                        <img src="imgs/ikea.jpg" alt="sl1">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="imgs/idea.jpg">
                        <img src="imgs/idea.jpg" alt="sl2">
                    </a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a class="lightbox" href="imgs/adidas.jpg">
                        <img src="imgs/adidas.jpg" alt="sl3">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="imgs/delhaize.jpg">
                        <img src="imgs/delhaize.jpg" alt="sl4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="imgs/dm.jpg">
                        <img src="imgs/dm.jpg" alt="sl5">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="imgs/amg.jpg">
                        <img src="imgs/amg.jpg" alt="sl6">
                    </a>
                </div>
                
            </div>
    
        </div>
    
    </div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- ************-->



 <!-- ************-->
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<script src="navbar.js"> </script>
</body>
</html>