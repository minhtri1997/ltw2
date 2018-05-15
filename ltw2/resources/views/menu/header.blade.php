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
                        <?php showParents($dataMenuAll); ?>
                    </ul>
                    <!--end Total MENU -->
                </div>
            </div>
        </div>
<?php 
    function showParents($dataMenuAll)
    {
        foreach ($dataMenuAll as $key => $dataMenu) {
            if (count($dataMenu->childs) > 0) {
                echo '<li class="dropdown">';
                    echo '<a class="dropdown-toggle">'.$dataMenu->menu_name .'<b class="caret"></b></a>';
                    echo '<ul class="dropdown-menu toggleMenu" style="display: none;">';
                        echo(showChilds($dataMenu->menu_id, $dataMenu->childs));
                    echo "</ul>";
                echo "</li>";
            }else{
                echo '<li class="dropdown">';
                    echo '<a class="dropdown-toggle">'.$dataMenu->menu_name.'</a>';
                echo "</li>";    
            }
        }
    }

    function showChilds($idParent,$childs,$num =1){
        foreach ($childs as $key => $child) {
            if ($child->menu_id_parent == $idParent) {
                if(count($child->childs) > 0){
                    echo '<li class="dropdown-submenu">';
                        echo '<a class="dropdown-toggle" data-toggle="dropdown">'.$child->menu_name.'<i class="fa fa-angle-right"></i></a>';
                        echo '<ul class="dropdown-menu menusub child-'.$num.' ">';
                            showChilds($child->menu_id ,$child->childs,$num++);
                        echo '</ul>';
                    echo'</li>';
                }
                else{
                    echo '<li>';
                        echo '<a href="#">'.$child->menu_name.'</a>';
                    echo '</li>';
                }
            }
        }
    }
 ?>