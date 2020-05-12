<?php

namespace App\Admin\Controllers\School;

use App\Models\School\Image;
use App\Models\School\School;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ImageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '分校图集';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Image());

        $grid->column('id', __('Id'))->sortable()->badge('blue');
        $grid->column('image_route', __('图集'))->image('','70','50');
        $grid->column('school_id', __('对应分校'))->display(function ($school_id){
            $school = School::where('id',$school_id)
                ->select('name')
                ->value('name');
            return $school;
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
        $show = new Show(Image::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image_route', __('图集'));
        $show->field('school_id', __('对应分校'));
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
        $form = new Form(new Image());

        $form->image('image_route', __('图集'))->uniqueName();
        $form->select('school_id', __('对应分校'))->options(Image::getSelect())->default(1);

        return $form;
    }
}
