<?php 
require 'header.php'; // call the header Template 

?>


<table class="table table-bordered">
    <form method="POST" action="functions.php">	
	    <thead class="alert-info">
		    <tr>
                <th>Tasks Name</th>
                <th>Start Date</th>
                <th>Status</th>
                <th>Due Date</th>
                <th><input type="checkbox" onclick="selectedCheckbox(this)"> Select All</th>
		    </tr>
        </thead>
		<tbody class="tbody">
<?php

require'connectsql.php';
$query = $connectsql->prepare("SELECT * FROM `todolists`  ORDER BY `todotasksname` desc");
$query->execute();

$rows=0;
while($fetch = $query->fetch()){
$rows++; ?>	
	<tr>
        <td><?php echo $fetch['todotasksname']?></td>
        <td><?php echo $fetch['startdate']?></td>
        <td><?php echo $fetch['statustask']?></td>
        <td><?php echo $fetch['completeddate']?></td>
    <?php
	    if($rows != 0){
	?>
	    <td><input type="checkbox" name="check[]" onclick="countCheckbox()" value="<?php echo $fetch['todotasksid']?>"></td>
    <?php
		}
	?>
    </tr>
<?php	 }  ?>
	</tbody>
	    <?php
		    if($rows != 0){
		?>
	<tfoot>
	    <tr>
		    <td colspan="5"><button name="delete" class="btn btn-danger pull-right">Delete</button></td>
		</tr>
		</tfoot>
	<?php
	    }
	?>
	</form>		
	</table>
    
<?php 
require 'footer.php'; // call the Footer Template 

?>
