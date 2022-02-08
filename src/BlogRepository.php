<?php


namespace Andruby\DeepBlog;

use Andruby\DeepBlog\Models\Article;
use Andruby\DeepBlog\Models\Catalog;
use Andruby\DeepBlog\Models\Documents;
use BinaryTorch\LaRecipe\Models\Documentation;
use BinaryTorch\LaRecipe\DocumentationRepository;
use BinaryTorch\LaRecipe\Traits\HasBladeParser;
use BinaryTorch\LaRecipe\Traits\HasDocumentationAttributes;
use BinaryTorch\LaRecipe\Traits\HasMarkdownParser;
use BinaryTorch\LaRecipe\Traits\Indexable;
use Illuminate\Database\Eloquent\Concerns\HasAttributes;

class BlogRepository extends DocumentationRepository
{
    use HasBladeParser, HasMarkdownParser;

    /**
     * @param $version
     * @param null $page
     * @param array $data
     * @return BlogRepository
     */
    public function get1($art_id)
    {

        $this->content = $this->markdown_parser($art_id);

        if (is_null($this->content)) {
            return $this->prepareNotFound();
        }

        $this->prepareTitle()
            ->prepareCanonical();

        return $this;
    }

    public function markdown_parser($parsedContent)
    {
        $parsedContent = $this->parse($parsedContent);
        $parsedContent = $this->replaceLinks('1.0', $parsedContent);
        $this->content = $parsedContent;

        $this->renderBlade($parsedContent, []);
        return $this;
    }

    public static function replaceLinks($version, $content)
    {
        $content = str_replace('{{version}}', $version, $content);

        $content = str_replace('{{route}}', trim(config('larecipe.docs.route'), '/'), $content);

        $content = str_replace('"#', '"' . request()->getRequestUri() . '#', $content);

        return $content;
    }

    public function getIndex($version)
    {

        $catalog_list = Catalog::query()->where('project_id', 1)->get();
        $index = "";
        foreach ($catalog_list as $catalog) {
            $index .= "- ## " . $catalog['title'] . "\n";
            $article_list = Documents::query()->where('catalog_id', $catalog['id'])->get();
            foreach ($article_list as $article) {
                $index .= "   - [" . $article['title'] . "](/detail/" . $article['id'] . ".html)\n";
            }
        }
        $parsedContent = $this->parse($index);

        return $this->replaceLinks($version, $parsedContent);


//        return $this->cache->remember(function() use($version) {
//            $path = base_path(config('larecipe.docs.path').'/'.$version.'/index.md');
//
//            if ($this->files->exists($path)) {
//                $parsedContent = $this->parse($this->files->get($path));
//
//                return $this->replaceLinks($version, $parsedContent);
//            }
//
//            return null;
//        }, 'larecipe.docs.'.$version.'.index');
    }


}