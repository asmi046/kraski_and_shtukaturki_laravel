<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        php_uname();

        // if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {

        DB::table("options")->insert(
            [
                [
                    "name" => "policy",
                    "type" => "rich",
                    'title' => 'Политика конфиденциальности',
                    "value" => file_get_contents(public_path('base//texts//policy.txt')),
                ],

                [
                    "name" => "about_main",
                    "type" => "rich",
                    'title' => 'О нас на главной',
                    "value" => file_get_contents(public_path('base//texts//about.txt')),
                ],

                [
                    "name" => "about",
                    "type" => "rich",
                    'title' => 'О компании',
                    "value" => "Lorem Ipsum - это текст-рыба, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной  для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.",
                ],

                [
                    "name" => "adress",
                    "type" => "plan",
                    'title' => 'Адрес',
                    "value" => "Карла Маркса, 72 корпус 18",
                ],

                [
                    "name" => "phone",
                    "type" => "plan",
                    'title' => 'Телефон',
                    "value" => "+7 (920) 710 25 55",
                ],

                [
                    "name" => "email",
                    "type" => "plan",
                    'title' => 'e-mail',
                    "value" => "info@florida46.ru",
                ],

                [
                    "name" => "email_send",
                    "type" => "plan",
                    'title' => 'e-mail для отправки',
                    "value" => "info@florida46.ru, asmi046@gmail.com",
                ],

                [
                    "name" => "telegram_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка Telegram',
                    "value" => "tg://resolve?domain=floridasfl",
                ],

                [
                    "name" => "vk_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка Vk',
                    "value" => "https://vk.com/florida46kursk",
                ],
            ]);
    }
}
