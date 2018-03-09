
<link type="text/css" media="all" href="/public/subpage/css/002_sub/customer/bootstrap.min.css" rel="stylesheet">
<link type="text/css" media="all" href="/public/subpage/css/002_sub/customer/mediumish.css" rel="stylesheet">

<a href="/small/service_center_detail">고객센터 상세보기</a>




<!-- Begin Site Title
================================================== -->
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle" style="text-align: center;">고객센터</h1>
		<p class="lead" style="text-align: center;"></br>
            <a href="/content/list?board_key=notice">공지사항</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/content/list?board_key=faq">FAQ</a>
		</p>
	</div>
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span><?=$board->name?></span></h2>
	</div>
	<div class="card-columns listfeaturedtag">
		<?php foreach ( $rows as $row ): ?>
		<!-- begin post -->
		<div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail" style="background-image:url(/public/subpage/img/demopic/1.jpg);">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><a href="post.html"><?=$row->title?></a></h2>
						<h4 class="card-text"><?=$row->substr_desc?></h4>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
								</span>
								<span class="author-meta">
								<span class="post-name"><a href="author.html"><?=$row->displayName?></a></span><br/>
								<span class="post-date"><?=$row->created?></span><span class="dot"></span><span class="post-read"><?=$row->hits?></span>
								</span>
								<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
			
		<?php endforeach; ?>

		
	</div>
	</section>
	<!-- End Featured
	================================================== -->

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/public/subpage/js/002_sub/customer/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="/public/subpage/js/002_sub/customer/bootstrap.min.js"></script>
<script src="/public/subpage/js/002_sub/customer/ie10-viewport-bug-workaround.js"></script>
