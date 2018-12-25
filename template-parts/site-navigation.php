<div class="mytopnav">
  <div class="logo-desk"><a href="./"><img src="./assets/img/logo.png" width="150px"></a></div>

  <div class="menubar">

    <a href="./">Home</a>
    
    <div class="megamenu">
      <a href="about.php">About Us</a>
      <div class="megamenu-content">
          <div class="row text-center">
            <div class="column-3">
              <a href="about.php#company-overview">Company Overview</a>
            </div>
            <div class="column-3">
              <a href="message-from-directors.php">Message from Directors</a>
            </div>
            <div class="column-3">
              <a href="about.php#company-vision">Mission & Vision</a>
            </div>
             
          </div>
        </div>
    </div>
    
    <div class="megamenu">
      <a href="javascript:void(0)">Our Products</a>
      <div class="megamenu-content">
       <div class="row">

          <div class="column">

            <h4>Mixtures</h4>
            <a href="product.php?type=mixtures&prd=top-10-dalmoth">Top-10 Dalmoth</a>
            <a href="product.php?type=mixtures&prd=rijals-dalmoth">Rijal's Dalmoth</a>
            <a href="product.php?type=mixtures&prd=rangeela-dalmoth">Rangeela Dalmoth</a>
            <a href="product.php?type=mixtures&prd=rijals-cornflakes">Rijal's Cornflakes</a>
            <a href="product.php?type=mixtures&prd=rijals-special-mixture-dalmoth">Special Mixture Dalmoth</a>
            <a href="product.php?type=mixtures&prd=navarang-dalmoth">Navarang Dalmoth</a>
            
          </div>

          <div class="column">

            <h4>Furandana</h4>
            <a href="product.php?type=furandana&prd=rijals-furandana" >Rijal's Furandana</a>
            <a href="product.php?type=furandana&prd=rangeela-furandana" >Rangeela Furandana</a>
            <a href="product.php?type=furandana&prd=navarang-furandana" >Navarang Furandana</a>
            
          </div>

          <div class="column">

            <h4>Savory Snacks</h4>
            <a href="product.php?type=snacks&prd=top-10-peanuts" >Top-10 Peanuts</a>
            <a href="product.php?type=snacks&prd=rijals-nutcrackers" >Rijal's Nutcrackers</a>
            <a href="product.php?type=snacks&prd=rijals-salted-peanuts" >Rijals Salted Peanuts</a>
            <a href="product.php?type=snacks&prd=rijals-moong-dal" >Rijal's Moong Dal</a>
            <a href="product.php?type=snacks&prd=navarang-mattar-fry" >Navarang Mattar Fry</a>
            <a href="product.php?type=snacks&prd=crispy-chana" >Crispy Chana</a>
            <a href="product.php?type=snacks&prd=kabulichana" >Kabulichana</a>
            <a href="product.php?type=snacks&prd=navarang-bhatmas" >Navarang Spicy Bhatmas</a>
            <a href="product.php?type=snacks&prd=rijals-poprings" >Rijals Poprings</a>
            
          </div>

          <div class="column">

            <h4>Bhujia</h4>
            <a href="product.php?type=bhujia&prd=rijals-pasand-bhujia" >Rijal's Pasand Bhujia</a>
            <a href="product.php?type=bhujia&prd=navarang-aloo-bhujia" >Navarang Aloo Bhujia</a>
            <a href="product.php?type=bhujia&prd=navarang-badam-bhujia" >Navarang Badam Bhujia</a>
            <a href="product.php?type=bhujia&prd=rijals-bhujia" >Rijal's Bhujia</a>

          </div>

          <div class="column">

            <h4>Tea Time Masti</h4>
            <a href="product.php?type=tea-time-masti&prd=navarang-crispy-mathari" >Navarang Crispy Mathari</a>
            <a href="product.php?type=tea-time-masti&prd=navarang-crispy-nimki" >Navarang Crispy Nimki</a>
            
          </div>
          
        </div>
      </div>
    </div>

    <a href="careers.php">Careers</a>
    
    <div class="megamenu">
        <a href="#">Contact Us</a>
        <div class="megamenu-content">
          <div class="row text-center">

            <div class="column-2">
              <a href="complaints-feedback.php">Complaints & Feedback</a>
            </div>

            
            <div class="column-2">
              <a href="distributors.php">Our Distributors</a>
            </div>

            

          </div>
        </div>
    </div>

  </div>

  <div onclick="show_hidemenu()" class="bars-icon"><a href="#"><i class="fa fa-bars"></i></a></div>
 </div>



<!--mobile menu -->

 <div class="side-menu container" id="sideMenu">
    <div class="close" onclick="show_hidemenu()"><i class="fa fa-times"></i></div>
    <ul>
      <li><a href="#">Home</a></li>

      <li>
        <a href="#" onclick="showlist('about-list','about-list-icon')">About Us <i id="about-list-icon" class="fas fa-plus-square"></i></a>
        <ul id="about-list" class="about-list">
          <li><a href="#">Company Overview</a></li>
          <li><a href="#">Awards & Recognition</a></li>
          <li><a href="#">Message From Directors</a></li>
          <li><a href="#">Mission & Vision</a></li>
          <li><a href="#">Rijal's Food & Beverages</a></li>
        </ul>
      </li>

      <li>
        <a href="#" onclick="showlist('product-list','product-list-icon')">Our Products <i id="product-list-icon" class="fas fa-plus-square"></i></a>
        <ul class="product-list" id="product-list">
          
          <li>
            <a href="#" onclick="showlist('mixture-list-inner','mixture-list-inner-icon')">Mixtures <i id="mixture-list-inner-icon" class="fas fa-plus-square"></i></a>
            <ul id="mixture-list-inner" class="product-list-inner">
              <li><a href="product.php?type=mixtures&prd=top-10-dalmoth">Top-10 Dalmoth</a></li>
              <li><a href="product.php?type=mixtures&prd=rijals-dalmoth">Rijal's Dalmoth</a></li>
              <li><a href="product.php?type=mixtures&prd=rangeela-dalmoth">Rangeela Dalmoth</a></li>
              <li><a href="product.php?type=mixtures&prd=rijals-cornflakes">Rijal's Cornflakes</a></li>
              <li><a href="product.php?type=mixtures&prd=rijals-special-mixture-dalmoth">Special Mixture Dalmoth</a></li>
              <li><a href="product.php?type=mixtures&prd=navarang-dalmoth">Navarang Dalmoth</a></li>
            </ul>
          </li>

            <li>
            <a href="#" onclick="showlist('furandana-list-inner','furandana-list-inner-icon')">Furandana <i id="furandana-list-inner-icon" class="fas fa-plus-square"></i></a>
            <ul id="furandana-list-inner" class="product-list-inner">
              <li><a href="product.php?type=furandana&prd=rijals-furandana">Rijal's Furandana</a></li>
              <li><a href="product.php?type=furandana&prd=rangeela-furandana">Rangeela Furandana</a></li>
              <li><a href="product.php?type=furandana&prd=navarang-furandana">Navarang Furandana</a></li>
            </ul>
          </li>

            <li>
            <a href="#" onclick="showlist('snacks-list-inner','snacks-list-inner-icon')">Savory Snacks<i id="snacks-list-inner-icon" class="fas fa-plus-square"></i></a>
            <ul id="snacks-list-inner" class="product-list-inner">
              <li><a href="product.php?type=snacks&prd=top-10-peanuts">Top-10 Peanuts</a></li>
              <li><a href="product.php?type=snacks&prd=rijals-salted-peanuts">Rijals Salted Peanuts</a></li>
              <li><a href="product.php?type=snacks&prd=rijals-nutcracker">Rijal's Nutcrackers</a></li>
              <li><a href="product.php?type=snacks&prd=rijals-moong-dal">Rijal's Moong Dal</a></li>
              <li><a href="product.php?type=snacks&prd=navarang-mattar-fry">Navarang Mattar Fry</a></li>
              <li><a href="product.php?type=snacks&prd=crispy-chana">Crispy Chana</a></li>
              <li><a href="product.php?type=snacks&prd=kabulichana">Kabulichana</a></li>
              <li><a href="product.php?type=snacks&prd=navarang-bhatmas">Navarang Bhatmas</a></li>
              <li><a href="product.php?type=snacks&prd=navarang-spicy-bhatmas">Navarang Spicy Bhatmas</a></li>
            </ul>
          </li>

            <li>
            <a href="#" onclick="showlist('bhujia-list-inner','bhujia-list-inner-icon')">Bhujia<i id="bhujia-list-inner-icon" class="fas fa-plus-square"></i></a>
            <ul id="bhujia-list-inner" class="product-list-inner">
              <li><a href="product.php?type=bhujia&prd=rijals-pasand-bhujia">Rijal's Pasand Bhujia</a></li>
              <li><a href="product.php?type=bhujia&prd=navarang-aloo-bhujia">Navarang Aloo Bhujia</a></li>
              <li><a href="product.php?type=bhujia&prd=navarang-badam-bhujia">Navarang Badam Bhujia</a></li>
              <li><a href="product.php?type=bhujia&prd=rijals-bhujia">Rijal's Bhujia</a></li>
            </ul>
          </li>

            <li>
            <a href="#" onclick="showlist('teatime-list-inner','teatime-list-inner-icon')">Tea Time Masti <i id="teatime-list-inner-icon" class="fas fa-plus-square"></i></a>
            <ul id="teatime-list-inner" class="product-list-inner">
              <li><a href="product.php?type=tea-time-masti&prd=navarang-crispy-mathari">Navarang Crispy Mathari</a></li>
              <li><a href="product.php?type=tea-time-masti&prd=navarang-crispy-nimki">Navarang Crispy Nimki</a></li>
            </ul>
            </li>
        </ul>
      </li>

      <li><a href="#">Careers</a></li>

       <li>
        <a href="#" onclick="showlist('contact-list','contact-list-icon')">Contact Us <i id="contact-list-icon" class="fas fa-plus-square"></i></a>
        <ul class="contact-list" id="contact-list">
          <li><a href="#">Consumer Feedback</a></li>
          <li><a href="#">Complaints Policy</a></li>
          <li><a href="#">Distributors</a></li>
        </ul>
      </li>

    </ul>
  </div>


  <script src="./assets/js/site_navigation.js">
   
  </script>