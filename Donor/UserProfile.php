<?php
 include 'header.php';
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

    $updateInfo = $system->updateDonorInfo($_POST,$user_id);
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
                                                <input type="text" class="form-control" value="<?php echo Session::get('username');?>" disabled=""
                                                    placeholder="User Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-md-1">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" value="<?php echo Session::get('name');?>" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 pr-md-1">
                                            <div class="form-group">
                                                <label> Phone Number</label>
                                                <input type="text" name="Contact_No" class="form-control" placeholder="Phone Number" value="<?php echo Session::get('phone');?>">
                                            </div>
                                        </div>
                                        <div class="col-md-7 pr-md-1">
                                            <div class="form-group">
                                                <label>Blood Group</label>
                                                <input type="text" name="Blood_Group" class="form-control" placeholder="Blood group" value="<?php echo Session::get('bloodgroup');?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="Address" class="form-control" placeholder="Address" value="<?php echo Session::get('address');?>">
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