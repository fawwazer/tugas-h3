<?php

require 'Controller/DiaryController.php';
$diaryController = new DiaryController();

if(isset($_POST['types']))
{
    $diaryTables = $diaryController->CreateDiaryTables($_POST['types']);
}
 else 
     {
    $diaryTables = $diaryController->CreateDiaryTables('%');
}
$title = 'Diary overview';
$content = $diaryController->CreateDiaryDropdownList().$diaryTables;

include 'Template.php';
?>

