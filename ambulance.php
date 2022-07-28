<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <script src="js/output.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1" name="viewport">
	<title></title>
	<style>

*{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }
        body{
        font-family: 'Joan', serif;    
        }
        nav{
            background-color: #856d65;
            height: 80px;
            width: 100%;
            z-index: 1;
            position: fixed;
            font-family: sans-serif;   

        }
        label.logo{
            color: white;
            font-size: 35px;
            line-height: 80px;
            padding: 0 00px;
            font-weight: bold;
        }
        nav ul{
            float: right;
            margin-right: 20px;
             z-index: 1;
        }
        nav ul li{
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
        }
        nav ul li a{
            color: white;
            font-size: 17px;
            padding: 7px 13px;
            border-radius: 3px;
            text-transform: uppercase;
        }
        a.active, a:hover{
            background: #1b9bff;
            transition: .5s;
        }
        .checkbtn{
            font-size: 30px;
            color: white;
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
        }
        #check{
            display: none;
        }
        @media (max-width: 952px){
            label.logo{
                font-size: 30px;
                padding-left: 50px;
            }
            nav ul li a{
                font-size: 16px;
            }
        }
        @media (max-width: 858px){
            .checkbtn{
                display: block;
            }
         nav ul{
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #2c3e50;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }
            nav ul li{
                display: block;
                margin: 30px 0;
                line-height: 30px;
            }
            nav ul li a{
                font-size: 20px;
            }
            a:hover,a.active{
                background: none;
                color: #0082e6;

            } 
            #check:checked ~ ul{
                left: 0;
            }
        }

        nav li a, .dropbtn {
    display: inline-block;
    text-align: center;
    padding: 15px 15px;
    text-decoration: none;
    line-height: 20px; 
    color:white;
    font-weight: 300;
    z-index: 1;
}

nav li.dropdown {
    display: i990000nline-block;
    z-index: 1;
}

nav .dropdown-content {
    display: none;
    background: linear-gradient(to right, #00093c, #2d0b00);
    min-width: 150px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

nav .dropdown-content a {
    color:white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    z-index: 1;
}

nav .dropdown-content a:hover {
    background-color: #1b9bff;
}

nav .dropdown:hover .dropdown-content {
    display: block;
    position:fixed;
}


footer{
            width: 100%;
            position: absolute;
            background: linear-gradient(to right, #75A99F, #287667);
            color: #fff;
            padding: 100px 0 30px;
            font-size: 13px;
            line-height: 20px;
     
        }
        footer img{
            width: 120px;
            height: 15vh;
            border-radius: 50px;
            margin-bottom: 30px;

        }
        .row{
            width: 85%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
        }
        .col{
            flex-basis: 25%;
            padding: 10px;
        }
        .col:nth-child(2), .col:nth-child(3){
            flex-basis: 15%;
        }
        .col h3{
            width: fit-content;
            margin-bottom: 40px;
            position: relative;
        }
        .email-id{
            width: fit-content;
            border-bottom: 1px solid #ccc;
            margin: 20px 0;
        }
        footer ul li{
            list-style: none;
            margin-bottom: 12px;
        }
        footer ul li a{
            text-decoration: none;
            color: #fff;

        }
        form{
            padding-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
            margin-bottom: 50px;
        }
        form input{
            width: 100%;
            background: transparent;
            color: #ccc;
            border: 0;
            outline: none;
        }
        form button{
            background: transparent;
            border: 0;
            outline: none;
            cursor: pointer;
        }
        form button .fas{
            font-size: 16px;
            color: #ccc;

        }
        .social-icons .fab{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 20px;
            color: #000;
            background: #fff;
            margin-right: 15px;
            cursor: pointer;
        }
        hr{
            width: 90%;
            border: 0;
            border-bottom: 1px solid #ccc;
            margin: 20px auto;
        }
        .copyright{
            text-align: center;

        }
        .underline{
            width: 100%;
            height: 5px;
            background: #767676;
            border-radius: 3px;
            position: absolute;
            top: 25px;
            left: 0;
            overflow: hidden;
        }
        .underline span{
            width: 15px;
            height: 100%;
            background: #fff;
            border-radius: 3px;
            position: absolute;
            top: 0;
            left: 10px;
            animation: moving 2s linear infinite;
        }
        @keyframes moving{
            0%{
                left: -20px;
            }
            100%{
                left: 100%;
            }
        }

        @media (max-width: 700px){
            footer{
                bottom: unset;
            }
        }

body{
    margin: 0;
    padding: 0;
    background-color: #333;

}
.heading{
text-align: center;
padding: 10px;
color: white;
	
}
.heading .h1{
    text-transform: capitalize;   
    font-size: 28px;
    line-height: 1.2;
}
.heading span{
    color: crimson;
}

.container-box{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin: 15px;
    box-sizing: border-box;
    transition: all 0.5s ease-in-out;
    align-content: center;
   
}
.container-box .box{
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 300px;
    border-radius: 5px;
    color: #333;
    background-color: #fff;
    padding: 10px;
    margin: 15px 15px;
    transition: all 0.5s ease-in-out;
}
.container-box .box:hover{
    box-shadow: 7px 5px 13px 0px rgba(255, 250, 250, 0.75);
}
.container-box .box-img{
    margin: 10px 0;
    width: 150px;
    height: 150px;
    border-radius: 50%;
}
.container-box .box-img img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
}
.container-box .box-content{
    padding: 15px;
    text-align: center;
}
.container-box .box-content h3{
    font-size: 24px;
    line-height: 1.5;
    text-align: center;
    margin-top: 15px;
    text-transform: capitalize;
}
.container-box::before{
    position: absolute;
    content: "";
    width: 20px;
    height: 6px;
    left: 0;
    top: 0;
    background-color: crimson;
}
.container-box h3::before{
    position: absolute;
    content: "";
    width: 70px;
    height: 2px;
    left: 40%;
    top: 60%;
    background-color: crimson;
    margin-top: 10px;
}
.box-content p{
    font-size: 16px;
    font-weight: 400;
    line-height: 1.6;
    text-align: center;
    opacity: 0.7;
}
.box-content a{
    position: absolute;
    top: 95%;
    left: 50%;
    transform: translate(-50%, 0);
    text-decoration: none;
    display: block;
    padding: 10px;
    text-transform: capitalize;
    color: #fff;
    background-color: crimson;
    border-radius: 2px;
    font-weight: 600;

}



 input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        .centre{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 10%;
        }
        
        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }
        
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        
        input[type=submit]:hover {
            background-color: #4e45a0;
        }
        
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 15px;
            display: block;
        }
        
        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }
        
        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }
        .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 10%;
        }
        .checkbox-inline{
        padding-left: 210px;
            vertical-align: -2px;
        }
        form{
            display: block;
        }
        
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
            }
        }

</style>
</head>
<body>
	<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">JulleinQR</label>
        <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Aboutus.html">About</a></li>
                <li class="dropdown"><a href="#" class="dropbtn">Info Hub</a>
                 <div class="dropdown-content">
      <a href="news.html">Blogs</a>
       <a href="gallery.html">Gallery</a>
    </div></li>
    <li class="dropdown"><a href="#" class="dropbtn">Participate</a>
    <div class="dropdown-content">
      <a href="donate.html">Donate</a>
      <a href="volunteer.html">Volunteer</a>
     
    </div></li>
                <li><a href="ambulance.php">Ambulance Services</a></li>
                <li><a href="programs.html">Sessions</a></li>

            </ul>
    </nav>

    <div class="header">
        <br><h2>MAKING IMPOSSIBLE POSSIBLE</h2><br>
    </div>

<div class="heading">
    <h1> <span>Our</span>  Services</h1>
    
</div>
<div class="container-box">
    <div class="box">
        <div class="box-img">
            <img src="amb.jpg">
        </div>
        <div class="box-content">
            <h3>Event Standby Ambulance</h3>
            <p>Get first aid cover for your event With national coverage, we provide first aid and standby ambulance cover for events…</p>
            <a href="info.html#Road">read more</a>
            
        </div>
    </div>
     <div class="box">
        <div class="box-img">
            <img src="dis.webp">
        </div>
        <div class="box-content">
            <h3>Accidents & Disasters</h3>
            <p>When it comes to saving a life, minutes matterWELNESS SQUAD Rescue Team and Ambulance have the scale, expertise and equipment to provide safety and quick response…</p>
            <a href="info.html#aid">read more</a>
            
        </div>
    </div>

     <div class="box">
        <div class="box-img">
            <img src="lance.jpg">
        </div>
        <div class="box-content">
            <h3>Patient Transfers</h3>
            <p>Getting to hospital for treatmentis essential to saving lives WELNESS SQUAD Rescue Team and  Ambulance provides an affordable, ambulance patient transfer service. Once…</p>
            <a href="info.html#training">read more</a>
            
        </div>
    </div>  
    
</div>


<div class="container" style="width: 60%;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <img class="center" src="avatar.png">
                <h3 style="text-align: center;">Patient Details</h3>
                <form action="saveToDb.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            
                        </div>
                        <?php
                            $select = mysqli_query($conn,"SELECT * FROM `records` ORDER BY id DESC LIMIT 1");
                            $pickLatest = mysqli_fetch_array($select);

                        ?>
                        
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="sname">name</label>
                        </div>
                        <div class="col-75">
                            <input id="sname" name="name" placeholder="name..." type="text">
                        </div>
                    </div>
                    <br>
                        <div class="row">
                        <div class="col-25">
                            <label for="address">address</label>
                        </div>
                        <div class="col-75">
                            <input id="address" name="address" placeholder="address..." type="text">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-25">
                            <label for="telephone">phone</label>
                        </div>
                        <div class="col-75">
                            <input id="phone" name="phone" placeholder="phone..." type="text">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <input type="submit" value="Submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div><!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>

 	<footer>
        <div class="row">
            <div class="col">
                <img src="log.jpg">
                <p>WELNESS SQUAD rescue Team and Ambulance<br>All Lives Matter</p>
            </div>
            <div class="col">
                <h3>Office<div class="underline"><span></span></div></h3>
            <p>Outering Road Road</p>
            <p>Drive-Inn, Nairobi</p>
            <p>Nairobi</p>
            <p class="email-id">eongulo@yahoo.com.com</p>
            <h4>+254718191031</h4>
            </div>
            <div class="col">
                <h3>Links<div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="index.php"> Home </a></li>
                <li><a href="donate.html"> Donate </a></li>
                 <li><a href="volunteer.html"> Volunteer</a></li>
                 <li><a href="news.html#training"> Training </a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Newsletter<div class="underline"><span></span></div></h3>
                <form>
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Enter your email id" required>
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="text"></div>
                <div class="social-icons">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-whatsapp"></i>
                    <i class="fab fa-pinterest"></i>

                </div>
            </div>

        </div>
        <hr>
        <p class="copyright">&copy OnguloDev</p>
    </footer>
</body>
</html>