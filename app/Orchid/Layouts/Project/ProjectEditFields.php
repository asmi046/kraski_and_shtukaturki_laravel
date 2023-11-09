<?php

namespace App\Orchid\Layouts\Project;

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

use Orchid\Screen\Fields\Picture;

use App\Models\Project;

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

            Quill::make('project.description')
                ->title('Описание категории')
                ->help('Введите описание категории')
                ->horizontal(),


            Picture::make('project.img')
                ->title('Основное изображение')
                ->storage('public')
                ->targetRelativeUrl()
                ->required()
                ->horizontal(),

            Picture::make('project.img1')
                ->title('Изображение 1')
                ->storage('public')
                ->targetRelativeUrl()
                ->horizontal(),

            Picture::make('project.img2')
                ->title('Изображение 2')
                ->storage('public')
                ->targetRelativeUrl()
                ->horizontal(),

            Picture::make('project.img3')
                ->title('Изображение 3')
                ->storage('public')
                ->targetRelativeUrl()
                ->horizontal(),

            Picture::make('project.img4')
                ->title('Изображение 4')
                ->storage('public')
                ->targetRelativeUrl()
                ->horizontal(),

            Picture::make('project.img5')
                ->title('Изображение 5')
                ->storage('public')
                ->targetRelativeUrl()
                ->horizontal(),

            Picture::make('project.img6')
                ->title('Изображение 6')
                ->storage('public')
                ->targetRelativeUrl()
                ->horizontal(),

            Picture::make('project.img7')
                ->title('Изображение 7')
                ->storage('public')
                ->targetRelativeUrl()
                ->horizontal(),

            Picture::make('project.img8')
                ->title('Изображение 8')
                ->storage('public')
                ->targetRelativeUrl()
                ->horizontal(),

            Picture::make('project.img9')
                ->title('Изображение 9')
                ->storage('public')
                ->targetRelativeUrl()
                ->horizontal(),

            Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
        ];
    }
}
