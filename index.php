<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./style.css" type="stylesheet">
    <title><?php echo "NHRE";?></title>
    <style>
      .box{
        border: 1px solid black;
        margin-top: 5px;
        margin-left: 5px;
        margin-bottom: 5px;
        margin-right: 5px;
        border-radius: 10px;
      }
    </style>
  </head>
  <body>
  <?php include 'navbar.php';?>
<div class="container">
  <h5 style="margin-top: 20px;margin-bottom: 20px;width: 100%;"> 
    NHRE trust is non profit organization. We are looking forward to 
    a well-educated and peaceful society by helping 
    to each others to bring a better future of all childrens and velnurable communities.
</h5>
<div id="carouselExampleIndicators" class="carousel slide w-50 m-auto" data-bs-ride="carousel" style="border-radius: 30px;">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="./assets/images/slide1.jpg" class="d-block " alt="..." style="height:400px;width:100%;">
</div>
<div class="carousel-item">
<img src="./assets/images/slide2.jpg" class="d-block " alt="..." style="height:400px;width:100%;">
</div>
<div class="carousel-item">
<img src="./assets/images/slide3.jpg" class="d-block " alt="..." style="height:400px;width:100%;">
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>

<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
<div class="col box">
<h1>Our Mission</h1>
<p> Provide financial support and school material to the poor child for education empowerment. also we arrange scholarships for the students. We arrange program's for child education awareness.</p>

</div>
<div class="col box">
<h1>Our Focus</h1>
  <ul>
    <li>Child Education</li>
    <li>Women Empowerment</li>
    <li>Street Animal</li>
    <li>Green nature</li>
  </ul>
</div>
<div class="col box">
<h1>Our Vision</h1>
<p>Our vision is to provide education to the every poor student and make women empowerment also make nature 
Green by plantation and save street dogs .
</p>

</div>
</div>
</div>

<?php include 'footer.php';?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>