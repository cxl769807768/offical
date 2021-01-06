<?php

namespace App\Admin\Controllers;

use App\ApplyJobs;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ApplyJobsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '岗位申请';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ApplyJobs());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('mobile', __('Mobile'));
        $grid->column('email', __('Email'));
        $grid->column('job_name', __('Job name'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->disableCreateButton();
        $grid->disableActions();
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
        $show = new Show(ApplyJobs::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('mobile', __('Mobile'));
        $show->field('email', __('Email'));
        $show->field('job_name', __('Job name'));
        $show->field('resume', __('Resume'))->file();
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
        $form = new Form(new ApplyJobs());

        $form->text('name', __('Name'));
        $form->mobile('mobile', __('Mobile'));
        $form->email('email', __('Email'));
        $form->text('job_name', __('Job name'));
//        $form->text('resume', __('Resume'));

        return $form;
    }
}
