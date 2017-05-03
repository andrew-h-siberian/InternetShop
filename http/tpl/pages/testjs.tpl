<div style="width: 100%">
	<input id="proddd" type="text" size=8 maxlength=8 /><br />
	<input type="submit" value="SUBMIT" onclick="getprod();" /><br /><br />
</div>

<div style="width: 100%">
	<input type="submit" value="Hi" onclick="hi();" />
	<input type="submit" value="Bye" onclick="bye();" />
	<input type="submit" value="Добавить" onclick="add_cnt();" />
	<input type="submit" value="Очистить" onclick="clean();" />
	<input type="submit" value="Удалить" onclick="del();" />
	<input type="submit" value="Копировать" onclick="divcopy();" />
</div>

<div id="parent">
	<div id="TEST">
	</div>
</div>

<div style="width: 200px; float:left; margin: 8px 8px;">
x: <input type="text" id="x" size=4 maxlength=3 /><br />
y: <input type="text" id="y" size=4 maxlength=3 /><br />
<input type="submit" value="Умножить" onclick="mul();" /><br />
<input type="submit" value="Разделить" onclick="divide();" /><br />
<input type="submit" value="Сложить" onclick="plus();" /><br />
<input type="submit" value="Вычесть" onclick="substr();" /><br />
=<input id="res" type="text" size=4 maxlength=32/>
</div>