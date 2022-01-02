<?php

/**

*Session Class

**/

class Session{

 public static function init(){

  if (version_compare(phpversion(), '5.4.0', '<')) {

        if (session_id() == '') {

            session_start();

        }

    } else {

        if (session_status() == PHP_SESSION_NONE) {

            session_start();

        }

    }

 }


 public static function set($key, $val){

  $_SESSION[$key] = $val;

 }



 public static function get($key){

  if (isset($_SESSION[$key])) {

   return $_SESSION[$key];

  } else {

   return false;

  }

 }



 public static function checkSession(){

  self::init();

  if (self::get("donorlogin")== false) {

   self::destroy();

   header("Location: ../index.php");

  }

 }

 public static function checkSession2(){

    self::init();
  
    if (self::get("patientlogin")== false) {
  
     self::destroy();
  
     header("Location: ../index.php");
  
    }
  
   }



 public static function checkLogin(){

  self::init();

  if (self::get("donorlogin")== true) {

   header("Location: Donor/DonorDashboard.php");

  }

 }

 public static function checkLogin2(){

    self::init();
  
    if (self::get("patientlogin")== true) {
  
     header("Location: Patient/PatientDashboard.php");
  
    }
  
   }


 public static function destroy(){

  session_destroy();

  header("Location: ../index.php");

 }

}

?>