<?php
 include 'header.php';
?>
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

    $updateInfo = $system->updatePatientInfo($_POST,$user_id);
}
?>
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Edit Profile</h5>
                                <?php
                                    if (isset($_SESSION['message'])) {
                                        echo $_SESSION['message'];
                                        unset($_SESSION['message']);
                                    }
                                    ?>
                            </div>
                            <div class="card-body">
                                <form method="post" action="">
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" readonly=""
                                                    placeholder="User Name" value="<?php echo Session::get("username");?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-md-1">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="Patient_Name" value="<?php echo Session::get("name");?>" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-md-10 pr-md-1">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" value="" placeholder="Email">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-md-5 pr-md-1">
                                            <div class="form-group">
                                                <label> Phone Number</label>
                                                <input type="text" name="Phone_Number" value="<?php echo Session::get("phone");?>" class="form-control" placeholder="Number">
                                            </div>
                                        </div>
                                        <div class="col-md-7 pr-md-1">
                                            <div class="form-group">
                                                <label> Blood group</label>
                                                <input type="text" name="Blood_Group" value="<?php echo Session::get("Blood_Group");?>" readonly class="form-control" placeholder="Blood Group">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-7 pl-md-1">
                                            <div class="form-group">
                                                <label> Blood Group</label>
                                                <div class="col-md-12 pl-md-1">
                                                    <select class="select">
                                                        <option value="">Select your blood group </option>
                                                        <option value="1"> A+</option>
                                                        <option value="2"> A-</option>
                                                        <option value="3"> B+</option>
                                                        <option value="4"> B-</option>
                                                        <option value="5"> A-</option>
                                                        <option value="6"> AB+</option>
                                                        <option value="7"> AB+</option>
                                                        <option value="8"> O+</option>
                                                        <option value="3"> O-</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="Address" class="form-control" placeholder="Address" value="<?php echo Session::get("patient_address");?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="password"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                            <div class="form-group">
                                                <label>Confirm Password </label>
                                                <input type="password" class="form-control" placeholder="password"
                                                    value="">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="card-footer">
                                        <button type="submit" name="update" class="btn btn-fill btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-body">
                                <p class="card-text">
                                <div class="author">
                                    <div class="block block-one"></div>
                                    <div class="block block-two"></div>
                                    <div class="block block-three"></div>
                                    <div class="block block-four"></div>
                                    <a href="javascript:void(0)">
                                        <img class="avatar" src="../assets/img/anime3.png" alt="...">
                                    </a>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
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