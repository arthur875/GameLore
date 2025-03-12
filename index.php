<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>GameLore Website</title>

    <link rel="stylesheet" href="css/homepage.css">
  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <!--img src="src/logo.png" alt=""-->
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="browse.html">Browse</a></li>
                        <li><a href="details.html">Details</a></li>
                        <li><a href="streams.html">Streams</a></li>
                        <li><a href="html/login.html">Profile</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome To GameLore</h6>
                  <h4><em>Browse</em> Our Popular Games Here</h4>
                  <div class="main-button">
                    <a href="browse.html">Browse Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <?php
$games = [
    ["image" => "src/popular-01.jpg", "title" => "Fortnite", "genre" => "Sandbox", "rating" => "4.8", "downloads" => "2.3M"],
    ["image" => "src/popular-02.jpg", "title" => "PubG", "genre" => "Battle S", "rating" => "4.8", "downloads" => "2.3M"],
    ["image" => "src/popular-03.jpg", "title" => "Dota2", "genre" => "Steam-X", "rating" => "4.8", "downloads" => "2.3M"],
    ["image" => "src/popular-04.jpg", "title" => "CS-GO", "genre" => "Legendary", "rating" => "4.8", "downloads" => "2.3M"],
    ["image" => "src/popular-05.jpg", "title" => "Mini Craft", "genre" => "Legendary", "rating" => "4.8", "downloads" => "2.3M"],
    ["image" => "src/popular-06.jpg", "title" => "Eagles Fly", "genre" => "Matrix Games", "rating" => "4.8", "downloads" => "2.3M"],
    ["image" => "src/popular-07.jpg", "title" => "Warface", "genre" => "Max 3D", "rating" => "4.8", "downloads" => "2.3M"],
    ["image" => "src/popular-08.jpg", "title" => "Warcraft", "genre" => "Legend", "rating" => "4.8", "downloads" => "2.3M"],
    ["image" => "src/popular-08.jpg", "title" => "Warcraft", "genre" => "Legend", "rating" => "4.8", "downloads" => "2.3M"],
    ["image" => "src/popular-08.jpg", "title" => "Warcraft", "genre" => "Legend", "rating" => "4.8", "downloads" => "2.4M"]
];
?>


<!-- ***** Most Popular Start ***** -->
<div class="most-popular">
    <div class="row">
        <div>
            <div class="heading-section">
                <h4><em>Most Popular</em> Right Now</h4>
            </div>
            <div class="spacer"></div>
            <div class="row">
                <?php foreach ($games as $game): ?>
                    <div class="item-box">
                        <div class="item">
                            <img src="<?php echo $game['image']; ?>" alt="<?php echo $game['title']; ?>">
                            <h4><?php echo $game['title']; ?><br><span><?php echo $game['genre']; ?></span></h4>
                            <ul>
                                <li><i class="fa fa-star"></i> <?php echo $game['rating']; ?></li>
                                <li><i class="fa fa-download"></i> <?php echo $game['downloads']; ?></li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="main-button">
                <a href="browse.html">Discover Popular</a>
            </div>
            <div class="spacer"></div>
        </div>
    </div>
</div>
<!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library">
            <div>
              <div class="heading-section">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="src/game-01.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2036</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="src/game-02.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>22/06/2036</span></li>
                  <li><h4>Hours Played</h4><span>740 H 52 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button"><a href="#">Download</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="src/game-03.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2036</span></li>
                  <li><h4>Hours Played</h4><span>892 H 14 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
            <div>
              <div class="main-button">
                <a href="profile.html">View Your Library</a>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  </body>

</html>
