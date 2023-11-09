<?php

namespace App\Orchid\Screens\Project;

use Orchid\Screen\Screen;

use App\Models\Project;
use App\Orchid\Layouts\Project\ProjectListTable;

use Orchid\Screen\Actions\Link;
use Orchid\Support\Color;
use Orchid\Support\Facades\Toast;

class ProjectListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            "projects" => Project::orderByDesc("created_at")->paginate(15)
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Проекты';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Добавить проект')->route('platform.projects_create')->type(Color::SUCCESS())
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            ProjectListTable::class
        ];
    }


    public function delete_field($id) {
        $dell_elem = Project::where('id', $id)->first();
        if ($dell_elem ) {
            $dell_elem->delete();
            Toast::info("Категория удалена");
        } else {
            Toast::info("Ошибка при удалении");
        }
    }
}
