<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'Travel across Europe as king of the road, a trucker who delivers important cargo across impressive distances! With dozens of cities to explore,
            your endurance, skill and speed will all be pushed to their limits.',
            'Embark on the craziest journey of your life in It Takes Two. Invite a friend to join for free with Friend’s Pass and work together across a huge variety of gleefully disruptive gameplay challenges.',
            'Dynamic seasons change everything at the world’s greatest automotive festival. Go it alone or team up with others to explore beautiful and historic Britain in a shared open world.',
            'Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.',
            'Welcome to a new world! In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.',
            'Be the leader of wobblers from ancient lands, spooky places, and fantasy worlds. Watch them fight in simulations made with the wobbliest physics system ever created, make your own wobblers in the unit creator and send your army off to fight your friends in multiplayer.',
            'Planet Coaster® - the future of coaster park simulation games has arrived! Surprise, delight and thrill incredible crowds as you build your coaster park empire - let your imagination run wild, and share your success with the world.',
            'GTFO is an extreme cooperative horror shooter that throws you from gripping suspense to explosive action in a heartbeat. Stealth, strategy, and teamwork are necessary to survive in your deadly, underground prison. Work together or die together.',
            'Apex Legends is the award-winning, free-to-play Hero shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.',
            'Dig, fight, explore, build! Nothing is impossible in this action-packed adventure game. Four Pack also available!',
            'Discover the epic conclusion of the long-time clan warfare between members of the Mishima family. Powered by Unreal Engine 4, the legendary fighting game franchise fights back with stunning story-driven cinematic battles and intense duels that can be enjoyed with friends and rivals.',
            'A brutal exploration and survival game for 1-10 players, set in a procedurally-generated purgatory inspired by viking culture. Battle, build, and conquer your way to a saga worthy of Odin’s patronage!',
        ];


        $gamesLongDescription = [
            'Travel across Europe as king of the road, a trucker who delivers important cargo across impressive distances! With dozens of cities to explore from the UK, Belgium, Germany, Italy, the Netherlands, Poland, and many more, your endurance, skill and speed will all be pushed to their limits. If you’ve got what it takes to be part of an elite trucking force, get behind the wheel and prove it! <br><br>
            Key Features:<br>
            Transport a vast variety of cargo across more than 60 European cities.<br>
            Run your own business which continues to grow even as you complete your freight deliveries.<br>
            Build your own fleet of trucks, buy garages, hire drivers, manage your company for maximum profits.<br>
            A varied amount of truck tuning that range from performance to cosmetic changes.<br>
            Customize your vehicles with optional lights, bars, horns, beacons, smoke exhausts, and more.<br>
            Thousands of miles of real road networks with hundreds of famous landmarks and structures.<br><br>
            World of Trucks<br>
            Take advantage of additional features of Euro Truck Simulator 2 by joining our online community on World of Trucks, our center for virtual truckers all around the world interested in Euro Truck Simulator 2 and future SCS Software\'s truck simulators.<br><br>

            Use in-game Photo Mode to capture the best moments and share them with thousands of people who love trucks.<br>
            Favorite the images you like the most and return to them anytime in the future.<br>
            Discuss the screenshots with everyone using World of Trucks.<br>
            See the best images hand-picked by the game creators in Editor\'s Pick updated almost every day. Try to get your own screenshot on this list!<br>
            Upload and use your custom avatar and license plate in the game.<br>
            More features coming soon!<br><br>

            To join World of Trucks, simply sign up with your Steam account on the join page.<br>

            World of Trucks is an optional service, registration on World of Trucks isn\'t required to play the game.<br>
            ',
            'Embark on the craziest journey of your life in It Takes Two, a genre-bending platform adventure created purely for co-op. Invite a friend to join for free with Friend’s Pass and work together across a huge variety of gleefully disruptive gameplay challenges. Play as the clashing couple Cody and May, two humans turned into dolls by a magic spell. Together, trapped in a fantastical world where the unpredictable hides around every corner, they are reluctantly challenged with saving their fractured relationship.<br><br>

            Master unique and connected character abilities in every new level. Help each other across an abundance of unexpected obstacles and laugh-out-loud moments. Kick gangster squirrels’ furry tails, pilot a pair of underpants, DJ a buzzing night club, and bobsleigh through a magical snow globe. Embrace a heartfelt and hilarious story where narrative and gameplay weave into a uniquely metaphorical experience.<br><br>

            It Takes Two is developed by the award-winning studio Hazelight, the industry leader of cooperative play. They’re about to take you on a wild and wondrous ride where only one thing is for certain: we’re better together.<br><br>
            KEY FEATURES
            Pure co-op perfection — Invite a friend to join for free with Remote Play Together**, and experience a thrilling adventure built purely for two. Choose from couch or online co-op with split-screen play, and face ever-changing challenges where working together is the only way forward.<br><br>

            Gleefully disruptive gameplay — From rampaging vacuum cleaners to suave love gurus, you never know what you’ll be up against next. Filled with genre-bending challenges and new character abilities to master in every level, experience a metaphorical merging of gameplay and narrative that pushes the boundaries of interactive storytelling.<br><br>

            A universal tale of relationships — Discover a touching and heartfelt story of the challenges in getting along. Help Cody and May learn how to overcome their differences. Meet a diverse cast of strange and endearing characters. Join forces and go on an adventure you’ll treasure — together!<br>',
            'Dynamic seasons change everything at the world’s greatest automotive festival. Go it alone or team up with others to explore beautiful and historic Britain in a shared open world. Collect, modify and drive over 450 cars. Race, stunt, create and explore – choose your own path to become a Horizon Superstar.<br><br>


            Collect Over 450 Cars<br>
            Enjoy the largest and most diverse Horizon car roster yet, including over 100 licensed manufacturers.<br><br>

            Race. Stunt. Create. Explore.<br>
            In the new open-ended campaign, everything you do progresses your game.<br><br>

            Explore a Shared World<br>
            Real players populate your world. When time of day, weather and seasons change, everyone playing the game experiences it at the same time.<br><br>

            Explore Beautiful, Historic Britain<br>
            This is Britain Like You’ve Never Seen it. Discover lakes, valleys, castles, and breathtaking scenery all in spectacular native 4K and HDR.<br>',
            'When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.<br><br>

            Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.<br><br>

            The game offers players a huge range of PC-specific customization options, including over 25 separate configurable settings for texture quality, shaders, tessellation, anti-aliasing and more, as well as support and extensive customization for mouse and keyboard controls. Additional options include a population density slider to control car and pedestrian traffic, as well as dual and triple monitor support, 3D compatibility, and plug-and-play controller support.<br><br>

            Grand Theft Auto V for PC also includes Grand Theft Auto Online, with support for 30 players and two spectators. Grand Theft Auto Online for PC will include all existing gameplay upgrades and Rockstar-created content released since the launch of Grand Theft Auto Online, including Heists and Adversary modes.<br><br>

            The PC version of Grand Theft Auto V and Grand Theft Auto Online features First Person Mode, giving players the chance to explore the incredibly detailed world of Los Santos and Blaine County in an entirely new way.<br><br>

            Grand Theft Auto V for PC also brings the debut of the Rockstar Editor, a powerful suite of creative tools to quickly and easily capture, edit and share game footage from within Grand Theft Auto V and Grand Theft Auto Online. The Rockstar Editor’s Director Mode allows players the ability to stage their own scenes using prominent story characters, pedestrians, and even animals to bring their vision to life. Along with advanced camera manipulation and editing effects including fast and slow motion, and an array of camera filters, players can add their own music using songs from GTAV radio stations, or dynamically control the intensity of the game’s score. Completed videos can be uploaded directly from the Rockstar Editor to YouTube and the Rockstar Games Social Club for easy sharing.<br><br>

            Soundtrack artists The Alchemist and Oh No return as hosts of the new radio station, The Lab FM. The station features new and exclusive music from the production duo based on and inspired by the game’s original soundtrack. Collaborating guest artists include Earl Sweatshirt, Freddie Gibbs, Little Dragon, Killer Mike, Sam Herring from Future Islands, and more. Players can also discover Los Santos and Blaine County while enjoying their own music through Self Radio, a new radio station that will host player-created custom soundtracks.<br>',
            'Welcome to a new world! Take on the role of a hunter and slay ferocious monsters in a living, breathing ecosystem where you can use the landscape and its diverse inhabitants to get the upper hand. Hunt alone or in co-op with up to three other players, and use materials collected from fallen foes to craft new gear and take on even bigger, badder beasts!<br><br>
            INTRODUCTION<br>
            Overview<br>
            Battle gigantic monsters in epic locales.<br><br>

            As a hunter, you\'ll take on quests to hunt monsters in a variety of habitats.<br>
            Take down these monsters and receive materials that you can use to create stronger weapons and armor in order to hunt even more dangerous monsters.<br><br>

            In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.<br><br>


            Setting<br>
            Once every decade, elder dragons trek across the sea to travel to the land known as the New World in a migration referred to as the Elder Crossing.<br><br>

            To get to the bottom of this mysterious phenomenon, the Guild has formed the Research Commission, dispatching them in large fleets to the New World.<br><br>

            As the Commission sends its Fifth Fleet in pursuit of the colossal elder dragon, Zorah Magdaros, one hunter is about to embark on a journey grander than anything they could have ever imagined.<br><br>

            ECOSYSTEM<br>
            A World That Breathes Life<br>
            There are various locations teeming with wildlife. Expeditions into these locales are bound to turn up interesting discoveries.<br>
            HUNTING<br>
            A Diverse Arsenal, and an Indispensable Partner<br>
            Your equipment will give you the power to need to carve out a place for yourself in the New World.<br><br>

            The Hunter\'s Arsenal<br>
            There are fourteen different weapons at the hunter\'s disposal, each with its own unique characteristics and attacks. Many hunters acquire proficiency in multiple types, while others prefer to attain mastery of one.<br><br>


            Scoutflies<br>
            Monster tracks, such as footprints and gashes, dot each locale. Your Scoutflies will remember the scent of a monster and guide you to other nearby tracks. And as you gather more tracks, the Scoutflies will give you even more information.<br><br>


            Slinger<br>
            The Slinger is an indispensable tool for a hunter, allowing you to arm yourself with stones and nuts that can be gathered from each locale.<br>
            From diversion tactics to creating shortcuts, the Slinger has a variety of uses, and allows you to hunt in new and interesting ways.<br><br>


            Specialized Tools<br>
            Specialized tools activate powerful effects for a limited amount of time, and up to two can be equipped at a time. Simple to use, they can be selected and activated just like any other item you take out on a hunt.<br><br>


            Palicoes<br>
            Palicoes are hunters\' reliable comrades out in the field, specialized in a variety of offensive, defensive, and restorative support abilities.<br>
            The hunter\'s Palico joins the Fifth Fleet with pride, as much a bona fide member of the Commission as any other hunter.<br>',
            'Be the leader of red and blue wobblers from ancient lands, spooky places, and fantasy worlds. Watch them fight in simulations made with the wobbliest physics system ever created.<br><br>

            When you grow tired of the 100+ wobblers at your disposal you can make new ones in the unit creator.<br><br>

            You can also send wobblers to fight your friends or strangers in online multiplayer!<br><br>


            Features:<br>
            Campaigns<br>
            Multiplayer<br>
            Workshop<br>
            Unit and faction Creator<br>
            Campaign and battle creator<br>
            Sandbox mode<br>
            Unit Possession<br>
            A bunch of silly units<br><br>


            Custom content and workshop:<br>
            Unit and faction Creator<br>
            Campaign and battle creator<br>
            In-game workshop<br>',
            'Surprise, delight and thrill crowds as you build the theme park of your dreams. Build and design incredible coaster parks with unparalleled attention to detail and manage your park in a truly living world.<br><br>



            Piece-by-Piece Construction: Planet Coaster makes a designer out of everyone. Lay paths, build scenery, customize rides and make everything in your park unique with piece-by-piece construction and over a thousand unique building components.<br><br>

            Landscape Sculpting: Play with nature and reshape the land beneath your feet. Sculpt the landscape to raise mountains, form lakes, dig caverns and even build islands in the sky, then weave coasters through your park above ground and below.<br><br>

            Total Authenticity: Recreate your favorite rides or leave the real world at the door. However you love to play, the most realistic rides and most realistic reactions from your guests make Planet Coaster the most authentic simulation ever.<br><br>




            Simulation Evolved: The deepest park simulation in gaming history rewards your skills and makes management fun. Control every aspect of your guests’ experience and watch as Planet Coaster’s world reacts to your choices in an instant.<br><br>

            A Living World: Every park guest is an expressive individual who thinks, feels and explores your park with their own interests and desires. Together Planet Coaster’s guests will tell you at a glance just how well your park is run.<br><br>

            Park Management: You’re the boss with accessible controls that make management fun. Test your skills in a campaign of creative scenarios, or just build for fun and tweak your parks to surprise, delight and thrill your guests.<br><br>



            Communal Creation: Planet Coaster links coaster fanatics and creators around the world with the Steam Workshop community hub. Trade scenery, rollercoasters and even entire parks with other players, and add the world’s wildest creations to your own park.<br><br>

            Be Inspired: Discover new content from the world’s best coaster park creators every day. Browse and download content from your favorite creators, or choose from the latest designs selected by the Planet Coaster dev team.<br><br>

            Share Your Creativity: Whether it’s a magnificent ice cream shop or the world’s most thrilling coaster, build it, name it and share it with the planet. Join a community of creators and see your designs appear in parks around the world.<br>',
            'Your team of prisoners is dropped into the Rundown when a new Work Order is issued by the Warden, the mysterious entity holding you captive. The Rundown is a series of expeditions, each one taking you deeper into a decayed research facility called the Complex. You descend level by level, scavenging tools and resources that help you survive in a perilous network of tunnels where gruesome creatures lurk in every shadow. Complete all of the expeditions to fulfill the Work Order and clear the Rundown.<br><br>


            Be warned, GTFO isn’t your typical run and gun shooter. It’s for players that value a serious challenge.<br>
            A 4-player cooperative experience<br>
            GTFO is designed for prisoner teams of four, putting cooperation at the core of the experience. Bots can fill your lineup if you’re short one or two players. They’ll follow you through expeditions, sneak when you sneak, collect resources, and fight alongside you. They\'re a good fallback, but the level of communication and tactical combat in GTFO means it\'s best to play with people.<br>
            Prepare, Explore, Survive<br>
            A strategy is necessary to clear the Rundown. Before you drop into the Complex, your team needs to decide what gear, boosters, and weapons to bring. You must also balance the team, identifying the function of each prisoner so that you know what to do when things go wrong. And they will. They always do.<br>
            Don’t wake them up<br>
            Stealth and coordination are necessary to survive as you maneuver through the Complex. Many of the creatures of GTFO are suspended in a state of hibernation, so light, noise, and vibrations can easily wake up these Sleepers. And if one of them knows you’re there, they all know. That’s when things get messy.<br>
            New mission, new Rundown<br>
            When the Warden issues a Work Order, a new Rundown is released and the existing Rundown is deleted forever. New Rundowns will drop periodically over the lifetime of the game, bringing your team grisly new ways to suffer.<br>
            Will you work together or die together?<br>',
            'Conquer with character in Apex Legends, a free-to-play Hero shooter where legendary characters with powerful abilities team up to battle for fame & fortune on the fringes of the Frontier.<br><br>

            Master an ever-growing roster of diverse Legends, deep tactical squad play and bold new innovations that go beyond the Battle Royale experience—all within a rugged world where anything goes. Welcome to the next evolution of Hero Shooter.<br>
            KEY FEATURES<br>
            A Roster of Legendary Characters -Master a growing roster of powerful Legends, each with their own unique personality, strengths and abilities that are easy to pick up but challenging to truly master.<br>
            Build Your Crew -Choose your Legend and combine their unique skills together with other players to form the ultimate crew.<br>
            Strategic Squad Play- Whether you\'re battling on a massive floating city in Battle Royale or dueling in close-quarters Arenas, you\'ll need to think fast. Master your Legend\'s unique abilities and coordinate with your teammates to discover new tactics and powerful combinations.<br>
            Innovative Combat - Master an expanding assortment of powerful weapons and equipment. You\'ll need to move fast and learn the rhythms of each weapon to get the most of your arsenal. Plus change it up in limited-time modes, and get ready for a boatload of new content each season.<br>
            Ever-Expanding Universe - Apex Legends takes place in an immersive universe where the story continues to evolve, maps change each season, and new Legends keep joining the fight. Make your mark on the Apex Games with a multitude of distinctive outfits and join the adventure!<br>',
            'Dig, Fight, Explore, Build: The very world is at your fingertips as you fight for survival, fortune, and glory. Will you delve deep into cavernous expanses in search of treasure and raw materials with which to craft ever-evolving gear, machinery, and aesthetics? Perhaps you will choose instead to seek out ever-greater foes to test your mettle in combat? Maybe you will decide to construct your own city to house the host of mysterious allies you may encounter along your travels?<br><br>

            In the World of Terraria, the choice is yours!<br><br>

            Blending elements of classic action games with the freedom of sandbox-style creativity, Terraria is a unique gaming experience where both the journey and the destination are completely in the player’s control. The Terraria adventure is truly as unique as the players themselves!<br><br>

            Are you up for the monumental task of exploring, creating, and defending a world of your own?<br><br>

            Key features:<br>
            Sandbox Play<br>
            Randomly generated worlds<br>
            Free Content Updates<br>',
            'Discover the epic conclusion of the Mishima clan and unravel the reasons behind each step of their ceaseless fight. Powered by Unreal Engine 4, TEKKEN 7 features stunning story-driven cinematic battles and intense duels that can be enjoyed with friends and rivals alike through innovative fight mechanics.<br><br>

            Love, Revenge, Pride. Everyone has a reason to fight. Values are what define us and make us human, regardless of our strengths and weaknesses. There are no wrong motivations, just the path we choose to take.<br><br>

            Expand your fighter\'s journey by purchasing the Tekken 7 Season Pass separately and gain access to stunning additional content.<br>',
            'Valheim is a brutal exploration and survival game for 1-10 players set in a procedurally-generated world inspired by Norse mythology. Craft powerful weapons, construct longhouses, and slay mighty foes to prove yourself to Odin!<br><br>


            EXPLORE THE TENTH WORLD<br>
            Explore a world shrouded in mystery. Discover distinct environments with unique enemies to battle, resources to gather and secrets to uncover! Be a viking, sail the open seas in search of lands unknown, and fight bloodthirsty monsters.<br><br>


            BUILD MIGHTY HALLS<br>
            Raise viking longhouses and build bases that offer reprieve from the dangers ahead. Customise buildings, both inside and out, with a detailed building system. Progress through building tiers to upgrade, expand and defend your base.<br><br>


            GATHER, CRAFT AND SURVIVE<br>
            Struggle to survive as you gather materials and craft weapons, armor, tools, ships, and defenses. Decorate your hearths and sharpen your blades, grow crops and vegetables, prepare food, brew meads and potions, and progress as you defeat more difficult bosses and discover new recipes and blueprints.<br><br>

            KEY FEATURES:<br>
            Massive procedurally-generated world where every biome is immersive and distinct, with unique enemies, resources and crafting recipes to discover.<br>
            Play alone or with up to 10 players on player-hosted dedicated servers and experience unlimited world creation and enemies that scale in difficulty.<br>
            Staminabased combat that rewards preparation and skill. Utilize weapon types with unique attacks, different blocking styles, ranged combat, dodges and parries to fight your enemies.<br>
            Rewarding food system where you cannot starve and are not punished for not eating, instead you gain health, stamina and regeneration buffs depending on what foods you consume.<br>
            Intuitive crafting where recipes are discovered as you explore the world, and pick up new resources and ingredients.<br>
            Flexible building system that takes structural integrity and ventilation into account. Build a small shelter or an entire village, make outposts or claim abandoned buildings as your own. Then customize to your liking.<br>
            Sail boats and ships to reach distant lands and explore the sea that offers riches to claim and monsters to fight.<br>
            Epic boss fights that will test even the best prepared vikings and offer rewards that help you on your journey.<br><br>

            Community-translated languages:<br>
            In addition to the officially supported languages, Valheim has several community-translated languages. As the name would suggest these are all translated by fans and members of the community, and is an ongoing process. We can\'t guarantee the quality nor completeness of any specific translation effort.<br>',
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
            'SCS Software',
            'Hazelight',
            'Playground Games',
            'Rockstar North',
            'CAPCOM Co., Ltd.',
            'Landfall',
            'Frontier Developments, Aspyr (Mac)',
            '10 Chambers',
            'Respawn Entertainment',
            'Re-Logic',
            'BANDAI NAMCO Studios Inc.',
            'Iron Gate AB',
        ];

        $gamesPublisher = [
            'SCS Software',
            'Electronic Arts',
            'Xbox Game Studios',
            'Rockstar Games',
            'CAPCOM Co., Ltd.',
            'Landfall',
            'Frontier Developments, Aspyr (Mac)',
            '10 Chambers',
            'Electronic Arts',
            'Re-Logic',
            'BANDAI NAMCO Entertainment',
            'Coffee Stain Publishing',
        ];

        $gamesPrice = [
            '169999',
            '479000',
            '249999',
            '290000',
            '334999',
            '108999',
            '582095',
            '487000',
            '0',
            '89999',
            '420000',
            '108999',
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

        for ($i = 0; $i < count($gamesTitle); $i++) {
            $genre = Genre::where('name', $gamesGenre[$i])->first();

            $g = new Game();
            $g->genre_id = $genre ? $genre->id : null;
            $g->title = $gamesTitle[$i];
            $g->slug = Str::slug($gamesTitle[$i], '-');
            $g->image_url = $gamesImageUrl[$i];
            $g->trailer_video_url = $gamesTrailerVideoUrl[$i];
            $g->description = $gamesDescription[$i];
            $g->long_description = $gamesLongDescription[$i];
            $g->release_date = $gamesReleaseDate[$i];
            $g->developer = $gamesDeveloper[$i];
            $g->publisher = $gamesPublisher[$i];
            $g->price = $gamesPrice[$i];
            $g->is_adult_content = $gamesIsAdultContent[$i];
            $g->save();
        }
    }
}
