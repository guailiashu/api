<?php

namespace App\Admin\Controllers;

use App\Models\Active;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ActiveController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '研博公益';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Active());

        $grid->column('id', __('Id'))->sortable()->badge('blue');
        $grid->column('name', __('活动名'));
        $grid->column('image', __('图片'))->image('','70','50');
        $grid->column('title', __('标题'));
//        $grid->column('details', __('Details'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

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
        $show = new Show(Active::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('title', __('Title'));
        $show->field('details', __('Details'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Active());

        $form->text('name', __('活动名'));
        $form->image('image', __('图片上传'))->uniqueName();
        $form->text('title', __('标题'));
        $form->textarea('details', __('内容'));

        return $form;
    }
}
