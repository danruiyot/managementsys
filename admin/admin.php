<?php
session_start();
ob_start();

      include_once('../templates/header2.php');
      ?>
      <!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="../lib/images/1491518910_9955.jpg" class="w3-square w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Yusuf</strong></span><br>
      <a  href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#"  class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Products</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Orders</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Customers</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Inquiries</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Product managers</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Enquiries</a>
 </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<div id="default">
  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>
  <hr>
  <?php
include_once('../messages/messages.php')

?>
  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter w3-margin">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Products</h4>
      </div>
    </div>
    <div class="w3-quarter w3-margin">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Customers</h4>
      </div>
    </div>
    <div class="w3-quarter w3-margin">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Orders</h4>
      </div>
    </div> 
    <div class="w3-quarter w3-margin">
            <div class="w3-container w3-orange w3-padding-16">
              <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
              <div class="w3-right">
                <h3>23</h3>
              </div>
              <div class="w3-clear"></div>
              <h4>Product managers</h4>
            </div>
          </div>
          <br>
          <div class="w3-quarter w3-margin">
                <div class="w3-container w3-purple w3-padding-16">
                  <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
                  <div class="w3-right">
                    <h3>23</h3>
                  </div>
                  <div class="w3-clear"></div>
                  <h4>Orders</h4>
                </div>
              </div>

    <div class="w3-quarter w3-margin">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Enquiries</h4>
      </div>
    </div>
  </div>

  <hr>
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>New Visitors</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>New Users</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Bounce Rate</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>

  
  <hr>
  <div class="w3-container">
    <h5>Recent Users</h5>
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <img src="../lib/images/tea.jpg" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Hassan</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="../lib/images/teachermadam.jpg" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Sarah</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="../lib/images/JS137018901.jpg" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Ali</span><br>
      </li>
    </ul>
  </div>
  <hr>
  </div>
  <div id="productM" style="display:none;">
  product managers
  </div>
  <div id="products" style="display:none;">
  products
  </div>
  <div id="orders" style="display:none;">
  orders
  </div>
  <div id="enquiries" style="display:none;">
  enquiries

  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var dashboard = document.getElementById("default");
var products = document.getElementById("products");
var orders = document.getElementById("orders");
var enquiries = document.getElementById("enquiries");
var product_manager = document.getElementById("productM");
// var enquiries = document.getElementById("mySidebar");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
