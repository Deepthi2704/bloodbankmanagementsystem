<?php
include("connection.php");
?>
<html>
    <head>
        <title>login page</title>
        <style>
            body
            {
                background-image: url('https://tse2.mm.bing.net/th?id=OIP.kLlA6-Gq0bfd7-WS3expDQHaHX&pid=Api&P=0');
               background-repeat: no-repeat;
               background-size:50%;
               text-align:center;
            }
            .boxed
            {
                margin-top: 200px;
                margin-left:800px ;
                background-color:lightpink;
                border:6px solid red;
                border-radius: 400px;
                
                border-style:outset;
                padding:40px;
                width:400px;
            }
            .boxed:hover
            {
               background-color:rgb(248, 71, 106)
            }
            .joe
            {
                width:60px;
                height:40px;
                border-radius: 30px;
                border-style: inset;       
                color:red;
                border-color:darkred;
            }
            .joe:hover{
                background-color:brown;
                color:black;
            }
        </style>
        <script>  
            function validateform(){  
            var name=document.myform.name.value;  
            var password=document.myform.password.value;  
              
            if (name==null || name==""){  
              alert("Name can't be blank");  
              return false;  
            }else if(password.length<6){  
              alert("Password must be at least 6 characters long.");  
              return false;  
              }  
            }  
            </script> 
    </head>
    <body >
        <h1> user login</h1>
        <body>  
            <form class="boxed" name="myform" method="post" onsubmit="return validateform()" >  
            <b>userName:</b> <input type="text" name="name"><pre></pre>
            <b>Password:</b> <input type="password" name="password"><pre></pre>
            <button align="left"class="joe"name="submit"><a href="submit.php" target="_new">submit</a></button>
            <button class="joe"style="margin-left:200px;"name="sign up"><a href="registration.html"target="_new">sign up</a></button>
            <a href="#"><p align="left">forget password</p></a>
            </form>  
    </body>
</html>