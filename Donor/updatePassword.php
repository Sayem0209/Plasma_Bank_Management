<?php
 include 'header.php';
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

    if (isset($_POST['OldPassword']) && isset($_POST['NewPassword'])) {

        $OldPassword = md5($_POST['OldPassword']);

        $NewPassword = $_POST['NewPassword'];

        $passUpdate = $system->updateDonorPas($OldPassword, $NewPassword, $user_id);
    }
}
?>
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Update Password</h5>
                                <?php
                                    if (isset($passUpdate)) {
                                        echo $passUpdate;
                                    }
                                    ?>
                            </div>
                            <div class="card-body">
                                <form method="post" action="">

                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" name = "OldPassword" class="form-control" placeholder="password"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                            <div class="form-group">
                                                <label>New Password </label>
                                                <input type="password" name="NewPassword" class="form-control" placeholder="password"
                                                    value="">
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