<?php

   @$app_operation = $_POST['app'];
   
   function Validate_Login(){

   }

   function Validate_Quit(){
      
   }

   function Save_Note(){

   }

   function Edite_Note(){

   }

   function Delete_Note(){

   }

   function Save_User(){

   }

   function Edite_User(){

   }

   function Delete_User(){

   }


   if($app_operation == "validate_login"){
       Validate_Login();
   }elseif($app_operation == "validate_quit"){
       Validate_Quit();
   }elseif($app_operation == "save_note"){
       Save_Note();
   }elseif($app_operation == "edite_note"){
       Edite_Note();
   }elseif($app_operation == "delete_note"){
       Delete_Note();
   }elseif($app_operation == "save_user"){
       Save_User();
   }elseif($app_operation == "edite_user"){
       Edite_User();
   }elseif($app_operation == "delete_user"){
       Delete_User();
   }else{

   }


?>