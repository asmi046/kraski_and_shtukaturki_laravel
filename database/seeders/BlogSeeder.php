<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("post1.jpg", file_get_contents(public_path('public/blog/post1.jpg')), 'public');

        $main_data = [
            [
                'title' => "Венецианская штукатурка: особенности отделки углов",
                'slug' => Str::slug("Венецианская штукатурка: особенности отделки углов"),
                'text' => file_get_contents(base_path() . "/public/blog/post1.html"),
                'img' => Storage::url("post1.jpg"),
                'seo_title' => "Венецианская штукатурка: особенности отделки углов",
                'seo_description' => "Статья рассказывает об особенностях отделки углов при нанесении венецианской штукатурки."
            ],

            [
                'title' => "Уход за декоративными покрытиями на стенах",
                'slug' => Str::slug("Уход за декоративными покрытиями на стенах"),
                'text' => file_get_contents(base_path() . "/public/blog/post2.html"),
                'img' => Storage::url("post2.jpg"),
                'seo_title' => "Уход за декоративными покрытиями на стенах",
                'seo_description' => "Статья рассказывает об общих правилах и особенностях ухода за декоративными покрытиями на стенах, чтобы они служили долго и сохраняли первоначальный вид."
            ],
        ];

        $i = 1;
        foreach ($main_data as $item) {
            DB::table("blogs")->insert($item);
            $i++;
        }
    }
}
