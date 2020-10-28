<?php
require_once 'header.php';
require_once 'dbcon.php';

if(isset($_POST['add_claim'])){
    $Incident = $_POST['Incident'];
    $Model_Name = $_POST['Model_Name'];
    $Device_Serial = $_POST['Device_Serial'];
    $Asset_Tag = $_POST['Asset_Tag'];
    $User_Name = $_POST['User_Name'];
    $Department = $_POST['Department'];
    $Mailing_Date = $_POST['Mailing_Date'];
    $Vendor_Name = $_POST['Vendor_Name'];
    $Remarks = $_POST['Remarks'];

    $result = mysqli_query($con,"INSERT INTO warranty_claim(Incident, Model_Name, Device_Serial, Asset_Tag, User_Name, Department, Mailing_Date, Vendor_Name, Remarks) 
                VALUES ('$Incident', '$Model_Name', '$Device_Serial', '$Asset_Tag', '$User_Name', '$Department', '$Mailing_Date', '$Vendor_Name', '$Remarks')");
    if ($result){
        $success = "Claim for - $Model_Name added successfully!";
    }else {
        $error = "Something Wrong!";
    }
}

?>

    <!-- content HEADER -->
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<div class="col-sm-6 col-sm-offset-3">
    <h4 class="section-subtitle">To do list <b>with header</b></h4>
    <div class="panel b-primary bt-md">
        <div class="panel-content p-none">
            <div class="widget-list list-to-do">
                <h4 class="list-title">To do List</h4>
                <button class="add-item btn btn-o btn-primary btn-xs"><i class="fa fa-plus"></i></button>
                <ul>
                    <li>
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" id="check-h1" value="option1">
                            <label class="check" for="check-h1">Accusantium eveniet ipsam neque</label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" id="check-h2" value="option1" checked="">
                            <label class="check" for="check-h2">Lorem ipsum dolor sit</label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" id="check-h3" value="option1">
                            <label class="check" for="check-h3">Dolor eligendi in ipsum sapiente</label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" id="check-h4" value="option1">
                            <label class="check" for="check-h4">Natus recusandae vel</label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" id="check-h5" value="option1">
                            <label class="check" for="check-h5">Adipisci amet officia tempore ut</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<?php require_once 'footer.php'; ?>