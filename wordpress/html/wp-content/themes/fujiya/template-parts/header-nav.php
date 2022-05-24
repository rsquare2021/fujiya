<ul class="menubar__linklist">
	<li class="menubar__link"><a href="<?= about(); ?>">ドラ基地とは</a></li>
	<li class="menubar__link"><a href="<?= flow(); ?>">利用の流れ</a></li>
	<li class="menubar__link"><a href="<?= price(); ?>">料金表</a></li>
	<li class="menubar__link"><a href="<?= news(); ?>">ニュース</a></li>
	<li class="menubar__link"><a href="<?= faq(); ?>">Q&A</a></li>
	<li class="menubar__link"><a href="<?= company(); ?>">運営会社</a></li>
	<li class="menubar__link"><a href="<?= contact(); ?>">お問い合わせ</a></li>
</ul>
<?php if(!is_user_logged_in()) { ?>
	<a href="<?= login(); ?>">
		<div class="menubar__login menubar__login-top">
			<p class="menubar__loginEN">LOGIN</p>
			<p class="menubar__loginJA">ログイン</p>
		</div>
	</a>
<?php } else { ?>
	<div class="menubar__login menubar__login-top">
		<p class="menubar__loginEN">ようこそ</p>
		<p class="menubar__loginJA">様</p>
	</div>
<?php } ?>