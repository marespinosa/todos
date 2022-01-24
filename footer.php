
	<section class="menunav">
		<ul>
			<li><a href="#" id="modal_opener">Add</a></li>
			<li><a href="index.php">View</a></li>
			<li>
			<td colspan="5"><a href="delete.php"> Delete</a></td>
			</li>
		</ul>
	</section>

<p>© Maricon Espinosa. All Rights Reserved. 2022</p>

</div> <!---- end:container--->

<div class="modal" style="display: none">
  <div class="overlay"></div>
  <div class="modal_content">
  <form class="form" action="functions.php" method="post">
			<input type="text" class="input-product" name="todotasksname" placeholder="tasks name" required />
			<select class="form-select" name="statustask">
				<option selected>Select</option>
				<option value="Pending" >Pending</option>
				<option value="On progress">On progress</option>
				<option value="Complete">Complete</option>
			</select>
			<input type="date" class="input-product" name="startdate" required>
			<input type="date" class="input-product" name="completeddate" required>
			<input type="submit" name="add" value="Add" class="add-button">
		</form>
    <button title="Close" class="close_modal">x</button>  
  </div>
</div>




<script src="js/modal.js"></script>
</body>
</html>
