

<?php
$connect = mysqli_connect("localhost", "root", "", "hardware");
//$query ="SELECT * FROM tbl_info ORDER BY id DESC";
$query =  "SELECT * FROM tbl_info WHERE mail_sent=\"no\"";
$result = mysqli_query($connect, $query);


?>
<?php include 'header.php';?>

<body>
 <?php include 'style.php';?>


 <div class="topnav">
     <a href="//192.168.205.38">HOME</a>

 </div>
<h3>Pending Servicing Mails</h3>





  	<table id="example" font size="1" face="Courier New">

   <thead>
     <tr>

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
       <th>Action</th>
     </tr>
   </thead>
   <?php
   while($row=mysqli_fetch_array($result))
   {
     echo '
     <tr>
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
     order:[[13,"asc"]],
     "pageLength": 12

   } );
 } );
</script>
<footer>

 <p align="center">For any problem or assistance with this site, please contact with Sabit Bin Kabir: >
 sabit.kabir@ebl-bd.com, ext:566</a>.</p>
</footer>
