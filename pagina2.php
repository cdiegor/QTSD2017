<?php
session_start();
//Proceder a uma validação dos dados. Em caso de erro, retornar a página.
foreach ($_POST as $key => $value)
{
	$_SESSION['post'][$key] = $value;
}


/*
//Verificando se todos os campos da 1a página estão preenchidos. Caso contrário, redirecionar.
if (	empty($_POST['universidade'])
	 || empty($_POST['unidade'])
	 || empty($_POST['genero'])
	 || empty($_POST['idade'])
	 || empty($_POST['estadocivil'])
	 || empty($_POST['dependentes'])
	 || empty($_POST['tempotrabalho'])
	 || empty($_POST['tempodocente'])
	 || empty($_POST['tempoufc'])
	)
{
	//Alterando mensagem de erro.
	$_SESSION['erro'] = "Campos obrigatórios foram deixados em branco. Por favor, preencha-os.";
	header("location: pagina3.php"); //Redirecionando para a página anterior.

} 
else 
{
	//Proceder a uma validação dos dados. Em caso de erro, retornar a página.	
	foreach ($_POST as $key => $value) 
	{
		$_SESSION['post'][$key] = $value;
	}
}
*/
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Questionário - Passo (2/5)</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"
	href="formoid1_files/formoid1/formoid-solid-blue.css" type="text/css" />
</head>
<body class="blurBg-false" style="background-color: #EBEBEB">


	<script type="text/javascript"
		src="formoid1_files/formoid1/jquery.min.js"></script>

	<span id="error"> <!----Initializing Session for errors--->
        <?php
		if (! empty ( $_SESSION ['erro'] )) 
		{
			echo $_SESSION ['erro'];
			unset ( $_SESSION ['erro'] );
		}
		else 
		{
			$i = 0;
			foreach ($_POST as $key => $value)
			{
				echo "Var ", $i, " = ", $value, " <br>" ;
				$i++;
			}
			
		}
		?>
    </span>

	<form class="formoid-solid-blue"
		style="background-color: #FFFFFF; font-size: 14px; font-family: 'Roboto', Arial, Helvetica, sans-serif; color: #34495E; max-width: 800px; min-width: 150px"
		method="post" action="pagina3.php">
		<div class="title">
			<h2>
				Questionário - Passo (2/5)
				<progress max="6" value="2">(Passo 2 de 5)</progress>
			</h2>
		</div>

		<div align="center">
			<input type="button" name="salvar" class="action-button"
				value="Salvar" />
		</div>

		<div class="element-separator">
			<hr>
			<h3 class="section-break-title">Formação</h3>
		</div>
		<div class="element-radio">
			<label class="title">(2.1) Graduação<span class="required">*</span></label>
			<div class="column column1">
				<label><input type="radio" name="radio1" value="Licenciatura"
					required="required" /><span>Licenciatura</span></label><label><input
					type="radio" name="radio1" value="Bacharelado" required="required" /><span>Bacharelado</span></label><label><input
					type="radio" name="radio1" value="Licenciatura e Bacharelado"
					required="required" /><span>Licenciatura e Bacharelado</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<div class="element-checkbox">
			<label class="title">(2.2) Cursou (você pode marcar mais de uma opção): </label>
			<div class="column column1">
				<label><input type="checkbox" name="checkbox[]"
					value="Especialização" /> <span>Especialização</span> </label> <label>
					<input type="checkbox" name="checkbox[]" value="Mestrado" /> <span>Mestrado</span>
				</label> <label> <input type="checkbox" name="checkbox[]"
					value="Doutorado" /> <span>Doutorado</span>
				</label> <label> <input type="checkbox" name="checkbox[]"
					value="Pós-doutorado" /> <span>Pós-doutorado</span>
				</label>
			</div>
			<span class="clearfix"></span>
		</div>
		<div class="element-radio">
			<label class="title">(2.3) Carreira de professor/Classe</label>
			<div class="column column1">
				<label> <input type="radio" name="carreira"
					value="Ensino básico, técnico e tecnológico" /> <span>Ensino
						básico, técnico e tecnológico</span>
				</label> <select name="opcoesebtt">
					<option value="D01">D I</option>
					<option value="D02">D II</option>
					<option value="D03">D III</option>
					<option value="D04">D IV</option>
					<option value="D05">D V</option>
					<option value="TTL">Titular</option>
				</select> <label> <input type="radio" name="carreira"
					value="Magistério superior" /> <span>Magistério superior</span>
				</label> <select name="opcoesmagissup">
					<option value="AUX">Auxiliar</option>
					<option value="AST">Assistente</option>
					<option value="ADJ">Adjunto</option>
					<option value="ASC">Associado</option>
					<option value="TTL">Titular</option>
				</select> <label> <input type="checkbox" name="substituto"
					value="Substituto" /> <span>Substituto</span>
				</label>
			</div>
			<span class="clearfix"></span>
		</div>
		<!--
	<div class="element-input" title="Classe e nível no magistério superior"><label class="title"><span class="required">Classe e nível no magistério superior: *</span></label><div class="item-cont"><input class="large" type="text" name="input1" required="required" placeholder="Classe e nível no magistério superior"/><span class="icon-place"></span></div></div> -->
		<div class="element-radio">
			<label class="title">(2.4) Regime de trabalho: <span class="required">*</span></label>
			<div class="column column1">
				<label><input type="radio" name="radio2" value="20h"
					required="required" /><span>20h</span></label><label><input
					type="radio" name="radio2" value="40h" required="required" /><span>40h</span></label><label><input
					type="radio" name="radio2" value="40h/Dedicação exclusiva"
					required="required" /><span>40h/Dedicação exclusiva</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<div class="element-radio">
			<label class="title">(2.5) É sindicalizado? <span class="required">*</span></label>
			<div class="column column2">
				<label><input type="radio" name="radio3" value="Sim"
					required="required" /><span>Sim</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="radio3" value="Não"
					required="required" /><span>Não</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<div class="element-input"
			title="Entidade sindical (caso seja sindicalizado)">
			Nome da entidade sindical, caso seja sindicalizado: <label
				class="title"></label>
			<div class="item-cont">
				<input class="large" type="text" name="input2"
					placeholder="Entidade sindical (caso seja sindicalizado)" /><span
					class="icon-place"></span>
			</div>
		</div>

		<!-- <input type="submit" name="anerior" class="prev action-button"
			value="Voltar" />  --> 
		<input type="submit" name="proximo"
			class="next action-button" value="Avançar" />



	</form>

</body>
</html>
