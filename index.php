<title>Sumit Reaction Bot
</title> 
<link href='https://www.sumitbot.com/favicon.ico' rel='icon' type='image/x-icon'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
html {
  background:url(https://i0.wp.com/flashwallpapers.com/wp-content/uploads/2015/10/glare-background-blur-dark.jpg); #f0f0f0; 
 no-repeat center center fixed ;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: monospace;
}
body, input, button {
  font-family: 'Source Sans Pro', sans-serif;
}
#admin{
    color:white;
    font-size:30px;
    font-weight:100;
    
}
/* Medium Devices, Desktops */
@media only screen and (max-width: 992px) {
  .login {
    margin-top: 1%;
    width: 550px;
    font-size: 1.7em;
    min-height: 0;
  }
}
/* Small Devices, Tablets */
@media only screen and (max-width: 768px) {
  .login {
    margin-top: 0;
    width: 500px;
    font-size: 1.3em;
    min-height: 0;
  }
}
/* Extra Small Devices, Phones */
@media only screen and (max-width: 480px) {
  .login {
    margin-top: 0;
    width: 400px;
    font-size: 1em;
    min-height: 0;
  }
  .login h2 {
    margin-top: 0;
  }
}
/* Custom, iPhone Retina */
@media only screen and (max-width: 320px) {
  .login {
    margin-top: 0;
    width: 200px;
    font-size: 0.7em;
    min-height: 0;
  }
}


.inptext {
    border: none;
    color: white;
    width: 310px;
    height: 50px;
    text-align: auto;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}


.inptext1 {
    background-color: #f1f1f1;
    color: black;
    border: 1px solid white;
    border-radius: 50px;

}

/***************************/

/****************/
.copy-right {
  margin-top: 0;
    margin-left: 40px;
}
.copy-right p {
  color: #343434;
  font-size: 1em;
  font-family: 'Open Sans', sans-serif; 
  font-weight: 600;
    
    width: 300px;
    
     
}
.copy-right p a {
  font-family: 'Open Sans', sans-serif; 
  font-size: 1em;
  color:white;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
.copy-right p a:hover {
  color:#1DB198;
}


.button {
    
    border: none;
    border-radius: 30px;
    color: white;
    width: 140px;
    height: 35px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

#example1 {
    content: url(https://3.bp.blogspot.com/-Nmx4S_hD3YY/V1hY2SBumJI/AAAAAAAAAKM/de0CJNutwlER00OFeVoHQL9W5IatY_0fQCLcB/s320/Sumit%2BBot.png);
   
}
.example1 {
    content: url(https://3.bp.blogspot.com/-Nmx4S_hD3YY/V1hY2SBumJI/AAAAAAAAAKM/de0CJNutwlER00OFeVoHQL9W5IatY_0fQCLcB/s320/Sumit%2BBot.png);
   
}
.button5 {
    background-color: #18a689;
    color: white;
    border: 1px solid #b066ff;
}

.button5:hover {
    background-color: #b066ff;
    color: #fff;
    border: 1px solid #319db5;
}
#wrap { width: 360px; height: 80px; padding: 0; overflow: hidden; }
#frame { width: 800px; height: 80px; border: 1px solid black; }
#frame { zoom: 0.75; -moz-transform: scale(0.75); -moz-transform-origin: 0 0; }
</style>


<?php error_reporting(0);
$bot=new bot();
class bot{ 




public function getGr($as,$bs){
$ar=array(                                                         
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);




return $im.$as.$bs;
}




public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}




private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by Usama Ahmad',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}




public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);




echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! Usama")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !! Good Luck !! Buddy")</script>';}}
}




public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);




echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';




        $this->atas();
        $this->home();
        $this->bwh();
}




public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
echo'
<center>
<div id="bottom-content">
<div id="navigation-menu">
<center>
Welcome Back : <font color="White">'.$nm.'</font></center>

<center>
<a href="http://www.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture?type=large" style="width:210px; height:210px;border: 2px;border-radius: 50%;" alt="Sumit " title="Sumit Kumar" class="thumbnail"/></a>
<br><center>


<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">LOgout BOT</button> </a><br>
<li>
<form action="index.php" method="post">
<h1>Reaction Active now Check YOur Activity LOg Now</h1>

<div id="top-content">
<div id="search-form">
</div></div></div>';




$this->membEr();
}




public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);




$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);




$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);




echo'
<div id="header">
<h1 class="heading">




</h1>
<h2 class="description">
</h2></div>';
} 




public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">

<center><h1>Auto Mix Reaction 
