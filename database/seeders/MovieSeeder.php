<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie; 

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert movie records with image paths
        $moviesData = [
            [
                'image' => 'GOTG3.jpeg',
                'movieTitle' => 'Guardians Of The Galaxy Vol. 3',
                'movieDesc' => 'Still reeling from the loss of Gamora, Peter Quill rallies his team to defend the universe and one of their own - a mission that could mean the end of the Guardians if not successful.',
                'overall' => '5',
                'genre_id' => '4'
            ],
            [
                'image' => 'Aladdin.jpg',
                'movieTitle' => 'Aladdin',
                'movieDesc' => 'A kind-hearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.',
                'overall' => '5',
                'genre_id' => '5' 
            ],
            [
                'image' => 'cinderella.jpg',
                'movieTitle' => 'Cinderella (2021)',
                'movieDesc' => 'A modern movie musical with a bold take on the classic fairy tale. Our ambitious heroine has big dreams and with the help of her fab Godmother, she perseveres to make them come true.',
                'overall' => '5',
                'genre_id' => '3' 
            ],
            [
                'image' => 'cruella.jpg',
                'movieTitle' => 'Cruella',
                'movieDesc' => 'Cruella" is a live-action film that explores the origins of the iconic Disney villain, Cruella de Vil, from "101 Dalmatians." Set in 1970s London, it follows the journey of Estella, a young and talented aspiring fashion designer with a flair for the dramatic. As she delves deeper into the world of fashion, her ambition leads her to embrace her darker, rebellious side, transforming into the daring and extravagant Cruella. The film reveals her complex motivations, struggles, and the evolution of her persona, showcasing her journey from Estella to the infamous Cruella de Vil.',
                'overall' => '5',
                'genre_id' => '1' 
            ],
            [
                'image' => 'deep.jpg',
                'movieTitle' => 'Deep',
                'movieDesc' => 'Four insomniac med school students are lured into a neuroscience experiment that spirals out of control and must find a way out before it\'s too late.',
                'overall' => '5',
                'genre_id' => '7' 
            ],
            [
                'image' => 'fivefeetapart.jpg',
                'movieTitle' => 'Five Feet Apart',
                'movieDesc' => 'The movie revolves around two teenagers with cystic fibrosis, Stella (played by Richardson) and Will (played by Sprouse). They meet while receiving treatment at a hospital and develop a deep connection despite the strict rule that they must maintain a certain distance (five feet apart) from each other to avoid cross-infection due to their illness. Despite the challenges, they find ways to support each other emotionally and navigate their budding romance while coping with the limitations imposed by their condition.',
                'overall' => '5',
                'genre_id' => '5' 
            ],
            [
                'image' => 'kiminonawa.jpg',
                'movieTitle' => 'Kimi no Nawa (Your Name)',
                'movieDesc' => '"Your Name" revolves around Mitsuha and Taki, two teenagers who unexpectedly start switching bodies. Without any explanation, they live each other\'s lives intermittently, navigating challenges and leaving messages for one another. As they try to understand this inexplicable connection, they grow closer, leading to an emotional and cosmic journey that transcends distance and time.',
                'overall' => '5',
                'genre_id' => '6' 
            ],
            [
                'image' => 'mancalledotto.jpg',
                'movieTitle' => 'A Man Called Otto',
                'movieDesc' => 'A story of Ove, a grumpy and rigid man who\'s recently widowed. He\'s ready to end his life, but his plans are repeatedly interrupted by the new neighbors and unforeseen events. As he reluctantly engages with his community, unexpected friendships form, revealing his compassionate and kind-hearted nature beneath the gruff exterior. Through these connections, Ove finds purpose and a renewed sense of belonging.',
                'overall' => '5',
                'genre_id' => '1' 
            ],
            [
                'image' => 'oppenheimer.jpg',
                'movieTitle' => 'Oppenheimer',
                'movieDesc' => '"Oppenheimer" typically refers to J. Robert Oppenheimer, an American physicist known for his leadership in the Manhattan Project during World War II, which led to the development of the atomic bomb. He\'s often remembered for his contributions to science, his conflicted feelings about the use of nuclear weapons, and the ethical dilemmas associated with their creation. His life and work remain significant in the history of science and the ethical considerations surrounding scientific advancements.',
                'overall' => '5',
                'genre_id' => '7' 
            ],
            [
                'image' => 'quietplace2.jpg',
                'movieTitle' => 'A Quiet Place Part II',
                'movieDesc' => 'Following the events at home, the Abbott family now face the terrors of the outside world. Forced to venture into the unknown, they realize the creatures that hunt by sound are not the only threats lurking beyond the sand path.',
                'overall' => '5',
                'genre_id' => '2' 
            ],
            [
                'image' => 'thedoorintosummer.jpg',
                'movieTitle' => 'The Door into Summer',
                'movieDesc' => 'An inventor of robotics technology is robbed by his girlfriend and business partner and sent to the future via cryogenic sleep. But when he awakes 30 years later, he is assisted by a humanoid robot originally his own creation.',
                'overall' => '5',
                'genre_id' => '8' 
            ],
            [
                'image' => 'thehalfofit.jpg',
                'movieTitle' => 'The Half of It',
                'movieDesc' => 'When smart but cash-strapped teen Ellie Chu agrees to write a love letter for a jock, she doesn\'t expect to become his friend - or fall for his crush.',
                'overall' => '5',
                'genre_id' => '1' 
            ],
            [
                'image' => 'thetunneltosummer.jpg',
                'movieTitle' => 'The Tunnel to Summer, the Exit of Goodbyes',
                'movieDesc' => 'Kaoru Tono heard a rumor: The laws of space and time mean nothing to the Urashima Tunnel. If you find it, walk through and you\'ll find your heart\'s desire on the other side...in exchange for years of your own life.',
                'overall' => '5',
                'genre_id' => '6' 
            ],
            [
                'image' => 'transcendence.jpg',
                'movieTitle' => 'Transcendence',
                'movieDesc' => 'A scientist\'s drive for artificial intelligence takes on dangerous implications when his own consciousness is uploaded into one such program.',
                'overall' => '5',
                'genre_id' => '8' 
            ],
            [
                'image' => 'turningred.jpg',
                'movieTitle' => 'Turning Red',
                'movieDesc' => 'The story follows a 13-year-old girl named Mei Lee, who experiences a magical transformation whenever she gets too excited or stressed—turning into a giant red panda. As she navigates the challenges of adolescence, including family expectations and friendship dynamics, Mei Lee learns to embrace herself, her family\'s heritage, and the power of self-acceptance. The movie beautifully weaves themes of identity, growing up, and the bonds between family and friends.',
                'overall' => '5',
                'genre_id' => '6' 
            ],
        ];

        foreach ($moviesData as $movieData) {
            Movie::create($movieData);
        }
    }
}
