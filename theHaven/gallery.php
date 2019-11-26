<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content="The Haven sanctuary for injured and orphaned animals">
      <meta name="keywords" content="animals, injured, orphaned, charity, baby animal, hurt, stranded, lost">
      <meta name="author" content="Web Design Workshop I group 3">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title>The Haven - Home</title>
    <title>The Haven - Photo Gallery</title>
    <link rel="stylesheet" href="resetStandard.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class = "header">
      <h1>The Haven - Photo Gallery</h1>
      <div class="topnav" id="myTopnav">
        <a href="home.html" class="link">Home</a>
        <a href="hych.html" class ="link">How You Can Help</a>
        <a href="faa.html" class="link">Found an Animal?</a>
        <a href="gallery.php" class="active link">Photo Gallery</a>
        <a href="store.html" class="link">Store</a>
        <a href="javascript:void(0);" class="icon" onclick="mobileMenu()">
          <img src="images/menu.png" height="20px" width="20px"/>
        </a>
      </div>
    </div>

    <div id="zoom_view" class="zoom_view">
      <img src="images/left_arrow.png" class="left_arrow" id="left">
      <img src="" class="zoom_img" id="zoom_img">
      <img src="images/right_arrow.png" class="right_arrow" id="right">
      <img src="images/close.png" class="close" id="close">
    </div>


    <div class="content">
      <div class="group">
      <h1>Welcome to Our Photo Gallery</h1>
        <p>Below are photos of some of our past and present wild friends as they make their
           way back to their natural habitat.  Come back and visit often, as we update
           this page with new photos regularly.</p>
      </div>

      <div id="gallery" class="gallery">
        <?php
          $all_files = glob("images/gallery/*.*");
          //echo($all_files[0]);
          for ($i=0; $i<count($all_files); $i++){
            $image_name = $all_files[$i];
            $supported_format = array('gif','jpg','jpeg','png');
            $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_format)){
                  echo '<img src="'.$image_name .'" class= "gallery_img" alt="'.$image_name.'" />';
              }
              else {
                continue;
               }
            }
         ?>
      </div>
    </div>

    <footer>
      <div class="footer_item left">
        <h4>Contact Us</h4>
        <p>(407) 260-6137</p>
        <p>HelpWildlife@thehavenonline.org</p>
        <p>610 Birch Blvd, Altamonte Springs FL 32701</p>
      </div>

      <div class="footer_item right navlinks">
        <div class="navlinks_item">
          <button type="button" class="collapsible"><a href="home.html">Home</a><p class=
            "plusMinus">+</p></button>
            <div class="dropdown">
              <a href="home.html#intro">Introduction</a>
              <a href ="home.html#interview">Interview</a>
              <a href ="home.html#rehabilitation">Rehabilitation</a>
              <a href ="home.html#education">Education</a>
            </div>
        </div>
        <div class="navlinks_item">
          <button type="button" class="collapsible"><a href="hych.html">How You Can Help</a><p class=
            "plusMinus">+</p></button>
            <div class="dropdown">
                <a href="hych.html#intro">Introduction</a>
                <a href ="hych.html#volunteer">Volunteer</a>
                <a href ="hych.html#contribute">Make a Financial Contribution</a>
                <a href ="hych.html#supplies">Donate Supplies</a>
                <a href ="hych.html#fundraise">Host a Fundraiser</a>
                <a href ="hych.html#supplies">Donate Supplies</a>
                <a href ="hych.html#needs">Needs List</a>
                <a href ="hych.html#wish">Wish List</a>
            </div>
          </div>
        <div class="navlinks_item">
          <button type="button" class="collapsible"><a href="faa.html">Found and Animal?</a><p class=
            "plusMinus">+</p></button>
            <div class="dropdown">
              <a href = "faa.html#intro">Before you Call</a>
              <a href = "faa.html#adults">Adult Animals</a>
              <a href = "faa.html#babies">Baby Animals</a>            </div>
          </div>
        <div class="navlinks_item">
          <button type="button" class="collapsible"><a href="gallery.html">Photo Gallery</a></button>
          </div>
        <div class="navlinks_item">
          <button type="button" class="collapsible"><a href="store.html">Store</a><p class=
            "plusMinus">+</p></button>
            <div class="dropdown">
              <a href = "store.html#shirts">Shirts</a>
              <a href = "store.html#stickers">Stickers</a>
              <a href = "store.html#membership">Membership</a>
            </div>
          </div>
      </div>

      <div class="footer_item left">
        <p>A 501(c)(3) non-profit organization serving Central Florida.</p>
        <a href="https://smile.amazon.com/"><img src="images/AmazonSmileCP.png" alt="Amazon Smile"/></a>
        <img src="images/GSPlatinum.png" alt="Guide Star Verified">
      </div>

    </footer>
    <script src="sitemap_menu.js"></script>
    <script src="main.js"></script>
    <script src="gallery.js"></script>
  </body>
</html>
