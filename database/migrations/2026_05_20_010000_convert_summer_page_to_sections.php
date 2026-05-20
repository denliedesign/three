<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $page = DB::table('pages')->where('slug', 'summer')->first();

        if (! $page) {
            return;
        }

        $content = json_decode($page->content, true) ?: [];

        if (isset($content['sections'])) {
            return;
        }

        DB::table('pages')
            ->where('slug', 'summer')
            ->update([
                'content' => json_encode([
                    'banner' => $content['banner'] ?? [
                        'image' => 'summer-dance-plano.jpg',
                        'alt' => '',
                        'position' => '50% 35%',
                        'heading' => 'Summer Dance in Plano',
                    ],
                    'sections' => [
                        [
                            'type' => 'rich_text',
                            'body' => $content['intro'] ?? '',
                        ],
                        [
                            'type' => 'button_group',
                            'buttons' => [
                                $content['button'] ?? [
                                    'label' => 'Register Now',
                                    'url' => 'https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login',
                                ],
                            ],
                        ],
                        [
                            'type' => 'image_grid',
                            'columns' => 1,
                            'images' => $content['images'] ?? [],
                        ],
                    ],
                ]),
                'updated_at' => now(),
            ]);
    }

    public function down(): void
    {
        $page = DB::table('pages')->where('slug', 'summer')->first();

        if (! $page) {
            return;
        }

        $content = json_decode($page->content, true) ?: [];
        $sections = $content['sections'] ?? [];

        DB::table('pages')
            ->where('slug', 'summer')
            ->update([
                'content' => json_encode([
                    'banner' => $content['banner'] ?? [
                        'image' => 'summer-dance-plano.jpg',
                        'alt' => '',
                        'position' => '50% 35%',
                        'heading' => 'Summer Dance in Plano',
                    ],
                    'intro' => $sections[0]['body'] ?? '',
                    'button' => $sections[1]['buttons'][0] ?? [
                        'label' => 'Register Now',
                        'url' => 'https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login',
                    ],
                    'images' => $sections[2]['images'] ?? [],
                ]),
                'updated_at' => now(),
            ]);
    }
};
