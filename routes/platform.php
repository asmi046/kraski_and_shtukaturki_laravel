<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleActionsScreen;
use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleGridScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

use App\Orchid\Screens\Category\CategoryCreateScreen;
use App\Orchid\Screens\Category\CategoryEditScreen;
use App\Orchid\Screens\Category\CategoryListScreen;

use App\Orchid\Screens\Project\ProjectCreateScreen;
use App\Orchid\Screens\Project\ProjectEditScreen;
use App\Orchid\Screens\Project\ProjectListScreen;

use App\Orchid\Screens\Blog\BlogCreateScreen;
use App\Orchid\Screens\Blog\BlogEditScreen;
use App\Orchid\Screens\Blog\BlogListScreen;

use App\Orchid\Screens\Effect\EffectCreateScreen;
use App\Orchid\Screens\Effect\EffectEditScreen;
use App\Orchid\Screens\Effect\EffectListScreen;

use App\Orchid\Screens\Product\ProductCreateScreen;
use App\Orchid\Screens\Product\ProductEditScreen;
use App\Orchid\Screens\Product\ProductListScreen;

use App\Orchid\Screens\Product\ProductGaleryCreateScreen;
use App\Orchid\Screens\Product\ProductGaleryEditScreen;

use App\Orchid\Screens\Product\ProductPriceCreateScreen;
use App\Orchid\Screens\Product\ProductPriceEditScreen;

use App\Orchid\Screens\Options\OptionsList;
use App\Orchid\Screens\Options\EditOptions;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Категории
Route::screen('/categories', CategoryListScreen::class)
    ->name('platform.category')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.index')
    ->push(__('Категории товаров'), route('platform.category')));

Route::screen('/categories/{id}/edit', CategoryEditScreen::class)
    ->name('platform.category_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.category')
    ->push(__('Редактирование категории'), route('platform.category_edit', $id)));

Route::screen('/categories/create', CategoryCreateScreen::class)
    ->name('platform.category_create')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.category')
    ->push(__('Добавление категории'), route('platform.category_create')));

// Проекты
Route::screen('/projects', ProjectListScreen::class)
    ->name('platform.projects')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.index')
    ->push(__('Проекты'), route('platform.projects')));

Route::screen('/projects/{id}/edit', ProjectEditScreen::class)
    ->name('platform.projects_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.projects')
    ->push(__('Редактирование проекта'), route('platform.projects_edit', $id)));

Route::screen('/projects/create', ProjectCreateScreen::class)
    ->name('platform.projects_create')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.projects')
    ->push(__('Добавление пректа'), route('platform.projects_create')));

// Блог
Route::screen('/blog', BlogListScreen::class)
    ->name('platform.blog')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.index')
    ->push(__('Блог'), route('platform.blog')));

Route::screen('/blog/{id}/edit', BlogEditScreen::class)
    ->name('platform.blog_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.blog')
    ->push(__('Редактирование статьи'), route('platform.blog_edit', $id)));

Route::screen('/blog/create', BlogCreateScreen::class)
    ->name('platform.blog_create')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.blog')
    ->push(__('Добавление статьи'), route('platform.blog_create')));


// Эффекты
Route::screen('/effect', EffectListScreen::class)
    ->name('platform.effect')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.index')
    ->push(__('Визуальные эффекты'), route('platform.effect')));

Route::screen('/effect/{id}/edit', EffectEditScreen::class)
    ->name('platform.effect_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.effect')
    ->push(__('Редактирование визуального эффекта'), route('platform.effect_edit', $id)));

Route::screen('/effect/create', EffectCreateScreen::class)
    ->name('platform.effect_create')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.effect')
    ->push(__('Добавление визуального эффекта'), route('platform.effect_create')));


// Товары
Route::screen('/products', ProductListScreen::class)
    ->name('platform.product')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.index')
    ->push(__('Товары'), route('platform.product')));

Route::screen('/products/{id}/edit', ProductEditScreen::class)
    ->name('platform.product_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.product')
    ->push(__('Редактирование товара'), route('platform.product_edit', $id)));

Route::screen('/products/create', ProductCreateScreen::class)
    ->name('platform.product_create')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.product')
    ->push(__('Добавление товара'), route('platform.product_create')));


Route::screen('/products/galery/{id}/edit', ProductGaleryEditScreen::class)
    ->name('platform.product_galery_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.product')
    ->push(__('Редактирование изображения галереи'), route('platform.product_galery_edit', $id)));

Route::screen('/products/{id}/galery/create', ProductGaleryCreateScreen::class)
    ->name('platform.product_galery_create')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.product')
    ->push(__('Создание изображения галереи'), route('platform.product_galery_create', $id)));

Route::screen('/products/price/{id}/edit', ProductPriceEditScreen::class)
    ->name('platform.product_price_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.product')
    ->push(__('Редактирование ценового предложения'), route('platform.product_price_edit', $id)));

Route::screen('/products/{id}/price/create', ProductPriceCreateScreen::class)
    ->name('platform.product_price_create')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.product')
    ->push(__('Редактирование ценового предложения'), route('platform.product_price_create', $id)));



// Опции
Route::screen('/options', OptionsList::class)
    ->name('platform.options')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Опции'), route("platform.options")));

Route::screen('/options/{id}/edit', EditOptions::class)
    ->name('platform.options_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.options')
    ->push(__('Редактирование опции'), route('platform.options_edit', $id)));

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example Screen'));

Route::screen('/examples/form/fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('/examples/form/advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');
Route::screen('/examples/form/editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('/examples/form/actions', ExampleActionsScreen::class)->name('platform.example.actions');

Route::screen('/examples/layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('/examples/grid', ExampleGridScreen::class)->name('platform.example.grid');
Route::screen('/examples/charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('/examples/cards', ExampleCardsScreen::class)->name('platform.example.cards');

//Route::screen('idea', Idea::class, 'platform.screens.idea');
