<?php
function getAll(){
    include('../server/conn.php');
    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
        $page_no = $_GET['page_no'];
        } else {
            $page_no = 1;
            }
    
        $total_records_per_page = 10;
        $offset = ($page_no-1) * $total_records_per_page;
        $previous_page = $page_no - 1;
        $next_page = $page_no + 1;
        $adjacents = "2"; 
    
        $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `vendors`");
        $total_records = mysqli_fetch_array($result_count);
        $total_records = $total_records['total_records'];
        $total_no_of_pages = ceil($total_records / $total_records_per_page);
        $second_last = $total_no_of_pages - 1; // total page minus 1
    
    $sql = "SELECT * FROM `vendors` ORDER BY vendor_name ASC LIMIT $offset, $total_records_per_page";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
            
    <div class="w3-row-padding  w3-padding-16" id=""> 
                <div class="">
<div class=" w3-container w3-border-black  ">
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
              <th>Vendor name</th>
              <th>Address</th>
              <th>Mobile number</th>
              <th>Whatsapp number</th>
              <th>Actions</th>
              </tr>
              <?php
                $counter=1;
              while($row = $result->fetch_assoc()) {
                
                  
                  ?>
 
              <tr>
              <td><?php echo $row["vendor_name"]  ?></td>
              <td><?php echo $row["address"]  ?></td>
              <td><?php echo $row["mobile1"]  ?></td>
              <td><?php echo $row["whatsapp_no"]  ?></td>
              <td>
              <form action="delete.php" method="post"onSubmit="return confirm('are you sure?')">
              <a class="fa fa-eye" href="view.php?q=<?php echo $row["v_id"]; ?>"></a>
              <a class="fa fa-pencil" href="edit.php?who=<?php echo $row["v_id"]; ?>"></a>
            <input type="hidden" name="vendor_id" value="<?php echo $row["v_id"];  ?>">
            <button  class="w3-btn"type="submit" name="deletes"><span class="fa fa-trash"></span></button>
              </form>
              </td>
              </tr>
    
    <?php
   
        }
        $counter++;
        ?>
        </table>
</div>
    </div>
    </div>
    <div class="w3-margin w3-padding">
    <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>
    <ul class="pagination">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='w3-active'><a>$counter</a></li>";
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
		} ?>
</ul>
</div>
            <?php
        
    } else {
        echo "0 results";
    }
    $conn->close();
}


?>