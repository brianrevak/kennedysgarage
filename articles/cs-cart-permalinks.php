<?php  $title = 'CS-Cart Permalinks |'; include '../header.php'; ?>

<div id="page">
<div id="content">
<article>

<h2>CS-Cart Permalinks</h2>

<p>I wanted to have nice, clean, friendly URL links. I set off to <a href="http://www.cs-cart.com">CS-Cart</a>'s documentation and came up short. I found bits of information here and there, but nothing was really too useful on this subject. I thought I would spend a few extra minutes writing up this tutorial to save you a little time. If you have any questions please feel free to ask.</p>

<ol>
  <li>Login into your admin panel.</li>
  <li>Click the "Administration" tab.</li>
  <li>Click the "Addons" link (it's right underneath the tabs).</li>
  <li>We are now looking for the link: SEO (requires URL manipulation engine - mod_rewrite or isapi_rewrite)</li>
  <li>Change the status to "Active"</li>
  <p><img src="../img/article/addons-a.png"/></p>
  <li>Click "edit"</li>
  <li>Change the "product/page SEF URL format:" to "product_name.html" in the top pull down box.</li>
  <p><img src="../img/article/selectclean.png"/></p>
</ol>
<h3>Requires URL manipulation engine - mod_rewrite or isapi_rewrite?</h3>

<p>Now if you are anything like me, you have this feeling that you probable don't have what is required. I read what was required a few time and it still didn't make much sense right off the bat. Basically all it is say it to make sure you have mod_rewrite installed on your server. Great, now I bet you are going to ask how to check to see if it's installed. There are a couple of different ways. </p>

<h4>WAMP</h4>
<p>If you are using <a href="http://www.wampserver.com">WAMP</a> as your local sever, you are in luck. WAMP has made this a very easy task.</p>

<ol>
  <li>Go to <a href="http://localhost/">http://localhost/</a> and click "phpinfo()" under tools.</li>
  <p><img src="../img/article/phptools.png" /></p>
  <li>Ctrl + F or search for "mod_rewrite". If you have it, it should be under "Loaded Modules".</li>
  <p><img src="../img/article/searchmod.png"/></p>
  <li>If it is there great, it's enabled. If not, go to the next step.</li>
  <li>Left click on the WAMP icon in your system try.</li>
  <li>Then go to "Apache modules".</li>
  <li>Then find "rewrite_module". Make sure it has a check mark next to it, if it does not, click it so it does.</li>
  <p><img src="../img/article/mod_rewrite.png" /></p>
  <li>Now you have "mod_rewrite" enabled!</li>
</ol>
<h4>Hosted Server</h4>
<p>If you are hosting your website on an actual server like <a href="http://www.tkqlhce.com/click-3684510-10378406" target="_top">www.GoDaddy.com </a><img src="http://www.awltovhc.com/image-3684510-10378406"/>, like I do, then follow along.</p>
<ol>
  <li>Open a text editor and name a new file: phpinfo.php</li>
  <li>Inside this new file place the following code (w/o quotes): "&lt;?php phpinfo(); ?&gt;"</li>
  <p><img src="../img/article/text-file.png"/></p>
  <li>Upload this file to your base directory on your server.</p>
  <li>Open up your favorite browser and go to your new page: http://yourwebsite.com/phpinfo.php</li>
  <li> Ctrl + F or search for "mod_rewrite". If you have it great, it's enabled.</li>
  <li>Note: Most hosting company have "mod_rewrite" installed as a default. In this case you will not be able to find it.</li>
  <li>If you don't know if your hosting company has it installed by default, either switch over to another hosting company like <a href="http://www.tkqlhce.com/click-3684510-10378406" target="_top">www.GoDaddy.com </a><img src="http://www.awltovhc.com/image-3684510-10378406"/> or call yours up and ask "Can you please add mod_rewrite to my Apache configuration?"</p>
</ol>
<h3>You're done! Maybe?</h3>
<p>So now everything should be working. Let's go to the home page and refresh the page, then click on a link. Does it take you to the page or show you an error? If you went to the correct page congrats, if not, it looks like you are stuck with me for a little bit more.</p>

<h3>The last fix.</h3>
<ol>
  <li>Go to your root directory and open the file called: .htaccess</li>
  <li>Open the file in a text editor and find the following: RewriteBase</li>
  <li>Now replace that line of code with the following: RewriteBase /your_cscart_directory</li>
  <li>Put a big smile on your face and leave us a comment.</li>
</ol>
<h3>Extra</h3>
<p>I have found these pages from <a href="http://www.cs-cart.com">CS-cart</a> and thought you guys might find it useful.</p>

<p><a href="http://docs.cs-cart.com/">http://docs.cs-cart.com</a><br/>
<a href="http://kb2.cs-cart.com/">http://kb2.cs-cart.com</a><br/>
<a href="http://kb.cs-cart.com/">http://kb.cs-cart.com</a></p>

<p class="byline">October 23rd, 2010 &there4; Kennedy</p>

</article>
</div><!--/content-->
</div><!--/page-->

<?php include("../footer.php"); ?>