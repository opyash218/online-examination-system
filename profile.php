<?php 
require('header.php');
session_start();
error_reporting(0);
include('connection.php');


 // try code............................................................................



  // try code............................................................................

if(strlen($_SESSION['alogin'])==0)
  { 
header('location:login.php');
}
else{
  
if(isset($_POST['submit']))
  { 
  $file = $_FILES['image']['name'];
  $file_loc = $_FILES['image']['tmp_name'];
  $folder="images/";
  $new_file_name = strtolower($file);
  $final_file=str_replace(' ','-',$new_file_name);
  
  $stud_name=$_POST['stud_name'];
  $email=$_POST['email'];
  $stud_couse=$_POST['stud_couse'];
  $idedit=$_POST['editid'];
  $image=$_POST['image'];

  if(move_uploaded_file($file_loc,$folder.$final_file))
    {
      $image=$final_file;
    }


  $sql="UPDATE stud_table SET stud_name=(:stud_name), email=(:email), stud_couse=(:stud_couse), image=(:image) WHERE id=(:idedit)";
  $query = $dbh->prepare($sql);
  $query-> bindParam(':stud_name', $stud_name, PDO::PARAM_STR);
  $query-> bindParam(':email', $email, PDO::PARAM_STR);
  $query-> bindParam(':stud_couse', $stud_couse, PDO::PARAM_STR);
  $query-> bindParam(':image', $image, PDO::PARAM_STR);
  $query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
  $query->execute();
  $msg="Information Updated Successfully";
}
}    
?>
                                  <script type="text/javascript">
                                  console.log('$idedit');
                                  </script>

                                   <?php
                                  $email = $_SESSION['alogin'];
                                  $sql = "SELECT * from stud_table where email = (:email);";
                                  $query = $dbh -> prepare($sql);
                                  $query-> bindParam(':email', $email, PDO::PARAM_STR);
                                  $query->execute();
                                  $result=$query->fetch(PDO::FETCH_OBJ);
                                  $cnt=1; 
                                    ?>
                                
                            <br><br><br><br>
                                        <section class="breadcrumbs">
                                  <div class="container">
                                

                                    <div class="d-flex justify-content-between align-items-center">
                                 
                                      <h2>User Profile</h2>
                                      <ol>
                                        <li><a href="index.php">Home</a></li>
                                        <li>Profile</li>
                                      </ol>
                                    </div>

                                  </div>
                                </section>
                            <br>
<!--Section: Block Content-->

            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<div class="container">
    <div class="main-body">
    
        <br>
       <form class="form" enctype="multipart/form-data" method="post" id="registrationForm">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="images/<?php echo htmlentities($result->image);?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo htmlentities($_SESSION['alogin']); ?></h4>
                                                   <div class="col-xs-12" >
                              <input type="file" name="image" class="form-control text-center center-block file-upload">
                              <input type="hidden" name="image" class="form-control" value="<?php echo htmlentities($result->image);?>">
                               </div>
                     
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <br>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <input type="text" class="form-control" name="stud_name" id="stud_name" value="<?php echo htmlentities($result->stud_name);?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <input type="text" class="form-control" name="email" id="email" value="<?php echo htmlentities($result->email);?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Student couse</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="stud_couse" id="stud_couse" value="<?php echo htmlentities($result->stud_couse);?>"> 
                    </div>
                  </div>
                  
             
                </div>

              </div>
               <input type="hidden" name="editid" class="form-control" required value="<?php echo htmlentities($result->student_id);?>">
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" name="submit" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>

                               <?php  
                                  $records = mysqli_query($db,"select * from stud_table"); // fetch data from database

                                  while($data = mysqli_fetch_array($records)){
                                     $data['student_id '];
                                  }
                                 
                                                                  ?>
            </div>
          </div>
        </div>
    </div></form>

