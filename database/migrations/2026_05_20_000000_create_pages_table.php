<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('meta_description')->nullable();
            $table->json('content');
            $table->timestamps();
        });

        DB::table('pages')->insert([
            'slug' => 'summer',
            'title' => 'Summer Dance Camps Workshops & Classes | Studio 3 Dance Plano TX',
            'meta_description' => null,
            'content' => json_encode([
                'banner' => [
                    'image' => 'summer-dance-plano.jpg',
                    'alt' => '',
                    'position' => '50% 35%',
                    'heading' => 'Summer Dance in Plano',
                ],
                'intro' => "Welcome to Studio 3 Dance's ultimate summer dance experience! This June and July, young dancers can ignite their passion for movement with our all-inclusive programs-featuring dynamic summer dance camps, focused summer dance intensives, creative summer dance workshops, and engaging summer dance classes in Plano. Each option is designed to inspire creativity, build confidence, and nurture talent in a fun, supportive environment. Join us to make your summer truly unforgettable!",
                'button' => [
                    'label' => 'Register Now',
                    'url' => 'https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login',
                ],
                'images' => [
                    [
                        'src' => '/images/26-summer-graphic.png',
                        'alt' => 'summer dance class info',
                    ],
                    [
                        'src' => '/images/26-summer.jpg',
                        'alt' => 'summer dance class info',
                    ],
                    [
                        'src' => '/images/26-summer-2.jpg',
                        'alt' => 'summer dance class info',
                    ],
                ],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
