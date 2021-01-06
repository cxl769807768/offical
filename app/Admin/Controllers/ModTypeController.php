<?php

namespace App\Admin\Controllers;

use App\ModType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;


class ModTypeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '栏目';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ModType());
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('icon', __('Icon'));
        $grid->column('pid', '父级分类ID')->default(0);
        $grid->column('parent.name', '父级分类');
        $grid->column('status',"状态")->using(['0' => '禁用', '1' => '正常'])->label([
            0=> 'warning',
            1 => 'success',
        ]);
        $grid->column('isShow',"显示")->using(['0' => '不显示', '1' => '显示'])->label([
            0=> 'warning',
            1 => 'success',
        ]);
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
        $show = new Show(ModType::findOrFail($id));
        $show->field('name', __('Name'));
        $show->field('icon', __('Icon'));
        $show->field('pid', '父级分类ID');
        $show->field('parent.name', '父级分类');
        $show->field('status',"状态")->using(['0' => '禁用', '1' => '正常'])->label();
        $show->field('isShow',"显示")->using(['0' => '不显示', '1' => '显示'])->label();
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
        $arr = [];
        $arr1 = [];
        $pids = ModType::selectOptions();

//        $arr[0]['id'] = 0;
//        $arr[0]['name'] = "顶级";
//        array_walk($arr,function($item) use (&$pids) {
//            array_unshift($arr1, $pids);
//        });
//        print_r($arr);exit;
        $form = new Form(new ModType());
        $form->text('name', __('Name'));
        $form->text('icon', __('Icon'))->rules('nullable');
        $form->select('pid', '父级')->options($pids);
        $form->select('status',"状态")->options(['0' => '禁用', '1' => '正常']);
        $form->select('isShow',"显示")->options(['0' => '不显示', '1' => '显示']);
        return $form;
    }
}
