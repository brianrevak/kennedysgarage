<?php  $title = 'Godaddy: Increase upload max filesize |'; include '../header.php'; ?>

<div id="page">
<div id="content">
<article>

<h2>Godaddy: Increase upload max filesize</h2>

<p>Today I will show you how to increase you file upload limit if you have a Godaddy shared hosting plan. Why would you want to do this? To increase the size of your upload of course! By default Godaddy has it set it 8M (8 megabytes) and according to them the limit is 64M (megabytes). So how do we know what it is currently. Simple, let makes a new file in your root directory and call it <code>phpinfo.php</code> and  inside this file we will put:</p>

<pre class="prettyprint linenums">
&lt;?php phpinfo (); ?&gt;
</pre>

<p>Now go to <strong>yourdomain.com/phpinfo.php</strong> in your browser. You should see tables made with long list that include labels and values. Search for <code>upload_max_filesize</code> and you should see something that looks like:</p>
<p><img src="../img/article/godaddy-increase-upload-max-filesize/upload_max_filesize.png"/></p>

<p>There! We caught Godaddy red handed on setting our limitations on max upload! It really doesn't matter, most people do not have the need. So we won't get too upset at them. Lets press on and change that number! In the root directory we will create another file called <code>php5.ini</code> and inside this file we will put:</p>

<pre class="prettyprint linenums">
upload_max_filesize = 64M
post_max_size = 64M
</pre>

<p>Now we wait...for at least an hour (according to Godaddy). A few things to take note of: Most of the time you would name the file php.ini, but Godaddy told me that was one reason it was not working for me when I tried. Also when I was on the phone with them they put me on hold. When he came back he told me that the max was 64M, then he paused to see if I would believe it. I told him I would do it his way first, then I paused to see if he would tell me not to go over that number. So later I will try it 250M and see where it goes. </p>

<p>What if you are on a dedicated hosting plan with Godaddy? Go read <a href="http://help.godaddy.com/article/1409">Godaddy article 1409</a> (this does not apply to shared hosting plans).</p>

<p>Now you are all set up and can take full advantage of your Godaddy services. Let me know if you have questions.</p>
<hr/>
<p><strong>Update (08/24/10):</strong> I put the upload_max_filesize at 250M and it showed up on the phpinfo, but it does not upload 250M worth.</p>
<p><strong>Update (08/25/10):</strong> Maybe I was a bit impatient, but it seems that I am now able to upload 250M. I will not test the waters above this number, but I am sure that you can increase it more if you wanted to.  </p>

<p class="byline">August 24th, 2010 &there4; Kennedy</p>

</article>
</div><!--/content-->
</div><!--/page-->

<?php include("../footer.php"); ?>