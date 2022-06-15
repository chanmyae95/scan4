<?php
system("clear");
date_default_timezone_set('Africa/Johannesburg');
$date = date("h:i:a");

$menu = "\033[0;36m[1]awselb/2.0
\033[0;36m[2]xneelo 
\033[0;36m[3]cloudflare
\033[0;36m[4]cloudfront
\033[0;36m[5]Apache
\033[0;36m[6]Apache/2
\033[0;36m[7]nginx/1.18
\033[0;36m[8]nginx/1.19
\033[0;36m[9]nginx/1.20.1
\033[0;36m[10]nginx/1.25.0
\033[0;36m[11]For any version of nginx
\033[0;32mtip for nginx ~ \033[0;37mversion 1.20.1 is the best option\n";


system("clear");
system("toilet --width 50 -f term -F border --gay '       edited by Zack : Mini Menu   '");
echo "List of ISP's - Type carefully\n";
echo "──────────────────────────────────\n";
echo "$menu";
echo "────────────────────────────────────────────────\n";
$games = array("don't choose 0", "awselb/2.0", "xneelo", "cloudflare", "cloudfront", "Apache", "Apache/2", "nginx/1.18", "nginx/1.19", "nginx/1.20.1", "nginx/1.25", "nginx");
$a=readline('Enter your choice:');
$game = trim($games[$a]);
if (!in_array("$game", $games)) {
	system("clear");
	system("figlet Incorrect");
    echo "\033[0;33mWrite down only the number not -> \033[0;31m$a ";
    exit;
}else{
echo "────────────────────────────────────────────────\n";
echo "\033[0;32mYou choose \033[0;33m$game \033[0;32mGOOD LUCK!";
sleep(5);
system("clear");
echo $titil="\033[0;33m";
system("figlet Online");


}

$live = 0;
$die = 0;
ini_set('display_errors', 1);
ini_set('max_execution_time', 300000);
$listcode = readline("Enter name of file you want to scan :  ");
$codelistlist = file_get_contents($listcode);
$code_list_array = file($listcode);
$code = explode(PHP_EOL, $codelistlist);
$count = count($code);
$i ="0";

echo "\033[0;36m[+]~~~~~~~~~~~~~\033[0;32mTotal Hosts/IP's=\033[0;37m[$count]\033[0;36m~~~~~~~~~~~~[+]\r\n";


//now starting the loop.....
while($i < $count) {
  $percentage = round(($i+1)/$count*100,2);
  
  
$staztrick = explode(" ", $code[$i]);//delim
  $site= trim($staztrick[0]);
 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://$site");
curl_setopt($ch, CURLOPT_HEADER, true);    
curl_setopt($ch, CURLOPT_NOBODY, true);    
curl_setopt($ch, CURLOPT_RETURNTRANSFER,10); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
curl_setopt($ch, CURLOPT_PORT,"443");
#curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 1); 
$output = curl_exec($ch); 
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

 

#	echo "$output\n"; //
	
	
if(strpos($output, "erver: $game")) {
echo "\033[0;36m[~]Hooray! -> \033[0;33m$site \n";
$livee = "hits.txt";
    $fopen = fopen($livee, "a+"); 
    $fwrite = fwrite($fopen, "$game zero rated-> $site\n"); 
    fclose($fopen); 
    $live++;
    
}


else{ 
echo "\033[0;37m[~]Not valid ->  \033[0;31m$site\n";
	}
	
$i++;

	}
	
