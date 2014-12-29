<!DOCTYPE html>
<html>
	<head>
		<?php
			if(!is_null($this->vars->page_title)) {
				$title_output = $this->vars->page_title;
			} else {
				$title_output = 'Digital Media: Web Design, Web Development, Server Management';
			}
		?>
		<title>ForkLabs, LLC | <?=$title_output?></title>
		<link type="text/css" href="/css/stylesheet.css" rel="stylesheet" />
		<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-58070611-1', 'auto');
			  ga('send', 'pageview');

		</script>
	</head>
	<body>
		<div id="main_header">
			<!-- This is where we store our navigation menu -->
			<div id="forklabs_logo_badge">
				<a id="forklabs_logo_badge_link" href="http://www.forklabsllc.com">
					<!-- applied background image -->
				</a>
			</div>
			<div id="forkLabs_logo">
				<a href="http://www.forklabsllc.com" id="forkLabs_logo_text">
					<span id="forkLabs_logo_text_bg" class="greenfont">ForkLabs</span>
					<span id="forkLabs_logo_text_fg">ForkLabs</span>
				</a>
			</div>
			<div id="navigation_top">
				<ul id="navigation_menu">
					<li class="navigation_li">
						<a class="navigation_link greenfont" href="http://forklabsllc.com">
							Home
						</a>
					</li>
					<li class="navigation_li">
						<a class="navigation_link whitefont" href="http://forklabsllc.com/portfolio">
							Portfolio
						</a>
					</li>
					<li class="navigation_li">
						<a class="navigation_link whitefont" href="http://forklabsllc.com/pricing">
							Pricing
						</a>
					</li>
					<li class="navigation_li">
						<a class="navigation_link whitefont" href="http://forklabsllc.com/blog">
							Blog
						</a>
					</li>
					<li class="navigation_li">
						<a class="navigation_link whitefont" href="http://forklabsllc.com/contact">
							Contact Us
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- Our specific page content goes here -->
		<div id="page_content">
