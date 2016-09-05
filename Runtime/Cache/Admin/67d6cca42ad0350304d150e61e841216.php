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
                <a href="#">等级管理</a>
            </li>
            <li class="active">添加等级</li>
        </ul>
    </div>

        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper" style="padding:0 15px">
            
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel-body">
                    <form role="form" action="<?php echo U();?>" class="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label class="item-label">名称 <span class="check-tips">(前台会员等级名称)</span></label>
                                <input type="text" class="form-control" name="level_name" value="<?php echo ($list["level_name"]); ?>" placeholder="名称">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label class="item-label">下限 <span class="check-tips">（当前等级内会员的充值金额下限）</span></label>
                                <input type="text" class="form-control" name="cash_lower" value="<?php echo ($list["cash_lower"]); ?>" placeholder="下限">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label class="item-label">上限 <span class="check-tips">(当前等级内会员的充值金额上限)</span></label>
                                <input type="text" class="form-control" name="cash_highter" value="<?php echo ($list["cash_highter"]); ?>"  placeholder="上限">
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-lg-4">
                        <label class="item-label" for="icon">显示图标<span class="check-tips">（用于设置顶级菜单的图标,直接点击图标更换）</span></label>
                        <b class="<?php echo ($list["icon"]); ?>" style="font-size:30px" id="icons-img"></b>
                        <input type="hidden" class="form-control" name="icon" id="icon" value="<?php echo ($info["module_img"]); ?>">
                        <hr>
                        <div class="col-lg-12" id="icons-list">
                        <i class=""> <span class="btn btn-default btn-xs">清空</span> </i>
                        <i class="fa fa-adjust"></i>
                        <i class="fa fa-anchor"></i>
                        <i class="fa fa-archive"></i>
                        <i class="fa fa-arrows"></i>
                        <i class="fa fa-arrows-h"></i>
                        <i class="fa fa-arrows-v"></i>
                        <i class="fa fa-asterisk"></i>
                        <i class="fa fa-ban"></i>
                        <i class="fa fa-bar-chart-o"></i>
                        <i class="fa fa-barcode"></i>
                        <i class="fa fa-bars"></i>
                        <i class="fa fa-beer"></i>
                        <i class="fa fa-bell"></i>
                        <i class="fa fa-bell-o"></i>
                        <i class="fa fa-bolt"></i>
                        <i class="fa fa-book"></i>
                        <i class="fa fa-bookmark"></i>
                        <i class="fa fa-bookmark-o"></i>
                        <i class="fa fa-briefcase"></i>
                        <i class="fa fa-bug"></i>
                        <i class="fa fa-building-o"></i>
                        <i class="fa fa-bullhorn"></i>
                        <i class="fa fa-bullseye"></i>
                        <i class="fa fa-calendar"></i>
                        <i class="fa fa-calendar-o"></i>
                        <i class="fa fa-camera"></i>
                        <i class="fa fa-camera-retro"></i>
                        <i class="fa fa-caret-square-o-down"></i>
                        <i class="fa fa-caret-square-o-left"></i>
                        <i class="fa fa-caret-square-o-right"></i>
                        <i class="fa fa-caret-square-o-up"></i>
                        <i class="fa fa-certificate"></i>
                        <i class="fa fa-check"></i>
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-check-circle-o"></i>
                        <i class="fa fa-check-square"></i>
                        <i class="fa fa-check-square-o"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle-o"></i>
                        <i class="fa fa-clock-o"></i>
                        <i class="fa fa-cloud"></i>
                        <i class="fa fa-cloud-download"></i>
                        <i class="fa fa-cloud-upload"></i>
                        <i class="fa fa-code"></i>
                        <i class="fa fa-code-fork"></i>
                        <i class="fa fa-coffee"></i>
                        <i class="fa fa-cog"></i>
                        <i class="fa fa-cogs"></i>
                        <i class="fa fa-comment"></i>
                        <i class="fa fa-comment-o"></i>
                        <i class="fa fa-comments"></i>
                        <i class="fa fa-comments-o"></i>
                        <i class="fa fa-compass"></i>
                        <i class="fa fa-credit-card"></i>
                        <i class="fa fa-crop"></i>
                        <i class="fa fa-crosshairs"></i>
                        <i class="fa fa-cutlery"></i>
                        <i class="fa fa-dashboard"></i>
                        <i class="fa fa-desktop"></i>
                        <i class="fa fa-dot-circle-o"></i>
                        <i class="fa fa-download"></i>
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-ellipsis-h"></i>
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-envelope"></i>
                        <i class="fa fa-envelope-o"></i>
                        <i class="fa fa-eraser"></i>
                        <i class="fa fa-exchange"></i>
                        <i class="fa fa-exclamation"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <i class="fa fa-exclamation-triangle"></i>
                        <i class="fa fa-external-link"></i>
                        <i class="fa fa-external-link-square"></i>
                        <i class="fa fa-eye"></i>
                        <i class="fa fa-eye-slash"></i>
                        <i class="fa fa-female"></i>
                        <i class="fa fa-fighter-jet"></i>
                        <i class="fa fa-film"></i>
                        <i class="fa fa-filter"></i>
                        <i class="fa fa-fire"></i>
                        <i class="fa fa-fire-extinguisher"></i>
                        <i class="fa fa-flag"></i>
                        <i class="fa fa-flag-checkered"></i>
                        <i class="fa fa-flag-o"></i>
                        <i class="fa fa-flash"></i>
                        <i class="fa fa-flask"></i>
                        <i class="fa fa-folder"></i>
                        <i class="fa fa-folder-o"></i>
                        <i class="fa fa-folder-open"></i>
                        <i class="fa fa-folder-open-o"></i>
                        <i class="fa fa-frown-o"></i>
                        <i class="fa fa-gamepad"></i>
                        <i class="fa fa-gavel"></i>
                        <i class="fa fa-gear"></i>
                        <i class="fa fa-gears"></i>
                        <i class="fa fa-gift"></i>
                        <i class="fa fa-glass"></i>
                        <i class="fa fa-globe"></i>
                        <i class="fa fa-group"></i>
                        <i class="fa fa-hdd-o"></i>
                        <i class="fa fa-headphones"></i>
                        <i class="fa fa-heart"></i>
                        <i class="fa fa-heart-o"></i>
                        <i class="fa fa-home"></i>
                        <i class="fa fa-inbox"></i>
                        <i class="fa fa-info"></i>
                        <i class="fa fa-info-circle"></i>
                        <i class="fa fa-key"></i>
                        <i class="fa fa-keyboard-o"></i>
                        <i class="fa fa-laptop"></i>
                        <i class="fa fa-leaf"></i>
                        <i class="fa fa-legal"></i>
                        <i class="fa fa-lemon-o"></i>
                        <i class="fa fa-level-down"></i>
                        <i class="fa fa-level-up"></i>
                        <i class="fa fa-lightbulb-o"></i>
                        <i class="fa fa-location-arrow"></i>
                        <i class="fa fa-lock"></i>
                        <i class="fa fa-magic"></i>
                        <i class="fa fa-magnet"></i>
                        <i class="fa fa-mail-forward"></i>
                        <i class="fa fa-mail-reply"></i>
                        <i class="fa fa-mail-reply-all"></i>
                        <i class="fa fa-male"></i>
                        <i class="fa fa-map-marker"></i>
                        <i class="fa fa-meh-o"></i>
                        <i class="fa fa-microphone"></i>
                        <i class="fa fa-microphone-slash"></i>
                        <i class="fa fa-minus"></i>
                        <i class="fa fa-minus-circle"></i>
                        <i class="fa fa-minus-square"></i>
                        <i class="fa fa-minus-square-o"></i>
                        <i class="fa fa-mobile"></i>
                        <i class="fa fa-mobile-phone"></i>
                        <i class="fa fa-money"></i>
                        <i class="fa fa-moon-o"></i>
                        <i class="fa fa-music"></i>
                        <i class="fa fa-pencil"></i>
                        <i class="fa fa-pencil-square"></i>
                        <i class="fa fa-pencil-square-o"></i>
                        <i class="fa fa-phone"></i>
                        <i class="fa fa-phone-square"></i>
                        <i class="fa fa-picture-o"></i>
                        <i class="fa fa-plane"></i>
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-plus-circle"></i>
                        <i class="fa fa-plus-square"></i>
                        <i class="fa fa-plus-square-o"></i>
                        <i class="fa fa-power-off"></i>
                        <i class="fa fa-print"></i>
                        <i class="fa fa-puzzle-piece"></i>
                        <i class="fa fa-qrcode"></i>
                        <i class="fa fa-question"></i>
                        <i class="fa fa-question-circle"></i>
                        <i class="fa fa-quote-left"></i>
                        <i class="fa fa-quote-right"></i>
                        <i class="fa fa-random"></i>
                        <i class="fa fa-refresh"></i>
                        <i class="fa fa-reply"></i>
                        <i class="fa fa-reply-all"></i>
                        <i class="fa fa-retweet"></i>
                        <i class="fa fa-road"></i>
                        <i class="fa fa-rocket"></i>
                        <i class="fa fa-rss"></i>
                        <i class="fa fa-rss-square"></i>
                        <i class="fa fa-search"></i>
                        <i class="fa fa-search-minus"></i>
                        <i class="fa fa-search-plus"></i>
                        <i class="fa fa-share"></i>
                        <i class="fa fa-share-square"></i>
                        <i class="fa fa-share-square-o"></i>
                        <i class="fa fa-shield"></i>
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa fa-sign-in"></i>
                        <i class="fa fa-sign-out"></i>
                        <i class="fa fa-signal"></i>
                        <i class="fa fa-sitemap"></i>
                        <i class="fa fa-smile-o"></i>
                        <i class="fa fa-sort"></i>
                        <i class="fa fa-sort-alpha-asc"></i>
                        <i class="fa fa-sort-alpha-desc"></i>
                        <i class="fa fa-sort-amount-asc"></i>
                        <i class="fa fa-sort-amount-desc"></i>
                        <i class="fa fa-sort-asc"></i>
                        <i class="fa fa-sort-desc"></i>
                        <i class="fa fa-sort-down"></i>
                        <i class="fa fa-sort-numeric-asc"></i>
                        <i class="fa fa-sort-numeric-desc"></i>
                        <i class="fa fa-sort-up"></i>
                        <i class="fa fa-spinner"></i>
                        <i class="fa fa-square"></i>
                        <i class="fa fa-square-o"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-half-empty"></i>
                        <i class="fa fa-star-half-full"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-subscript"></i>
                        <i class="fa fa-suitcase"></i>
                        <i class="fa fa-sun-o"></i>
                        <i class="fa fa-superscript"></i>
                        <i class="fa fa-tablet"></i>
                        <i class="fa fa-tachometer"></i>
                        <i class="fa fa-tag"></i>
                        <i class="fa fa-tags"></i>
                        <i class="fa fa-tasks"></i>
                        <i class="fa fa-terminal"></i>
                        <i class="fa fa-thumb-tack"></i>
                        <i class="fa fa-thumbs-down"></i>
                        <i class="fa fa-thumbs-o-down"></i>
                        <i class="fa fa-thumbs-o-up"></i>
                        <i class="fa fa-thumbs-up"></i>
                        <i class="fa fa-ticket"></i>
                        <i class="fa fa-times"></i>
                        <i class="fa fa-times-circle"></i>
                        <i class="fa fa-times-circle-o"></i>
                        <i class="fa fa-tint"></i>
                        <i class="fa fa-toggle-down"></i>
                        <i class="fa fa-toggle-left"></i>
                        <i class="fa fa-toggle-right"></i>
                        <i class="fa fa-toggle-up"></i>
                        <i class="fa fa-trash-o"></i>
                        <i class="fa fa-trophy"></i>
                        <i class="fa fa-truck"></i>
                        <i class="fa fa-umbrella"></i>
                        <i class="fa fa-unlock"></i>
                        <i class="fa fa-unlock-alt"></i>
                        <i class="fa fa-unsorted"></i>
                        <i class="fa fa-upload"></i>
                        <i class="fa fa-user"></i>
                        <i class="fa fa-users"></i>
                        <i class="fa fa-video-camera"></i>
                        <i class="fa fa-volume-down"></i>
                        <i class="fa fa-volume-off"></i>
                        <i class="fa fa-volume-up"></i>
                        <i class="fa fa-warning"></i>
                        <i class="fa fa-wheelchair"></i>
                        <i class="fa fa-wrench"></i>
                        </div>
                        </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label class="item-label">排序 <span class="check-tips">（按数字排序）</span></label>
                                <input type="text" class="form-control" name="listorder" value="<?php echo ($list["listorder"]); ?>" placeholder="排序">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label class="item-label">兑换策略 <span class="check-tips"></span></label>
                                <textarea name="exchange_policy" id="" class="form-control" rows="6"><?php echo ($list["exchange_policy"]); ?></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="level_id" value="<?php echo ($list["level_id"]); ?>" />
                        <button type="submit" class="btn btn-primary ajax-post" target-form="form">确 定</button>
                        <button class="btn a-back">返 回</button>
                    </form>
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


    <script type="text/javascript">
        //导航高亮
        highlight_subnav("<?php echo U('level');?>");
        $('#icons-list i').click(function () {
            var icon = $(this).attr('class');
            $('#icon').val(icon);
            $('#icons-img').attr('class', icon);
        })

    </script>


</body>
</html>