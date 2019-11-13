<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:83:"E:\phpStudy\PHPTutorial\WWW\Blog\public/../application/index\view\index\detail.html";i:1567867075;s:76:"E:\phpStudy\PHPTutorial\WWW\Blog\application\index\view\common\resource.html";i:1567694769;s:74:"E:\phpStudy\PHPTutorial\WWW\Blog\application\index\view\common\header.html";i:1567784771;s:76:"E:\phpStudy\PHPTutorial\WWW\Blog\application\index\view\common\siderbar.html";i:1568987783;s:74:"E:\phpStudy\PHPTutorial\WWW\Blog\application\index\view\common\footer.html";i:1567613557;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/bootstrap-4.3.1/dist/css/bootstrap.min.css">  
<script src="/static/bootstrap-4.3.1/dist/js/jquery-3.4.1.min.js"></script>  
<script src="/static/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script> 
<script src="/static/bootstrap-4.3.1/dist/js/vue.js"></script> 


    <title>格子博客</title>
<link type="text/css" rel="stylesheet" href="/static/css/index/common.css">
<style>
#detail{
    margin-top: 1rem;
}
.card-header{
    background-color: #FFFFFF;
}
.info{
    font-size: 0.9rem;
    color: rgb(88, 88, 88);
}
.summary{
    /* background-color: aquamarine; */
    /* color:aquamarine; */
}
.summary span{
    font-weight: bold;
}
.thumb{
    margin-top: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
}
.thumb img{
    width: 90%;
    height: 24rem;
    /* text-align: center; */
}
.content{
    margin-top: 1rem;
}

.card-footer{
    background-color: #FFFFFF;
}
</style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-info navbar-light">
    <a href="<?php echo url('index/index'); ?>" class="navbar-brand text-danger">格子</a>
    <ul class="navbar-nav">
        <li class="nav-item"><a href="<?php echo url('index/index'); ?>" class="nav-link">首页</a></li>
        <li class="navbar-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">技术</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">php</a>
                    <a class="dropdown-item" href="#">前端</a>
                    <a class="dropdown-item" href="#">mysql</a>
                    <a class="dropdown-item" href="#">linux</a>
                </div>
            </li>
        <li class="nav-item"><a href="#" class="nav-link">随记</a></li>
        <li class="nav-item"><a href="#" class="nav-link">留言</a></li>
    </ul>
</nav>
    <!-- <div class="row justify-content-center"> -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card" id="detail">
                    <div class="card-header">
                        <h4><?php echo $detail['title']; ?></h4>
                        <div class="info">分类：<a href="#"><?php echo $detail['sort']; ?></a>&nbsp;&nbsp;编辑时间：<?php echo $detail['create_time']; ?>&nbsp;&nbsp;<?php echo $detail['clicks']; ?>次浏览</div>
                    </div>
                    <div class="card-body">
                        <div class="summary">
                            <span>简介：</span>
                            <?php echo $detail['summary']; ?>
                        </div>
                        <div class="thumb">
                            <img src="/<?php echo $detail['thumb']; ?>" alt="图片">
                        </div>
                        <div class="content">
                            <?php echo $detail['content']; ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php if(($previous == null)): ?>
                            <p>< 上一篇：无</p>
                        <?php else: ?>
                            <p>< 上一篇：<a href="<?php echo url('detail',array('id' => $previous['id'])); ?>"><?php echo $previous['title']; ?></a></p>
                        <?php endif; if(($next == null)): ?>
                            <p>< 下一篇：无</p>
                        <?php else: ?>
                            <p>> 下一篇：<a href="<?php echo url('detail', array('id' => $next['id'])); ?>"><?php echo $next['title']; ?></a></p>
                        <?php endif; ?>
                        <h6>评论<?php echo $detail['comment_num']; ?>条</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
    <div class="search">
        <form class="form-inline">
                <input class="form-control" type="text" placeholder="搜索">
                <button type="button" class="btn btn-info">GO</button>
        </form>
    </div> 
    <!-- 联系方式 -->
    <div class="contact">
        <h5>与我联系</h5>
        <ul>
            <li>
                <div class="contact-li">
                    <img class="weibo" src="/static/images/icons/weibo-colorful.png" alt="微博">
                </div>
            </li>
            <li>
                <div class="contact-li">
                    <img class="qq" src="/static/images/icons/qq-colorful.png" alt="QQ">
                </div>
            </li>
            <li>
                <div class="contact-li">
                    <img class="email" src="/static/images/icons/email-colorful.png" alt="邮箱">
                </div>
            </li>
            <li>
                <div class="contact-li">
                    <img class="dingyue" src="/static/images/icons/dingyue-colorful.png" alt="订阅">
                </div>
            </li>
        </ul>
    </div>
</div>
        </div>
    </div>
    <div class="container">
            <footer class="navbar-fixed-bottom">
    <div class="contianer">秣马厉兵 砥砺前行</div>
</footer>
    </div>
    
<script>
</script> 
</body>
</html>