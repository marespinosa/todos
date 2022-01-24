<?php 
require 'header.php'; // call the header Template 

?>

<table class="table">
	<thead class="alert-info">
		<tr>
			<th>Tasks Name</th>
			<th>Start Date</th>
			<th>Status</th>
			<th>Due Date</th>
		</tr>
	</thead>
	<tbody class="tbody completetask">		
	<?php
		require_once 'connectsql.php';
		require_once 'functions.php';
		echo countTasksComplete($connectsql);
		echo completetask($connectsql);
	?>

	</tbody>
</table>

<?php 
require 'footer.php'; // call the Footer Template 

?>




