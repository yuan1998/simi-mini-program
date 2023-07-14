<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use App\Models\Banner;
use App\Models\CardHome;
use App\Models\ProgramPage;
use App\Models\TestProject;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CardHomeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new CardHome(), function (Grid $grid) {
            $grid->showColumnSelector();
            $grid->model()->orderBy("order");
            $grid->sortable();
            $grid->column('id')->hide();
            $grid->column('path')->image();
            $grid->column('remark');
            $grid->column('target_type')->using(Banner::TARGET_TYPE);
            $grid->column('order')->hide();
            $grid->column('enable')->switch();
            $grid->column('created_at');
            $grid->column('updated_at')->hide();

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
        return Show::make($id, new CardHome(), function (Show $show) {
            $show->field('id');
            $show->field('path');
            $show->field('name');
            $show->field('remark');
            $show->field('target');
            $show->field('order');
            $show->field('enable');
            $show->field('target_type');
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
        return Form::make(new CardHome(), function (Form $form) {
            $form->display('id');

            $form->image('path')
                ->removable(false)
                ->autoUpload()
                ->required();
            $form->text('remark');
            $form->radio('target_type')->options(Banner::TARGET_TYPE)
                ->when(1, function ($form) {
                    $form->text('target_1', '文章ID')->help('输入站内文章的ID');
                })->when(2, function ($form) {
                    $form->text('target_2', '自测项目ID')->help('输入站内项目的ID');
                })->when(3, function ($form) {
                    $form->text('target_3', '小程序页面')->help('输入小程序路径');
                })->when(4, function ($form) {
                    $form->text('target_4', '外部url')->help('使用外部url需要在小程序官网添加业务域名');
                })->when(6, function ($form) {
                    $form->text('target_6', '商品ID')->help('输入站内商品的ID');
                })->required()
                ->default(0);


            $form->hidden('target');
            $form->hidden('order')->default(0);
            $form->switch('enable')->default(1);

            $model = $form->model();
            if ($model->id && ($val = $model->target) && ($key = $model->target_type)) {
                $form->field("target_$key")->value($val);
            }

            $form->submitted(function (Form $form) {
                $type = $form->input('target_type');
                $key = "target_$type";
                $val = $form->input($key);
                switch ($type) {
                    case "1":
                        if (!is_numeric($val) || !Article::query()->where('id', $val)->exists())
                            return $form->validationErrorsResponse([
                                $key => '错误的文章参数'
                            ]);
                        break;
                    case "2":
                        if (!is_numeric($val) || !TestProject::query()->where('id', $val)->exists())
                            return $form->validationErrorsResponse([
                                $key => '错误的自测ID参数'
                            ]);
                        break;
                    case "3":
                        if (!ProgramPage::query()->where('path', $val)->exists())
                            return $form->validationErrorsResponse([
                                $key => '错误的小程序路径参数'
                            ]);
                        break;
                    case "4":
                        if (!filter_var($val, FILTER_VALIDATE_URL))
                            return $form->validationErrorsResponse([
                                $key => '错误的h5链接'
                            ]);
                        break;
                    default:
                        $val = "";
                        break;
                }

                $form->input('target', $val);
                $form->ignore([
                    'target_1',
                    'target_2',
                    'target_3',
                    'target_4',
                ]);

            });

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
