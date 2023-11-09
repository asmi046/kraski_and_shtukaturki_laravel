<?php

namespace App\Orchid\Screens\Project;

use Orchid\Screen\Screen;

use App\Models\Project;

use Orchid\Support\Facades\Layout;

use App\Orchid\Layouts\Project\ProjectEditFields;



use Illuminate\Http\Request;

class ProjectCreateScreen extends Screen
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
        return 'Создание проекта';
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
            ProjectEditFields::class,
        ];
    }

    public function save_info(Request $request) {

        $request->validate([
            'project.title' => ['required', 'string'],
            'project.img' => ['required', 'string']
        ]);


        $new_cat_id = Project::create($request->get('project'));

        return redirect()->route('platform.projects_edit', $new_cat_id);
    }
}
