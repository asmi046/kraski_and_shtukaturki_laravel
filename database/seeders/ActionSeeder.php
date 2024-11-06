<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("post3.webp", file_get_contents(public_path('base/blog/post3.webp')), 'public');

        $main_data = [
            [
                'created_at' => now(),
                'is_action' => true,
                'title' => "Новый каталог Microcemento Struttura",
                'slug' => Str::slug("Новый каталог Microcemento Struttura"),
                'text' => file_get_contents(base_path() . "/public/base/blog/post3.html"),
                'img' => Storage::url("post3.webp"),
                'seo_title' => "Новый каталог Microcemento Struttura",
                'seo_description' => "Новый каталог Microcemento Struttura"
            ],

        ];

        $i = 1;
        foreach ($main_data as $item) {
            DB::table("blogs")->insert($item);
            $i++;
        }
    }
}
