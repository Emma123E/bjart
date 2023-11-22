






<?php    include'include/amos_conn.php'; ?>
<?php     include'include/header.php'; ?>
<nav class="nav navbar"   style="background-color:rgb(129, 9, 55);"> 



  </nav>





<!-- start session -->
<section id="learn" class="p-5 bg-white " style="z-index: -1;">
  <div class="container">
    <div class="row align-item-center justify-content-between ">
       <div class="col-md">
        <br><br>
         <img src="image/w.jpg"class="img-fluid" alt="">
       </div>
       <div class="col-md p-5 text-success">
         <h2> OUR RECENT WORK</h2>
         <p class="lead text-dark" >
          KIND VIEW ALL OUR RECENT POST AND SEND A COMMENT US
         </p>
     
             <a href="#" class="btn btn-success mt-3">  <span class="	glyphicon glyphicon-menu-right"></span>Read more</a>

             <style type="text/css">
               
             </style>
          
       </div>

    </div>
  </div>

</section>

<!-- end -->

<!-- start session -->

<section id="learn" class="p-5 ">


<div class="container-fluid lead">

<div class="row">
  
  <div class="col-sm-12">
    <div class="card mt-3">
      <div class="card-header  text-weight-bolder "style="background-color:rgb(129, 9, 55); text-align:center; color: white;">
        <p>NEWS<hr class="bg-white">Our Recent WOrk</p>
      </div>
      <div class="card-body">
        
          <div class="row">
            <?php
$count=1;
$sell="SELECT * FROM bjart_upload_1 ";
$conss=mysqli_query($dbcon,$sell);
while($view_me=mysqli_fetch_array($conss)){
    ?>
            <div class="col-sm-2">
              <div class="card">
                <div class="card-body" style="background-color:black;">
              <img src="<?php echo $view_me['IMAGE'] ; ?>" alt="user" class="rounded img-fluid">
              </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="card    shadow-sm ">
                <div class="card-body" style="color:black;"  >
 <?php echo $view_me['COMMENT'];?>
               <button id="btnc " class="btn btn-block  cv"><a href="continue2.php?id=<?php echo $view_me['BJART_UPLOAD']?>">  <span class="  glyphicon glyphicon-menu-right" ></span>Read more</a></button>
               <style type="text/css">
/*  this style is for upload and comment*/
                  .cv:hover{
    background-color:white;
/*    transition: 2s;*/
transition-duration:2s;
transform: rotate(5deg);
    color:white;
    border-right: 4px solid black;

  }
          .cv a{
   text-decoration:none;
   color:black;
 }

               </style>
             </div>
</div>
            </div>
 <?php  }?>
                
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-2">
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="col-sm-4"></div>
  <div class="col-sm-4"></div> -->
</div>
<div>

<?php include'include/footer.php';?>

<!-- end -->