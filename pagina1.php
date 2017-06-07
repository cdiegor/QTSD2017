<?php
// Session starts here
session_start ();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Questionário - Passo (1/5)</title>
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
	?>
    </span>

	<form class="formoid-solid-blue"
		style="background-color: #FFFFFF; font-size: 14px; font-family: 'Roboto', Arial, Helvetica, sans-serif; color: #34495E; max-width: 800px; min-width: 150px"
		method="post" action="pagina2.php">

		<div class="title">
			<h2>
				Questionário - Passo (1/5)
				<progress max="6" value="1">(Passo 1 de 5) </progress>
			</h2>
		</div>

		<div align="center">
			<input type="button" name="salvar" class="action-button"
				value="Salvar" />
		</div>

		<div class="element-separator">
			<hr>
			<h3 class="section-break-title">Identificação</h3>
		</div>

		<div class="element-radio">
			<label class="title">(1.1) Instituição <span class="required"></span></label>
			<div class="column column1">
				<label><input type="radio" name="universidade" value="UFC"
					required="required" /><span>Universidade Federal do Ceará</span></label>
				<label><input type="radio" name="universidade" value="URCA"
					required="required" /><span>Universidade Regional do Cariri</span></label>
				<label><input type="radio" name="universidade" value="UVA"
					required="required" /><span>Universidade do Vale do Acaraú</span></label>
			</div>
			<span class="clearfix"></span>
		</div>

		<div class="element-input">
			<label class="title"><span class="required">(1.2) Unidade acadêmica: </span></label>
			<div class="item-cont">
				<input class="large" type="text" name="unidade" required="required"
					placeholder="Unidade Acadêmica/Departamento" /><span
					class="icon-place"></span>
			</div>
		</div>
		<div class="element-radio">
			<label class="title">(1.3) Gênero <span class="required">*</span></label>
			<div class="column column2">
				<label><input type="radio" name="genero" value="Masculino"
					required="required" /><span>Masculino</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="genero" value="Feminino"
					required="required" /><span>Feminino</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="genero" value="Outra"
					required="required" /><span>Outra identidade de gênero</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="genero" value="Nenhuma"
					required="required" /><span>Não se identifica com nenhuma
						identidade de gênero</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<div class="element-radio">
			<label class="title">(1.4) Selecione sua faixa etária: <span
				class="required"></span></label>
			<div class="column column1">
				<label><input type="radio" name="idade" value="30-"
					required="required" /><span>Menos que 30 anos.</span></label> <label><input
					type="radio" name="idade" value="31-40" required="required" /><span>Entre
						31 e 40 anos.</span></label> <label><input type="radio"
					name="idade" value="41-50" required="required" /><span>Entre 41 e
						50 anos. </span></label> <label><input type="radio" name="idade"
					value="51-60" required="required" /><span>Entre 51 e 60 anos. </span></label>
				<label><input type="radio" name="idade" value="61-70"
					required="required" /><span>Entre 61 e 70 anos. </span></label> <label><input
					type="radio" name="idade" value="70+" required="required" /><span>Mais
						que 70 anos.</span></label>
			</div>
			<span class="clearfix"></span>
		</div>

		<div class="element-radio">
			<label class="title">(1.5) Selecione seu estado civil: <span
				class="required"></span></label>
			<div class="column column1">
				<label><input type="radio" name="estadocivil" value="Solteiro"
					required="required" /><span>Solteiro.</span></label> <label><input
					type="radio" name="estadocivil" value="Casado" required="required" /><span>Casado.</span></label>
				<label><input type="radio" name="estadocivil" value="Viúvo"
					required="required" /><span>Viúvo. </span></label> <label><input
					type="radio" name="estadocivil" value="Divorciado"
					required="required" /><span>Divorciado. </span></label> <label><input
					type="radio" name="estadocivil" value="Separado"
					required="required" /><span>Separado. </span></label> <label><input
					type="radio" name="estadocivil" value="Concubinato"
					required="required" /><span>Concubinato. </span></label> <label><input
					type="radio" name="estadocivil" value="RelEstavel"
					required="required" /><span>Relação estável. </span></label> <label><input
					type="radio" name="estadocivil" value="Outro" required="required" /><span>Outro.
				</span></label>
			</div>
			<span class="clearfix"></span>
		</div>


		<!-- <div class="element-number"><label class="title"><span class="required">Número de dependentes: *</span></label><div class="item-cont"><input class="large" type="text" min="0" max="20" name="number" required="required" placeholder="Dependentes" value=""/><span class="icon-place"></span></div></div> -->

		<div class="element-radio">
			<label class="title">(1.6) Número de dependentes: <span
				class="required"></span></label>
			<div class="column column1">
				<label><input type="radio" name="dependentes" value="0"
					required="required" /><span>Nenhum dependente.</span></label> <label><input
					type="radio" name="dependentes" value="1" required="required" /><span>Um
						dependente.</span></label> <label><input type="radio"
					name="dependentes" value="2" required="required" /><span>Dois
						dependentes. </span></label> <label><input type="radio"
					name="dependentes" value="3" required="required" /><span>Três
						dependentes. </span></label> <label><input type="radio"
					name="dependentes" value="4" required="required" /><span>Quatro
						dependentes. </span></label> <label><input type="radio"
					name="dependentes" value="5" required="required" /><span>Cinco ou
						mais dependentes.</span></label>
			</div>
			<span class="clearfix"></span>
		</div>

		<div class="element-number">
			<label class="title"><span class="required">(1.7) Tempo de trabalho
					(em anos): </span></label>
			<div class="item-cont">
				<input class="large" type="text" min="0" max="100"
					name="tempotrabalho" required="required"
					placeholder="Tempo de trabalho" value="" /><span class="icon-place"></span>
			</div>
		</div>

		<div class="element-number">
			<label class="title"><span class="required">(1.8) Tempo de trabalho
					como docente (em anos): </span></label>
			<div class="item-cont">
				<input class="large" type="text" min="0" max="100"
					name="tempodocente" required="required"
					placeholder="Tempo de trabalho como docente (em anos)" value="" /><span
					class="icon-place"></span>
			</div>
		</div>
		<div class="element-number">
			<label class="title"><span class="required">(1.9) Ano de ingresso
					como docente na UFC: </span></label>
			<div class="item-cont">
				<input class="large" type="text" min="0" max="100" name="tempoufc"
					required="required"
					placeholder="Ano de ingresso na UFC como docente" value="" /><span
					class="icon-place"></span>
			</div>
		</div>

		<input type="submit" name="proximo" class="next action-button"
			value="Avançar" />



	</form>

</body>
</html>
