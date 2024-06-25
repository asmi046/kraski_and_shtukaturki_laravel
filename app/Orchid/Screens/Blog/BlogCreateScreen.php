<?php

namespace App\Orchid\Screens\Blog;

use Orchid\Screen\Screen;

use App\Models\Blog;

use Orchid\Support\Facades\Layout;

use App\Orchid\Layouts\Blog\BlogEditFields;



use Illuminate\Http\Request;

class BlogCreateScreen extends Screen
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
        return 'Создание статьи';
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

    public function save_info(Request $request) {

        $request->validate([
            'blog.title' => ['required', 'string'],
            'blog.img' => ['required', 'string']
        ]);


        $new_cat_id = Blog::create($request->get('blog'));

        return redirect()->route('platform.blog_edit', $new_cat_id);
    }
}
