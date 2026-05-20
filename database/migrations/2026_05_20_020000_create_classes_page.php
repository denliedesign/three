<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('pages')->updateOrInsert(
            ['slug' => 'classes'],
            [
                'title' => 'Preschool Dance Classes | Studio 3 Dance Plano TX',
                'meta_description' => "Discover the joy of dance at Studio 3 Dance in Plano, Texas! We offer engaging and fun preschool dance classes and toddler dance classes to nurture your child's passion for movement. Join our supportive dance community and watch your little one shine on the dance floor. Enroll today!",
                'content' => json_encode([
                    'banner' => [
                        'image' => 'banner-leveled.jpg',
                        'alt' => 'staff member leading young dancers in ballet',
                        'position' => '50% 10%',
                        'heading' => 'Leveled Classes',
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
                                    'src' => '/images/fall-schedule-8-30-25-c.jpg',
                                    'alt' => 'class schedule',
                                ],
                                [
                                    'src' => '/images/fall-schedule-8-30-25-d.jpg',
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
                    ],
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }

    public function down(): void
    {
        DB::table('pages')->where('slug', 'classes')->delete();
    }
};
