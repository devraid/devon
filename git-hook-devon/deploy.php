<?php
$command = "cd /home/wirexmed/public_html/devon ; git pull --progress --no-rebase -v origin 2>&1";
exec($command, $output, $status);
echo htmlentities(implode("\n", $output)).'<br />';

/*$command = "git clone -b master https://github.com/wirexmedia/devon.git /home/wirexmed/public_html/devon 2>&1";
exec($command, $output, $status);
echo htmlentities(implode("\n", $output)).'<br />';*/