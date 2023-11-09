<?php

namespace App\Orchid\Layouts\Project;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

use Orchid\Screen\Fields\Group;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;

use Orchid\Screen\Actions\DropDown;

use App\Models\Project;

use Orchid\Support\Color;

class ProjectListTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'projects';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id', 'id'),

            TD::make('img', 'Фото')->render(
                function($element) {
                    return "<img width='50' height='50' src='".($element->img?$element->img:asset("img/no_photo.jpg"))."'>";
                }
            )->width("10%"),

            TD::make('title', 'Заголовок')->width("30%"),
            TD::make('description', 'Описание')->width("40%")->render(function($element) {
                return  mb_strimwidth(strip_tags($element->description), 0, 30, "...");
            }),

            // TD::make('action', 'Действие')->render(function($element) {
            //     return  Group::make([
            //         Link::make('Редактировать')->route('platform.category_edit',$element->id),
            //         Button::make('Удалить')->method('delete_field', [$element->id])->type(Color::DANGER())
            //     ]);
            // })


            TD::make(__('Actions'))
            ->align(TD::ALIGN_CENTER)
            ->width('100px')
            ->render(fn ($element) => DropDown::make()
                ->icon('chat-right-dots')
                ->list([

                    Link::make('Редактировать')
                        ->route('platform.projects_edit',$element->id)
                        ->icon('pencil'),

                    Button::make('Удалить')
                        ->icon('trash')
                        ->confirm(__('Данная категория будет удалена навсегда! Вы согласны?'))
                        ->method('delete_field', ["id" => $element->id]),
                ])),

        ];
    }
}
