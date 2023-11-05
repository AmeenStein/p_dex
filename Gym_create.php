<?php include "Templates\header.php"; ?>
<?php include "Templates\Navbar.php"; ?>

<h1>Create a new pokemon Gym</h1>
<p>On this page you can add a Gym to our collection of International Pokemon Gyms.</p>
<br>
<form action="processes.php" method="POST">
    <label for="Type">Select Gym Type</label><br><br>
    <select placeholder="Grass" name="Type" id="Type"> <!--add placeholder for optgroup-->
        <optgroup label="Pokemon types">
            <option value="Normal">Normal</option>
            <option value="Fire">Fire</option>
            <option value="Water">Water</option>
            <option value="Grass">Grass</option>
            <option value="Electric">Electric</option>
            <option value="Ice">Ice</option>
            <option value="Fighting">Fighting</option>
            <option value="Poison">Poison</option>
            <option value="Ground">Ground</option>
            <option value="Flying">Flying</option>
            <option value="Psychic">Psychic</option>
            <option value="Bug">Bug</option>
            <option value="Rock">Rock</option>
            <option value="Ghost">Ghost</option>
            <option value="Dragon">Dragon</option>
            <option value="Dark">Dark</option>
            <option value="Steel">Steel</option>
            <option value="Fairy">Fairy</option>
        </optgroup>
    </select><hr>

    <label for="Name">Please enter the name of your Gym:</label><br><br>
    <input type="text" placeholder="the Pewter Gym" name="Gym_Name" id="Gym_Name" required><hr>

    <label for="Name">Please enter the name of your Gym Leader:</label><br><br>
    <input type="text" placeholder="Brock" name="Leader_Name" id="Leader_Name" required><hr>

    <label for="Name">A Short description on where your gym is:</label><br><br>
    <input type="text" placeholder="Pewter City" name="Location" id="Location"><hr>

    <label for="Name">Name the Gym leaders Pokemon: </label><br><br>
    <input type="text" placeholder="Gravler" name="1_pokemon" id="1_pokemon"><hr>

    <input name="new_gym" value="Submit" type="submit">
</form>