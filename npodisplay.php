<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPOs</title>
    <link href="HeroBiz\assets\css\main.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style> body {
            background: url("img/whitebg.jpg");
            background-size: cover;
            margin: 0px;
            padding: 0px;
            position: absolute;

        }
          .h1{
           
    display: flex;
   /* border: 2px solid red; */
   background-color: grey;
   justify-content: center;
    /* margin: 23px 34px ; */
    margin: 5px 8px;
font-size: 20px;
font-weight: bold;
    padding: 8px 9px;
    width: 1500px;
    color: white;
    list-style: none;
    text-align: center;
        }
    .table{
        text-align:center;
    }
    td{
        text-align:center;
        font-size:20px;
    }
    th{
        width:200px;
    } 
   
h3{
    font-size:30px;
    font-weight:bold;
    text-align:center;
    text-decoration:underline;
}
.btn{
    background:#BAFFB4;
    border-radius:3px;
    font-size:15px;
    width: 80px;
    border:2px solid black;
    font-weight:normal;
    
    cursor: pointer;
}
 .btn:hover{
    background: white;
    border-radius:3px;
    font-size:19px;
    color: white;
    cursor: pointer;
} 
.btn1{
    background:#FF6464;
    border-radius:3px;
    font-size:19px;
    width:80px;
    cursor: pointer;
}
.btn1:hover{
    background:#EB1D36;
    border-radius:3px;
    font-size:19px;
    color: white;
    
    cursor: pointer;
}
body{
    background:#F4F4F2;
}
#title{
    background:#FFFFFF;
    
}
section{
    padding: 34px;
}
h1{
    color:#66BFBF;
}
li:hover{
    
    color:#66BFBF;
    text-decoration:none;
}


      * {
        box-sizing: border-box;
      }
      
      .loginPopup {
        position: relative;
        text-align: center;
        width: 100%;
      }
      .formPopup {
        display: none;
        position: fixed;
        left: 45%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
      }
      /* .loginPopup1 {
        position: relative;
        text-align: center;
        width: 100%;
      }
      .formPopup1 {
        display: none;
        position: fixed;
        left: 45%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
      } */
      .formContainer {
        max-width: 300px;
        padding: 20px;
        background-color: #fff;
      }
      .formContainer input[type=text],
      .formContainer input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
      }
      .formContainer input[type=text]:focus,
      .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      .formContainer .btn {
        padding: 12px 20px;
        border: none;
        background-color: #8ebf42;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
      }
      .formContainer .cancel {
        background-color: #cc0000;
      }
      .formContainer .btn:hover,
      .openButton:hover {
        opacity: 1;
}
#chamn{
    margin: 29px 0px;
    padding: 11px;
}
#yugat{
    text-decoration:none;
}
</style>
<body>
    <section  id="title">
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

     
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Medonate<span></span></h1>
      </a>

      <nav style id="navbar" class="navbar">
        <ul>

          <li class="dropdown"><a href="HeroBiz\index.php">Home </i></a></li>
          <li><a class="nav-link scrollto" href="donarsign.php">Log-Out</a></li>
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->


    </div>
  </header>
  </section>
  
        <h3>Medicine Available To Pick Up</h3>
    <table border="2">
        <tr class="table">
            <div class="row">
                <div class="col-md-1   col-sm-3">
                <th >Sr No</th>

                </div>
                <div class="col-md-1 col-sm-3">
                <th>Name</th>
                    
                    </div>
                    <div class="col-md-1 col-sm-3">
                    <th>Mobile No</th>
                    
                    </div>
                    <div class="col-md-1 col-sm-3">
                    <th>Address</th>
                    
                    </div>
                    <div class="col-md-1 col-sm-3">
                    <th>Pincode</th>
                    
                    </div>
                    <div class="col-md-1 col-sm-3">
                    <th>Name of Medicine</th>
                    
                    </div>
                    <div class="col-md-1 col-sm-3">
                    <th>Category</th>
                    </div> 
                    <div class="col-md-1 col-sm-3">
                    <th>Date of Expiry</th>
            
                    </div>
                    <div class="col-md-1 col-sm-3">
                    <th>Qantity</th>
                    </div>
                    <div class="col-md-1 col-sm-3">
                    <th>Pickup</th>
                    </div>
                    <div class="col-md-1 col-sm-3">
                    <th>Decline</th>
                    </div>
                    

            </div>

           
      






<?php
           include 'connection.php';
            
            // if($conn) 
            // {
            //      echo "Connection ok";
            
            // }
            // else{
            //     echo "connection failed";
            
            $query= "SELECT * FROM medicine_donar";
            $data = mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);
            ?>

            <?php
           
            if($total !=0){
                while($result = mysqli_fetch_assoc($data))
                {
                    ?>
                   
                   <tr>
                    <td> <?php echo $result['id']; ?></td>
                    <td> <?php echo $result['donar_name']; ?></td>
                    <td> <?php echo $result['mobile']; ?></td>
                    <td> <?php echo $result['address']; ?></td>
                    <td> <?php echo $result['pincode']; ?></td>
                    <td> <?php echo $result['medicine_name']; ?></td>
                    <td> <?php echo $result['category']; ?></td>
                    <td> <?php echo $result['expiry']; ?></td>
                    <td> <?php echo $result['quantity']; ?></td>
                    <td>

                    <button class="btn col-sm-1 col-md-1" onclick="openForm()"><strong>Pickup</strong></button>
    </div>
    <div class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form action="/Hackthaon/message.php" method="post" class="formContainer">
          <h3 id="yugat">Mobile Number</h3>
          
          <input type="number" id="email" placeholder="Enter Phone Number" name="mobile" required>
          <!-- <label for="psw">
            <strong>Password</strong>
          </label>
          <input type="password" id="psw" placeholder="Your Password" name="psw" required> -->
          <button type="submit" class="btn" id="chamn" name="submit" >Enter</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
    </div>
    <script>
      function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
     }
</script>
                    </td>
                    <td>
                    <!-- <button class="btn1" onclick="decline.php"><strong>Decline</strong></button> -->
                    <a href="decline.php"> <button class="btn1" onclick="decline.php"><strong>Decline</strong></button></a>
    
                    </td>

                    </tr>
                    <?php
                }
            }
                else
                {
                 ?>
                    <tr><td>No record found</td></tr>
                    <?php
                }
                ?>
                      

            </table>
            
            </body>
            </html>
       