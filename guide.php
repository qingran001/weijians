<?php
include_once 'lib/config.php';
include_once 'header.php';
?>

    <div id="center-con" class="cl">
	<div id="guide" class="cl">
		<h1><i class="fa fa-send mr10" style="color:#e1e1e1;"></i>客户端下载及使用教程</h1>
		<p class="tips tips_info">所有系统使用ShadowSocks的主要设置部分就是填写<strong>“服务器地址"、"服务端口"、"服务密码"、"加密方式"</strong>四个信息，这些信息你可以登录官网后看到。咨询QQ 307724975</p>
		<div class="guide_con cl">
		
		<h2><i class="fa fa-wifi mr10" style="color:#8DB5BE;"></i>路由器游戏加速</h2>
		<ul>
			<li>配合麋鹿路由器SS定制版用于加速PS4、XBOX等游戏，游戏玩家必备神器！</li>
			<li>NAT3变NAT2，彻底解决搜人难、掉线、联机卡顿、下载慢，无法登录商店的问题。</li>
			<li><a href="ss/manual_windows.html" target="_blank"><i class="fa fa-file-text mr5" style="color:#aaa;"></i>使用教程</a>，<a href="ss/manual_windows.html" target="_blank"><i class="fa fa-file-text mr5" style="color:#aaa;"></i>常见问题</a></li>
		</ul>		
		
		<h2><i class="fa fa-windows mr10" style="color:#17C9E8;"></i>Windows系统</h2>
		<p class="tips warning_info">请使用下面的版本，暂时不要更新至最新版本的客户端</p>
		<ul>
			<li>Windows 7/XP 客户端下载：<i class="fa fa-download mr5" style="#8B8C8B"></i><a href="dl/Shadowsocks-win-2.5.6.zip" target="_blank">Shadowsocks-win-2.5.6.zip</a></li>
			<li>Windows 8/10 客户端下载：<i class="fa fa-download mr5" style="#8B8C8B"></i><a href="dl/Shadowsocks-win-dotnet4.0-2.5.2.zip" target="_blank">Shadowsocks-win-dotnet4.0-2.5.2.zip</a></li>
			<li>查看官方（SourceForge）<a href="https://github.com/shadowsocks/shadowsocks-windows/releases" target="_blank">最新所有版本客户端</a></li>
			<li><a href="ss/manual_windows.html" target="_blank"><i class="fa fa-file-text mr5" style="color:#aaa;"></i>使用教程（json文件自动配置）</a></li>
			<li><a href="ss/manual_windows.html" target="_blank"><i class="fa fa-file-text mr5" style="color:#aaa;"></i>常见问题解决方法</a></li>
		</ul>

		<h2><i class="fa fa-apple mr10" style="color:#4B4B4B;"></i>MAC OS</h2>
		<ul>
			<li>MAC OS客户端下载：<i class="fa fa-download mr5" style="#8B8C8B"></i><a href="dl/ShadowsocksX-2.6.3.dmg" target="_blank">ShadowsocksX-2.6.3.dmg</a></li>
			<li>查看官方（SourceForge）<a href="http://sourceforge.net/projects/shadowsocksgui/files/dist/" target="_blank">最新所有版本客户端</a></li>
			<li><a href="ss/manual_macosx.html" target="_blank"><i class="fa fa-file-text mr5" style="color:#aaa;"></i>使用教程</a></li>
		</ul>

		<h2><i class="fa fa-apple mr10" style="color:#B8B8B8;"></i>iPhone,iPad</h2>
		<ul>
			<li>（未越狱）iPhone,iPad客户端下载：<i class="fa fa-link mr5" style="#8B8C8B"></i><a href="https://itunes.apple.com/us/app/shadowsocks/id665729974?mt=8" target="_blank">APP Store下载</a></li>
			<li>（已越狱）iPhone,iPad客户端下载：请直接在Cydia里搜索 Shadowsocks ，然后安装即可</li>
			<li><a href="ss/manual_ios.html" target="_blank"><i class="fa fa-file-text mr5" style="color:#aaa;"></i>使用教程</a></li>
		</ul>

		<h2><i class="fa fa-android mr10" style="color:#95bf3f;"></i>安卓Android系统</h2>
		<ul>
			<li>安卓客户端下载：<i class="fa fa-download mr5" style="#8B8C8B"></i><a href="dl/shadowsocks-nightly-2.6.8.apk" target="_blank">shadowsocks-nightly-2.6.8.apk</a></li>
			<li>查看官方（Github）<a href="https://github.com/shadowsocks/shadowsocks-android/releases" target="_blank">最新所有版本客户端</a></li>
			<li><a href="ss/manual_android.html" target="_blank"><i class="fa fa-file-text mr5" style="color:#aaa;"></i>手动设置教程</a> ， <a href="ss" target="_blank"><i class="fa fa-file-text mr5" style="color:#aaa;"></i>二维码自动配置教程</a></li>
		</ul>
		

		
		<h2><i class="fa fa-wifi mr10" style="color:#888392;"></i>OpenWRT</h2>
		<ul>
			<li><i class="fa fa-link mr5" style="#8B8C8B"></i><a href="https://github.com/shadowsocks/openwrt-shadowsocks" target="_blank">openwrt-shadowsocks</a> - LuCI package for shadowsocks-libev</li>
			<li><i class="fa fa-link mr5" style="#8B8C8B"></i><a href="https://github.com/zhao-gang/shadowsocks-tiny" target="_blank">shadowsocks-tiny</a> - well integrated with OpenWrt</li>
		</ul>
		</div>

	</div>
</div>
<?php  include_once 'ana.php';
       include_once 'footer.php';?>