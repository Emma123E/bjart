
<?php  


ob_start();
session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<title>BEJART</title>
  <!-- stackoverflow.com fontawsome -->
  <link rel="stylesheet" href="includebody.html" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- end -->
  <!--  -->
  <link href="fonts/f2/css/all.css" rel="stylesheet" type="text/css">
 <!--  -->
	 <!-- cssss -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- script -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- end of script -->   


<!-- boostrap 4 glyphicons from bostrap 4 -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
<!-- end -->
<style>
 

body*{
  font-family: cursive;
}




#sum{
  color: black;
  font-weight: bolder;
}
#sum a:hover{
  color: black;
}
#sum a{
  color: white;
  transition: 2s;
}



.cards-wrapper {
  display: flex;
  justify-content: center;
}
.card img {
  max-width: 100%;
  max-height: 50%;
}
.card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  border-radius: 0;
}
.carousel-inner {
  padding: 1em;
}
.carousel-control-prev,
.carousel-control-next {
  background-color: #e1e1e1;
  width: 5vh;
  height: 5vh;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}
@media (min-width: 768px) {
  .card img {
    height: 11em;
  }

}
      /*start marquee  */

.container{
  display:block;
  font-family: "arial";
  font-size: 30px;
 
}
#x{
  position:relative;
  bottom:100px;
text-align:center;

}
.typed {
  text-shadow: 6px 4px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  overflow: hidden;
  white-space: nowrap;
  width: 0;
  animation: typing  infinite;
  animation-duration: 30s;
  animation-timing-function: ease-in;
  animation-fill-mode:backwards;
 animation-delay: 0s;
  animation-direction: alternate;
   border-right: 7px solid white;
   



}

@keyframes typing {
  from { width: 0 }
 to { width: 100% }
}
/* marquee */



@media only screen and (max-width: 768px) {
  /* For mobile phones: */
 #x{
   display:none;
 }
  
  
  }
button#color-change{
  color:white;
  border-radius: 10px;
}
button#color-change:hover{
  border: 2px solid #D9534F;
  background-color:white;
  color:#D9534F;
  font-weight: 150;
}
</style>
</head>