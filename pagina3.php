<?php
// Session starts here
session_start ();
//Proceder a uma validação dos dados. Em caso de erro, retornar a página.
foreach ($_POST as $key => $value)
{
	$_SESSION['post'][$key] = $value;
}
?>

<script type="text/javascript">

$('.calc3112').keyup(function() {
    var result = 0;
    $('#total3112').attr('value', function() {
        $('.calc3112').each(function() {
            if ($(this).val() !== '') {
                result += parseInt($(this).val());
            }
        });
        return result;
    });
});

$('.calc324').keyup(function() {
    var result = 0;
    $('#total324').attr('value', function() {
        $('.calc324').each(function() {
            if ($(this).val() !== '') {
                result += parseInt($(this).val());
            }
        });
        return result;
    });
});

</script>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Questionário - Passo (3/5)</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"
	href="formoid1_files/formoid1/formoid-solid-blue.css" type="text/css" />
</head>
<body class="blurBg-false" style="background-color: #EBEBEB">


	<script type="text/javascript"
		src="formoid1_files/formoid1/jquery.min.js"></script>
	<span id="error"> <!----Initializing Session for errors--->
    	<?php
			if (! empty ( $_SESSION ['error'] )) 
			{
				echo $_SESSION ['error'];
				unset ( $_SESSION ['error'] );
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
		method="post", action="pagina4.php">
		<div class="title">
			<h2>
				Questionário - Passo (3/5)
				<progress max="6" value="3">(Passo 3 de 5)</progress>
			</h2>
		</div>

		<div align="center">
			<input type="button" name="salvar" class="action-button"
				value="Salvar" />
		</div>

		<div class="element-separator">
			<hr>
			<h3 class="section-break-title">Condições de trabalho</h3>
		</div>



		<label><span>(3.1) Número médio de horas de trabalho semanais. </span></label>
		<div class="element-number">
			<label class="title"> <span class="required">(3.1.1) Ensino na
					graduação: </span>
			</label>
			<div class="item-cont">
				Presencial: <input type="text" min="0" max="40" name="ensinograduacaopr" class="calc3112" /> 
					EAD: <input type="text" min="0" max="40" name="ensinograduacaoead" class="calc3112" />
			</div>
		</div>
		<div class="element-number">
			<label class="title"> <span class="required">(3.1.2) Ensino na pós-graduação: </span>
			</label>
			<div class="item-cont">
				Presencial: <input type="text" min="0" max="40" name="ensinoposgraduacaopr" class="calc3112" /> 
					EAD: <input type="text" min="0" max="40" name="ensinoposgraduacaoead" class="calc3112"  />
			</div>
		</div>
		<div class="element-number">
			<label class="title"> <span class="required">(3.1.3) Ensino básicoo: </span>
			</label>
			<div class="item-cont">
				Presencial: <input type="text" min="0" max="40" name="ensinoebttpr" class="calc3112" />
				EAD: <input type="text" min="0" max="40" name="ensinoebttead" class="calc3112" />
			</div>
		</div>
		<div class="element-number">
			<label class="title"> <span class="required">(3.1.4) Ensino em cursos
					de especialização: </span>
			</label>
			<div class="item-cont">
				Presencial: <input type="text" min="0" max="40"	name="ensinoespecializacaopr" class="calc3112" /> 
				EAD: <input type="text" min="0" max="40" name="ensinoespecializacaoead" class="calc3112" />
			</div>
		</div>
		<div class="element-number">
			<label class="title"> <span class="required">(3.1.5) Planejamento
					(leituras, elaboração de material didático e avaliativo): </span>
			</label>
			<div class="item-cont">
				Presencial: <input type="text" min="0" max="40" name="ensinoplanejamentopr" class="calc3112" /> 
					EAD: <input type="text" min="0" max="40" name="ensinoplanejamentoead" class="calc3112" />

			</div>
		</div>
		<div class="element-number">
			<label class="title"> <span class="required">(3.1.6) Correção das
					avaliações </span>
			</label>
			<div class="item-cont">
				Presencial: <input type="text" min="0" max="40"	name="ensinocorrecaopr" class="calc3112" /> 
				EAD: <input type="text" min="0" max="40" name="ensinocorrecaoead" class="calc3112" />
			</div>
		</div>

		<div class="element-number">
			<label class="title"> <span class="required">(3.1.7) Orientação ou co-orientação </span>
			</label>
			<div class="item-cont">
				Gaduação: <input type="text" min="0" max="40" name="orientacaograd" class="calc3112" />
				Extensão: <input type="text" min="0" max="40" name="orientacaoext" class="calc3112" />
				Pós-graduação: <input type="text" min="0" max="40" name="orientacaopos" class="calc3112" />
			</div>
		</div>

		<div class="element-number">
			<label class="title"> <span class="required">(3.1.8) Projetos de pesquisa </span>
			</label>
			<div class="item-cont">
				<input type="text" min="0" max="40" name="pesquisa" class="calc3112" />
			</div>
		</div>

		<div class="element-number">
			<label class="title"> <span class="required">(3.1.9) Projetos de extensão </span>
			</label>
			<div class="item-cont">
				<input type="text" min="0" max="40" name="extensao" class="calc3112" />
			</div>
		</div>

		<div class="element-number">
			<label class="title"> <span class="required">(3.1.10) Atividades de gestão </span>
			</label>
			<div class="item-cont">
				<input type="text" min="0" max="40" name="gestao" class="calc3112" />
			</div>
		</div>

		<div class="element-number">
			<label class="title"> <span class="required">(3.1.11) Participação em
					associções e/ou conselhos profissionais (Ex.: OAB, CREA, ANPUH,
					entre outras) </span>
			</label>
			<div class="item-cont">
				<input type="text" min="0" max="40" name="participacao" class="calc3112" />
			</div>
		</div>

		<div class="element-number">
			<label class="title"> <span class="required">(3.1.12) TOTAL </span>
			</label>
			<div class="item-cont">
				<input type="text" min="0" max="40" name="total3112" id="total3112"/>
			</div>
		</div>

		<label><span>(3.2) Número médio de horas de trabalho semestrais: </span></label>
		<div class="element-number">
			<label class="title"> <span class="required">(3.2.1) Formação continuada docente </span>
			</label>
			<div class="item-cont">
				<input type="text" min="0" max="40" name="formacaocontinuada" class="calc324"/>
			</div>
		</div>

		<div class="element-number">
			<label class="title"> <span class="required">(3.2.2) Atividades
					complementares (viagens e trabalhos de campo, organização de
					oficinas, seminários, congressos, outros) </span>
			</label>
			<div class="item-cont">
				<input type="text" min="0" max="40" name="atividadescomplementares" class="calc324" />
			</div>
		</div>

		<div class="element-number">
			<label class="title"> <span class="required">(3.2.3) Outras	atividades acadêmicas (reuniões de colegiados, participação em bancas) </span>
			</label>
			<div class="item-cont">
				<input type="text" min="0" max="40" name="outrasatividades" class="calc324" />
			</div>
		</div>

		<div class="element-number">
			<label class="title"> <span class="required">(3.2.4) TOTAL </span>
			</label>
			<div class="item-cont">
				<input type="text" min="0" max="40" name="total324" id="total324" />
			</div>
		</div>
		<label><span>(3.3) Entre as atividades elencadas anteriormente (itens
				3.1 e 3.2), estabeleça a ordem de intensidade das 5 (cinco)
				atividades mais desgastantes, considerando “1” para maior desgaste e
				“5” para menor desgaste. </span></label>
		<div class="text">
			<div class="item-cont">
				1: <input type="text" class="large" name="intesidade1" /> 2: <input
					type="text" class="large" name="intesidade2" /> 3: <input
					type="text" class="large" name="intesidade3" /> 4: <input
					type="text" class="large" name="intesidade4" /> 5: <input
					type="text" class="large" name="intesidade5" />
			</div>
		</div>

		<label><span>(3.4) Você leciona(ou) alguma disciplina que não tem
				relação com a sua formação? </span></label>
		<div class="element-radio">
			<div class="column column2">
				<label><input type="radio" name="P341" value="SIM"
					required="required" /><span>Sim</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="P341" value="NÃO"
					required="required" /><span>Não</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<label><span> Se afirmativo, está lecionando no atual semestre/ano? </span></label>
		<div class="element-radio">
			<div class="column column2">
				<label><input type="radio" name="P342" value="SIM" /><span>Sim</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="P342" value="NÃO"/><span>Não</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<label><span>(3.5) Você tem ou já teve alunos com deficiência ou
				alguma Necessidade Educativa Especial (NEE) em suas disciplinas? </span></label>
		<div class="element-radio">
			<div class="column column2">
				<label><input type="radio" name="P35" value="SIM"
					required="required" /><span>Sim</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="P35" value="NÃO"
					required="required" /><span>Não</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<span> (3.5.1) Se afirmativo, quantos? </span>
		<div class="element-number">
			<div class="item-cont">
				<input type="text" min="0" max="40" name="alunosdeficiencia" />
			</div>
		</div>
		<label><span> (3.5.2) Quais tipos? (Você pode marcar mais de uma opção)</span></label>
		<div class="element-checkbox">
			<label> <input type="checkbox" name="tipodeficiencia" value="DF" /> <span>Deficiência
					Física</span>
			</label> <label> <input type="checkbox" name="tipodeficiencia"
				value="DI" /> <span>Deficiência Intelectual</span>
			</label> <label> <input type="checkbox" name="tipodeficiencia"
				value="DV" /> <span>Deficiência Visual</span>]
			</label> <label> <input type="checkbox" name="tipodeficiencia"
				value="DA" /> <span>Deficiência auditiva</span>
			</label> <label> <input type="checkbox" name="tipodeficiencia"
				value="AT" /> <span>Autismo</span>
			</label> <label> <input type="checkbox" name="tipodeficiencia"
				value="SD" /> <span>Altas habilidades ou superdotação</span>
			</label> <label> <input type="checkbox" name="tipodeficiencia"
				value="OT" /> <span>Outras: </span>
			</label> <span> <input type="text" class="large" name="outrasdef">
			</span>
		</div>
		<label><span>(3.6) Turnos em que você trabalha na própria
				Universidade (você pode marcar mais de uma opção): </span></label>
		<div class="element-checkbox">
			<label> <input type="checkbox" name="turnos" value="M" /> <span>Manhã</span>
			</label> <label> <input type="checkbox" name="turnos" value="T" /> <span>Tarde</span>
			</label> <label> <input type="checkbox" name="turnos" value="N" /> <span>Noite</span>
			</label>
		</div>
		<label> <span>(3.7) Com que regularidade você leva trabalho para casa?
		</span>
		</label>
		<div class="element-radio">
			<div class="column column1">
				<label><input type="radio" name="P37" value="sempre"
					required="required" /><span>Sempre</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column1">
				<label><input type="radio" name="P37" value="raramente"
					required="required" /><span>Frequentemente</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column1">
				<label><input type="radio" name="P37" value="raramente"
					required="required" /><span>Raramente</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column1">
				<label><input type="radio" name="P37" value="nunca"
					required="required" /><span>Nunca</span></label>
			</div>
			<span class="clearfix"></span>

		</div>
		<label><span>(3.8) Por qual motivo você leva trabalho para casa? (Você pode marcar mais de uma opção) </span></label>
		<div class="element-checkbox">
			<label><input type="checkbox" name="motivostrabalhocasa"
				value="COMOD" /><span>Comodidade</span></label> <label><input
				type="checkbox" name="motivostrabalhocasa" value="INFRA" /><span>Infraestrutura
					inadequada no local de trabalho</span></label> <label><input
				type="checkbox" name="motivostrabalhocasa" value="DIST" /><span>Distância
					de casa para o trabalho</span></label> <label><input
				type="checkbox" name="motivostrabalhocasa" value="SOBRE" /><span>Sobretrabalho</span></label>
			<label><input type="checkbox" name="motivostrabalhocasa"
				value="OUTRO" /><span>Outros: </span> </label> <span> <input
				type="text" class="large" name="outrosmotivostrabalhocasa"></span>
		</div>
		<label><span>(3.9) Você vivenciou ou presenciou tratamento
				inadequado/desrespeitoso para com os professores na universidade? </span></label>
		<div class="element-radio">
			<div class="column column2">
				<label><input type="radio" name="P39" value="SIM"
					required="required" /><span>Sim</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="P39" value="NÃO"
					required="required" /><span>Não</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<label>(3.9.1) Se positivo, de qual(is) tipo(s)? (Você pode marcar mais de uma opção)</label>
		<div class="element-checkbox">
			<label><input type="checkbox" name="tratamento" value="AM" /><span>Assédio
					Moral</span></label> <label><input type="checkbox"
				name="tratamento" value="AS" /><span>Assédio Sexual</span></label> <label><input
				type="checkbox" name="tratamento" value="DS" /><span>Discriminação</span></label>
			<label><input type="checkbox" name="tratamento" value="PR" /><span>Preconceito</span></label>
			<label><input type="checkbox" name="tratamento" value="HS" /><span>Hostilidade</span></label>
			<label><input type="checkbox" name="tratamento" value="IS" /><span>Isolamento</span></label>
			<label><input type="checkbox" name="tratamento" value="PS" /><span>Perseguição</span></label>
			<label><input type="checkbox" name="tratamento" value="OT" /><span>Outros:
			</span> </label> <span> <input type="text" class="large"
				name="outrostratamentos"></span>
		</div>

		<label><span>(3.10) Situação salarial. </span></label> (3.10.1) Em uma
		escala de 1 (hum) a 10 (dez), em que medida o seu salário satisfaz as
		suas necessidades? Considere 1 (hum) para não satisfaz e 10 (dez) para
		satisfaz plenamente.
		<table>
			<tr>
				<th>1</th>
				<th>2</th>
				<th>3</th>
				<th>4</th>
				<th>5</th>
				<th>6</th>
				<th>7</th>
				<th>8</th>
				<th>9</th>
				<th>10</th>
			</tr>
			<tr>
				<td><input type="radio" name="salario" value="1" required="required"><span>
				</span></td>
				<td><input type="radio" name="salario" value="2" required="required"><span>
				</span></td>
				<td><input type="radio" name="salario" value="3" required="required"><span>
				</span></td>
				<td><input type="radio" name="salario" value="4" required="required"><span>
				</span></td>
				<td><input type="radio" name="salario" value="5" required="required"><span>
				</span></td>
				<td><input type="radio" name="salario" value="6" required="required"><span>
				</span></td>
				<td><input type="radio" name="salario" value="7" required="required"><span>
				</span></td>
				<td><input type="radio" name="salario" value="8" required="required"><span>
				</span></td>
				<td><input type="radio" name="salario" value="9" required="required"><span>
				</span></td>
				<td><input type="radio" name="salario" value="10"
					required="required"><span> </span></td>

			</tr>
		</table>
		<label>(3.10.2) O seu salário valoriza o seu trabalho?</label>
		<div class="element-radio">
			<div class="column column2">
				<label><input type="radio" name="P3102" value="SIM"
					required="required" /><span>Sim</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="P3102" value="NÃO"
					required="required" /><span>Não</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<label>(3.10.3) Você recebe bolsa?</label>
		<div class="element-radio">
			<div class="column column2">
				<label><input type="radio" name="P3103" value="SIM"
					required="required" /><span>Sim</span> </label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="P3103" value="NÃO"
					required="required" /><span>Não</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<label> Se sim, qual(is)? <input type="text" name="qualbolsa">
		</label> <label>(3.10.4) Você tem outra atividade remunerada?</label>
		<div class="element-radio">
			<div class="column column2">
				<label><input type="radio" name="P3104" value="SIM"
					required="required" /><span>Sim</span> </label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="P3104" value="NÃO"
					required="required" /><span>Não</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<label>(3.10.5) Se positivo, essa outra atividade é acadêmica?</label>
		<div class="element-radio">
			<div class="column column2">
				<label><input type="radio" name="P3105" value="SIM"
					required="required" /><span>Sim</span> </label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="P3105" value="NÃO"
					required="required" /><span>Não</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<label>(3.10.6) Quanto essa complementação salarial representa, em
			termos percentuais, na sua remuneração?</label> <label><input
			type="text" min=0 max=100> </label> <label><span>(3.11) Condições dos
				ambientes de trabalho </span></label> (3.11.1) Na sua opinião, suas
		condições de trabalho são:
		<div class="element-radio">
			<div class="column column2">
				<label><input type="radio" name="P3111" value="SIM"
					required="required" /><span>Salubres</span> </label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="P3111" value="NÃO"
					required="required" /><span>Insalubres</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<label>(3.11.2) Quais destes agentes trazem risco ao seu trabalho? (Você pode marcar mais de uma opção)</label>
		<label>3.11.2.1 Físicos</label>
		<div class="element-checkbox">
			<label><input type="checkbox" name="riscotipofisico" value="ruídos"/><span>Ruídos</span></label>
			<label><input type="checkbox" name="riscotipofisico"
				value="vibrações"/><span>Vibrações</span></label> <label><input
				type="checkbox" name="riscotipofisico" value="calor"/><span>Calor</span></label>
			<label><input type="checkbox" name="riscotipofisico" value="frio"/><span>Frio</span></label>
			<label><input type="checkbox" name="riscotipofisico" value="radiação"/><span>Radiação</span></label>
			<label><input type="checkbox" name="riscotipofisico" value="umidade"/><span>Umidade</span></label>
			<label><input type="checkbox" name="riscotipofisico" value="outros"/><span>Outros
			</span> </label> <label><input type="checkbox" name="riscotipofisico"
				value="nenhum"/><span>Nenhum </span> </label>
		</div>
		<label>3.11.2.1 Químicos</label>
		<div class="element-checkbox">
			<label><input type="checkbox" name="riscotipoquimico" value="poeira"/><span>Poeira</span></label>
			<label><input type="checkbox" name="riscotipoquimico" value="gases"/><span>Gases
					tóxicos</span></label> <label><input type="checkbox"
				name="riscotipoquimico" value="fumaça"/><span>Fumaça</span></label>
			<label><input type="checkbox" name="riscotipoquimico" value="névoa"/><span>Névoa</span></label>
			<label><input type="checkbox" name="riscotipoquimico" value="vapores"/><span>Vapores</span></label>
			<label><input type="checkbox" name="riscotipoquimico"
				value="líquidos"/><span>Líquidos tóxicos</span></label> <label><input
				type="checkbox" name="riscotipoquimico" value="outros"/><span>Outros
			</span> </label> <label><input type="checkbox"
				name="riscotipoquimico" value="nenhum"/><span>Nenhum </span> </label>
		</div>
		<label>3.11.2.1 Biológicos</label>
		<div class="element-checkbox">
			<label><input type="checkbox" name="riscotipobiologico" value="vírus"/><span>Vírus</span></label>
			<label><input type="checkbox" name="riscotipobiologico"
				value="Bactérias"/><span>Bactérias</span></label> <label><input
				type="checkbox" name="riscotipobiologico" value="Fungos"/><span>Fungos</span></label>
			<label><input type="checkbox" name="riscotipobiologico"
				value="Parasitas"/><span>Parasitas</span></label> <label><input
				type="checkbox" name="riscotipobiologico" value="Insetos"/><span>Insetos</span></label>
			<label><input type="checkbox" name="riscotipobiologico"
				value="animais"/><span>Animais peçonhentos</span></label> <label><input
				type="checkbox" name="riscotipobiologico" value="outros"/><span>Outros
			</span> </label> <label><input type="checkbox"
				name="riscotipobiologico" value="nenhum"/><span>Nenhum </span> </label>
		</div>
		<label>3.11.2.1 Ergonômicos</label>
		<div class="element-checkbox">
			<label><input type="checkbox" name="riscotipoergonomico"
				value="esforco"/><span>Esforço físico intenso</span></label> <label><input
				type="checkbox" name="riscotipoergonomico" value="posturas"/><span>Posturas
					viciosas/ repetitivas</span></label> <label><input type="checkbox"
				name="riscotipoergonomico" value="jornada"/><span>Jornada
					prolongada de trabalho</span></label> <label><input type="checkbox"
				name="riscotipoergonomico" value="noturno"/><span>Trabalho noturno</span></label>
			<label><input type="checkbox" name="riscotipoergonomico"
				value="monotonia"/><span>Monotonia</span></label> <label><input
				type="checkbox" name="riscotipoergonomico" value="excesso"/><span>Excesso
					de atenção e sobrecarga de responsabilidades</span></label> <label><input
				type="checkbox" name="riscotipoergonomico" value="outros"/><span>Outros
			</span> </label> <label><input type="checkbox"
				name="riscotipoergonomico" value="nenhum"/><span>Nenhum </span> </label>
		</div>
		<label>3.11.2.1 Mecânicos</label>
		<div class="element-checkbox">
			<label><input type="checkbox" name="riscotipofisico"
				value="instalacoes"/><span>Instalações elétricas precárias</span></label>
			<label><input type="checkbox" name="riscotipofisico" value="maquinas"/><span>Máquinas
					sem proteção adequada</span></label> <label><input type="checkbox"
				name="riscotipofisico" value="equipamentos"/><span>Equipamentos sem
					manutenção adequada</span></label> <label><input type="checkbox"
				name="riscotipofisico" value="ferramentas"/><span>Ferramentas
					defeituosas</span></label> <label><input type="checkbox"
				name="riscotipofisico" value="armazenamento"/><span>Armazenamento e
					manipulação de produtos inflamáveis e gases</span></label> <label><input
				type="checkbox" name="riscotipofisico" value="sinalizações"/><span>Sinalizações
					deficientes</span></label> <label><input type="checkbox"
				name="riscotipofisico" value="outros"/><span>Outros </span> </label>
			<label><input type="checkbox" name="riscotipofisico" value="nenhum"/><span>Nenhum
			</span> </label>
		</div>
		<label>(3.11.3) Existe laudo de insalubridade ou periculosidade
			referente ao seu ambiente de trabalho?</label>
		<div class="element-radio">
			<div class="column column1">
				<label><input type="radio" name="P3113" value="SIM"
					required="required" /><span>Sim</span> </label>
			</div>
			<span class="clearfix"></span>
			<div class="column column1">
				<label><input type="radio" name="P3113" value="NÃO"
					required="required" /><span>Não</span></label>
			</div>
			<span class="clearfix"></span>
			<div class="column column1">
				<label><input type="radio" name="P3113" value="DESC"
					required="required" /><span>Desconheço</span></label>
			</div>
			<span class="clearfix"></span>

		</div>
		<label>(3.11.4) Você recebe gratificação por insalubridade?</label>
		<div class="element-radio">
			<div class="column column2">
				<label><input type="radio" name="P3114" value="SIM"
					required="required" /><span>Sim</span> </label>
			</div>
			<span class="clearfix"></span>
			<div class="column column2">
				<label><input type="radio" name="P3114" value="NÃO"
					required="required" /><span>Não</span></label>
			</div>
			<span class="clearfix"></span>
		</div>
		<label>Em que grau? </label>
				<div class="element-radio">
					<div class="column column1">
						<label><input type="radio" name="10pct" value="10" /><span>10%</span>
						</label>
					</div>
					<span class="clearfix"></span>
					<div class="column column1">
						<label><input type="radio" name="20pct" value="20" /><span>20%</span></label>
					</div>
					<span class="clearfix"></span>
					<div class="column column1">
						<label><input type="radio" name="40pct" value="40" /><span>40%</span></label>
					</div>
					<span class="clearfix"></span>
				</div> <label>(3.11.5) Você recebe gratificação por periculosidade?</label>
				<div class="element-radio">
					<div class="column column2">
						<label><input type="radio" name="P3115" value="SIM"
							required="required" /><span>Sim</span> </label>
					</div>
					<span class="clearfix"></span>
					<div class="column column2">
						<label><input type="radio" name="P3115" value="NÃO"
							required="required" /><span>Não</span></label>
					</div>
					<span class="clearfix"></span>
				</div> <label>(3.11.6) Já sofreu algum acidente no seu local de
					trabalho?</label>
				<div class="element-radio">
					<div class="column column2">
						<label><input type="radio" name="P3116" value="SIM"
							required="required" /><span>Sim</span> </label>
					</div>
					<span class="clearfix"></span>
					<div class="column column2">
						<label><input type="radio" name="P3116" value="NÃO"
							required="required" /><span>Não</span></label>
					</div>
					<span class="clearfix"></span>
				</div> <label> Se sim, qual(is)? <input type="text" class="large"
					name="qualacidente">
			</label> <label>(3.11.7) Já sofreu algum acidente em seus
					deslocamentos para o trabalho?</label>
				<div class="element-radio">
					<div class="column column2">
						<label><input type="radio" name="P3117" value="SIM"
							required="required" /><span>Sim</span> </label>
					</div>
					<span class="clearfix"></span>
					<div class="column column2">
						<label><input type="radio" name="P3117" value="NÃO"
							required="required" /><span>Não</span></label>
					</div>
					<span class="clearfix"></span>
				</div> <label> Se sim, qual(is)? <input type="text" class="large"
					name="qualdesloc">
			</label> <label>(3.11.8) A infraestrutura do seu trabalho tem boas
					condições? Atribua a nota de 1 (hum) a 10 (dez) para cada um dos
					itens abaixo. Considere 1 para insuficiente ou inadequado e 10 para
					excelente.</label>
				<table style="width: 100%">
					<tr>
						<th>Itens</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
					</tr>
					<tr>
						<td>Gabinete de trabalho</td>
						<td><input type="radio" name="infra1" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra1" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra1" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra1" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra1" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra1" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra1" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra1" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra1" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra1" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Computador</td>
						<td><input type="radio" name="infra2" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra2" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra2" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra2" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra2" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra2" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra2" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra2" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra2" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra2" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Rede de internet</td>
						<td><input type="radio" name="infra3" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra3" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra3" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra3" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra3" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra3" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra3" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra3" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra3" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra3" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Biblioteca</td>
						<td><input type="radio" name="infra4" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra4" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra4" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra4" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra4" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra4" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra4" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra4" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra4" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra4" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Ambientes climatizados</td>
						<td><input type="radio" name="infra5" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra5" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra5" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra5" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra5" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra5" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra5" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra5" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra5" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra5" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Espaços de convivência</td>
						<td><input type="radio" name="infra6" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra6" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra6" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra6" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra6" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra6" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra6" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra6" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra6" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra6" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Banheiro</td>
						<td><input type="radio" name="infra7" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra7" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra7" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra7" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra7" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra7" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra7" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra7" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra7" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra7" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Salas para núcleos de pesquisa e extensão</td>
						<td><input type="radio" name="infra8" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra8" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra8" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra8" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra8" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra8" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra8" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra8" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra8" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra8" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Espaços para descanso e lazer</td>
						<td><input type="radio" name="infra9" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra9" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra9" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra9" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra9" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra9" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra9" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra9" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra9" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra9" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Auditório</td>
						<td><input type="radio" name="infra10" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra10" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra10" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra10" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra10" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra10" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra10" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra10" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra10" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra10" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Salas de aula</td>
						<td><input type="radio" name="infra11" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra11" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra11" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra11" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra11" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra11" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra11" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra11" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra11" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra11" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Sala de reuniões</td>
						<td><input type="radio" name="infra12" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra12" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra12" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra12" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra12" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra12" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra12" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra12" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra12" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra12" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Laboratórios</td>
						<td><input type="radio" name="infra13" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra13" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra13" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra13" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra13" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra13" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra13" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra13" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra13" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra13" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Transporte para atividades acadêmicas</td>
						<td><input type="radio" name="infra14" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra14" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra14" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra14" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra14" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra14" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra14" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra14" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra14" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra14" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Diárias para atividades acadêmicas</td>
						<td><input type="radio" name="infra15" value="1"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra15" value="2"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra15" value="3"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra15" value="4"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra15" value="5"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra15" value="6"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra15" value="7"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra15" value="8"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra15" value="9"
							required="required"><span> </span></td>
						<td><input type="radio" name="infra15" value="10"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Outro <input type="text" name="outroinfra">
						</td>
						<td><input type="radio" name="infra16" value="1"><span> </span></td>
						<td><input type="radio" name="infra16" value="2"><span> </span></td>
						<td><input type="radio" name="infra16" value="3"><span> </span></td>
						<td><input type="radio" name="infra16" value="4"><span> </span></td>
						<td><input type="radio" name="infra16" value="5"><span> </span></td>
						<td><input type="radio" name="infra16" value="6"><span> </span></td>
						<td><input type="radio" name="infra16" value="7"><span> </span></td>
						<td><input type="radio" name="infra16" value="8"><span> </span></td>
						<td><input type="radio" name="infra16" value="9"><span> </span></td>
						<td><input type="radio" name="infra16" value="10"><span> </span></td>
					</tr>

				</table> <label>(3.11.9) Como você percebe os critérios e
					indicadores utilizados pelas agências de fomento (CNPQ, Capes,
					Funcap) para avaliar a produção científico-acadêmica dos docentes
					na sua área de atuação:</label>
				<div class="element-radio">
					<div class="column column1">
						<label><input type="radio" name="critfomento" value="AD"
							required="required" /><span>Adequados</span> </label>
					</div>
					<span class="clearfix"></span>
					<div class="column column1">
						<label><input type="radio" name="critfomento" value="PD"
							required="required" /><span>Pouco adequados</span></label>
					</div>
					<span class="clearfix"></span>
					<div class="column column1">
						<label><input type="radio" name="critfomento" value="EX"
							required="required" /><span>Excessivos</span></label>
					</div>
					<span class="clearfix"></span>
					<div class="column column1">
						<label><input type="radio" name="critfomento" value="DS"
							required="required" /><span>Desconheço os critérios e indicadores
								utilizados.</span></label>
					</div>
					<span class="clearfix"></span>
				</div> <label>(3.11.10) Como você percebe os critérios e indicadores
					do sistema de pontuação da produção docente exigidos pela UFC para
					progressão e promoção na carreira de Magistério do Ensino Superior,
					estabelecidos pela Resolução 22/CEPE, de 3 de outubro de 2014?</label>
				<div class="element-radio">
					<div class="column column1">
						<label><input type="radio" name="critufc" value="AD"
							required="required" /><span>Adequados</span> </label>
					</div>
					<span class="clearfix"></span>
					<div class="column column1">
						<label><input type="radio" name="critufc" value="PD"
							required="required" /><span>Pouco adequados</span></label>
					</div>
					<span class="clearfix"></span>
					<div class="column column1">
						<label><input type="radio" name="critufc" value="EX"
							required="required" /><span>Excessivos</span></label>
					</div>
					<span class="clearfix"></span>
					<div class="column column1">
						<label><input type="radio" name="critufc" value="DS"
							required="required" /><span>Desconheço os critérios e indicadores
								utilizados.</span></label>
					</div>
					<span class="clearfix"></span>
				</div> <label>(3.11.11) Você concordaria em ter a sua remuneração
					salarial vinculada aos indicadores de produção
					científico-acadêmica?</label>
				<div class="element-radio">
					<div class="column column2">
						<label><input type="radio" name="P31111" value="SIM"
							required="required" /><span>Sim</span> </label>
					</div>
					<span class="clearfix"></span>
					<div class="column column2">
						<label><input type="radio" name="P31111" value="NÃO"
							required="required" /><span>Não</span></label>
					</div>
					<span class="clearfix"></span>
				</div> <label> Se sim, qual(is)? <input type="text" class="large"
					name="qualindic">
			</label> <label>(3.11.12) Você contou com algum tipo de apoio
					financeiro na realização de suas pesquisas em 2015?</label>
				<div class="element-radio">
					<div class="column column2">
						<label><input type="radio" name="P31112" value="SIM"
							required="required" /><span>Sim</span> </label>
					</div>
					<span class="clearfix"></span>
					<div class="column column2">
						<label><input type="radio" name="P31112" value="NÃO"
							required="required" /><span>Não</span></label>
					</div>
					<span class="clearfix"></span>
				</div> <label> Se sim, qual(is)? <input type="text" class="large"
					name="qualapoio">
			</label> <span>(3.12) Relações de trabalho. </span> <label>(3.12.1)
					Como você considera suas relações atuais na universidade?</label>

				<table style="width: 100%">
					<tr>
						<th>Itens</th>
						<th>Ótimas</th>
						<th>Muito boas</th>
						<th>Boas</th>
						<th>Razoáveis</th>
						<th>Ruins</th>
						<th>Péssimas</th>
						<th>Não se aplica</th>
					</tr>
					<tr>
						<td>Com os pares</td>
						<td><input type="radio" name="relacoes1" value="ótimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes1" value="muitboas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes1" value="boas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes1" value="razoáveis"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes1" value="ruins"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes1" value="péssimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes1" value="nãseoaplica"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Com a administração superior</td>
						<td><input type="radio" name="relacoes2" value="ótimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes2" value="muitboas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes2" value="boas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes2" value="razoáveis"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes2" value="ruins"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes2" value="péssimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes2" value="nãseoaplica"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Com a direção da unidade acadêmica</td>
						<td><input type="radio" name="relacoes3" value="ótimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes3" value="muitboas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes3" value="boas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes3" value="razoáveis"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes3" value="ruins"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes3" value="péssimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes3" value="nãseoaplica"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Com a chefia imediata</td>
						<td><input type="radio" name="relacoes4" value="ótimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes4" value="muitboas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes4" value="boas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes4" value="razoáveis"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes4" value="ruins"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes4" value="péssimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes4" value="nãseoaplica"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Com a coordenação de curso</td>
						<td><input type="radio" name="relacoes5" value="ótimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes5" value="muitboas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes5" value="boas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes5" value="razoáveis"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes5" value="ruins"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes5" value="péssimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes5" value="nãseoaplica"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Com a coordenação da pós-graduação</td>
						<td><input type="radio" name="relacoes6" value="ótimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes6" value="muitboas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes6" value="boas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes6" value="razoáveis"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes6" value="ruins"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes6" value="péssimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes6" value="nãseoaplica"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Com os servidores técnico-administrativos</td>
						<td><input type="radio" name="relacoes7" value="ótimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes7" value="muitboas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes7" value="boas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes7" value="razoáveis"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes7" value="ruins"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes7" value="péssimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes7" value="nãseoaplica"
							required="required"><span> </span></td>
					</tr>
					<tr>
						<td>Com os discentes</td>
						<td><input type="radio" name="relacoes8" value="ótimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes8" value="muitboas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes8" value="boas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes8" value="razoáveis"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes8" value="ruins"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes8" value="péssimas"
							required="required"><span> </span></td>
						<td><input type="radio" name="relacoes8" value="nãseoaplica"
							required="required"><span> </span></td>
					</tr>
				</table> 
				<!--  <input type="button" name="anerior"
				class="prev action-button" value="Voltar" />  -->
				<input type="submit" name="proximo" class="next action-button" value="Avançar" />
	
	</form>

</body>
</html>
