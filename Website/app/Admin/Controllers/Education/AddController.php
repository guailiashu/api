<?php

namespace App\Admin\Controllers\Education;

use App\Models\Education\Add;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use function foo\func;
use Illuminate\Support\Facades\DB;

class AddController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '地区';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Add());

        $grid->column('id', __('Id'))->sortable()->badge('blue');
        $grid->column('address', __('地区名称'));
        $grid->column('add_type_name', __('页面的编号'));
        $grid->column('enducation_id', __('对应分类'))->display(function ($type_id){
            $name=DB::table('home_educations')
                ->where('id',$type_id)
                ->select('name')
                ->value('name');
            return $name;
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
        $show = new Show(Add::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('address', __('地区名称'));
        $show->field('add_type_name', __('页面的编号'));
        $show->field('enducation_id', __('对应分类'));
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
        $form = new Form(new Add());

        $form->text('address', __('地区名称'));
        $form->text('add_type_name', __('页面的编号'));
        $form->select('enducation_id', __('对应分类'))->options(Add::getSelect());

        return $form;
    }
}
