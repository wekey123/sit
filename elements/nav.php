
<div class="menu_nav">
        <ul>
          <li <?php if(strpos($_SERVER['REQUEST_URI'],'index')  !== false){  echo "class='active'"; }else{ } ?>><a href="index.php"><span>Home Page</span></a></li>
          <li <?php if(strpos($_SERVER['REQUEST_URI'],'support')  !== false){ echo  "class='active'"; }else{ }  ?>><a href="support.php">LOG-IN</a></li>
          <li <?php if(strpos($_SERVER['REQUEST_URI'],'about')  !== false){  echo "class='active'"; }else{ }  ?>><a href="about.php"><span>About Us</span></a></li>
          <li <?php if(strpos($_SERVER['REQUEST_URI'],'blog')  !== false){  echo "class='active'"; }else{ }  ?>><a href="blog.php"><span>Blog</span></a></li>
          <li <?php if(strpos($_SERVER['REQUEST_URI'],'contact')  !== false){ echo  "class='active'"; }else{ }  ?>><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
</div>