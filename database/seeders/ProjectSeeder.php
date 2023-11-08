<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("p1_1.jpg", file_get_contents(public_path('portfolio/project_1/p1_1.jpg')), 'public');
        Storage::disk('public')->put("p1_2.jpg", file_get_contents(public_path('portfolio/project_1/p1_2.jpg')), 'public');
        Storage::disk('public')->put("p1_3.jpg", file_get_contents(public_path('portfolio/project_1/p1_3.jpg')), 'public');
        Storage::disk('public')->put("p1_4.jpg", file_get_contents(public_path('portfolio/project_1/p1_4.jpg')), 'public');
        Storage::disk('public')->put("p1_5.jpg", file_get_contents(public_path('portfolio/project_1/p1_5.jpg')), 'public');
        Storage::disk('public')->put("p1_6.jpg", file_get_contents(public_path('portfolio/project_1/p1_6.jpg')), 'public');
        Storage::disk('public')->put("p1_7.jpg", file_get_contents(public_path('portfolio/project_1/p1_7.jpg')), 'public');

        Storage::disk('public')->put("p2_1.jpg", file_get_contents(public_path('portfolio/project_2/p2_1.jpg')), 'public');
        Storage::disk('public')->put("p2_2.jpg", file_get_contents(public_path('portfolio/project_2/p2_2.jpg')), 'public');
        Storage::disk('public')->put("p2_3.jpg", file_get_contents(public_path('portfolio/project_2/p2_3.jpg')), 'public');
        Storage::disk('public')->put("p2_4.jpg", file_get_contents(public_path('portfolio/project_2/p2_4.jpg')), 'public');

        Storage::disk('public')->put("p3_1.jpg", file_get_contents(public_path('portfolio/project_3/p3_1.jpg')), 'public');
        Storage::disk('public')->put("p3_2.jpg", file_get_contents(public_path('portfolio/project_3/p3_2.jpg')), 'public');

        Storage::disk('public')->put("p4_1.jpg", file_get_contents(public_path('portfolio/project_4/p4_1.jpg')), 'public');
        Storage::disk('public')->put("p4_2.jpg", file_get_contents(public_path('portfolio/project_4/p4_2.jpg')), 'public');

        $main_data = [
            [
                "title" => "Известковая декоративная штукатурка от San Marco - Интонакино Минерале (квартира в Москве)",
                "description" => "",
                "img" => Storage::url("p1_1.jpg"),
                "img1" => Storage::url("p1_2.jpg"),
                "img2" => Storage::url("p1_3.jpg"),
                "img3" => Storage::url("p1_4.jpg"),
                "img4" => Storage::url("p1_5.jpg"),
                "img5" => Storage::url("p1_6.jpg"),
                "img6" => Storage::url("p1_7.jpg"),
            ],

            [
                "title" => 'Антика Кальче+ с Велатурой и патиной "Хамелеон" (квартира в Москве)',
                "description" => "",
                "img" => Storage::url("p2_1.jpg"),
                "img1" => Storage::url("p2_2.jpg"),
                "img2" => Storage::url("p2_3.jpg"),
                "img3" => Storage::url("p2_4.jpg"),
            ],

            [
                "title" => 'Декоративное покрытие Оптима (дом в Курске)',
                "description" => "",
                "img" => Storage::url("p3_1.jpg"),
                "img1" => Storage::url("p3_2.jpg"),
            ],

            [
                "title" => 'Интонакино Минерале + Велатура (квартира в Курске)',
                "description" => "",
                "img" => Storage::url("p4_1.jpg"),
                "img1" => Storage::url("p4_2.jpg"),
            ],

        ];

        $i = 1;
        foreach ($main_data as $item) {

            DB::table("projects")->insert($item);
            $i++;
        }
    }
}
