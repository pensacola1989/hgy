<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    {{ HTML::style('/styles/global.css') }}
    {{ HTML::style('/styles/tree.css') }}
</head>
<body>

<div class="wrapper">
	 <div class="navbar navbar-fixed-top mynav" role="navigation">
      <div class="pull-left">
        <div class="navbar-header">
          <img id="logo" src="/images/logotop.png">
          <a class="myhover navbar-brand" href="#">哈公益</a>
          @if(Auth::check())
          <a href="javascript:void(null);" id="toggleBar" style="float: left;" class="glyphicon glyphicon-align-justify"></a>
          @endif
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          {{--@if(!Auth::check())--}}
            <li class="{{--$data['currentPage'] == 'register' ? 'active' : ''--}} myli wc">{{--HTML::link('/register','注册')--}}</li>
            <li class="{{--$data['currentPage'] == 'userLogin' ? 'active' : ''--}} myli wc">{{--HTML::link('/login','登录')--}}</li>
          {{--@else--}}
            <span></span>
          {{--@endif--}}
            <!-- <li class="myli wc"><a href=""></a></li> -->
            <!-- <li><a href="#about">Register</a></li> -->
          </ul>



        </div>

        </div><!--/.nav-collapse -->
        @if(Auth::check())
        <ul class="nav navbar-nav navbar-right" style="float:right;">
              <li>
                <a href="{{ url('user/logout') }}" class="dropdown-toggle" >
                  <span class="glyphicon glyphicon-off" style="margin-right:5px;color:#ea6153;"></span>
                </a>                
              </li>
              <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-cog" style="margin-right:10px;"></span>
                  {{--<span href="javascript:void(null);">{{ Auth::user()->username }}</span>--}}
                </a>

                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <!-- <li><a href="#" id="logout">注销</a></li> -->
                  <li>{{ HTML::link('user/logout','注销',array('id'=>'logout')) }}</li>
                </ul>
              </li>
              <li>

              </li>
          </ul>
        @endif
      </div>
    </div>
    @if(Auth::check())
    <div class="tree_bar">
       <ul class="tree_container">
        <li class="tree_item open">
          <a><i class="glyphicon glyphicon-phone"></i>组织信息</a>
          <ul class="tree_child">
            <li class="child_item">{{ HTML::link('frame/testhome','组织信息',array('target' => 'contentFrame')) }}</li>
            <li class="child_item">{{ HTML::link('/frame/category','组织主页',array('target' => 'contentFrame')) }}</li>
            <!-- <li class="child_item"><a>分类页面</a></li> -->

          </ul>
        </li>
        <li class="tree_item"><a><i class="glyphicon glyphicon-user"></i>哈活动</a>
          <ul class="tree_child">
            <li class="child_item">{{ HTML::link('/membercard','活动管理',array('target' => 'contentFrame')) }}</li>
            <li class="child_item">{{ HTML::link('/member','添加活动',array('target' => 'contentFrame')) }}</li>
          </ul>
        </li>

      </ul>
    </div>
    @endif
    <div class="frame_container">
        <div class="content_container">
            {{ $content }}
        </div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
{{ HTML::script('http://libs.baidu.com/jquery/2.0.0/jquery.js') }}
{{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js') }}
{{ HTML::script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js') }}
{{ HTML::script('scripts/tree.js') }}
{{ HTML::script('scripts/layout.js') }}
</body>
<footer>this is the footer</footer>
</html>