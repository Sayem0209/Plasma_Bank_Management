<?php
 include 'header.php';
 if (!isset($_GET['did']) || $_GET['did'] == NULL) {
    echo "<script>window.location = 'donorinformation.php';</script>";
} else {

    $did = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['did']);
}
$getMedicleInfo = $system->medicleInfoByDonor($did);
$value = mysqli_fetch_assoc($getMedicleInfo);
?>
 <div class="content">
 <div class="row">
            <div class="col-md-4">
                <h5 class="card-title"></h5>
            
            </div>
            <div class="col-md-5">
                <div class="card">
                    <span align="center" style="color:#fff;font-weight: bold;font-size: 22px;">Plasma bank management System</span><br>
                    <span align="center" style="color:#fff;font-weight: bold;font-size: 15px;">Donor Medicle History</span>

                </div>
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Donor Medicle History</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <b>Name</b>&nbsp;&nbsp;<?php echo $system->getOneCol('Donor_Name','donor','Donor_Id',$value['donor_Id']); ?><br>
                        <b>Age</b>&nbsp;&nbsp;<?php echo $value['Donor_Age']; ?><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <b>WBC</b>&nbsp;&nbsp;<?php echo $value['WBC_Count']; ?><br>
                        <b>RBC </b>&nbsp;&nbsp;<?php echo $value['RBC_Count']; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <b>Is Diabetic</b>&nbsp;&nbsp;<?php echo $value['Is_Diabetic']; ?><br>
                        <b>Is Alcoholic</b>&nbsp;&nbsp;<?php echo $value['Is_Alcoholic']; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <b>Is Covid</b>&nbsp;&nbsp;<?php echo $value['is_covid']; ?><br>
                        <b>Covid Recovery Date</b>&nbsp;&nbsp;<?php echo $value['Covid19_Recovery_Date']; ?>
                    </div>
                </div>
            </div>

        </div>
 </div>
<?php
 include 'footer.php';
?>