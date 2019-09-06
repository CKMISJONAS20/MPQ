<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Amertron</title>
  </head>
  <body class="bg">


<!-- header -->
  <div class="container-fluid my_container">
    <div class="row my_row1">
        <div class="col-md-12 my_col">
         <img src="image/amertronlogo.png" class="logo">
         <h3 class="amertrontext">
           Amertron Incorporated
         </h3>
         <h2 id="time" style="float: right; font-family: Arial, sans-serif; color: white; font-size: 1vw; margin-top:3vw;  margin-right: 10px;"></h2>
        </div>
    </div>

    <!-- side navigation -->
    <div class="row  my_row2">
      <div class="col-md-auto my_col1 justify-content-md-right">
       <nav class="navbar navbar-expand-md " style="background-color: #000000; margin-right: -15px; margin-left:-20px; width: auto; ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">    
               <div class="sample"  style="color: white;">
                  <p class="textbutton">IPD</p>  <br>
                  <p class="textbutton">AUTO </p>
                 
               </div> 
            </div>
      </nav>
 </div> 

    <div class="col-md-11  justify-content-between my_col ">
      <br>
           <div class="row justify-content-around align-items-stretch my_row">
           
           <div class="col-lg-6 my_col  ">
           <img src="image/graph1.png" class="monitor">
           </div>
           <div class="col-lg-6 justify-content-around my_col ">
            <img src="image/graph2.png" class="monitor">
           </div> 
           </div>
           <br>
           <div class="row justify-content-around align-items-stretch my_row">
           <div class="col-lg-6 my_col" style="border: 1px solid black;">
           <img src="image/grap3.png" class="monitor">
           </div>
           <div class="col-lg-6 justify-content-around my_col " style="border: 1px solid blue;" >
           <img src="image/graph4.png" class="monitor">
           </div> 
           </div>
           <br>

           <div class="row   my_row">
             <div class="col-lg-2 mr  my_col d-block d-sm-none d-md-block" style="border: 1px solid black"  >
         <img src="image/defect.png"  class="machinepicture">
         <h3 class="textbutton">WB#30</h3>
        </div>
        
         <div class="col-lg-4     my_col" style="border: 1px solid black;">
         <!-- <img src="image/defect.png" class="defect"> -->
        <h3 class="textbutton">WB#30</h3>
        </div>
      
         
         <div class="col-lg-6 my_col"  style="border: 1px solid black;">
         <!--  <img src="image/message.png" class="message"> -->
        <h3 class="textbutton">WB#30</h3>
        </div>
   </div>
      </div> 


 


   
    <!-- <div class="row justify-content-between align-items-stretch my_row">
      <div class="col-1 my_col ">

        </div>
         <div class="col-5 justify-content-between my_col ">
          row 2 col 2
        </div>
          <div class="col-5 justify-content-between my_col ">
          row 2 col 3
        </div>
    </div>  
     
   <div class="row justify-content-between align-items-stretch my_row">
      <div class="col-md-2 my_col ">
          
        </div>
         <div class="col-4 justify-content-between my_col ">
          row 2 col 2
        </div>
          <div class="col-4 justify-content-between my_col ">
          row 2 col 3
        </div>
    </div>   


  </div> -->








    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>



<script type="text/javascript">
  var timestamp = '<?=time();?>';
  function updateTime(){
    $('#time').html(Date());
    timestamp++;
  }
  $(function(){
    setInterval(updateTime, 1000);
  });
</script>
  </body>
</html>