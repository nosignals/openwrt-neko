<?php
include '../cfg.php';
$neko_log_path="$neko_dir/tmp/log.txt";
$neko_bin_log_path="$neko_dir/tmp/neko_log.txt";

if(isset($_GET['data'])){
    $dt = $_GET['data'];
    if ($dt == 'neko') echo shell_exec("cat $neko_log_path");
    else if($dt == 'bin') echo shell_exec("cat $neko_bin_log_path | awk -F'[\"T.= ]' '{print \"[ \" $4 \" ] \" toupper($8) \" :\", substr($0,index($0,$11))}' | sed 's/.$//'");
    else if($dt == 'neko_ver') echo exec("$neko_dir/core/neko -v");
    else if($dt == 'core_ver') echo exec("$neko_bin -v | head -1 | awk '{print $5 \" \" $3}'");
}
?>
