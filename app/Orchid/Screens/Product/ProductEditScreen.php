<?php

namespace App\Orchid\Screens\Product;

use Orchid\Screen\Screen;

use App\Models\ProductGroup;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Celebration;

use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\ModalToggle;
use Illuminate\Validation\Rule;

use App\Orchid\Layouts\Product\ProductEditFields;
use App\Orchid\Layouts\Product\ProductImageTable;
use App\Orchid\Layouts\Product\ProductPricesTable;

use Illuminate\Http\Request;

class ProductEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */

     public $product;
     public $product_galery;
     public $product_prices;
     public $product_cat;

    public function query($id): iterable
    {
        $product = ProductGroup::where('id',$id)->first();
        $cat = $product->product_category;
        $product_galery = $product->tovar_images;
        $product_prices = $product->tovar_prices;
        return [
            "product" => $product,
            "product_cat"=> $cat,
            "product_galery"=> $product_galery,
            "product_prices"=> $product_prices,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование продукта: '.$this->product->title;
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

            Layout::tabs([
                'Параметры товарной группы' => [
                    ProductEditFields::class,
                ],

                'Галерея'      => [
                    ProductImageTable::class
                ],

                'Варианты цены'      => [
                    ProductPricesTable::class
                ],
            ]),


        ];
    }

    public function delete_galery_img($id) {
        $dell_elem = $this->product_galery->where('id', $id)->first();
        if ($dell_elem ) {
            $dell_elem->delete();
            Toast::info("Запись удалена");
        } else {
            Toast::info("Ошибка при удалении");
        }
    }

    public function delete_price($id) {
        $dell_elem = $this->product_prices->where('id', $id)->first();
        if ($dell_elem ) {
            $dell_elem->delete();
            Toast::info("Запись удалена");
        } else {
            Toast::info("Ошибка при удалении");
        }
    }

    public function save_info(Product $product, Request $request) {

        // dd($request->get("category"));

        $new_data = $request->validate([
            'sku' => ['required', 'string',  Rule::unique('products')->ignore($product->id)],
            'title' => ['required', 'string'],
            'slug' => [],
            'tm' => ['required', 'string'],
            'upacovka' => ['required', 'string'],
            'quote' => [],

            'param_zgirnost' => [],
            'param_scode' => [],
            'param_ves_ed' => [],
            'param_ves_yashik' => [],
            'param_count_in_pack' => [],
            'param_srok_realiz' => [],

            'category' => ['required', 'string'],
            'category_sub' => [],
            'img' => [],
            'description' => ['required', 'string'],

            'price_D_ht' => [],
            'price_D_kg' => [],

            'price_OPT_ht' => [],
            'price_OPT_kg' => [],

            'price_R_ht' => [],
            'price_R_kg' => [],

            'seo_title' => [],
            'seo_description' => [],
        ]);

        ProductGroup::where('id', $product->id)->update($new_data);
        Toast::info("Продукт сохранен");
    }
}
