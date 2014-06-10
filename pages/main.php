<?php
/////////////////////////////////////////////////////////////////////////
//
//    This file is part of main.php
//
//    Foobar is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//
//    Foobar is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
//
/////////////////////////////////////////////////////////////////////////
//
// Website : http://php-pastebin.com/
// Contact : contact@php-pastebin.com
// 
/////////////////////////////////////////////////////////////////////////
//
// Dev     : Atmoner
// Website : http://atmoner.com
// Contact : contact@atmoner.com
// Twitter : @atmon3r 
// 
/////////////////////////////////////////////////////////////////////////
$now = time();
$num = date("w");
if ($num == 0)
{ $sub = 7; }
else { $sub = ($num-1); }
$WeekMon  = mktime(0, 0, 0, date("m", $now)  , date("d", $now)-$sub, date("Y", $now));    //monday week begin calculation
$todayh = getdate($WeekMon); //monday week begin reconvert
$d = $todayh[mday];
$m = $todayh[mon];
$y = $todayh[year];


if (!defined("IN_PASTE"))
      die("Access denied!");
      
if (isset($_POST['submit'])){
if (true
        /*
    $startUp->getCaptchaStatus() == 'no' ||
        (($_POST["txtCaptcha"] == $_SESSION["security_code"]) && (!empty($_POST["txtCaptcha"]) && !empty($_SESSION["security_code"])))
        */
    ) {
        if (!empty($_POST['paste'])){

                if(empty($_POST['title'])) {
                $title = 'Không tiêu đề '.$d.' - '.$m.' - '.$y;
                } else {
                $title = $_POST['title'];
                }
        $startUp->addPaste($userId,$title,$_POST['syntax'],$_POST['paste'],$_POST['expiration'],$_POST['exposure']); 

        } else {
        $smarty->assign("errorPaste",'1');               
            }
        } else {
        $smarty->assign("errorCaptcha",'1');
        }
}  

$smarty->assign("getLangs",$startUp->getLangs()); 
$smarty->assign("getCaptchaStatus",$startUp->getCaptchaStatus());
 
$hook->set_title('home_title', $lang["titlehome"]); 
$hook->add_block('pasteForm', '', '',740,10); 
$hook->add_block('pasteOptions', '', '',740,11);  
$hook->add_block('pasteName', '', '',740,12);   
$hook->addJs('Captcha','ajax_captcha.js','libs/captcha/','5'); 

if ($hook->hook_exist('home_page'))  
	$hook->execute_hook('home_page');
 

