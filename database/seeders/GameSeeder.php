<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run()
    {
        $gamesTitle = ['Euro Truck Simulator 2', 'It Takes Two', 'Forza Horizon 4', 'Grand Theft Auto V', 'Monster Hunter: World', 'Totally Accurate Battle Simulator', 'Planet Coaster', 'GTFO', 'Apex Legends', 'Terraria', 'TEKKEN 7', 'Valheim'];

        $gamesGenre = ['Simulation', 'Puzzle', 'Sports', 'Action', 'Role-Playing', 'Strategy', 'Simulation', 'Horror', 'Action', 'Adventure', 'Action', 'Action'];

        $gamesImageUrl = [
            'https://cdn.akamai.steamstatic.com/steam/apps/227300/header.jpg', 
            'https://cdn.akamai.steamstatic.com/steam/apps/1426210/header_alt_assets_0.jpg', 
            'https://cdn.akamai.steamstatic.com/steam/apps/1293830/header.jpg', 
            'https://cdn.akamai.steamstatic.com/steam/apps/271590/header.jpg', 
            'https://cdn.akamai.steamstatic.com/steam/apps/582010/header.jpg', 
            'https://cdn.akamai.steamstatic.com/steam/apps/508440/header.jpg', 
            'https://cdn.akamai.steamstatic.com/steam/apps/493340/header.jpg', 
            'https://cdn.akamai.steamstatic.com/steam/apps/493520/header.jpg', 
            'https://cdn.akamai.steamstatic.com/steam/apps/1172470/header.jpg', 
            'https://cdn.akamai.steamstatic.com/steam/apps/105600/header.jpg', 
            'https://cdn.akamai.steamstatic.com/steam/apps/389730/header.jpg', 
            'https://cdn.akamai.steamstatic.com/steam/apps/892970/header.jpg'
        ];

        $gamesTrailerVideoUrl = [
            'https://cdn.akamai.steamstatic.com/steam/apps/256843094/movie480_vp9.webm',
            'https://cdn.akamai.steamstatic.com/steam/apps/256827093/movie480_vp9.webm',
            'https://cdn.akamai.steamstatic.com/steam/apps/256820720/movie480_vp9.webm',
            'https://cdn.akamai.steamstatic.com/steam/apps/256757115/movie480.webm',
            'https://cdn.akamai.steamstatic.com/steam/apps/256769022/movie480.webm',
            'https://cdn.akamai.steamstatic.com/steam/apps/256828204/movie480_vp9.webm',
            'https://cdn.akamai.steamstatic.com/steam/apps/256674785/movie480.webm',
            'https://cdn.akamai.steamstatic.com/steam/apps/256864058/movie480_vp9.webm',
            'https://cdn.akamai.steamstatic.com/steam/apps/256858965/movie480_vp9.webm',
            'https://cdn.akamai.steamstatic.com/steam/apps/256785003/movie480_vp9.webm',
            'https://cdn.akamai.steamstatic.com/steam/apps/256807403/movie480_vp9.webm',
            'https://cdn.akamai.steamstatic.com/steam/apps/256820008/movie480_vp9.webm',
        ];

        $gamesDescription = [
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        ];


        $gamesLongDescription = [
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        ];

        $gamesReleaseDate = [
            '2012-10-18',
            '2021-03-26',
            '2021-03-10',
            '2015-04-14',
            '2018-08-09',
            '2021-04-02',
            '2016-11-17',
            '2021-12-10',
            '2020-11-05',
            '2011-05-17',
            '2017-06-02',
            '2021-02-02',
        ];

        $gamesDeveloper = [
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        ];

        $gamesPublisher = [
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        ];

        $gamesPrice = [
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        ];

        $gamesIsAdultContent = [
            0,
            0,
            0,
            1,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
        ];
    }
}
