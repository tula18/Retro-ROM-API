<?php include('header.php'); ?>
<div class="container">
	<div class="home-hero">
		<img class="home-hero-image" src="images/rom-api.png">
		<h1>Steel Retro Game Manager</h1>
		<p class="lead">Manage the office retro game console.</p>
	</div>
	<form class="form-vertical" action="results.php">
		<div class="form-group">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<input id="query" name="query" type="text" placeholder="Search" class="form-control input-md">
				</div>
			</div>
			<div class="center home-advanced-search">
				<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#advanced-search">Toggle Options</button>
				<button type="submit" class="btn btn-default">Search Games</button>
			</div>
			<div class="row collapse" id="advanced-search">
				<div class="add-on col-md-3">
					<label class="control-label" for="console">Console</label>
					<select name="console" class="form-control">
						<option value="0">All</option><option value="Acorn 8 bit">Acorn 8 bit</option><option value="Acorn Archimedes">Acorn Archimedes</option><option value="Acorn Electron">Acorn Electron</option><option value="Amiga 500">Amiga 500</option><option value="Amstrad CPC">Amstrad CPC</option><option value="Amstrad GX4000">Amstrad GX4000</option><option value="Apple I">Apple I</option><option value="Apple II">Apple II</option><option value="Apple II GS">Apple II GS</option><option value="Atari 2600">Atari 2600</option><option value="Atari 5200">Atari 5200</option><option value="Atari 7800">Atari 7800</option><option value="Atari 800">Atari 800</option><option value="Atari Jaguar">Atari Jaguar</option><option value="Atari Lynx">Atari Lynx</option><option value="Atari ST">Atari ST</option><option value="BBC Micro">BBC Micro</option><option value="Bally Pro Arcade Astrocade">Bally Pro Arcade Astrocade</option><option value="Camputers Lynx">Camputers Lynx</option><option value="Capcom Play System 1">Capcom Play System 1</option><option value="Capcom Play System 2">Capcom Play System 2</option><option value="Casio Loopy">Casio Loopy</option><option value="Casio PV1000">Casio PV1000</option><option value="ColecoVision">ColecoVision</option><option value="ColecoVision ADAM">ColecoVision ADAM</option><option value="Commodore 64">Commodore 64</option><option value="Commodore Max Machine">Commodore Max Machine</option><option value="Commodore Pet">Commodore Pet</option><option value="Commodore Plus4 C16">Commodore Plus4 C16</option><option value="Commodore VIC20">Commodore VIC20</option><option value="Dragon Data Dragon">Dragon Data Dragon</option><option value="Dreamcast">Dreamcast</option><option value="Elektronika BK">Elektronika BK</option><option value="Emerson Arcadia 2001">Emerson Arcadia 2001</option><option value="Entex Adventure Vision">Entex Adventure Vision</option><option value="Epoch Super Cassette Vision">Epoch Super Cassette Vision</option><option value="Fairchild Channel F">Fairchild Channel F</option><option value="Funtech Super Acan">Funtech Super Acan</option><option value="GCE Vectrex">GCE Vectrex</option><option value="Galaksija">Galaksija</option><option value="Game Gear">Game Gear</option><option value="GamePark GP32">GamePark GP32</option><option value="Gameboy">Gameboy</option><option value="Gameboy Advance">Gameboy Advance</option><option value="Gameboy Color">Gameboy Color</option><option value="Hartung Game Master">Hartung Game Master</option><option value="Intellivision">Intellivision</option><option value="Interact Family Computer">Interact Family Computer</option><option value="Kaypro II">Kaypro II</option><option value="Luxor ABC 800">Luxor ABC 800</option><option value="MAME 037b11">MAME 037b11</option><option value="MSX 2">MSX 2</option><option value="MSX Computer">MSX Computer</option><option value="Magnavox Odyssey 2">Magnavox Odyssey 2</option><option value="Mattel Aquarius">Mattel Aquarius</option><option value="Memotech MTX512">Memotech MTX512</option><option value="Miles Gordon Sam Coupe">Miles Gordon Sam Coupe</option><option value="Neo Geo">Neo Geo</option><option value="Neo Geo Pocket">Neo Geo Pocket</option><option value="Neo Geo Pocket Color">Neo Geo Pocket Color</option><option value="Nintendo">Nintendo</option><option value="Nintendo 3DS">Nintendo 3DS</option><option value="Nintendo 64">Nintendo 64</option><option value="Nintendo DS">Nintendo DS</option><option value="Nintendo Famicom Disk System">Nintendo Famicom Disk System</option><option value="Nintendo Pokemon Mini">Nintendo Pokemon Mini</option><option value="Nintendo Virtual Boy">Nintendo Virtual Boy</option><option value="Nokia N Gage">Nokia N Gage</option><option value="PTC Sol 20 ">PTC Sol 20 </option><option value="Pel Varazdin Orao">Pel Varazdin Orao</option><option value="Philips Videopac">Philips Videopac</option><option value="Playstation">Playstation</option><option value="RCA Studio II">RCA Studio II</option><option value="Robotron Z1013">Robotron Z1013</option><option value="Sega 32x">Sega 32x</option><option value="Sega Genesis">Sega Genesis</option><option value="Sega Master System">Sega Master System</option><option value="Sega Pico">Sega Pico</option><option value="Sega SG1000">Sega SG1000</option><option value="Sega Super Control Station">Sega Super Control Station</option><option value="Sega Visual Memory System">Sega Visual Memory System</option><option value="Sharp MZ 700">Sharp MZ 700</option><option value="Sharp X68000">Sharp X68000</option><option value="Sinclair ZX81">Sinclair ZX81</option><option value="Sufami Turbo">Sufami Turbo</option><option value="Super Grafx">Super Grafx</option><option value="Super Nintendo">Super Nintendo</option><option value="Tandy Color Computer">Tandy Color Computer</option><option value="Tangerine Oric">Tangerine Oric</option><option value="Thomson MO5">Thomson MO5</option><option value="Tiger Game Com">Tiger Game Com</option><option value="TurboGrafx 16">TurboGrafx 16</option><option value="VTech CreatiVision">VTech CreatiVision</option><option value="VTech V Smile">VTech V Smile</option><option value="Wang VS">Wang VS</option><option value="Watara Supervision">Watara Supervision</option><option value="WonderSwan">WonderSwan</option><option value="Z Machine Infocom">Z Machine Infocom</option><option value="ZX Spectrum">ZX Spectrum</option>
					</select>
				</div>
				<div class="add-on col-md-3">
					<label class="control-label" for="genre">Genre</label>
					<select name="genre" class="form-control">
						<option value="">All</option>
						<option value="adventure">Adventure</option>
						<option value="beat em up">Beat Em Up</option>
						<option value="board game">Board Game</option>
						<option value="card game">Card Game</option>
						<option value="compilation">Compilation</option>
						<option value="educational">Educational</option>
						<option value="fighting">Fighting</option>
						<option value="hack">Hack</option>
						<option value="horror">Horror</option>
						<option value="maze">Maze</option>
						<option value="music">Music</option>
						<option value="misc">Miscellaneous</option>
						<option value="pinball">Pinball</option>
						<option value="platform">Platform</option>
						<option value="puzzle">Puzzle</option>
						<option value="racing">Racing</option>
						<option value="role playing">Role Playing</option>
						<option value="shooter">Shooter</option>
						<option value="sports">Sports</option>
						<option value="simulation">Simulation</option>
						<option value="strategy">Strategy</option>
						<option value="turn based tactics">Turn Based Tactics</option>
					</select>
				</div>
				<div class="add-on col-md-3">
					<label class="control-label" for="region">Region</label>
					<select name="region" class="form-control">
						<option value="all">All</option>
						<option value="us">US</option>
						<option value="europe">Europe</option>
						<option value="france">France</option>
						<option value="germany">Germany</option>
						<option value="japan">Japan</option>
						<option value="china">China</option>
						<option value="russia">Russia</option>
					</select>
				</div>
				<div class="add-on col-md-3">
					<label class="control-label" for="sort">Sort By</label>
					<select name="sort" class="form-control">
						<option value="downloads">Downloads</option>
						<option value="alphabetical">Name</option>
					</select>
				</div>
				<input name="direction" value="descending" hidden>
				<input name="start" value="0" hidden>
				<input name="length" value="10" hidden>
			</div>
		</div>
	</form>
</div><!-- /.container -->
<?php include('footer.php'); ?>