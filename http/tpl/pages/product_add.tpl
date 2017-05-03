<div style="width:80%; height: 100px; float:left; width:100%; height:auto; margin: 10px 10px;">

		<table border=0 align=center>
		<form action="index.php?page=json&action=product_add" name="formAuth" method = "post">
			<tr height=32 valign=top>
			<td width=210 align=right><b>Наименование товара:</b><br></td>
			<!--<td><input type="text" name="name_product" value="" size=24 maxlength=129 class=colortext></td>-->
			<td width=210><input name="name_product" type="text" dir="auto" size=44 maxlength=120 style="position: relative; vertical-align: top; background-color: transparent;" spellcheck="true" autocomplete="on" iclass="search-query tt-query" placeholder="Максимальная длина названия - 120 символов" accesskey="n"></td>
			</tr>
			
			<tr height=32 valign=top>
			<td width=210 align=right><b>Кол-во сторон/поверхностей:</b><br></td>
			<!--<td><input type="text" name="sides" size=24 value="" maxlength=64 class=colortext></td>-->
			<td width=210><input name="sides" type="text" dir="auto" size=1 maxlength=2 style="position: relative; vertical-align: top; background-color: transparent;" spellcheck="true" autocomplete="on" iclass="search-query tt-query" placeholder="" accesskey="s"></td>
			</tr>
			
			<tr height=32 valign=top>
			<!--<td width=200 align=right><b>Категория:</b><br></td>
			<td><input type="password" name="cat_id_product" size=24 value="" maxlength=64 class=colortext></td>-->
			<td width=210 align=right><b>Категория:</b><br></td>
			<td width=210>[&cat&]</td>
			</tr>
			
			<!--<tr height=32 valign=top>
			<td width=210 align=right><b>Изображение:</b><br></td>
			<!-<td><input type="text" name="sides" size=24 value="" maxlength=64 class=colortext></td>->
			<td width=210><input name="sides" type="text" dir="auto" size=1 maxlength=2 style="position: relative; vertical-align: top; background-color: transparent;" spellcheck="true" autocomplete="on" iclass="search-query tt-query" placeholder="" accesskey="s"></td>
			</tr>-->
			
			<!--<tr height=32 valign=bottom>-->
			<tr valign=bottom>
			<!--<td colspan=2>-->
			<td></td><td><input type="submit" name="button" value="Добавить товар"></td>
			</tr>
			<!--</form>-->
			
			<tr height=32 valign=top>
				<td width=220 align=right>
				<!--<form enctype="multipart/form-data" action="index.php?page=json&action=upload_img" method="POST">-->
    			<!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
  		  		<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  		  		<!-- Название элемента input определяет имя в массиве $_FILES -->
  		  		<b>Отправить этот файл: </b>
				</td>
				<td width=210><input name="userfile" type="file" />
  		  		<input type="submit" value="Send File" />
  		  		</form>
				</td>
			</tr>

		</table>
		
		
<!--	<form enctype="multipart/form-data" action="__URL__" method="POST">
    	<!- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла ->
    	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    	<!- Название элемента input определяет имя в массиве $_FILES ->
    	Отправить этот файл: <input name="userfile" type="file" />
    	<input type="submit" value="Send File" />
		</form> -->

</div>