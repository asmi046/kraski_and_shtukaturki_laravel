<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if (!function_exists("get_ed")) {
    function get_ed($str) {
        if (strripos($str, " кг") !== false) return 'кг';
        if (strripos($str, " л") !== false) return 'л';
        if (strripos($str, " г") !== false) return 'г';

        return "";
    }
}

if (!function_exists("effect_get")) {
    function effect_get($str) {
        // 1 "Муаровый шёлк" => "muar-sholk.webp",
        // 2 "Велюр, Вельвет, матовый шёлк" => "velur.webp",
        // 3 "Перламутровый шёлк" => "perl-shok.webp",
        // 4 "Искрящийся бархат" => "iskr-barhat.webp",
        // 5 "Кожа, замша" => "zamha.webp",
        // 6 "Песчаный перламутр" => "peshani-perla.webp",
        // 7 "Песчаный матовый" => "peshani-mat.webp",
        // 8 "Металлик" => "metamik.webp",
        // 9 "Бетон" => "beton.webp",
        // 10 "Травертин" => "travertin.webp",
        // 11 "Шлифованный, глянцевый камень" => "kamen-gl.webp",
        // 12 "Рустик, мазанка" => "rust.webp",
        // 13 "Карта мира" => "world.webp",
        // 14 "Гротто, мароканка" => "grotto.webp",



        if (strripos($str, "Cadoro Velvet") !== false) return [2];
        if (strripos($str, "Cadoro") !== false) return [1];
        if (strripos($str, "Easy Art") !== false) return [1];
        if (strripos($str, "Cavenier") !== false) return [4];
        if (strripos($str, "Marcopolo Luxury") !== false) return [6];
        if (strripos($str, "Marcopolo") !== false) return [7];
        if (strripos($str, "Fontego") !== false) return [7];
        if (strripos($str, "Intonachino Minerale") !== false) return [10,11,13,9];
        if (strripos($str, "Marmorino Classico") !== false) return [11];

        if (strripos($str, "Decorazza Barilievo") !== false) return [14];
        if (strripos($str, "Decorazza Traverta") !== false) return [13,10];
        if (strripos($str, "Decorazza Sollievo") !== false) return [12];

        if (strripos($str, "Decorazza Stucco Veneziano") !== false) return [11];
        if (strripos($str, "Decorazza Calce Veneziana") !== false) return [11];
        if (strripos($str, "Decorazza Travertino") !== false) return [10];
        if (strripos($str, "Decorazza Effetto metallico") !== false) return [8];
        if (strripos($str, "Decorazza Brezza") !== false) return [7];
        if (strripos($str, "Decorazza Lucetezza") !== false) return [6];
        if (strripos($str, "Decorazza Alcantara") !== false) return [5];
        if (strripos($str, "Decorazza Velours") !== false) return [2];
        if (strripos($str, "Decorazza Velluto") !== false) return [1];
        if (strripos($str, "Art beton") !== false) return [9];

        if (strripos($str, "Decorazza Seta") !== false) return [3];



        return [];
    }
}

if (!function_exists("get_facturas")) {
    function get_facturas($str) {
        return "";
    }
}

// Фейковые аватары

if (!function_exists("load_fake_avatar_img")) {
    function load_fake_avatar_img():string {
        $name = "avatar_".rand(1, 5).".jpg";
        Storage::disk('public')->put($name, file_get_contents(public_path("faker_img/avatars/" . $name)), 'public');
        return Storage::url($name);
    }
}

if (!function_exists("value_check")) {
    function value_check($nameparam = null, $find = null, $default = null) {
        $value = Request::input($nameparam);
        if ($value == null)
            return $default;

        if (is_array($value)) {
            return in_array($find, $value);
        } else {
            return $value;
        }
    }
}


if (!function_exists("phone_format")) {
    function phone_format($phone)
    {
        $phone = trim($phone);

        $res = preg_replace(
            array(
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{3})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?(\d{3})[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{3})/',
                '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{3})[-|\s]?(\d{3})/',
            ),
            array(
                '$2$3$4$5',
                '$2$3$4$5',
                '$2$3$4$5',
                '$2$3$4$5',
                '$2$3$4',
                '$2$3$4',
            ),
            $phone
        );

        return $res;
    }
}
