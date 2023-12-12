<?php

namespace App\Orchid\Screens\Effect;

use Orchid\Screen\Screen;

use App\Models\ColorEffect;
use App\Orchid\Layouts\Effect\EffectListTable;

use Orchid\Screen\Actions\Link;
use Orchid\Support\Color;
use Orchid\Support\Facades\Toast;

use Orchid\Filter\Filterable;

class EffectListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            "effects" => ColorEffect::filters()->orderByDesc("order")->paginate(15)
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Визуальные эффекты';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Добавить эффект')->route('platform.effect_create')->type(Color::SUCCESS())
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            EffectListTable::class
        ];
    }


    public function delete_field($id) {
        $dell_elem = ColorEffect::where('id', $id)->first();
        if ($dell_elem ) {
            $dell_elem->delete();
            Toast::info("Запись удалена");
        } else {
            Toast::info("Ошибка при удалении");
        }
    }
}
