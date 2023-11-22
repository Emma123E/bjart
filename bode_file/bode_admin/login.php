<?php
if(isset($_POST['save'])){

$email=$_POST['email'];

$psw=$_POST['psw'];
$sel=mysqli_query($dbcon,"SELECT *from admins where EMAIL='$email' and PASS_WORD='$psw'");
$fex=mysqli_fetch_array($sel);


if($fex){
    $_SESSION['id']=$fex['a'];
    
      echo"<script>
    window.alert('Login successfully'); window.location='admininclude.dashboard.php';</script>";
    }
    else{
    echo"<script>
    window.alert(' Fail to login, Use a correct password.');window.location='admininclude_login.php';</script>";
    }

//     $_SESSION['id']=$fex['bod'];

 
//     echo"<script>
//   window.alert('Login successfully'); window.location='';</script>";
//   }
//   else{
//   echo"<script>
//   window.alert(' Fail to login, Use a correct password.');window.location='login_user.php';</script>";
//   }


$_SESSION['email'] = $email;
}



?>

<div class="jumbotron"   style="background-color: rgb(214, 26, 98); color:white;">
    <h1 class="text-center ">BEJART</h1>
</div>
<br><br>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <form class="form-group" method="post">
                    
                    <label for="first name">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                    <label for="first name">Password</label>
                    <input type="text" class="form-control mb-4"  title="Password must contain atleast one number, one uppercase, one lowercase and 5 more character" maxlength="5"  
                    placeholder="Enter Correct Password" name="psw" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}">
                    <input type="submit" class="form-control btn btn-success" name="save">

                </form>
            </div>
    </div>
     </div>
    <div class="col-sm-4">
    
    <input type="file"id="image-input">
    <img id="image-preview" src="#" alt="image preview">
    <script>
    $('#image-input').on('change',function()){
  var file=this.file[0];
  var reader=new FileReader();
  reader.onload=function(e){
      $('#image-preview').attr('src,e.target.result');
  }
reader.readAsDataURL(file);
    });
    
    
    </script>
    
    </div>
</div>
</div>