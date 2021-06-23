
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  
*{
    padding: 0px;
    margin: 0px;
    background-color: gray;
    align-items: center;
   
}

input[type=range] {
   
    height: 34px;
    -webkit-appearance: none;
    margin: 10px 0;
    width: 40%;
  }
  input[type=range]:focus {
    outline: none;
  }
  input[type=range]::-webkit-slider-runnable-track {
    width: 100%;
    height: 12px;
    cursor: pointer;
    
    box-shadow: 1px 1px 1px #002200;
    background: #205928;
    border-radius: 1px;
    border: 1px solid #18D501;
  }
  input[type=range]::-webkit-slider-thumb {
    box-shadow: 3px 3px 3px #00AA00;
    border: 2px solid #83E584;
    height: 23px;
    width: 23px;
    border-radius: 23px;
    background: #439643;
    cursor: pointer;
    -webkit-appearance: none;
    margin-top: -7px;
  }
  input[type=range]:focus::-webkit-slider-runnable-track {
    background: #205928;
  }
  input[type=range]::-moz-range-track {
    width: 100%;
    height: 12px;
    cursor: pointer;
    
    box-shadow: 1px 1px 1px #002200;
    background: #205928;
    border-radius: 1px;
    border: 1px solid #18D501;
  }
  input[type=range]::-moz-range-thumb {
    box-shadow: 3px 3px 3px #00AA00;
    border: 2px solid #83E584;
    height: 23px;
    width: 23px;
    border-radius: 23px;
    background: #439643;
    cursor: pointer;
  }
  input[type=range]::-ms-track {
    width: 100%;
    height: 12px;
    cursor: pointer;
    
    background: transparent;
    border-color: transparent;
    color: transparent;
  }
  input[type=range]::-ms-fill-lower {
    background: #205928;
    border: 1px solid #18D501;
    border-radius: 2px;
    box-shadow: 1px 1px 1px #002200;
  }
  input[type=range]::-ms-fill-upper {
    background: #205928;
    border: 1px solid #18D501;
    border-radius: 2px;
    box-shadow: 1px 1px 1px #002200;
  }
  input[type=range]::-ms-thumb {
    margin-top: 1px;
    box-shadow: 3px 3px 3px #00AA00;
    border: 2px solid #83E584;
    height: 23px;
    width: 23px;
    border-radius: 23px;
    background: #439643;
    cursor: pointer;
  }
  input[type=range]:focus::-ms-fill-lower {
    background: #205928;
  }
  input[type=range]:focus::-ms-fill-upper {
    background: #205928;
  }
  input[type=submit]{
    height: 40px;
    width: 180px;
    background-color: green;
  }

  .slider{
    width: 1000px;
    height: 250px;
    margin-left: 50px ;
    font-family :'Courier New', Courier, monospace;

}
h1{
    margin-left: 155px;
}
 .container{
     margin-left: 310px;
     margin-top: 160px;
 }  
 .offonbtn{
   position: absolute;
   float: right;
 }

</style>

</head>
<body>

<?php 
           
        $motor1 = $_POST["weight1"];
        $motor2 = $_POST["weight2"];
        $motor3 = $_POST["weight3"];
        $motor4 = $_POST["weight4"];
        $motor5 = $_POST["weight5"];
        $motor6 = $_POST["weight6"];
       
        $connection = new mysqli("localhost","root","","motors");
       

        if(isset($_POST['save'])){

          echo "<br>";
      
          $Qu = "";
      
          $Qu = "select * from motors WHERE 1 ";
          $result = mysqli_query($connection, $Qu);
      
          $Qu = "INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6)
           VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6')";
          $result = mysqli_query($connection, $Qu);
         
      
      }else if(isset($_POST['on'])) {
          echo "<br>";
      
          $Qu = "";
      
          $Qu = "select * from runvalues WHERE 1 ";
          $result = mysqli_query($connection, $Qu);
      
          $Qu = "INSERT INTO runvalues (isON,isOFF) VALUES (1,0)";
          $result = mysqli_query($connection, $Qu);
        
      }else if(isset($_POST['off'])) {
          echo "<br>";
      
          $Qu = "";
      
          $Qu = "select * from runvalues WHERE 1 ";
          $result = mysqli_query($connection, $Qu);
      
          $Qu = "INSERT INTO runvalues (isON,isOFF) VALUES (0,1)";
          $result = mysqli_query($connection, $Qu);
         
      }
 
    ?>
  

  
  <div class="container">
    <div class="slider">
        <h1>Control Panel </h1>

    <form name="weight1" id="weight1" method="post">

        <div name="weight1" id="weight1">
        <text><b> Motor 1 </b></text> 
        <input id="weight1" input="" type="range" name="weight1" min="0" max="180"  step="1" onchange="showValue(this)">
        Value=<span id="range">90</span>
        </div>
        <div name="weight2" id="weight2">
        <text><b> Motor 2 </b></text> <input id="weight2" input="" type="range" name="weight2" min="0" max="180"  step="1" onchange="showValue(this)">
        Value=<span id="range">90</span>
        </div>
        <div name="weight3" id="weight3">
        <text><b> Motor 3 </b></text>
        <input id="weight3" input="" type="range" name="weight3" min="0" max="180" step="1" onchange="showValue(this)">
        Value=<span id="range">90</span>
        </div>
        <div name="weight4" id="weight4">
        <text><b> Motor 4 </b></text> <input id="weight4" input="" type="range" name="weight4" min="0" max="180"  step="1" onchange="showValue(this)">
        Value=<span id="range">90</span>
        </div>
        <div name="weight5" id="weight5">
        <text><b> Motor 5 </b></text> <input id="weight5" input="" type="range" name="weight5" min="0" max="180"  step="1" onchange="showValue(this)">
        Value=<span id="range">90</span>
        </div>
        <div name="weight6" id="weight6">
        <text><b> Motor 6 </b></text> <input id="weight6" input="" type="range" name="weight6" min="0" max="180"  step="1" onchange="showValue(this)">
        Value=<span id="range">90</span>
        </div>

       <input type="submit" value="save" name="save">
       <input type="submit" value="on" name="on">
       <input type="submit" value="off" name="off">

</form>


</div>


</div>

<script type="text/javascript">
    function get_nextsibling(n)
   {
   x=n.nextSibling;
   while (x.nodeType!=1)
     {
     x=x.nextSibling;
     }
   return x;
   }
  function showValue(self)
  {
   get_nextsibling(self).innerHTML=self.value;
  }
  </script>
  
  
</body>
</html>
