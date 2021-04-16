<?php
	session_start();
	
  $connect = mysqli_connect("localhost", "id16401105_local", "AsL!xsZd*9_l*B{W", "id16401105_bank");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Basic Banking System</title>
	<style type="text/css">
		body{
			background-image: url("data:image/jpeg;base64,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");
			background-repeat: no-repeat;
  			background-size: cover;
        margin: 0;
        
		}
    	h1{
      font-size: 100px;
      text-align: center;
      color: black;
      text-shadow: 2px 2px #262626;
      font-family: 'candal',serif;
    }
    	button{
      font-size: 30px;
      padding: 10px 30px;
      justify-content: center;
      background-color: #071a3d;
      color: rgba(19, 135, 243, 0.74);
      text-decoration: none;


    }
    	h5{
      text-align: center;
      font-size: 40px;
      color: black;
      text-shadow: 1px 1px #f7f8f8;


    }
    	div{
      
      margin-left: auto;
      margin-right: auto;

    }
    .container{
      padding-left: 530px;
  

    }
    h3{
    	text-align: center;
    	font-size: 25px;
    	color: black;
      text-shadow: 1px 1px #3b5278;

    }
    a{
      color: white;
      font-size:20px;
      
    }
    button:hover{
      background-color: rgba(19, 135, 243, 0.74);
      text-align: center;
    }
    .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: #071a3d;
     color: white;
     text-align: center;
     margin-bottom:0px;
    
}

  </style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	
<?php include 'connection.php' ?>


  <div id="navbar">
  <a class="hi" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a class="hello" href="table.php"><i class="fa fa-list"></i> User List</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  
  </div>


	 <h1><u>FIRST BANK</u></h1>
  <h5><i><u>Always at first</u></i></h5>
  <!-- <h3>The Bank that begins with U.</h3> -->
  
  <div class="container">
    <button><a href="money.php"><b>SEND MONEY</b></a></button>
    <!--\ <button id="user"><a href="table.php">View user list</button>
      <button><a href="transaction.php">Transaction History</a></button> -->
  </div>
  
  <div class="footer">
  <marquee behavior="scroll" direction="left">
  <p>Made By Rahul Poojary | The Sparks Foundation</p></marquee>
</div>


</body>

	

</body>
</html>