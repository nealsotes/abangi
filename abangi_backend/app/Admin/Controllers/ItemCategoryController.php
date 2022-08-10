<?php

namespace App\Admin\Controllers;

use App\Models\ItemCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ItemCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ItemCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ItemCategory());

        $grid->column('id', __('Id'));
        $grid->column('item_name', __('Item name'));
        $grid->column('item_image', __('Item image'));
        $grid->column('item_category_desc', __('Item category desc'));
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
        $show = new Show(ItemCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('item_name', __('Item name'));
        $show->field('item_image', __('Item image'));
        $show->field('item_category_desc', __('Item category desc'));
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
        $form = new Form(new ItemCategory());

        $form->text('item_name', __('Item name'));
        $form->text('item_image', __('Item image'));
        $form->text('item_category_desc', __('Item category desc'));

        return $form;
    }
}
