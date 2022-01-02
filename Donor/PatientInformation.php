<?php
 include 'header.php';
 $patientList = $system->getPatientList();
?>
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">Patient Information</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="myTable">
                    <thead class=" text-primary">
                      <tr>
                        <th>Patient Name</th>
                        <th>Blood Group</th>
                        <th>Contract Number</th>
                        <th>Address</th>
                      </tr>
                    <tbody>
                    <?php
                      while($row = $patientList->fetch_assoc()){
                    ?>
                      <tr style="color: #fff; background: black;">
                        <td>
                          <?php echo $row['Patient_Name'];?>
                        </td>
                        <td>
                         <?php echo $row['Blood_Group'];?>
                        </td>
                        <td>
                         <?php echo $row['Phone_Number'];?>
                        </td>
                        <td>
                         <?php echo $row['Address'];?>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- <style>
            table tbody :hover {
              background-color: #000000;
              color: #ffffff
            }
          </style> -->
<?php
 include 'footer.php';
?>