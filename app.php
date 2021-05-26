<?php

@$app_operation = $_POST['app'];


function Install_System($db_name, $db_hostname, $db_user, $db_password, $db_prefix, $site_search, $admin_name, $admin_login, $admin_password, $admin_email){
 
    try{
       $conn = new PDO("mysql:dbname={$db_name};host={$db_hostname}","{$db_user}","{$db_password}"); 
       $connection_db =  true;
    }catch (Exception $e) {
       $connection_db = false;
    }

    $db_validation_cont = 0;

    if($connection_db == true){

        $user = $conn->prepare("CREATE TABLE IF NOT EXISTS {$db_prefix}_user(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(55),
        login VARCHAR(55),
        password VARCHAR(55),
        email VARCHAR(155),            
        permission VARCHAR(55),
        registrationdate DATETIME, 
        lastacess VARCHAR(55),
        colortheme VARCHAR(50),    
        language VARCHAR(10),
        status VARCHAR(10)
        )DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;");

        $user->execute();
        if($user->execute()){ $db_validation_cont++; }


        $card = $conn->prepare("CREATE TABLE IF NOT EXISTS {$db_prefix}_card(
        id BIGINT AUTO_INCREMENT PRIMARY KEY,
        id_user BIGINT, 
        card_front VARCHAR(800),
        card_back VARCHAR(800),       
        create_date DATETIME, 
        last_access_date DATETIME,
        card_level VARCHAR(20),
        status VARCHAR(10)
        )DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;");

        $card->execute();
        if($card->execute()){ $db_validation_cont++; }


        $config = $conn->prepare("CREATE TABLE IF NOT EXISTS {$db_prefix}_config(
        id BIGINT AUTO_INCREMENT PRIMARY KEY,
        url_host VARCHAR(800),       
        create_system VARCHAR(30)
        )DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;");

        $config->execute();
        if($config->execute()){ $db_validation_cont++; }


        $input_user = $conn->prepare("
            
            INSERT INTO 
            {$db_prefix}_user(            
            name,
            login,
            password,
            email,            
            permission,
            registrationdate, 
            lastacess,
            colortheme,
            language,
            status) 
            
            VALUES(
            :USER_NAME, 
            :USER_LOGIN, 
            :USER_PASSWORD, 
            :USER_EMAIL, 
            :USER_PERMISSION, 
            :USER_REGISTRATIONDATE, 
            :USER_LASTACESS, 
            :USER_COLORTHEME,
            :USER_LANGUAGE, 
            :USER_STATUS
            )");
          
        date_default_timezone_set('America/Sao_Paulo'); 
        $user_name = $admin_name;         
        $user_login = $admin_login;
        $user_password = $admin_password;
        $user_email = $admin_email;
        $user_permission = "admin";
        $user_registrationdate = date('Y-m-d H-i-s');
        $user_lastacess = date('Y-m-d H-i-s');
        $user_colortheme = "basic";
        $user_language = "en";
        $user_status = "true";


        $input_user->bindParam(":USER_NAME", $user_name);
        $input_user->bindParam(":USER_LOGIN", $user_login);
        $input_user->bindParam(":USER_PASSWORD", $user_password);
        $input_user->bindParam(":USER_EMAIL", $user_email);
        $input_user->bindParam(":USER_PERMISSION", $user_permission);
        $input_user->bindParam(":USER_REGISTRATIONDATE", $user_registrationdate);
        $input_user->bindParam(":USER_LASTACESS", $user_lastacess);
        $input_user->bindParam(":USER_COLORTHEME", $user_colortheme);
        $input_user->bindParam(":USER_LANGUAGE", $user_language);
        $input_user->bindParam(":USER_STATUS", $user_status);

        if(@$input_user->execute()){ $db_validation_cont++; }   




        $input_config = $conn->prepare("
            
            INSERT INTO 
            {$db_prefix}_config(            
            url_host,
            create_system
            ) 
            
            VALUES(
            :URL_HOST, 
            :CREATE_SYSTEM
            )"
        );
          
        date_default_timezone_set('America/Sao_Paulo');       
        $url_host = $_SERVER['HTTP_HOST'];
        $config_create_system = date('Y-m-d H-i-s');
       
        $input_config->bindParam(":URL_HOST", $url_host);
        $input_config->bindParam(":CREATE_SYSTEM", $config_create_system);
       

        if(@$input_config->execute()){ $db_validation_cont++; }   


        echo "Successfully completed!";
        
    
   }


}

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