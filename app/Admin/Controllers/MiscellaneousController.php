<?php

namespace App\Admin\Controllers;

use App\Categories;
use App\Miscellaneous;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MiscellaneousController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Miscellaneous';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Miscellaneous());


        $title = request()->input('title');


        $grid->column('id', 'ID')->sortable();
        $grid->model()->orderBy('id', 'desc');
        if(!empty($title)){
            $grid->model()->where('title', 'like', $title);
        }

        $grid->column('id', __('Id'));
        $grid->column('title', "标题");
        $grid->column('cover', "封面")->image();
        $grid->column('cid', "栏目ID");
        $grid->column('miscellaneousCid.cate_name', "栏目")->label("primary");
        $grid->column('status',"状态")->using(['0' => '禁用', '1' => '正常'])->label([
            0=> 'warning',
            1 => 'success',
        ]);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->filter(function(Grid\Filter $filter){
            $filter->like('title', '标题');
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
        $show = new Show(Miscellaneous::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('cover', __('Cover'))->image();
        $show->field('cid', __('Cid'));
        $show->field('miscellaneousCid.cate_name', "栏目")->label("primary");
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
        $form = new Form(new Miscellaneous());

        $form->text('title', __('Title'))->required();
        $form->image('cover', __('Cover'))->required();
        $form->select('cid', '栏目')->options(Categories::selectOptions())->required();
        return $form;
    }
}
