<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Str;

class ArticleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Article(), function (Grid $grid) {
            $grid->scrollbarX();
            $grid->showColumnSelector();
            $grid->column('id')->sortable();
            $grid->column('cover_path')->image('' , 100, 100);
            $grid->column('title');
            $grid->column('author')->hide();
//            $grid->column('views');
//            $grid->column('likes');
            $grid->column('abstract')->limit(20);
//            $grid->column('content');
            $grid->column('status')->radio(Article::STATUS_LIST);
            $grid->column('publish_date');
            $grid->column('created_at')->hide();
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
        return Show::make($id, new Article(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('cover_path');
            $show->field('author');
            $show->field('publish_date');
            $show->field('views');
            $show->field('likes');
            $show->field('abstract');
            $show->field('content');
            $show->field('status');
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
        return Form::make(new Article(), function (Form $form) {
            $form->display('id');
            $form->image('cover_path')->removable(false)->autoUpload();
            $form->text('title')->required();
//            $form->text('author');
            $form->datetime('publish_date')->default(now())->required();
//            $form->number('views')->default(0);
//            $form->number('likes')->default(0);
            $form->textarea('abstract')->placeholder("可以不填,自动从'内容'中获取");
            $form->radio('status')->options(Article::STATUS_LIST)->default(0)->required();
            $form->editor('content')->required();

            $form->saving(function (Form $form) {
                if (($ctx = $form->input('content')) && !$form->input('abstract')) {
                    // 去除 HTML 标签
                    $stringWithoutTags = strip_tags($ctx);

                    // 截取字符串
                    $truncatedString = Str::limit($stringWithoutTags);

                    $form->input('abstract',$truncatedString);
                }

            });

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
