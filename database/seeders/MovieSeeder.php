<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Set in a function where it the title of the movie is already inside the table, than skip it
        // Or just run php artisan migrate:fresh --seed, to drop the existing tables with thier respective data, then run everything on a clean slate

        // Go thru each movie add modify the poster_file_path name after '/poster/{title}' so it is only one string without spaces for easier convertion

        $movies = [
            [
                'title' => 'Absolution',
                'overview' => 'An aging ex-boxer gangster working as muscle for a Boston crime boss receives an upsetting diagnosis. Despite a faltering memory, he attempts to rectify the sins of his past and reconnect with his estranged children. He is determined to leave a positive legacy for his grandson, but the criminal underworld isn’t done with him and won’t loosen their grip willingly.',
                'release_date' => '2024-10-31',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '365 Days: This Day',
                'overview' => 'Laura and Massimo are back and hotter than ever. But the reunited couple\'s new beginning is complicated by Massimo’s family ties and a mysterious man who enters Laura’s life to win her heart and trust, at any cost.',
                'release_date' => '2022-04-26',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Aftermath',
                'overview' => 'A returning war veteran, stricken with PTSD, gets trapped with his teenage sister on Boston\'s Tobin Memorial Bridge when a heavily armed group of ex-military revolutionaries take everyone hostage.',
                'release_date' => '2024-09-27',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Alarum',
                'overview' => 'Two married spies caught in the crosshairs of an international intelligence network will stop at nothing to obtain a critical asset. Joe and Lara are agents living off the grid whose quiet retreat at a winter resort is blown to shreds when members of the old guard suspect the two may have joined an elite team of rogue spies, known as Alarum.',
                'release_date' => '2025-01-16',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Anora',
                'overview' => 'A young sex worker from Brooklyn gets her chance at a Cinderella story when she meets and impulsively marries the son of an oligarch. Once the news reaches Russia, her fairytale is threatened as his parents set out to get the marriage annulled.',
                'release_date' => '2024-10-14',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Armor',
                'overview' => 'Armored truck security guard James Brody is working with his son Casey transporting millions of dollars between banks when a team of thieves led by Rook orchestrate a takeover of their truck to seize the riches. Following a violent car chase, Rook soon has the armored truck surrounded and James and Casey find themselves cornered onto a decrepit bridge.',
                'release_date' => '2024-10-30',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Avengers: Endgame',
                'overview' => 'After the devastating events of Avengers: Infinity War, the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos\' actions and restore order to the universe once and for all, no matter what consequences may be in store.',
                'release_date' => '2019-04-24',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Avengers: Infinity War',
                'overview' => 'As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain.',
                'release_date' => '2018-04-25',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Bad Boys: Ride or Die',
                'overview' => 'After their late former Captain is framed, Lowrey and Burnett try to clear his name, only to end up on the run themselves.',
                'release_date' => '2024-06-05',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Captain America: Brave New World',
                'overview' => 'After meeting with newly elected U.S. President Thaddeus Ross, Sam finds himself in the middle of an international incident. He must discover the reason behind a nefarious global plot before the true mastermind has the entire world seeing red.',
                'release_date' => '2025-02-12',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Companion',
                'overview' => 'During a weekend getaway at a secluded lakeside estate, a group of friends finds themselves entangled in a web of secrets, deception, and advanced technology. As tensions rise and loyalties are tested, they uncover unsettling truths about themselves and the world around them.',
                'release_date' => '2025-01-22',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Creation of the Gods II: Demon Force',
                'overview' => 'Taishi Wen Zhong led the army of Shang Dynasty including Deng Chanyu and four generals of the Mo Family to Xiqi. With the help of Kunlun immortals such as Jiang Ziya, Ji Fa led the army and civilians of Xiqi to defend their homeland.',
                'release_date' => '2025-01-29',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Deadpool & Wolverine',
                'overview' => 'A listless Wade Wilson toils away in civilian life with his days as the morally flexible mercenary, Deadpool, behind him. But when his homeworld faces an existential threat, Wade must reluctantly suit-up again with an even more reluctant Wolverine.',
                'release_date' => '2024-07-24',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Elevation',
                'overview' => 'A single father and two women venture from the safety of their homes to face monstrous creatures to save the life of a young boy.',
                'release_date' => '2024-11-07',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Fast X',
                'overview' => 'Over many missions and against impossible odds, Dom Toretto and his family have outsmarted, out-nerved and outdriven every foe in their path. Now, they confront the most lethal opponent they\'ve ever faced: A terrifying threat emerging from the shadows of the past who\'s fueled by blood revenge, and who is determined to shatter this family and destroy everything—and everyone—that Dom loves, forever.',
                'release_date' => '2023-05-17',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Gladiator II',
                'overview' => 'Years after witnessing the death of the revered hero Maximus at the hands of his uncle, Lucius is forced to enter the Colosseum after his home is conquered by the tyrannical Emperors who now lead Rome with an iron fist. With rage in his heart and the future of the Empire at stake, Lucius must look to his past to find strength and honor to return the glory of Rome to its people.',
                'release_date' => '2024-11-05',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Godzilla x Kong: The New Empire',
                'overview' => 'Following their explosive showdown, Godzilla and Kong must reunite against a colossal undiscovered threat hidden within our world, challenging their very existence – and our own.',
                'release_date' => '2024-03-27',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'overview' => 'Harry Potter has lived under the stairs at his aunt and uncle\'s house his whole life. But on his 11th birthday, he learns he\'s a powerful wizard—with a place waiting for him at the Hogwarts School of Witchcraft and Wizardry. As he learns to harness his newfound powers with the help of the school\'s kindly headmaster, Harry uncovers the truth about his parents\' deaths—and about the villain who\'s to blame.',
                'release_date' => '2001-11-16',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Jurassic World Dominion',
                'overview' => 'Four years after Isla Nublar was destroyed, dinosaurs now live—and hunt—alongside humans all over the world. This fragile balance will reshape the future and determine, once and for all, whether human beings are to remain the apex predators on a planet they now share with history\'s most fearsome creatures.',
                'release_date' => '2022-06-01',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Jurassic World Rebirth',
                'overview' => 'Five years after the events of Jurassic World Dominion, covert operations expert Zora Bennett is contracted to lead a skilled team on a top-secret mission to secure genetic material from the world\'s three most massive dinosaurs. When Zora\'s operation intersects with a civilian family whose boating expedition was capsized, they all find themselves stranded on an island where they come face-to-face with a sinister, shocking discovery that\'s been hidden from the world for decades.',
                'release_date' => '2025-07-02',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Kung Fu Panda 4',
                'overview' => 'Po is gearing up to become the spiritual leader of his Valley of Peace, but also needs someone to take his place as Dragon Warrior. As such, he will train a new kung fu practitioner for the spot and will encounter a villain called the Chameleon who conjures villains from the past.',
                'release_date' => '2024-03-02',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'My Fault',
                'overview' => 'Noah must leave her city, boyfriend, and friends to move into William Leister\'s mansion, the flashy and wealthy husband of her mother Rafaela. As a proud and independent 17 year old, Noah resists living in a mansion surrounded by luxury. However, it is there where she meets Nick, her new stepbrother, and the clash of their strong personalities becomes evident from the very beginning.',
                'release_date' => '2023-06-08',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Number 24',
                'overview' => 'On the brink of the Second World War, a young Norwegian man\'s drive to resist the Nazis sets a new course for his future – and the future of his country.',
                'release_date' => '2024-10-30',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Raiders of the Lost Ark',
                'overview' => 'When Dr. Indiana Jones – the tweed-suited professor who just happens to be a celebrated archaeologist – is hired by the government to locate the legendary Ark of the Covenant, he finds himself up against the entire Nazi regime.',
                'release_date' => '1981-06-12',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Red One',
                'overview' => 'After Santa Claus (codename: Red One) is kidnapped, the North Pole\'s Head of Security must team up with the world\'s most infamous tracker in a globe-trotting, action-packed mission to save Christmas.',
                'release_date' => '2024-10-31',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Saturday Night\'s Main Event XXXVII',
                'overview' => 'Undisputed WWE Champion Cody Rhodes will go head-to-head with Kevin Owens as Saturday Night\'s Main Event returns to NBC. Plus World Tag Team Champion Finn Bálor will face "The Ring General" Gunther for the World Heavyweight Title. The Women\'s World Championship will be on the line when Liv Morgan defends her title against IYO SKY.',
                'release_date' => '2024-12-14',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Sex Game 6969',
                'overview' => 'Three married women had always been dissatisfied sexually with their husbands, and Hyoji, who recently divorced due to her husband\'s erectile dysfunction. They gathered after a long time and had a drink complaining to each other, and they received a business card from an unidentified handsome man, saying, "Don\'t you want to play tteok pounding game?" The four of them head to the meeting place and meet suspicious agents who were waiting for them.',
                'release_date' => '2022-01-27',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Solo Leveling -ReAwakening-',
                'overview' => 'Over a decade after \'gates\' connecting worlds appeared, awakening \'hunters\' with superpowers, weakest hunter Sung Jinwoo encounters a double dungeon and accepts a mysterious quest, becoming the only one able to level up, changing his fate. A catch-up recap of the first season coupled with an exclusive sneak peek of the first two episodes of the highly anticipated second season in one momentous theatrical fan experience.',
                'release_date' => '2024-11-26',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Sonic the Hedgehog 2',
                'overview' => 'After settling in Green Hills, Sonic is eager to prove he has what it takes to be a true hero...',
                'release_date' => '2022-03-30',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Sonic the Hedgehog 3',
                'overview' => 'Sonic, Knuckles, and Tails reunite against a powerful enemy...',
                'release_date' => '2024-12-19',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Spider-Man: No Way Home',
                'overview' => 'Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.',
                'release_date' => '2021-12-15',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Shawshank Redemption',
                'overview' => 'Imprisoned in the 1940s for the double murder of his wife and her lover, upstanding banker Andy Dufresne begins a new life at the Shawshank prison, where he puts his accounting skills to work for an amoral warden. During his long stretch in prison, Dufresne comes to be admired by the other inmates -- including an older prisoner named Red -- for his integrity and unquenchable sense of hope.',
                'release_date' => '1994-09-23',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Wild Robot',
                'overview' => 'After a shipwreck, an intelligent robot called Roz is stranded on an uninhabited island. To survive the harsh environment, Roz bonds with the island\'s animals and cares for an orphaned baby goose.',
                'release_date' => '2024-09-12',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Wicked',
                'overview' => 'In the land of Oz, ostracized and misunderstood green-skinned Elphaba is forced to share a room with the popular aristocrat Glinda at Shiz University, and the two\'s unlikely friendship is tested as they begin to fulfill their respective destinies as Glinda the Good and the Wicked Witch of the West.',
                'release_date' => '2024-11-20',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Your Fault',
                'overview' => 'The love between Noah and Nick seems unwavering despite their parents\' attempts to separate them. But his job and her entry into college open up their lives to new relationships that will shake the foundations of both their relationship and the Leister family itself.',
                'release_date' => '2024-12-26',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'You\'re Cordially Invited',
                'overview' => 'When two weddings are accidentally booked on the same day at the same venue, each bridal party is challenged with preserving their family\'s special moment while making the most of the unanticipated tight quarters. In a hilarious battle of determination and grit, the father of the bride and sister of the other bride chaotically go head-to-head as they stop at nothing to uphold an unforgettable celebration for their loved ones.',
                'release_date' => '2025-01-29',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Arcadian',
                'overview' => 'In the near future, on a decimated Earth, Paul and his twin sons face terror at night when ferocious creatures awaken. When Paul is nearly killed, the boys come up with a plan for survival, using everything their father taught them to keep him alive.',
                'release_date' => '2024-04-12',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Ask Me What You Want',
                'overview' => 'After his father\'s death, Eric Zimmerman travels to Spain to oversee his company\'s branches. In Madrid, he falls for Judith and engage in an intense, erotic relationship full of exploration. However, Eric fears his secret may end their affair.',
                'release_date' => '2024-11-29',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Azrael',
                'overview' => 'In a world where no one speaks, a devout female hunts down a young woman who has escaped her imprisonment. Recaptured by its ruthless leaders, Azrael is due to be sacrificed to pacify an ancient evil deep within the surrounding wilderness.',
                'release_date' => '2024-09-27',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Babygirl',
                'overview' => 'A high-powered CEO puts her career and family on the line when she begins a torrid affair with her much younger intern.',
                'release_date' => '2024-12-25',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Back in Action',
                'overview' => 'Fifteen years after vanishing from the CIA to start a family, elite spies Matt and Emily jump back into the world of espionage when their cover is blown.',
                'release_date' => '2025-01-15',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Belyas',
                'overview' => 'Audrey Avila, Denise Esteban and Dani Yoshida star as sultry Belyas. A housewife who is tired of her controlling husband takes a different turn when two young prostitutes rent their apartment. As she befriends the two, she begins to admire the sexual freedom they have.',
                'release_date' => '2025-02-07',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Carry-On',
                'overview' => 'An airport security officer races to outsmart a mysterious traveler forcing him to let a dangerous item slip onto a Christmas Eve flight.',
                'release_date' => '2024-12-05',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Conclave',
                'overview' => 'After the unexpected death of the Pope, Cardinal Lawrence is tasked with managing the covert and ancient ritual of electing a new one. Sequestered in the Vatican with the Catholic Church’s most powerful leaders until the process is complete, Lawrence finds himself at the center of a conspiracy that could lead to its downfall.',
                'release_date' => '2024-10-25',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Delinquent in Drag',
                'overview' => 'Does being the only guy in an all girl school sound like paradise? It might be, if the girls knew you were a guy, but to stay in school teenage pervert Banji can\'t let anyone find out his chromosomes don\'t match. Banji\'s status conscious parents want him to go to a good school, but not enough to spend the money on a good co-ed school. Now, in addition to studying math and science, Banji has to learn how to put on a bra and makeup. His life has become a living hell. Not only is he at the bottom of the social pecking order, he must also conceal his inner-masculinity from the pretty classmate girl who\'s stolen his heart while avoiding the female bullies who threaten to expose his less-than-feminine charms in the locker room.',
                'release_date' => '1992-08-21',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Despicable Me 4',
                'overview' => 'Gru and Lucy and their girls—Margo, Edith and Agnes—welcome a new member to the Gru family, Gru Jr., who is intent on tormenting his dad. Gru also faces a new nemesis in Maxime Le Mal and his femme fatale girlfriend Valentina, forcing the family to go on the run.',
                'release_date' => '2024-06-20',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'posters/Despicable Me 4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Dirty Angels',
                'overview' => 'During the United States\' 2021 withdrawal from Afghanistan, a group of female soldiers posing as medical relief are sent back in to rescue a group of kidnapped teenagers caught between ISIS and the Taliban.',
                'release_date' => '2024-12-11',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Dog Man',
                'overview' => 'When a faithful police dog and his human police officer owner are injured together on the job, a harebrained but life-saving surgery fuses the two of them together and Dog Man is born. Dog Man is sworn to protect and serve—and fetch, sit and roll over. As Dog Man embraces his new identity and strives to impress his Chief, he must stop the pretty evil plots of feline supervillain Petey the Cat.',
                'release_date' => '2025-01-24',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Eye for an Eye 2',
                'overview' => 'The blind swordsman, skilled in martial arts, named Cheng Xiazi (Xie Miao), accidentally saves Zhang Xiaoyu (Yang Enyou), who has suffered from the destruction of his family. Under the persuasion of the orphan Xiaoyu, Cheng reluctantly keeps him by his side and teaches him skills. Xiaoyu also waits for the opportunity to seek revenge.',
                'release_date' => '2024-07-21',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Ferry 2',
                'overview' => 'After losing his drug empire, Ferry Bouman has found a measure of peace away from Brabant\'s criminal underworld — until his past catches up to him.',
                'release_date' => '2024-12-19',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Flight Risk',
                'overview' => 'A U.S. Marshal escorts a government witness to trial after he\'s accused of getting involved with a mob boss, only to discover that the pilot who is transporting them is also a hitman sent to assassinate the informant. After they subdue him, they\'re forced to fly together after discovering that there are others attempting to eliminate them.',
                'release_date' => '2025-01-22',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Heretic',
                'overview' => 'Two young missionaries are forced to prove their faith when they knock on the wrong door and are greeted by a diabolical Mr. Reed, becoming ensnared in his deadly game of cat-and-mouse.',
                'release_date' => '2024-10-31',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Inside Out 2',
                'overview' => 'Teenager Riley\'s mind headquarters is undergoing a sudden demolition to make room for something entirely unexpected: new Emotions! Joy, Sadness, Anger, Fear and Disgust, who’ve long been running a successful operation by all accounts, aren’t sure how to feel when Anxiety shows up. And it looks like she’s not alone.',
                'release_date' => '2024-06-11',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Interstellar',
                'overview' => 'The adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.',
                'release_date' => '2014-11-05',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Kingdom of the Planet of the Apes',
                'overview' => 'Several generations following Caesar\'s reign, apes – now the dominant species – live harmoniously while humans have been reduced to living in the shadows. As a new tyrannical ape leader builds his empire, one young ape undertakes a harrowing journey that will cause him to question all he\'s known about the past and to make choices that will define a future for apes and humans alike.',
                'release_date' => '2024-05-08',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Kraven the Hunter',
                'overview' => 'Kraven Kravinoff\'s complex relationship with his ruthless gangster father, Nikolai, starts him down a path of vengeance with brutal consequences, motivating him to become not only the greatest hunter in the world, but also one of its most feared.',
                'release_date' => '2024-12-11',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Lembayung',
                'overview' => 'Arum and Pica, who wanted to complete their internship at Lembayung hospital, had to face mysterious terror from a woman satan who was suspected of hanged herself in the bathroom. The situation became even more tense after they asked others for help to the point where they threatened their own lives and those closest to them.',
                'release_date' => '2024-09-19',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Memoir of a Snail',
                'overview' => 'Forcibly separated from her twin brother when they are orphaned, a melancholic misfit learns how to find confidence within herself amid the clutter of misfortunes and everyday life.',
                'release_date' => '2024-10-17',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Panda Plan',
                'overview' => 'International action star Jackie Chan is invited to the adoption ceremony of a rare baby panda, but after an international crime syndicate attempts to kidnap the bear, Jackie has to save the bear using his stunt work skills.',
                'release_date' => '2024-10-01',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Pleasure',
                'overview' => '19 year old Linnéa leaves her small town in Sweden and heads for Los Angeles with the aim of becoming the world\'s next big porn star, but the road to her goal turns out to be bumpier than she imagined.',
                'release_date' => '2021-10-08',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Rita',
                'overview' => 'Rita, who finds herself alone when husband Ariel works abroad. They both find solace and sexual satisfaction in other people. When Ariel comes back, they both act like nothing happened. But will this keep their marriage from falling apart?',
                'release_date' => '2024-03-22',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'River of Blood',
                'overview' => 'Four kayakers take the wrong river into a jungle inhabited by a tribe of merciless cannibals.',
                'release_date' => '2024-08-29',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Sidelined: The QB and Me',
                'overview' => 'Dallas, a burdened but headstrong dancer, is determined to get into the best dance school in the country—her late mother’s alma mater. However, that dream is suddenly derailed when the cheeky yet secretly grieving football star, Drayton, crashes into her life with a unique story of his own. Will the two of them be able to grow into their dreams together, or will their dreams be sidelined?',
                'release_date' => '2025-02-06',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Skin. Like. Sun.',
                'overview' => 'Real-life young couple Wim and Floor spend an afternoon in the sunwashed rooms of a crumbling home in Belgium. In a unique twist, this artistic erotic documentary is edited in nearly real-time. In the slowness, we get the build, the sweetness, and the sexiness. Forget about fingersnapping fast editing. Slow is where it’s at.',
                'release_date' => '2010-02-19',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Smile 2',
                'overview' => 'About to embark on a new world tour, global pop sensation Skye Riley begins experiencing increasingly terrifying and inexplicable events. Overwhelmed by the escalating horrors and the pressures of fame, Skye is forced to face her dark past to regain control of her life before it spirals out of control.',
                'release_date' => '2024-10-16',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Terrifier 3',
                'overview' => 'Five years after surviving Art the Clown\'s Halloween massacre, Sienna and Jonathan are still struggling to rebuild their shattered lives. As the holiday season approaches, they try to embrace the Christmas spirit and leave the horrors of the past behind. But just when they think they\'re safe, Art returns, determined to turn their holiday cheer into a new nightmare. The festive season quickly unravels as Art unleashes his twisted brand of terror, proving that no holiday is safe.',
                'release_date' => '2024-10-09',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Ballad of Davy Crockett',
                'overview' => 'In 1815, an American Legend, whose wife has fallen deathly ill, leaving his young children to survive on their own, must fight his way back to them across the many perils found in the Savage Lands of the wild frontier.',
                'release_date' => '2024-03-08',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe',
                'overview' => 'Siblings Lucy, Edmund, Susan and Peter step through a magical wardrobe and find the land of Narnia. There, they discover a charming, once peaceful kingdom that has been plunged into eternal winter by the evil White Witch, Jadis. Aided by the wise and magnificent lion, Aslan, the children lead Narnia into a spectacular, climactic battle to be free of the Witch\'s glacial powers forever.',
                'release_date' => '2005-12-07',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Price of Money: A Largo Winch Adventure',
                'overview' => 'Largo Winch, devastated by the kidnapping of his son, realizes that if he finds those responsible for his bankruptcy, maybe he\'ll see his son again.',
                'release_date' => '2024-07-31',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Substance',
                'overview' => 'A fading celebrity decides to use a black market drug, a cell-replicating substance that temporarily creates a younger, better version of herself.',
                'release_date' => '2024-09-07',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Transformers One',
                'overview' => 'The untold origin story of Optimus Prime and Megatron, better known as sworn enemies, but once were friends bonded like brothers who changed the fate of Cybertron forever.',
                'release_date' => '2024-09-11',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Venom: The Last Dance',
                'overview' => 'Eddie and Venom are on the run. Hunted by both of their worlds and with the net closing in, the duo are forced into a devastating decision that will bring the curtains down on Venom and Eddie\'s last dance.',
                'release_date' => '2024-10-22',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Wallace & Gromit: Vengeance Most Fowl',
                'overview' => 'Gromit’s concern that Wallace is becoming too dependent on his inventions proves justified, when Wallace invents a “smart” gnome that seems to develop a mind of its own. When it emerges that a vengeful figure from the past might be masterminding things, it falls to Gromit to battle sinister forces and save his master… or Wallace may never be able to invent again!',
                'release_date' => '2024-12-18',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Werewolves',
                'overview' => 'A year after a supermoon’s light activated a dormant gene, transforming humans into bloodthirsty werewolves and causing nearly a billion deaths, the nightmare resurfaces as the supermoon rises again. Two scientists attempt to stop the mutation but fail and must now struggle to reach one of their family homes.',
                'release_date' => '2024-12-04',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Wolf Man',
                'overview' => 'With his marriage fraying, Blake persuades his wife Charlotte to take a break from the city and visit his remote childhood home in rural Oregon. As they arrive at the farmhouse in the dead of night, they\'re attacked by an unseen animal and barricade themselves inside the home as the creature prowls the perimeter. But as the night stretches on, Blake begins to behave strangely, transforming into something unrecognizable.',
                'release_date' => '2025-01-15',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'xXx',
                'overview' => 'Xander Cage is your standard adrenaline junkie with no fear and a lousy attitude. When the US Government "recruits" him to go on a mission, he\'s not exactly thrilled. His mission: to gather information on an organization that may just be planning the destruction of the world, led by the nihilistic Yorgi.',
                'release_date' => '2002-08-09',
                'trailer_file_path' => 'https://www.youtube.com/watch?v=T2zCkaIOmJg',
                'poster_file_path' => 'uploads/Movie.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('movie')->insert($movies);
    }
}
