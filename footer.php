<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        .footer{
            width: 100%;
            height: 50px;
            background-color: #8BC6EC;
            background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);

            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
        }

.footer .logo{
    margin-left: 10px;
}
.footer .copyright{
    margin-right: 10px;
}
.footer .tab a{
    text-decoration: none;
    color: white;
    margin-right: 15px;
    border: 1px solid black;
    padding: 5px;
    border-radius: 5px;
}
.footer .tab a:hover{
    padding: 8px;
    border-radius: 3px;
    background-color: #8EC5FC;
    background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);

}
.logo img{
    height: 40px;
    width: 40px;
}
    </style>
</head>
<body>
<div class="footer">
    <div class="logo">
        <img src="./assets/images//logo.png" alt="">
    </div>
    <div class="tab">
        <a href="./index.php">Home</a>
        <a href="./gallary.php">Gallary</a>
        <a href="./contact.php">Contact</a>
    </div>
    <div class="copyright">
    <p>© 2021 NHRE</p>
    </div>
</div>
</body>
</html>
