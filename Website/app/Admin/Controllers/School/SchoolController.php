<?php

namespace App\Admin\Controllers\School;

use App\Models\School\School;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SchoolController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '分校';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new School());

        $grid->column('id', __('Id'))->sortable()->badge('blue');
        $grid->column('name', __('分校名称'));
        $grid->column('image', __('图标'))->image('','70','50');
        $grid->column('title', __('标题'));
        $grid->column('tel', __('联系电话'));
        $grid->column('address', __('分校地址'));
//        $grid->column('details', __('Details'));
//        $grid->column('navigation_route', __('Navigation route'));

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
        $show = new Show(School::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('title', __('Title'));
        $show->field('tel', __('Tel'));
        $show->field('address', __('Address'));
        $show->field('details', __('Details'));
        $show->field('navigation_route', __('Navigation route'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new School());

        $form->text('name', __('分校名称'));
        $form->image('image', __('图片'))->uniqueName();
        $form->text('title', __('标题'));
        $form->mobile('tel', __('联系电话'))->options(['mask' => '999 9999 9999']);
        $form->text('address', __('地址'));
//        $form->textarea('details', __('Details'));
//        $form->text('navigation_route', __('Navigation route'));

        return $form;
    }
}
