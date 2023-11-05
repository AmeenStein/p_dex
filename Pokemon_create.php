<?php include "Templates\header.php"; ?>
<?php include "Templates\Navbar.php"; ?>

<h1>Create a new pokemon</h1>
<p>On this page you can add a pokemon to our collection of the International Pokedex.</p>
<br>
<form action="processes.php" method="POST">
    <label for="Type">Select Pokemon Type</label><br><br>
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

    <label for="Name">Please enter the name of your Pokemon:</label><br><br>
    <input type="text" placeholder="Bulbasaur" name="Name" id="Name" required><hr>

    <label for="Dex_Number">Please give your pokemons Number</label><br><br>
    <input type="number" name="Dex_Number" id="Dex_Number" required><br><hr>

    <label for="dex_entry">Please enter the Pokemons Dex entry:</label><br><br>
    <textarea name="dex_entry" id="dex_entry" placeholder="A strange seed was planted on its back at birth. The plant sprouts and grows with this Pokémon." style="width: 357px; height: 63px;"></textarea><hr>

    <label for="size">Enter your pokemons weight and height:</label><br><br>
    <input type="text" placeholder="0.7" name="size" id="size">meters<br><br>
    <input type="text" placeholder="6.9" name="weight" id="weight">kilograms<hr>


    <label for="habitat">Enter your pokemons habitat:</label><br><br>
    <input type="text" placeholder="Kantonian forests and jungles." name="habitat" id="habitat"><hr><!--change CSS to be longer-->

    <label for="habitat">Enter your pokemons Evolutionary line:</label><br><br>
    <input type="text" placeholder="Evolves into: Ivysaur." name="evolutions" id="evolutions"><br><br><!--change CSS to be longer-->

    <input name="new_pokemon" type="submit" value="Upload Pokemon to the dex"></input><!--change CSS-->
</form>