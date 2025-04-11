<?php

namespace App\Admin\Controllers;

use App\Models\LoopProject;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Storage;

class LoopProjectController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new LoopProject(), function (Grid $grid) {
            $grid->model()->orderBy("id",'desc');

            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('enable')->switch();

            $grid->column('created_at');
            $grid->column('__',"中奖结果")->display(function() {
                $url =  admin_route("loop_lottery_logs.index",[
                    '_project_id' => $this->id,
                ]);
                return "<a href='$url'><button class='btn btn-primary'>中奖结果</button></a>";
            });

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
        return Show::make($id, new LoopProject(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('award_list');
            $show->field('share_title');
            $show->field('share_description');
            $show->field('share_image');
            $show->field('limit_lottery_count');
            $show->field('limit_day_lottery_count');
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
        return Form::make(new LoopProject(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            $form->switch('enable','启动用')->default(1);
            $form->array('award_list', function ($form) {
                $form->text('name',"奖品名称")->required();
                $form->rate('rate','奖品概率')->required();
            })->saveAsJson()->default([
                ['name'=> '奖品 1','rate' => 25],
                ['name'=> '奖品 2','rate' => 25],
                ['name'=> '奖品 3','rate' => 25],
                ['name'=> '奖品 4','rate' => 25],
            ]);
            $form->divider("分享设置");
            $form->text('share_title')->default("抽奖大转盘")->required();
            $form->text('share_description')->default("快来参与活动吧")->required();
            $url  =Storage::disk("public")->url('/web/lottery-activity_theme-pic_lottery-cover-red.6936960e05f2.png');
            $form->image('share_image')
                ->autoUpload()
                ->removable(false)
                ->default($url)
                ->required();
            $form->divider("抽奖限制设置");
            $form->number('limit_lottery_count')->default(1)->help("0不限制")->required();
            $form->number('limit_day_lottery_count')->default(1)->help("0不限制")->required();

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
