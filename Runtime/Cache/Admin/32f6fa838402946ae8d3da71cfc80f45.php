<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>一品农夫</title>
    <link href="/statics/Admin/css/style.css" rel="stylesheet">
    <link href="/statics/Admin/css/style-responsive.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="/statics/Admin/js/ios-switch/switchery.css" />
    <style>
        .switchery {width: 30px;height: 15px;}
        .switchery small{width: 15px;height: 15px;}
    </style>


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
        <h3>系统</h3>
        <ul class="breadcrumb">
            <li>
                <a href="#">系统管理员</a>
            </li>
            <li class="active">管理员列表</li>
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
                        </div>
                        <div class="pull-right search-form form-inline">
                            <form action="" onsubmit="return false">
                                <input type="text" name="name" class="form-control search-input" value="<?php echo I('name');?>" placeholder="请输入管理员名称">
                                <a href="javascript:;" class="btn btn-info" id="search">搜索</a>
                            </form>
                        </div>
                    </div>
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>用户名</th>
                                    <th>真实姓名</th>
                                    <th>所属组</th>
                                    <th>手机号</th>
                                    <th>邮箱</th>
                                    <th>启用管理员</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($lists)): if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($row["admin_id"]); ?></td>
                                    <td><?php echo ($row["admin_name"]); ?></td>
                                    <td><?php echo ($row["true_name"]); ?></td>
                                    <td><?php echo ($row["group_name"]); ?></td>
                                    <td><?php echo ($row["phone"]); ?></td>
                                    <td><?php echo ($row["email"]); ?></td>
                                    <td>
                                        <input type="checkbox" class="js-switch" data="<?php echo ($row["admin_id"]); ?>" <?php if($row['status'] == 1): ?>checked<?php endif; ?>/>
                                    </td>
                                    <td>
                                        <a title="编辑" href="<?php echo U('edit?id='.$row['admin_id']);?>">编辑</a>
                                        <a class="confirm ajax-get" title="删除" href="<?php echo U('del?id='.$row['admin_id']);?>">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8" class="text-center">暂无数据</td>
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


    <script src="/statics/Admin/js/ios-switch/switchery.js" ></script>
    <script src="/statics/Admin/js/ios-switch/ios-init.js" ></script>
    <script>
        $('.js-switch').change(function(){
            var status = 0;
            var that = $(this);
            var id = that.attr('data');
            if ($(this).is(':checked')) {
                status = 1;
            }
            $.post("<?php echo U('operate');?>", {id:id, 'status':status}, function(res){
                if (res.status == 0) {
                   layer.msg(res.info);
                    setTimeout(function(){
                        window.location.reload();
                    },1000);
                }
            });

        });

        $("#search").click(function(){
            var url = "<?php echo U('index');?>";
            var query  = $('form').serialize();
            query = query.replace(/(&|^)(\w*?\d*?\-*?_*?)*?=?((?=&)|(?=$))/g,'');
            query = query.replace(/^&/g,'');
            if( url.indexOf('?')>0 ){
                url += '&' + query;
            }else{
                url += '?' + query;
            }
            window.location.href = url;
        });

        //回车搜索
        $(".search-input").keyup(function(e){
            if(e.keyCode === 13){
                $("#search").click();
                return false;
            }
        });
    </script>


</body>
</html>