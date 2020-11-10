S<?php
// Include config file
require_once "config.php";

$date_= $follow=  $incident=    $branch=  $dept=    $user=    $ip=  $tag= $model=   $serial_=  $prob=    $status=  $remark=  $delivery=    $os=  $is_repaired= $mail_sent=  "";

$date__err= $follow_err=  $incident_err=    $branch_err=  $dept_err=    $user_err=    $ip_err=  $tag_err= $model_err=   $serial__err=  $prob_err=    $status_err=  $remark_err=  $delivery_err=    $os_err=  $is_repaired_err= $mail_sent_err=  "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $input_date_ = "Not received";
  if(empty($input_date_)){
    $date__err = "Please enter date.";
  }  else{
    $date_ = $input_date_;
  }


  $input_follow = $_POST["follow"];
  if(empty($input_follow)){
    $follow_err = "Please enter follow up person";
  }  else{
    $follow = $input_follow;
  }

  $input_incident = $_POST["incident"];
  if(empty($input_incident)){
    $incident_err = "Please enter incident no";
  }  else{
    $incident = $input_incident;
  }

  $input_branch = $_POST["branch"];
  if(empty($input_branch)){
    $branch_err = "Please enter branch name.";
  }  else{
    $branch = $input_branch;
  }

  $input_dept = $_POST["dept"];
  if(empty($input_dept)){

    $dept_err = "Please enter department name";
  }  else{
    $dept = $input_dept;
  }

  $input_user = $_POST["user"];
  if(empty($input_user)){
    $user_err = "Please enter user name.";
  }  else{
    $user = $input_user;
  }

  $input_ip  = "Waiting";
  if(empty($input_ip)){
    $ip_err = "Please enter Company name.";
  }  else{
    $ip = $input_ip;
  }

  $input_tag = "Waiting";
  if(empty($input_tag)){
    $tag_err = "Please enter response_date .";
  }  else{
    $tag = $input_tag;
  }

  $input_model = "Waiting";
  if(empty($input_model)){
    $model_err = "Please enter model .";
  }  else{
    $model = $input_model;
  }


  $input_serial_ = "Waiting";
  if(empty($input_serial_)){
    $serial__err = "Please enter Company name.";
  }  else{
    $serial_ = $input_serial_;
  }

  $input_prob = $_POST["prob"];
  if(empty($input_prob)){
    $prob_err = "Please enter the problem exactly mentioned by user.";
  }  else{
    $prob = $input_prob;
  }


  $input_status = "Decision Pending";
  if(empty($input_status)){
    $status_err = "Please enter status.";
  }  else{
    $status = $input_status;
  }
  $input_remark = "Not checked Yet";
  if(empty($input_remark)){
    $remark_err = "Please enter cable status.";
  }  else{
    $remark = $input_remark;
  }



  $input_os = "Waiting";
  if(empty($input_os)){
    $os_err = "Please enter cable status.";
  }  else{
    $os = $input_os;
  }




  $input_mail_sent = "Decision pending";
  if(empty($input_mail_sent)){
    $mail_sent_err = "Please enter mail status.";
  }  else{
    $mail_sent = $input_mail_sent;
  }


  if(!empty($follow) && !empty($incident) && !empty($branch) && !empty($dept) && !empty($user) && !empty($prob)  ){

    $sql = "INSERT INTO tbl_info (date_,follow,incident,branch,dept,user,ip,tag,model,serial_,prob,status,remark,delivery,os,is_repaired, mail_sent) VALUES ( ?,?,?,?, ?,?,?,?,?,?,?,?,?,?,?,?,?)";


    if($stmt = mysqli_prepare($link, $sql)){

      mysqli_stmt_bind_param($stmt, "sssssssssssssssss",     $param_date_, $param_follow,  $param_incident,    $param_branch,  $param_dept,    $param_user,    $param_ip,  $param_tag, $param_model,   $param_serial_,  $param_prob,    $param_status,  $param_remark,  $param_delivery,    $param_os,  $param_is_repaired, $param_mail_sent);


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

            // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
        header("location: index.php");

        exit();
      } else{
        echo "Something went wrong. Please try again later.";
      }
    }

        // Close statement
    mysqli_stmt_close($stmt);

  }
    // Close connection
  mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Record</title>
  <link rel="stylesheet" href="create_bootstrap/bootstrap.css">
  <style type="text/css">
    .wrapper{
      width: 500px;
      margin: 0 auto;
    }
    p{
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      font-weight: 900;
      color: green;
    }
  </style>
</head>
<body>
  <div>
    <img src="logo3.png"  width="250" height="300" align="left">
  </div>
  <div class="wrapper">
    <div class="container-fluid">
      <div class="row">

        <div class="page-header">
          <h2>Please enter the data </h2>
          <p>*To be filled by the assigned IT service engineers only</p>
        </div>


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


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



          <div class="form-group <?php echo (!empty($incident_err)) ? 'has-error' : ''; ?>">
            <label>Incident number</label>
            <textarea rows="1" cols="4" name="incident" class="form-control"><?php echo $incident; ?></textarea>
            <span class="help-block"><?php echo $incident_err;?></span>
          </div>
          <div class="form-group <?php echo (!empty($branch_err)) ? 'has-error' : ''; ?>">
            <label>Branch name</label>
            <textarea rows="1" cols="4" name="branch" class="form-control"><?php echo $branch; ?></textarea>
            <span class="help-block"><?php echo $branch_err;?></span>
          </div>
          <div class="form-group <?php echo (!empty($dept_err)) ? 'has-error' : ''; ?>">
            <label>Department name</label>
            <textarea rows="1" cols="4" name="dept" class="form-control"><?php echo $dept; ?></textarea>
            <span class="help-block"><?php echo $dept_err;?></span>
          </div>
          <div class="form-group <?php echo (!empty($user_err)) ? 'has-error' : ''; ?>">
            <label>User Name</label>
            <textarea rows="1" cols="4" name="user" class="form-control"><?php echo $user; ?></textarea>
            <span class="help-block"><?php echo $user_err;?></span>
          </div>


          <div class="form-group <?php echo (!empty($prob_err)) ? 'has-error' : ''; ?>">
            <label>Problem mentioned by user in IT service hub or over phone</label>
            <textarea name="prob" class="form-control"><?php echo $prob; ?></textarea>
            <span class="help-block"><?php echo $prob_err;?></span>
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

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<br><p align="center">Developed and maintainted by Sabit Bin Kabir. For any help or assistance please contact at  IP ext:566</a>.</p>
</footer>
