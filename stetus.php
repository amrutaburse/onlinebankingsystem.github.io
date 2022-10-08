<div class="col-sm-6 mt-5 mx-3">
	<form action="" method="POST" class="form-inline">
		<div class="form-group">
			<label for="checkid">Enter Request Id:</label>
			<input type="text" class="form-control" name="id" id="id">
			
		</div>
		<button type="submit" class="btn btn-danger" name="checkid">Search</button>
		
	</form>
	<?php
	if(isset($_REQUEST['checkid'])){
		$sql ="SELECT * FROM `approve` WHERE requestid= {
		$_REQUEST['checkid']}"
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	}
     
	?>
	<h3 class="text-centre mt-5">ASSIGNED WORK DETAILS</h3>
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td>REQUEST ID</td>
			</tr>
		</tbody>
		
	</table>
	
</div> 