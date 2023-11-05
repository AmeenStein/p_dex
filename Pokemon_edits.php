<?php require_once "db_connect.php"

$tableID = $_GET["PokemonID"];

$edit_rows = "SELECT *FROM pokemon WHERE PokemonID = '$tableID' LIMIT 1";
$edit_res = $conn->query($edit_rows);
if($edit_res->num_rows < 1){
    header("Location: index.php?DontExist");
    exit();
}

$edit_row = $edit_res->fetch_assoc();
?>

<h1>text</h1>