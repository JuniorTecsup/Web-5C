<!DOCTYPE html>
<html>
<head>
	<title>Formulario JavaScript</title>
	<script type="text/javascript">
		  var sumar = function(){
		  var venta_var = parseFloat(document.getElementById('venta').value);
		  if(venta_var <= 150){
             var total = venta_var;

		  }else if(venta_var <= 400){
             var total = venta_var + venta_var*0.1;
		  }else{
		  	 var total = 50 + venta_var + venta_var*0.09;
		  }
		  document.getElementById('resultado').value = total;
		};
	</script>
</head>
<body>
      <form>
      	  <p>Valor 1 : <input type="text" id="venta" size="20"></p>
      	  <p><input type="button" value="Sumar" onclick="sumar()"></p>
      	  <p>La paga total es : <input type="text" id="resultado" disabled="disabled"></p>
      </form>
</body>
</html>