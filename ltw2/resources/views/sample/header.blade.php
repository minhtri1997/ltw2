<!DOCTYPE html>
<html>
<head>
	<title>Sample</title>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>
	<div class="main-nav">
            <div class="container">
                <button class="btn-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- error menu -->
                <div class="clearfix"></div>
                <div class="navbar">
                    <!-- Total MENU -->
                    <ul class="nav">
                        @foreach($dataMenu as $item)
                            <li class="dropdown">
                                <a class="dropdown-toggle">{!!$item->menu_name!!}<b class="caret"></b></a>
                                <ul class="dropdown-menu" style="display: none;">
                                    @for ($i=0; $i < count($item->childs); $i++)
                                        @if($item->menu_id === $item->childs[$i]['menu_id_parent'])                                            
                                                <li>
                                                    <a href="#"> {!!$item->childs[$i]['menu_name']!!}</a>
                                                </li>
                                        @endif
                                    @endfor 
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                    <!--end Total MENU -->
                </div>
            </div>
        </div>
	