<?php

namespace App\Admin\Controllers\About;

use App\Models\About\About;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class AboutController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '企业文化';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new About());

        $grid->column('id', __('Id'))->sortable()->badge('blue');
//        $grid->image('图片地址')->image('','70','50');
        $grid->column('image', __('图片'))->image('','70','50');
        $grid->column('title', __('标题'));
        $grid->column('e_title', __('注释'));

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
        $show = new Show(About::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('title', __('Title'));
        $show->field('e_title', __('E title'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new About());

        $form->image('image', __('图片上传'))->uniqueName();
        $form->text('title', __('标题'));
        $form->text('e_title', __('注释'));

        return $form;
    }



}
