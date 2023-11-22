<!-- php -->
<?php



if(!isset($_SESSION['id'])){
    echo"<script>window.alert('you need to login first');window.location='admininclude_login.php';</script>";
  
  }


$get=$_SESSION['email'];
$g="SELECT * FROM admins WHERE email='$get'";
$gt=mysqli_query($dbcon,$g);
$view_me=mysqli_fetch_array($gt);
    
    ?>
         

       <br>

<!-- php -->
<!--  -->
<div class="jumbotron-fluid fixed-top primary" style=" background-color: rgb(214, 26, 98); color:white;" >
    <h1 class="text-center ">BEJART</h1>
    <a href="logout.php" class="btn text-dark txt-weight-bold"  style="background-color:gold;">LOGOUT</a>
</div>
<br><br><br><br><br>
<!--  -->
<br>
<br>
<br>
<br>

<div class="row"   >
    <div class="col-md-2"   >
        <ul class="list-group">
            <div class="list-group">
           
                <a href="addressinclude.php" class="list-group-item active">Change Your Address</a>
                
    </div>
        </ul>
    </div>
<div class="col-md-6"></div>
<div class="col-md-4"></div>
    </div>
