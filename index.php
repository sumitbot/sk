<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
Sumit Bot</title>

        <link rel="stylesheet" type="text/css" href="sumitbot.blogspot.com.css" media="all,handheld"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="http://www.familyrocketship.com/wp-content/uploads/2012/12/Favicon-150x150.png">
<script>
// Popup window code
function newWindow(url) {
	popupWindow = window.open(
		url,
		'popUpWindow',
		"height=500,width=450,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes")
}
newWindow('http://sumitbot.blogspot.com');
</script>


<?php
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
        $ashir[]=$b.'='.$c;
}
$true='?'.implode('&',$ashir);
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
CURLOPT_USERAGENT => 'DESCRIPTION by MAHAL_KITA',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('ashir')){
        mkdir('ashir');
}
if($bb){
$blue=fopen('ashir/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! Ashir")</script>';
}else{
        if($z){
if(file_exists('ashir/'.$id)){
$file=file_get_contents('ashir/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('ashir/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('ashir/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('ashir/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('ashir/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('ashir/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !! Good Luck !! Ashir")</script>';}}
}

public function lOgbot($d){
        unlink('ashir/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('ashir/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<center><div id="bottom-content">
<form action="index.php" method="post">
<center>
<br>
<h3 align="center"><font face="Orbitron" size="5" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red;"><b> Welcome back <br>♛ '.$nm.' ♛ </b><br><br>➺ ᗷᑌY ᑭEᖇᔕOᑎᗩᒪ ᗷOT <br> ✆ +919534701051</font></h3>
<br>
<br>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture?type=large" style="width:100px; height:100px;border: 4px solid white;border-radius: 100px;background-color: white;" alt="'.$nm.'"/></a>
<br>
 <h2>Your Bot Active Successfully '.$nm.'</h2>
<br>
<center>
<h3 ><style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red;">Download facebook Bot Script 
<br> visit ➺  sumitbot.blogspot.com</h3>


<center>
<ul><div id="top-content">
<div id="search-form">
<input class="button button5" type="submit" value="SAVE"></form>
</div></div></div></ul></center>';

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
<h2 align="center"><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red;"><b> ♛ SUMIT KUMAR ® ♛ </b><br><br>➺ ᗷᑌY ᑭEᖇᔕOᑎᗩᒪ ᗷOT <br> ✆ +919534701051</font></h1>

</h1>
<h2 class="description">
</h2></div>';
}

public function home(){
echo'


<h1><center><script src="sumitbot.js"></script></h1>
</center>
<center><img src="http://www.clipartsmania.com/gif/arrows_gif/head_arrows_right_animation_clipart.gif" rotate="180"/><a href="https://sumitbot.blogspot.com" target="_blank"><img src="https://3.bp.blogspot.com/-Nmx4S_hD3YY/V1hY2SBumJI/AAAAAAAAAKM/de0CJNutwlER00OFeVoHQL9W5IatY_0fQCLcB/s320/Sumit%2BBot.png"></a><img src="http://www.clipartsmania.com/gif/arrows_gif/head_arrows_left_animation_clipart.gif"/></center><br>

<center>
<a href="http://www.facebook.com/100009719851100"><img src="https://graph.facebook.com/100009719851100/picture?type=large" style="width:110px; height:110px;border: 2px;border-radius: 50%;" alt="Sumit " title="Sumit Kumar" class="thumbnail"/></a>
<br><center>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fsumitbot&amp;layout=standard&amp;show_faces=true&amp;colorscheme=dark&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>

</div>
';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<center></head>
    <body>
        <div id="main">
            <div id="content">
                <div class="header">

<center><p style="font-size:20;color:#343434">Get Working Token Here</p></center>
<center>
<a href="https://goo.gl/89ZV8T" target="_blank">
<input class="button button5" type="button" value="Allow The App"> </a>
<a href="https://goo.gl/RLHdiA" target="_blank">
<input class="button button5" type="button" value="Get Token"> </a>
<a href="http://m.facebook.com/sumitbot" target="_blank">
<input class="button button5" type="button" value="Admin Sumit"> </a>
</center>
<h4><font size="26" color="blue"><center>•.¸¸.•`</font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>  Submit Your Token Here Here !  </b></font><font size="26" color="blue"> `•.¸¸.•</center></font></h4> 
<center>
<form action="index.php" method="post">
<input class="inptext inptext1" type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paste Your Token Here !" st name="token"> <br>
<input class="button button5" id="sbmt" class="inp-btn" type="submit"   value="SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('ashir')){
        mkdir('ashir');
}
$up=opendir('ashir');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<center>
<p style="font-size:20;color:#E8182E">Active User : '.count($user).'</p></ul>
<br>
<marquee behavior="scroll" direction="left" scrollamount="15" scrolldelay="1"><strong><font style="text-shadow: 1px 1px black; color:white;" size="6">Powered By Sumit Bot</font></strong></center></marquee>
<br>
 
</center>';
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
        unlink('ashir/'.$b[id]);
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
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('ashir/'.$ai[1]);
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
echo '<script type="text/javascript">alert("Error : Token Invalid")</script>';
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