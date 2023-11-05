<?php include "Templates\header.php"; ?>
<?php include "Templates\Navbar.php"; ?>

<h1>Create a new pokemon Gym</h1>
<p>On this page you can add a Gym to our collection of International Pokemon Gyms.</p>
<br>

<form action="processes.php" method="POST">

<label for="Name">Please enter the name of your Gym Leader:</label><br><br>
<input type="text" placeholder="Brock" name="Name" id="Name" required><hr>

<label for="Name">A Short description on where your Trainer usually is:</label><br><br>
<input type="text" placeholder="Pewter City" name="Location" id="Location"><hr>

<label for="Name">Name the Gym leaders Pokemon: </label><br><br>
<input type="text" placeholder="Gravler" name="1_pokemon" id="1_pokemon"><hr>

<input name="new_trainer" value="Submit" type="submit">

</form>