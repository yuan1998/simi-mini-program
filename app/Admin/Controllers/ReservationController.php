<?php

namespace App\Admin\Controllers;

use App\Models\Doctor;
use App\Models\Project;
use App\Models\Reservation;
use App\Models\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ReservationController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Reservation::with(['user', 'doctor']), function (Grid $grid) {
            $grid->showColumnSelector();
            $grid->model()->orderBy('date', 'desc');
            $grid->column('id');
            $grid->column('name', '预约姓名');
            $grid->column('phone', '预约电话');
            $grid->column('project_name', '预约项目');
            $grid->column('user.nike_name', '用户名');
            $grid->column('doctor.name', '医生');
            $grid->column('status')->radio(Reservation::STATUS_LIST);
            $grid->column('user_id')->hide();
            $grid->column('doctor_id')->hide();
            $grid->column('date');
            $grid->column('enable')->switch();
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
        return Show::make($id, new Reservation(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('doctor_id');
            $show->field('date');
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
        return Form::make(Reservation::with(['user', 'doctor']), function (Form $form) {
            $form->display('id');
            $form->select('user_id')->options(User::toOptions())->required();
            $form->select('doctor_id')->options(Doctor::toOptions())->required();
            $form->select('project_id')->options(Project::toOptions())->required();
            $form->radio('status')->options(Reservation::STATUS_LIST)->default(0)->required();
            $form->text('name')->required();
            $form->text('phone')->required();
            $form->hidden('enable')->default(1);
            $form->hidden('project_name');
            $form->datetime('date')->required();

            $form->display('created_at');
            $form->display('updated_at');
            $form->submitted(function (Form $form) {
                $projectId = $form->input('project_id');
                $project = Project::find($projectId);
                $form->input('project_name' , $project->title);
            });
        });
    }
}
