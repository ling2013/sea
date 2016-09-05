<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>一品农夫</title>
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
    <!-- main content start-->
    <div class="main-content" style="margin-left:0;">

        <!-- page heading start-->
        
    <div class="page-heading">
        <h3>会员</h3>
        <ul class="breadcrumb">
            <li>
                <a href="#">会员管理</a>
            </li>
            <li class="active">会员列表</li>
        </ul>
    </div>

        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper" style="padding:0 15px">
            
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel-body">
                    <div class="operate-body">
                        <div class="pull-left">
                            <a href="<?php echo U('add');?>" class="btn btn-info">添加</a>
                            <a href="<?php echo U('addbatch');?>" class="btn btn-info">批量添加</a>
                        </div>
                        <div class="pull-right search-form form-inline">
                            <form action="" onsubmit="return false">
                                <input type="text" name="query" class="form-control search-input" value="<?php echo I('query');?>"
                                       placeholder="请输用户名/手机号码">
                                注册日期：
                                <input type="text" name="start_time" value="<?php echo I('start_time');?>"
                                       class="laydate-icon form-control search-input" id="start" placeholder="开始时间"/>
                                <input type="text" name="end_time" value="<?php echo I('end_time');?>"
                                       class="form-control search-input laydate-icon" id="end" placeholder="结束时间"/>
                                <a href="javascript:;" class="btn btn-info" id="search">搜索</a>
                            </form>
                        </div>
                    </div>
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>会员名</th>
                                <th>手机号码</th>
                                <th>真实姓名</th>
                                <th>昵称</th>
                                <th>邮箱</th>
                                <th>等级</th>
                                <th>状态</th>
                                <th>注册时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($lists)): if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                        <td><?php echo ($vo["user_name"]); ?></td>
                                        <td><?php echo ($vo["user_phone"]); ?></td>
                                        <td><?php echo ($vo['real_name']?$vo['real_name']:'- -'); ?></td>
                                        <td><?php echo ($vo["nick_name"]); ?></td>
                                        <td><?php echo ($vo["user_email"]); ?></td>
                                        <td><?php echo ($vo["level_name"]); ?></td>
                                        <td><?php echo (get_user_status($vo["status"])); ?></td>
                                        <td><?php echo (date('Y-m-d H:i:s', $vo["reg_time"])); ?></td>
                                        <td>
                                            <a href="<?php echo U('edit', array('uid'=>$vo['uid']));?>">编辑</a>
                                            <?php if($vo["status"] != 1): ?><a href="<?php echo U('state', array('uid'=>$vo['uid'], 'status'=>1));?>"
                                                   class="confirm ajax-get">锁定</a>
                                                <?php else: ?>
                                                <a href="<?php echo U('state', array('uid'=>$vo['uid'], 'status'=>0));?>"
                                                   class="confirm ajax-get">解锁</a><?php endif; ?>
                                            <a href="<?php echo U('showaddr', array('uid'=>$vo['uid']));?>">查看收货地址</a>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php else: ?>
                                <tr>
                                    <td colspan="12" class="text-center">暂无数据</td>
                                </tr><?php endif; ?>
                            </tbody>
                        </table>
                    </section>
                    <div class="page">
                        <?php echo ($page); ?>
                    </div>
                </div>
            </section>
        </div>
    </div>

        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer class="text-center">
            2015 &copy; 一品农夫(河北)有限公司
        </footer>
        <!--footer section end-->
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

    +function () {
        //更改title内容
        $('title', parent.document).html('<?php echo ($meta_title); ?>' + ' | 一品农夫');
        //更改iframe高度
        var $body = $('body');
        var $main_body = $('#main-body', parent.document);

        if ($body.height() < $main_body.height()) {
            $body.height($main_body.height());
        }

//        $('#main-body',parent.document).height($('html').height());
    }();

    function highlight_subnav(url) {

    }

    //窗口重置时改变
    $(window).resize(function () {
        var $body = $('body');
        var $main_body = $('#main-body', parent.document);

        if ($body.height() < $main_body.height()) {
            $body.height($main_body.height());
        }
    });
    $("html").niceScroll({
        styler: "fb",
        cursorcolor: "#65cea7",
        cursorwidth: '6',
        cursorborderradius: '0px',
        background: '#424f63',
        spacebarenabled: false,
        cursorborder: '0',
        zindex: '1000'
    });
</script>


    <script src="/statics/assets/laydate/laydate.js"></script>
    <script>
        var start = {
            elem: '#start',
            format: 'YYYY-MM-DD',
            min: '2015-10-10', //设定最小日期为当前日期
            max: laydate.now(), //最大日期
            istoday: false,
            choose: function (datas) {
                end.min = datas; //开始日选好后，重置结束日的最小日期
                end.start = datas; //将结束日的初始值设定为开始日
            }
        };
        var end = {
            elem: '#end',
            format: 'YYYY-MM-DD',
            min: '2015-10-10',
            max: laydate.now(), //最大日期
            istoday: true,
            choose: function (datas) {
                start.max = datas; //结束日选好后，重置开始日的最大日期
            }
        };
        laydate.skin('molv');
        laydate(start);
        laydate(end);

        $("#search").click(function () {
            var url = "<?php echo U('');?>";
            var query = $('form').serialize();
            query = query.replace(/(&|^)(\w*?\d*?\-*?_*?)*?=?((?=&)|(?=$))/g, '');
            query = query.replace(/^&/g, '');
            if (url.indexOf('?') > 0) {
                url += '&' + query;
            } else {
                url += '?' + query;
            }
            window.location.href = url;
        });
        //回车搜索
        $(".search-input").keyup(function (e) {
            if (e.keyCode === 13) {
                $("#search").click();
                return false;
            }
        });
    </script>


</body>
</html>