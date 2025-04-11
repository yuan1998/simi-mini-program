<?php

namespace App\Admin\Controllers;

use App\Models\LoopProject;
use App\Models\LoopProjectLog;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class LoopProjectLogController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new LoopProjectLog(), function (Grid $grid) {
            $projectId = request()->get("_project_id");
            $model = $grid->model();
            $model->with(['user', "user.parentUser", 'project'])
                ->orderBy("id", "desc");
            if ($projectId) {
                $model->where('project_id' , $projectId);
            }


            $grid->column('id')->sortable();
            $grid->column('project.name', '抽奖转盘项目');
            $grid->column('user.nike_name', '中奖人');
//            $grid->column('status');
            $grid->column('phone', '手机号');
            $grid->column('result', '中奖内容');
//            $grid->column('cache');
            $grid->column('user.parentUser.id', '邀请人ID');
            $grid->column('user.parentUser.nike_name', '邀请人名称');
            $grid->column('created_at');
//            $grid->column('updated_at')->sortable();

            $grid->disableCreateButton();
//            $grid->disableDeleteButton();
            $grid->disableEditButton();

            $grid->disableViewButton();

            $grid->filter(function (Grid\Filter $filter) use ($projectId) {
                $filter->equal('id');
                if (!$projectId)
                    $filter->equal('project_id')->select(LoopProject::query()->select(['id' ,'name'])->get()->pluck('name', 'id'));
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
        return Show::make($id, new LoopProjectLog(), function (Show $show) {
            $show->field('id');
            $show->field('project_id');
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
        return Form::make(new LoopProjectLog(), function (Form $form) {
            $form->display('id');
            $form->text('project_id');
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
