<p class="text"><strong>Welcome to MAMP</strong></p>
<p class="text">If you can see this page, MAMP has been properly configured &amp; launched and is now all set to serve your web content. This placeholder page<sup><a href="#footnote-1">1</a></sup> should be replaced or deleted.</p>
<p class="text">
    Server software: <samp><?php echo strip_tags(htmlentities($_SERVER['SERVER_SOFTWARE'], ENT_QUOTES, 'UTF-8')); ?></samp>  <br>
    Server name: <samp><?php echo strip_tags(htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8')); ?></samp>  <br>
    Document root: <samp><?php echo strip_tags(htmlentities($_SERVER['DOCUMENT_ROOT'], ENT_QUOTES, 'UTF-8')); ?></samp>  <br>
    Protocol: <samp><?php echo ((isset($_SERVER['HTTPS']) === true && $_SERVER['HTTPS'] !== 'off') ? '<abbr title="Hypertext Transfer Protocol Secure">https</abbr>' : '<abbr title="Hypertext Transfer Protocol">http</abbr>'); ?></samp><br>
    <abbr title="Hypertext Preprocessor">PHP</abbr>: <samp><?php echo phpversion(); ?></samp>
</p>
<p class="text" id="footnote-1"><small><sup>1</sup> File: <samp>index.php</samp></small></p>
<hr>
<p class="text">This page in: <?php echo $switch_language; ?></p>