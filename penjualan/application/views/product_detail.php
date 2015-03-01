<?php 
$attributes = array('class' => 'form-signin', 'id' => 'form_update');
$action = 'product/update_product/'.$product["productId"];
echo form_open($action,$attributes);
?>
<div class="form-group">
      <label for="productname">Product Name</label>
        <input type="text" class="form-control" name="productName" id="productname" placeholder="Product Name" value="<?php echo $product['productName']; ?>"/>
    </div>
    
    <div class="form-group">
      <label for="Stock">Stock</label>
        <input type="text" class="form-control" name="productStock" id="stock" placeholder="Stock" value="<?php echo $product['productStock']; ?>"/>
    </div>
    
    <div class="form-group">
      <label for="Price">Price</label>
        <input type="text" class="form-control" name="productPrice" id="price" placeholder="Price" value="<?php echo $product['productPrice']; ?>"/>
    </div>

    <input type="submit" class="btn btn-default">
</div>