<?php


$embedded = '';
$body = Idno\Core\site()->triggerEvent('url/expandintext', ['object' => $vars['object']], $vars['object']->body); 

if (preg_match_all('/https?:\/\/twitter\.com\/[^\s]+\/status\/[^\s]+\/?/i', $body, $matches)) {
    
    foreach ($matches[0] as $m)
        $embedded .= '<div id="sc_'.md5($m).'" class="twitter-embed" data-url="'.$m.'"></div>';
}

echo $embedded;


 