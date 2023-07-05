<?php

namespace App\Admin\Controllers;

use App\Models\ProgramPage;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ProgramPageController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ProgramPage(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('path');
            $grid->column('name');
            $grid->column('type');
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
        return Show::make($id, new ProgramPage(), function (Show $show) {
            $show->field('id');
            $show->field('path');
            $show->field('name');
            $show->field('type');
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
        return Form::make(new ProgramPage(), function (Form $form) {
            $form->display('id');
            $form->text('path');
            $form->text('name');
            $form->text('type');
            $form->text('order');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
