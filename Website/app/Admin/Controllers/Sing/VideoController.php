<?php

namespace App\Admin\Controllers\Sing;

use App\Models\Sing\Video;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VideoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Sing\Video';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Video());

        $grid->column('id', __('Id'));
        $grid->column('img', __('Img'));
        $grid->column('video_url', __('Video url'));
        $grid->column('navigation_id', __('Navigation id'));
        $grid->column('anable', __('Anable'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Video::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('img', __('Img'));
        $show->field('video_url', __('Video url'));
        $show->field('navigation_id', __('Navigation id'));
        $show->field('anable', __('Anable'));
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
        $form = new Form(new Video());

        $form->image('img', __('Img'));
        $form->text('video_url', __('Video url'));
        $form->text('navigation_id', __('Navigation id'));
        $form->number('anable', __('Anable'));

        return $form;
    }
}
