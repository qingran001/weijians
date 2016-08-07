<?php
require_once '_main.php';
$node = new Ss\Node\Node();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                节点列表
                <small>Node List</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
            <div class="row">
			<?php if($oo -> get_plan() != 'zt'){ ?> 
			<?php if($oo -> get_plan() != 'pro'){ ?> 
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-th-list"></i>
                            <h3 class="box-title">免费节点</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="callout callout-warning">
                                <h4>注意!</h4>
                                <p>安卓用户请点击：操作-二维码之后直接用教程软件扫描二维码登录！</p>
                            </div><?php
                            $node0 = $node->NodesArray(0);
                            foreach($node0 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                操作 <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_json.php?id=<?php echo $row['id']; ?>">配置文件</a></li>
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_qr.php?id=<?php echo $row['id']; ?>">二维码</a></li>
                                            </ul>
                                        </li>
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1-1">
                                            <p> <a class="btn btn-xs bg-purple btn-flat margin" href="#">地址:</a> <code><?php echo $row['node_server']; ?></code>  <a class="btn btn-xs bg-purple btn-flat margin">端口:</a>  <code><?php echo $oo->get_port();?></code>     <a class="btn btn-xs bg-purple btn-flat margin">密码:</a>  <code><?php echo $oo->get_pass();?></code>
                                                <a class="btn btn-xs bg-orange btn-flat margin" href="#"><?php echo $row['node_status']; ?></a>
                                                <a class="btn btn-xs bg-green btn-flat margin" href="#"><?php echo $row['node_method']; ?></a>
                                            </p>
                                            <p> <?php echo $row['node_info']; ?></p>
                                        </div><!-- /.tab-pane -->
                                    </div><!-- /.tab-content -->
                                </div><!-- nav-tabs-custom -->
                            <?php }?>
                        </div><!-- /.box-body -->


                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

				
				<div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-th-list"></i>
                            <h3 class="box-title">VIP试用节点</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="callout callout-warning">
                                <h4>注意!</h4>
                                <p>VIP试用节点限制下载，只提供网页浏览和Youtube的观看(所有服务器均支持UDP)</p>
                            </div><?php
                            $node1 = $node->NodesArray(2);
                            foreach($node1 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                操作 <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_json.php?id=<?php echo $row['id']; ?>">配置文件</a></li>
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_qr.php?id=<?php echo $row['id']; ?>">二维码</a></li>
                                            </ul>
                                        </li>
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1-1">
                                            <p> <a class="btn btn-xs bg-purple btn-flat margin" href="#">地址:</a> <code><?php echo $row['node_server']; ?></code>    <a class="btn btn-xs bg-purple btn-flat margin">端口:</a>  <code><?php echo $oo->get_port();?></code>     <a class="btn btn-xs bg-purple btn-flat margin">密码:</a>  <code><?php echo $oo->get_pass();?></code>
                                                <a class="btn btn-xs bg-orange btn-flat margin" href="#"><?php echo $row['node_status']; ?></a>
                                                <a class="btn btn-xs bg-green btn-flat margin" href="#"><?php echo $row['node_method']; ?></a>
                                            </p>
                                            <p> <?php echo $row['node_info']; ?></p>
                                        </div><!-- /.tab-pane -->
                                    </div><!-- /.tab-content -->
                                </div><!-- nav-tabs-custom -->
                            <?php }?>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (left) -->
				<?php } ?>
				<?php } ?>
				
	
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-th-list"></i>
                            <h3 class="box-title">VIP高速节点</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="callout callout-warning">
							<?php if($oo -> get_plan() != 'zt'){ ?> 
							<?php if($oo -> get_plan() != 'pro'){ ?> 
                            <h4>注意!</h4>
                            <p>只有高级用户才可以连接这些节点</p>
						    <?php }?>
							
							<?php if($oo -> get_plan() != 'free'){ ?> 
                            <h4>欢迎登录!</h4>
                            <p>尊敬的VIP客户欢迎您的登录(只有VIP用户才可以连接这些节点)</p>
						    <?php }?>
							<?php }?>
							<?php if($oo -> get_plan() != 'pro'){ ?>
							<?php if($oo -> get_plan() != 'free'){ ?>
							&nbsp;&nbsp;尊敬的VIP用户您好： 您的包月套餐已到期 <p><p>&nbsp;&nbsp;如您觉得我们的产品和服务好用请联系我们续费：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=307724975&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:307724975:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a><p>&nbsp;&nbsp;(有充值卡的客户请直接在下方链接自助续费)
							<?php }?>
							<?php }?>
							<?php if($oo -> get_plan() != 'pro'){ ?> <p>&nbsp;&nbsp;<a href="buy.php">点此购买流量</a>&nbsp;&nbsp;从而升级为高级用户来查看这些节点</p><?php } ?>
                            </div><?php
							if($oo -> get_plan() == 'pro'){
                            $node1 = $node->NodesArray(1);
                            foreach($node1 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                操作 <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_json.php?id=<?php echo $row['id']; ?>">配置文件</a></li>
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_qr.php?id=<?php echo $row['id']; ?>">二维码</a></li>
                                            </ul>
                                        </li>
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1-1">
                                            <p> <a class="btn btn-xs bg-purple btn-flat margin" href="#">地址:</a> <code><?php echo $row['node_server']; ?></code>  <a class="btn btn-xs bg-purple btn-flat margin">端口:</a>  <code><?php echo $oo->get_port();?></code>     <a class="btn btn-xs bg-purple btn-flat margin">密码:</a>  <code><?php echo $oo->get_pass();?></code>
                                                <a class="btn btn-xs bg-orange btn-flat margin" href="#"><?php echo $row['node_status']; ?></a>
                                                <a class="btn btn-xs bg-green btn-flat margin" href="#"><?php echo $row['node_method']; ?></a>
                                            </p>
                                            <p> <?php echo $row['node_info']; ?></p>
                                        </div><!-- /.tab-pane -->
                                    </div><!-- /.tab-content -->
                                </div><!-- nav-tabs-custom -->
                            <?php }}else{}?>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
                 
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
