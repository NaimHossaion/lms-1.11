<?php
// Include config file
require_once "config.php";

$date_= $follow=  $incident=    $branch=  $dept=    $user=    $ip=  $tag= $model=   $serial_=  $prob=    $status=  $remark=  $delivery=    $os=  $is_repaired= $mail_sent=  "";

$date__err= $follow_err=  $incident_err=    $branch_err=  $dept_err=    $user_err=    $ip_err=  $tag_err= $model_err=   $serial__err=  $prob_err=    $status_err=  $remark_err=  $delivery_err=    $os_err=  $is_repaired_err= $mail_sent_err=  "";



if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];


    $input_date_ = trim($_POST["date_"]);
    if(empty($input_date_)){
      $date__err = "Please enter receiving date";
  }  else{
      $date_ = $input_date_;
  }

  $input_follow = trim($_POST["follow"]);
  if(empty($input_follow)){
    $follow_err = "Please enter follow up person";
}  else{
    $follow = $input_follow;
}

$input_incident = trim($_POST["incident"]);
if(empty($input_incident)){
    $incident_err = "Please enter incident no";
}  else{
    $incident = $input_incident;
}

$input_branch = trim($_POST["branch"]);
if(empty($input_branch)){
    $branch_err = "Please enter branch name.";
}  else{
    $branch = $input_branch;
}

$input_dept = trim($_POST["dept"]);
if(empty($input_dept)){

    $dept_err = "Please enter delivery_area name.";
}  else{
    $dept = $input_dept;
}

$input_user = trim($_POST["user"]);
if(empty($input_user)){
    $user_err = "Please enter user name.";
}  else{
    $user = $input_user;
}

$input_ip  = trim($_POST["ip"]);
if(empty($input_ip)){
    $ip_err = "Please enter Company name.";
}  else{
    $ip = $input_ip;
}

$input_tag = trim($_POST["tag"]);
if(empty($input_tag)){
    $tag_err = "Please enter response_date .";
}  else{
    $tag = $input_tag;
}

$input_model = trim($_POST["model"]);
if(empty($input_model)){
    $model_err = "Please enter model .";
}  else{
    $model = $input_model;
}


$input_serial_ = trim($_POST["serial_"]);
if(empty($input_serial_)){
    $serial__err = "Please enter Company name.";
}  else{
    $serial_ = $input_serial_;
}

$input_prob = trim($_POST["prob"]);
if(empty($input_prob)){
    $prob_err = "Please enter total_ups.";
}  else{
    $prob = $input_prob;
}


$input_status = trim($_POST["status"]);
if(empty($input_status)){
    $status_err = "Please enter status.";
}  else{
    $status = $input_status;
}
$input_remark = trim($_POST["remark"]);
if(empty($input_remark)){
    $remark_err = "Please enter cable status.";
}  else{
    $remark = $input_remark;
}
$input_delivery = trim($_POST["delivery"]);
if(empty($input_delivery)){
  $delivery_err = "Please enter delivery date.";
}  else{
  $delivery = $input_delivery;
}


$input_os =trim($_POST["os"]);
if(empty($input_os)){
    $os_err = "Please enter cable status.";
}  else{
    $os = $input_os;
}

$input_is_repaired = trim($_POST["is_repaired"]);
if(empty($input_is_repaired)){
    $is_repaired_err = "Please enter cable status.";
}  else{
    $is_repaired = $input_is_repaired;
}



$input_mail_sent = trim($_POST["mail_sent"]);
if(empty($input_mail_sent)){
    $mail_sent_err = "Please enter mail status.";
}  else{
    $mail_sent = $input_mail_sent;
}




$sql = "UPDATE tbl_info SET date_=?, follow=?, incident=?, branch=?, dept=?, user=?, ip=?, tag=?, model=?, serial_=?, prob=?,status=?, remark=?, delivery=?, os=?, is_repaired=?, mail_sent=? WHERE id=?";

if($stmt = mysqli_prepare($link, $sql)){

 mysqli_stmt_bind_param($stmt, "sssssssssssssssssi",$param_date_, $param_follow,  $param_incident,    $param_branch,  $param_dept,    $param_user,    $param_ip,  $param_tag, $param_model,   $param_serial_,  $param_prob,    $param_status,  $param_remark,  $param_delivery,    $param_os,  $param_is_repaired, $param_mail_sent,$param_id);


 $param_date_=$date_;
 $param_follow=$follow;
 $param_incident=$incident;
 $param_branch=$branch;
 $param_dept=$dept;
 $param_user=$user;
 $param_ip=$ip;
 $param_tag=$tag;
 $param_model=$model;
 $param_serial_=$serial_;
 $param_prob=$prob;
 $param_status=$status;
 $param_remark=$remark;
 $param_delivery=$delivery;
 $param_os=$os;
 $param_is_repaired=$is_repaired;
 $param_mail_sent=$mail_sent;
 $param_id = $id;

            // Attempt to execute the prepared statement
            // Attempt to execute the prepared statement
 if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
    header("location: index.php");
    exit();
} else{
    echo "Something went wrong. Please try again later.";
}
}

        // Close statement
mysqli_stmt_close($stmt);


    // Close connection
mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id =  trim($_GET["id"]);
        $sql = "SELECT * FROM tbl_info WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            $param_id = $id;
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $date_ = $row["date_"];
                    $follow = $row["follow"];
                    $incident = $row["incident"];
                    $branch = $row["branch"];
                    $dept = $row["dept"];
                    $user = $row["user"];
                    $ip = $row["ip"];
                    $tag = $row["tag"];
                    $model = $row["model"];
                    $serial_ = $row["serial_"];
                    $prob = $row["prob"];
                    $status = $row["status"];
                    $remark = $row["remark"];
                    $delivery = $row["delivery"];
                    $os = $row["os"];
                    $is_repaired = $row["is_repaired"];
                    $mail_sent = $row["mail_sent"];
                }
                else{
                    header("location: error.php");
                    exit();
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);
    }  else{
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<div>
    <img src="logo3.png"  width="400" height="400" align="left">
</div>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">



                        <div><label>Date :</label>
                            <input type="date" name="date_"   class="form-control" value= "<?php echo $date_; ?>" >
                        </div><br>


                        <div class="form-group  <?php echo (!empty($follow_err)) ? 'has-error' : ''; ?>">
                          <label>Follow Up Person :</label>
                          <select name="follow"  class="form-control" required>
                            <option selected hidden value="<?php echo $follow; ?>"><?php echo $follow; ?></option>
                            <option value="Khandaker Naim Hossaion">Khandaker Naim Hossaion</option>
                            <option value="Saqueeb Mohammad Sultan">Saqueeb Mohammad Sultan</option>
                   <option value="Faisal Imran">Faisal Imran</option>
                            <option value="Fouzia Sharmin Zimi">Fouzia Sharmin Zimi</option>


                             <option value="Syed Mukhaffar Abdullah">Syed Mukhaffar Abdullah</option>
                             <option value="Mohammad Nazmul Haq">Mohammad Nazmul Haq</option>
                            <option value="Tahsin Farzam">Tahsin Farzam</option>
                            <option value="Abdul Hamid">Abdul Hamid</option>
                            <option value="Tariqul Islam">Tariqul Islam</option>
                            <option value="Towhidul Islam">Towhidul Islam</option>
                            <option value="Bipul Kumar Biswas">Bipul Kumar Biswas</option>
                            <option value="Abdul Kadir Kibria">Abdul Kadir Kibria</option>
                        </select>
                        <span class="help-block"><?php echo $follow_err;?></span>
                    </div>


                    <div class="form-group <?php echo (!empty($incident_err)) ? 'has-error' : ''; ?>">
                        <label>Incident number</label>
                        <textarea name="incident" class="form-control"><?php echo $incident; ?></textarea>
                        <span class="help-block"><?php echo $incident_err;?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($branch_err)) ? 'has-error' : ''; ?>">
                        <label>Branch name</label>
                        <textarea name="branch" class="form-control"><?php echo $branch; ?></textarea>
                        <span class="help-block"><?php echo $branch_err;?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($dept_err)) ? 'has-error' : ''; ?>">
                        <label>Department name</label>
                        <textarea name="dept" class="form-control"><?php echo $dept; ?></textarea>
                        <span class="help-block"><?php echo $dept_err;?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($user_err)) ? 'has-error' : ''; ?>">
                        <label>User Name</label>
                        <textarea name="user" class="form-control"><?php echo $user; ?></textarea>
                        <span class="help-block"><?php echo $user_err;?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($ip_err)) ? 'has-error' : ''; ?>">
                        <label>IP address</label>
                        <textarea name="ip" class="form-control"><?php echo $ip; ?></textarea>
                        <span class="help-block"><?php echo $ip_err;?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($tag_err)) ? 'has-error' : ''; ?>">
                        <label>Asset tag</label>
                        <textarea name="tag" class="form-control"><?php echo $tag; ?></textarea>
                        <span class="help-block"><?php echo $tag_err;?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($model_err)) ? 'has-error' : ''; ?>">
                        <label>CPU model</label>
                        <textarea name="model" class="form-control"><?php echo $model; ?></textarea>
                        <span class="help-block"><?php echo $model_err;?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($serial__err)) ? 'has-error' : ''; ?>">
                        <label>Serial no</label>
                        <textarea name="serial_" class="form-control"><?php echo $serial_; ?></textarea>
                        <span class="help-block"><?php echo $serial__err;?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($prob_err)) ? 'has-error' : ''; ?>">
                        <label>Problem mentioned by user in IT service hub or over phone</label>
                        <textarea name="prob" class="form-control"><?php echo $prob; ?></textarea>
                        <span class="help-block"><?php echo $prob_err;?></span>
                    </div>


                    <div class="form-group <?php echo (!empty($status_err)) ? 'has-error' : ''; ?>">
                        <label> Is any hardware changed? Please mention details</label>  <br>
                        <textarea name="status" class="form-control"><?php echo $status; ?></textarea>
                        <span class="help-block"><?php echo $status_err;?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($remark_err)) ? 'has-error' : ''; ?>">
                        <label>Problem found by technician</label>
                        <textarea name="remark" class="form-control"><?php echo $remark; ?></textarea>
                        <span class="help-block"><?php echo $remark_err;?></span>
                    </div><br>



                    <div><label>Delivery Date :</label>
                        <input type="date" class="form-control" name="delivery" value= "<?php echo $delivery; ?>" >
                    </div><br>

                    <div class="form-group <?php echo (!empty($os_err)) ? 'has-error' : ''; ?>">
                      <label>Operating System Version</label>
                      <select name="os" class="form-control">
                       <option selected hidden value="<?php echo $os; ?>"><?php echo $os; ?></option>

                       <option value="Windows 7">Windows 7</option>
                       <option value="Windows 8">Windows 8</option>
                       <option value="Windows 10">Windows 10</option>

                   </select>
                   <span class="help-block"><?php echo $os_err;?></span>
               </div>

               <div class="form-group <?php echo (!empty($is_repaired_err)) ? 'has-error' : ''; ?>">
                <label>Repaired Status</label>

                <select name="is_repaired" class="form-control">
                 <option selected hidden value="<?php echo $is_repaired; ?>"><?php echo $is_repaired; ?></option>

                 <option value="Yes">Yes</option>
             <option value="Replaced permanently">Replacement provided permanently</option>
             <option value="Support provided">Support provided</option>
             <option value="New pc provided permanently">New pc provided permanently</option>


             </select>

             <span class="help-block"><?php echo $is_repaired_err;?></span>
         </div>


         <div class="form-group <?php echo (!empty($mail_sent_err)) ? 'has-error' : ''; ?>">
            <label>Is mail sent to SMS system      :</label>


            <select name="mail_sent" class="form-control">
             <option selected hidden value="<?php echo $mail_sent; ?>"><?php echo $mail_sent; ?></option>

             <option value="Yes">Yes</option>
             <option value="No">No</option>

             <option value="Not Required">Not Required</option>
         </select>


         <span class="help-block"><?php echo $mail_sent_err;?></span>
     </div>



     <input type="hidden" name="id" value="<?php echo $id; ?>"/>
     <input type="submit" class="btn btn-primary" value="Submit">
     <a href="index.php" class="btn btn-default">Cancel</a>
 </form>
</div>
</div>
</div>
</div>
</body>
</html>
