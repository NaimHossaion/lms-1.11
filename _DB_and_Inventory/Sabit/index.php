 <?php
 $connect = mysqli_connect("localhost", "root", "", "hardware");
 //$query ="SELECT * FROM tbl_info ORDER BY id DESC";
 $query = "SELECT * FROM `tbl_info` ";
 $result = mysqli_query($connect, $query);

 $stat1 = "SELECT COUNT(*) FROM tbl_info WHERE date_!=(\"Not received\") AND is_repaired=\"\"";
 $result1=mysqli_query($connect, $stat1);
 $stat2 = "SELECT COUNT(*) FROM tbl_info WHERE is_repaired !=\"\" AND delivery =\"\"";
 $result2=mysqli_query($connect, $stat2);

 $stat3 = "SELECT COUNT(*) FROM tbl_info WHERE date_ = \"Not received\"";

 $result3=mysqli_query($connect, $stat3);

 $stat4 = "SELECT COUNT(*) FROM tbl_info WHERE is_repaired = \"Support provided\"";
 $result4=mysqli_query($connect, $stat4);
 $stat5= "SELECT COUNT(*) FROM tbl_info WHERE  remark =\"\" AND date_ =\"\"";
 $result5=mysqli_query($connect, $stat5);
 $stat6="SELECT COUNT(*) FROM tbl_info WHERE `mail_sent`=\"no\"";
 $result6=mysqli_query($connect, $stat6);
 ?>
 <?php include 'header.php';?>

 <body>
 	<?php include 'style.php';?>

 	<div class="topnav">
 			<a href="//192.168.205.38">CPU Repair Management</a>
        <a href="//192.168.205.38/ups">UPS Repair Management</a>
        <a href="//192.168.205.38/support" >Support PC/Laptop in Stock</a>
        <a href="//192.168.205.38/printer">Support Printer in Stock</a>
        <a href="//192.168.205.38/electrician">Electrician Schedule</a>
        <a href="//192.168.205.38/inv"  >PAN EBL Inventory</a>
 	</div>

 	<div>
 		<img src="logo7.png"  width="550" height="180" align="right">
 	</div><br>


 	<div>

 		<?php
 		while($st1=mysqli_fetch_array($result1))  {
 			if($st3=mysqli_fetch_array($result3)){
 				echo "<p style='color:red;'>"."<font size='2'>" . 'Issues Unresolved: ' .$st1[0]. "<a href='unresolved.php'> View Details</a>"."</p>" ;
 				echo "<p style='color:green;'>" . 'PC/Laptop not received yet: ' .$st3[0] ."<a href='notrec.php'> View Details</a>". "</p>";
 			}
 			break;
 		}
 		?>
 		<?php
 		while($st4=mysqli_fetch_array($result4))  {
            //echo 'Temporary support provided: '.$st4[0].' ';
 			echo "<p style='color:blue;'>" . 'Temporary support provided: ' .$st4[0] . "<a href='supp.php'> View Details</a>"."</p>";
 			break;
 		}
 		?>
 		<?php
 		while($st6=mysqli_fetch_array($result6))  {
            //echo 'Temporary support provided: '.$st4[0].' ';
 			echo "<p style='color:black;'>" . 'Servicing mail to vendor pending: ' .$st6[0] . "<a href='pending.php'> View Details</a>"."</p>";
 			break;
 		}
 		?>


 	</div>


 	<div>

 		<button onclick="window.location.href = 'create.php';" type="button" class="btn btn-success">Add New Entry</button>
 	</div>

  <table id="example" font size="1" face="Courier New">

    <thead>
      <tr>
          <th>ID</th>
        <th>Incident</th>
        <th>Date Received</th>
        <th>Follow Up</th>
        <th>User</th>
        <th>Branch</th>
        <th>Department</th>
        <th>IP address</th>
        <th>Asset Tag</th>
        <th>CPU Model</th>
        <th>S/N</th>
        <th>OS</th>
        <th>Problem described by user</th>
        <th>Problem found by IT technician</th>
        <th>Repair Status</th>
        <th>Delivery Date</th>
        <th>Hardware changed</th>
        <th>Mail to SMS system</th>
          <th>Servicing History</th>
        <th>Action</th>

      </tr>
    </thead>
    <?php
    while($row=mysqli_fetch_array($result))
    {
      echo '
      <tr>
        <td>'.$row["id"].'</td>
      <td>'.$row["incident"].'</td>
      <td>'.$row["date_"].'</td>
      <td>'.$row["follow"].'</td>
      <td>'.$row["user"].'</td>
      <td>'.$row["branch"].'</td>
      <td>'.$row["dept"].'</td>
      <td>'.$row["ip"].'</td>
      <td>'.$row["tag"].'</td>
      <td>'.$row["model"].'</td>
      <td>'.$row["serial_"].'</td>
      <td>'.$row["os"].'</td>
      <td>'.$row["prob"].'</td>
      <td>'.$row["remark"].'</td>
      <td>'.$row["is_repaired"].'</td>
      <td>'.$row["delivery"].'</td>
      <td>'.$row["status"].'</td>
      <td>'.$row["mail_sent"].'</td>
      <td>
      <a href="history.php? id='. $row["id"] .' serial_='.$row["serial_"].' ">View</a>
      </td>
      <td>
      <a href="update.php? id='. $row["id"] .' ">Edit</a>
      <a href="delete.php? id='. $row["id"] .' ">Delete</a>
      </td>

      </tr>
      ';
    }
    ?>
  </table>
 </form>
</body>
</html>
<script>
	$(document).ready(function() {
		$('#example').DataTable( {
			dom: 'Bfrtip',
			buttons: [
			'copy',  'excel', 'pdf', 'print'
			],
			order:[[0,"desc"]],
			"pageLength": 12

		} );
	} );
</script>
<footer>

	<p align="center">For any problem or assistance with this site, please contact with Sabit Bin Kabir: >
	sabit.kabir@ebl-bd.com, ext:566</a>.</p>
</footer>
