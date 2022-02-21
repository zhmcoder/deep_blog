<?php

namespace Andruby\DeepBlog\Controllers;

use Andruby\DeepBlog\BlogRepository;
use Andruby\DeepBlog\Models\Article;
use Andruby\DeepBlog\Models\Category;
use Andruby\DeepBlog\Services\ArticleService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SmallRuralDog\Admin\Facades\Admin;


class BlogController extends Controller
{
    /**
     * @var BlogRepository
     */
    protected $blogRepository;

    protected $menu_list = null;
    protected $galleries = null;
    protected $recent_articles = null;
    protected $common_data = [];

    /**
     * BlogController constructor.
     * @param BlogRepository $blogRepository
     */
    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;

        if (config('deep_blog.settings.auth')) {
            $this->middleware(['auth']);
        } else {
            if (config('deep_blog.settings.middleware')) {
                $this->middleware(config('deep_blog.settings.middleware'));
            }
        }
        $this->menu_list = ArticleService::instance()->menus();
        $this->galleries = ArticleService::instance()->galleries();
        $this->recent_articles = ArticleService::instance()->recentArticles();
        $this->common_data['menus'] = $this->menu_list;
        $this->common_data['galleries'] = $this->galleries;
        $this->common_data['recent_articles'] = $this->recent_articles;
    }

    public function index(Request $request, $pageIndex = 1)
    {
        $articles = ArticleService::instance()
            ->lists($pageIndex, config('deep_blog.home_page_num', 15));

        $page = $this->page($pageIndex);

        return view('Mero::index', array_merge($this->common_data,
            [
                'articles' => $articles,
                'page' => $page,
                'show_404' => count($articles) > 0 ? '0' : '1'
            ]));
    }

    private function page($pageIndex, $cat_id = null)
    {
        $total_page = ArticleService::instance()
            ->totalPage(config('deep_blog.home_page_num', 15), $cat_id);

        $page['current'] = $pageIndex;
        if ($total_page > 0) {
            if ($pageIndex > 1) {
                $page['show_pre'] = true;
                $page['pre_page'] = $pageIndex - 1;
                $page['pre_page_url'] = '/' . $page['pre_page'] . '.html';
            } else {
                $page['show_pre'] = false;
            }

            if ($pageIndex + 1 <= $total_page) {
                $page['show_next'] = true;
                $page['next_page'] = $pageIndex + 1;
                $page['next_page_url'] = '/' . $page['next_page'] . '.html';
            } else {
                $page['show_next'] = false;
            }
        } else {
            $page = null;
        }

        return $page;
    }

    public function category(Request $request, $cat_id, $pageIndex = 1)
    {
        $title = Category::query()->where('id',$cat_id)->value('title');
        $articles = ArticleService::instance()->cat_lists($cat_id);

        $page = $this->page($pageIndex, $cat_id);

        return view('Mero::index', array_merge($this->common_data,
            [
                'articles' => $articles,
                'title' => $title,
                'page' => $page,
                'show_404' => count($articles) > 0 ? '0' : '1'
            ]));
    }

    public function detail(Request $request, $art_id)
    {
        $article = Article::query()
            ->with('category')
            ->with('author')
            ->where('id', $art_id)->first();
        $next = null;
        $pre = null;
        if ($article) {
            $article = $article->toArray();
            $this->blogRepository->markdown_parser($article['content']);
            $article['content'] = $this->blogRepository->content;
            $article['updated_at'] = date('Y-m-d', strtotime($article['updated_at']));
            $show_404 = 0;
            //next
            $next = Article::query()->find($article['id'] + 1);
            //pre
            $pre = Article::query()->find($article['id'] - 1);

        } else {
            $show_404 = '1';
        }


        return view('Mero::detail', array_merge($this->common_data, [
            'article' => $article,
            'title' => $article['title'],
            'show_404' => $show_404,
            'next' => $next,
            'pre' => $pre
        ]));
    }

    public function not_found()
    {
        return view('Mero::404', array_merge($this->common_data, [
            'show_404' => '1'
        ]));
    }
}
