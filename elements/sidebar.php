<div class="sidebar">
    <div class="searchform"></div>
    <div class="clr"></div>
    <div class="gadget">
      <h2 class="star"><span>Sidebar</span> Menu</h2>
      <div class="clr"></div>
      <ul class="sb_menu">
          <li><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="support.php">Log-In</a></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li><a href="blog.php"><span>Blog</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
      </ul>
      <?php  if(strpos($_SERVER['REQUEST_URI'],'index')  !== false){  ?>
      <p><img src="images/download.jpg" width="228" height="143" /></p>
      <p><img src="images/images.jpg" width="226" height="182" /></p>
      <?php } ?> 
    </div>
</div>