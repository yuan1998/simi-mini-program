<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Product;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ProductController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Product(), function (Grid $grid) {
            $grid->model()->orderBy('order');
            $grid->sortable();
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('cover')->image('', 100, 100);
            $grid->column('images')->display(function ($val) {
                return json_decode($val, true);
            })->image('', 60, 60);
            $grid->column('sku');
//            $grid->column('view');
//            $grid->column('sell');
//            $grid->column('store');
//            $grid->column('price');
            $grid->column('enable')->switch();
//            $grid->column('content');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('title');
                $filter->like('sku');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Product(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('sku');
            $show->field('view');
            $show->field('sell');
            $show->field('store');
            $show->field('price');
            $show->field('enable');
            $show->field('content');
            $show->field('cover');
            $show->field('images');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(Product::with(['categories' => function ($q) {
            $q->select(['id']);
        }]), function (Form $form) {
            $form->display('id');
            $form->text('title')->required();
            $form->image('cover')->removable(false)->autoUpload()->compress();
            $form->multipleImage('images')->removable(false)->autoUpload()->compress()->limit(5)
                ->saveAsJson();

            $form->text('sku')
                ->rules(function (Form $form) {
                    $rules = 'unique:products,sku';
                    if ($id = $form->model()->id) {
                        $rules .= ",$id";
                    }
                    return $rules;
                })->required();
            $form->hidden('order')->default(0);


            $form->multipleSelect('categories')
                ->options(Category::toOptions())
                ->customFormat(function ($val) {
                    return collect($val)->pluck('id')->toArray();
                });
            $form->switch('enable')->default(1);
            $form->editor('content');


            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
