<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="./style.css" type="stylesheet">
  <title>NHRE</title>
  <style>
    .contactbox {
      width: 300px;
      height: 200px;
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
      border: 1px solid palevioletred;
      border-radius: 20px;
    }
    
  </style>
</head>

<body>
<?php include 'navbar.php';?>
  <div class="container mt-5"
    style="min-width: 100vw;min-height: 80vh; display: flex;justify-content: center;align-items: center;">
    <div class="row">
      <div class="col-sm-4 col-12 ">
        <div class="contactbox">
          <img src="./assets/icons/location.jpg" alt="" style="width: 50px;height: 50px;">
          <h4>Address</h4>
          <p style="padding: 18px;">NHRE TRUST
            S.No. 48/2 , Manajinagar,
            Narhe,Pune-411041
            </p>
        </div>
      </div>
      <div class="col-sm-4 col-12">
        <div class="contactbox">
          <img src="./assets/icons/mobile.png" alt="" style="width: 50px;height: 50px;">
          <h4>Mobile</h4>
          <p>9665252471</p>
        </div>
      </div>
      <div class="col-sm-4 col-12 ">
        <div class="contactbox">
          <img src="./assets/icons/mail.png" alt="" style="width: 50px;height: 50px;">
          <h4>Email</h4>
          <p>nhretrust2021@gmail.com</p>
        </div>
      </div> 
    </div>
  </div>


  <?php include 'footer.php';?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>