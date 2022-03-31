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

                <div class="box">
                    <span>4</span>
                    <h3>years of experience</h3>
                </div>


            </div>
        </div>
    </section>

<!-- about section ends -->

    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>

</body>
</html>




