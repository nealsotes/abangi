<?php

namespace App\Admin\Controllers;

use App\Models\Item;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Item';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Item());

        $grid->column('id', __('Id'));
        $grid->column('item_category_id', __('Item category id'));
        $grid->column('user_id', __('User id'));
        $grid->column('user_image', __('User image'));
        $grid->column('item_name', __('Item name'));
        $grid->column('item_desc', __('Item desc'));
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
        $show = new Show(Item::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('item_category_id', __('Item category id'));
        $show->field('user_id', __('User id'));
        $show->field('user_image', __('User image'));
        $show->field('item_name', __('Item name'));
        $show->field('item_desc', __('Item desc'));
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
        $form = new Form(new Item());

        $form->number('item_category_id', __('Item category id'));
        $form->number('user_id', __('User id'));
        $form->text('user_image', __('User image'));
        $form->text('item_name', __('Item name'));
        $form->text('item_desc', __('Item desc'));

        return $form;
    }
}
