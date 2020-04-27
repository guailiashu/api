<?php

namespace App\Admin\Controllers;

use App\Models\Navigation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NavigationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Navigation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Navigation());

        $grid->column('id', __('Id'));
        $grid->column('c_route', __('C route'));
        $grid->column('column', __('Column'));
        $grid->column('anable', __('Anable'));

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
        $show = new Show(Navigation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('c_route', __('C route'));
        $show->field('column', __('Column'));
        $show->field('anable', __('Anable'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Navigation());

        $form->text('c_route', __('C route'));
        $form->text('column', __('Column'));
        $form->number('anable', __('Anable'));

        return $form;
    }
}
