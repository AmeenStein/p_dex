<?php require_once "db_connect.php";
    if(isset($_POST["new_pokemon"])){
        $pokemon_name = mysqli_real_escape_string($conn, $_POST["Name"]);
        $pokemon_type = mysqli_real_escape_string($conn, $_POST["Type"]);
        $pokemon_Num = mysqli_real_escape_string($conn, $_POST["Dex_Number"]);
        $pokemon_Entry = mysqli_real_escape_string($conn, $_POST["dex_entry"]);
        $pokemon_size = mysqli_real_escape_string($conn, $_POST["size"]);
        $pokemon_weight = mysqli_real_escape_string($conn, $_POST["weight"]);
        $pokemon_habitat = mysqli_real_escape_string($conn, $_POST["habitat"]);
        $pokemon_evo = mysqli_real_escape_string($conn, $_POST["evolutions"]);

        $insert_Pokemon_create = "INSERT INTO pokemon(Name,Type,Dex_Number,dex_entry,size,weight,habitat,evolutions) VALUES('$pokemon_name','$pokemon_type','$pokemon_Num','$pokemon_Entry','$pokemon_size','$pokemon_weight','$pokemon_habitat','$pokemon_evo')";

        if($conn->query($insert_Pokemon_create) === TRUE){
            header("Location: Pokemon_create.php");
            exit();
            print "Pokemon stored successfully";
        }else{
            print "Failed: " . $conn->error;
        }
    }

    if(isset($_POST["new_gym"])){
        $Gym_name = mysqli_real_escape_string($conn, $_POST["Gym_Name"]);
        $Gym_leader = mysqli_real_escape_string($conn, $_POST["Leader_Name"]);
        $Gym_type = mysqli_real_escape_string($conn, $_POST["Type"]);
        $Gym_location = mysqli_real_escape_string($conn, $_POST["Location"]);
        $Gym_1_pokemon = mysqli_real_escape_string($conn, $_POST["1_pokemon"]);
        

        $insert_Gym_create = "INSERT INTO gyms(Gym_Name,Type,Leader_Name,Location,1_pokemon) VALUES('$Gym_name','$Gym_type','$Gym_leader','$Gym_location','$Gym_1_pokemon')";

        if($conn->query($insert_Gym_create) === TRUE){
            header("Location: Gym_create.php");
            exit();
            print "Gym stored successfully";
        }else{
            print "Failed: " . $conn->error;
        }
    }

    if(isset($_POST["new_trainer"])){
        $Trainer = mysqli_real_escape_string($conn, $_POST["Name"]);
        $Trainer_location = mysqli_real_escape_string($conn, $_POST["Location"]);
        $_1pokemon = mysqli_real_escape_string($conn, $_POST["1_pokemon"]);
        

        $insert_Trainer_create = "INSERT INTO trainers(Leader_Name,Location,1_pokemon) VALUES('$Trainer','$Trainer_location','$_1pokemon')";

        if($conn->query($insert_Trainer_create) === TRUE){
            header("Location: Trainer_create.php");
            exit();
            print "Trainer stored successfully";
        }else{
            print "Failed: " . $conn->error;
        }
    }

    $output = '';
    if(isset($POST["export_data_from_pokemon_table"]))
    {
        $query = "SELECT * FROM pokemon";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0)
        {
            $output .= '
            <table class="table" bordered="1">
                <tr>
                    <th scope="col">Dex_Number</th>
                    <th scope="col">Type</th>
                    <th scope="col">Name</th>
                    <th scope="col">dex_entry</th>
                    <th scope="col">size</th>
                    <th scope="col">weight</th>
                    <th scope="col">habitat</th>
                    <th scope="col">evolution</th>
                </tr>
            ';
            while($row = mysqli_fetch_array($result))
            {
                $output .= '
                    <tr>
                        <td>'.$row["Dex_Number"].'</td>
                        <td>'.$row["Type"].'</td>
                        <td>'.$row["Name"].'</td>
                        <td>'.$row["dex_entry"].'</td>
                        <td>'.$row["size"].'</td>
                        <td>'.$row["weight"].'</td>
                        <td>'.$row["habitat"].'</td>
                        <td>'.$row["evolution"].'</td>
                    </tr>
            ';
            }
            $output .='</table>';
            header('Content-Type: application/xls');
            header('Content-Disposition: attachment; filename=pokemon_table.xls');
            echo $output;
        }
        else{
            header("Location: index.php?msg=no_data_found");
                exit();
        }
    }
?>