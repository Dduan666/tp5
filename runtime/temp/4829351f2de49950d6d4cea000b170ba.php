<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:51:"D:\WWW\tp5\public/../app/admin\view\admin\user.html";i:1493897824;s:58:"D:\WWW\tp5\public/../app/admin\view\layout\con_layout.html";i:1493894226;s:52:"D:\WWW\tp5\public/../app/admin\view\public\meta.html";i:1492585290;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<meta http-equiv="refresh" content="0;ie.html" />
<![endif]-->
    <title>Admin-用户管理</title>
    
<link href="/static/admin/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<!--<link href="/static/admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">-->
<link href="/static/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<link href="/static/admin/css/animate.min.css" rel="stylesheet">
<link href="/static/admin/css/style.min862f.css?v=4.1.0" rel="stylesheet">

</head>
    
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>管理员列表</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">选项1</a>
                        </li>
                        <li><a href="#">选项2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Example Toolbar -->
                        <div class="example-wrap">
                            <!--<h4 class="example-title">工具条</h4>-->
                            <div class="example">
                                <div class="btn-group hidden-xs" id="exampleToolbar" role="group">
                                    <button type="button" class="btn btn-outline btn-default">
                                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                    </button>
                                    <!--<button type="button" class="btn btn-outline btn-default">-->
                                        <!--<i class="glyphicon glyphicon-heart" aria-hidden="true"></i>-->
                                    <!--</button>-->
                                    <button type="button" class="btn btn-outline btn-default">
                                        <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <table id="exampleTableToolbar" data-mobile-responsive="true">
                                    <thead>
                                    <tr>
                                        <th data-field="number">选择</th>
                                        <th data-field="name">名称</th>
                                        <th data-field="star">Star</th>
                                        <th data-field="license">许可</th>
                                        <th data-field="description">描述</th>
                                        <th data-field="url">地址</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" checked class="i-checks" name="input[]">
                                        </td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" checked class="i-checks" name="input[]">
                                        </td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="dataTables_paginate paging_simple_numbers" id="editable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled" aria-controls="editable" tabindex="0" id="editable_previous"><a href="#">上一页</a></li>
                                                <li class="paginate_button active" aria-controls="editable" tabindex="0"><a href="#">1</a></li>
                                                <li class="paginate_button " aria-controls="editable" tabindex="0"><a href="#">2</a></li>
                                                <li class="paginate_button " aria-controls="editable" tabindex="0"><a href="#">3</a></li>
                                                <li class="paginate_button " aria-controls="editable" tabindex="0"><a href="#">4</a></li>
                                                <li class="paginate_button " aria-controls="editable" tabindex="0"><a href="#">5</a></li>
                                                <li class="paginate_button " aria-controls="editable" tabindex="0"><a href="#">6</a></li>
                                                <li class="paginate_button next" aria-controls="editable" tabindex="0" id="editable_next"><a href="#">下一页</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Example Toolbar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

    

<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/admin/js/content.min.js?v=1.0.0"></script>

<script src="/static/admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="/static/admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="/static/admin/js/demo/bootstrap-table-demo.min.js"></script>
<!--<script>-->
    <!--$(document).ready(function(){-->
        <!--$(".dataTables-example").dataTable();-->
        <!--var oTable=$("#editable").dataTable();-->
        <!--oTable.$("td").editable(-->
            <!--"http://www.zi-han.net/theme/example_ajax.php",-->
            <!--{-->
                <!--"callback":function(sValue,y){var aPos=oTable.fnGetPosition(this);-->
                <!--oTable.fnUpdate(sValue,aPos[0],aPos[1])-->
                <!--},-->
            <!--"submitdata":function(value,settings){-->
                    <!--return{"row_id":this.parentNode.getAttribute("id"),-->
                        <!--"column":oTable.fnGetPosition(this)[2]}-->
                        <!--},-->
                <!--"width":"90%","height":"100%"})});-->
    <!--function fnClickAddRow(){$("#editable").dataTable().fnAddData(["Custom row","New row","New row","New row","New row"])};-->
<!--</script>-->
<!--<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>-->

    
</html>
