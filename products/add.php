      <div class="w3-section">
      <div class="w3-center w3-theme-l4">
<h3>New Product</h3>
</div>
<hr>
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="p_name" required>
      </div>
      <div class="w3-section">
        <label>Price</label>
        <input class="w3-input w3-border" type="number" name="price" required>
      </div>
      <div class="w3-section">
        <label>stock</label>
        <input class="w3-input w3-border" type="number" name="stock" required>
      </div>
   
      <div class="w3-section">
        <label>Category</label>
        <select class="w3-select w3-border" name="category">
    <option value="" disabled selected>Choose Category</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
  </select>
      </div>
      <div class="w3-section">
        <label>Image</label>
        <input class="w3-input w3-border" type="file" accept="image/*" name="pic" required>
      </div>
      <div class="w3-section">
        <label>Descriptions</label>
        <input class="w3-input w3-border" type="text" name="description" required>
      </div>
      <button type="submit" name="products" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>

