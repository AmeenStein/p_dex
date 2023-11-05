<div id="small" class="sticky">

<h1><a href="index.php">Pokedex</a></h1>

<ul id="very_small" class="pokeball_li">
<li> <a href="#">Regions</a> </li>
<li> <a class="active" href="file:///C:/Users/Martin%20Stein/OneDrive/Desktop/Ameen/Web/html/Pokedex/Pokedex%20mainpage.html">Gen 1</a> </li>
<li> <a href="#">Gen 2</a> </li>
<li> <a href="#">Gen 3</a> </li>
<li> <a href="#">Gen 4</a> </li>
<li class="padding">
    <form>
	<input list="pokemon" id="Pokemon_input" placeholder="Search">
	<datalist id="pokemon">
	<option value="Bulbasaur">
	<option value="Ivysaur">
	<option value="Venusaur">
	<option value="Charmander" onclick="getPokemon()">
	<option value="Charmeleon">
	<option value="Charizard">
	<option value="Squirtle">
	<option value="Wartortle">
	<option value="Blastoise">
	<option value="Caterpie">
	<option value="Metapod">
	<option value="Butterfree">
	<option value="Weedle">
	<option value="Kakuna">
	<option value="Beedrill">
	<option value="Pidgey">
	<option value="Pidgeotto">
	<option value="Pidgeot">
	<option value="Rattata">
	<option value="Raticate">
	<option value="Spearow">
	<option value="Fearow">
	<option value="Ekans">
	<option value="Arbok">
	</datalist>
    </form></li>
	<li class="float_R"><button class="darkmode_button" onclick="lightmode()">Light mode</button></li>
	<li class="float_R"><button class="darkmode_button" onclick="darkmode()">Dark mode</button></li>
    <li class="float_R">
		<div>
    		<a href="Pokemon_create.php">Create Pokemon</a>
    		<a href="Gym_create.php">Create Gym</a>
    		<a href="Trainer_create.php">Create Trainer</a>
  		</div>
	</li>
</ul>
</div>

