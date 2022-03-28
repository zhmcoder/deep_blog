<?php

namespace Andruby\DeepBlog\Controllers;

use Andruby\DeepAdmin\Components\Attrs\SelectOption;
use Andruby\DeepAdmin\Components\Form\Input;
use Andruby\DeepAdmin\Components\Form\InputNumber;
use Andruby\DeepAdmin\Components\Form\Markdown;
use Andruby\DeepAdmin\Components\Form\Select;
use Andruby\DeepAdmin\Components\Form\Upload;
use Andruby\DeepAdmin\Controllers\ContentController;
use Andruby\DeepAdmin\Form;
use Andruby\DeepAdmin\Grid;
use Andruby\DeepAdmin\Models\Content;
use Andruby\DeepBlog\Models\Category;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;


class ArticleController extends ContentController
{

    protected function form($isEdit = 0, $id = null): Form
    {
        $form = new Form(new Content('articles'));
        $form->getActions()->buttonCenter();
        $form->labelPosition('right')->statusIcon(true)
            ->labelWidth('150px');
        $form->item('title', '文章标题')
            ->component(Input::make()->placeholder('请输入文章标题'))
            ->inputWidth(10)->required()
            ->unique(true, 'articles', 'title', '文章标题');;

        $options = [];
        $versions = Category::query()->where('pid', 0)->get()->toArray();
        foreach ($versions as $version) {
            $options[] = SelectOption::make($version['id'], $version['title']);
        }

        $form->item('category_id', '文章分类')
            ->component(
                Select::make(null)->filterable()
                    ->options($options))
            ->inputWidth(100);

        $form->item('thumb', '缩略图')
            ->component(Upload::make()->image()->uniqueName())
            ->help('文章缩略图')
            ->inputWidth(100);

        $form->item('sort', '排序')
            ->component(InputNumber::make()->min(0)
                ->max(9999999)->controlsPosition(''))
            ->help('文章的显示顺序')
            ->inputWidth(100);

        $form->item('content', '文章内容')
            ->component(
                Markdown::make()->style('z-index: 10;height:500px')->showCustomTools(true))
            ->inputWidth(500)->required();

        return $form;
    }
}
