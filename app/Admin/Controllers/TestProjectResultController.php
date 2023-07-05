<?php

namespace App\Admin\Controllers;

use App\Models\TestProjectResult;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class TestProjectResultController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(TestProjectResult::with(['user' ,'project'])->orderBy('id','desc'), function (Grid $grid) {
            $grid->disableCreateButton();
            $grid->disableViewButton();
            $grid->disableEditButton();
            $grid->showColumnSelector();
            $grid->column('id')->sortable();
            $grid->column('user.nike_name');
            $grid->column('project.title');
            $grid->column('user_id')->hide();
            $grid->column('project_id')->hide();
            $grid->column('score');
            $grid->column('answers');
            $grid->column('created_at');

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
        return Show::make($id, new TestProjectResult(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('project_id');
            $show->field('score');
            $show->field('answers');
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
        return Form::make(new TestProjectResult(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('project_id');
            $form->text('score');
            $form->text('answers');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
