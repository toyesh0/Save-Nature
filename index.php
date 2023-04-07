<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
    
    <?php
    include "includes/header.php";
    ?>

    <!-- <div class="banner-container">
        <h2 class="white pb-3">Happiness per Square Foot</h2>

        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for Hotel" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div> -->
<body id="top">

<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="Jett"
  agent-id="cd6adc00-f8e6-448a-8954-ae0499f357b3"
  language-code="en"
> <style>
     df-messenger {
   --df-messenger-bot-message: #878fac;
   --df-messenger-button-titlebar-color: #026B8A;
   --df-messenger-chat-background-color: #fafafa;
   --df-messenger-font-color: white;
   --df-messenger-send-icon: #878fac;
   --df-messenger-user-message: #479b3d;
  }
</style></df-messenger>



<!-- Top Background Image Wrapper -->

<div class="bgded overlay padtop" style="background-image:url('images/demo/backgrounds/01.png');"> 

  <!-- <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 

 
      <h1><a href="index.html">Nekmit</a></h1>


    </div>
    <nav id="mainav" class="fl_right"> 
   
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="pages/font-icons.html">Font Icons</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
      </ul>
      
    </nav>
  </header> -->
  

  <div id="pageintro" class="hoc clear"> 
   
    <article>
      <h3 class="heading">Save Future</h3>
      <p>It is a well-known fact; we don't value a thing until we lost it. Here from thing I mean the trees and plants. Human beings and animals, all are wholly reliant on trees. Largest portion of our food comes from plants and trees.</p>
      
    </article>
    
  </div>
  
</div>

<!-- End Top Background Image Wrapper -->

<div class="wrapper row1">
  <section id="ctdetails" class="hoc clear"> 
    
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Mon. - Sat.:</strong> 08.00am - 18.00pm</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></div>
      </li>
    </ul>
  </section>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <!-- main body -->

    <div class="page-container">
        <h1 class="city-heading">
            Major Cities for NGO's
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>
    

    <section id="services">
      <div class="sectiontitle">
        <p class="nospace font-xs">Contribute with us</p>
        <h6 class="heading">Save trees, save life.</h6>
      </div>
      <ul class="nospace group grid-3">
        <li class="one_third">
          <article><a href="#"><i class="fas fa-spray-can"></i></a>
            <h6 class="heading">Pesticides and Forestry</h6>
            <p>Pests are a problem in forests just as they are on farms and in gardens. Pesticides may be used in forests to control weeds, insects, animals, or diseases that can damage trees.</p>
            <footer><a href="http://npic.orst.edu/health/forestry.html">More Details &raquo;</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-user-secret"></i></a>
            <h6 class="heading">Illegal Logging</h6>
            <p>Illegal logging is the cutting down of trees, transporting them, or using their products such as timber for economic gains against the prohibition by law.</p>
            <footer><a href="https://www.conserve-energy-future.com/causes-effects-solutions-illegal-logging.php">More Details &raquo;</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-couch"></i></a>
            <h6 class="heading">Wood Utilization</h6>
            <p>Wood is the most versatile raw material the world has ever known. Throughout history, people relied on wood for needs varying from farming tools to building materials.</p>
            <footer><a href="https://www.fao.org/3/XII/0122-A2.htm">More Details &raquo;</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-crow"></i></a>
            <h6 class="heading">Deforestation Affect Birds</h6>
            <p>Deforestation directly causes bird populations to decline, mainly because of the destruction of their habitate.</p>
            <footer><a href="https://www.earthreminder.com/how-does-deforestation-affect-birds/">More Details &raquo;</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-dolly-flatbed"></i></a>
            <h6 class="heading">Forest mafia</h6>
            <p>The Government of serious consequences if the felling of protected trees was allowed as per order issued by the Department.</p>
            <footer><a href="https://www.onmanorama.com/news/kerala/2021/08/28/tree-felling-cases-forest-mafia-kerala.html">More Details &raquo;</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-road"></i></a>
            <h6 class="heading">Illegal forest activities</h6>
            <p>Illegal forest activities include all illegal acts related to forest ecosystems and timber and non-timber forest products</p>
            <footer><a href="https://www.cifor.org/publications/Corporate/FactSheet/illegal_logging.htm">More Details &raquo;</a></footer>
          </article>
        </li>
      </ul>
    </section>

    <!-- / main body -->

    <div class="clear"></div>
  </main>
</div>
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <p class="nospace font-xs">Don't know how to start?</p>
      <h6 class="heading">Don't worry that's why we are here.</h6>
    </div>
    <article id="points" class="group">
      <div class="two_third first">
        <h6 class="heading">Start a tree-planting project</h6>
        <p>We all intuitively know that being in nature makes us feel connected, alive, joyful, part of something greater, and more and more research is showing just how important having access to the natural world is for our health and wellbeing. But despite our reverence for nature, there is a reality that we all must face: that the natural world is in jeopardy.</p>
        <p>Planting trees is an excellent community-owned exercise.</p>
        <ul class="nospace group">
          <li><span>1</span> Decide to do it and plan.</li>
          <li><span>2</span> Identify the types of trees to be planted.</li>
          <li><span>3</span> Recruit volunteers.</li>
          <li><span>4</span> Raise funds to support the project.</li>
          <li><span>5</span> Choose the planting site.</li>
          <li><span>6</span> Follow correct tree planting procedures</li>
          <li><span>7</span> Provide refreshments for guests, invitees, and volunteers at the end of the event.</li>
          <li><span>8</span> Ensure proper care for the plants for at least two to three years</li>
        </ul>
      </div>
      <div class="one_third last"><a class="imgover" href="#"><img src="images/demo/plantTree.png" alt=""></a></div>
    </article>
  </section>
</div>


<div class="wrapper row2">
  <section class="hoc container clear"> 
    <div class="sectiontitle">

      <p class="nospace font-xs">Check out </p>
      <h6 class="heading">The Other Articles</h6>
    </div>
    <ul id="latest" class="nospace group sd-third">
      <li class="one_third first">
        <article>
          <figure><a class="imgover" href="#"><img src="images/demo/pollution.jfif" alt=""></a>
            <figcaption>
              <ul class="nospace meta clear">
                <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                <li>
                  <time datetime="2045-04-06T08:15+00:00">27-09-2022</time>
                </li>
              </ul>
              <h6 class="heading"><a href="#">Industrial Pollution</a></h6>
            </figcaption>
          </figure>
          <p>Industrial factories are major contributors to air pollution. The amount of toxic gases that factories release into the air increases health and environmental damages.</p>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><a class="imgover" href="#"><img src="images/demo/waterPoll.jpg" alt=""></a>
            <figcaption>
              <ul class="nospace meta clear">
                <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                <li>
                  <time datetime="2045-04-05T08:15+00:00">27-09-2022</time>
                </li>
              </ul>
              <h6 class="heading"><a href="#">River Pollution</a></h6>
            </figcaption>
          </figure>
          <p>Water pollution is the contamination of water sources by substances which make the water unusable for drinking, cooking, cleaning, swimming, and other activities.</p>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><a class="imgover" href="#"><img src="images/demo/noisePoll.jpg" alt=""></a>
            <figcaption>
              <ul class="nospace meta clear">
                <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                <li>
                  <time datetime="2045-04-04T08:15+00:00">27-09-2022</time>
                </li>
              </ul>
              <h6 class="heading"><a href="#">Noise Pollution</a></h6>
            </figcaption>
          </figure>
          <p>Noise pollution, also known as environmental noise or sound pollution, is the propagation of noise with ranging impacts on the activity of human or animal life, most of them are harmful to a degree.</p>
        </article>
      </li>
    </ul>
  </section>
</div>



<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>



    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>
