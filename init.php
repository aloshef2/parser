<?php
use Bitrix\Main\UserTable;


session_start();
$fileParser = file_get_contents('test.csv', "r");
$arr = explode(PHP_EOL, $fileParser);


if(true){
  $userParser = new CUser;
  foreach($arr as $key => $value){
    if($key == 0){
      continue;
    }else{
      $user = new CUser;
      $arUserFields = explode(";", $value);
      $arrAddFields = [
        "XML_ID" => $arUserFields[0],
        "NAME" => $arUserFields[1],
        "LAST_NAME" => $arUserFields[2],
        "SECOND_NAME" => $arUserFields[3],
        "WORK_DEPARTMENT" => $arUserFields[4],
        "WORK_POSITION" => $arUserFields[5],
        "EMAIL" => $arUserFields[6],
        "PERSONAL_PHONE" => $arUserFields[7],
        "TOWN_PHONE" => $arUserFields[8],
        "INTERNAL_PHONE" => $arUserFields[9],
        "HOME_PHONE" => $arUserFields[10],
        "LOGIN" => $arUserFields[11],
        "PASSWORD" => $arUserFields[12],
        "CONFIRM_PASSWORD" => $arUserFields[12]
      ];
      $ID = $user->Add($arrAddFields);
    }
  }
}

?>