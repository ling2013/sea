<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>一品农夫管理平台</title>
    <link href="/statics/Admin/css/style.css" rel="stylesheet">
    <link href="/statics/Admin/css/style-responsive.css" rel="stylesheet">

    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/statics/Admin/js/html5shiv.js"></script>
    <script src="/statics/Admin/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">
        
        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="#"><img src="/statics/Admin/images/logo.png" alt=""></a>
        </div>
        <div class="logo-icon text-center">
            <a href="#"><img src="/statics/Admin/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->
        
        <div class="left-side-inner">
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="" class="media-object">
                    <div class="media-body">
                        <h4><a href="#"></a></h4>
                    </div>
                </div>
            </div>
            <!--sidebar nav start-->
            <?php echo (session('sidebar')); ?>
            <!--sidebar nav end-->
        </div>
    </div> 
    <!-- left side end -->

    <!-- main content start-->
    <div class="main-content" style="padding-top:0">
        
        <!-- header section start-->
        <div class="header-section">
            
            <!--  toggle button start -->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--  toggle button end -->
        
            <!--  notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li id="msg_cont">
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge" id="notice">0</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">系统通知</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="<?php echo U('Feedback/index', array('status'=>0));?>" target="main-body" style="display: block;">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">用户反馈</span>
                                        <span class="badge" id="feedback">0</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span><?php echo session('admin.admin_name');?></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i> 个人资料</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> 上传头像</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>  修改密码</a></li>
                            <li><a href="<?php echo U('Public/logout');?>"><i class="fa fa-sign-out"></i> 安全退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--  notification menu end -->
        
        </div>
        <!-- header section end todo 主页请求地址 -->
        <iframe src="" id="main-body" name="main-body" frameborder="0" style="width:100%;"></iframe>
    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/statics/Admin/js/jquery-1.10.2.min.js"></script>
<script src="/statics/Admin/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/statics/Admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/statics/Admin/js/bootstrap.min.js"></script>
<script src="/statics/Admin/js/modernizr.min.js"></script>
<script src="/statics/Admin/js/jquery.nicescroll.js"></script>
<script src="/statics/assets/layer/layer.js" type="text/javascript"></script>
<!--common scripts for all pages-->
<script src="/statics/Admin/js/scripts.js"></script>
<script src="/statics/Admin/js/common.js"></script>
<script>
    //菜单高亮
    $('.left-side-inner .menu-list li').click(function(){
        $('.left-side-inner li').removeClass('nav-active active');
        $(this).addClass('active').parents('li').addClass('nav-active');
    });

    if (window.top !== window.self) {
        document.write = '';
        window.top.location.href = window.self.location.href;
        setTimeout(function () {
            document.body.innerHTML = '';
        }, 0);
    }

    var browser_visible_region_height=document.documentElement.clientHeight - 10; //获取浏览器可见区域高度
    $('#main-body').height(browser_visible_region_height);
    $(window).resize(function (){
        var browser_visible_region_height=document.documentElement.clientHeight - 10; //获取浏览器可见区域高度
        $('#main-body').height(browser_visible_region_height);
    });
    //定时请求当前页面是否刷新过
//    setInterval(function () {
//        $.ajax({
//            type: 'POST',
//            url: '<?php echo U("Notice/stats");?>',
//            success: function (data) {
//                $('#notice').html(data.total);
//                $('#feedback').html(data.feedback);
//            }
//        });
//    }, 2000);

</script>



</body>
</html>