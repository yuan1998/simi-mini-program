<?php

namespace App\Admin\Controllers;

use App\Models\TestProject;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class TestProjectController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TestProject(), function (Grid $grid) {
            $grid->scrollbarX();
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('question_data')->display(function ($val) {
                return json_decode($val);
            });
            $grid->column('remark');
            $grid->column('enable')->switch();
//            $grid->column('end_msg');
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
        return Show::make($id, new TestProject(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('remark');
            $show->field('enable');
            $show->field('question_data');
            $show->field('end_msg');
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
        return Form::make(new TestProject(), function (Form $form) {
            $form->display('id');
            $form->text('title')->required();
            $form->text('remark');
            $form->switch('enable')->default(1);

            $form->array('question_data', function ($table) {
                $table->text('title', '题目')->required();

                $table->table('questions', '答案选项', function ($table2) {
                    $table2->text('answer', '答案')->required();
                    $table2->number('score', '得分')->required();
                })->default([
                    'answer' => '',
                    'score' => 0
                ])->required();
            })->default([
                [
                    'title' => '',
                ]
            ])->saving(function ($v) {
                return json_encode($v);
            })->required();

            $form->divider();
            $form->editor('end_msg');

            $form->saving(function (Form $form) {
                $question = $form->input('question_data');
                $validationErrors = [];

                foreach ($question as $key => $value) {
                    if ($value['_remove_'])
                        continue;
                    if (!$value['title'])
                        $validationErrors["question_data.$key.title"] = "题目不能为空";
                    $questionAnswer = collect($value['questions'])->filter(function ($item) {
                        return !$item['_remove_'];
                    });
                    if (!$questionAnswer->count())
                        $validationErrors["question_data.$key.questions"] = "答案列表不能为空";
                    else {
                        foreach ($questionAnswer as $k => $v) {
                            if (!$v['answer'])
                                $validationErrors["question_data.$key.questions.$k.answer"] = "答案不能为空";
                            if (!is_numeric($v['score']))
                                $validationErrors["question_data.$key.questions.$k.score"] = "答案得分必须为数字";
                        }
                    }
                }
                if (count($validationErrors))
                    return $form->validationErrorsResponse($validationErrors);

            });

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
