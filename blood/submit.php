<?php
include("connection.php");
?>
<html>
    <head>
        <title>submit form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .out
            {
                color: crimson;
                text-align: center;
                text-decoration: dotted;
                text-shadow:90px
            }
            .in
            {
                color:darkgreen;
                text-align: left;
            }
            .btn-xl {
    padding: 30px 20px;
    font-size: 30px;
    border-radius: 10px;
}
.margin-left
{
    margin-left: 10px !important;  
}
        </style>
    </head>
    <body>
        <div class="out"><h1>WELCOME TO BLOOD BANK....</h1></div>
        <div class="in"><h2>HOW CAN WE HELP YOU!!!!</h2></div><br><pre></pre>
        <div class="container">
            <div class="row">
              <div class="col text-left">
                <a href="donarreg.php"><button class="btn btn-danger btn-xl margin-left"> DONAR REGISTRATION </button></a>
                <button class="btn btn-danger btn-xl"> STOCK DETAILS </button>
                <button class="btn btn-danger btn-xl">EXCHANGE BLOOD DETAILS </button><pre></pre><br>
                <button class="btn btn-danger btn-xl"> DONAR DETAILS</button>
                <button class="btn btn-danger btn-xl"> DONAR REGISTRATION </button>
              </div>
            </div>
          </div>

          <br><pre></pre>
          <div class="container">
          <footer>
            address:
            I.Deepthi priya<br>
            contact-us:8328535978
          </footer>
          </div>
    </body>