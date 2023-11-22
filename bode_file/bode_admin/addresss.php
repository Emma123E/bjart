
<?php
if(isset($_POST['save'])){
    $add=$_POST['add'];
    


    $c=$_SESSION['id'];
    $b="SELECT *from admins where a='$c'";
    $con=mysqli_query($dbcon,$b);
    $fe=mysqli_fetch_array($con);
    
    
    // $update=mysqli_query($dbcon,"UPDATE admins set addres_s='$add'");
    
    $ins=mysqli_query($dbcon,"INSERT into admins(addres_s)VALUES('$add')");
    if($ins){
        echo"<script>window.alert('You Have Registered, Press OKAY To Continue'); window.location='admininclude.dashboard.php';</script>";
    }

}
?>


<br><br><br><br>
<div class="container-fluid">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<table class="table table-hover TABLE-STRIPED">
       <thead  class="btn-danger">
     
       <th>sn</th>
       <th>NAMES</th>
    <th>EMAIL</th>
       <th>SUBJECTS</th>
       <th>MESSAGE</th>
       <th>UPDATE /DELETE/ REPLY</th>
       
        
   </thead>
   <?php
$count=1;
$sell="SELECT * from register";
$conss=mysqli_query($dbcon,$sell);
while($view_me=mysqli_fetch_array($conss)){
    
?>
     <tr>


      <td><?php echo $count++;?></td>
       <td><?php echo $view_me['NAMES'];?></td>
       <td><?php echo $view_me['EMAIL'];?></td>
       <td><?php echo $view_me['SUBJECTS'];?></td>
       <td><?php echo $view_me['MESSAGE'];?></td>
     
    
       
             <td>
        <a href="pay_update_admin_user.php?id=<?php echo $BOD['id'];?>"class="btn btn-primary ">UPDATE</a>
        <a href="pay_update_admin_user.php?id=<?php echo $BOD['id'];?>"class="btn btn-danger " >DELETE</a>
        <a href="pay_update_admin_user.php?id=<?php echo $BOD['id'];?>"class="btn btn-primary " >REPLY</a>
               </td>
       </tr>
       <?php }?>
   </table>

</div>
<div class="col-sm-2"></div>






</div>
</div>
</div>