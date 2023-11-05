<?php include "Templates\header.php"; include "Templates\Navbar.php"; include "db_connect.php"?>
<?php
if(isset($_POST["import_data"])){
    if($_FILES['file']['name']){
        $filename = explode(".",$_FILES['file']['name']);
        if($filename[1] == "csv"){
            $handle = fopen($_FILES['file']['tmp_name'],
            "r");
            $junk = fgetcsv($handle);
            while($data = fgetcsv($handle)){
                $column1 = mysqli_real_escape_string($conn,$data[0]);
                $column2 = mysqli_real_escape_string($conn,$data[1]);
                $column3 = mysqli_real_escape_string($conn,$data[2]);
                $column4 = mysqli_real_escape_string($conn,$data[3]);
                $column5 = mysqli_real_escape_string($conn,$data[4]);
                $column6 = mysqli_real_escape_string($conn,$data[5]);
                $column7 = mysqli_real_escape_string($conn,$data[6]);
                $column8 = mysqli_real_escape_string($conn,$data[7]);

                $query = "INSERT IGNORE INTO pokemon(Dex_Number,Type,Name,dex_entry,size,weight,habitat,evolutions) VALUES('$column1','$column2','$column3','$column4','$column5','$column6','$column7','$column8')";
                $run_query = mysqli_query($conn, $query);
            }
            fclose($handle);
            if($run_query == true){
                echo '<script language="javascript">';
                echo 'alert("Data transfer succesful")';
                echo '</script>';
            }
            else{
                echo '<script language="javascript">';
                echo 'alert("Data transfer failed")';
                echo '</script>';
            }
        }
    }
}
?>
<?php require_once "db_connect.php"; 
$sql = "SELECT * FROM pokemon";
$result = mysqli_query($conn, $sql);
?>
<div>
    <form method="post" enctype="multipart/form-data">
        <label>Choose your CSV file</label>
        <input type="file" name="file">
        <button name="import_data">import data</button>
    </form>
</div>

<h1>Kanto Pokedex</h1>

<table id="tableID" class="full_width_table">
<tr class="">
<th></th>
<th class="white"> Number </th>
<th class="white"> Name </th>
<th class="white"> Picture </th>
<th class="white"> Dex entry </th>
<th class="white"> Size </th>
<th class="white"> Weight </th>
<th class="white"> Habitat </th>
<th class="white"> Evoloution </th>
</tr>

<?php 
$result = $conn->query($sql);
if($result->num_rows == 0){
    print $output = 'Theres was no data from the database.';
}else{
    while($data_rows = mysqli_fetch_array($result))
        {$id = $data_rows["PokemonID"];
?>

<tr>
    <td><a href="Pokemon_edits.php?PokemonID=<?php print $data_rows["PokemonID"];?>">Edit</a></td>
    <td><?php print $data_rows["Dex_Number"];?></td>
    <td><?php print $data_rows["Name"];?></td>
    <td></td>
    <td><?php print $data_rows["dex_entry"];?></td>
    <td><?php print $data_rows["size"];?></td>
    <td><?php print $data_rows["weight"];?></td>
    <td><?php print $data_rows["habitat"];?></td>
    <td><?php print $data_rows["evolutions"];?></td>
</tr>

<?php } } ?>


