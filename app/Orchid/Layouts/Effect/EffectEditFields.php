<?php

namespace App\Orchid\Layouts\Effect;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;

use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Number;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Picture;
use Orchid\Support\Color;

use App\Models\Category;

class EffectEditFields extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title = "Поля категории";

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [

            Input::make('effect.name')
                ->title('Заголовок')
                ->help('Заголовок категории')
                ->required()
                ->horizontal(),


            Input::make('effect.slug')
                ->title('Окончание ссылки')
                ->help('Slug категории')
                ->horizontal(),

            Input::make('effect.order')
                ->type("number")
                ->required()
                ->title('Порядок отображения')
                ->help('Порядок отображения при выводе')
                ->horizontal(),

            Quill::make('effect.description')
                ->title('Описание ')
                ->help('Введите описание')
                ->horizontal(),

            Picture::make('effect.img')
                ->title('Основное изображение')
                ->storage('public')
                ->targetRelativeUrl()
                ->horizontal(),

            Input::make('effect.seo_title')
                    ->title('SEO заголовок')
                    ->help('SEO заголовок')
                    ->horizontal(),

            TextArea::make('effect.seo_description')
                    ->title('SEO описание')
                    ->help('SEO описание')
                    ->horizontal(),
            Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
        ];
    }
}
