<?php
$file = rex_file::get(rex_path::addon('aufgaben','LICENSE.md'));
$Parsedown = new Parsedown();

$content =  '<div id="aufgaben">'.$Parsedown->text($file).'</div>';

$fragment = new rex_fragment();
$fragment->setVar('title', $this->i18n('aufgaben_licence'));
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');
