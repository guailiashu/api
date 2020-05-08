<?php

namespace App\Admin\Controllers;

use App\Models\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '新闻页';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->column('id', __('Id'));
        $grid->column('image', __('图片'))->image('','70','50');
        $grid->column('title', __('标题'));
        $grid->column('type_id', __('新闻类型'))->display(function ($type_id){
            $name=DB::table('home_news_types')
                ->where('id',$type_id)
                ->select('name')
                ->value('name');
            return $name;
        });
//        $grid->column('details', __('详情'));
        $grid->column('created_at', __('创建时间'));
//        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(News::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('图片'));
        $show->field('title', __('标题'));
        $show->field('type_id', __('新闻类型'));
        $show->field('details', __('详情'));
        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('更新时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

        $form->image('image', __('图片标识'));
        $form->text('title', __('标题'));
        $form->select('type_id', __('新闻类型'))->options(News::getSelect());
        $form->textarea('details', __('详情'));

        return $form;
    }
}
