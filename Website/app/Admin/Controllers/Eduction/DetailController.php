<?php

namespace App\Admin\Controllers\Eduction;

use App\Models\Education\Detail;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;
use App\Models\Education\Add;

class DetailController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '高校信息';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Detail());

        $grid->column('id', __('Id'))->sortable()->badge('blue');
        $grid->column('enducation_add_id', __('类型'))->display(function ($type_id){
            $name=DB::table('home_educations')
                ->where('id',$type_id)
                ->select('name')
                ->value('name');
            return $name;
        });
        $grid->column('name', __('学校名称'));
        $grid->column('image', __('学校图片'))->image('','70','50');
        $grid->column('add_id', __('地区'))->display(function ($type_id){
            $name=DB::table('home_education_adds')
                ->where('id',$type_id)
                ->select('address')
                ->value('address');
            return $name;
        });
        $grid->column('school_badge', __('校徽'))->image('','70','50');
//        $grid->column('add_school_index', __('学校主页'));
//        $grid->column('specialty', __('招生专业'));
//        $grid->column('forms', __('招生简章'));
        $grid->column('popular', __('是否热门'))->display(function ($popular){
            if(1 == $popular){
                $typeAnable = '热门';
            }else{
                $typeAnable = '非热门';
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
        $show = new Show(Detail::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('enducation_add_id', __('类型'));
        $show->field('name', __('学校名称'));
        $show->field('image', __('学校图片'));
        $show->field('add_id', __('地区'));
        $show->field('school_badge', __('校徽'));
        $show->field('add_school_index', __('学校主页'));
        $show->field('specialty', __('招生专业'));
        $show->field('forms', __('招生简章'));
        $show->field('popular', __('是否热门'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Detail());

        $form->select('enducation_add_id', __('报考类型'))
            ->options(Detail::getSelect())
            ->load('add_id','/api/eduction/adds');
        $form->select('add_id', __('地区'))->options(function ($id){
            $data = Add::where('enducation_id' ,$id)
                ->pluck('address' , 'id');
//                ->pluck('id' , 'address');
            return $data;

//            $hezuoList = array(
//                "1" => '测试1',
//                "2" => '测试2',
//                "3" => '测试3',
//            );
//
//            return $hezuoList;

//            $options = Add::where('enducation_id' , 1)
//                ->select('id','address')
//                ->get();
//            $selectOption = [];
//            foreach ($options as $option){
//                $selectOption[$option->id] = $option->address;
//            }
////            dd($selectOption);
//            return $selectOption;

        });
        $form->text('name', __('学校名称'));
        $form->image('image', __('学校图片'))->uniqueName();
//        $form->select('add_id', __('地区'))->options(Detail::getAdds());
        $form->text('school_badge', __('校徽'));
        $form->textarea('add_school_index', __('学校主页'));
        $form->textarea('specialty', __('招生专业'));
        $form->textarea('forms', __('招生简章'));

        $states = [
            'on'  => ['value' => 1, 'text' => '热门', 'color' => 'success'],
            'off' => ['value' => 2, 'text' => '非热门', 'color' => 'danger'],
        ];
        $form->switch('popular',__('是否热门'))->states($states)->default(1);
//        $form->number('popular', __('是否热门'))->default(1);

        return $form;
    }
}
