<?php

namespace App\Orchid\Layouts\Project;

use App\Models\Project;
use Orchid\Screen\Field;

use Orchid\Support\Color;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Attach;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Number;
use Orchid\Screen\Fields\Select;

use Orchid\Screen\Actions\Button;

use Orchid\Screen\Fields\Picture;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Fields\TextArea;

class ProjectEditFields extends Rows
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

            Input::make('project.title')
                ->title('Заголовок')
                ->help('Заголовок проекта')
                ->required()
                ->horizontal(),

            Input::make('project.slug')
                ->title('Ссылка')
                ->help('Адрес ссылки')
                ->horizontal(),

            Quill::make('project.description')
                ->title('Описание категории')
                ->help('Введите описание категории')
                ->horizontal(),

            Matrix::make('project.galery')
            ->required()
                ->title('Галерея проекта')
                ->columns([
                    'Изображение' => 'img',
                    'alt/title' => 'title'
                ])
                ->fields([
                    'img' => Picture::make('img')->storage('public')->targetRelativeUrl(),
                    'title' => Input::make('title')
                ]),

            Matrix::make('project.params')
            ->required()
                ->title('Параметры проекта')
                ->columns([
                    'Имя параметра' => 'name',
                    'Значение параметра' => 'value'
                ])
                ->fields([
                    'name' => Input::make('name'),
                    'title' => Input::make('value')
                ]),

            Picture::make('project.img')
                ->title('Основное изображение')
                ->storage('public')
                ->acceptedFiles('.jpg')
                ->targetRelativeUrl()
                ->required()
                ->horizontal(),

            Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
        ];
    }
}
