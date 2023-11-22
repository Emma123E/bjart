




<?php
session_start();
ob_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>richard project</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="styl.css" type="text/css">
   <link href="fonts/f2/css/all.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous">
<!-- FOR CAROUSEL   LINK FROM W3SCHOOL -->
<!-- boostrap 4 glyphicons from bostrap 4 -->
<!-- cssss -->
<!--picture  -->

<!--  -->
 
<!--  -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- picture -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
crossorigin="anonymous">
<!--END OF CAROUSEL  -->


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
/*  */
.container{
  display:block;
  font-family: "arial";
  font-size: 30px;
 
}
/*  */
#x{
  position:relative;
  bottom:100px;
text-align:center;

}
.typed {
  text-shadow: 6px 4px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  overflow: hidden;
  white-space: nowrap;
  width: 0px;
  
  animation: typing  infinite;
  animation-duration: 30s;
  animation-timing-function: ease-out;
  animation-fill-mode:backwards;
 animation-delay: 0s;
  animation-direction: alternate;
   border-right: 7px solid white;
   



}

@keyframes typing {
  from { width: 0;}
 to { width: 100%; }
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
<body>