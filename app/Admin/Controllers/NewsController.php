<?php

namespace App\Admin\Controllers;

use App\Categories;
use App\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use PhpParser\Node\Expr\AssignOp\Mod;
use Symfony\Component\Console\Helper\Helper;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '新闻';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        $grid = new Grid(new News());
        $title = request()->input('title');


        $grid->column('id', 'ID')->sortable();
        $grid->model()->orderBy('id', 'desc');
        if(!empty($title)){
            $grid->model()->where('title', 'like', $title);
        }

        $grid->column('id', __('Id'));
        $grid->column('title', "标题");
        $grid->column('subtitle', "副标题");
        $grid->column('cover', "封面")->image();
        $grid->column('author', "作者");
        $grid->column('cid', "栏目ID");
        $grid->column('NewsCid.cate_name', "栏目")->label("primary");
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

        $show = new Show(News::findOrFail($id));
        $show->field('title', "标题");
        $show->field('subtitle', "副标题");
        $show->field('cover', __('Cover'))->image();
        $show->field('author', "作者");
        $show->field('cid', "栏目ID");
        $show->field('newsCid.cate_name', "栏目")->label("primary");
        $show->field('status',__('Status'))->using(['0' => '禁用', '1' => '正常'])->label();
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
        $form = new Form(new News());
        $directors = [
            0 => '禁用',
            1 => '正常',
        ];
        $form->text('title', '标题')->required();
        $form->text('subtitle', '副标题')->required();
        $form->text('author', '作者')->required();
        //$form->image('cover','封面')->thumbnail('small', $width = 356, $height = 200)->removable();
        $form->image('cover','封面')->removable()->required();
        $form->select('cid', '栏目')->options(Categories::selectOptions())->required();
        $form->select('status', '状态')->options($directors)->required();
        $form->editor('desc', __('详情'))->required();
        return $form;
    }
}
