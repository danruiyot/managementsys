<div>
<div>
<div class="w3-section">
     <label>Customer name</label>
     <?php
     selectCustomer();
     ?>
     <br>
     <span>* If customer is not Present, please <a href="../customer/newcustomer.php">add</a> first</span>
      </div>

      <div class="w3-section">
     <label>What is the requirement from customer</label>
        <input class="w3-input w3-border" type="text" name="customer_requirements" required>
      </div>
      <div class="w3-section">
        <label>Category</label>
        <select class="w3-select w3-border" name="product_service">
    <option value="" disabled selected>Choose Category</option>
    <option value="product">Product Requirement</option>
    <option value="service">Service Requirement</option>
    <option value="repair">Repair</option>
    <option value="rent">Rent</option>
  </select>
      </div>
      <div class="w3-section">
        <label>PRODUCT NAME OR SERVICE NAME</label>
        <input class="w3-input w3-border" type="text" name="product_service_name" required>
      </div>
      <div class="w3-section">
        <label>Quantity</label>
        <input class="w3-input w3-border" type="number" name="quantity" required>
      </div>

      
            <div class="w3-section">
        <label>Enquiry Type</label>
        <select class="w3-select w3-border" name="enq_type">
    <option value="" disabled selected>Choose Category</option>
    <option value="stdenquiry">STD Enquiry</option>
    <option value="nonstdenquiry">Non STD Enquiry</option>
    <option value="repair">Repair</option>
  </select>
      </div>

      <div class="w3-section">
        <label>Does Customer have a datasheet?</label>
        <p>
        <input class="w3-radio" type="radio" name="datasheetquestion" value="yes" checked>
  <label>Yes</label></p>
  <p>
  <input class="w3-radio" type="radio" name="datasheetquestion" value="no">
  <label>No</label></p>
      </div>
      <div class="w3-section">
        <label>Data sheet Upload</label>
        <input class="w3-input w3-border" type="file" name="datasheet" required>
      </div>

      <div class="w3-section">
        <label>Upload photos or files from Customer</label>
        <input class="w3-input w3-border" type="file" name="files" required>
      </div>
      
      <div class="w3-section">
        <label>IS INITIAL VISIT REQUIRED FROM PRODUCT MANAGER OR DEALER</label>
        <select class="w3-select w3-border" name="visit_manager_dealer">
    <option value="" disabled selected>Choose an option</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select>
      </div>
      <div class="w3-section">
        <label>IS INITIAL VISIT REQUIRED FROM DESIGN ENGINEER</label>
        <select class="w3-select w3-border" name="visit_designengineer">
    <option value="" disabled selected>Choose an option</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select>
      </div>

      <button type="submit" name="enquiry" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Submit</button>
