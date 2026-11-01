<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    private const SCHEDULES = [
        'fall-schedule-8-30-25-a.jpg' => ['fall-schedule-2026-10-28-preschool.png', '2026–27 preschool program class schedule'],
        'fall-schedule-8-30-25-b.jpg' => ['fall-schedule-2026-10-28-children.png', '2026–27 children’s program class schedule, ages 5 and up'],
        'fall-schedule-8-30-25-c.jpg' => ['fall-schedule-2026-10-28-leveled.png', '2026–27 leveled class schedule, ages 7 and up'],
        'fall-schedule-8-30-25-d.jpg' => ['fall-schedule-2026-10-28-specialty-teen.png', '2026–27 specialty and teen class schedule'],
    ];

    public function up(): void
    {
        $this->updateSchedules(false);
    }

    public function down(): void
    {
        $this->updateSchedules(true);
    }

    private function updateSchedules(bool $rollback): void
    {
        DB::table('pages')->whereIn('slug', ['classes', 'preschool-dance-classes-plano'])
            ->get()->each(function ($page) use ($rollback) {
                $content = json_decode($page->content, true, 512, JSON_THROW_ON_ERROR);
                $changed = false;

                foreach ($content['sections'] as &$section) {
                    if (($section['type'] ?? '') !== 'image_grid') {
                        continue;
                    }

                    foreach ($section['images'] as &$image) {
                        $src = str_replace('\\/', '/', $image['src'] ?? '');
                        foreach (self::SCHEDULES as $old => [$new, $alt]) {
                            if ($src === '/images/' . ($rollback ? $new : $old)) {
                                $image['src'] = '/images/' . ($rollback ? $old : $new);
                                $image['alt'] = $rollback ? 'class schedule' : $alt;
                                $changed = true;
                                break;
                            }
                        }
                    }
                    unset($image);
                }
                unset($section);

                if ($changed) {
                    DB::table('pages')->where('id', $page->id)->update([
                        'content' => json_encode($content, JSON_THROW_ON_ERROR),
                        'updated_at' => now(),
                    ]);
                }
            });
    }
};
