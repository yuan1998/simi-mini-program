<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Tree;

class CategoryController extends AdminController
{

    public function index(Content $content)
    {
        return $content->header('商品分类')
            ->body(function (Row $row) {
                $tree = new Tree(new Category);

                $row->column(12, $tree);
            });
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Category(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('parent_id');
            $grid->column('title');
            $grid->column('header_banner');
            $grid->column('remark');
            $grid->column('order');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

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
        return Show::make($id, new Category(), function (Show $show) {
            $show->field('id');
            $show->field('parent_id');
            $show->field('title');
            $show->field('header_banner');
            $show->field('remark');
            $show->field('order');
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
        return Form::make(new Category(), function (Form $form) {
            $form->display('id');
            $form->select('parent_id')->options(Category::selectOptions())->default(0);

            $form->text('title')->required();
//            $form->image('header_banner');
            $form->text('remark');
            $form->hidden('order')->default(0);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
