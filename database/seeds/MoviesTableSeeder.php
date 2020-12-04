<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            ['genre_id' => 1, 'title' => 'Its Okay Not To Be Okay', 'photo' => 'itsokaynottobeokay.jpg',
            'description' => 'A road to emotional healing opens up for an antisocial children\'s book author and an employee in a psychiatric hospital.',
            'rating' => 5],
            ['genre_id' => 1, 'title' => 'Crash Landing On You', 'photo' => 'crashlandingonyou.jpg',
            'description' => 'A paragliding mishap drops a South Korean heiress in North Korea - and into the life of an army officer, who decides he will help her hide.',
            'rating' => 5],
            ['genre_id' => 1, 'title' => 'Itaewon Class', 'photo' => 'itaewonclass.jpg',
            'description' => 'An ex-con and his friends fight to make their ambitious dreams for their street bar a reality.',
            'rating' => 5],
            ['genre_id' => 1, 'title' => 'Start Up', 'photo' => 'startup.jpg',
            'description' => 'Seo Dal Mi has dreams of becoming Korea\'s own Steve Jobs, and with her genius first love, an investor, and a business insider by her side, her dream may be closer than she thinks.',
            'rating' => 4],
            ['genre_id' => 1, 'title' => 'The King: Eternal Monarch', 'photo' => 'theking.jpg',
            'description' => 'Korean emperor Lee Gon tries to close the doors to a parallel world which was opened by demons; a detective tries to protect the people and the one she loves.',
            'rating' => 4],
            ['genre_id' => 2, 'title' => 'The Boss Baby', 'photo' => 'thebossbaby.jpg',
            'description' => 'Seven-year-old Tim gets jealous when his parents give all their attention to his little brother. Tim soon learns that the baby can talk and the two team up to foil the plans of the CEO of Puppy Co.',
            'rating' => 4],
            ['genre_id' => 2, 'title' => 'Frozen', 'photo' => 'frozen.jpg',
            'description' => 'Anna sets out on a journey with an iceman, Kristoff, and his reindeer, Sven, in order to find her sister, Elsa, who has the power to convert any object or person into ice.',
            'rating' => 4],
            ['genre_id' => 2, 'title' => 'Frozen 2', 'photo' => 'frozen2.jpg',
            'description' => ' After hearing a mysterious voice call out to her, Elsa travels to the enchanted forests and dark seas beyond her kingdom -- an adventure that soon turns into a journey of self-discovery.',
            'rating' => 5],
            ['genre_id' => 2, 'title' => 'Despicable Me', 'photo' => 'despicableme.jpg',
            'description' => 'Gru, a criminal mastermind, adopts three orphans as pawns to carry out the biggest heist in history. His life takes an unexpected turn when the little girls see him as their potential father.',
            'rating' => 4],
            ['genre_id' => 2, 'title' => 'Kung Fu Panda 3', 'photo' => 'kungfupanda3.jpg',
            'description' => 'The Dragon Warrior, Po, has to deal with challenges galore when circumstances compel him to train a bunch of awkward pandas in martial arts so that they can trounce Kai, a wicked supernatural warrior.',
            'rating' => 3],
            ['genre_id' => 3, 'title' => 'Grey\'s Anatomy Season 16', 'photo' => 'greysanatomy.jpg',
            'description' => 'Surgical interns and their supervisors embark on a medical journey where they become part of heart-wrenching stories and make life-changing decisions in order to become the finest doctors.',
            'rating' => 4],
            ['genre_id' => 3, 'title' => 'Friends', 'photo' => 'friends.jpg',
            'description' => 'Follow the lives of six reckless adults living in Manhattan, as they indulge in adventures which make their lives both troublesome and happening.',
            'rating' => 4],
            ['genre_id' => 3, 'title' => 'Superstore Season 1', 'photo' => 'superstore.jpg',
            'description' => 'A group of employees working at Cloud 9, a big-box store in St Louis, Missouri, faces several challenges while dealing with customers and at the same time attending to their personal requirements.',
            'rating' => 4],
        ]);
    }
}
