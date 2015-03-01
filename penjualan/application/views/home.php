<table class="table table-bordered">
        <?php echo $this->session->userdata('username'); ?>
	<tr>
    	<th>Product Name</th>
        <th>Stock</th>
        <th>Price</th>
        <th>Action Update</th>
        <th>Action Delete </th>
    </tr>

    <?php 
    if($products != 0){
    foreach($products as $row){ 
        ?>

    <tr>
    	<td><?php echo $row['productName']?></td>
        <td><?php echo $row['productStock']?></td>
        <td><?php echo $row['productPrice']?></td>
        <td><a href="<?php echo base_url(); ?>product/product_detail/<?php echo $row['productId'];?>">Update</a> </td>
        <td><a href="<?php echo base_url(); ?>product/delete_product/<?php echo $row['productId'];?>">Delete</a> </td>
    </tr>
    
    <?php }
    }else{
    ?>
    <tr>
     <td colspan="5">data not available</td>
    </tr>
    <?php } ?>
</table>
<script type="text/javascript">
    $(document).ready(function(){

    });
</script>