<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('pages')->updateOrInsert(
            ['slug' => 'preschool-dance-classes-plano'],
            [
                'title' => 'Preschool Dance Classes | Studio 3 Dance Plano TX',
                'meta_description' => "Discover the joy of dance at Studio 3 Dance in Plano, Texas! We offer engaging and fun preschool dance classes and toddler dance classes to nurture your child's passion for movement. Join our supportive dance community and watch your little one shine on the dance floor. Enroll today!",
                'content' => json_encode([
                    'banner' => [
                        'image' => 'banner-childrens.jpg',
                        'alt' => 'staff member leading young dancers in stretches',
                        'position' => '50% 30%',
                        'heading' => "Children's Dance Classes",
                    ],
                    'sections' => [
                        [
                            'type' => 'rich_text',
                            'body' => 'Studio 3 takes pride in creating a learning experience that is positive and rewarding for dancers of all ages & levels. We offer a diverse schedule of dance classes in Plano, TX for children ages 18 months and up year round. Our main dance season runs from mid August through the end of May. To get the most out of your dance year, enrollment at the beginning of our season is best.',
                        ],
                        [
                            'type' => 'button_group',
                            'buttons' => [
                                [
                                    'label' => 'Register Now',
                                    'url' => 'https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login',
                                ],
                            ],
                        ],
                        [
                            'type' => 'image_grid',
                            'columns' => 2,
                            'images' => [
                                [
                                    'src' => '/images/fall-schedule-8-30-25-a.jpg',
                                    'alt' => 'class schedule',
                                ],
                                [
                                    'src' => '/images/fall-schedule-8-30-25-b.jpg',
                                    'alt' => 'class schedule',
                                ],
                            ],
                        ],
                        [
                            'type' => 'image_grid',
                            'columns' => 1,
                            'images' => [
                                [
                                    'src' => '/images/pathways-8-30-25.png',
                                    'alt' => 'path',
                                ],
                            ],
                        ],
                        [
                            'type' => 'card_grid',
                            'columns' => 3,
                            'cards' => [
                                [
                                    'image' => '/images/prev/logo-ready-move.png',
                                    'title' => '',
                                    'subtitle' => 'ages 18 months - 3 years',
                                    'body' => '',
                                ],
                                [
                                    'image' => '/images/prev/logo-ready-acro.png',
                                    'title' => '',
                                    'subtitle' => 'I for ages 2 1/2 - 4 & II for ages 5 - 6',
                                    'body' => '',
                                ],
                                [
                                    'image' => '/images/prev/child-5.png',
                                    'title' => '',
                                    'subtitle' => 'Pink - 3+  |  Lilac - 4+  | Yellow - 5+',
                                    'body' => 'The TWIRL experience will add a little sparkle and merriment to our ballet and tap combo class one week per month. $30 supply fee includes a book, ribbon, rhinestones, and end of year certificate.',
                                ],
                                [
                                    'image' => '/images/prev/beginning-1.jpg',
                                    'title' => '',
                                    'subtitle' => 'ages 5 1/2 - 7',
                                    'body' => 'Introduces the young dancer to the steps and grace of ballet with barre, center work & combinations.',
                                ],
                                [
                                    'image' => '/images/prev/beginning-2.png',
                                    'title' => '',
                                    'subtitle' => 'ages 5 1/2 - 7',
                                    'body' => 'Introduces young dancers to the fun and rhythm of tap.' . PHP_EOL . 'Co-enrollment with ballet recommended.',
                                ],
                                [
                                    'image' => '/images/prev/beginning-3.jpg',
                                    'title' => '',
                                    'subtitle' => 'ages 5 1/2 - 7',
                                    'body' => 'Introduces the young dancer to jazz technique.' . PHP_EOL . 'Co-enrollment with ballet recommended.',
                                ],
                                [
                                    'image' => '/images/prev/hippity-hop.jpg',
                                    'title' => '',
                                    'subtitle' => 'ages 5+',
                                    'body' => 'Bounce along to the beat in this introductory hip hop class for kids!',
                                ],
                                [
                                    'image' => '/images/prev/musical-theater.jpg',
                                    'title' => '',
                                    'subtitle' => 'ages 5+',
                                    'body' => "Introduces jazz dancing and acting to music from Broadway's favorite musicals",
                                ],
                            ],
                        ],
                    ],
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }

    public function down(): void
    {
        DB::table('pages')->where('slug', 'preschool-dance-classes-plano')->delete();
    }
};
