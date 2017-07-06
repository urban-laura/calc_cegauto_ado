<head>
<link rel='stylesheet' type='text/css' href='css/cegauto_ado.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/cegauto_ado.js"></script>
</head>

<body>

<table class='title'>
<tr>
<td>Cégautó adó</td>
</tr>
</table>

<form name='calculator' method='post' class='calc-form'>
<table class='center'>
<tr>
<td>
Teljesítmény (kW):
<select name='power' class='select'>
	###power-options###
</select>
</td>
</tr>

<tr>
<td class='padding-top'>
Környezetvédelmi osztály:
<select name='env' class='select'>
	###env-options###
</select>
</td>
</tr>
</table>

<table class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<tr>
<td><input type='submit' id='submit' value='Számol' class='form-submit'></td>
</tr>
</table>
</form>

<table id='sum' class='###sum-visibility###'>	
<tr>
<td class='messages padding-top'>Havonta:</td>
<td class='padding-top'>###month-value### Ft</td>
</tr>

<tr>
<td class='messages padding-top'>Negyedévente:</td>
<td class='padding-top'>###month3-value### Ft</td>
</tr>

<tr>
<td class='messages padding-top'>Évente:</td>
<td class='padding-top'>###year-value### Ft</td>
</tr>
</table>

<table class='zero'>
<tr>
<td></td>
</tr>
</table>
</body>