<?php
require_once '_main.php';

//获得流量信息
if($oo->get_transfer()<1000000)
{
    $transfers=0;}else{ $transfers = $oo->get_transfer();

}
//计算流量并保留2位小数
$all_transfer = $oo->get_transfer_enable()/$togb;
$unused_transfer =  $oo->unused_transfer()/$togb;
$used_100 = $oo->get_transfer()/$oo->get_transfer_enable();
$used_100 = round($used_100,2);
$used_100 = $used_100*100;
//计算流量并保留2位小数
$transfers = $transfers/$tomb;
$transfers = round($transfers,2);
$all_transfer = round($all_transfer,2);
$unused_transfer = round($unused_transfer,2);
//最后在线时间
$unix_time = $oo->get_last_unix_time();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户中心
                <small>User Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">公告&FAQ</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p>在使用中有任何问题请联系<font color="#FF0000">QQ:307724975。</font></p> 
                            <p>除高级节点外不计算流量 ，高级节点免费流量为：<font color="#FF0000">1000M。</font> </p> 
							<p><p style="color:#0000ff">服务器地址请跳转节点列表查看。</p></p> 
							<p>您的密码和端口均在右下角的连接信息中 ，如何连接请点击：<a href="../guide.php" target="_blank">教程及客户端下载</a>。</p> 
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
				
				
				     <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title"><font color="#FF0000">套餐包月</font></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p>亚洲节点仅15/月 不限流量(香港节点除外) 全网最低欢迎比价 更多套餐联系：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=307724975&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:307724975:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p> 
                            <p>八校网络加速器现推出众筹SS服务器：</p> 
							<p>四位用户独享一个服务器，支持单人购买 提供完全权限，可搭建自己的ss多用户平台</p></p> 
							<p>凑足4人开船 单人月仅25/月</p> 
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
				

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">流量使用情况</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 已用流量：<?php echo $transfers."MB";?> </p>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $used_100; ?>%">
                                    <span class="sr-only">Transfer</span>
                                </div>
                            </div>
                            <p> 可用流量：<?php echo $all_transfer ."GB";?> </p>
                            <p> 剩余流量：<?php echo  $unused_transfer."GB";?> </p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (left) -->


                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">连接信息</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 端口：<code><?php echo $oo->get_port();?></code> </p>
                            <p> 密码：<?php echo $oo->get_pass();?> </p>
                            <p> 套餐：<span class="label label-info"> <?php echo $oo->get_plan();?> </span> </p>
                            <p> 最后使用时间：<code><?php echo date('Y-m-d H:i:s',$unix_time);  ?></code> </p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>

<script>
    $(document).ready(function(){
        $("#checkin").click(function(){
            $.ajax({
                type:"GET",
                url:"_checkin.php",
                dataType:"json",
                success:function(data){
                    $("#checkin-msg").html(data.msg);
                    $("#checkin-btn").hide();
                },
                error:function(jqXHR){
                    alert("发生错误："+jqXHR.status);
                }
            })
        })
    })
</script>

