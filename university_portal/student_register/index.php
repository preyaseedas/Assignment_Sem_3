<?php 
if(isset($_GET["status"])) {
    if($_GET["status"]==200){
        echo"<script> 
        alert('Registration Sucessfull!');
        </script>";
    } 
    if($_GET["status"]==404) {
        echo"<script> 
        alert('Registration Failed !')"
        ;   
     }
    
}
?>


<html>
    <head>
        <title>INSERT DATA</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <center   style="margin-top: 5%">
            <h6>STUDENT REGISTRATION</h6>
            <form  method="post" action="register.php">
                <input type="text" style="border-radius: 4px;height:50px; width:400px" class="form-control"  placeholder="Enter your name" name="name" required >
                <input type="text" style="margin-top: 3%;border-radius: 4px; height:50px; width:400px" class="form-control"  placeholder="Reg No" name="reg_no" required >
                <input type="text"  style="margin-top: 3%;border-radius: 4px;height:50px; width:400px" class="form-control" placeholder="Roll No" name="roll" required >
              <select style="margin-top: 3%;border-radius: 4px;height:50px; width:400px" name="dept" required>
               <option>SELECT DEPERTMENT</option>
                <option>B.tech</option>
                <option> MCA</option>
                <option> BCA</option>
              </select>
              <br/>
           
              <input type="password" style="margin-top: 3%;border-radius: 4px;height:50px; width:400px" placeholder="Create Password" name="password" required >
              <br/>    <button  style="margin-top: 3%;border-radius: 10px;height:50px; width:200px; color:white; background-color:blue"> Get Registered</button>
         
            </form>
        </center>
        
    </body>
</html>
