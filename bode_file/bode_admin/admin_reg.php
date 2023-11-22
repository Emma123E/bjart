

<?php
if(isset($_POST['save'])){
    $fn=$_POST['fn'];
    $sn=$_POST['sn'];
    $em=$_POST['email'];
    $psw=$_POST['psw'];
    $ins=mysqli_query($dbcon,"INSERT into admins(FIRSTNAME,SECONDNAME,EMAIL,PASS_WORD)VALUES('$fn','$sn','$em','$psw')");
    if($ins){
        echo"<script>window.alert('You Have Registered, Press OKAY To Continue'); window.location='admininclude_login.php';</script>";
    }
}
?>
<div class="jumbotron"   style="background-color: rgb(214, 26, 98);">
    <h1 class="text-center font-weght-bolder text-white ">BEJART'S ADMIN</h1>
</div>
<br><br>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <form class="form-group" method="post">
                    <label for="first name">FIRST NAME</label>
                    <input type="text" class="form-control" placeholder="First-Name" name="fn" required  oninput="this.value=this.value.toUpperCase()">
                    <label for="first name">SECOND NAME</label>
                    <input type="text" class="form-control" placeholder="Second-Name"  name="sn" required oninput="this.value=this.value.toUpperCase()">
                    <label for="first name">EMAIL</label>
                    <input type="email" class="form-control" placeholder="Email" oninput="this.value=this.value.toLowerCase()" name="email" required>
                    <label for="first name">PASSS WORD</label>
                    <input type="text" class="form-control mb-4"   title="Password must contain atleast one number, one uppercase, one lowercase and 5 more character" maxlength="5"    placeholder="Enter Correct Password" name="psw" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" >
                    <input type="submit" class="form-control btn btn-success" name="save">
                </form>
            </div>
    </div>
     </div>
    <div class="col-sm-4">
    
<?php

$a=5;
$b=6;
$c=5;
if($a==$b){
    print('true');
}
else{
    print('false');
}

?>
    </div>
</div>



