<?php
 include 'header.php';
 $donorList = $system->getDonorList();
?>
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">Donor Information</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="myTable">
                    <thead class=" text-primary">
                      <tr>
                        <th>Donor Name</th>
                        <th>Blood Group</th>
                        <th>Contract Number</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    <tbody>
                    <?php
                      while($row = $donorList->fetch_assoc()){
                    ?>
                      <tr style="color: #fff; background: black;">
                        <td>
                          <?php echo $row['Donor_Name'];?>
                        </td>
                        <td>
                         <?php echo $row['Blood_Group'];?>
                        </td>
                        <td>
                         <?php echo $row['Contact_No'];?>
                        </td>
                        <td>
                         <?php echo $row['Address'];?>
                        </td>
                        <td>
                        <a href="view-medicle-history.php?did=<?php echo $row['Donor_Id']; ?>"><span class="label label-info"><i class=" fas fa-eye"></i></span></a>
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