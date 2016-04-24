<?php
namespace Ltsf\Repositories;

use Ltsf\News;

class NewsRepository
{

    public function add($news)
    {
        return News::create($news)->id;
    }

    public function findNewsById($id)
    {
        return News::where('id', $id)->first();
    }

    public function findNews($type = null, $page = null, $size = 10)
    {
        $query = News::orderBy('created_at', 'desc');
        if (!is_null($type)) {
            $query->where('type', $type);
        }
        if (!is_null($page)) {
            $query->forPage($page, $size);
        }
        $count = $query->count();
        $data = $query->get()->all();

        return [$count, $data];
    }

    public function findLatestPiecesOfNews($size = 10)
    {
        return News::orderBy('created_at', 'desc')
                       ->take($size)->get();
    }
}
