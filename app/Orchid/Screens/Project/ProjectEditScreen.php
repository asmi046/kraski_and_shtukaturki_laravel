<?php

namespace App\Orchid\Screens\Project;

use Orchid\Screen\Screen;

use App\Models\Project;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;

use App\Orchid\Layouts\Project\ProjectEditFields;
use Orchid\Screen\Fields\Picture;

use Illuminate\Http\Request;

use Orchid\Screen\Fields\TextArea;

class ProjectEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */

     public $project;

    public function query($id): iterable
    {
        return [
            "project" => Project::where('id',$id)->first()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование проекта: '.$this->project->title;
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

    public function save_info(Project $Project, Request $request) {

        $request->validate([
            'project.title' => ['required', 'string'],
            'project.img' => ['required', 'string']
        ]);


        $this->project->fill($request->get('project'))->save();

        Toast::info("Запись сохранена");
    }
}
