script type="text/javascript">
array1 = new Array ("1.bmp", "2.bmp", "3.bmp")

function comeco(){
document.getElementById('imgId').src = array1[0]
document.form.texto.value="0"
}

function mais(){
document.form.texto.value = Math.floor (1+ 1 - 2 + (document.form.texto.value) * 1 + 1)
if (document.form.texto.value > 2)
{document.form.texto.value = 0}
}

function menos(){
document.form.texto.value = Math.floor (1+ 1 - 2 + (document.form.texto.value) * 1 -1)
if (document.form.texto.value < 0)
{document.form.texto.value = 2}
}

function regular(){
document.getElementById('imgId').src = array1[document.form.texto.value];
setTimeout("regular()", 1)
}
</script>
<body onLoad="comeco();regular()">
<a id="aId"><img id="imgId"></a>
</br>
<a id="prev" href="javascript:menos()">Anterior</a>.<a id="next" href="javascript:mais()">Próximo</a>
<form name="form">
<input type=text name="texto">
</form>
