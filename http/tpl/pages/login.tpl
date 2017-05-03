<!--<div style="width:80%; height: 100px;">-->
<div class="log_form">

		<form action="index.php?page=json&action=login" name="formAuth" method = "post">
		<table border=0 align=right>
			<tr height=26 valign=top>
			<td width=140 align=right><b>Имя пользователя:</b><br></td>
			<td><input type="text" name="login" value="" size=24 maxlength=129 class=colortext></td>
			</tr>
			<tr height=26 valign=top>
			<td width=140 align=right><b>Пароль:</b><br></td>
			<td><input type="password" name="pass" size=24 value="" maxlength=64 class=colortext></td>
			</tr>
			<tr height=28 valign=bottom>
			<!--<td colspan=2>-->
			<td></td><td><input type="submit" name="button" value="Войти"></td>
			</tr>
		</table>
		</form>
		<br />
		<div class="warning">[&message2user&]</div>

</div>