<p class="text"><strong>Willkommen bei MAMP</strong></p>
<p class="text">Wenn Sie diese Seite sehen, dann bedeutet dies, dass MAMP erfolgreich eingerichtet und gestartet wurde. Sie können jetzt Ihren <span lang="en">Web</span>-Inhalt hinzufügen, diese Platzhalter-Seite<sup><a href="#footnote-1">1</a></sup> sollten Sie ersetzen <abbr title="beziehungsweise">bzw.</abbr> löschen.</p>
<p class="text">
    <span lang="en">Server-Software</span>: <samp><?php echo strip_tags(htmlentities($_SERVER['SERVER_SOFTWARE'], ENT_QUOTES, 'UTF-8')); ?></samp><br>
    <span lang="en">Server-Name</span>: <samp><?php echo strip_tags(htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8')); ?></samp><br>
    <span lang="en">Document-Root</span>: <samp><?php echo strip_tags(htmlentities($_SERVER['DOCUMENT_ROOT'], ENT_QUOTES, 'UTF-8')); ?></samp><br>
    Protokoll: <samp><?php echo ((isset($_SERVER['HTTPS']) === true && $_SERVER['HTTPS'] !== 'off') ? '<abbr lang="en" title="Hypertext Transfer Protocol Secure">https</abbr>' : '<abbr lang="en" title="Hypertext Transfer Protocol">http</abbr>'); ?></samp><br>
    <abbr lang="en" title="Hypertext Preprocessor">PHP</abbr> <samp><?php echo phpversion(); ?></samp>
</p>
<p class="text" id="footnote-1"><small><sup>1</sup> Datei: <samp>index.php</samp></small></p>
<hr>
<p class="text">Diese Seite aufn: <?php echo $switch_language; ?></p>