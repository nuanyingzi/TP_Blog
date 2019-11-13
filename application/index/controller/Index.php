<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $blogs = db('article')
                    ->field('a.id,a.summary,a.title,a.clicks,a.comment_num,a.create_time,a.thumb,b.sort')
                    ->alias('a')
                    ->join('article_category b', 'a.sort_id = b.sort_id')
                    ->order('a.create_time desc')
                    ->limit(5)
                    ->select();
        foreach($blogs as &$value)
        {
            $value['create_time'] = date('Y-m-d', $value['create_time']);
        }
        $this->assign('blogs', $blogs);
        return $this->fetch();
    }

    //博客详情页
    public function detail($id)
    {
        $id = intval($id);
        $detail = db('article')
                    ->field('a.sort_id, a.title, a.summary, a.content, a.clicks, a.comment_num, a.create_time, a.thumb, b.sort')
                    ->alias('a')
                    ->join('article_category b', 'a.sort_id = b.sort_id')
                    ->where(array('id' => $id))
                    ->find();
        $detail['create_time'] = date('Y-m-d H:i:s' ,$detail['create_time']);
        $this->assign('detail', $detail);

        //上一篇博客
        $previous = db('article')
                    ->field('id, title')
                    ->where(array('id' => ($id - 1) ))
                    ->find();
        
        //下一篇博客
        $next = db('article')
                    ->field('id, title')
                    ->where(array('id' => ($id + 1) ))
                    ->find();
                    
        $this->assign('previous', $previous);
        $this->assign('next', $next);

        return $this->fetch();
    }
}
