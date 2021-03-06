<!DOCTYPE html>
<html lang="en">
    <head>
		<title> 
			Delta
		</title>
		<!-- libraries -->
		<meta name="google" value="notranslate" />
		 <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
		<link rel="stylesheet" type="text/css" href="font/css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />	


		<!-- stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/home.css" /><!-- home page -->
		<link rel="stylesheet" type="text/css" href="css/portal.css" /><!-- portals page -->
		<link rel="stylesheet" type="text/css" href="css/projects.css"><!-- projects page -->
        <link rel="stylesheet" type="text/css" href="css/blog.css" /><!-- css of contacts when clicked -->
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />	
        <link rel="stylesheet" type="text/css" href="css/contact.css" /><!-- contacts page -->
		
		<script src="js/angular.js"></script>
		<script src="js/data.js"></script>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery_ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
		<script type="text/javascript" src="js/jquery.fullPage.js"></script>
		<script type="text/javascript" src="js/animation.js"></script>
		<script type="text/javascript" src="js/modernizr.js"></script>
		
		<script src="js/jquery.flapper.js"></script>
        <script src="js/flap.js"></script>
		
	<style>
	@font-face{
		font-family: "Roboto Condensed";
		src: url("./font/RobotoCondensed-Regular.ttf");
	}
	@font-face{
		font-family: "Source Sans Pro";
		src: url("./font/SourceSansPro-Light.ttf");
	}
	@font-face{
		font-family: "Alegreya Sans SC";
		src: url("./font/AlegreyaSansSC-Thin.ttf");
	}
	</style>
	
</head>
<body  ng-app="ContactUsApp">	
<div id="header" style="display:none;">
		<a href="#home">
		<div class="title-big"><img style='width: 75px; height: auto' src='./img/Delta-logo.png' /></div>
		</a>
		<div class="title-big style-title">
		<div id="current"></div>
		</div>
		<!--div class="title-small">Central webteam of NITT</div-->
</div>

	<div id="section1" class="section">
		<div class="page_container">
			 <div id="navigation">
			 
			
				<div id="mainlist">E N T E R</div>
				
				<div id="list_contact" class="list otherlist">
					<div class="item">
						<div class="info">
							<a href="#contact">
							<h3><span class="fa fa-phone"></span></h3>
							<p>CONTACT</p>
							</a>
						</div>
					</div>
				</div>
				<div id="list_portals" class="list otherlist">
					<div class="item">
						<div class="info">
							<a href="#portals">
							<h3><span class="fa fa-bars"></span></h3>
							<p>PORTALS</p>
							</a>
						</div>
					</div>
				</div>
				<div id="list_projects" class="list otherlist">
					<div class="item">
						<div class="info">
							<a href="#projects">
							<h3><span class="fa fa-book"></span></h3>
							<p>PROJECT</p>
							</a>
						</div>
					</div>
				</div>
				<div id="list_induction" class="list otherlist">
					<div class="item">
						<div class="info">
							<a href="http://deltainductions.nitt.edu">
							<h3><span class="fa fa-book"></span></h3>
							<p>INDUCTIONS</p>
							</a>
						</div>
					</div>
				</div>
				<div id="list_wiki" class="list otherlist">
					<div class="item">
						<div class="info">
							<a href="http://wiki.nitt.edu">
							<h3><span class="fa fa-book"></span></h3>
							<p>WIKI</p>
							</a>
						</div>
					</div>
				</div>
				<div id="list_timeline" class="list otherlist">
					<div class="item">
						<div class="info">
							<a href="http://delta.nitt.edu/timeline">
							<h3><span class="fa fa-book"></span></h3>
							<p>TIMELINE</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
	<link href="css/flapper.css" type="text/css" rel="stylesheet" />

	<div id="flappy" style="display:none;">
	<div class="split">
		<div class="displays">
		<div class="activity"></div><input class="display M" />
		<div class="activity"></div><input class="display M" />
		</div>
	</div>
	</div>
	
	<div id="scroll-down" style="display:none;">
	<p class="scroll-msg">scroll down to know about us</p>
	<div class="arrow">
	<img  src="img/arrow.png" />
	</div>
	</div>
	
	</div>

<div class="section" id="section2">
<div id="lab" ng-controller="Ctrl">	
    <article>
          <div class="hex" ng-repeat="profile in bios.profile">
		  <div class="hexagon hexagon2">
            <div class="hexagon-in1">
                <div class="hexagon-in2" style="background-image: url({{profile.src}});">  				
                </div>
             </div>
         </div>
         </div>
	</article>
</div>
</div>

	<div class="section" id="section3">
	<div ng-controller="Project-readme">
	<div ng-repeat="profile in bios.profile">
		<div id="{{profile.id}}" class="panel1">
			<nav>
				<a class="link"	 href="#projects">
					<span class="fa fa-arrow-circle-o-left"></span>
					<label> Back </label>
				</a>	
			  	<a class="link" href="#">
				    <span class="fa fa-download"></span>
			    	<label>Zip download</label>
			  	</a>
			  	<a href="{{profile.git}}" target="_blank" class="link" >
			    	<span class="fa fa-briefcase"></span>
			    	<label>GitHub Repo</label>
			  	</a>
			</nav>

			<div id="content" class="content">
				
			</div>
			
		</div>
		</div>
		</div>
				
		<div class="post-container">
		<div id="page-wrap">
		
		<div class="up" ng-controller="Project-up">
			<div class="post" ng-repeat="profile in bios.profile">
				<img src="{{profile.src}}" class="img1"/>
					<div class="caption simple-caption" >
						<nav>
							<div id="title">
										{{profile.project}}
							</div>
							<a class="link" href="{{profile.id}}">
								<span class="fa fa-arrow-circle-o-right arr2">
								</span>
							</a>
						</nav>		
					</div>
			</div>
		</div>
		
		<div class="down" ng-controller="Project-down">	
			<div class="post" ng-repeat="profile in bios.profile">
					<img src="{{profile.src}}" class="img1"/>
					<div class="caption simple-caption">
						<nav>
							<div id="title">
										{{profile.project}}
							</div>
							<a class="link" href="{{profile.id}}"</a>
								<span class="fa fa-arrow-circle-o-right arr2">
								</span>
							</a>
						</nav>		
					</div>
				</div>

		</div>
		</div>	
		</div>	
		<!--<div id="comingup">
			<h2> coming soon </h2>
		</div>-->
		<div class="prodesc" id="content_cmsdesc">
				 <article class="markdown-body entry-content" itemprop="mainContentOfPage"><h2>
				<a name="user-content-pragyancms" class="anchor" href="#pragyancms"><span class="octicon octicon-link"></span></a>PragyanCMS</h2>

				<p>Pragyan CMS is a multi-user, modular Content Management System (CMS) to organize &amp; facilitate collaborative content creation &amp; updation on a website and its administration. It is written completely in PHP and supports MySQL databases. It has a strong custom inbuilt framework with independent components like templates, modules and widgets. It comes pre-packaged with a large number of modules like article, form, quiz, forum, gallery, book, news, poll, etc, widgets like image slider, facebook plugins, page hits counter, news flash etc and third-party plugins like PDF converter, google maps, sphider search engine, etc. It also provides tools to organize and manage permissions for users and groups. There are a lot more features which you’ll come to know as you read further !</p>

				<h2>
				<a name="user-content-installation" class="anchor" href="#installation"><span class="octicon octicon-link"></span></a>Installation</h2>

				<ul>
				<li>Copy the files to /path/to/web/root/pragyan</li>
				<li>Open it in your browser <a href="http://domain.tld/pragyan">http://domain.tld/pragyan</a>
				</li>
				<li>PragyanCMS's automated installation will guide you through the INSTALL process.</li>
				</ul><h2>
				<a name="user-content-contributing" class="anchor" href="#contributing"><span class="octicon octicon-link"></span></a>Contributing</h2>

				<ul>
				<li>Install, Modify and Send pull requests to git://github.com/Integriti/pragyan.git</li>
				</ul><h2>
				<a name="user-content-contributors" class="anchor" href="#contributors"><span class="octicon octicon-link"></span></a>Contributors</h2>

				<ul>
				<li>Abhilash R</li>
				<li>Sahil Ahuja</li>
				<li>Anshu Prateek</li>
				<li>Ankit Shrivastava</li>
				<li>Abhishek Shrivastava (abhishekdelta)</li>
				<li>Chakradar Raju (chakradarraju)</li>
				<li>Balanivash (balanivash)</li>
				<li>Boopathi Rajaa (boopathi)</li>
				<li>Shiva Nandhan (seekshiva)</li>
				<li>Dinesh Prashanth</li>
				<li>Siddhanth Sanyam</li>
				<li>Shriram Venkataramana (vshriram93)</li>
				<li>(this could be you...)</li>
				</ul>
			</article>
		</div>
		<div class="prodesc" id="content_coursesdesc">
			<article class="markdown-body entry-content" itemprop="mainContentOfPage"><h2>
				<a name="user-content-courseshub---" class="anchor" href="#courseshub---"><span class="octicon octicon-link"></span></a>CoursesHub 
				</h2>

				<p>Access detailed information about college course; like course syllabus, project deadlines, assignments and test schedule. Changes made to class schedule, assignment deadline, etc. are updated in realtime. It also acts as a medium for direct student-professor interaction.</p>

				<h2>
				<a name="user-content-set-up-instructions" class="anchor" href="#set-up-instructions"><span class="octicon octicon-link"></span></a>Set up instructions</h2>

				<ul>
				<li>Linux</li>
				<li><a href="https://github.com/seekshiva/courses/wiki/Setup-on-Windows-(x64)" target="_blank">Windows (x64)</a></li>
				</ul><h2>
				<a name="user-content-app-link" class="anchor" href="#app-link"><span class="octicon octicon-link"></span></a>App Link</h2>

				<p>The app is live at <a href="http://courseshub.in" target="_blank">http://courseshub.in</a></p>

				<h2>
				<a name="user-content-terms-of-use" class="anchor" href="#terms-of-use"><span class="octicon octicon-link"></span></a>Terms of use</h2>

				<p>CoursesHub app is free, and distributed under the GNU General Public License (GPL) v3.0 or later. Essentially, this means that you are free to do almost exactly what you want with the program, including distributing it among your friends, making it available for download from your web site, selling it (either by itself or as part of some bigger software package), or using it as the starting point for a software project of your own.</p>

				<p>The only real limitation is that whenever you distribute CoursesHub app in some way, you must always include the full source code, or a pointer to where the source code can be found. If you make any changes to the source code, these changes must also be made available under the GPL.</p>

				<p>For full details, read the GPL, found at <a href="http://www.gnu.org/licenses/gpl.html" target="_blank">http://www.gnu.org/licenses/gpl.html</a></p>

				<h2>
				<a name="user-content-developers" class="anchor" href="#developers"><span class="octicon octicon-link"></span></a>Developers</h2>

				<ul>
				<li><a href="https://github.com/seekshiva" target="_blank">Shiva Nandan</a></li>
				<li><a href="https://github.com/nobelium" target="_blank">Vignesh</a></li>
				</ul>
			</article>
		</div>

		<div class="prodesc" id="content_gracenotedesc">
			 <article class="markdown-body entry-content" itemprop="mainContentOfPage"><h2>
				<a name="user-content-gracenote-" class="anchor" href="#gracenote-"><span class="octicon octicon-link"></span></a>Gracenote </h2>

				<p>A simple ruby wrapper gem for the Gracenote Music API, which can retrieve Artist, Album and Track metadata with the most common options.</p>

				<p>Inspired by <a href="https://github.com/cweichen/pygn" target="_blank">pygn project</a>.</p>

				<p>Gracenote allows you to look up artists, albums, and tracks in the Gracenote database, and returns a number of metadata fields, including:</p>

				<p>Basic metadata like Artist Name, Album Title, Track Title.
				Descriptors like Genre, Origin, Mood, Tempo.
				Related content like Album Art, Artist Image, Biographies.</p>

				<p>Gracenote 1.2 supports TVShow queries </p>

				<h2>
				<a name="user-content-installation" class="anchor" href="#installation"><span class="octicon octicon-link"></span></a>Installation</h2>

				<p>Add this line to your application's Gemfile:</p>

				<pre><code>gem 'gracenote'
				</code></pre>

				<p>And then execute:</p>

				<pre><code>$ bundle install
				</code></pre>

				<p>Or install it yourself as:</p>

				<pre><code>$ gem install gracenote
				</code></pre>

				<h2>
				<a name="user-content-rubygem" class="anchor" href="#rubygem"><span class="octicon octicon-link"></span></a>Rubygem</h2>

				<p><a href="https://rubygems.org/gems/gracenote" target="_blank"></a><a href="https://rubygems.org/gems/gracenote" target="_blank">https://rubygems.org/gems/gracenote</a></p>

				<h2>
				<a name="user-content-usage" class="anchor" href="#usage"><span class="octicon octicon-link"></span></a>Usage</h2>

				<p>You will need a Gracenote Client ID to use this module. Please visit <a href="https://developer.gracenote.com" target="_blank">https://developer.gracenote.com</a> to get yours.</p>

				<p>Each installed application also needs to have a User ID, which may be obtained by registering your Client ID with the Gracenote API. To do this, do:</p>

				<pre><code>spec = {:clientID =&gt; "your_client_id", :clientTag =&gt; "your_client_tag"}
				obj = Gracenote.new(spec)
				obj.registerUser
				</code></pre>

				<p>This registration should be done only once per application to avoid hitting your API quota (i.e. definitely do NOT do this before every query).</p>

				<p>Once you have your Client ID and User ID, you can start making queries.</p>

				<p>To search for the Kings of Convenience track "Homesick" from the album "Riot On An Empty Street",</p>

				<pre><code>p obj.findTrack("Kings Of Convenience", "Riot On An Empty Street", "Homesick", '0').inspect

				p obj.findTVShow('saved by the bell').inspect

				p obj.fetchTVShow('238078046-4B86F4187EE2D215784CE4266CB83EA9').inspect

				p obj.fetchSeason('238050049-B36CFD6F8B6FC76E2174F2A6E22515CD').inspect

				p obj.findContributor('vince vaughn').inspect

				p obj.fetchContributor('238498181-193BE2BA655E1490A3B8DF3ACCACEF3A').inspect
				</code></pre>

				<h2>
				<a name="user-content-contributing" class="anchor" href="#contributing"><span class="octicon octicon-link"></span></a>Contributing</h2>

				<ol>
				<li>Fork it</li>
				<li>Create your feature branch (<code>git checkout -b my-new-feature</code>)</li>
				<li>Commit your changes (<code>git commit -am 'Add some feature'</code>)</li>
				<li>Push to the branch (<code>git push origin my-new-feature</code>)</li>
				<li>Create new Pull Request</li>
				</ol></article>
			</div>
			<div class="prodesc" id="grunt_ffdevtoolsdesc">
				<article class="markdown-body entry-content" itemprop="mainContentOfPage"><h2>
				<a name="user-content-grunt-ffdevtools" class="anchor" href="#grunt-ffdevtools"><span class="octicon octicon-link"></span></a>Grunt-ffdevtools</h2>

				<p>Grunt task runner for firefox devtools based on the chrome extension by <a href="https://github.com/vladikoff/grunt-devtools" target="_blank">@vladikoff</a></p>
				<p><strong>grunt-devtools not runnning</strong> : 
				<img src="img/projects/gruntffdevtools-2.jpg" alt="grunt-inactive" style="max-width:100%;"></p>

				<p><strong>grunt-devtools runnning</strong> : 
				<img src="img/projects/gruntffdevtools-1.jpg" alt="grunt-inactive" style="max-width:100%;"></p>
				<h2>
				<a name="user-content-setup" class="anchor" href="#setup"><span class="octicon octicon-link"></span></a>Setup</h2>

				<ol class="task-list">
				<li>Install grunt-devtools globally</li>
				</ol><pre><code>npm install -g grunt-devtools
				</code></pre>

				<ol class="task-list">
				<li>Run <code>grunt-devtools</code> in a directory with <code>Gruntfile.js</code>
				</li>
				</ol><h2>
				<a name="user-content-building-the-extension" class="anchor" href="#building-the-extension"><span class="octicon octicon-link"></span></a>Building the Extension</h2>

				<pre><code>npm install<br>grunt       //builds xpi
				</code></pre>

				<h2>
				<a name="user-content-installing-the-extension" class="anchor" href="#installing-the-extension"><span class="octicon octicon-link"></span></a>Installing the Extension</h2>

				<ol class="task-list">
				<li>Open Firefox -&gt; Addons -&gt; install extension from file</li>
				<li>Choose the generated xpi present in the <code>tmp/</code> folder of <code>grunt-ffdevtools</code>
				</li>
				<li>Fire up Devtools and Enjoy!</li>
				</ol>
				</article>
			</div>
			<div class="prodesc" id="luapegjsdesc">
				<article class="markdown-body entry-content" itemprop="mainContentOfPage"><h2>
				<a name="user-content-luapegjs" class="anchor" href="#luapegjs"><span class="octicon octicon-link"></span></a>Luapegjs</h2>

				<p>Lua2Js [WIP] . It uses <a href="https://github.com/dmajda/pegjs" target="_blank">Peg.js</a> to generate Mozilla parser compatible AST which is transformed to JS via <a href="https://github.com/Constellation/escodegen" target="_blank">escodegen</a> 
				</p>

				<h2>
				<a name="user-content-usage" class="anchor" href="#usage"><span class="octicon octicon-link"></span></a>Usage</h2>

				<code>Usage: luapegjs OPTIONS
				<br>
				OPTIONS are:
				<br>
				  -t, --ast
				  <br><br>
				    Print AST to stdout
				<br>
				  -c, --compress
				  <br><br>
				    Minify the JS ouput using uglify-js
				    <br>
				  -o FILE, --output FILE
				  <br><br>
				    Print generated JS data to FILE. USE "@2" for stderr and 
				    "@1" or "-" for stdout.
				    <br>
				</code>

				<p>To build the parser</p>
				<br>
				<code>make build
				</code>
				<br><br>
				<p>Or To build examples</p>
				<br>
				<code>make examples
				</code>

				<h2>
				<a name="user-content-what-has-been-implemented" class="anchor" href="#what-has-been-implemented"><span class="octicon octicon-link"></span></a>What has been implemented</h2>

				<ul class="task-list">
				<li>
				<code>+</code>, <code>-</code>, <code>*</code>, <code>/</code>, <code>=</code>, <code>&gt;=</code>, <code>&lt;=</code>, <code>!=</code>, <code>&gt;</code>, <code>&lt;</code>
				</li>
				<li> <code>local</code>
				</li>
				<li> <code>--</code> comments</li>
				<li> <code>if else</code> statment</li>
				<li> <code>while repeat for</code> loops</li>
				<li> <code>{}</code> array</li>
				<li> <code>function</code>
				</li>
				<li> <code>{x=1}</code> tables</li>
				</ul>
				</article>
			</div>
</div>

	<div class="section" id="section4">
		
		<!--section class="main" id="one" ng-controller="ConcCtrl">
				<div class="fadeback" onclick="fadeOutBlog();">
				
				</div>
				
				<div class="slide" ng-repeat="profile in bios.profile"><div class="blog"><div class="content"> {{profile.desc}} {{profile.name}} </div><div class="blog1auth1"><<img src="{{profile.src}}" alt="{{profile.name}}"/></div><a href="{{profile.git}}" class="fa fa-github fa-2x git"></a><label class="labelgit">GitHub Repository</label><a class="fa fa-google-plus-square fa-2x gplus"></a><label class="labelgplus">Google+</label><a class="fa fa-linkedin-square fa-2x linkedin"></a><label class="labellinkedin">Linkedin</label></div></div>	
		</section-->
		
		<section id="one" class="main" ng-controller="ConcCtrl">						
		
			<ul class="ch-grid">
				<li id="{{profile.id}}" onclick="fadeInBlog(this.id);" ng-repeat="profile in bios.profile">
					<div class="ch-item">				
						<div class="ch-info">
							<div class="ch-info-front ch-img" style="overflow:hidden">
								<div class="forward">
									<img src="{{profile.src}}" alt="{{profile.name}}">
									<div class="intro">{{profile.name}}</div>
									<div class="role">{{profile.area}}</div>								
								</div>
							</div>	
						</div>
					</div>
				</li>
			</ul>
				
		</section>
	</div>
	
	<script type="text/javascript" src="js/main.js"></script>
	
	<script type="text/javascript">
	document.getElementById("current").innerHTML="home";// current= current page
		$(window).bind('hashchange', function(){
		document.getElementById("current").style.opacity=0;
		document.getElementById("scroll-down").style.opacity=0;
		
		var currentpage = document.URL;																			//gets url
		var checkURL = currentpage.substring(currentpage.lastIndexOf("#")+1,currentpage.lastIndexOf(""));		//gets substring (after #)
		var found = $.inArray(checkURL, page) > -1;		
		if(found)
			document.getElementById("current").innerHTML = checkURL;
		else {												
			checkURL = currentpage.substring(currentpage.lastIndexOf("#")+1,currentpage.lastIndexOf(""));
			found = $.inArray(checkURL, page) > -1;
			if(found)
				document.getElementById("current").innerHTML = checkURL;
		}
		var arr=['content_cms','content_courses','content_gracenote','grunt_ffdevtools','luapegjs'];
		for(var i=0;i<arr.length;i++){
			if(checkURL==arr[i]){
				document.getElementById('section3').childNodes[0].firstChild.childNodes[0].nextSibling.childNodes[i+2].firstChild.nextSibling.childNodes[3].innerHTML = "<div class='description' visibility='visible;' min-height='400px;'>"+document.getElementById(arr[i]+'desc').innerHTML+"<div>";	//adding description of the projects to sliding panel
			}
		}

		$( "#current" ).fadeTo( "slow" , 0.7, "swing", function() { });

		});

	var k=0;
	document.getElementById('mainlist').onmouseover=function(){k=1;document.getElementById('mainlist').style.opacity=1;}
	document.getElementById('mainlist').onmouseout=function(){k=0;}
	setInterval(function(){
	if(document.getElementById("mainlist").style.opacity==1 && k!=1)
	$( "#mainlist" ).fadeTo( "slow" , 0, "swing", function() { });
	else if(document.getElementById("mainlist").style.opacity==0)
	$( "#mainlist" ).fadeTo( "slow" , 1, "swing", function() { });
	},1000);
	
	
	////
	//For fading in and out of personal slider in section 4 
	function fadeInBlog(id){
		window.location.href="#contact/"+(id-1);
		document.getElementById("one").style.opacity=0;
		document.getElementById("one").style.zIndex=1;
		$( "#one" ).fadeTo( 500 , 1, "swing", function() { });
	}
	function fadeOutBlog(){
		window.location.href="#contact";
		document.getElementById("contacts").style.opacity=0;
		document.getElementById("one").style.zIndex=0;
		$( "#contacts" ).fadeTo( 500 , 1, "swing", function() { });
	}
	</script>
	<script>
		
	</script>
   </body>
</html>
