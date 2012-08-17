<?php 
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
 require_once("$root/template/head_top.php"); ?>

	<title>SigFrid | Nick Jones</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

<?php require_once("$root/template/scripts.php");?>
<script type="text/javascript" src="/scripts/sh/shCore.js"></script>
<script type="text/javascript" src="/scripts/sh/shAutoloader.js"></script>
<script type="text/javascript" src="/scripts/sh/shLegacy.js"></script>
<script type="text/javascript" src="/scripts/sh/shBrushJScript.js"></script>
<script type="text/javascript" src="/scripts/sh/shBrushXml.js"></script>
<link href="/css/shCore.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="Stylesheet" href="/css/shThemeEclipse.css"/>

<?php require_once("$root/template/head_bot.php");?>

<?php require_once("$root/template/top.php");?>
			<h2>setsFlick jQuery Plugin</h2>
			<ul>
				<li>Demos: <a href = "demo-thumb.php">small thumbnails</a> | <a href = "demo-large.php">large thumbnails</a></li>
				<li><a href = "setsflick.zip">Download</a></li>
			</ul>
			<h3>Overview</h3>
			<p>setFlicks is a jQuery plugin designed to display all sets of images assocated with a single Flickr user account. I developed it specifically for my own site, but have made it available for download in case someone else is looking for this functionality. If you find a bug, or have ideas for changes/extensions then please <a href = "/contact.php">get in contact.</a></p>
			<h3>Installation</h3>
			<ol>
				<li>Download the setsFlick zip file and get the latest version of <a href = "http://jquery.com/">jQuery</a> (or use a <a href = "http://docs.jquery.com/Downloading_jQuery#CDN_Hosted_jQuery">hosted version</a>)</li>
				<li>Include the references in the header
					<pre class="brush: html">
						&lt;head>
						...
						&lt;script type="text/javascript" src="path/to/setsflick.js">&lt;/script>
						&lt;link rel="stylesheet" type="text/css" media="all" href="path/to/flckrSet.css" />
 						...
 						&lt;/head></pre>
 				</li>
 				<li>Add a container element to your page. The results from Flickr will be placed in this container.
					<pre class="brush: html">
						&lt;div id = "flickr_container">&lt;/div></pre>
 				</li>
 				<li>Finally, initialise the plugin and pass any settings
 					<pre class="brush: js">
						&lt;script>  
						jQuery(document).ready(function($) {
    						$('#flickr_container').setsFlick({option:'value'});		
    					});
						&lt;/script></pre></li>
			</ol>
			<h3>Settings</h3>
			<p>Currently the settings are limited, but should grow as I develop the plugin further. The list below shows all settings, and their default values.</p>
				<pre class="brush: js">
						&lt;script>  
						.setsFlick({
							thumbSize:'s', //Flickr offers a range of sizes. Currently, only the small and large square formats are supported (s or q respectively)
							apiKey:'2050e78fc761eb0cebad18dd25fedcfd', //required by Flickr. This is the API registered to this jQuery plugin, but you can use your own
							userId:null //the ID of the user whos sets you want to display
						});
						&lt;/script></pre>
			<p><a href = "http://www.flickr.com/services/api/misc.urls.html">See Flickr</a> for more information on images sizes offered by the API</a>
			<h3>Future Updates</h3>
			<p>As I initially developed this to display images from my rarely used Flickr account, it has a fairly limited functionality. The following is a list of some of the planned future changes:</p>
			<ul>
				<li>Allow more Flickr feeds to be accessed, such as recent photos, or photos of friends.</li>
				<li>Link feeds together to avoid redirecting to Flickr. For example, clicking on a set will show the associated images without leaving the original site.
				<li>Offer more image size options</li>
				<li>Create a page system to avoid displaying all sets on one page</li>
			</ul>
			<h3>License</h3>
			<p>This plugin is released under the <a href = "http://www.opensource.org/licenses/mit-license.php">MIT license</a></p> 
			<h3>Acknowledgements</h3>
			<p>Thanks to Matt Ryall for his <a href = "http://mattryall.net/blog/2008/06/flickr-api-and-jquery">introduction to the Flickr API</a>. Also thanks to psdGraphics for their great <a href = "http://www.psdgraphics.com/psd-icons/psd-photo-gallery-icon/">polaroid icons</a>.
			<script type="text/javascript">
     			SyntaxHighlighter.all()
			</script>
<?php require_once("$root/template/bottom.php") ?>