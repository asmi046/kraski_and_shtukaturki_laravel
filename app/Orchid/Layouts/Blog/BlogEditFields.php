<?php

namespace App\Orchid\Layouts\Blog;

use App\Models\Project;
use Orchid\Screen\Field;

use Orchid\Support\Color;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Number;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Actions\Button;

use Orchid\Screen\Fields\Picture;

use Orchid\Support\Facades\Toast;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Layout;

class BlogEditFields extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title = "Поля статьи";

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [

            Input::make('blog.title')
                ->title('Заголовок')
                ->help('Заголовок проекта')
                ->required()
                ->horizontal(),

            Quill::make('blog.description')
                ->title('Описание категории')
                ->help('Введите описание категории')
                ->horizontal(),

            Picture::make('blog.img')
                ->title('Основное изображение')
                ->help('Основное изображение записи')
                ->storage('public')
                ->targetRelativeUrl()
                ->required()
                ->horizontal(),


            Input::make('blog.seo_title')
                ->title('SEO заголовок')
                ->help('SEO заголовок')
                ->horizontal(),

            TextArea::make('blog.seo_description')
                ->title('SEO описание')
                ->help('SEO описание')
                ->horizontal(),



            Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
        ];
    }
}
