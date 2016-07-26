<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>妈妈装_妈妈装品牌_中年妈妈装_妈妈穿的衣服|中老年女装|中老年妇女装</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="妈妈装,妈妈装品牌,中老年妈妈装,中年妈妈装,中老年女装,
中老年妇女装,妈妈穿的衣服,妈妈穿的鞋子,妈妈用的包包,妈妈服装,精选妈妈装"/>
    <meta name="description" content="妈妈装网站是一家淘宝导购网站，所有商品都是由买手们推荐的淘宝/天猫爆款热销产品，方便大家为妈妈们挑选更好更满意的商品!"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <link href="http://www.yangyi.com:81/Public/css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="http://www.yangyi.com:81/Public/css/style.css" rel='stylesheet' type='text/css'/>
    <link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <script type="text/javascript" src="http://www.yangyi.com:81/Public/js/jquery-1.11.1.min.js"></script>
    <script src="http://www.yangyi.com:81/Public/js/responsiveslides.min.js"></script>
    <script type="text/javascript" src="http://www.yangyi.com:81/Public/js/hover_pack.js"></script>
    <script>
        $(function () {
            //广告栏加载
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });

            var dianpu=setInterval(function () {
                var w = parseInt($('.dianpu').parent().css('width'));
                var h = parseInt($('.dianpu').height());
                if ($('.dianpu,.dianpu1').is(':animated')) {
                    $('.dianpu,.dianpu1').stop(true, true);
                }
                ml = parseInt($('.dianpu').css('left'));
                sl = parseInt($('.dianpu1').css('left'));
                if (ml <= 0 && ml > w * -1) {
                    $('.dianpu1').css({left: w * -1 + 'px',top:-1*(h)+'px'});
                    $('.dianpu').animate({left: ml + w + 'px', width: w + 'px'}, 'slow');
                    if (ml == 0) {
                        $('.dianpu1').animate({left: (w - w) * -1 + 'px'}, 'slow');
                    }
                }
                else {
                    $('.dianpu').css({left: w * -1 + 'px'});
                    $('.dianpu1').animate({left: sl + w + 'px', width: w + 'px'}, 'slow');
                    if (sl == 0) {
                        $('.dianpu').animate({left: '0px'}, 'slow');
                    }
                }
            }, 2000);

            $("#a").click(function(){
                clearInterval(dianpu);
            })

        });
    </script>
</head>

<div class="header">
    <div class="header_top">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="http://www.yangyi.com:81/Public/images/logo.png" alt=""/></a>
            </div>
            <ul class="shopping_grid">
                <a target="_blank" href="http://s.click.taobao.com/BaS3WWx">
                    <li>爱淘宝</li>
                </a>
                <a target="_blank" href="http://s.click.taobao.com/X96ghVx">
                    <li>聚划算</li>
                </a>
                <a target="_blank" href="http://s.click.taobao.com/yTvfhVx">
                    <li><span class="m_1">淘宝特卖</span>&nbsp;<img src="http://www.yangyi.com:81/Public/images/bag.png" alt=""/></li>
                </a>

                <div class="clearfix"></div>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="h_menu4">
        <div class="container">
            <a class="toggleMenu" href="#">快速入口</a>
            <ul class="nav">
                <li class="active"><a href="index.html" data-hover="首页">首页</a></li>
                <li><a target="_blank" href="//temai.taobao.com/search.htm?q=妈妈装&pid=mm_114400181_13356254_53060478"
                       data-hover="特卖汇">特卖汇</a></li>
                <li><a target="_blank" href="http://s.click.taobao.com/FCKSfVx" data-hover="9块9疯抢">9块9疯抢</a></li>
                <li><a target="_blank" href="http://s.click.taobao.com/878SfVx" data-hover="20元封顶">20元封顶</a></li>
                <li><a target="_blank" href="http://s.click.taobao.com/Y48SfVx" data-hover="50元好货">50元好货</a></li>
                <li><a target="_blank" href="http://s.click.taobao.com/bKASfVx" data-hover="一折清仓">一折清仓</a></li>
                <li><a target="_blank" href="http://s.click.taobao.com/Tl7SfVx" data-hover="全场半价">全场半价</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="slider">
    <div class="callbacks_container">
        <ul class="rslides" id="slider">
            <li><img src="http://www.yangyi.com:81/Public/images/banner1.jpg" class="img-responsive" alt=""/>
                <div class="banner_desc">
                    <h1>We Provide Worlds top fashion for less fashionpress.</h1>
                    <h2>FashionPress the name of the of hi class fashion Web FreePsd.</h2>
                </div>
            </li>
            <li><img src="http://www.yangyi.com:81/Public/images/banner2.jpg" class="img-responsive" alt=""/>
                <div class="banner_desc">
                    <h1>Duis autem vel eum iriure dolor in hendrerit.</h1>
                    <h2>Claritas est etiam processus dynamicus, qui sequitur .</h2>
                </div>
            </li>
            <li><img src="http://www.yangyi.com:81/Public/images/banner3.jpg" class="img-responsive" alt=""/>
                <div class="banner_desc">
                    <h1>Ut wisi enim ad minim veniam, quis nostrud.</h1>
                    <h2>Mirum est notare quam littera gothica, quam nunc putamus.</h2>
                </div>
            </li>
            <li><img src="http://www.yangyi.com:81/Public/images/banner3.jpg" class="img-responsive" alt=""/>
                <div class="banner_desc">
                    <h1>Ut wisi enim ad minim veniam, quis nostrud11111111.</h1>
                    <h2>Mirum est notare quam littera gothica, quam nunc putamus11111111.</h2>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="main">
    <div class="content_top">
        <div class="container">
            <div class="col-md-3 sidebar_box">
                <div class="sidebar">
                    <div class="menu_box">
                        <h3 class="menu_head">商品分类</h3>
                        <ul class="menu">
                            <li class="item5"><a href="#"><img class="arrow-img" src="http://www.yangyi.com:81/Public/images/f_menu.png" alt=""/>精品推荐</a>
                                <!--<ul class="cute">-->
                                    <!--<li class="subitem1"><a href="#">Cute Kittens </a></li>-->
                                    <!--<li class="subitem2"><a href="#">Strange Stuff </a></li>-->
                                    <!--<li class="subitem3"><a href="#">Automatic Fails </a></li>-->
                                <!--</ul>-->
                            </li>
                            <li class="item6"><a href="#"><img class="arrow-img" src="http://www.yangyi.com:81/Public/images/f_menu.png" alt=""/>当季热卖</a>
                            </li>
                            <li class="item1"><a href="#"><img class="arrow-img" src="http://www.yangyi.com:81/Public/images/f_menu.png" alt=""/> 妈妈的衣服</a>
                            </li>
                            <li class="item2"><a href="#"><img class="arrow-img" src="http://www.yangyi.com:81/Public/images/f_menu.png" alt=""/>妈妈的鞋子</a>
                            </li>
                            <li class="item3"><a href="#"><img class="arrow-img" src="http://www.yangyi.com:81/Public/images/f_menu.png" alt=""/>妈妈的包包</a>
                            </li>
                            <li class="item4"><a href="#"><img class="arrow-img" src="http://www.yangyi.com:81/Public/images/f_menu.png" alt=""/>妈妈的礼物</a>
                            </li>
                            <li class="item7"><a href="#"><img class="arrow-img" src="http://www.yangyi.com:81/Public/images/f_menu.png" alt=""/>爸爸的衣服</a>
                            </li>
                            <li class="item8"><a href="#"><img class="arrow-img" src="http://www.yangyi.com:81/Public/images/f_menu.png" alt=""/>爸爸的礼物</a>
                                <ul class="cute">
                                    <li class="subitem1"><a href="#">Cute Kittens </a></li>
                                    <li class="subitem2"><a href="#">Strange Stuff </a></li>
                                    <li class="subitem3"><a href="#">Automatic Fails </a></li>
                                </ul>
                            </li>
                            <li class="item9"><a href="#"><img class="arrow-img" src="http://www.yangyi.com:81/Public/images/f_menu.png" alt=""/>营养健康</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--<div class="delivery">-->
                    <!--<img src="http://www.yangyi.com:81/Public/images/delivery.jpg" class="img-responsive" alt=""/>-->
                    <!--<h3>Delivering</h3>-->
                    <!--<h4>World Wide</h4>-->
                <!--</div>-->
                <!--<div class="twitter">-->
                    <!--<h3>Latest From Twitter</h3>-->
                    <!--<ul class="twt1">-->
                        <!--<i class="twt"> </i>-->
                        <!--<li class="twt1_desc"><span class="m_1">@Contrary</span> to popular belief, Lorem Ipsum is<span class="m_1"> not simply</span></li>-->
                        <!--<div class="clearfix"> </div>-->
                    <!--</ul>-->
                    <!--<ul class="twt1">-->
                        <!--<i class="twt"> </i>-->
                        <!--<li class="twt1_desc"><span class="m_1">There are many</span> variations of passages of Lorem Ipsum available, but the majority <span class="m_1">have suffered</span></li>-->
                        <!--<div class="clearfix"> </div>-->
                    <!--</ul>-->
                    <!--<ul class="twt1">-->
                        <!--<i class="twt"> </i>-->
                        <!--<li class="twt1_desc"><span class="m_1">Lorem Ipsum</span> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has <span class="m_1">been the industry's standard dummy text ever</span></li>-->
                        <!--<div class="clearfix"> </div>-->
                    <!--</ul>-->
                <!--</div>-->
                <!--<div class="clients">-->
                    <!--<h3>Our Happy Clients</h3>-->
                    <!--<h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</h4>-->
                    <!--<ul class="user">-->
                        <!--<i class="user_icon"></i>-->
                        <!--<li class="user_desc"><a href="#"><p>John Doe, Company Info</p></a></li>-->
                        <!--<div class="clearfix"> </div>-->
                    <!--</ul>-->
                <!--</div>-->
            </div>
            <div class="col-md-9 content_right">
                <div class="column_center" style="margin-left:15px;">
                    <div class="">
                        <div class="search">
                            <div class="stay">快速搜索</div>
                            <div class="stay_right">
                                <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') ">
                                <input type="submit" value="">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!--<h4 class="head"><span class="m_2"></span>商品列表</h4>-->
                <?php if(is_array($products)): foreach($products as $key=>$item): ?><div class="top_grid2">
                    <?php if(is_array($item)): foreach($item as $key=>$product): ?><div class="col-md-4 top_grid1-box1">
                            <a target="_blank" href="<?php echo ($product["shortlink"]); ?>">
                            <div class="grid_1">
                                <div class="b-link-stroke b-animate-go  thickbox">
                                    <img src="<?php echo ($product["photo"]); ?>" class="img-responsive" alt=""/> </div>
                                <div class="grid_2">
                                    <p><?php echo ($product["name"]); ?></p>
                                    <ul class="grid_2-bottom">
                                        <li class="grid_2-left"><p><small>淘宝价：¥<?php echo ($product["price"]); ?></small></p></li>
                                        <li class="grid_2-right"><p><small>月销量：<?php echo ($product["sales"]); ?></small></p></li>
                                        <div class="clearfix"> </div>
                                    </ul>
                                </div>
                            </div>
                        </a></div><?php endforeach; endif; ?>
                        <div class="clearfix"> </div>
                    </div><?php endforeach; endif; ?>

                <!--//分页操作-->
                <nav style="text-align: center">
                    <ul class="pagination  pagination-sm">
                        <li>
                            <a href="#">
                                <span aria-hidden="true">《首页</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">上一页</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">下一页</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span aria-hidden="true">尾页》</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
    </div>
</div>
<script type="text/javascript">
    //菜单操作
    $(function() {
        var menu_ul = $('.menu > li > ul'),
                menu_a  = $('.menu > li > a');
        menu_ul.hide();
        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });

    });
</script>
<div class="footer_bg">
</div>
<div class="footer">
    <div class="container">
        <div class="col-md-3 f_grid1">
            <h3 class="font_bold">关于我们</h3>
            <a href="#"><img src="http://www.yangyi.com:81/Public/images/logo.png" alt=""/></a>
            <p>妈妈装网站是一家淘宝导购网站，所有商品都是由买手们推荐的淘宝/天猫爆款热销产品，方便大家为妈妈们挑选更好更满意的商品!</p>
        </div>
        <div class="col-md-9 f_grid3" style="overflow: hidden;">
            <h3 class="font_bold" style="padding-left:25px;">精选店铺</h3>

            <div class="col-md-12 dianpu">
                <div class="col-md-2 top_grid1-box1">
                    <a target="_blank" href="http://s.click.taobao.com/zNfGhVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/fengdian.jpg"
                                     class="img_dianpu" alt="芬典服饰旗舰店"></div>
                            <div class="grid_3">
                                <p>芬典服饰旗舰店</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 top_grid1-box1">
                    <a target="_blank" href="http://s.click.taobao.com/E2gGhVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/lizhimeiyi.jpg"
                                     class="img_dianpu" alt="丽之美衣"></div>
                            <div class="grid_3">
                                <p>丽之美衣</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-2 top_grid1-box1">
                    <a target="_blank" href="http://s.click.taobao.com/f2XGhVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/duoying.jpg"
                                     class="img_dianpu" alt="朵莹旗舰店"></div>
                            <div class="grid_3">
                                <p>朵莹旗舰店</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 top_grid1-box1">
                    <a href="http://s.click.taobao.com/grUGhVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/shuixi.png"
                                     class="img_dianpu" alt="水夕旗舰店"></div>
                            <div class="grid_3">
                                <p>水夕旗舰店</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-2 top_grid1-box1">
                    <a target="_blank" href="http://s.click.taobao.com/EtoefVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/mamadeyichu.jpg"
                                     class="img_dianpu" alt="我和妈妈的衣橱"></div>
                            <div class="grid_3">
                                <p>我和妈妈的衣橱</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 top_grid1-box1">
                    <a target="_blank" href="http://s.click.taobao.com/sjiafVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/jianggang.jpg"
                                     class="img_dianpu" alt="简港旗舰店"></div>
                            <div class="grid_3">
                                <p>简港旗舰店</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-12 dianpu1">
                <div class="col-md-2 top_grid1-box1">
                    <a target="_blank" href="http://s.click.taobao.com/zNfGhVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/fengdian.jpg"
                                     class="img_dianpu" alt="芬典服饰旗舰店"></div>
                            <div class="grid_3">
                                <p>芬典服饰旗舰店1</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 top_grid1-box1">
                    <a target="_blank" href="http://s.click.taobao.com/E2gGhVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/lizhimeiyi.jpg"
                                     class="img_dianpu" alt="丽之美衣"></div>
                            <div class="grid_3">
                                <p>丽之美衣1</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-2 top_grid1-box1">
                    <a target="_blank" href="http://s.click.taobao.com/f2XGhVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/duoying.jpg"
                                     class="img_dianpu" alt="朵莹旗舰店"></div>
                            <div class="grid_3">
                                <p>朵莹旗舰店1</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 top_grid1-box1">
                    <a href="http://s.click.taobao.com/grUGhVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/shuixi.png"
                                     class="img_dianpu" alt="水夕旗舰店"></div>
                            <div class="grid_3">
                                <p>水夕旗舰店</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-2 top_grid1-box1">
                    <a target="_blank" href="http://s.click.taobao.com/EtoefVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/mamadeyichu.jpg"
                                     class="img_dianpu" alt="我和妈妈的衣橱"></div>
                            <div class="grid_3">
                                <p>我和妈妈的衣橱</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 top_grid1-box1">
                    <a target="_blank" href="http://s.click.taobao.com/sjiafVx">
                        <div class="grid_1">
                            <div class="b-link-stroke b-animate-go  thickbox">
                                <img src="http://www.yangyi.com:81/Public/images/jianggang.jpg"
                                     class="img_dianpu" alt="简港旗舰店"></div>
                            <div class="grid_3">
                                <p>简港旗舰店</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer_bottom">
    <div class="container">
        <div class="cssmenu">
            <ul>
                <li><a target="_blank" href="http://s.click.taobao.com/9pDghVx">淘宝/天猫</a></li>
                <li class="active"><a target="_blank" href="http://s.click.taobao.com/X96ghVx">聚划算</a></li>
                <li class="active"><a target="_blank" href="http://s.click.taobao.com/NIighVx">阿里旅行</a></li>
                <li><a target="_blank" href="http://s.click.taobao.com/1fvtVWx">淘宝特卖</a></li>
                <li><a target="_blank" href="http://s.click.taobao.com/BaS3WWx">爱淘宝</a></li>
                <li><a target="_blank"
                       href="http://s.click.taobao.com/t?e=m%3D2%26s%3Dt29T39DAnxMcQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAuLWUZBUjAimOhdZki1E67u1fVFitrT47Iy2CxZ%2FfR4X7%2FKVVelyWWhSgkhMxg%2FlBhmIkXBqRClNTcEU%2BDykfuSM%2BhtH71aX6uIOTs4KMj3yjpOyWSRdiSZDEm2YKA6YIrbIzrZDfgWtwGXLU4WXsy9VHjYc6ze3iXQfmeYHmozgLNmFwzcjFAU%3D">阿里云</a>
                </li>
            </ul>
        </div>
        <div class="copy">
            <p>Copyright &copy; 2016.妈妈装网站</p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<script type="text/javascript" src="http://www.yangyi.com:81/Public/js/nav.js"></script>
</body>
</html>