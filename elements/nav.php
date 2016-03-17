<?php //echo '<pre>'; print_r($_SESSION);?>
<div class="menu_nav">
        <ul>
          <li <?php if(strpos($_SERVER['REQUEST_URI'],'index')  !== false){  echo "class='active'"; }else{ } ?>><a href="index.php"><span>Home Page</span></a></li>
          <?php if(!isset($_SESSION['name']) &&  !isset($_SESSION['pwd'])){?>
          <li <?php if(strpos($_SERVER['REQUEST_URI'],'support')  !== false){ echo  "class='active'"; }else{ }  ?>><a href="support.php">LOG-IN</a></li>
          <?php } else {
			  $link= $_SESSION['type'] == 'Staff' ? 'odviewstaff.php' : 'odview.php';
			   ?>
           <li <?php if(strpos($_SERVER['REQUEST_URI'],'odview')  !== false || strpos($_SERVER['REQUEST_URI'],'apply')  !== false){ echo  "class='active'"; }else{ }  ?>><a href="<?php echo $link; ?>">Events</a></li>
           <?php if($_SESSION['type'] == 'Admin') { ?>
           <li <?php if(strpos($_SERVER['REQUEST_URI'],'reg')  !== false){ echo  "class='active'"; }else{ }  ?>><a href="reg.php">STAFF REGISTRATION </a></li>
           
          <?php }} ?>
          <li <?php if(strpos($_SERVER['REQUEST_URI'],'about')  !== false){  echo "class='active'"; }else{ }  ?>><a href="about.php"><span>About Us</span></a></li>
          <li <?php if(strpos($_SERVER['REQUEST_URI'],'blog')  !== false){  echo "class='active'"; }else{ }  ?>><a href="blog.php"><span>Blog</span></a></li>
          <li <?php if(strpos($_SERVER['REQUEST_URI'],'contact')  !== false){ echo  "class='active'"; }else{ }  ?>><a href="contact.php"><span>Contact Us</span></a></li>
          <?php if(isset($_SESSION['name']) &&  isset($_SESSION['pwd'])){?>
          <li><a href="logout.php"><span>Log Out</span></a></li>
          <?php } ?>
        </ul>
</div>