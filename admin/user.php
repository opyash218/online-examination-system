<?php 
include('top.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['student_id']);
		$delete_sql="delete from users where student_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}
if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['student_id']) && $_GET['student_id']>0){
	$type=get_safe_value($_GET['type']);
	$id=get_safe_value($_GET['student_id']);
	if($type=='active' || $type=='deactive'){
		$status=1;
		if($type=='deactive'){
			$status=0;
		}
		mysqli_query($con,"update stud_table set status='$status' where student_id='$student_id'");
		redirect('user.php');
	}

}

$sql="select * from stud_table order by student_id ";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Student Master</h1>
			  <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">S.No #</th>
                            <th width="20%">Name</th>
                            <th width="20%">Email</th>
							<th width="20%">image</th>
							<th width="15%">stud_couse</th>
                            <th width="15%">Added On</th>
							<th width="15%">Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['stud_name']?></td>
							<td><?php echo $row['email']?></td>
							<td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"/></td>
							<td><?php echo $row['stud_couse']?></td>
							<td>
							<?php 
							$dateStr=strtotime($row['added_on']);
							echo date('d-m-Y',$dateStr);
							?>
							</td>
	                          <td>
								<a href="?id=<?php echo $row['student_id']?>&type=delete"><label class="badge badge-danger delete_red hand_cursor">Delete</label></a>
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