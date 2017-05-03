<!--<div style="width:80%; height: 100px; float:left; width:100%; height:auto; margin: 10px 10px;">-->
<div class="cats_edit">
	<table border=0 align=center>
		<form action="index.php?page=json&action=category_add" name="formAuth" method = "post">
			<tr height=32 valign=top>
				<td width=210 align=right><b>Наименование категории:</b><br></td>
				<td width=210><input name="name_category" type="text" dir="auto" size=24 maxlength=120 style="position: relative; vertical-align: top; background-color: transparent;" spellcheck="true" autocomplete="on" iclass="search-query tt-query" placeholder="Максимум - 120 символов" accesskey="n"></td>
			</tr>
			
			<!--ручной ввод родительской категории
			<tr height=32 valign=top>
				<td width=210 align=right><b>Родительская категория:</b><br></td>
				<td width=210><input id="parent_id" name="parent" type="text" dir="auto" size=8 maxlength=8 style="position: relative; vertical-align: top; background-color: transparent;" spellcheck="true" autocomplete="on" iclass="search-query tt-query" placeholder="" accesskey="s"></td>
			</tr>-->
			
			<tr height=32 valign=top>
				<td width=210 align=right><b>Родительская категория:</b><br /></td>
				<td width=210>[&cat&]</td>
			</tr>
			
			<!--<tr height=32 valign=bottom>-->
			<tr valign=bottom>
			<!--<td colspan=2>-->
			<td></td><td><input type="submit" name="button" value="Добавить категорию"></td>
			</tr>
			</form>
		</table>
</div>