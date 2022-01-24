<table class="table">
	<thead class="alert-info">
		<tr>
			<th>Tasks Name</th>
			<th>Start Date</th>
			<th>Status</th>
			<th>Due Date</th>
		</tr>
	</thead>
	<tbody class="tbody">		
	<?php
		require_once'connectsql.php';
		require_once'functions.php';
		echo viewTask($connectsql);
	?>
	</tbody>
</table>




