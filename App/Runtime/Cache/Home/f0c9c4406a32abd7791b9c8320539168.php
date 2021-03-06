<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--> 
<html class="no-js" lang="de">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

<title>逛吉市二手街</title>
<link rel="stylesheet" type="text/css" href="/2sjy/Public/home/css/bootstrap.min.css">
<link href="/2sjy/Public/home/css/style.css" rel="stylesheet" type="text/css" />
<link href="/2sjy/Public/home/css/isotope.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="top">
    <div class="top_inner wrapper clearfix">
            
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="row">
              <div class="container-fluid">
                   <div class="col-md-2">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">首页</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="/2sjy/index.php/Index/index">吉首大学二手交易</a>
                        </div>
                    </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <div class="col-md-8">
                      <ul class="nav navbar-nav">
                        <li class="<?php echo isset($flash) ?'':'active';?>"><a href="/2sjy/index.php/Index/index">首页<span class="sr-only">(current)</span></a></li>
                        <li class="<?php echo ($flash == 1 ? 'active':''); ?>"><a href="/2sjy/index.php/Index/index/flash/1">最新</a></li>
                      </ul>
                        <form action="/2sjy/index.php/User/ziliao" class="navbar-form navbar-right" method="get" role="search">
                          <div class="form-group">
                              <input type="text" style="border:1px solid #ccc;" name="name" value="<?php echo ($name); ?>" placeholder="搜一搜">
                  </div>
                          <button type="submit" class="btn btn-default">搜索</button>
                        </form>  
                    </div>
                  <div class="col-md-2">
                    <?php if(empty($_SESSION['userid'])): ?><ul class="nav navbar-nav navbar-right">
                        <li><a href="/2sjy/index.php/Index/login.html">登录</a></li>
                        <li><a href="/2sjy/index.php/Index/sign.html">注册</a></li>   
                      </ul>
                    <?php else: ?>
                      <ul class="">
                        <li><a href="/2sjy/index.php/User/ziliao.html"><?php echo (session('username')); ?></a></li>
                        <li><a href="/2sjy/index.php/Index/loginout.html">退出</a></li>   
                      </ul><?php endif; ?>
                 </div>
                </div>
               </div>
            </div>
          </div>
        </nav>
    </header>
        
    </div>
</section> <!-- END top -->

<div class="row">
    <div class="col-md-2">
      <ul class="nav nav-tabs nav-stacked type" data-spy="affix" data-offset-top="200">
                 <li class="<?php echo isset($type_id)?'':'active';?>"><a href="/2sjy/index.php/Index/index">菜单</a></li>
                 <?php if(is_array($type)): foreach($type as $key=>$t_vol): ?><li class="<?php echo ($type_id == $t_vol['id']?'active':''); ?>"><a href="/2sjy/index.php/Index/Index/type_id/<?php echo ($t_vol["id"]); ?>"><?php echo ($t_vol["name"]); ?></a></li><?php endforeach; endif; ?>
                </ul>
    </div>
    <div class="col-md-8">
            <div class="panel panel-default" style="padding:40px;"> 
              <div class="col-md-1"></div>
              <div class="col-md-2">    
                    <a href="#">
                     <img src="/2sjy/Public<?php echo ($user["head_img"]); ?>">
                    </a>  
              </div>   
                <div class="table-responsive">
                  <div class="col-md-8">
                    
                          <h3><a href="" class="loadcontent"><?php echo (session('username')); ?></a></h3>
                          <span>已发布（）商品</span>  
                    <table class="table">
                      <tbody>
                        <tr>
                          <td><div class="circle pink-bg"></div></td>
                          <td>email：</td>
                          <td><?php echo ($user["email"]); ?></td>                    
                        </tr>  
                        <tr>
                          <td><div class="circle blue-bg"></div></td>
                          <td>qq：</td>
                          <td><?php echo ($user["qq"]); ?></td>                    
                        </tr>  
                        <tr>
                          <td><div class="circle yellow-bg"></div></td>
                          <td>phone：</td>
                          <td><?php echo ($user["phone"]); ?></td>                  
                        </tr>                                      
                      </tbody>
                    </table>
                  </div>
                </div> 
            </div>
         
         <div class="panel panel-default" >
           <ul class="nav nav-tabs nav-justified">
              <li class="active"><a href="ziliao.html">编辑资料</a></li>
               <li><a href="fabu.html">发布的商品</a></li>
               <li><a href="message.html">消息中心</a></li>
               <li><a href="ce.html">认证信息</a></li>
          </ul>
          <form action="/2sjy/index.php/User/edit.html?id=<?php echo ($user["id"]); ?>" method="post" enctype="multipart/form-data">
           <table class="table">
                <tbody>
                        <tr>
                           <td><div class="circle pink-bg"></div></td>
                            <td>头像：</td> 
                            <td>
                              <img src="/2sjy/Public<?php echo ($user["head_img"]); ?>" style="width:100px;height:100px">
                              <input type="file" name="head_img" id="name"></td>           
                        </tr>
                        <tr>
                          <td><div class="circle pink-bg"></div></td>
                          <td>email：</td>
                          <td><input type="text" class="form-control" name="email" id="name" value="<?php echo ($user["email"]); ?>"></td>                    
                        </tr>  
                        <tr>
                          <td><div class="circle blue-bg"></div></td>
                          <td>qq：</td>
                          <td><input type="text" class="form-control" name="qq" id="name" value="<?php echo ($user["qq"]); ?>"></td>                    
                        </tr>  
                        <tr>
                          <td><div class="circle yellow-bg"></div></td>
                          <td>phone：</td>
                          <td><input type="text" class="form-control" name="phone" id="name" value="<?php echo ($user["phone"]); ?>"></td>                  
                        </tr>
                        <tr>
                          <td><div class="circle yellow-bg"></div></td>
                          <td>院校：</td>
                          <td> 
                            <select class="form-control" name="school_id">
                            <?php if(is_array($school)): foreach($school as $key=>$vol): ?><option value="<?php echo ($vol["id"]); ?>"><?php echo ($vol["name"]); ?></option><?php endforeach; endif; ?>
                            </select>
                    </td>                  
                        </tr>
                        <tr>
                           <td><div class="circle yellow-bg"></div></td>
                          <td></td>
                          <td><button type="submit" name="sub" value="true" class="templatemo-blue-button">确定修改</button></td>
                        </tr>
                                                
                </tbody>
            </table>
            </form>
         </div>
       
          
    </div> 
    <div class="col-md-2">
       <a href="/2sjy/index.php/Goods/fabu.html" class="btn btn-default btn-lg">我要发布</a>
    </div> 
</div>
    
<footer id="footer">
	<div class="footer_inner wrapper clearfix">
        <div class="left_float">作者：苏玉环</div>     
        <div class="right_float">逛吉市二手交易市场</div>  </div>           
</footer>

<section id="bottom">
	<div id="slideup">
    	<a href="" class="">bottom</a>
    </div>
</section>
<!-- jquery -->
<script src="/2sjy/Public/home/js/jquery-1.9.1.min.js"></script>
<script src="/2sjy/Public/home/js/bootstrap.min.js"></script>
<script src="/2sjy/Public/home/js/jquery.isotope.min.js"></script>
<script src="/2sjy/Public/home/js/script.js"></script>
</body>
</html>