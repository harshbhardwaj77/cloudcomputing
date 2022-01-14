<?php
session_start();

try {
    $db = new PDO('mysql:host=localhost;dbname=test_todo','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){
    echo $e->getMessage();

}
if (isset($_POST['add'])){
    $iyem =$_post['item'];
    if(!empty($item)){
        $newItem = $db->query("INSERT INTO todo (item , status) VALUES ('$item',0)");
        if ($newItem->rowcount()>0){
            echo '<center><div class="alert alert -success placing" role="alert">
            Item Added
            </div></center>';
        }
    }
}