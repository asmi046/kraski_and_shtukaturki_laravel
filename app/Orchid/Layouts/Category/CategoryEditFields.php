<?php

namespace App\Orchid\Layouts\Category;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;

use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Number;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;

use App\Models\Category;

class CategoryEditFields extends Rows
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

            Input::make('category.name')
                ->title('Заголовок')
                ->help('Заголовок категории')
                ->required()
                ->horizontal(),


            Input::make('category.slug')
                ->title('Окончание ссылки')
                ->help('Slug категории')
                ->horizontal(),

            Input::make('category.order')
                ->type("number")
                ->required()
                ->title('Порядок отображения')
                ->help('Порядок отображения при выводе')
                ->horizontal(),

            Select::make('category.parentid')
                ->fromQuery(Category::where('id', '!=', 'category.parentid'), 'name', 'id')
                ->title('Родительская категория')
                ->help('Выберите родительскую категорию')
                ->empty('Не выбрано',0)
                ->horizontal(),

            Quill::make('category.description')
                ->title('Описание категории')
                ->help('Введите описание категории')
                ->horizontal(),

            Input::make('category.title_seo')
                    ->title('SEO заголовок')
                    ->help('SEO заголовок')
                    ->horizontal(),

            TextArea::make('category.description_seo')
                    ->title('SEO описание')
                    ->help('SEO описание')
                    ->horizontal(),
            Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
        ];
    }
}
