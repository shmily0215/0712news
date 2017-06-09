<?php echo 'www.adminbuy.cn';exit;?> 
<!--{subtemplate common/header}-->
<style id="diy_style" type="text/css"></style>
<link href="template/zhikai_n5chengshiv6/portal/css/index.css" type="text/css" rel="stylesheet">
<!--{eval $member_count = DB::fetch_first("SELECT * FROM ".DB::table('common_member_count')." WHERE uid = '$_G[uid]' ");}-->

<div class="wp mtm cl">
	
	<!--[diy=v5ad1]--><div id="v5ad1" class="area"></div><!--[/diy]-->
	
	<div class="n5_v6sp cl">
	    <div class="n5_v6spz z">
		    <!--门户幻灯-->
		    <div id="left_focus" class="cl">	
                <div class="sub_box">
                    <!--[diy=v601]--><div id="v601" class="area"></div><!--[/diy]-->
                </div>
                <script type="text/javascript">movec();</script>
            </div>
			<!--生活向导-->
			<div class="n5_spzrt cl">
			    <!--[diy=v602]--><div id="v602" class="area"></div><!--[/diy]-->
			</div>
	    </div>
		<div class="n5_v6spl z">
		    <!--门户头条-->
		    <div class="n5_v6tt cl">
			    <!--[diy=v603]--><div id="v603" class="area"></div><!--[/diy]-->
			</div>
			<!--头条广告-->
			<div class="n5_ttad cl">
			    <!--[diy=v604]--><div id="v604" class="area"></div><!--[/diy]-->
			</div>
			<!--新闻话题切换-->
			<div class="n5_xwhtq cl">
			    <div class="hd cl">
                    <!--[diy=v605]--><div id="v605" class="area"></div><!--[/diy]-->
				</div>
				<div class="bd cl">
                    <ul>
					    <!--[diy=v606]--><div id="v606" class="area"></div><!--[/diy]-->
					</ul>
					<ul>
					    <!--[diy=v607]--><div id="v607" class="area"></div><!--[/diy]-->
					</ul>
                </div>
			</div>
			<script type="text/javascript">jQuery(".n5_xwhtq").slide(); </script>
		</div>
        <div class="n5_v6spy y">
		    <!--快捷登录 会员信息-->
			<div class="n5_kjdlk cl">
			    <!--{if empty($_G['uid'])}-->
			    <div class="n5_kjdl cl">
				    <ul>
					    <li class="dl_1"><a onclick="showWindow('login', this.href);return false;" href="member.php?mod=logging&amp;action=login" rel="nofollow">会员登录</a></li>
						<li class="dl_2"><a href="member.php?mod=register" rel="nofollow">注册账号</a></li>
					</ul>
		        </div>
                <div class="n5_qtdl cl">
                    用其他账号登录：<a href="connect.php?mod=login&op=init&referer=index.php&statfrom=login_simple" class="n5_qtdlqq" title="QQ登录" target="_blank"></a><a href="plugin.php?id=wechat:login" class="n5_qtdlwx" title="微信登录" target="_blank"></a>		
                </div>
				<!--{/if}-->
				<!--{if $_G['uid']}-->
				<div class="n5_hyxx cl">
				    <div class="n5_hyxxtx">
					    <a href="home.php?mod=spacecp&ac=avatar" class="n5_hyxxt" title="修改头像" target="_blank"><!--{avatar($_G[uid])}--></a>
					</div>
					<div class="n5_hyxxxx">
					    <div class="n5_hyxxhm"><a href="home.php?mod=space&uid=$_G[uid]&do=index" title="我的空间" target="_blank">$_G['username']</a> <i><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">[退出]</a></i></div>
						<div class="n5_hyxxjf">
						    <a href="home.php?mod=spacecp&ac=credit" target="_blank"><p>积分</p><div>$_G['member'][credits]</div></a>
							<a href="forum.php?mod=guide&view=my" target="_blank"><p>帖子</p><div>$member_count['threads']</div></a>
							<a href="home.php?mod=follow&do=follower&uid=$_G[uid]" class="n5_dlhjl" target="_blank"><p>粉丝</p><div>$member_count['follower']</div></a>
						</div>
					</div>
				</div>
				<!--{/if}-->
			</div>
			<div class="n5_sqhd cl">
			    <!--[diy=v608]--><div id="v608" class="area"></div><!--[/diy]-->
			</div>
			<script type="text/javascript">
                jQuery(".n5_sqhd").slide({ mainCell:".n5_tchdnr", effect:"topLoop", vis:3, opp:true, autoPlay:true, delayTime:800 });
            </script>
		    <div class="n5_spyad cl">
			    <!--[diy=v609]--><div id="v609" class="area"></div><!--[/diy]-->
			</div>
		</div>
	</div>
	
	<!--[diy=v5ad2]--><div id="v5ad2" class="area"></div><!--[/diy]-->
	
	<!--乐在-->
    <div class="n5_jzsh cl">
		<div class="n5_zxmkbt">
			<div class="y"><!--[diy=v610]--><div id="v610" class="area"></div><!--[/diy]--></div>
		    <div class="z"><i>乐</i>在$_G['style']['站点所在城市']</div>
		</div>
		<div class="n5_jzzp z">
			<!--[diy=v615]--><div id="v615" class="area"></div><!--[/diy]-->
		</div>
		<div class="n5_jzsp z">
			<!--[diy=v619]--><div id="v619" class="area"></div><!--[/diy]-->
		</div>
		<div class="n5_jzyp y">
		    <!--[diy=v623]--><div id="v623" class="area"></div><!--[/diy]-->
		</div>
	</div>
	
	<!--[diy=v5ad5]--><div id="v5ad5" class="area"></div><!--[/diy]-->
	
	<!--爱在-->
	<div class="n5_jzsh cl">
		<div class="n5_zxmkbt">
			<div class="y"><!--[diy=v611]--><div id="v611" class="area"></div><!--[/diy]--></div>
		    <div class="z"><i>爱</i>在$_G['style']['站点所在城市']</div>
		</div>
		<div class="n5_jzzp z">
			<!--[diy=v616]--><div id="v616" class="area"></div><!--[/diy]-->
		</div>
		<div class="n5_jzsp z">
			<!--[diy=v620]--><div id="v620" class="area"></div><!--[/diy]-->
		</div>
		<div class="n5_jzyp y">
		    <!--[diy=v624]--><div id="v624" class="area"></div><!--[/diy]-->
		</div>
	</div>

	<!--[diy=v5ad6]--><div id="v5ad6" class="area"></div><!--[/diy]-->
	
	<!--家在-->
	<div class="n5_jzsh cl">
		<div class="n5_zxmkbt">
			<div class="y"><!--[diy=v612]--><div id="v612" class="area"></div><!--[/diy]--></div>
		    <div class="z"><i>家</i>在$_G['style']['站点所在城市']</div>
		</div>
		<div class="n5_jzzp z">
			<!--[diy=v617]--><div id="v617" class="area"></div><!--[/diy]-->
		</div>
		<div class="n5_jzsp z">
			<!--[diy=v621]--><div id="v621" class="area"></div><!--[/diy]-->
		</div>
		<div class="n5_jzyp y">
		    <!--[diy=v625]--><div id="v625" class="area"></div><!--[/diy]-->
		</div>
	</div>

	<!--[diy=v5ad3]--><div id="v5ad3" class="area"></div><!--[/diy]-->
	
	<!--行在-->
	<div class="n5_jzsh cl">
	    <div class="n5_zxmkbt">
			<div class="y"><!--[diy=v613]--><div id="v613" class="area"></div><!--[/diy]--></div>
		    <div class="z"><i>行</i>在$_G['style']['站点所在城市']</div>
		</div>
	    <div class="n5_jzzp z">
			<!--[diy=v618]--><div id="v618" class="area"></div><!--[/diy]-->
		</div>
		<div class="n5_jzsp z">
			<!--[diy=v622]--><div id="v622" class="area"></div><!--[/diy]-->
		</div>
		<div class="n5_jzyp y">
		    <!--[diy=v626]--><div id="v626" class="area"></div><!--[/diy]-->
		</div>
	</div>
	
	<!--[diy=v5ad4]--><div id="v5ad4" class="area"></div><!--[/diy]-->
	
	<div class="n5_v6ep cl">
	    <!--美在-->
	    <div class="n5_tstx cl">
		    <div class="n5_zxmkbt">
			    <span class="y"><!--[diy=v614]--><div id="v614" class="area"></div><!--[/diy]--></span>
				<span class="z"><i>美</i>在$_G['style']['站点所在城市']</span>
			</div>
			<div class="n5_tstxnr cl">
			    <div class="n5_tszyc">
				    <!--[diy=v627]--><div id="v627" class="area"></div><!--[/diy]-->
				</div>
				<div class="n5_tszyc">
				    <!--[diy=v628]--><div id="v628" class="area"></div><!--[/diy]-->
				</div>
				<div class="n5_tszyc n5_tswjl">
				    <!--[diy=v629]--><div id="v629" class="area"></div><!--[/diy]-->
				</div>
			</div>
		</div>
	</div>
	
	<!--[diy=v5ad7]--><div id="v5ad7" class="area"></div><!--[/diy]-->
	
	<!--友情链接-->
	<div class="n5_yqlj cl">
	    <!--[diy=v630]--><div id="v630" class="area"></div><!--[/diy]-->
	</div>
	
</div>
<!--{subtemplate common/footer}-->
