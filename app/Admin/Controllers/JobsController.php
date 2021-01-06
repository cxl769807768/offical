<?php

namespace App\Admin\Controllers;

use App\Jobs;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JobsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '岗位';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Jobs());
        $name = request()->input('name');
        $grid->column('id', 'ID')->sortable();
        $grid->model()->orderBy('id', 'desc');
        if(!empty($name)){
            $grid->model()->where('name', 'like', $name);
        }
        $grid->column('id', __('Id'));
        $grid->column('name', __('名称'));
        $grid->column('subtitle', __('描述'));
        $grid->column('status',"状态")->using(['0' => '禁用', '1' => '正常'])->label([
            0=> 'warning',
            1 => 'success',
        ]);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));


        $grid->filter(function(Grid\Filter $filter){
            $filter->like('name', '名称');
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
        $show = new Show(Jobs::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('desc', __('Desc'));
        $show->field('subtitle', __('Subtitle'));
        $show->field('status','状态')->using(['0' => '禁用', '1' => '正常'])->label();
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
        $form = new Form(new Jobs());
        $directors = [
            0 => '禁用',
            1 => '正常',
        ];
        $form->text('name', __('Name'))->required();
        $form->text('subtitle', __('Subtitle'))->required();
        $form->select('status', '状态')->options($directors)->required();
        $form->editor('desc', __('详情'))->required();
        return $form;
    }
}
