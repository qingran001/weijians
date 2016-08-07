<?php
require_once '_main.php'; ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                购买流量
                <small>Buy transfer</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
				<div class="callout callout-warning">
                                <h4>注意！</h4>
                                <p>购买之后将清空您目前拥有的所有免费流量,如您已经是高级账户,则流量将会叠加。</p>
								<p>当购买的流量用尽之后,系统将自动补偿您1G免费节点流量。</p>
                                <p>购买之后连接免费节点产生的流量依旧会被计入购买的流量中,请知悉。</p>
								<p>购买之后直到您用尽购买的流量之前您将无法通过签到获取流量。</p>
								<p>购买前请联系客服咨询！！！！！切勿随意购买</p>
                            </div>
                    <!-- general form elements -->
                    <div class="box box-primary">
					<form id="frm1" action="../alipay/alipayapi.php" method="post" target="_blank">
                        <div class="box-body">
							<p>使用支付宝购买 转账帐号：hucqingran@163.com  请备注帐号和流量</p>
							<p>目前价格为:15元/月。 <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=307724975&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:307724975:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p>
                            <div class="input-group" style="width:100%;">
						<input name="amount" class="form-control" onkeyup="this.value=this.value.replace(/\D/g,'')" type="text" id="amount" placeholder="输入充值金额"/>
					</div>
					<br/>
					<input name="email" type="hidden" value="<?php echo $user_email; ?>" />
					<button id="rechargeNow" class="btn btn-success btn-sm">立即充值</button>
					<br/><br/>
                        </div><!-- /.box -->
                    </div>
					
					<div class="box box-primary">
                        <div class="box-body">
							<p>充值卡充值</p>
                            <p><input type="text" class="form-control" placeholder="充值卡号" id="cardnum"></p>
                            <p><a class="btn btn-success btn-sm" onclick="submitcard(); return false;" id="submitbutton">确定</a></p>
                        </div><!-- /.box -->
                    </div>
                </div>
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
<script>
	$("#rechargeNow").click(function(){
		var amount=$("#amount").val();
		if(amount==""){
			alert('请输入充值金额！')
			return false;
		}else{
			$("#frm1").submit();
		}
	});
	$("#activateNow").click(function(){
		$.ajax({
			type: "POST",
			url: "_api.php?act=paycode",
			dataType: "json",
			data: {
				uid: "<?php echo $uid;?>",
				code: $("#payCode-activate").val(),
				confirm: "confirm"
			},
			success: function(data){
				alert("付款码激活成功辣，本次激活的付款码面值为 "+data.size+" 萌币，您现在的余额为 "+data.extra+" 萌币w");
				window.location.href="index.php";
			},
			error: function(){
				alert("抱歉，在激活的过程中没有接受到服务器娘的返回值嘞……检查一下输入的付款码对不对有没有带空格啥的啦……也可能是服务器娘宕机惹，稍等一会就好~");
			}
		});
	});
	
function submitcard(){
	$("#submitbutton").html('提交中...');
	$.post("submitcard.php",{
		"cardnum":$("#cardnum").val()
	},function(data,status){
		if(status == 'success'){
			showbox('交易信息',data);
		}else{
			showbox('错误','通信错误');
		}
	});
}
function showbox(title,content){
	$("#skin-blue").append('<div class="modal fade in" id="tradebox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block;"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="closebox(); return false;">×</button><h4 class="modal-title" id="myModalLabel" contenteditable="false">'+title+'</h4></div><div class="modal-body" contenteditable="false">'+content+'</div><div class="modal-footer"></div></div></div></div>');
}
function closebox(){
	$("#tradebox").remove();
	$("#submitbutton").html('提交');
}
</script>
