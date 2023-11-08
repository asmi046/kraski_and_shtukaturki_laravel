<?php

namespace App\Orchid\Screens\Effect;

use Orchid\Screen\Screen;

use App\Models\ColorEffect;

use Orchid\Support\Facades\Layout;

use App\Orchid\Layouts\Effect\EffectEditFields;



use Illuminate\Http\Request;

class EffectCreateScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */

    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Создание эффекта';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            EffectEditFields::class,
        ];
    }

    public function save_info(Request $request) {

        $request->validate([
            'effect.name' => ['required', 'string'],
            'effect.order' => ['required', 'integer']
        ]);


        $item = ColorEffect::create($request->get('effect'));

        return redirect()->route('platform.effect_edit', $item);
    }
}
