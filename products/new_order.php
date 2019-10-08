<div class="w3-section">
            <div class="w3-section">
            <div class="w3-center w3-theme-l4">
<h3>New Order</h3>
</div>
<hr>
        <label>What is the requirement from customer</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Category</label>
        <select class="w3-select w3-border" name="option">
    <option value="" disabled selected>Choose Category</option>
    <option value="product">Product</option>
    <option value="requirement">Requirement</option>
    <option value="service">Service</option>
  </select>
      </div>
      <div class="w3-section">
        <label>PRODUCT NAME OR SERVICE NAME</label>
        <input class="w3-input w3-border" type="text" name="name_of_order" required>
      </div>
      <div class="w3-section">
        <label>Quantity</label>
        <input class="w3-input w3-border" type="text" name="quantity" required>
      </div>
      <div class="w3-section">
        <label>Does Customer have a datasheet?</label>
        <p>
        <input class="w3-radio" type="radio" name="datasheet" value="yes" checked>
  <label>Yes</label></p>
  <p>
  <input class="w3-radio" type="radio" name="datasheet" value="no">
  <label>No</label></p>
      </div>
      <div class="w3-section">
        <label>Data sheet Upload</label>
        <input class="w3-input w3-border" type="file" name="datasheet_file" required>
      </div>

      <div class="w3-section">
        <label>Upload photos or files from Customer</label>
        <input class="w3-input w3-border" type="file" name="files" required>
      </div>
      
      <div class="w3-section">
        <label>IS INITIAL VISIT REQUIRED FROM PRODUCT MANAGER OR DEALER</label>
        <select class="w3-select w3-border" name="option">
    <option value="" disabled selected>Choose an option</option>
    <option value="1">Yes</option>
    <option value="2">No</option>
  </select>
      </div>
      <div class="w3-section">
        <label>IS INITIAL VISIT REQUIRED FROM DESIGN ENGINEER</label>
        <select class="w3-select w3-border" name="option">
    <option value="" disabled selected>Choose an option</option>
    <option value="1">Yes</option>
    <option value="2">No</option>
  </select>
      </div>

      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Make a new Order</button>
ONCE USER SUBMITS ABOVE DATA,ENQUIRY NUMBER SHOULD GET GENERATED AUTOMATICALLY 

