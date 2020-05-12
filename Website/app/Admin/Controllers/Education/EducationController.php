<?php

namespace App\Admin\Controllers\Education;

use App\Models\Education\Education;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EducationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '报考类型';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Education());

        $grid->column('id', __('Id'))->sortable()->badge('blue');
        $grid->column('name', __('报考项目'));
        $grid->column('image', __('图片'))->image('','70','50');
        $grid->column('type_name', __('分类表示'));
        $grid->column('title', __('标题'));
//        $grid->column('details', __('Details'));

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
        $show = new Show(Education::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('type_name', __('Type name'));
        $show->field('title', __('Title'));
        $show->field('details', __('Details'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Education());

        $form->text('name', __('报考项目'));
        $form->image('image', __('图片'))->uniqueName();
        $form->text('type_name', __('分类表示'));
        $form->text('title', __('标题'));
//        $form->textarea('details', __('Details'));

        return $form;
    }
}
