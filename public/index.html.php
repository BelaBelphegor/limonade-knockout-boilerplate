<section>
	<!-- [if lte IE 9]>
		<p>Your are using and <strong>outdated</strong> browser. Please <a href="http://browsehappy.com"</a> to improve your experience and security.</p>
	<![endif] -->
	<!-- Add your site or apps content here. -->
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron text-center">
				<h3>Welcome !</h3>
				<p>Hello World! This is Limonade-knockout-boilerplate.</p>
				<button type="button" class="btn btn-default btn-lg">
					<a href="https://github.com/BelaBelphegor/limonade-knockout-boilerplate" target="_blank">Source code</a>
				</button>
			</div>
			<h3>How to use ?</h4>
			<p>
				<ul>
					<li>Read the documentation of <a href="http://www.limonade-php.github.io">LimonadePHP</a> to build your REST API, <a href="http://www.knockoutjs.com">Knockout.js</a> to setup your front-end</a> and <a href="http://www.sammyjs.org">Sammy.js</a> to dispatch your URLs.</li>
					<li>Append your content, style and functionnality.</li>
					<li>Run your site locally on an PHP web server to see how it looks.</li>
					<li>Deploy your web site or apps on the world wilde web !</li>
				</ul>
			</p>
			<h3>Basic structure</h3>
			<pre>
				<code>
../
|_ public
	|_css
	|_fonts
	|_index.html.php
|_js
	|_apps.js
	|_sammy.min.js
	|_knockout.min.js
|_vendor
	|_limonade.php
|_views
	|_layouts
		|_default_layout.php
				</code>
			</pre>
			<h4>Public</h4>
			<p>This directory should contains all files publicly accessible by your users.</p>
			<ul>
				<li>
					<strong>CSS</strong>
					<p>This directory must contains all your CSS files. It includes the depencies used by the boilerplate.</p>
				</li>
				<li>
					<strong>Fonts</strong>
					<p>This directory must contains your custon fonts.</p>
				</li>
				<li>
					<strong>Index.html.php</strong>
					<p>This is the default HTML skeleton, it includes the body of your page. The header and the footer are included by the layout used by LimonadePHP.

					If you are using Google Universal Analytics make sur you adding the correspondant snippet at the bottom of this page with your analytics ID.</p>
				</li>
			</ul>
			<h4>JS</h4>
			<p>This directory must contains all your Javascript files. It includes the depencies used by the boilerplate, especially Knockout.js and Sammy.js.</p>
			<h4>Vendor</h4>
			<p>This directory must contains all your server-side depencies. It includes LimonadePHP.</p>
			<h4>Views</h4>
			<p>This directory includes the default template of your website.</p>
			<h3>License</h3>
			<p>The code is available under MIT License.</p>
		</div>
	</div>
</section>
