<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieGenreSeeder extends Seeder
{
    public function run(): void
    {
        // Fetch Genres
        $Action = DB::table('genre')->where('title', 'Action')->first();
        $Adventure = DB::table('genre')->where('title', 'Adventure')->first();
        $Animation = DB::table('genre')->where('title', 'Animation')->first();
        $Comedy = DB::table('genre')->where('title', 'Comedy')->first();
        $Crime = DB::table('genre')->where('title', 'Crime')->first();
        $Documentary = DB::table('genre')->where('title', 'Documentary')->first();
        $Drama = DB::table('genre')->where('title', 'Drama')->first();
        $Family = DB::table('genre')->where('title', 'Family')->first();
        $Fantasy = DB::table('genre')->where('title', 'Fantasy')->first();
        $History = DB::table('genre')->where('title', 'History')->first();
        $Horror = DB::table('genre')->where('title', 'Horror')->first();
        $Music = DB::table('genre')->where('title', 'Music')->first();
        $Mystery = DB::table('genre')->where('title', 'Mystery')->first();
        $Romance = DB::table('genre')->where('title', 'Romance')->first();
        $Science_Fiction = DB::table('genre')->where('title', 'Science Fiction')->first();
        $TV_Movie = DB::table('genre')->where('title', 'TV Movie')->first();
        $Thriller = DB::table('genre')->where('title', 'Thriller')->first();
        $War = DB::table('genre')->where('title', 'War')->first();
        $Western = DB::table('genre')->where('title', 'Western')->first();

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

        // Insert Movie-Genre Relationships
        $movieGenres = [
            // Absolution
            ['movie_id' => $Absolution->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $Absolution->movie_id, 'genre_id' => $Crime->genre_id],
            ['movie_id' => $Absolution->movie_id, 'genre_id' => $Thriller->genre_id],

            // 365 Days: This Day
            ['movie_id' => $Days365ThisDay->movie_id, 'genre_id' => $Romance->genre_id],
            ['movie_id' => $Days365ThisDay->movie_id, 'genre_id' => $Drama->genre_id],

            // Aftermath
            ['movie_id' => $Aftermath->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $Aftermath->movie_id, 'genre_id' => $Thriller->genre_id],

            // Alarum
            ['movie_id' => $Alarum->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $Alarum->movie_id, 'genre_id' => $Crime->genre_id],
            ['movie_id' => $Alarum->movie_id, 'genre_id' => $Thriller->genre_id],

            // Anora
            ['movie_id' => $Anora->movie_id, 'genre_id' => $Drama->genre_id],
            ['movie_id' => $Anora->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $Anora->movie_id, 'genre_id' => $Romance->genre_id],

            // Armor
            ['movie_id' => $Armor->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $Armor->movie_id, 'genre_id' => $Crime->genre_id],
            ['movie_id' => $Armor->movie_id, 'genre_id' => $Thriller->genre_id],
            ['movie_id' => $Armor->movie_id, 'genre_id' => $Drama->genre_id],

            // Avengers: Endgame
            ['movie_id' => $AvengersEndgame->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $AvengersEndgame->movie_id, 'genre_id' => $Science_Fiction->genre_id],
            ['movie_id' => $AvengersEndgame->movie_id, 'genre_id' => $Action->genre_id],

            // Avengers: Infinity War
            ['movie_id' => $AvengersInfinityWar->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $AvengersInfinityWar->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $AvengersInfinityWar->movie_id, 'genre_id' => $Science_Fiction->genre_id],

            // Bad Boys: Ride or Die
            ['movie_id' => $BadBoysRideOrDie->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $BadBoysRideOrDie->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $BadBoysRideOrDie->movie_id, 'genre_id' => $Crime->genre_id],
            ['movie_id' => $BadBoysRideOrDie->movie_id, 'genre_id' => $Thriller->genre_id],
            ['movie_id' => $BadBoysRideOrDie->movie_id, 'genre_id' => $Adventure->genre_id],

            // Captain America: Brave New World
            ['movie_id' => $CaptainAmericaBraveNewWorld->movie_id, 'genre_id' => $Science_Fiction->genre_id],
            ['movie_id' => $CaptainAmericaBraveNewWorld->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $CaptainAmericaBraveNewWorld->movie_id, 'genre_id' => $Thriller->genre_id],

            // Companion
            ['movie_id' => $Companion->movie_id, 'genre_id' => $Science_Fiction->genre_id],
            ['movie_id' => $Companion->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' => $Companion->movie_id, 'genre_id' => $Comedy->genre_id],

            // Creation of the Gods II: Demon Force
            ['movie_id' => $CreationOfTheGodsIIDemonForce->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $CreationOfTheGodsIIDemonForce->movie_id, 'genre_id' => $Fantasy->genre_id],
            ['movie_id' => $CreationOfTheGodsIIDemonForce->movie_id, 'genre_id' => $War->genre_id],

            // Deadpool & Wolverine
            ['movie_id' => $DeadpoolWolverine->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $DeadpoolWolverine->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $DeadpoolWolverine->movie_id, 'genre_id' => $Science_Fiction->genre_id],

            // Elevation
            ['movie_id' => $Elevation->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $Elevation->movie_id, 'genre_id' => $Science_Fiction->genre_id],
            ['movie_id' => $Elevation->movie_id, 'genre_id' => $Thriller->genre_id],

            // Fast X
            ['movie_id' => $FastX->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $FastX->movie_id, 'genre_id' => $Crime->genre_id],
            ['movie_id' => $FastX->movie_id, 'genre_id' => $Thriller->genre_id],

            // Gladiator II
            ['movie_id' => $GladiatorII->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $GladiatorII->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $GladiatorII->movie_id, 'genre_id' => $Drama->genre_id],

            // Godzilla x Kong: The New Empire
            ['movie_id' => $GodzillaXKongTheNewEmpire->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $GodzillaXKongTheNewEmpire->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $GodzillaXKongTheNewEmpire->movie_id, 'genre_id' => $Science_Fiction->genre_id],

            // Harry Potter and the Philosopher's Stone
            ['movie_id' => $HarryPotterAndThePhilosophersStone->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $HarryPotterAndThePhilosophersStone->movie_id, 'genre_id' => $Fantasy->genre_id],

            // Jurassic World Dominion
            ['movie_id' => $JurassicWorldDominion->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $JurassicWorldDominion->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $JurassicWorldDominion->movie_id, 'genre_id' => $Science_Fiction->genre_id],

            // Jurassic World Rebirth
            ['movie_id' => $JurassicWorldRebirth->movie_id, 'genre_id' => $Science_Fiction->genre_id],
            ['movie_id' => $JurassicWorldRebirth->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $JurassicWorldRebirth->movie_id, 'genre_id' => $Thriller->genre_id],

            // Kung Fu Panda 4
            ['movie_id' => $KungFuPanda4->movie_id, 'genre_id' => $Animation->genre_id],
            ['movie_id' => $KungFuPanda4->movie_id, 'genre_id' => $Family->genre_id],
            ['movie_id' => $KungFuPanda4->movie_id, 'genre_id' => $Fantasy->genre_id],
            ['movie_id' => $KungFuPanda4->movie_id, 'genre_id' => $Action->genre_id],

            // My Fault
            ['movie_id' => $MyFault->movie_id, 'genre_id' => $Romance->genre_id],
            ['movie_id' => $MyFault->movie_id, 'genre_id' => $Drama->genre_id],

            // Number 24
            ['movie_id' => $Number24->movie_id, 'genre_id' => $War->genre_id],
            ['movie_id' => $Number24->movie_id, 'genre_id' => $History->genre_id],
            ['movie_id' => $Number24->movie_id, 'genre_id' => $Drama->genre_id],

            // Raiders of the Lost Ark
            ['movie_id' => $RaidersOfTheLostArk->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $RaidersOfTheLostArk->movie_id, 'genre_id' => $Action->genre_id],

            // Red One
            ['movie_id' => $RedOne->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $RedOne->movie_id, 'genre_id' => $Fantasy->genre_id],
            ['movie_id' => $RedOne->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $RedOne->movie_id, 'genre_id' => $Adventure->genre_id],

            // Saturday Night's Main Event XXXVII
            ['movie_id' => $SaturdayNightsMainEventXXXVII->movie_id, 'genre_id' => $Action->genre_id],

            // Sex Game 6969
            ['movie_id' => $SexGame6969->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $SexGame6969->movie_id, 'genre_id' => $Drama->genre_id],
            ['movie_id' => $SexGame6969->movie_id, 'genre_id' => $Romance->genre_id],

            // Solo Leveling -ReAwakening-
            ['movie_id' => $SoloLevelingReAwakening->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $SoloLevelingReAwakening->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $SoloLevelingReAwakening->movie_id, 'genre_id' => $Fantasy->genre_id],
            ['movie_id' => $SoloLevelingReAwakening->movie_id, 'genre_id' => $Animation->genre_id],

            // Sonic the Hedgehog 2
            ['movie_id' => $SonicTheHedgehog2->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $SonicTheHedgehog2->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $SonicTheHedgehog2->movie_id, 'genre_id' => $Family->genre_id],
            ['movie_id' => $SonicTheHedgehog2->movie_id, 'genre_id' => $Comedy->genre_id],

            // Sonic the Hedgehog 3
            ['movie_id' => $SonicTheHedgehog3->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $SonicTheHedgehog3->movie_id, 'genre_id' => $Science_Fiction->genre_id],
            ['movie_id' => $SonicTheHedgehog3->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $SonicTheHedgehog3->movie_id, 'genre_id' => $Family->genre_id],

            // Spider-Man: No Way Home
            ['movie_id' => $SpiderManNoWayHome->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $SpiderManNoWayHome->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $SpiderManNoWayHome->movie_id, 'genre_id' => $Science_Fiction->genre_id],

            // The Shawshank Redemption
            ['movie_id' => $TheShawshankRedemption->movie_id, 'genre_id' => $Drama->genre_id],
            ['movie_id' => $TheShawshankRedemption->movie_id, 'genre_id' => $Crime->genre_id],

            // The Wild Robot
            ['movie_id' => $TheWildRobot->movie_id, 'genre_id' => $Animation->genre_id],
            ['movie_id' => $TheWildRobot->movie_id, 'genre_id' => $Science_Fiction->genre_id],
            ['movie_id' => $TheWildRobot->movie_id, 'genre_id' => $Family->genre_id],

            // Wicked
            ['movie_id' => $Wicked->movie_id, 'genre_id' => $Drama->genre_id],
            ['movie_id' => $Wicked->movie_id, 'genre_id' => $Romance->genre_id],
            ['movie_id' => $Wicked->movie_id, 'genre_id' => $Fantasy->genre_id],

            // Your Fault
            ['movie_id' => $YourFault->movie_id, 'genre_id' => $Romance->genre_id],
            ['movie_id' => $YourFault->movie_id, 'genre_id' => $Drama->genre_id],

            // You're Cordially Invited
            ['movie_id' => $YoureCordiallyInvited->movie_id, 'genre_id' => $Comedy->genre_id],

            // Arcadian
            ['movie_id' => $Arcadian->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $Arcadian->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' => $Arcadian->movie_id, 'genre_id' => $Thriller->genre_id],
            ['movie_id' => $Arcadian->movie_id, 'genre_id' => $Science_Fiction->genre_id],

            // Ask Me What You Want
            ['movie_id' => $AskMeWhatYouWant->movie_id, 'genre_id' => $Romance->genre_id],
            ['movie_id' => $AskMeWhatYouWant->movie_id, 'genre_id' => $Drama->genre_id],

            // Azrael
            ['movie_id' => $Azrael->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $Azrael->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' => $Azrael->movie_id, 'genre_id' => $Thriller->genre_id],

            // Babygirl
            ['movie_id' => $Babygirl->movie_id, 'genre_id' => $Drama->genre_id],

            // Back in Action
            ['movie_id' => $BackInAction->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $BackInAction->movie_id, 'genre_id' => $Comedy->genre_id],

            // Belyas
            ['movie_id' => $Belyas->movie_id, 'genre_id' => $Drama->genre_id],

            // Carry-On
            ['movie_id' => $CarryOn->movie_id, 'genre_id' => $Thriller->genre_id],
            ['movie_id' => $CarryOn->movie_id, 'genre_id' => $Action->genre_id],

            // Conclave
            ['movie_id' => $Conclave->movie_id, 'genre_id' => $Drama->genre_id],
            ['movie_id' => $Conclave->movie_id, 'genre_id' => $Mystery->genre_id],
            ['movie_id' => $Conclave->movie_id, 'genre_id' => $Thriller->genre_id],

            // Delinquent in Drag
            ['movie_id' => $DelinquentInDrag->movie_id, 'genre_id' => $Animation->genre_id],
            ['movie_id' => $DelinquentInDrag->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $DelinquentInDrag->movie_id, 'genre_id' => $Action->genre_id],

            // Despicable Me 4
            ['movie_id' => $DespicableMe4->movie_id, 'genre_id' => $Animation->genre_id],
            ['movie_id' => $DespicableMe4->movie_id, 'genre_id' => $Family->genre_id],
            ['movie_id' => $DespicableMe4->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $DespicableMe4->movie_id, 'genre_id' => $Science_Fiction->genre_id],

            // Dirty Angels
            ['movie_id' => $DirtyAngels->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $DirtyAngels->movie_id, 'genre_id' => $Drama->genre_id],
            ['movie_id' => $DirtyAngels->movie_id, 'genre_id' => $Thriller->genre_id],
            ['movie_id' => $DirtyAngels->movie_id, 'genre_id' => $War->genre_id],

            // Dog Man
            ['movie_id' => $DogMan->movie_id, 'genre_id' => $Family->genre_id],
            ['movie_id' => $DogMan->movie_id, 'genre_id' => $Animation->genre_id],
            ['movie_id' => $DogMan->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $DogMan->movie_id, 'genre_id' => $Action->genre_id],

            // Eye for an Eye 2
            ['movie_id' => $EyeForAnEye2->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $EyeForAnEye2->movie_id, 'genre_id' => $Drama->genre_id],

            // Ferry 2
            ['movie_id' => $Ferry2->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $Ferry2->movie_id, 'genre_id' => $Drama->genre_id],
            ['movie_id' => $Ferry2->movie_id, 'genre_id' => $Crime->genre_id],
            ['movie_id' => $Ferry2->movie_id, 'genre_id' => $Thriller->genre_id],

            // Flight Risk
            ['movie_id' => $FlightRisk->movie_id, 'genre_id' => $Thriller->genre_id],
            ['movie_id' => $FlightRisk->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $FlightRisk->movie_id, 'genre_id' => $Crime->genre_id],

            // Heretic
            ['movie_id' => $Heretic->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' => $Heretic->movie_id, 'genre_id' => $Thriller->genre_id],

            // Inside Out 2
            ['movie_id' => $InsideOut2->movie_id, 'genre_id' => $Animation->genre_id],
            ['movie_id' => $InsideOut2->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $InsideOut2->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $InsideOut2->movie_id, 'genre_id' => $Family->genre_id],

            // Interstellar
            ['movie_id' => $Interstellar->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $Interstellar->movie_id, 'genre_id' => $Drama->genre_id],
            ['movie_id' => $Interstellar->movie_id, 'genre_id' => $Science_Fiction->genre_id],

            // Kingdom of the Planet of the Apes
            ['movie_id' => $KingdomOfThePlanetOfTheApes->movie_id, 'genre_id' => $Science_Fiction->genre_id],
            ['movie_id' => $KingdomOfThePlanetOfTheApes->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $KingdomOfThePlanetOfTheApes->movie_id, 'genre_id' => $Action->genre_id],

            // Kraven the Hunter
            ['movie_id' => $KravenTheHunter->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $KravenTheHunter->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $KravenTheHunter->movie_id, 'genre_id' => $Thriller->genre_id],

            // Lembayung
            ['movie_id' => $Lembayung->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' => $Lembayung->movie_id, 'genre_id' => $Thriller->genre_id],

            // Memoir of a Snail
            ['movie_id' => $MemoirOfASnail->movie_id, 'genre_id' => $Animation->genre_id],
            ['movie_id' => $MemoirOfASnail->movie_id, 'genre_id' => $Drama->genre_id],
            ['movie_id' => $MemoirOfASnail->movie_id, 'genre_id' => $Comedy->genre_id],

            // Panda Plan
            ['movie_id' => $PandaPlan->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $PandaPlan->movie_id, 'genre_id' => $Comedy->genre_id],

            // Pleasure
            ['movie_id' => $Pleasure->movie_id, 'genre_id' => $Drama->genre_id],

            // Rita
            ['movie_id' => $Rita->movie_id, 'genre_id' => $Drama->genre_id],

            // River of Blood
            ['movie_id' => $RiverOfBlood->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' => $RiverOfBlood->movie_id, 'genre_id' => $Thriller->genre_id],

            // Sidelined: The QB and Me
            ['movie_id' => $SidelinedTheQBAndMe->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $SidelinedTheQBAndMe->movie_id, 'genre_id' => $Romance->genre_id],

            // Skin. Like. Sun.
            ['movie_id' => $SkinLikeSun->movie_id, 'genre_id' => $Romance->genre_id],

            // Smile 2
            ['movie_id' => $Smile2->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' => $Smile2->movie_id, 'genre_id' => $Mystery->genre_id],

            // Terrifier 3
            ['movie_id' => $Terrifier3->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' => $Terrifier3->movie_id, 'genre_id' => $Thriller->genre_id],

            // The Ballad of Davy Crockett
            ['movie_id' => $TheBalladOfDavyCrockett->movie_id, 'genre_id' => $Action->genre_id],

            // The Chronicles of Narnia: The Lion, the Witch and the Wardrobe
            ['movie_id' => $TheChroniclesOfNarniaTheLionTheWitchAndTheWardrobe->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $TheChroniclesOfNarniaTheLionTheWitchAndTheWardrobe->movie_id, 'genre_id' => $Family->genre_id],
            ['movie_id' => $TheChroniclesOfNarniaTheLionTheWitchAndTheWardrobe->movie_id, 'genre_id' => $Fantasy->genre_id],

            // The Price of Money Alargo Winch Adventure
            ['movie_id' =>$ThePriceOfMoneyALargoWinchAdventure->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' =>$ThePriceOfMoneyALargoWinchAdventure->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' =>$ThePriceOfMoneyALargoWinchAdventure->movie_id, 'genre_id' => $Thriller->genre_id],

            // The Substance
            ['movie_id' =>$TheSubstance->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' =>$TheSubstance->movie_id, 'genre_id' => $Science_Fiction->genre_id],

            // Transformers One
            ['movie_id' =>$TransformersOne->movie_id, 'genre_id' => $Animation->genre_id],
            ['movie_id' =>$TransformersOne->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' =>$TransformersOne->movie_id, 'genre_id' => $Science_Fiction->genre_id],
            ['movie_id' =>$TransformersOne->movie_id, 'genre_id' => $Family->genre_id],

            // Venom The Last Dance
            ['movie_id' =>$VenomTheLastDance->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' =>$VenomTheLastDance->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' =>$VenomTheLastDance->movie_id, 'genre_id' => $Science_Fiction->genre_id],

            // Wallace Gromit Vengeance Most Fowl
            ['movie_id' =>$WallaceGromitVengeanceMostFowl->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' =>$WallaceGromitVengeanceMostFowl->movie_id, 'genre_id' => $Animation->genre_id],
            ['movie_id' =>$WallaceGromitVengeanceMostFowl->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' =>$WallaceGromitVengeanceMostFowl->movie_id, 'genre_id' => $Family->genre_id],

            // WereWolves
            ['movie_id' =>$Werewolves->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' =>$Werewolves->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' =>$Werewolves->movie_id, 'genre_id' => $Thriller->genre_id],

            // WolfMan
            ['movie_id' =>$WolfMan->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' =>$WolfMan->movie_id, 'genre_id' => $Thriller->genre_id],

            // xXx
            ['movie_id' =>$xXx->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' =>$xXx->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' =>$xXx->movie_id, 'genre_id' => $Thriller->genre_id],
            ['movie_id' =>$xXx->movie_id, 'genre_id' => $Crime->genre_id],

        ];

        DB::table('movie_genre')->insert($movieGenres);
    }
}