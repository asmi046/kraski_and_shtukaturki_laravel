<?php

namespace App\Orchid\Screens\Effect;

use Orchid\Screen\Screen;

use App\Models\ColorEffect;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;

use Orchid\Support\Color;

use App\Orchid\Layouts\Effect\EffectEditFields;

use Illuminate\Http\Request;

use Orchid\Screen\Fields\TextArea;

class EffectEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */

     public $effect;

    public function query($id): iterable
    {
        return [
            "effect" => ColorEffect::where('id',$id)->first()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование эффекта: '.$this->effect->name;
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


        $this->effect->fill($request->get('effect'))->save();

        Toast::info("Запись сохранена");
    }
}
