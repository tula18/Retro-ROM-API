<?php
	
	include('resources/simple_html_dom.php');
	
	//Options
	$min_results = 1;
		
	if (!empty($_GET['genre'])) {
		$valid_genres = array(
			"",
			"adventure",
			"action",
			"beat em up",
			"board game",
			"card game",
			"compilation",
			"educational",
			"fighting",
			"hack",
			"horror",
			"maze",
			"music",
			"misc",
			"pinball",
			"platform",
			"puzzle",
			"racing",
			"role playing",
			"shooter",
			"sports",
			"simulation",
			"strategy",
			"turn based tactics"
		);
		if (in_array($_GET['genre'], $valid_genres) == true) {
			$genre = urlencode($_GET['genre']);
		} else {
			invalid();
		}
	}
	if (!empty($_GET['length'])) {
		if (ctype_digit($_GET['length']) == true) {
			$length_val = intval($_GET['length']);
			if ($length_val < $min_results) {
				invalid();
			} else {
				$length = $length_val;
			}
		} else {
			invalid();
		}
	} else {
		invalid();
	}
	if (!empty($_GET['start'])) {
		if (ctype_digit($_GET['start']) == true) {
			$start_val = intval($_GET['start']);
			if ($start_val < 0) {
				invalid();
			} else {
				$start = $start_val;
			}
		} else {
			invalid();
		}
	} else {
		$start = '0';
	}
	if (!empty($_GET['console'])) {
		$console_raw = $_GET['console'];
		$valid_consoles = json_decode('{"Acorn 8 bit":"acorn-8-bit","Acorn Archimedes":"acorn-archimedes","Acorn Electron":"acorn-electron","Amiga 500":"amiga-500","Amstrad CPC":"amstrad-cpc","Amstrad GX4000":"amstrad-gx4000","Apple I":"apple-i","Apple II":"apple-ii","Apple II GS":"apple-ii-gs","Atari 2600":"atari-2600","Atari 5200":"atari-5200","Atari 7800":"atari-7800","Atari 800":"atari-800","Atari Jaguar":"atari-jaguar","Atari Lynx":"atari-lynx","Atari ST":"atari-st","BBC Micro":"bbc-micro","Bally Pro Arcade Astrocade":"bally-pro-arcade-astrocade","Camputers Lynx":"camputers-lynx","Capcom Play System 1":"capcom-play-system-1","Capcom Play System 2":"capcom-play-system-2","Casio Loopy":"casio-loopy","Casio PV1000":"casio-pv1000","ColecoVision":"colecovision","ColecoVision ADAM":"colecovision-adam","Commodore 64":"commodore-64","Commodore Max Machine":"commodore-max-machine","Commodore Pet":"commodore-pet","Commodore Plus4 C16":"commodore-plus4-c16","Commodore VIC20":"commodore-vic20","Dragon Data Dragon":"dragon-data-dragon","Dreamcast":"dreamcast","Elektronika BK":"elektronika-bk","Emerson Arcadia 2001":"emerson-arcadia-2001","Entex Adventure Vision":"entex-adventure-vision","Epoch Super Cassette Vision":"epoch-super-cassette-vision","Fairchild Channel F":"fairchild-channel-f","Funtech Super Acan":"funtech-super-acan","GCE Vectrex":"gce-vectrex","Galaksija":"galaksija","Game Gear":"game-gear","GamePark GP32":"gamepark-gp32","Gameboy":"gameboy","Gameboy Advance":"gameboy-advance","Gameboy Color":"gameboy-color","Hartung Game Master":"hartung-game-master","Intellivision":"intellivision","Interact Family Computer":"interact-family-computer","Kaypro II":"kaypro-ii","Luxor ABC 800":"luxor-abc-800","MAME 037b11":"mame-037b11","MSX 2":"msx-2","MSX Computer":"msx-computer","Magnavox Odyssey 2":"magnavox-odyssey-2","Mattel Aquarius":"mattel-aquarius","Memotech MTX512":"memotech-mtx512","Miles Gordon Sam Coupe":"miles-gordon-sam-coupe","Neo Geo":"neo-geo","Neo Geo Pocket":"neo-geo-pocket","Neo Geo Pocket Color":"neo-geo-pocket-color","Nintendo":"nintendo","Nintendo 3DS":"nintendo-3ds","Nintendo 64":"nintendo-64","Nintendo DS":"nintendo-ds","Nintendo Famicom Disk System":"nintendo-famicom-disk-system","Nintendo Pokemon Mini":"nintendo-pokemon-mini","Nintendo Virtual Boy":"nintendo-virtual-boy","Nokia N Gage":"nokia-n-gage","PTC Sol 20 ":"ptc-sol-20-","Pel Varazdin Orao":"pel-varazdin-orao","Philips Videopac":"philips-videopac","Playstation":"playstation","RCA Studio II":"rca-studio-ii","Robotron Z1013":"robotron-z1013","Sega 32x":"sega-32x","Sega Genesis":"sega-genesis","Sega Master System":"sega-master-system","Sega Pico":"sega-pico","Sega SG1000":"sega-sg1000","Sega Super Control Station":"sega-super-control-station","Sega Visual Memory System":"sega-visual-memory-system","Sharp MZ 700":"sharp-mz-700","Sharp X68000":"sharp-x68000","Sinclair ZX81":"sinclair-zx81","Sufami Turbo":"sufami-turbo","Super Grafx":"super-grafx","Super Nintendo":"super-nintendo","Tandy Color Computer":"tandy-color-computer","Tangerine Oric":"tangerine-oric","Thomson MO5":"thomson-mo5","Tiger Game Com":"tiger-game-com","TurboGrafx 16":"turbografx-16","VTech CreatiVision":"vtech-creativision","VTech V Smile":"vtech-v-smile","Wang VS":"wang-vs","Watara Supervision":"watara-supervision","WonderSwan":"wonderswan","Z Machine Infocom":"z-machine-infocom","ZX Spectrum":"zx-spectrum"}');
		
		if (array_key_exists($console_raw, $valid_consoles)) {
			$console = urlencode($_GET['console']);
		} elseif ($_GET['console'] == 'PTC Sol 20' ){
			$console = 'PTC Sol 20 ';
		} else {
			invalid();
		}
	} else {
		$console = '0'; // 0 = no specified console
	}
	if (!empty($_GET['query'])) {
		$query = urlencode($_GET['query']);
	} else {
		$query = '';
	}
	if (!empty($_GET['region'])) {
		$region_sort = array(
			"all" => "all",
			"us" => "(U)",
			"europe" => "(E)",
			"france" => "(F)",
			"germany" => "(G)",
			"japan" => "(J)",
			"china" => "(Chinese)",
			"russia" => "(RU)"
		);
		$region_raw = $_GET['region'];
		if (isset($region_sort[$region_raw])) {
			if ($region_raw == 'all') {
				$region = '';
			} else {
				$region = $region_sort[$region_raw];
			}
		} else {
			invalid();
		}
	} else {
		$region = '';
	}
	if (isset($_GET['sort'])) {
		$valid_sort = array(
			"downloads" => "4",
			"alphabetical" => "0"
		);
		$sort_raw = $_GET['sort'];
		if (isset($valid_sort[$sort_raw])) {
			$sort = $valid_sort[$sort_raw];	
		} else {
			invalid();
		}
	} else {
		invalid();
	}
	if (isset($_GET['direction'])) {
		$valid_direction = array(
			"ascending" => "asc",
			"descending" => "desc"
		);
		$direction_raw = $_GET['direction'];
		if (isset($valid_direction[$direction_raw])) {
			$direction = $valid_direction[$direction_raw];	
		} else {
			invalid();
		}
	} else {
		invalid();
	}
	
	function invalid() {
		header('HTTP/1.0 404 not found');
		exit;
	}
	
	$html = file_get_html('https://www.loveroms.com/query.php?sEcho=5&iColumns=5&sColumns=%2C%2C%2C%2C&iDisplayStart=' . $start . '&iDisplayLength=' . $length . '&mDataProp_0=0&sSearch_0=&bRegex_0=false&bSearchable_0=true&bSortable_0=true&mDataProp_1=1&sSearch_1=' . $console . '&bRegex_1=false&bSearchable_1=true&bSortable_1=true&mDataProp_2=2&sSearch_2=' . $genre . '&bRegex_2=false&bSearchable_2=true&bSortable_2=true&mDataProp_3=3&sSearch_3=' . $region . '&bRegex_3=false&bSearchable_3=true&bSortable_3=true&mDataProp_4=4&sSearch_4=&bRegex_4=false&bSearchable_4=true&bSortable_4=true&sSearch=' . $query . '&bRegex=false&iSortCol_0=' . $sort . '&sSortDir_0=' . $direction . '&iSortingCols=1');
	
	$i = -1;
	
	foreach ($html->find('a') as $a) {
		$i++;
		$text = $a->plaintext;
		$link_text = $a->href;
		$link_raw = stripcslashes($link_text);
		$href = 'http:' . substr($link_raw, 1, -1);
		$text_stripped = json_decode(strip_tags('{"aaData":[["' . $text));
		$text_dec = json_decode(json_encode($text_stripped), true);
		$name = rtrim($text_dec['aaData'][0]['0']);
		$platform = $text_dec['aaData'][0]['1'];
		$output[$name]['href'] = $href;
		$output[$name]['console'] = $platform;
		$html = file_get_html($href);
		$el = $html->find("div > div > div > p > a[class=btn btn-success detail]",0);
		$img = $html->find("img.rom-cover",0);
		$download = $el->href;
		$property = 'data-cfsrc';
		$img_src = $img->$property;
		if (isset($download)) {
			$output[$name]['download'] = $download;
		} else {
			$output[$name]['download'] = false;
		}
		if (isset($img_src)) {
			$output[$name]['img'] = $img_src;
		} else {
			$output[$name]['img'] = false;
		}
	}
	
	header('Content-Type: application/json');
	
	echo json_encode($output);
	
?>