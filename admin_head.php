<?php
include "./inc/config.php";

if(!$_SESSION[user_id] || $_SESSION[user_level] < 9){
    
    $_SESSION[user_idx] = "";
    $_SESSION[user_id] = "";
    $_SESSION[user_name] = "";
    $_SESSION[user_level] = "";


    alert("어드민 아이디로 로그인하여 주시기 바랍니다.", "./admin_login.php");


    
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<title></title>
</head>
<table style="width:1000px;height:50px;border:5px #CCCCCC solid;">
    <tr>
        <td align="center" valign="middle" colspan="3" style="font-zise:15px;font-weight:bold;">
        TEAM K 관리자 게시판
        </td>
    </tr>
    <tr>
        <td align="center" valign="middle" style="font-size:12px;"><a href="./admin_board_list.php">게시판목록</a></td>
        <td align="center" valign="middle" style="font-size:12px;"><a href="./admin_member_list.php">회원목록</a></td>
        <td align="center" valign="middle" style="font-size:12px;"><a href="./admin_logout.php">로그아웃</a></td>
    </tr>
</table>