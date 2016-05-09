# Retro ROM API

The Retro ROM API is a PHP scraper API for [LoveRoms.com](https://www.loveroms.com).  It retreives information and resources for retro videogame ROMs based on various parameters outlined below.  Successful calls will return a JSON array of games along with the following data:

   * Cover image URL
   * Console name
   * Direct download link
   * Link to game page on LoveRoms.com

## Parameters & Accepted Values:
  * **Required**
    * direction (string) - Direction of sorting.
      * ascending
      * descending
    * sort (string) - How the results are sorted.
      * alphabetical - Sort alphabetically.
      * downloads - Sort by number of downloads.
    * length (integer) - Number of results to retreive.
  * **Optional**
    * query (string) - Search for specific games.
    * start (integer) - Start at a specified result.
      * 0 - Default (Start at first result)
    * region (string) - Retreives games for a specified region.
      * null - Default (all regions)
      * us
      * europe
      * france
      * germany
      * china
      * russia
    * genre (string) - Retreives games for a specified genre. (WARNING: Many games are uncategorized.)
      * null - Default (all genres)
      * adventure
      * action
      * beat em up
      * board game
      * card game
      * compilation
      * educational
      * fighting
      * hack
      * horror
      * maze
      * music
      * misc
      * pinball
      * platform
      * puzzle
      * racing
      * role playing
      * shooter
      * sports
      * simulation
      * strategy
      * turn based tactics
    * console (string) - Retreives games for a specified console.
      * null - Default (all consoles)
      * Acorn 8 bit
      * Acorn Archimedes
      * Acorn Electron
      * Amiga 500
      * Amstrad CPC
      * Amstrad GX4000
      * Apple I
      * Apple II
      * Apple II GS
      * Atari 2600
      * Atari 5200
      * Atari 7800
      * Atari 800
      * Atari Jaguar
      * Atari Lynx
      * Atari ST
      * BBC Micro
      * Bally Pro Arcade Astrocade
      * Camputers Lynx
      * Capcom Play System 1
      * Capcom Play System 2
      * Casio Loopy
      * Casio PV1000
      * ColecoVision
      * ColecoVision ADAM
      * Commodore 64
      * Commodore Max Machine
      * Commodore Pet
      * Commodore Plus4 C16
      * Commodore VIC20
      * Dragon Data Dragon
      * Dreamcast
      * Elektronika BK
      * Emerson Arcadia 2001
      * Entex Adventure Vision
      * Epoch Super Cassette Vision
      * Fairchild Channel F
      * Funtech Super Acan
      * GCE Vectrex
      * Galaksija
      * Game Gear
      * GamePark GP32
      * Gameboy
      * Gameboy Advance
      * Gameboy Color
      * Hartung Game Master
      * Intellivision
      * Interact Family Computer
      * Kaypro II
      * Luxor ABC 800
      * MAME 037b11
      * MSX 2
      * MSX Computer
      * Magnavox Odyssey 2
      * Mattel Aquarius
      * Memotech MTX512
      * Miles Gordon Sam Coupe
      * Neo Geo
      * Neo Geo Pocket
      * Neo Geo Pocket Color
      * Nintendo
      * Nintendo 3DS
      * Nintendo 64
      * Nintendo DS
      * Nintendo Famicom Disk System
      * Nintendo Pokemon Mini
      * Nintendo Virtual Boy
      * Nokia N Gage
      * PTC Sol 20
      * Pel Varazdin Orao
      * Philips Videopac
      * Playstation
      * RCA Studio II
      * Robotron Z1013
      * Sega 32x
      * Sega Genesis
      * Sega Master System
      * Sega Pico
      * Sega SG1000
      * Sega Super Control Station
      * Sega Visual Memory System
      * Sharp MZ 700
      * Sharp X68000
      * Sinclair ZX81
      * Sufami Turbo
      * Super Grafx
      * Super Nintendo
      * Tandy Color Computer
      * Tangerine Oric
      * Thomson MO5
      * Tiger Game Com
      * TurboGrafx 16
      * VTech CreatiVision
      * VTech V Smile
      * Wang VS
      * Watara Supervision
      * WonderSwan
      * Z Machine Infocom
      * ZX Spectrum

## Example Request
 
The following will return Gameboy Advance games containing the term "pokemon" released in the US.  The results will be sorted by most downloaded to least downloaded and will start at the first result.

    http://server.com/retro_rom_api.php?console=Gameboy+Advance&region=us&direction=descending&sort=downloads&start=0&length=5&query=pokemon

## Disclaimers
   * I own nothing.
   * I have no affiliation with LoveRoms.com.
   * I know the code is a little messy. I've never created something like this before so this is all new to me.
   * Do whatever you want with the code, but let me know if you make something cool with it!
