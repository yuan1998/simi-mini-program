<?php

namespace App\Admin\Controllers;

use App\Models\LoopLog;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class LoopLogController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new LoopLog(), function (Grid $grid) {
            $grid->column('id')->sortable();
//            $grid->column('user_id');
            $grid->column('status')->radio(LoopLog::STATUS_LIST, true);
            $grid->column('phone');
            $grid->column('result');
            $grid->column('cache');
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
        return Show::make($id, new LoopLog(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('status');
            $show->field('phone');
            $show->field('result');
            $show->field('cache');
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
        return Form::make(new LoopLog(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('status');
            $form->text('phone');
            $form->text('result');
            $form->text('cache');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
