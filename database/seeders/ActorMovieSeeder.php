<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Actor;

class ActorMovieSeeder extends Seeder
{
    public function run(): void
    {
        // Fetch Movies
        $Absolution = DB::table('movie')->where('title', 'Absolution')->first();
        $Days365ThisDay = DB::table('movie')->where('title', '365 Days: This Day')->first();
        $Aftermath = DB::table('movie')->where('title', 'Aftermath')->first();
        $Alarum = DB::table('movie')->where('title', 'Alarum')->first();
        $Anora = DB::table('movie')->where('title', 'Anora')->first();
        $Armor = DB::table('movie')->where('title', 'Armor')->first();
        $AvengersEndgame = DB::table('movie')->where('title', 'Avengers: Endgame')->first();
        $AvengersInfinityWar = DB::table('movie')->where('title', 'Avengers: Infinity War')->first();
        $BadBoysRideOrDie = DB::table('movie')->where('title', 'Bad Boys: Ride or Die')->first();
        $CaptainAmericaBraveNewWorld = DB::table('movie')->where('title', 'Captain America: Brave New World')->first();
        $Companion = DB::table('movie')->where('title', 'Companion')->first();
        $CreationOfTheGodsIIDemonForce = DB::table('movie')->where('title', 'Creation of the Gods II: Demon Force')->first();
        $DeadpoolWolverine = DB::table('movie')->where('title', 'Deadpool & Wolverine')->first();
        $Elevation = DB::table('movie')->where('title', 'Elevation')->first();
        $FastX = DB::table('movie')->where('title', 'Fast X')->first();
        $GladiatorII = DB::table('movie')->where('title', 'Gladiator II')->first();
        $GodzillaXKongTheNewEmpire = DB::table('movie')->where('title', 'Godzilla x Kong: The New Empire')->first();
        $HarryPotterAndThePhilosophersStone = DB::table('movie')->where('title', 'Harry Potter and the Philosopher\'s Stone')->first();
        $JurassicWorldDominion = DB::table('movie')->where('title', 'Jurassic World Dominion')->first();
        $JurassicWorldRebirth = DB::table('movie')->where('title', 'Jurassic World Rebirth')->first();
        $KungFuPanda4 = DB::table('movie')->where('title', 'Kung Fu Panda 4')->first();
        $MyFault = DB::table('movie')->where('title', 'My Fault')->first();
        $Number24 = DB::table('movie')->where('title', 'Number 24')->first();
        $RaidersOfTheLostArk = DB::table('movie')->where('title', 'Raiders of the Lost Ark')->first();
        $RedOne = DB::table('movie')->where('title', 'Red One')->first();
        $SaturdayNightsMainEventXXXVII = DB::table('movie')->where('title', 'Saturday Night\'s Main Event XXXVII')->first();
        $SexGame6969 = DB::table('movie')->where('title', 'Sex Game 6969')->first();
        $SoloLevelingReAwakening = DB::table('movie')->where('title', 'Solo Leveling -ReAwakening-')->first();
        $SonicTheHedgehog2 = DB::table('movie')->where('title', 'Sonic the Hedgehog 2')->first();
        $SonicTheHedgehog3 = DB::table('movie')->where('title', 'Sonic the Hedgehog 3')->first();
        $SpiderManNoWayHome = DB::table('movie')->where('title', 'Spider-Man: No Way Home')->first();
        $TheShawshankRedemption = DB::table('movie')->where('title', 'The Shawshank Redemption')->first();
        $TheWildRobot = DB::table('movie')->where('title', 'The Wild Robot')->first();
        $Wicked = DB::table('movie')->where('title', 'Wicked')->first();
        $YourFault = DB::table('movie')->where('title', 'Your Fault')->first();
        $YoureCordiallyInvited = DB::table('movie')->where('title', 'You\'re Cordially Invited')->first();
        $Arcadian = DB::table('movie')->where('title', 'Arcadian')->first();
        $AskMeWhatYouWant = DB::table('movie')->where('title', 'Ask Me What You Want')->first();
        $Azrael = DB::table('movie')->where('title', 'Azrael')->first();
        $Babygirl = DB::table('movie')->where('title', 'Babygirl')->first();
        $BackInAction = DB::table('movie')->where('title', 'Back in Action')->first();
        $Belyas = DB::table('movie')->where('title', 'Belyas')->first();
        $CarryOn = DB::table('movie')->where('title', 'Carry-On')->first();
        $Conclave = DB::table('movie')->where('title', 'Conclave')->first();
        $DelinquentInDrag = DB::table('movie')->where('title', 'Delinquent in Drag')->first();
        $DespicableMe4 = DB::table('movie')->where('title', 'Despicable Me 4')->first();
        $DirtyAngels = DB::table('movie')->where('title', 'Dirty Angels')->first();
        $DogMan = DB::table('movie')->where('title', 'Dog Man')->first();
        $EyeForAnEye2 = DB::table('movie')->where('title', 'Eye for an Eye 2')->first();
        $Ferry2 = DB::table('movie')->where('title', 'Ferry 2')->first();
        $FlightRisk = DB::table('movie')->where('title', 'Flight Risk')->first();
        $Heretic = DB::table('movie')->where('title', 'Heretic')->first();
        $InsideOut2 = DB::table('movie')->where('title', 'Inside Out 2')->first();
        $Interstellar = DB::table('movie')->where('title', 'Interstellar')->first();
        $KingdomOfThePlanetOfTheApes = DB::table('movie')->where('title', 'Kingdom of the Planet of the Apes')->first();
        $KravenTheHunter = DB::table('movie')->where('title', 'Kraven the Hunter')->first();
        $Lembayung = DB::table('movie')->where('title', 'Lembayung')->first();
        $MemoirOfASnail = DB::table('movie')->where('title', 'Memoir of a Snail')->first();
        $PandaPlan = DB::table('movie')->where('title', 'Panda Plan')->first();
        $Pleasure = DB::table('movie')->where('title', 'Pleasure')->first();
        $Rita = DB::table('movie')->where('title', 'Rita')->first();
        $RiverOfBlood = DB::table('movie')->where('title', 'River of Blood')->first();
        $SidelinedTheQBAndMe = DB::table('movie')->where('title', 'Sidelined: The QB and Me')->first();
        $SkinLikeSun = DB::table('movie')->where('title', 'Skin. Like. Sun.')->first();
        $Smile2 = DB::table('movie')->where('title', 'Smile 2')->first();
        $Terrifier3 = DB::table('movie')->where('title', 'Terrifier 3')->first();
        $TheBalladOfDavyCrockett = DB::table('movie')->where('title', 'The Ballad of Davy Crockett')->first();
        $TheChroniclesOfNarniaTheLionTheWitchAndTheWardrobe = DB::table('movie')->where('title', 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe')->first();
        $ThePriceOfMoneyALargoWinchAdventure = DB::table('movie')->where('title', 'The Price of Money: A Largo Winch Adventure')->first();
        $TheSubstance = DB::table('movie')->where('title', 'The Substance')->first();
        $TransformersOne = DB::table('movie')->where('title', 'Transformers One')->first();
        $VenomTheLastDance = DB::table('movie')->where('title', 'Venom: The Last Dance')->first();
        $WallaceGromitVengeanceMostFowl = DB::table('movie')->where('title', 'Wallace & Gromit: Vengeance Most Fowl')->first();
        $Werewolves = DB::table('movie')->where('title', 'Werewolves')->first();
        $WolfMan = DB::table('movie')->where('title', 'Wolf Man')->first();
        $xXx = DB::table('movie')->where('title', 'xXx')->first();

        // Fetch Actors
        $Liam_Neeson= DB::table('actor')->where('name', 'Liam Neeson')->first();
        $Anna_Maria_Sieklucka= DB::table('actor')->where('name', 'Anna-Maria Sieklucka')->first();
        $Dylan_Sprouse= DB::table('actor')->where('name', 'Dylan Sprouse')->first();
        $Scott_Eastwood= DB::table('actor')->where('name', 'Scott Eastwood')->first();
        $Mikey_Madison= DB::table('actor')->where('name', 'Mikey Madison')->first();
        $Jason_Patric= DB::table('actor')->where('name', 'Jason Patric')->first();
        $Robert_Downey_Jr= DB::table('actor')->where('name', 'Robert Downey Jr.')->first();
        $Will_Smith= DB::table('actor')->where('name', 'Will Smith')->first();
        $Anthony_Mackie= DB::table('actor')->where('name', 'Anthony Mackie')->first();
        $Sophie_Thatcher= DB::table('actor')->where('name', 'Sophie Thatcher')->first();
        $Huang_Bo= DB::table('actor')->where('name', 'Huang Bo')->first();
        $Ryan_Reynolds= DB::table('actor')->where('name', 'Ryan Reynolds')->first();
        $Vin_Diesel= DB::table('actor')->where('name', 'Vin Diesel')->first();
        $Paul_Mescal= DB::table('actor')->where('name', 'Paul Mescal')->first();
        $Rebecca_Hall= DB::table('actor')->where('name', 'Rebecca Hall')->first();
        $Daniel_Radcliffe= DB::table('actor')->where('name', 'Daniel Radcliffe')->first();
        $Chris_Pratt= DB::table('actor')->where('name', 'Chris Pratt')->first();
        $Scarlett_Johansson= DB::table('actor')->where('name', 'Scarlett Johansson')->first();
        $Jack_Black= DB::table('actor')->where('name', 'Jack Black')->first();
        $Nicole_Wallace= DB::table('actor')->where('name', 'Nicole Wallace')->first();
        $Sjur_Vatne_Brean= DB::table('actor')->where('name', 'Sjur Vatne Brean')->first();
        $Harrison_Ford= DB::table('actor')->where('name', 'Harrison Ford')->first();
        $Dwayne_Johnson= DB::table('actor')->where('name', 'Dwayne Johnson')->first();
        $Cody_Rhodes= DB::table('actor')->where('name', 'Cody Rhodes')->first();
        $Woo_Yeol= DB::table('actor')->where('name', 'Woo Yeol')->first();
        $Taito_Ban= DB::table('actor')->where('name', 'Taito Ban')->first();
        $Ben_Schwartz= DB::table('actor')->where('name', 'Ben Schwartz')->first();
        $Jim_Carrey= DB::table('actor')->where('name', 'Jim Carrey')->first();
        $Tom_Holland= DB::table('actor')->where('name', 'Tom Holland')->first();
        $Tim_Robbins= DB::table('actor')->where('name', 'Tim Robbins')->first();
        $Lupita_Nyong= DB::table('actor')->where('name', 'Lupita Nyong')->first();
        $Cynthia_Erivo= DB::table('actor')->where('name', 'Cynthia Erivo')->first();
        $Will_Ferrell= DB::table('actor')->where('name', 'Will Ferrell')->first();
        $Nicolas_Cage= DB::table('actor')->where('name', 'Nicolas Cage')->first();
        $Gabriela_Andrada= DB::table('actor')->where('name', 'Gabriela Andrada')->first();
        $Samara_Weaving= DB::table('actor')->where('name', 'Samara Weaving')->first();
        $Nicole_Kidman= DB::table('actor')->where('name', 'Nicole Kidman')->first();
        $Cameron_Diaz= DB::table('actor')->where('name', 'Cameron Diaz')->first();
        $Audrey_Avila= DB::table('actor')->where('name', 'Audrey Avila')->first();
        $Taron_Egerton= DB::table('actor')->where('name', 'Taron Egerton')->first();
        $Ralph_Fiennes= DB::table('actor')->where('name', 'Ralph Fiennes')->first();
        $Kappei_Yamaguchi= DB::table('actor')->where('name', 'Kappei Yamaguchi')->first();
        $Steve_Carell= DB::table('actor')->where('name', 'Steve Carell')->first();
        $Eva_Green= DB::table('actor')->where('name', 'Eva Green')->first();
        $Peter_Hastings= DB::table('actor')->where('name', 'Peter Hastings')->first();
        $Xie_Miao= DB::table('actor')->where('name', 'Xie Miao')->first();
        $Frank_Lammers= DB::table('actor')->where('name', 'Frank Lammers')->first();
        $Michelle_Dockery= DB::table('actor')->where('name', 'Michelle Dockery')->first();
        $Hugh_Grant= DB::table('actor')->where('name', 'Hugh Grant')->first();
        $Amy_Poehler= DB::table('actor')->where('name', 'Amy Poehler')->first();
        $Matthew_McConaughey= DB::table('actor')->where('name', 'Matthew McConaughey')->first();
        $Owen_Teague= DB::table('actor')->where('name', 'Owen Teague')->first();
        $Aaron_Taylor_Johnson= DB::table('actor')->where('name', 'Aaron Taylor-Johnson')->first();
        $Taskya_Namya= DB::table('actor')->where('name', 'Taskya Namya')->first();
        $Sarah_Snook= DB::table('actor')->where('name', 'Sarah Snook')->first();
        $Jackie_Chan= DB::table('actor')->where('name', 'Jackie Chan')->first();
        $Sofia_Kappel= DB::table('actor')->where('name', 'Sofia Kappel')->first();
        $Christine_Bermas= DB::table('actor')->where('name', 'Christine Bermas')->first();
        $Joseph_Millson= DB::table('actor')->where('name', 'Joseph Millson')->first();
        $Siena_Agudong= DB::table('actor')->where('name', 'Siena Agudong')->first();
        $Wim_van_Damme= DB::table('actor')->where('name', 'Wim van Damme')->first();
        $Naomi_Scott= DB::table('actor')->where('name', 'Naomi Scott')->first();
        $Lauren_LaVera= DB::table('actor')->where('name', 'Lauren LaVera')->first();
        $William_Moseley= DB::table('actor')->where('name', 'William Moseley')->first();
        $Tomer_Sisley= DB::table('actor')->where('name', 'Tomer Sisley')->first();
        $Demi_Moore= DB::table('actor')->where('name', 'Demi Moore')->first();
        $Chris_Hemsworth= DB::table('actor')->where('name', 'Chris Hemsworth')->first();
        $Tom_Hardy= DB::table('actor')->where('name', 'Tom Hardy')->first();
        $Ben_Whitehead= DB::table('actor')->where('name', 'Ben Whitehead')->first();
        $Frank_Grillo= DB::table('actor')->where('name', 'Frank Grillo')->first();
        $Christopher_Abbott= DB::table('actor')->where('name', 'Christopher Abbott')->first();
        $Ron_Perlman = DB::table('actor')->where('name', 'Ron Perlman')->first();
        $Michele_Morrone= DB::table('actor')->where('name', 'Michele Morrone')->first();
        $Mason_Gooding= DB::table('actor')->where('name', 'Mason Gooding')->first();
        $Sylvester_Stallone= DB::table('actor')->where('name', 'Sylvester Stallone')->first();
        $Mark_Eydelshteyn= DB::table('actor')->where('name', 'Mark Eydelshteyn')->first();
        $Chris_Evans= DB::table('actor')->where('name', 'Chris Evans')->first();
        $Martin_Lawrence= DB::table('actor')->where('name', 'Martin Lawrence')->first();
        $Danny_Ramirez= DB::table('actor')->where('name', 'Danny Ramirez')->first();
        $Jack_Quaid= DB::table('actor')->where('name', 'Jack Quaid')->first();
        $Yu_Shi= DB::table('actor')->where('name', 'Yu Shi')->first();
        $Hugh_Jackman= DB::table('actor')->where('name', 'Hugh Jackman')->first();
        $Morena_Baccarin= DB::table('actor')->where('name', 'Morena Baccarin')->first();
        $Michelle_Rodriguez= DB::table('actor')->where('name', 'Michelle Rodriguez')->first();
        $Denzel_Washington= DB::table('actor')->where('name', 'Denzel Washington')->first();
        $Brian_Tyree_Henry= DB::table('actor')->where('name', 'Brian Tyree Henry')->first();
        $Rupert_Grint= DB::table('actor')->where('name', 'Rupert Grint')->first();
        $Bryce_Dallas_Howard= DB::table('actor')->where('name', 'Bryce Dallas Howard')->first();
        $Jonathan_Bailey= DB::table('actor')->where('name', 'Jonathan Bailey')->first();
        $Awkwafina= DB::table('actor')->where('name', 'Awkwafina')->first();
        $Gabriel_Guevara= DB::table('actor')->where('name', 'Gabriel Guevara')->first();
        $Erik_Hivju= DB::table('actor')->where('name', 'Erik Hivju')->first();
        $Karen_Allen= DB::table('actor')->where('name', 'Karen Allen')->first();
        $Kevin_Steen= DB::table('actor')->where('name', 'Kevin Steen')->first();
        $So_Jeong= DB::table('actor')->where('name', 'So Jeong')->first();
        $Genta_Nakamura= DB::table('actor')->where('name', 'Genta Nakamura')->first();
        $James_Marsden= DB::table('actor')->where('name', 'James Marsden')->first();
        $Ben_Schwartz= DB::table('actor')->where('name', 'Ben Schwartz')->first();
        $Zendaya= DB::table('actor')->where('name', 'Zendaya')->first();
        $Morgan_Freeman= DB::table('actor')->where('name', 'Morgan Freeman')->first();
        $Pedro_Pascal= DB::table('actor')->where('name', 'Pedro Pascal')->first();
        $Ariana_Grande= DB::table('actor')->where('name', 'Ariana Grande')->first();
        $Reese_Witherspoon= DB::table('actor')->where('name', 'Reese Witherspoon')->first();
        $Jaeden_Martell= DB::table('actor')->where('name', 'Jaeden Martell')->first();
        $Mario_Ermito= DB::table('actor')->where('name', 'Mario Ermito')->first();
        $Vic_Carmen_Sonne= DB::table('actor')->where('name', 'Vic Carmen Sonne')->first();
        $Harris_Dickinson= DB::table('actor')->where('name', 'Harris Dickinson')->first();
        $Jamie_Foxx= DB::table('actor')->where('name', 'Jamie Foxx')->first();
        $Dani_Yoshida= DB::table('actor')->where('name', 'Dani Yoshida')->first();
        $Jason_Bateman= DB::table('actor')->where('name', 'Jason Bateman')->first();
        $Stanley_Tucci= DB::table('actor')->where('name', 'Stanley Tucci')->first();
        $Hideyuki_Tanaka= DB::table('actor')->where('name', 'Hideyuki Tanaka')->first();
        $Kristen_Wiig= DB::table('actor')->where('name', 'Kristen Wiig')->first();
        $Maria_Bakalova= DB::table('actor')->where('name', 'Maria Bakalova')->first();
        $Pete_Davidson= DB::table('actor')->where('name', 'Pete Davidson')->first();
        $Yang_Enyou= DB::table('actor')->where('name', 'Yang Enyou')->first();
        $Aiko_Beemsterboer= DB::table('actor')->where('name', 'Aiko Beemsterboer')->first();
        $Mark_Wahlberg= DB::table('actor')->where('name', 'Mark Wahlberg')->first();
        $Sophie_Thatcher= DB::table('actor')->where('name', 'Sophie Thatcher')->first();
        $Maya_Hawke= DB::table('actor')->where('name', 'Maya Hawke')->first();
        $Anne_Hathaway= DB::table('actor')->where('name', 'Anne Hathaway')->first();
        $Freya_Allan= DB::table('actor')->where('name', 'Freya Allan')->first();
        $Ariana_DeBose= DB::table('actor')->where('name', 'Ariana DeBose')->first();
        $Yasamin_Jasem= DB::table('actor')->where('name', 'Yasamin Jasem')->first();
        $Kodi_Smit_McPhee= DB::table('actor')->where('name', 'Kodi Smit-McPhee')->first();
        $Shi_Ce= DB::table('actor')->where('name', 'Shi Ce')->first();
        $Zelda_Morrison= DB::table('actor')->where('name', 'Zelda Morrison')->first();
        $Gold_Aceron= DB::table('actor')->where('name', 'Gold Aceron')->first();
        $Sarah_Alexandra_Marks= DB::table('actor')->where('name', 'Sarah Alexandra Marks')->first();
        $Noah_Beck= DB::table('actor')->where('name', 'Noah Beck')->first();
        $Floor_Wyns= DB::table('actor')->where('name', 'Floor Wyns')->first();
        $Rosemarie_DeWitt= DB::table('actor')->where('name', 'Rosemarie DeWitt')->first();
        $David_Howard_Thornton= DB::table('actor')->where('name', 'David Howard Thornton')->first();
        $Colm_Meaney= DB::table('actor')->where('name', 'Colm Meaney')->first();
        $Anna_Popplewell= DB::table('actor')->where('name', 'Anna Popplewell')->first();
        $James_Franco= DB::table('actor')->where('name', 'James Franco')->first();
        $Margaret_Qualley= DB::table('actor')->where('name', 'Margaret Qualley')->first();
        $Chiwetel_Ejiofor= DB::table('actor')->where('name', 'Chiwetel Ejiofor')->first();
        $Peter_Kay= DB::table('actor')->where('name', 'Peter Kay')->first();
        $Katrina_Law= DB::table('actor')->where('name', 'Katrina Law')->first();
        $Julia_Garner= DB::table('actor')->where('name', 'Julia Garner')->first();
        $Asia_Argento= DB::table('actor')->where('name', 'Asia Argento')->first();
        $Yolonda_Ross = DB::table('actor')->where('name', 'Yolonda Ross')->first();
        $Simone_Susinna= DB::table('actor')->where('name', 'Simone Susinna')->first();
        $Dichen_Lachman= DB::table('actor')->where('name', 'Dichen Lachman')->first();
        $Willa_Fitzgerald= DB::table('actor')->where('name', 'Willa Fitzgerald')->first();
        $Yura_Borisov= DB::table('actor')->where('name', 'Yura Borisov')->first();
        $Josh_Wiggins= DB::table('actor')->where('name', 'Josh Wiggins')->first();
        $Mark_Ruffalo= DB::table('actor')->where('name', 'Mark Ruffalo')->first();
        $Chris_Hemsworth= DB::table('actor')->where('name', 'Chris Hemsworth')->first();
        $Vanessa_Hudgens= DB::table('actor')->where('name', 'Vanessa Hudgens')->first();
        $Harrison_Ford= DB::table('actor')->where('name', 'Harrison Ford')->first();
        $Lukas_Gage= DB::table('actor')->where('name', 'Lukas Gage')->first();
        $Nashi= DB::table('actor')->where('name', 'Nashi')->first();
        $Emma_Corrin= DB::table('actor')->where('name', 'Emma Corrin')->first();
        $Maddie_Hasson= DB::table('actor')->where('name', 'Maddie Hasson')->first();
        $Tyrese_Gibson= DB::table('actor')->where('name', 'Tyrese Gibson')->first();
        $Dan_Stevens= DB::table('actor')->where('name', 'Dan Stevens')->first();
        $Emma_Watson= DB::table('actor')->where('name', 'Emma Watson')->first();
        $Laura_Dern= DB::table('actor')->where('name', 'Laura Dern')->first();
        $Mahershala_Ali= DB::table('actor')->where('name', 'Mahershala Ali')->first();
        $Viola_Davis= DB::table('actor')->where('name', 'Viola Davis')->first();
        $Marta_Hazas= DB::table('actor')->where('name', 'Marta Hazas')->first();
        $Philip_Helgar= DB::table('actor')->where('name', 'Philip Helgar')->first();
        $Paul_Freeman= DB::table('actor')->where('name', 'Paul Freeman')->first();
        $Lucy_Liu= DB::table('actor')->where('name', 'Lucy Liu')->first();
        $Chelsea_Cardona= DB::table('actor')->where('name', 'Chelsea Cardona')->first();
        $Lee_Chae_dam= DB::table('actor')->where('name', 'Lee Chae-dam')->first();
        $Haruna_Mikawa= DB::table('actor')->where('name', 'Haruna Mikawa')->first();
        $Tika_Sumpter= DB::table('actor')->where('name', 'Tika Sumpter')->first();
        $Keanu_Reeves= DB::table('actor')->where('name', 'Keanu Reeves')->first();
        $Benedict_Cumberbatch= DB::table('actor')->where('name', 'Benedict Cumberbatch')->first();
        $Bob_Gunton= DB::table('actor')->where('name', 'Bob Gunton')->first();
        $Kit_Connor= DB::table('actor')->where('name', 'Kit Connor')->first();
        $Jeff_Goldblum= DB::table('actor')->where('name', 'Jeff Goldblum')->first();
        $Geraldine_Viswanathan= DB::table('actor')->where('name', 'Geraldine Viswanathan')->first();
        $Maxwell_Jenkins= DB::table('actor')->where('name', 'Maxwell Jenkins')->first();
        $Celia_Freijeiro= DB::table('actor')->where('name', 'Celia Freijeiro')->first();
        $Katariina_Unt= DB::table('actor')->where('name', 'Katariina Unt')->first();
        $Antonio_Banderas= DB::table('actor')->where('name', 'Antonio Banderas')->first();
        $McKenna_Roberts= DB::table('actor')->where('name', 'McKenna Roberts')->first();
        $Denise_Esteban= DB::table('actor')->where('name', 'Denise Esteban')->first();
        $Sofia_Carson= DB::table('actor')->where('name', 'Sofia Carson')->first();
        $John_Lithgow= DB::table('actor')->where('name', 'John Lithgow')->first();
        $Reiko_Oimori= DB::table('actor')->where('name', 'Reiko Oimori')->first();
        $Will_Ferrell= DB::table('actor')->where('name', 'Will Ferrell')->first();
        $Ruby_Rose= DB::table('actor')->where('name', 'Ruby Rose')->first();
        $Lil_Rel_Howery= DB::table('actor')->where('name', 'Lil Rel Howery')->first();
        $Huang_Tao= DB::table('actor')->where('name', 'Huang Tao')->first();
        $Tobias_Kersloot= DB::table('actor')->where('name', 'Tobias Kersloot')->first();
        $Topher_Grace= DB::table('actor')->where('name', 'Topher Grace')->first();
        $Chloe_East= DB::table('actor')->where('name', 'Chloe East')->first();
        $Kensington_Tallman= DB::table('actor')->where('name', 'Kensington Tallman')->first();
        $Michael_Caine= DB::table('actor')->where('name', 'Michael Caine')->first();
        $Kevin_Durand= DB::table('actor')->where('name', 'Kevin Durand')->first();
        $Fred_Hechinger= DB::table('actor')->where('name', 'Fred Hechinger')->first();
        $Arya_Saloka= DB::table('actor')->where('name', 'Arya Saloka')->first();
        $Jacki_Weaver= DB::table('actor')->where('name', 'Jacki Weaver')->first();
        $Wei_Xiang= DB::table('actor')->where('name', 'Wei Xiang')->first();
        $Tee_Reel= DB::table('actor')->where('name', 'Tee Reel')->first();
        $VR_Relosa= DB::table('actor')->where('name', 'VR Relosa')->first();
        $David_Wayman= DB::table('actor')->where('name', 'David Wayman')->first();
        $Drew_Ray_Tanner= DB::table('actor')->where('name', 'Drew Ray Tanner')->first();
        $Samantha_Scaffidi= DB::table('actor')->where('name', 'Samantha Scaffidi')->first();
        $Jesse_Hutch= DB::table('actor')->where('name', 'Jesse Hutch')->first();
        $Skandar_Keynes= DB::table('actor')->where('name', 'Skandar Keynes')->first();
        $Clotilde_Hesme= DB::table('actor')->where('name', 'Clotilde Hesme')->first();
        $Dennis_Quaid= DB::table('actor')->where('name', 'Dennis Quaid')->first();
        $Scarlett_Johansson= DB::table('actor')->where('name', 'Scarlett Johansson')->first();
        $Juno_Temple= DB::table('actor')->where('name', 'Juno Temple')->first();
        $Lauren_Patel= DB::table('actor')->where('name', 'Lauren Patel')->first();
        $Ilfenesh_Hadera= DB::table('actor')->where('name', 'Ilfenesh Hadera')->first();
        $Matilda_Firth= DB::table('actor')->where('name', 'Matilda Firth')->first();
        $Marton_Csokas= DB::table('actor')->where('name', 'Marton Csokas')->first();

        // Insert Movie-Actor Relationships
        $movieActor = [
            // Absolution
            ['movie_id' => $Absolution->movie_id, 'actor_id' => $Liam_Neeson->actor_id],
            ['movie_id' => $Absolution->movie_id, 'actor_id' => $Ron_Perlman->actor_id],
            ['movie_id' => $Absolution->movie_id, 'actor_id' => $Yolonda_Ross->actor_id],

            // 365 Days: This Day
            ['movie_id' => $Days365ThisDay->movie_id, 'actor_id' => $Anna_Maria_Sieklucka->actor_id],
            ['movie_id' => $Days365ThisDay->movie_id, 'actor_id' => $Michele_Morrone->actor_id],
            ['movie_id' => $Days365ThisDay->movie_id, 'actor_id' => $Simone_Susinna->actor_id],

            // Aftermath
            ['movie_id' => $Aftermath->movie_id, 'actor_id' => $Dylan_Sprouse->actor_id],
            ['movie_id' => $Aftermath->movie_id, 'actor_id' => $Mason_Gooding->actor_id],
            ['movie_id' => $Aftermath->movie_id, 'actor_id' => $Dichen_Lachman->actor_id],

            // Alarum
            ['movie_id' => $Alarum->movie_id, 'actor_id' => $Scott_Eastwood->actor_id],
            ['movie_id' => $Alarum->movie_id, 'actor_id' => $Sylvester_Stallone->actor_id],
            ['movie_id' => $Alarum->movie_id, 'actor_id' => $Willa_Fitzgerald->actor_id],

            // Anora
            ['movie_id' => $Anora->movie_id, 'actor_id' => $Mikey_Madison->actor_id],
            ['movie_id' => $Anora->movie_id, 'actor_id' => $Mark_Eydelshteyn->actor_id],
            ['movie_id' => $Anora->movie_id, 'actor_id' => $Yura_Borisov->actor_id],

            // Armor
            ['movie_id' => $Armor->movie_id, 'actor_id' => $Jason_Patric->actor_id],
            ['movie_id' => $Armor->movie_id, 'actor_id' => $Sylvester_Stallone->actor_id],
            ['movie_id' => $Armor->movie_id, 'actor_id' => $Josh_Wiggins->actor_id],

            // Avengers: Endgame
            ['movie_id' => $AvengersEndgame->movie_id, 'actor_id' => $Robert_Downey_Jr->actor_id],
            ['movie_id' => $AvengersEndgame->movie_id, 'actor_id' => $Chris_Evans->actor_id],
            ['movie_id' => $AvengersEndgame->movie_id, 'actor_id' => $Mark_Ruffalo->actor_id],

            // Avengers: Infinity War
            ['movie_id' => $AvengersInfinityWar->movie_id, 'actor_id' => $Robert_Downey_Jr->actor_id],
            ['movie_id' => $AvengersInfinityWar->movie_id, 'actor_id' => $Chris_Evans->actor_id],
            ['movie_id' => $AvengersInfinityWar->movie_id, 'actor_id' => $Chris_Evans->actor_id],

            // Bad Boys: Ride or Die
            ['movie_id' => $BadBoysRideOrDie->movie_id, 'actor_id' => $Will_Smith->actor_id],
            ['movie_id' => $BadBoysRideOrDie->movie_id, 'actor_id' => $Martin_Lawrence->actor_id],
            ['movie_id' => $BadBoysRideOrDie->movie_id, 'actor_id' => $Vanessa_Hudgens->actor_id],

            // Captain America: Brave New World
            ['movie_id' => $CaptainAmericaBraveNewWorld->movie_id, 'actor_id' => $Anthony_Mackie->actor_id],
            ['movie_id' => $CaptainAmericaBraveNewWorld->movie_id, 'actor_id' => $Danny_Ramirez->actor_id],
            ['movie_id' => $CaptainAmericaBraveNewWorld->movie_id, 'actor_id' => $Harrison_Ford->actor_id],

            // Companion
            ['movie_id' => $Companion->movie_id, 'actor_id' => $Sophie_Thatcher->actor_id],
            ['movie_id' => $Companion->movie_id, 'actor_id' => $Jack_Quaid->actor_id],
            ['movie_id' => $Companion->movie_id, 'actor_id' => $Lukas_Gage->actor_id],

            // Creation of the Gods II: Demon Force
            ['movie_id' => $CreationOfTheGodsIIDemonForce->movie_id, 'actor_id' => $Huang_Bo->actor_id],
            ['movie_id' => $CreationOfTheGodsIIDemonForce->movie_id, 'actor_id' => $Yu_Shi->actor_id],
            ['movie_id' => $CreationOfTheGodsIIDemonForce->movie_id, 'actor_id' => $Nashi->actor_id],

            // Deadpool & Wolverine
            ['movie_id' => $DeadpoolWolverine->movie_id, 'actor_id' => $Ryan_Reynolds->actor_id],
            ['movie_id' => $DeadpoolWolverine->movie_id, 'actor_id' => $Hugh_Jackman->actor_id],
            ['movie_id' => $DeadpoolWolverine->movie_id, 'actor_id' => $Emma_Corrin->actor_id],

            // Elevation
            ['movie_id' => $Elevation->movie_id, 'actor_id' => $Anthony_Mackie->actor_id],
            ['movie_id' => $Elevation->movie_id, 'actor_id' => $Morena_Baccarin->actor_id],
            ['movie_id' => $Elevation->movie_id, 'actor_id' => $Maddie_Hasson->actor_id],

            // Fast X
            ['movie_id' => $FastX->movie_id, 'actor_id' => $Vin_Diesel->actor_id],
            ['movie_id' => $FastX->movie_id, 'actor_id' => $Michelle_Rodriguez->actor_id],
            ['movie_id' => $FastX->movie_id, 'actor_id' => $Tyrese_Gibson->actor_id],

            // Gladiator II
            ['movie_id' => $GladiatorII->movie_id, 'actor_id' => $Paul_Mescal->actor_id],
            ['movie_id' => $GladiatorII->movie_id, 'actor_id' => $Denzel_Washington->actor_id],
            ['movie_id' => $GladiatorII->movie_id, 'actor_id' => $Pedro_Pascal->actor_id],

            // Godzilla x Kong: The New Empire
            ['movie_id' => $GodzillaXKongTheNewEmpire->movie_id, 'actor_id' => $Rebecca_Hall->actor_id],
            ['movie_id' => $GodzillaXKongTheNewEmpire->movie_id, 'actor_id' => $Brian_Tyree_Henry->actor_id],
            ['movie_id' => $GodzillaXKongTheNewEmpire->movie_id, 'actor_id' => $Dan_Stevens->actor_id],

            // Harry Potter and the Philosopher's Stone
            ['movie_id' => $HarryPotterAndThePhilosophersStone->movie_id, 'actor_id' => $Daniel_Radcliffe->actor_id],
            ['movie_id' => $HarryPotterAndThePhilosophersStone->movie_id, 'actor_id' => $Rupert_Grint->actor_id],
            ['movie_id' => $HarryPotterAndThePhilosophersStone->movie_id, 'actor_id' => $Emma_Watson->actor_id],

            // Jurassic World Dominion
            ['movie_id' => $JurassicWorldDominion->movie_id, 'actor_id' => $Chris_Pratt->actor_id],
            ['movie_id' => $JurassicWorldDominion->movie_id, 'actor_id' => $Bryce_Dallas_Howard->actor_id],
            ['movie_id' => $JurassicWorldDominion->movie_id, 'actor_id' => $Laura_Dern->actor_id],

            // Jurassic World Rebirth
            ['movie_id' => $JurassicWorldRebirth->movie_id, 'actor_id' => $Scarlett_Johansson->actor_id],
            ['movie_id' => $JurassicWorldRebirth->movie_id, 'actor_id' => $Jonathan_Bailey->actor_id],
            ['movie_id' => $JurassicWorldRebirth->movie_id, 'actor_id' => $Mahershala_Ali->actor_id],

            // Kung Fu Panda 4
            ['movie_id' => $KungFuPanda4->movie_id, 'actor_id' => $Jack_Black->actor_id],
            ['movie_id' => $KungFuPanda4->movie_id, 'actor_id' => $Awkwafina->actor_id],
            ['movie_id' => $KungFuPanda4->movie_id, 'actor_id' => $Viola_Davis->actor_id],

            // My Fault
            ['movie_id' => $MyFault->movie_id, 'actor_id' => $Nicole_Wallace->actor_id],
            ['movie_id' => $MyFault->movie_id, 'actor_id' => $Gabriel_Guevara->actor_id],
            ['movie_id' => $MyFault->movie_id, 'actor_id' => $Marta_Hazas->actor_id],

            // Number 24
            ['movie_id' => $Number24->movie_id, 'actor_id' => $Sjur_Vatne_Brean->actor_id],
            ['movie_id' => $Number24->movie_id, 'actor_id' => $Erik_Hivju->actor_id],
            ['movie_id' => $Number24->movie_id, 'actor_id' => $Philip_Helgar->actor_id],

            // Raiders of the Lost Ark
            ['movie_id' => $RaidersOfTheLostArk->movie_id, 'actor_id' => $Harrison_Ford->actor_id],
            ['movie_id' => $RaidersOfTheLostArk->movie_id, 'actor_id' => $Karen_Allen->actor_id],
            ['movie_id' => $RaidersOfTheLostArk->movie_id, 'actor_id' => $Paul_Freeman->actor_id],

            // Red One
            ['movie_id' => $RedOne->movie_id, 'actor_id' => $Dwayne_Johnson->actor_id],
            ['movie_id' => $RedOne->movie_id, 'actor_id' => $Chris_Evans->actor_id],
            ['movie_id' => $RedOne->movie_id, 'actor_id' => $Lucy_Liu->actor_id],

            // Saturday Night's Main Event XXXVII
            ['movie_id' => $SaturdayNightsMainEventXXXVII->movie_id, 'actor_id' => $Cody_Rhodes->actor_id],
            ['movie_id' => $SaturdayNightsMainEventXXXVII->movie_id, 'actor_id' => $Kevin_Steen->actor_id],
            ['movie_id' => $SaturdayNightsMainEventXXXVII->movie_id, 'actor_id' => $Chelsea_Cardona->actor_id],

            // Sex Game 6969
            ['movie_id' => $SexGame6969->movie_id, 'actor_id' => $Woo_Yeol->actor_id],
            ['movie_id' => $SexGame6969->movie_id, 'actor_id' => $So_Jeong->actor_id],
            ['movie_id' => $SexGame6969->movie_id, 'actor_id' => $Lee_Chae_dam->actor_id],

            // Solo Leveling -ReAwakening-
            ['movie_id' => $SoloLevelingReAwakening->movie_id, 'actor_id' => $Taito_Ban->actor_id],
            ['movie_id' => $SoloLevelingReAwakening->movie_id, 'actor_id' => $Genta_Nakamura->actor_id],
            ['movie_id' => $SoloLevelingReAwakening->movie_id, 'actor_id' => $Haruna_Mikawa->actor_id],

            // Sonic the Hedgehog 2
            ['movie_id' => $SonicTheHedgehog2->movie_id, 'actor_id' => $Ben_Schwartz->actor_id],
            ['movie_id' => $SonicTheHedgehog2->movie_id, 'actor_id' => $James_Marsden->actor_id],
            ['movie_id' => $SonicTheHedgehog2->movie_id, 'actor_id' => $Tika_Sumpter->actor_id],

            // Sonic the Hedgehog 3
            ['movie_id' => $SonicTheHedgehog3->movie_id, 'actor_id' => $Jim_Carrey->actor_id],
            ['movie_id' => $SonicTheHedgehog3->movie_id, 'actor_id' => $Ben_Schwartz->actor_id],
            ['movie_id' => $SonicTheHedgehog3->movie_id, 'actor_id' => $Keanu_Reeves->actor_id],

            // Spider-Man: No Way Home
            ['movie_id' => $SpiderManNoWayHome->movie_id, 'actor_id' => $Tom_Holland->actor_id],
            ['movie_id' => $SpiderManNoWayHome->movie_id, 'actor_id' => $Zendaya->actor_id],
            ['movie_id' => $SpiderManNoWayHome->movie_id, 'actor_id' => $Benedict_Cumberbatch->actor_id],

            // The Shawshank Redemption
            ['movie_id' => $TheShawshankRedemption->movie_id, 'actor_id' => $Tim_Robbins->actor_id],
            ['movie_id' => $TheShawshankRedemption->movie_id, 'actor_id' => $Morgan_Freeman->actor_id],
            ['movie_id' => $TheShawshankRedemption->movie_id, 'actor_id' => $Bob_Gunton->actor_id],

            // The Wild Robot
            ['movie_id' => $TheWildRobot->movie_id, 'actor_id' => $Lupita_Nyong->actor_id],
            ['movie_id' => $TheWildRobot->movie_id, 'actor_id' => $Pedro_Pascal->actor_id],
            ['movie_id' => $TheWildRobot->movie_id, 'actor_id' => $Kit_Connor->actor_id],

            // Wicked
            ['movie_id' => $Wicked->movie_id, 'actor_id' => $Cynthia_Erivo->actor_id],
            ['movie_id' => $Wicked->movie_id, 'actor_id' => $Ariana_Grande->actor_id],
            ['movie_id' => $Wicked->movie_id, 'actor_id' => $Jeff_Goldblum->actor_id],

            // Your Fault
            ['movie_id' => $YourFault->movie_id, 'actor_id' => $Nicole_Wallace->actor_id],
            ['movie_id' => $YourFault->movie_id, 'actor_id' => $Gabriel_Guevara->actor_id],
            ['movie_id' => $YourFault->movie_id, 'actor_id' => $Marta_Hazas->actor_id],

            // You're Cordially Invited
            ['movie_id' => $YoureCordiallyInvited->movie_id, 'actor_id' => $Will_Ferrell->actor_id],
            ['movie_id' => $YoureCordiallyInvited->movie_id, 'actor_id' => $Reese_Witherspoon->actor_id],
            ['movie_id' => $YoureCordiallyInvited->movie_id, 'actor_id' => $Geraldine_Viswanathan->actor_id],

            // Arcadian
            ['movie_id' => $Arcadian->movie_id, 'actor_id' => $Nicolas_Cage->actor_id],
            ['movie_id' => $Arcadian->movie_id, 'actor_id' => $Jaeden_Martell->actor_id],
            ['movie_id' => $Arcadian->movie_id, 'actor_id' => $Maxwell_Jenkins->actor_id],

            // Ask Me What You Want
            ['movie_id' => $AskMeWhatYouWant->movie_id, 'actor_id' => $Gabriela_Andrada->actor_id],
            ['movie_id' => $AskMeWhatYouWant->movie_id, 'actor_id' => $Mario_Ermito->actor_id],
            ['movie_id' => $AskMeWhatYouWant->movie_id, 'actor_id' => $Celia_Freijeiro->actor_id],

            // Azrael
            ['movie_id' => $Azrael->movie_id, 'actor_id' => $Samara_Weaving->actor_id],
            ['movie_id' => $Azrael->movie_id, 'actor_id' => $Vic_Carmen_Sonne->actor_id],
            ['movie_id' => $Azrael->movie_id, 'actor_id' => $Katariina_Unt->actor_id],

            // Babygirl
            ['movie_id' => $Babygirl->movie_id, 'actor_id' => $Nicole_Kidman->actor_id],
            ['movie_id' => $Babygirl->movie_id, 'actor_id' => $Harris_Dickinson->actor_id],
            ['movie_id' => $Babygirl->movie_id, 'actor_id' => $Antonio_Banderas->actor_id],

            // Back in Action
            ['movie_id' => $BackInAction->movie_id, 'actor_id' => $Cameron_Diaz->actor_id],
            ['movie_id' => $BackInAction->movie_id, 'actor_id' => $Jamie_Foxx->actor_id],
            ['movie_id' => $BackInAction->movie_id, 'actor_id' => $McKenna_Roberts->actor_id],

            // Belyas
            ['movie_id' => $Belyas->movie_id, 'actor_id' => $Audrey_Avila->actor_id],
            ['movie_id' => $Belyas->movie_id, 'actor_id' => $Dani_Yoshida->actor_id],
            ['movie_id' => $Belyas->movie_id, 'actor_id' => $Denise_Esteban->actor_id],

            // Carry-On
            ['movie_id' => $CarryOn->movie_id, 'actor_id' => $Taron_Egerton->actor_id],
            ['movie_id' => $CarryOn->movie_id, 'actor_id' => $Jason_Bateman->actor_id],
            ['movie_id' => $CarryOn->movie_id, 'actor_id' => $Sofia_Carson->actor_id],

            // Conclave
            ['movie_id' => $Conclave->movie_id, 'actor_id' => $Ralph_Fiennes->actor_id],
            ['movie_id' => $Conclave->movie_id, 'actor_id' => $Stanley_Tucci->actor_id],
            ['movie_id' => $Conclave->movie_id, 'actor_id' => $John_Lithgow->actor_id],

            // Delinquent in Drag
            ['movie_id' => $DelinquentInDrag->movie_id, 'actor_id' => $Kappei_Yamaguchi->actor_id],
            ['movie_id' => $DelinquentInDrag->movie_id, 'actor_id' => $Hideyuki_Tanaka->actor_id],
            ['movie_id' => $DelinquentInDrag->movie_id, 'actor_id' => $Reiko_Oimori->actor_id],

            // Despicable Me 4
            ['movie_id' => $DespicableMe4->movie_id, 'actor_id' => $Steve_Carell->actor_id],
            ['movie_id' => $DespicableMe4->movie_id, 'actor_id' => $Kristen_Wiig->actor_id],
            ['movie_id' => $DespicableMe4->movie_id, 'actor_id' => $Will_Ferrell->actor_id],

            // Dirty Angels
            ['movie_id' => $DirtyAngels->movie_id, 'actor_id' => $Eva_Green->actor_id],
            ['movie_id' => $DirtyAngels->movie_id, 'actor_id' => $Maria_Bakalova->actor_id],
            ['movie_id' => $DirtyAngels->movie_id, 'actor_id' => $Ruby_Rose->actor_id],

            // Dog Man
            ['movie_id' => $DogMan->movie_id, 'actor_id' => $Peter_Hastings->actor_id],
            ['movie_id' => $DogMan->movie_id, 'actor_id' => $Pete_Davidson->actor_id],
            ['movie_id' => $DogMan->movie_id, 'actor_id' => $Lil_Rel_Howery->actor_id],

            // Eye for an Eye 2
            ['movie_id' => $EyeForAnEye2->movie_id, 'actor_id' => $Xie_Miao->actor_id],
            ['movie_id' => $EyeForAnEye2->movie_id, 'actor_id' => $Yang_Enyou->actor_id],
            ['movie_id' => $EyeForAnEye2->movie_id, 'actor_id' => $Huang_Tao->actor_id],

            // Ferry 2
            ['movie_id' => $Ferry2->movie_id, 'actor_id' => $Frank_Lammers->actor_id],
            ['movie_id' => $Ferry2->movie_id, 'actor_id' => $Aiko_Beemsterboer->actor_id],
            ['movie_id' => $Ferry2->movie_id, 'actor_id' => $Tobias_Kersloot->actor_id],

            // Flight Risk
            ['movie_id' => $FlightRisk->movie_id, 'actor_id' => $Michelle_Dockery->actor_id],
            ['movie_id' => $FlightRisk->movie_id, 'actor_id' => $Mark_Wahlberg->actor_id],
            ['movie_id' => $FlightRisk->movie_id, 'actor_id' => $Topher_Grace->actor_id],

            // Heretic
            ['movie_id' => $Heretic->movie_id, 'actor_id' => $Hugh_Grant->actor_id],
            ['movie_id' => $Heretic->movie_id, 'actor_id' => $Sophie_Thatcher->actor_id],
            ['movie_id' => $Heretic->movie_id, 'actor_id' => $Chloe_East->actor_id],

            // Inside Out 2
            ['movie_id' => $InsideOut2->movie_id, 'actor_id' => $Amy_Poehler->actor_id],
            ['movie_id' => $InsideOut2->movie_id, 'actor_id' => $Maya_Hawke->actor_id],
            ['movie_id' => $InsideOut2->movie_id, 'actor_id' => $Kensington_Tallman->actor_id],

            // Interstellar
            ['movie_id' => $Interstellar->movie_id, 'actor_id' => $Matthew_McConaughey->actor_id],
            ['movie_id' => $Interstellar->movie_id, 'actor_id' => $Anne_Hathaway->actor_id],
            ['movie_id' => $Interstellar->movie_id, 'actor_id' => $Michael_Caine->actor_id],

            // Kingdom of the Planet of the Apes
            ['movie_id' => $KingdomOfThePlanetOfTheApes->movie_id, 'actor_id' => $Owen_Teague->actor_id],
            ['movie_id' => $KingdomOfThePlanetOfTheApes->movie_id, 'actor_id' => $Freya_Allan->actor_id],
            ['movie_id' => $KingdomOfThePlanetOfTheApes->movie_id, 'actor_id' => $Kevin_Durand->actor_id],

            // Kraven the Hunter
            ['movie_id' => $KravenTheHunter->movie_id, 'actor_id' => $Aaron_Taylor_Johnson->actor_id],
            ['movie_id' => $KravenTheHunter->movie_id, 'actor_id' => $Ariana_DeBose->actor_id],
            ['movie_id' => $KravenTheHunter->movie_id, 'actor_id' => $Fred_Hechinger->actor_id],

            // Lembayung
            ['movie_id' => $Lembayung->movie_id, 'actor_id' => $Taskya_Namya->actor_id],
            ['movie_id' => $Lembayung->movie_id, 'actor_id' => $Yasamin_Jasem->actor_id],
            ['movie_id' => $Lembayung->movie_id, 'actor_id' => $Arya_Saloka->actor_id],

            // Memoir of a Snail
            ['movie_id' => $MemoirOfASnail->movie_id, 'actor_id' => $Sarah_Snook->actor_id],
            ['movie_id' => $MemoirOfASnail->movie_id, 'actor_id' => $Kodi_Smit_McPhee->actor_id],
            ['movie_id' => $MemoirOfASnail->movie_id, 'actor_id' => $Jacki_Weaver->actor_id],

            // Panda Plan
            ['movie_id' => $PandaPlan->movie_id, 'actor_id' => $Jackie_Chan->actor_id],
            ['movie_id' => $PandaPlan->movie_id, 'actor_id' => $Shi_Ce->actor_id],
            ['movie_id' => $PandaPlan->movie_id, 'actor_id' => $Wei_Xiang->actor_id],


            // Pleasure
            ['movie_id' => $Pleasure->movie_id, 'actor_id' => $Sofia_Kappel->actor_id],
            ['movie_id' => $Pleasure->movie_id, 'actor_id' => $Zelda_Morrison->actor_id],
            ['movie_id' => $Pleasure->movie_id, 'actor_id' => $Tee_Reel->actor_id],

            // Rita
            ['movie_id' => $Rita->movie_id, 'actor_id' => $Christine_Bermas->actor_id],
            ['movie_id' => $Rita->movie_id, 'actor_id' => $Gold_Aceron->actor_id],
            ['movie_id' => $Rita->movie_id, 'actor_id' => $VR_Relosa->actor_id],

            // River of Blood
            ['movie_id' => $RiverOfBlood->movie_id, 'actor_id' => $Joseph_Millson->actor_id],
            ['movie_id' => $RiverOfBlood->movie_id, 'actor_id' => $Sarah_Alexandra_Marks->actor_id],
            ['movie_id' => $RiverOfBlood->movie_id, 'actor_id' => $David_Wayman->actor_id],

            // Sidelined: The QB and Me
            ['movie_id' => $SidelinedTheQBAndMe->movie_id, 'actor_id' => $Naomi_Scott->actor_id],
            ['movie_id' => $SidelinedTheQBAndMe->movie_id, 'actor_id' => $Rosemarie_DeWitt->actor_id],
            ['movie_id' => $SidelinedTheQBAndMe->movie_id, 'actor_id' => $Lukas_Gage->actor_id],

            // Skin. Like. Sun.
            ['movie_id' => $SkinLikeSun->movie_id, 'actor_id' => $Lauren_LaVera->actor_id],
            ['movie_id' => $SkinLikeSun->movie_id, 'actor_id' => $David_Howard_Thornton->actor_id],
            ['movie_id' => $SkinLikeSun->movie_id, 'actor_id' => $Samantha_Scaffidi->actor_id],

            // Smile 2
            ['movie_id' => $Smile2->movie_id, 'actor_id' => $William_Moseley->actor_id],
            ['movie_id' => $Smile2->movie_id, 'actor_id' => $Colm_Meaney->actor_id],
            ['movie_id' => $Smile2->movie_id, 'actor_id' => $Jesse_Hutch->actor_id],

            // Terrifier 3
            ['movie_id' => $Terrifier3->movie_id, 'actor_id' => $William_Moseley->actor_id],
            ['movie_id' => $Terrifier3->movie_id, 'actor_id' => $Anna_Popplewell->actor_id],
            ['movie_id' => $Terrifier3->movie_id, 'actor_id' => $Skandar_Keynes->actor_id],

            // The Ballad of Davy Crockett
            ['movie_id' => $TheBalladOfDavyCrockett->movie_id, 'actor_id' => $Tomer_Sisley->actor_id],
            ['movie_id' => $TheBalladOfDavyCrockett->movie_id, 'actor_id' => $James_Franco->actor_id],
            ['movie_id' => $TheBalladOfDavyCrockett->movie_id, 'actor_id' => $Clotilde_Hesme->actor_id],


            // The Chronicles of Narnia: The Lion, the Witch and the Wardrobe
            ['movie_id' => $TheChroniclesOfNarniaTheLionTheWitchAndTheWardrobe->movie_id, 'actor_id' => $Demi_Moore->actor_id],
            ['movie_id' => $TheChroniclesOfNarniaTheLionTheWitchAndTheWardrobe->movie_id, 'actor_id' => $Margaret_Qualley->actor_id],
            ['movie_id' => $TheChroniclesOfNarniaTheLionTheWitchAndTheWardrobe->movie_id, 'actor_id' => $Dennis_Quaid->actor_id],

            // The Price of Money Alargo Winch Adventure
            ['movie_id' =>$ThePriceOfMoneyALargoWinchAdventure->movie_id, 'actor_id' => $Chris_Hemsworth->actor_id],
            ['movie_id' =>$ThePriceOfMoneyALargoWinchAdventure->movie_id, 'actor_id' => $Brian_Tyree_Henry->actor_id],
            ['movie_id' =>$ThePriceOfMoneyALargoWinchAdventure->movie_id, 'actor_id' => $Scarlett_Johansson->actor_id],

            // The Substance
            ['movie_id' =>$TheSubstance->movie_id, 'actor_id' => $Tom_Hardy->actor_id],
            ['movie_id' =>$TheSubstance->movie_id, 'actor_id' => $Chiwetel_Ejiofor->actor_id],
            ['movie_id' =>$TheSubstance->movie_id, 'actor_id' => $Juno_Temple->actor_id],

            // Transformers One
            ['movie_id' =>$TransformersOne->movie_id, 'actor_id' => $Ben_Whitehead->actor_id],
            ['movie_id' =>$TransformersOne->movie_id, 'actor_id' => $Peter_Kay->actor_id],
            ['movie_id' =>$TransformersOne->movie_id, 'actor_id' => $Lauren_Patel->actor_id],

            // Venom The Last Dance
            ['movie_id' =>$VenomTheLastDance->movie_id, 'actor_id' => $Frank_Grillo->actor_id],
            ['movie_id' =>$VenomTheLastDance->movie_id, 'actor_id' => $Katrina_Law->actor_id],
            ['movie_id' =>$VenomTheLastDance->movie_id, 'actor_id' => $Ilfenesh_Hadera->actor_id],

            // Wallace Gromit Vengeance Most Fowl
            ['movie_id' =>$WallaceGromitVengeanceMostFowl->movie_id, 'actor_id' => $Ben_Whitehead->actor_id],
            ['movie_id' =>$WallaceGromitVengeanceMostFowl->movie_id, 'actor_id' => $Peter_Kay->actor_id],
            ['movie_id' =>$WallaceGromitVengeanceMostFowl->movie_id, 'actor_id' => $Lauren_Patel->actor_id],

            // WereWolves
            ['movie_id' =>$Werewolves->movie_id, 'actor_id' => $Frank_Grillo->actor_id],
            ['movie_id' =>$Werewolves->movie_id, 'actor_id' => $Katrina_Law->actor_id],
            ['movie_id' =>$Werewolves->movie_id, 'actor_id' => $Ilfenesh_Hadera->actor_id],

            // WolfMan
            ['movie_id' =>$WolfMan->movie_id, 'actor_id' => $Christopher_Abbott->actor_id],
            ['movie_id' =>$WolfMan->movie_id, 'actor_id' => $Julia_Garner->actor_id],
            ['movie_id' =>$WolfMan->movie_id, 'actor_id' => $Matilda_Firth->actor_id],

            // xXx
            ['movie_id' =>$xXx->movie_id, 'actor_id' => $Vin_Diesel->actor_id],
            ['movie_id' =>$xXx->movie_id, 'actor_id' => $Asia_Argento->actor_id],
            ['movie_id' =>$xXx->movie_id, 'actor_id' => $Marton_Csokas->actor_id],
        ];

        DB::table('movie_actor')->insert($movieActor);
    }
}