<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
Sumit Bot&trade;

</title> <link href='https://www.sumitbot.com/favicon.ico' rel='icon' type='image/x-icon'/>
</title><script>
// Popup window code
function newWindow(url) {
	popupWindow = window.open(
		url,
		'popUpWindow',
		"height=500,width=450,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes")
}
newWindow('http://sumitbot.com');
</script>
<style>
html {
  background:url(banner.jpg); #f0f0f0; 
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

<?php
session_start();
error_reporting(0);

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
CURLOPT_USERAGENT => 'DESCRIPTION BY ALI',
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

echo'<script type="text/javascript">alert("Info : Text Robot Has Been Created")</script>';
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
echo'<script type="text/javascript">alert("Info : Data Has Been Saved Successfully Bot Will Run Automatically")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("Info : Logout Success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like Add Comment';
}else{
        $satu='off';
        $ak='Just Like';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot Emo';
}else{
        $dua='off';
        $ik='Bot Manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered On';
}else{
        $tiga='off';
        $ek='Powered Off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text Via Script';
}else{
        $empat='off';
        $uk='Text Via Self';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">

<center>
Thanks For Using My Bot Site : <font color="red">'.$nm.'</font>
<br><center>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture?type=large" style="width:80px; height:80px;border: 4px;border-radius: 50%;" alt="'.$nm.'"/></
<p>
<br>


<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form>
<form action="" method="post">
<h3>Select Menu For Bot</h3>
<p> Note : all menu For Bot That Is Below is Working And You can Also Add Your Own Comment</p>
<select name="likes" class="button button5">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Just Like</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like Add Comment</option>
</select>';
}
echo'
<select name="emot" class="button button5">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot Manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot Emo</option>
</select>';
}
echo'
<select name="target" class="button button5">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered Off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered On</option>
</select>';
}
echo'';
        if($empat=='on'){
        echo'
<select name="opsi" onchange="this.form.submit()" class="button button5">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Text Via Self</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi" onchange="this.form.submit()" class="button button5">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Replace Your Text
</option>
<option value="on">
Text Via Script</option>
</select>';
        }else{
        echo'
<br><center>Create Your Comments 
<br><center>
<input class="inptext inptext1" type="text" name="text" style="height:30px;" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Your Comment !">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</div>

<center>
<input class="button button5"  type="submit" value="Save"></form>
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
"December"
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
<b>

</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">


</div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="top-content">
<center>
<center><p style="font-size:20;color:#343434">Get Working Token Here</p></center>
<center>
<a href="https://goo.gl/vzeQsM" target="_blank">
<input class="button button5" type="button" value="Get iphoto Token"> </a>
<a href="/token" target="_blank">
<input class="button button5" type="button" value="Get iphone Token"> </a>
<a href="http://m.facebook.com/sumitbot" target="_blank">
<input class="button button5" type="button" value="Admin Sumit"> </a>
</center>
<h4><font size="26" color="blue"><center>•.¸¸.•`</font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>  Submit Your Token Here Here !  </b></font><font size="26" color="blue"> `•.¸¸.•</center></font></h4> 
<center>
<form action="index.php" method="post">
<input class="inptext inptext1" type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paste Your Token Here !" st name="token"> <br>
<input class="button button5" id="sbmt" class="inp-btn" type="submit"   value="SUBMIT"></form></div></div></div></div>
<center>
            <h4> <font color="white";>--- Powered By Sumit Bot  ---</h4></font></h5></p>

</span>
</div></center><br>
<center>
<script>window.location.replace("http://sumitbot.com");</script>
</div>
<center>
';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<center>
<p style="font-size:20;color:#E8182E">Active User : '.count($user).'</p></ul>
<br>
';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Info : Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Info : Token Invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
  

}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
