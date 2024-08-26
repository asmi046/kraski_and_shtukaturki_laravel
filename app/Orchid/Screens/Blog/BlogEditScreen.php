<?php

namespace App\Orchid\Screens\Blog;

use Orchid\Screen\Screen;

use App\Models\Blog;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;

use App\Orchid\Layouts\Blog\BlogEditFields;
use Orchid\Screen\Fields\Picture;

use Illuminate\Http\Request;

use Orchid\Screen\Fields\TextArea;

class BlogEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */

     public $blog;

    public function query($id): iterable
    {
        return [
            "blog" => Blog::where('id',$id)->first()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование статьи: '.$this->blog->title;
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
            BlogEditFields::class,
        ];
    }

    public function save_info( Request $request) {

        $request->validate([
            'blog.title' => ['required', 'string'],
            'blog.img' => ['required', 'string']
        ]);


        $this->blog->fill($request->get('blog'))->save();

        Toast::info("Запись сохранена");
    }
}
