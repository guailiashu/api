<?php

namespace App\Admin\Controllers\About;

use App\Models\About\Course;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CourseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '发展历程';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Course());

        $grid->column('id', __('Id'))->sortable()->badge('blue');
        $grid->column('image', __('图片'))->image('','70','50');
        $grid->column('time', __('历程'));
        $grid->column('title', __('标题'));
        $grid->column('e_title', __('注释'));
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
        $show = new Show(Course::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('图片'));
        $show->field('time', __('历程'));
        $show->field('title', __('标题'));
        $show->field('e_title', __('注释'));
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
        $form = new Form(new Course());

        $form->image('image', __('图片'))->uniqueName();
        $form->datetime('time', __('历程'))->format('YYYY');
        $form->text('title', __('标题'));
        $form->text('e_title', __('注释'));

        return $form;
    }
}
