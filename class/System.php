<?php

class System {

    private $db;
    private $fm;

    public function __construct() {

        $this->db = new Database();
        $this->fm = new Format();
    }

    public function getOneCol($col, $tbl, $comCol, $comVal) {
        // $db_connect = $this->__construct();

        $sql = "SELECT $col FROM $tbl WHERE $comCol='$comVal' ";
        $res = $this->db->select($sql);

        if ($res) {
            $result = $this->db->select($sql);
            $row = $result->fetch_assoc();
            return $row[$col];
        }
    }

    public function fetchRows($sql) {
        //$db_connect = $this->__construct();
        $arr = array();
        if ($this->db->select($sql)) {
            $res = $this->db->select($sql);
            while ($row = mysqli_fetch_array($res)) {
                $arr[] = $row;
            }
            return $arr;
        }
    }

    public function userSignup($data) {

        $username = mysqli_real_escape_string($this->db->link, $data['username']);
        $email = mysqli_real_escape_string($this->db->link, $data['email']);
        $name = mysqli_real_escape_string($this->db->link, $data['name']);
        $bloodGroup = mysqli_real_escape_string($this->db->link, $data['bloodGroup']);
        $phone = mysqli_real_escape_string($this->db->link, $data['phone']);
        $address = mysqli_real_escape_string($this->db->link, $data['address']);
        $address = mysqli_real_escape_string($this->db->link, $data['address']);
        $password = mysqli_real_escape_string($this->db->link, md5($data['password']));
        $userType = mysqli_real_escape_string($this->db->link, $data['userType']);


        if ($username == "" || $email == "" || $name == "" || $bloodGroup == "" || $phone == "" || $address == "") {

            $msg = "
                   <div class='alert alert-danger'>
                      <h4> Field can not be empty. </h4>
                   </div>";

            return $msg;
        } else {

            if($userType == 1){
            $stdquery = "SELECT * FROM donor WHERE donor_username = '$username' LIMIT 1";

            $typechk = $this->db->select($stdquery);
            if ($typechk != false) {
                $msg = "<div class='alert alert-danger'>User already exits.</div>";
                return $msg;
            } else {

                $query = "INSERT INTO `donor`(`donor_username`, `Donor_Name`, `Address`, `Contact_No`, `Blood_Group`, `password`) VALUES
                        ('$username','$name','$address','$phone','$bloodGroup','$password')";

                $typeinsert = $this->db->insert($query);

                if ($typeinsert) {
                    
                    $msg = "<div class='alert alert-success'>
                              <h4>Sign up successful. Now login with Username & Password.</h4>
			               </div>";
                    return $msg;
                } else {
                    $msg = "
                        <div class='alert alert-danger'>
                                    <h3>Sign up Failed. Try Again.</h3>
                        </div>";

                    return $msg;
                }
            }
        }else{
            $stdquery = "SELECT * FROM patient WHERE patient_username = '$username' LIMIT 1";

            $typechk = $this->db->select($stdquery);
            if ($typechk != false) {
                $msg = "<div class='alert alert-danger'>User already exits.</div>";
                return $msg;
            } else {

                $query = "INSERT INTO `patient`(`Patient_Name`, `Phone_Number`, `Address`, `Blood_Group`, `patient_username`, `patient_password`) VALUES 
                        ('$name','$phone','$address','$bloodGroup','$username','$password')";

                $typeinsert = $this->db->insert($query);

                if ($typeinsert) {
                    
                    $msg = "<div class='alert alert-success'>
                              <h4>Sign up successful. Now login with Username & Password.</h4>
			               </div>";
                    return $msg;
                } else {
                    $msg = "
                        <div class='alert alert-danger'>
                                    <h3>Sign up Failed. Try Again.</h3>
                        </div>";

                    return $msg;
                }
            }
        }
        }
    }

    public function userLogin($username, $password, $userType) {

        $username = $this->fm->validation($username);

        $password = $this->fm->validation($password);

        $username = mysqli_real_escape_string($this->db->link, $username);

        $password = mysqli_real_escape_string($this->db->link, md5($password));

        if (empty($username) || empty($password)) {

            $loginmsg = "Username or password can not be empty";

            return $loginmsg;
        } else {
            if($userType == 1){
            $query = "SELECT * FROM donor WHERE donor_username = '$username' AND password = '$password'";

            $result = $this->db->select($query);

            if ($result != false) {

                $value = $result->fetch_assoc();

                Session::set("donorlogin", true);
                Session::set("user_id", $value['Donor_Id']);
                Session::set("username", $value['donor_username']);
                Session::set("name", $value['Donor_Name']);
                Session::set("phone", $value['Contact_No']);
                Session::set("bloodgroup", $value['Blood_Group']);
                Session::set("address", $value['Address']);
                Session::set("userType", 1);

                header('Location: Donor/DonorDashboard.php');
            } else {

                $loginmsg = "Something Wrong.";

                return $loginmsg;
            }
            }else{
                $query = "SELECT * FROM patient WHERE patient_username = '$username' AND patient_password = '$password'";

                $result = $this->db->select($query);
    
                if ($result != false) {
    
                    $value = $result->fetch_assoc();
    
                    Session::set("patientlogin", true);
    
                    Session::set("user_id", $value['Patient_Id']);
                    Session::set("username", $value['patient_username']);
                    Session::set("name", $value['Patient_Name']);
                    Session::set("phone", $value['Phone_Number']);
                    Session::set("Blood_Group", $value['Blood_Group']);
                    Session::set("patient_address", $value['Address']);
                    Session::set("userType", 2);
    
                    header('Location: Patient/PatientDashboard.php');
                } else {
    
                    $loginmsg = "Something Wrong.";
    
                    return $loginmsg;
                }
            }
        }
    }
    
    public function updatePatientPas($OldPassword, $NewPassword, $user_id) {

        $OldPassword = mysqli_real_escape_string($this->db->link, $OldPassword);

        $NewPassword = mysqli_real_escape_string($this->db->link, md5($NewPassword));

        if (empty($OldPassword) || empty($NewPassword)) {

            $msg = '<div class="alert alert-danger">

		     <h4 align="center">Field can not be empty.</h4>
		   </div>';

            return $msg;
        } else {

            $passquery = "SELECT * FROM patient WHERE Patient_Id  = '$user_id' AND patient_password = '$OldPassword'";

            $passchk = $this->db->select($passquery);

            if ($passchk == false) {
                $msg = '
			<div class="alert alert-danger" style="text-align:center;">
			  <h4>Old passwords do not match.</h4>
			</div>
			 ';
                return $msg;
            } else {
                $query = "UPDATE patient 
			      SET patient_password = '$NewPassword'
			    WHERE Patient_Id = '$user_id'
			";

                $passupdate = $this->db->update($query);

                if ($passupdate) {

                    $msg = '<div class="alert alert-success">
				<h4 align="center">Password updated successfully.</h4>
			    </div>';

                    return $msg;
                } else {

                    $msg = '<div class="alert alert-danger">
				<h4>Failed to Update Password</h4>
			</div>';

                    return $msg;
                }
            }
        }
    }


    public function updatePatientInfo($data,$user_id) {
        $Patient_Name = mysqli_real_escape_string($this->db->link, $data['Patient_Name']);
        $Phone_Number = mysqli_real_escape_string($this->db->link, $data['Phone_Number']);
        $Address = mysqli_real_escape_string($this->db->link, $data['Address']);
       

        
        if ($Patient_Name == "" || $Phone_Number == "") {

            $_SESSION['message'] = "
                    <div class='alert alert-danger'>
                      <h4> Field can not be empty.</h4>
                   </div>";

                   header('Location: UserProfile.php');
                   exit();
        } else {
            $query = "UPDATE patient 
			          SET Patient_Name  = '$Patient_Name',
                      Phone_Number = '$Phone_Number',
                      Address  = '$Address'
					 WHERE Patient_Id  = '$user_id'
					 ";

                $infoupdate = $this->db->update($query);

                if ($infoupdate) {

                    $_SESSION['message'] = "<div class='alert alert-success' style='text-align:center;'>

                                   <h4>Information updated successfully.</h4>

				</div>";
                header('Location: UserProfile.php');
                    exit();
                } else {

                    $_SESSION['message'] = "<div class='alert alert-success' style='text-align:center;'><h4>Failed to Update.</h4></div>";
                    header('Location: UserProfile.php');
                    exit();
                }
        }
    }

    public function getDonorList(){
        $query = "SELECT * FROM donor";
        $result = $this->db->select($query);
        return $result;
    }

    public function updateDonorInfo($data,$user_id) {
        $name = mysqli_real_escape_string($this->db->link, $data['name']);
        $Contact_No = mysqli_real_escape_string($this->db->link, $data['Contact_No']);
        $Address = mysqli_real_escape_string($this->db->link, $data['Address']);
       

        if ($name == "" || $Contact_No == "") {

            $_SESSION['message'] = "
                    <div class='alert alert-danger'>
                      <h4> Field can not be empty.</h4>
                   </div>";

                   header('Location: UserProfile.php');
                   exit();
        } else {
            $query = "UPDATE donor 
			          SET Donor_Name  = '$name',
                      Address = '$Address',
                      Contact_No  = '$Contact_No'
					 WHERE Donor_Id   = '$user_id'
					 ";

                $infoupdate = $this->db->update($query);

                if ($infoupdate) {

                    $_SESSION['message'] = "<div class='alert alert-success' style='text-align:center;'>

                                   <h4>Information updated successfully.</h4>

				</div>";
                header('Location: UserProfile.php');
                    exit();
                } else {

                    $_SESSION['message'] = "<div class='alert alert-success' style='text-align:center;'><h4>Failed to Update.</h4></div>";
                    header('Location: UserProfile.php');
                    exit();
                }
        }
    }

    public function updateDonorPas($OldPassword, $NewPassword, $user_id) {

        $OldPassword = mysqli_real_escape_string($this->db->link, $OldPassword);

        $NewPassword = mysqli_real_escape_string($this->db->link, md5($NewPassword));

        if (empty($OldPassword) || empty($NewPassword)) {

            $msg = '<div class="alert alert-danger">

		     <h4 align="center">Field can not be empty.</h4>
		   </div>';

            return $msg;
        } else {

            $passquery = "SELECT * FROM donor WHERE Donor_Id  = '$user_id' AND password = '$OldPassword'";

            $passchk = $this->db->select($passquery);

            if ($passchk == false) {
                $msg = '
			<div class="alert alert-danger" style="text-align:center;">
			  <h4>Old passwords do not match.</h4>
			</div>
			 ';
                return $msg;
            } else {
                $query = "UPDATE donor 
			      SET password = '$NewPassword'
			    WHERE Donor_Id = '$user_id'
			";

                $passupdate = $this->db->update($query);

                if ($passupdate) {

                    $msg = '<div class="alert alert-success">
				<h4 align="center">Password updated successfully.</h4>
			    </div>';

                    return $msg;
                } else {

                    $msg = '<div class="alert alert-danger">
				<h4>Failed to Update Password</h4>
			</div>';

                    return $msg;
                }
            }
        }
    }

    public function getPatientList(){
        $query = "SELECT * FROM patient";
        $result = $this->db->select($query);
        return $result;
    }

    public function updateDonorMedicleHistory($data,$user_id) {
        $Donor_Age = mysqli_real_escape_string($this->db->link, $data['Donor_Age']);
        $HB_Count = mysqli_real_escape_string($this->db->link, $data['HB_Count']);
        $WBC_Count = mysqli_real_escape_string($this->db->link, $data['WBC_Count']);
        $RBC_Count = mysqli_real_escape_string($this->db->link, $data['RBC_Count']);
        $Is_Diabetic = mysqli_real_escape_string($this->db->link, $data['Is_Diabetic']);
        $Is_Alcoholic = mysqli_real_escape_string($this->db->link, $data['Is_Alcoholic']);
        $is_covid = mysqli_real_escape_string($this->db->link, $data['is_covid']);
        $Height = mysqli_real_escape_string($this->db->link, $data['Height']);
        $Weight = mysqli_real_escape_string($this->db->link, $data['Weight']);
        $Covid19_Recovery_Date = date("Y-m-d", strtotime($data['Covid19_Recovery_Date']));  


        if ($is_covid == "" || $Is_Alcoholic == "") {

            $_SESSION['message'] = "
                    <div class='alert alert-danger'>
                      <h4> Field can not be empty.</h4>
                   </div>";

                   header('Location: DonorMedicalHistory.php');
                   exit();
        } else {

            $chkquery = "SELECT * FROM donor_medical_history WHERE donor_Id = '$user_id'";

            $chkresult = $this->db->select($chkquery);

            if ($chkresult != false) {
                $query = "UPDATE donor_medical_history 
			          SET Donor_Age  = '$Donor_Age',
                      WBC_Count = '$WBC_Count',
                      RBC_Count  = '$RBC_Count',
                      Is_Diabetic = '$Is_Diabetic',
                      Is_Alcoholic = '$Is_Alcoholic',
                      is_covid = '$is_covid',
                      Height = '$Height',
                      Covid19_Recovery_Date = '$Covid19_Recovery_Date'
					 WHERE donor_Id   = '$user_id'";

                $infoupdate = $this->db->update($query);

                if ($infoupdate) {

                    $_SESSION['message'] = "<div class='alert alert-success' style='text-align:center;'>
                                   <h4>Information updated successfully.</h4>
				                </div>";
                header('Location: DonorMedicalHistory.php');
                    exit();
                } else {
                    $_SESSION['message'] = "<div class='alert alert-success' style='text-align:center;'><h4>Failed to Update.</h4></div>";
                    header('Location: DonorMedicalHistory.php');
                    exit();
                }
            }else{
                $query = "INSERT INTO `donor_medical_history`(`donor_Id`, `Donor_Age`, `WBC_Count`, `RBC_Count`, `Is_Diabetic`, `Is_Alcoholic`, `is_covid`, `Height`,`Covid19_Recovery_Date`)
                 VALUES ('$user_id','$Donor_Age','$WBC_Count','$RBC_Count','$Is_Diabetic','$Is_Alcoholic','$is_covid','$Height','$Covid19_Recovery_Date')";

                $infoupdate = $this->db->update($query);

                if ($infoupdate) {

                    $_SESSION['message'] = "<div class='alert alert-success' style='text-align:center;'>
                                   <h4>Information updated successfully.</h4>
				                </div>";
                header('Location: DonorMedicalHistory.php');
                    exit();
                } else {
                    $_SESSION['message'] = "<div class='alert alert-success' style='text-align:center;'><h4>Failed to Update.</h4></div>";
                    header('Location: DonorMedicalHistory.php');
                    exit();
                }
            }

            
        }
    }

    public function getDonorMedicleHistory($user_id){
        $query = "SELECT * FROM donor_medical_history WHERE donor_Id = '$user_id'";
        $result = $this->db->select($query);
        return $result;
    }

    public function medicleInfoByDonor($did){
        $query = "SELECT * FROM donor_medical_history WHERE donor_Id = '$did'";
        $result = $this->db->select($query);
        return $result;
    }

    

}
?>

