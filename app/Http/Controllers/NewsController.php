<?php
namespace Ltsf\Http\Controllers;

use Ltsf\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsListView($nav)
    {
        return view('news.index', [
            'headerNav' => 'news',
            'nav'       => $nav,
            'newspaper' => [],
        ]);
    }

    public function newsList(Request $request, NewsRepository $newsRepository, $nav)
    {
        list($page, $size) = $this->sanePageAndSize($request);
        try {
            list($count, $news) = $newsRepository->findNews($nav, $page, $size);
            $news = array_map([$this, 'toArray'], $news);

            return $this->json([
                'pages' => intval(ceil($count / $size)),
                'news'  => $news,
            ]);
        } catch (\Exception $ex) {
            return $this->jsonException($ex);
        }
    }

    public function news(NewsRepository $newsRepository, $nav, $id)
    {
        $data = $newsRepository->findNewsById($id);
        return view('news.detail', [
            'headerNav' => 'news',
            'nav'       => $nav,
            'news'      => $data,
        ]);
    }

    private function toArray($news)
    {
        if (!$news)
            return null;
        $newsArray = [
            'id'         => $news->id,
            'title'      => $news->title,
            'type'       => $news->type,
            'content'    => $news->content,
            'created_at' => $news->created_at ? $news->created_at->format('Y-m-d H:i:s') : '',
        ];

        return $newsArray;
    }
}
