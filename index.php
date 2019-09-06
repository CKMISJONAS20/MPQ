<?php  
  include "DB.MySQLPDO.WBMonitoring.php"; 
  $machine_id = $_GET['mc_id'];
  $mc_data = dbGetMachinebyID($machine_id);
  $machine_name = $mc_data[0]["MachineName"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="pql_css/home.css">
    <title>Amertron</title>
  </head>
  <body class="bg">


  <!-- header -->
  <div class="header">
      <img style="float:left; margin-top: .4vw;" src="images/Amertron Logo.png" class="ai-logo">
      <h2 style="float: left; font-family: Arial, sans-serif; color: white; font-size: 1.5vw; margin-left: 10px; margin-top: 1.2vw">Amertron Incorporated</h2>
      <!-- <h2 id="time" style="float: right; font-family: Arial, sans-serif; color: white; font-size: 1vw; margin-top:1.2vw;  margin-right: 10px;"></h2> -->
      <span onchange="UpdateCurrentDateTime()" id="current_datetime" style="float: right; font-family: Arial, sans-serif; color: white; font-size: 1vw; margin-top:1.2vw;  margin-right: 10px;"></span>
  </div>
  <div class="container-fluid my_container">

    <!-- side navigation -->
    <div class="row  my_row2">
      <div class="col-md-auto my_col1 justify-content-md-right">
       <nav class="navbar navbar-expand-md custom-toggler  " style="background-color: #222d32; margin-right: -15px; margin-left:-20px; width: auto; ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">    
               <div class="sample"  style="color: white;">
                  <p class="textbutton" style="color: white;">IPD</p>  <br>
                  <p class="textbutton" style="color: white;">AUTO </p>
                 
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
           <div class="col-lg-6 my_col">
           <img src="image/grap3.png" class="monitor">
           </div>
           <div class="col-lg-6 justify-content-around my_col "  >
           <img src="image/graph4.png" class="monitor">
           </div> 
           </div>
           <br>

           <div class="row   my_row">
             <div class="col-lg-2   my_col d-block d-sm-none d-md-block"  >
         <img src="image/machine.png"  class="machinepicture">
         <h3 class="textbutton"><?php echo $machine_name;?></h3>
        </div>
        
         <div class="col-lg-4     my_col" >
          <table>
          <h3 style="float: left; font-family: Arial, sans-serif; color: white; font-size: 1.1vw; margin-top:.5vw;  margin-right: .5vw;">Recent Defect List</h3> <br>
          <h3 style="float: left; font-family: Arial, sans-serif; color: white; font-size: 1.1vw; margin-top:-1.5vw;  margin-right: 1vw;">______________________________________________</h3>
         <table class = "table" style="margin-top: -1vw; margin-left: -10vw;" >
              <table class="scrolldown" >   
        <tbody> 
            <tr> 
                <td class="td">Non-Stick</td> 
                <td class="td.2">2019-09-01 28:00:20</td>
            </tr> 
              
            <tr> 
                <td class="td.1">ERROR 404</td> 
                <td class="td.2">2019-09-02 28:00:20</td> 
         
            </tr> 
            <tr> 
                <td class="td.1">Non-Stick</td> 
                <td class="td.2">2019-09-03 28:00:20</td> 
          
            </tr>
            <tr> 
                <td class="td.1">ERROR 404</td> 
                <td class="td.2">2019-09-04 28:00:20</td>
          
            </tr>
            <tr> 
               <td class="td.1">ERROR 404</td> 
                <td class="td.2">2019-09-05 28:00:20</td>
          
            </tr>
            <tr> 
                <td class="td.1">ERROR-312</td> 
                <td class="td.2">2019-09-06 28:00:20</td>
          
            </tr>
            <tr> 
               <td class="td.1">Non-Stick</td> 
                <td class="td.2">2019-09-07 28:00:20</td>
            </tr>
            <tr> 
                <td class="td.1">ERROR 404</td> 
                <td class="td.2">2019-09-08 28:00:20</td>
          
            </tr>
            <tr> 
                <td class="td.1">ERROR-312</td> 
                <td class="td.2">2019-09-09 28:00:20</td>
          
            </tr> 
              <tr> 
                <td class="td.1">Non-Stick</td> 
                <td class="td.2">2019-09-10 28:00:20</td> 
          
            </tr>
        </tbody> 
    </table>     
          
 
     
        </div>
      
         
         <div class="col-lg-6 my_col" >
         <h3 style="float: left; font-family: Arial, sans-serif; color: white; font-size: 1.1vw; margin-top:.5vw;  margin-right: .5vw;">Messages</h3> <br>
          <h3 style="float: left; font-family: Arial, sans-serif; color: white; font-size: 1.1vw; margin-top:-1.5vw;  margin-right: 1vw;">________________________________________________________________________</h3><br>
          <textarea rows="10" cols="81" readonly style="background-color:transparent; color:white; text-align:left; ">sample
                      </textarea>

        </div>
   </div>
      </div> 
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>



<script type="text/javascript">
  window.setInterval(function(){UpdateCurrentDateTime()}, 1000);
  UpdateCurrentDateTime();

  function UpdateCurrentDateTime() {
    var daysOfWeek = new Array('SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT');
    var date = new Date();
    var year = date.getFullYear();
    var month = PadZero(date.getMonth()+1);
    var week = daysOfWeek[date.getDay()];
    var day = PadZero(date.getDate());
    var hours = PadZero(date.getHours());
    var days = PadZero(date.getDay()); 
    var minutes = PadZero(date.getMinutes());
    var seconds = PadZero(date.getSeconds());
    
    var strDateTime = '(<b>'+week+'</b>) ' + year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
    document.getElementById('current_datetime').innerHTML =  strDateTime;
  }

  function PadZero(num) {
    return (num < 10 ? '0' + num : num);
  }
</script>
</body>
</html>

<?php  
  function dbGetMachinebyID($machine_id) {
    $sql = "SELECT * FROM 13wip.`mc_master` WHERE Machine_ID = '$machine_id' ORDER BY machine_id";

    $conn = dbConnect();
    $stmt = $conn->prepare($sql);
    $stmt->execute(array());
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $conn=null;

    return $data;
  }
?>

