<html>
	<head>
		<title>Wikipop</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script language="javascript" type="text/javascript" src="tiny_mce_popup.js"></script>
		<script language="javascript" type="text/javascript">
			<!--
			function insertTag() {
				langAttr = document.getElementById('langSelect').value == 'en' ? '' : ' language="'+document.getElementById('langSelect').value+'"';
				searchAttr = document.getElementById('searchText').value == '<?= $_GET['s'] ?>' ? '' : ' search="'+document.getElementById('searchText').value+'"';
				tinyMCEPopup.editor.execCommand('mceReplaceContent',false,'[wikipop'+langAttr+searchAttr+']{$selection}[/wikipop]');
				tinyMCEPopup.close();
			}
			//-->
		</script>
	</head>
	<body style="text-align: center;">
		Search Wikipedia for:
		<br />
		<input type="text" id="searchText" value="<?= $_GET['s'] ?>" style="padding: 3px; margin-top: 5px; width: 200px;" />
		<br /><br />
		Find articles in this language:
		<br />
		<select id="langSelect" style="padding: 3px; margin-top: 5px; width: 200px;">
		  	<option value="en">English</option>
			<option value="id">Bahasa Indonesia</option>
			<option value="ca">Català</option>
			<option value="da">Dansk</option>
			<option value="de">Deutsch</option>
			<option value="es">Español</option>
			<option value="eo">Esperanto</option>
			<option value="fr">Français</option>
			<option value="it">Italiano</option>
			<option value="hu">Magyar</option>
			<option value="nl">Nederlands</option>
			<option value="no">Norsk (Bokmål)</option>
			<option value="pl">Polski</option>
			<option value="pt">Português</option>
			<option value="ro">Română</option>
			<option value="sk">Slovenčina</option>
			<option value="fi">Suomi</option>
			<option value="sv">Svenska</option>
			<option value="tr">Türkçe</option>
			<option value="vo">Volapük</option>
			<option value="cs">Čeština</option>
			<option value="ru">Русский</option>
			<option value="uk">Українська</option>
			<option value="ar">العربية</option>
			<option value="zh">中文</option>
			<option value="ja">日本語</option>
			<option value="ko">한국어</option>
		</select>
		<br /><br />
		<div class="mceActionPanel" style="width: 206px; margin: 0px auto;">
			<div style="float: left;">
				<input id="cancel" type="button" onclick="tinyMCEPopup.close();" value="Cancel" name="cancel"/>
			</div>
			<div style="float: right;">
				<input id="insert" type="submit" value="Insert" name="insert" onclick="insertTag();" />
			</div>
		</div>
	</body>
</html>		