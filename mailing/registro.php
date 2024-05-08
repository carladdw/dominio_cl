<?php
$fondo = '#FFFFFF';
$texto = '#666666';
$content =
		'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="font-family:Arial, Helvetica, sans-serif; margin:0;">

<table  cellpadding="0" cellspacing="0" style="border:3px solid #ccc; border-collapse:collapse;" border="0" width="100%" >
<tr>
<td bgcolor="#CCCCCC">

<table  cellpadding="0" bgcolor="#FFFFFF" cellspacing="0" style="border-collapse:collapse;" border="0" width="594" align="center">

<tr bgcolor="'.$fondo.'">
<td width="180"> <a href="'.$domain.'" style="border:none, text-decoration:none;"><img src="'.$rutaimg.'logo.png"/></a></td>
<td width="350"></td>
</tr>

<tr>
<td colspan="5">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td width="20"></td>
<td width="350">
 <p style="padding:0; margin:0; font-family:Arial, Helvetica, sans-serif; font-size:24px; color:'.$texto.';">
            '.bienvenido_a.'<br/>
            </p>
            <p style="padding:0; margin:0; font-family:Arial, Helvetica, sans-serif; font-size:30px; color:'.$texto.';">
            <b>'.$nombreportal.'</b>
            </p>
</td>

<td width="190">
<img src="'.$mail_template.'img/girl.png" />
</td>

</tr>
</table>
</td>
</tr>

<tr>
<td colspan="5">
<img src="'.$mail_template.'img/bienvenida_shadow1.jpg" />
</td>
</tr>



<tr>
<td colspan="5">
<table width="593" cellpadding="0" cellspacing="0" align="center" border="0">
	<tr>
		<td width="30"></td>
		<td width="533">
			<font style="font-family:Arial; font-size:14px; line-height:15px; color:#555555">'.$mensaje.'
			</font>
	  </td>
		<td width="30"></td>
    </tr>
</table>
</td>
</tr>

<tr>
<td colspan="5">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td width="574" style="text-align:right;">
<p style="padding:0; margin:0; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-size:16px;color:'.$texto.'; font-weight:bold;">
'.$nombreportal.'
</p>
</td>
<td width="20" ></td>
</tr>

<tr>
<td height="18" colspan="2">
</td>
</tr>

<tr>
<td height="31" bgcolor="'.$fondo.'" colspan="2">

<table cellpadding="0" cellspacing="0" border="0" bgcolor="'.$fondo.'" style="border-collapse:collapse;">
<tr>

<td width="20" height="31">

</td>

<td width="150" height="31">
<p style="margin:0;color:#FFFFFF; font-size:12px; font-weight:bold; float:left; font-family:Arial, Helvetica, sans-serif;">
<a href="'.$domain.'" style="color:#CCCCCC; text-decoration:none">'.$domain.'</a>
</p>
</td>

<td width="20" height="31">

</td>


</tr>
</table>

</td>
</tr>

<tr bgcolor="#CCCCCC" style="border-collapse:collapse;">
<td height="58" colspan="2">
<img src="'.$mail_template.'img/bienvenida_footer.jpg" />
</td>
</tr>

</table>
</td>
</tr>

</table>


</td>
</tr>
</table>


</body>
</html>';
?>