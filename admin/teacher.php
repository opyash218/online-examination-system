<?php 
include('top.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['teach_id']);
		$delete_sql="delete from users where teach_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}
if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['teach_id']) && $_GET['teach_id']>0){
	$type=get_safe_value($_GET['type']);
	$id=get_safe_value($_GET['teach_id']);
	if($type=='active' || $type=='deactive'){
		$status=1;
		if($type=='deactive'){
			$status=0;
		}
		mysqli_query($con,"update teacher_table set status='$status' where teach_id='$teach_id'");
		redirect('teacher.php');
	}

}

$sql="select * from teacher_table order by teach_id ";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Teacher Master</h1>
               <h4 class="box-link"><a href="manage_product.php">Add New</a> </h4>
			  <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">S.No #</th>
                            <th width="20%">User Name</th>
                            <th width="20%">Passwoed</th>
                            <th width="15%">Added On</th>
							<th width="15%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['email']?></td>
							<td><?php echo $row['password']?></td>
							<td><?php echo $row['date']?></td>
							
							 <td>
							 	<button type="button" class="btn btn-success">Edit</button>
								
							
								<a class="btn btn-danger delete_red hand_cursor"href="?id=<?php echo $row['student_id']?>&type=delete">Delete</a>
							</td>
                           
                        </tr>
                        <?php 
						$i++;
						} } else { ?>
						<tr>
							<td colspan="5">No data found</td>
						</tr>
						<?php } ?>
                      </tbody>
                    </table>
                  </div>
				</div>
              </div>
            </div>
          </div>
        
<?php include('footer.php');?>