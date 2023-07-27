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
            body{
    background-image: url('');
    background-size:40%;
    background-repeat: no-repeat;
    height:90%;
  }
            

#form{
width:80%;
height:300px;
background-color:red;
color:white;
border-radius:10px;
border-left:20%;
}
.margin-left
{
    margin-left: 10px !important;  
}
        </style>
    </head>
    <body>
        <div class="out"><h1>Donor Registration</h1></div><br><pre></pre>
        <div class="container">
            <div class="row">
              <div class="col text-left">
              <center><div id="form">
                    <table>
                       <tr>
                           <td width="200px" height="50px">Enter Name</td>
                           <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                           <td width="200px" height="50px">Enter Father Name</td>
                           <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Father Name"></td>
                           </tr>
                           <tr>
                            <td width="200px" height="50px">Enter Email</td>
                            <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Email"></td>
                            <td width="200px" height="50px">Enter Mobile Number</td>
                            <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Mobile Number"></td>
                            </tr>
                            <tr>
                                <td width="200px" height="50px">Enter Address</td>
                                <td width="200px" height="50px"><textarea name="address"></textarea>
                                </td>
                                <td width="200px" height="50px">Enter City</td>
                                <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter City"></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Select Blood Group</td>
                                    <td width="200px" height="50px">
                                        <select name="dropdown">
                                            <option value="O+" name="drop" >O+</option>
                                            <option value="O-" name="drop" >O-</option>
                                            <option value="A+" name="drop" >A+</option>
                                            <option value="A-" name="drop" >A-</option>
                                            <option value="B+" name="drop" >B+</option>
                                            <option value="B-" name="drop" >B-</option>
                                            <option value="AB+" name="drop" >AB+</option>
                                            <option value="AB-" name="drop" >AB-</option>
                                        </select>
                                    </td>
                                    <td width="200px" height="50px">Enter Age</td>
                                    <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Age"></td>
                                    </tr>
                                    <tr>
                                        <td><center><input type="submit" name="sub" value="submit"></center></td>
                                    </tr>
                        </table>
                        
                  </div></center>

          
                  
    </body>
</html>