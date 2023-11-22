 
 
 
      <?php
      



      if(isset($_POST['save'])){
     $fn=$_POST['fn'];
     $em=$_POST['email'];
     $sub=$_POST['sub'];
     $mess=$_POST['mess'];
     $add=$_POST['add'];
     $ins=mysqli_query($dbcon,"INSERT into register(NAMES,EMAIL,SUBJECTS,MESSAGE,)VALUES('$fn','$em','$sub','$mess')");

    

// this is for adreess
    
// this is for address only
}
      
      
      
      
      ?>
 
 
  <!--  -->





  <div id="demo" class="carousel slide " data-ride="carousel">
    
    <ul class="carousel-indicators">
      
      <li data-target="#demo" data-slide-to="0"class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img src="image/s.jpg" alt="Chicago" height="500px" width="100%" >
        <div class="carousel-caption">
                 
  <div class="container md-6 " style="margin-bottom:50px; font-size:40px; ">
    <p id="x"  class="typed text-weight-bolder " style="background-color:black;   text-shadow:3px 2px rgb(214, 26, 98);"> WELCOME TO BEJART</p>
  </div>
          <p>Thank you, friends</p>
          
        </div>   
      </div>
     
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  
  <!-- end of caro  become a web developer-->
  <!-- shocase -->
  <section class="text-center p-5  text-light" style="background-color: rgb(15, 15, 15);">
    <div class="container">
      <div class="d-lg-flex align-item-center mx-auto mt-5 float-sm-left justify-content-between">
        <div>
                       
    <p  style="font-family:Helvetica;text-transform: capitalize;">THE PREMIER DESTINATION FOR EXQUISITE ART WORK THAT
       COMPLEMENT THE BEAUTY OF YOUR HOME AND OFFICE</p>
       <button type="button" class="btn btn-danger ">
        Start With Us
      </button>
  </div>
          <!-- Button to Open the Modal -->
  
  
  
         
        </div>
        <!-- <img src="sd.jpg"class="img-fluid w-50 my-5 float-sm-right" alt="woman" style="opacity:0.6;"> -->
      </div>
    </div>
  </section>
  <!--  -->
  
  
  <!-- ----------------------------------------------------------------------------------------------------- -->
  
  <!-- boxes----visual------------------------------------  ----------------------------------  -->
  <section class="p-5  ">
    <div class="container ">
  <div class="row text-center ">
    <!-- col1----------------------------------------------------------- -->
    <div class="col-md-4">
      <div class="card  text-light" >
        <div class="card-body text-center">
          <img src="image/w.jpg" class="img-fluid" alt="Cinque Terre">
        
          <a href="" class="btn  text-white" style="background-color: rgb(214, 26, 98);">  <span class="	glyphicon glyphicon-menu-right"></span>Read More</a>
        </div>
  
      </div>
    </div>
    <!--  ---------------------------------------------------------------------->
    <!-- col2 ----------------------------------------------------------->
    <div class="col-md-4">
      <div class="card  text-light " >
        <div class="card-body text-center">
          <img src="image/w.jpg" class="img-fluid" alt="Cinque Terre">
         <!-- text here -->
          <a href="" class="btn text-white " style="background-color: rgb(214, 26, 98);">  <span class="	glyphicon glyphicon-menu-right"></span>Read More</a>
        </div>
    </div>
    </div>
    <!--  -->
    <div class="col-md-4">
      <div class="card  text-light "  >
        <div class="card-body text-center">
          <img src="image/w.jpg" class="img-fluid" alt="Cinque Terre">
          
         <!-- text here -->
          <a href="" class="btn text-white   "  style="background-color: rgb(214, 26, 98);" >  <span class="	glyphicon glyphicon-menu-right"></span>Read More</a>
        </div>
    </div>
  
    </div>
    <!-- end hybrid -->
    
  
  
    </div>
  </div>
    </div>
  
  </section>
  
  <!-- end -->
  
  <!--  start------------------------------------------------------------------------>
  <section  class="p-5  text-dark  "id="dfd">
    <div class="container">
      <div class="row align-item-center justify-content-between ">
        
         <div class="col-md p-5">
           <h2> second project</h2>
           <p class="lead" >
             DATABASE IS REQUIRED FOR THIS
             DATABASE IS REQUIRED FOR THIS
             DATABASE IS REQUIRED FOR THIS , 
             DATABASE IS REQUIRED FOR THIS
             DATABASE IS REQUIRED FOR THIS
             DATABASE IS REQUIRED FOR THIS
             DATABASE IS REQUIRED FOR THIS
             DATABASE IS REQUIRED FOR THIS
             DATABASE IS REQUIRED FOR THIS
             I AM STILL WORKING ON IT
           </p>
              
               <a href="#" class="btn btn-success mt-3">  <span class="	glyphicon glyphicon-menu-right"></span>Read more</a>
            
         </div>
         <div class="col-md">
          <img src="image/w.jpg"class="img-fluid" alt="">
        </div>
  
      </div>
    </div>
    <br><br><br><br><br>
  
  </section>
  <!-- end---------------------------------------------- -->
  <!-- accodion question using panel for the accordion -->
    
  <!-- question -->
  
  <!-- start -->
  <!-- want to start a new onw here  instructor -->
  <section id="instructor" class=" p-5" style="background-color: rgba(94, 7, 40, 0.445);">
    <div class="cotainer">
      <!-- <h2 class="text-center text-white" style="font-family: -apple-sys;"> Our Instructor</h2> -->
      <!-- <p class="lead text-center text-white mb-5" style="font-family: cursive;">
        Our instructor have <span class="text-danger">5+ year</span>  working as a web developer in the industry
      </p> -->
  <div class="row mg-5">
    <!--  -->
    <div class="col-md-6 col-lg-3">
      <div class="card bg-light">
        <div class="card-body text-center " id="">
          <img src="image/w.JPG" alt="dont" class="img-circle mb-3 mx-auto d-block bg-dark img-responsive ">
          <p class="card-text text-dark"></p>
            
                     <a href="" class="btn btn-block  font-weight-bolder "  id="about" style="font-size:23px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:black;background-color: rgba(247, 10, 101, 0.445); ">Contact Us</a>
  
        </div>
      </div>
    </div>
    <!--  -->
    <!--  -->
    <div class="col-md-6 col-lg-3">
      <div class="card bg-light">
        <div class="card-body text-center">
          <img src="image/w.jpg" alt="dont" class="rounded-circle mx-auto mb-3 bg-dark img-responsive ">
          
          <!-- <p class="card-text text-dark">
            .</p> -->
             <a href="About.php" class="btn btn-block  font-weight-bolder " id="about" style="font-size:23px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;  color:black;background-color: rgba(247, 10, 101, 0.445); ">About-Us</a>
  
        </div>
      </div>
    </div>
    <!--  -->
    <!--  -->
    <div class="col-md-6 col-lg-3">
      <div class="card bg-light">
        <div class="card-body text-center">
          <img src="image/w.jpg" alt="dont" class="rounded-circle mx-auto mb-3 bg-dark img-responsive ">
          
         
             <a href="" class="btn btn-block  font-weight-bolder " id="about"  style="font-size:23px;  color:black;background-color: rgba(247, 10, 101, 0.445); font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">Our Services</a>
             
        </div>
      </div>
    </div>
    <!--  -->
    <!--  -->
    <div class="col-md-6 col-lg-3">
      <div class="card bg-light">
        <div class="card-body text-center">
          <img src="image/w.jpg" alt="dont" class="rounded-circle mx-auto mb-3 bg-dark img-responsive ">
          <h3 class="card-title text-dark"></h3>
          <p class="card-text text-dark"></p>
             <a href="recent_work.php" class="btn btn-block  font-weight-bolder " id="about" style="font-size:23px;  color:black;background-color: rgba(247, 10, 101, 0.445); font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">Our Recent Work</a>
            
        </div>
      </div>
    </div>
    <!--  -->
  </div>
    </div>
  </section>
  <!--end of onstructor  -->
  
  
  



      <session class="p-3">
        <div class="card">
         
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-header">
                  <h3  style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Send Message</h3>
                </div>
                <form class="form-group"  method="post">
                  <label type="" value="Name"> Name</label>
                  <input type="text" class="form-control mt-3" name="fn"  oninput="this.value=this.value.toUpperCase();">
                  <label type="name" value="Name"   >Email</label>
  
                  <input type="email" class="form-control mt-3" name="email">
                  <label type="name" value="Name"  > Subject</label>
  
                  <textarea class="form-control mt-3"  name="sub"></textarea>
                  <label type="name" value="Name"  > Message</label>
  
                  <textarea class="form-control mt-3"  name="mess"></textarea>
                  <!-- <input type="submit" class="form-control btn  btn-block btn-success mt-5 "> -->
                  <input type="submit" class="btn btn-success float-right mt-5"  name="save">
                </form>
              </div>
              <div class="col-sm-6">
              <div class="card">
              <div class="card-body">
              <?php
// $SES=$_SESSION['id'];
// $se="SELECT * FROM address";
// $s=mysqli_query($dbcon,$se);

// $add= mysqli_fetch_array($s)

// // var_dump($add);
// ?>
<br><br><br><br><br>
<img src="image/barcode1.JPG"  class="rounded mx-auto d-block img-responsive  h-40 w-45">




              </div>
              
              </div>
              
              </div>
            </div>
          </div>
        </div>
      </session>
