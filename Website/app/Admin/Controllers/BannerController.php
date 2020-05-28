<?php

namespace App\Admin\Controllers;

use App\Models\Banner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BannerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '轮播图';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Banner());

        $grid->column('id', __('Id'));
        $grid->column('image', __('图片'))->image('','70','50');
        $grid->column('title', __('图片标题'));
        $grid->column('type_id', __('类型'))->display(function ($type){
            if($type == 1){
                $type_name = 'pc端';
            }else{
                $type_name = '移动端';
            }
            return $type_name;
        });
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
        $show = new Show(Banner::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('title', __('Title'));
        $show->field('type_id', __('Type id'));
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
        $form = new Form(new Banner());

        $form->image('image', __('轮播图'))->uniqueName();
        $form->text('title', __('标题'));
        $form->select('type_id', __('类型'))->options([
            1=>'pc端',
            2=>'移动端'
        ]);

        return $form;
    }
}
