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
?>