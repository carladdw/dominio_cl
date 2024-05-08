<?php

if ($social['youtube']) {
	$youtube = '
	<td bgcolor="#F9F7F8"><a href="'.$social['youtube'].'" target="_blank"><img style="display:block; border:0px" src="'.$mail_template.'img/bienvenido_25.jpg" width="25" height="24" alt=""></a>
		</td>
		<td width="26" height="24" bgcolor="#F9F7F8">
		</td>
	';
}

if ($social['twitter']) {
	$twitter = '
	<td bgcolor="#F9F7F8"><a href="'.$social['twitter'].'" target="_blank"><img style="display:block; border:0px" src="'.$mail_template.'img/bienvenido_21.jpg" width="23" height="24" alt=""></a>
		</td>
		<td width="28" height="24" bgcolor="#F9F7F8">
		</td>
	
	';
}

if ($social['facebook']) {
	$facebook = '
	<td bgcolor="#F9F7F8"><a href="'.$social['facebook'].'" target="_blank"><img style="display:block; border:0px" src="'.$mail_template.'img/bienvenido_19.jpg" width="23" height="24" alt=""></a>
		</td>
		<td width="29" height="24" bgcolor="#F9F7F8">
		</td>
	
	';
}
if($social['google']){
	$google='
		<td bgcolor="#F9F7F8"><a href="'.$social['google'].'" target="_blank"><img style="display:block; border:0px" src="'.$mail_template.'img/bienvenido_27.jpg" width="30" height="24" alt=""></a>
		</td>
	  	<td width="170" height="24" bgcolor="#F9F7F8">
		</td>
	';
}

if ($social['linkedin']) {
	$linkedin = '
	<td bgcolor="#F9F7F8"><a href="'.$social['linkedin'].'" target="_blank"><img style="display:block; border:0px" src="'.$mail_template.'img/bienvenido_23.jpg" width="32" height="24" alt=""></a>
		</td>
		<td width="26" height="24" bgcolor="#F9F7F8">		
		</td>
	
	';
}

$content =
		'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="font-family:Arial, Helvetica, sans-serif; margin:0;">

<table  cellpadding="0" cellspacing="0" style="border-collapse:collapse;" border="0" width="100%" >
<tr>
<td bgcolor="#ffffff">
	<table  cellpadding="0" bgcolor="#FFFFFF" cellspacing="0" border=0 style="border-collapse:collapse; border:1px solid #999999;" bordercolor="#999999"  width="600" align="center">

	<tr bgcolor="#03649B">
	<td colspan="5"><img src="'.$mail_template.'img/postulacion.jpg" /></td>
	</tr>

	<tr>
		<td colspan="5">
			<table cellpadding="0" cellspacing="0" border="0" >
				<tr>
					<td width="20"></td>
					<td width="554">
						<p style="padding:0; margin:0; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666;">
						<b>'.mensajeCorreoEstimado.'<strong>'.$datosEmail['nombre'].'</strong></b>
						<br/><br/>'.confirmar_inscripcion.' <br/><br/>
						<div align="center">
							<a href="'.$datosEmail['link'].'">'.$datosEmail['cargo'].'</a><br>
							<b>'.fecha_inscripcion.''.date("j-n-Y").'<br><br></b>
						</div>
						<b>'.gracias.'<br><br></b>
						<b>'.atentamente.'<br></b>
						<b><strong>'.$CONFIG->url.'</strong><br></b>
						<b><strong>'.comunidad_lider_ibero.'</strong><br></b>
						<b>'.adherida_red_trabajando.'<br></b>
						<br/><br/><br/>
						</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="5" align="right">
		<a href="http://'.$CONFIG->url.'/?utm_source=mail&utm_medium=mail&utm_campaign=mail_bienvenida_usuario_post_registro_espana" target="_blank"><img src="'.$mail_template.'img/trabajando.com.jpg" /></a></br></br>
		</td>
	</tr>
<tr>
<td colspan="5">
<table width="599" height="40" cellpadding="0" cellspacing="0" align="center" border="0" style="border-top:1px solid #999999; ">
	<tr>
    	<td width="168" height="24" bgcolor="#F9F7F8" align="center">
	    	<p>'.dudas_consultas.'<br></p>
			<p>'.$CONFIG->correos.'<br></p>
			<p>'.footer_defecto.'<a href="'."http://".$CONFIG->url.'">'.$CONFIG->url.'</a><br></p>
    	</td>
	</tr>
	</table>
	</td>	
</tr>
<tr>
<td colspan="5">
<table width="599" height="40" cellpadding="0" cellspacing="0" align="center" border="0" style="border-top:1px solid #999999; ">
	<tr>
    	<td width="168" height="24" bgcolor="#F9F7F8"></td>
		'.
		$facebook.
		$twitter.
		$linkedin.
		$youtube.
		$google.'
		
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