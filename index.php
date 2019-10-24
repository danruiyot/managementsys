<?php
session_start();
ob_start();
include_once('controller/product.php');
include('count/countall.php');
include('templates/header.php');

?>
<br>
<br>
<div id="showed">
  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter w3-padding ">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php productCount(); ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Products</h4>
      </div>
    </div>
    <div class="w3-quarter w3-padding">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-group w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php $table='vendors'; employeeCount($table); ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Vendors</h4>
      </div>
    </div>
  
          <div class="w3-quarter w3-padding">
                <div class="w3-container w3-purple w3-padding-16">
                  <div class="w3-left"><i class="fa fa fa-question w3-xxxlarge"></i></div>
                  <div class="w3-right">
                    <h3><?php enquiriesCount(); ?></h3>
                  </div>
                  <div class="w3-clear"></div>
                  <h4>Enquiries</h4>
                </div>
              </div>


              <div class="w3-quarter w3-padding">
      <div class="w3-container w3-yellow w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php customerCount(); ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Customers</h4>
      </div>
    </div>
                        <div class="w3-quarter w3-padding">
                <div class="w3-container w3-green w3-padding-16">
                  <div class="w3-left"><i class="fa fa-group w3-xxxlarge"></i></div>
                  <div class="w3-right">
                    <h3><?php $table='employee'; employeeCount($table); ?></h3>
                  </div>
                  <div class="w3-clear"></div>
                  <h4>Employee</h4>
                </div>
            </div>

            <div class="w3-quarter w3-padding">
      <div class="w3-container w3-orange w3-padding-16">
        <div class="w3-left"><i class="fa fa-group w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php $table='contactperson'; employeeCount($table); ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Contact Persons</h4>
      </div>
    </div>

  

              </div>
              </div>
    <div>

  
</div>          

</body>
</html>
