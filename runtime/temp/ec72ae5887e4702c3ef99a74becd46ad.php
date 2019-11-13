<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:82:"E:\phpStudy\PHPTutorial\WWW\Blog\public/../application/index\view\index\index.html";i:1568987627;s:76:"E:\phpStudy\PHPTutorial\WWW\Blog\application\index\view\common\resource.html";i:1567694769;s:74:"E:\phpStudy\PHPTutorial\WWW\Blog\application\index\view\common\header.html";i:1567784771;s:76:"E:\phpStudy\PHPTutorial\WWW\Blog\application\index\view\common\siderbar.html";i:1568987783;s:74:"E:\phpStudy\PHPTutorial\WWW\Blog\application\index\view\common\footer.html";i:1567613557;}*/ ?>
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
.carousel-item img{
    width: 100%;
    height: 20%;
}
.blogs{
	width: 100%;
	height: 12rem;
	margin: auto;
	/* background-color: darkgray;  */
	border: 0.05rem solid #DDDDDD;
	margin-top: 1rem;
}
.blogs:hover{
	border: none;
	box-shadow:0.2rem 0.2rem 0.5rem #CCCCCC;
}
.blogs .thumb{
	width:30%;
	height: 84%;
	float:left;
	margin-top: 1rem;
	margin-left: 1rem;
	overflow: hidden;
}
.blogs .thumb img{
	width: 100%;
	height: 100%;
	transition-duration:0.5s;
}
.blogs .thumb img:hover{
	transform: scale(1.2);
    -webkit-transform: scale(1.2); /*Safari 和 Chrome*/
    -moz-transform: scale(1.2); /*Firefox*/
    -ms-transform: scale(1.2); /*IE9*/
    -o-transform: scale(1.2); /*Opera*/
}
.blogs .blog-info{
	width: 62%;
	height: 84%;
	float:left;
	margin-top: 1rem;
	margin-left: 1rem;
	/* border: 0.05rem solid red; */
}
.blogs .blog-info .blog-title{
	width: 100%;
	height: 2rem;
}
.blogs .blog-info .blog-title p{
	font-size: 1.2rem;
	color: #000000;
	overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.blogs .blog-info .blog-summary{
	width: 100%;
	height: 6rem;
	/* border: 0.05rem solid red; */
	margin-top: 0.2rem;
	
}
.blogs .blog-info .blog-summary p{
	font-size: 0.9rem;
	text-indent: 1.6rem;
	line-height: 1.4rem;
	color: #777777;
	overflow:hidden;
	text-overflow:ellipsis; 
	display: -webkit-box;
	-webkit-box-orient: vertical;
	-webkit-line-clamp: 4;
	overflow: hidden;
}
.blogs .blog-info .blog-items{
	width: 100%;
	height: 1.2rem;
	/* border: 0.05rem solid #ccc; */
	line-height: 100%;	
	font-size: 0.8rem;
	color: #3a9472;
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
                <div class="card">
                    <div class="card-header">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <!-- 指示符 -->
                            <ul class="carousel-indicators">
                              <li data-target="#demo" data-slide-to="0" class="active"></li>
                              <li data-target="#demo" data-slide-to="1"></li>
                              <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                           
                            <!-- 轮播图片 -->
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="/static/images/carousel001.jpg">
                              </div>
                              <div class="carousel-item">
                                <img src="/static/images/carousel002.jpg">
                              </div>
                              <div class="carousel-item">
                                <img src="/static/images/carousel003.jpg">
                              </div>
                            </div>
                           
                          </div>
                    </div>
                    <div class="card-body" id="blog">
						<h4>最新文章</h4>
						<?php if(is_array($blogs) || $blogs instanceof \think\Collection || $blogs instanceof \think\Paginator): $i = 0; $__LIST__ = $blogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?>
						<a href="<?php echo url('detail',array('id' => $blog['id'])); ?>">
							<div class="blogs">
								<div class="thumb">
									<img src="/<?php echo $blog['thumb']; ?>" alt="thumb">
								</div>
								<div class="blog-info">
									<div class="blog-title">
										<p><?php echo $blog['title']; ?></p>
									</div>
									<div class="blog-summary">
										<p><?php echo $blog['summary']; ?></p>
									</div>
									<div class="blog-items">
										类别：<?php echo $blog['sort']; ?> 时间：<?php echo $blog['create_time']; ?> 评论：<?php echo $blog['comment_num']; ?> 浏览：<?php echo $blog['clicks']; ?>
									</div>
								</div>
							</div>
						</a>
						<?php endforeach; endif; else: echo "" ;endif; ?>
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
<script type="text/javascript" src="/static/js/cfs.snow.js-master/CFS.Snow.min.js"></script>
<script>
snow.down()
$(function() {
	//微博图标切换
	$('.weibo').mouseenter(function(){
		$(this).attr('src', '/static/images/icons/weibo-gray.png');
	}).mouseleave(function(){
		$(this).attr('src', '/static/images/icons/weibo-colorful.png');
	});

	//qq
	$('.qq').mouseenter(function(){
		$(this).attr('src', '/static/images/icons/qq-gray.png');
	}).mouseleave(function(){
		$(this).attr('src', '/static/images/icons/qq-colorful.png');
	});

	//email
	$('.email').mouseenter(function(){
		$(this).attr('src', '/static/images/icons/email-gray.png');
	}).mouseleave(function(){
		$(this).attr('src', '/static/images/icons/email-colorful.png');
	});
	
	//订阅
	$('.dingyue').mouseenter(function(){
		$(this).attr('src', '/static/images/icons/dingyue-gray.png');
	}).mouseleave(function(){
		$(this).attr('src', '/static/images/icons/dingyue-colorful.png');
	});
})
</script> 
</body>
</html>