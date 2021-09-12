

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="profile.css?v=<?php echo time();?>">
  <title>Musiconnect</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>MUSI</span>CON<span>N</span>ect</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#" data-after="Home">HOME</a></li>
            <li><a href="#" data-after="Service">LOGIN</a></li>
            <li><a href="#" data-after="Projects">REGISTRATION</a></li>
            <li><a href="#" data-after="Contact">LATEST PROGRAM</a></li>
            <li><a href="#" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
          
              <?php
                  include('db.php');
                  $str=mysqli_real_escape_string($con,$_GET['id']);
                  $sql="select * from musician where Name like '%$str%'";
                  $res=mysqli_query($con,$sql);
                  if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                        $img=$row['image'];
          
                        }
                    }
                    
              ?>
          
              <img  src="img/<?php echo $img?>" alt="" height="100">
          

    <div class="herocontainer">
        
      <div>
          <div class="details">
                <?php
                    include('db.php');
                    $str=mysqli_real_escape_string($con,$_GET['id']);
                    $sql="select * from musician where Name like '%$str%'";
                    $res=mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                    echo  '<h1>'.'Name: '.$row['Name'].'</h1>';
                    echo "<br/>";
                    echo '<h1>'.'Genre: '.$row['Genre'].'</h1>';
                
                        
                
                    
                        }
                    }      
                ?>
        </div>
        
        <a  href="#" type="button" class="cta">Book Now</a>
      </div>
    </div>
  </section>
  <br>
  <!-- End Hero Section  -->

<!-- Slideshow container -->
<section id="softwares">
<div class="slideshow-container">
  <div><br>
    <div class="section-top">
      <h1 class="section-title">News<span> Feed</span></h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum deleniti maiores pariatur assumenda quas magni et, doloribus quod voluptate quasi molestiae magnam officiis dolorum, dolor provident atque molestias voluptatum explicabo!</p>
      
  
      
    </div>
  </div>
<br>
  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <div class="soft-img">
    <img src="img/img-1.png" style="width:100%"></div>
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <div class="soft-img">
      <img src="img/img-1.png" style="width:100%"></div>
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <div class="soft-img">
      <img src="img/img-1.png" style="width:100%"></div>
    <div class="text">Caption Three</div>
  </div>

 

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Cal <span>en </span>dar</h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Upcoming Event</h1>
            
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
        </div>
    </div>
  </section>

       
      
   
 

  

  
</body>
</html>

