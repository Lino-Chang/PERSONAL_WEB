<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lino Personal Website</title>

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
        <h2>您好，我是張家豪，具良好的溝通協調、分析能力，具積極主動的工作態度，並願意投入成本與時間學習新的技能。</h2>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
    </section>

<!-- home section ends -->


<!-- about section stsrts -->

    <section class="about" id="about">
        <h1 class="heading"><span>About</span> Me</h1>

        <div class="row">
            <div class="info">
                <h3><span>姓名:</span>張家豪</h3>
                <h3><span>學歷:</span>國立臺北護理健康大學 資訊管理系</h3>
                <h3><span>希望職類:</span>軟體設計工程師 測試工程師</h3>
                <h3><span>專長:</span>C++ Java Html CSS</h3>
                <a href="CV.pdf" target="_blank"><button class="btn">Download CV <i class="fas fa-download"></i></button></a>
                
            </div>
        

            <div class="counter">
                <div class="box">
                    <span>4+</span>
                    <h3>編譯經驗</h3>
                </div>

                <div class="box">
                    <span>3+</span>
                    <h3>學術投稿</h3>
                </div>

                <div class="box">
                    <span>6+</span>
                    <h3>專案製作</h3>
                </div>

                <div class="box">
                    <span>10+</span>
                    <h3>比賽經驗</h3>
                </div>

            </div>
        </div>
    </section>
<!-- about section ends -->

<!-- education section starts -->

    <section class="education" id="education">
        <h1 class="heading">my<span> Education</span></h1>

        <div class="box-countainer">

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2016/09 - 2018/06</span>
                <h3>內湖高工</h3>
                <p>資訊科</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2018/9 - 2022/6</span>
                <h3>國立臺北護理健康大學</h3>
                <p>資訊管理系</p>
            </div>

            <div class="box">

            </div>

            <div class="box">
            <i class="fa-solid fa-crown"></i>
                <span>110</span>
                <h3>資訊應用服務創新競賽 </h3>
                <p>第二名</p>
            </div>

            <div class="box">
            <i class="fa-solid fa-crown"></i>
                <span>110</span>
                <h3> 新創盃-網路行銷組  </h3>
                <p>第三名</p>
            </div>

            <div class="box">
            <i class="fa-solid fa-crown"></i>
                <span>110</span>
                <h3> 「H & H」提案競賽  </h3>
                <p>佳作</p>
            </div>

            <div class="box">
            <i class="fa-solid fa-pen"></i>
                <span>110</span>
                <h3> 品質管理年會研討會   </h3>
                <p>論文發表</p>
            </div>

            <div class="box">
            <i class="fa-solid fa-pen"></i>
                <span>110</span>
                <h3> 健康促進學術研討會    </h3>
                <p>壁報論文發表</p>
            </div>

            <div class="box">
            <i class="fa-solid fa-pen"></i>
                <span>109</span>
                <h3> 醫護與健康科技研討會    </h3>
                <p>壁報論文發表</p>
            </div>



           

        </div>
    </section>
<!-- education section ends -->

<!-- portfolio section starts -->

    <sectiom class="portfolio" id="portfolio">
        <h1 class="heading">my<span> Portfolio</span></h1>

        <div class="box-countainer">

            <div class="box">
                <a href= "portfolio/人工智慧應用-基於卷積神經網路於肺炎辨識之研究.pdf" target ="_blank"><img src="images/ai.jpg" alt=""></a>
            </div>

            <div class="box">
                <a href= "portfolio/系統分析應用-e-Portfolio數位學習歷程系統分析.pdf" target ="_blank"><img src="images/system.jpg" alt=""></a>
            </div>

            <div class="box">
                <a href= "portfolio/系統分析應用-新冠肺炎疫情即時通報系統需求分析.pdf" target ="_blank"><img src="images/covid.png" alt=""></a>
            </div>

            <div class="box">
                <a href= "portfolio/商業分析應用-環球晶圓有限股份公司分析.pdf" target ="_blank"><img src="images/Business.jpg" alt=""></a>
            </div>

            <div class="box">
            <a href= "portfolio/app final.pdf" target ="_blank"><img src="images/dog.jfif" alt=""></a>
            </div>

            <div class="box">
            <a href= "portfolio/R final.pdf" target ="_blank"><img src="images/analysis.jfif" alt=""></a>
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
                    <h3><i class="fas fa-envelope"></i> linoshao81610@gmail.com</h3>
                    <h3><i class="fas fa-map-marker-alt"></i> 新莊 新北</h3>
                </div>
            </div>

            <form action = " " method = "POST">
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
	  if(isset($_POST["name"])&&isset($_POST["email"]))
      {
        if(empty($_POST["name"])||empty($_POST["email"]))
        {
          echo "<script>alert('請輸入姓名與電子信箱');</script>";
        }
        else
        {
            echo "<script>alert('成功送出');</script>";
            $name = $_POST["name"];
            $email = $_POST["email"];
            $project = $_POST["project"];
            $message = $_POST["message"];
          
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




