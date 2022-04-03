<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Personal Website</title>

    <!-- font awesome sdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">    

</head>
<body>

<!-- header section starts -->

    <header>
        <div class="user">
            <img src="images/pic2.jpg" alt="">
            <h3 class ="name" >Lino Chang</h3>
            <p class="post">front end developer</p>
        </div>

        <nav class="navbar"> 
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#education">education</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#contact">contact</a></li>

            </ul>
        </nav>
    </header>

<!-- header section ends -->

    <div id="menu" class="fas fa-bars"></div>

<!-- home section stsrts -->

    <section class="home" id="home">
        <h3>HI THERE !</h3>
        <h1>I'M <span>Lino Chang</span></h1>
        <p>您好，我是張家豪，具良好的溝通協調、分析能力，具積極主動的工作態，並願意投入成本與時間學習新的技能。</p>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
    </section>

<!-- home section ends -->


<!-- about section stsrts -->

    <section class="about" id="about">
        <h1 class="heading"><span>About</span> Me</h1>

        <div class="row">
            <div class="info">
                <h3><span>name:</span>Lino Chang</h3>
                <h3><span>age:</span>22</h3>
                <h3><span>langugae:</span>Chinese</h3>
                <a href="#"><button class="btn">Download CV <i class="fas fa-download"></i></button></a>
                
            </div>
        

            <div class="counter">
                <div class="box">
                    <span>4</span>
                    <h3>years of experience</h3>
                </div>

                <div class="box">
                    <span>4</span>
                    <h3>years of experience</h3>
                </div>

                <div class="box">
                    <span>4</span>
                    <h3>years of experience</h3>
                </div>

                <div class="box">
                    <span>4</span>
                    <h3>years of experience</h3>
                </div>

            </div>
        </div>
    </section>

<!-- education section starts -->

    <section class="education" id="education">
        <h1 class="heading">my<span> Education</span></h1>

        <div class="box-countainer">

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2016</span>
                <h3>內湖高工</h3>
                <p>資訊科</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2016</span>
                <h3>內湖高工</h3>
                <p>資訊科</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2016</span>
                <h3>內湖高工</h3>
                <p>資訊科</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2016</span>
                <h3>內湖高工</h3>
                <p>資訊科</p>
            </div>

        </div>
    </section>
<!-- education section ends -->

<!-- portfolio section starts -->

    <sectiom class="portfolio" id="portfolio">
        <h1 class="heading">my<span> Portfolio</span></h1>

        <div class="box-countainer">

            <div class="box">
                <img src="images/1-2.jpg" alt="">
            </div>

            <div class="box">
                <img src="images/2-1.jpg" alt="">
            </div>

            <div class="box">
                <img src="images/2-1.jpg" alt="">
            </div>

            <div class="box">
                <img src="images/1.jpg" alt="">
            </div>

            <div class="box">
                <img src="images/1.jpg" alt="">
            </div>

            <div class="box">
                <img src="images/1.jpg" alt="">
            </div>

        </div>
    </sectiom>
<!-- portfolio section ends -->

<!-- contact section starts -->

    <section class=" contact" id="contact" >
        <h1 class="heading"><span>Contact</span> Me</h1>

        <div class="row">

            <div class="content">
                <h3 class="title">content info</h3>
                <div class="info">
                    <h3><i class="fas fa-envelope"></i> linos81610@gmail.com</h3>
                    <h3><i class="fas fa-map-marker-alt"></i> 新莊 新北</h3>
                </div>
            </div>

            <form action = " " method = "GET">
                <input type = "text" placeholder ="name" name = "name" class = "box" >
                <input type = "email" placeholder ="email" name = "email" class = "box" >
                <input type = "text" placeholder ="project" name = "project" class = "box" >
                <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder ="message"></textarea>    

                <button type="submit" class="btn">send <i class="fas fa-paper-plane"></i></button>

            </form>
        </div>


    </section>



<!-- contact section ends -->



<!-- firebase starts -->

<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>
<script type="text/javascript" >
  
  var firebaseConfig = {
    apiKey: "AIzaSyBUSJGbs2soV3YZQ5Zii-rn3z_xHfhxxGY",
    authDomain: "test-95c5d.firebaseapp.com",
    projectId: "test-95c5d",
    storageBucket: "test-95c5d.appspot.com",
    messagingSenderId: "290581667298",
    appId: "1:290581667298:web:81e1512573d326a58fadbb"
  };
  firebase.initializeApp(firebaseConfig);
  
  var db = firebase.firestore();

  function storedata() {
    db.collection("portfolio").doc(name).set({
					Name:name,
					Email:email,
					Project:project,
                    Message:[message]
    });
  }
</script> 

<?php
	  if(isset($_GET["name"])&&isset($_GET["email"]))
      {
        if(empty($_GET["name"])||empty($_GET["email"]))
        {
          echo "<br>請輸入";
        }
        else
        {
            $name = $_GET["name"];
            $email = $_GET["email"];
            $project = $_GET["project"];
            $message = $_GET["message"];
          
        }
  
      }
?>

<script>
	var name="<?php echo $name;?>";
	var email="<?php echo $email;?>";
	var project="<?php echo $project;?>";
    var message="<?php echo $message;?>";
    storedata();
</script>
















<!-- firebase endss -->

<!-- scroll top buttom -->
<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>






    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>

</body>
</html>




