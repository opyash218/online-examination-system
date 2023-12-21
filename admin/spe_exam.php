<?php 
include('top.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['exmne_id']);
		$delete_sql="delete from users where exmne_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}
if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['exmne_id']) && $_GET['exmne_id']>0){
	$type=get_safe_value($_GET['type']);
	$id=get_safe_value($_GET['exmne_id']);
	if($type=='active' || $type=='deactive'){
		$status=1;
		if($type=='deactive'){
			$status=0;
		}
		mysqli_query($con,"update examinee_tbl set status='$status' where exmne_id='$exmne_id'");
		redirect('user.php');
	}

}

$sql="select * from examinee_tbl order by exmne_id ";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Spl. Exam Master</h1>
               <h4 class="box-link"><a href="manage_product.php">Add New</a> </h4>
			  <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">S.No #</th>
                            <th width="20%">exmne_fullname</th>
                            <th width="10%">exmne_course</th>
                            <th width="10%">exmne_gender</th>
                            <th width="10%">exmne_birthdate</th>
                            <th width="10%">exmne_year_level</th>
                            <th width="15%">exmne_email</th>
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
                            <td><?php echo $row['exmne_fullname']?></td>
							<td><?php echo $row['exmne_course']?></td>
							<td><?php echo $row['exmne_gender']?></td>
							<td><?php echo $row['exmne_birthdate']?></td>
							<td><?php echo $row['exmne_year_level']?></td>
							<td><?php echo $row['exmne_email']?></td>
							
							 <td>
							 	<button type="button" class="btn btn-success bg-success">Edit</button>
								
							<br>
								<a type="button" class="badge badge-danger delete_red hand_cursor mt-1 text-white">Delete</a>
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