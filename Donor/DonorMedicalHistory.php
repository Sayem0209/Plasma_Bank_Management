<?php
 include 'header.php';
 $getMedicleHistory = $system->getDonorMedicleHistory($user_id);
 $value = mysqli_fetch_assoc( $getMedicleHistory);
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

  $updateInfo = $system->updateDonorMedicleHistory($_POST,$user_id);
}
?>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Donor Medical Information</h5>
                <?php
                  if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                  }
                ?>
              </div>
              <div class="card-body">
                <form method="post" action="">
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>DONOR NAME</label>
                        <input type="text" readonly class="form-control" value="<?php echo Session::get('name');?>" placeholder="Donor Name">
                      </div>
                    </div>
                    <div class="col-md-5 px-md-1">
                      <div class="form-group">
                        <label>DONOR ID</label>
                        <input type="text" class="form-control" readonly name="donor_Id" value="<?php echo Session::get('user_id');?>" placeholder="donor ID">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>DONOR AGE</label>
                        <input type="text" name="Donor_Age" class="form-control" value="<?php echo  $value['Donor_Age'];?>" placeholder=" Donor Age">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label> DONOR RCB COUNT </label>
                        <input type="text" name="RBC_Count" class="form-control" placeholder="Donor RCB Count" value="<?php echo  $value['RBC_Count'];?>">
                      </div>
                    </div>
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label> DONOR Wbc COUNT </label>
                        <input type="text" name="WBC_Count" class="form-control" placeholder="Donor RCB Count" value="<?php echo  $value['WBC_Count'];?>">
                      </div>
                    </div>
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label> DONOR HEIGHT </label>
                        <input type="text" name="Height" class="form-control" placeholder="Donor Height" value="<?php echo  $value['Height'];?>">
                      </div>
                    </div>

                    <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label> DIABETIC </label> <?php echo  $value['Is_Diabetic'];?>
                        <div class="col-md-12 pl-md-1">
                          <select class="select" name="Is_Diabetic">
                            <option value="">Select</option>
                            <option value="yes">YES</option>
                            <option value="no"> NO</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label> ALCOHOL </label> <?php echo  $value['Is_Alcoholic'];?>
                        <div class="col-md-12 pl-md-1">
                          <select class="select" name="Is_Alcoholic">
                          <option value="">Select</option>
                            <option value="no"> NO</option>
                            <option value="yes"> YES</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label> COVID </label> <?php echo  $value['is_covid'];?>
                        <div class="col-md-12 pl-md-1">
                          <select class="select" name="is_covid">
                          <option value="">Select</option>
                            <option value="no"> NO</option>
                            <option value="yes"> YES</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label> DONAR BLOOD </label>
                        <div class="col-md-12 pl-md-1">
                          <select class="select">
                            <option value="1"> Present</option>
                            <option value="2"> NO</option>
                          </select>
                        </div>
                      </div>
                    </div> -->
                    <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label>Covid 19 recovery date </label>
                        <div class="col-md-12 pl-md-1">
                          <input type="date" value="<?php echo  $value['Covid19_Recovery_Date'];?>" name="Covid19_Recovery_Date" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="update" class="btn btn-fill btn-primary">Save</button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
          <!-- <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                <div class="author">
                  <div class="block block-one"></div>
                  <div class="block block-two"></div>
                  <div class="block block-three"></div>
                  <div class="block block-four"></div>
                  <h2> <span class="highlight">Patient</span> Message....</h2>
                  <textarea id="w3review" name="w3review" rows="4" cols="50">   we need Blood</textarea>
                </div>
                </p>
                <input type="text" class="form-control" placeholder="Type Here" value="">
                <div class="card-footer">
                  <button type="submit" class="btn btn-fill btn-primary">Send</button>
                </div>

              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <style>
    select {
      background-color: #babac7;
      min-height: 41px;
      box-shadow: none !important;
    }
  </style>
<?php
 include 'footer.php';
?>