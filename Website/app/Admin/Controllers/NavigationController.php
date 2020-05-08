<?php

namespace App\Admin\Controllers;

use App\Models\Navigation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;

class NavigationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '导航栏';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Navigation());

        $grid->column('id', __('Id'))->sortable()->badge('blue');
        $grid->column('c_route', __('对应路由'));
        $grid->column('column', __('栏目名'));
        $grid->column('anable', __('是否使用'))->display(function ($anable){
                    if(1 == $anable){
                        $typeAnable = '使用中';
                    }else{
                        $typeAnable = '未启用';
                    }
                    return $typeAnable;
        });

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

        $show->field('id', __('ID编号'));
        $show->field('c_route', __('对应路由'));
        $show->field('column', __('栏目名'));
//        $show->field('anable', __('Anable'));

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

        $form->text('c_route', __('对应路由'));
        $form->text('column', __('栏目名'));
        $form->select('anable', __('是否使用'))->options([
            1 => '启用',
            2 => '不启用'
        ]);
        return $form;
    }



}
