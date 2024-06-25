<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

use Orchid\Screen\Fields\Group;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;

use Orchid\Screen\Actions\DropDown;

use App\Models\Project;

use Orchid\Support\Color;

class BlogListTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'blog';

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

            TD::make('title', 'Заголовок')->width("80%"),


            TD::make(__('Actions'))
            ->align(TD::ALIGN_CENTER)
            ->width('100px')
            ->render(fn ($element) => DropDown::make()
                ->icon('chat-right-dots')
                ->list([

                    Link::make('Редактировать')
                        ->route('platform.blog_edit',$element->id)
                        ->icon('pencil'),

                    Button::make('Удалить')
                        ->icon('trash')
                        ->confirm(__('Данная запись будет удалена навсегда! Вы согласны?'))
                        ->method('delete_field', ["id" => $element->id]),
                ])),

        ];
    }
}
