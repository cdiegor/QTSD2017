<?php
//Session starts here
session_start();
foreach ($_POST as $key => $value)
{
	$_SESSION['post'][$key] = $value;
}
?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Questionário - Passo (5/5) </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="formoid1_files/formoid1/formoid-solid-blue.css" type="text/css" />
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



                <span id="error">
			<!----Initializing Session for errors--->
                    <?php
                    if (!empty($_SESSION['error'])) 
                    {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
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

<script type="text/javascript" src="formoid1_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,
sans-serif;color:#34495E;max-width:800px;min-width:150px" method="post", action="envio-formulario.php">
<div class="title"><h2>Questionário - Passo (5/5) <progress max="6" value="5">(Passo 5 de 5)</progress></h2></div>
	
    <div align="center">    <input type="button" name="salvar" class="action-button" value="Salvar" />
    </div>
    
    <div class="element-separator"><hr><h3 class="section-break-title">Saúde do trabalhador docente</h3></div>
    
    <div class="element-separator"><hr><h3 class="section-break-title"> (5.1) Avalie se as condições de trabalho listadas provocam ou não situação de estresse de acordo com a seguinte legenda.
    <br> <span> 1 - Nenhum </span>
    <br> <span> 2 - Pouco </span>
    <br> <span> 3 - Razoavelmente </span>
    <br> <span> 4 - Muito </span>
    <br> <span> 5 - Excessivamente </span>
        </h3></div>
    <table style="width:100%">
      <tr>
        <th>Itens</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <!-- <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th> -->
      </tr>
      <tr>
            <td> Número excessivo de alunos(as) por turma </td>
            <td> <input type="radio" name="saude1" value="1" required="required"><span> </span> </td> 
            <td> <input type="radio" name="saude1" value="2" required="required"><span> </span> </td> 
            <td> <input type="radio" name="saude1" value="3" required="required"><span> </span> </td> 
            <td> <input type="radio" name="saude1" value="4" required="required"><span> </span> </td> 
            <td> <input type="radio" name="saude1" value="5" required="required"><span> </span> </td>
            <!-- <td> <input type="radio" name="saude1" value="6" required="required"><span> </span> </td> 
            <td> <input type="radio" name="saude1" value="7" required="required"><span> </span> </td> 
            <td> <input type="radio" name="saude1" value="8" required="required"><span> </span> </td> 
            <td> <input type="radio" name="saude1" value="9" required="required"><span> </span> </td> 
            <td> <input type="radio" name="saude1" value="10" required="required"><span> </span> </td> --> 
        </tr>
        <tr>
            <td> Práticas administrativas inadequadas </td>
            <td> <input type="radio" name="saude2" value="1" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude2" value="2" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude2" value="3" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude2" value="4" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude2" value="5" required="required"> <span> </span> </td> 
            <!-- <td> <input type="radio" name="saude2" value="6" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude2" value="7" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude2" value="8" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude2" value="9" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude2" value="10" required="required"> <span> </span> </td> -->
        </tr>
        <tr>
            <td>Comunicação inadequada </td>
            <td> <input type="radio" name="saude3" value="1" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude3" value="2" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude3" value="3" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude3" value="4" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude3" value="5" required="required"> <span> </span> </td> 
            <!--  <td> <input type="radio" name="saude3" value="6" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude3" value="7" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude3" value="8" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude3" value="9" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude3" value="10" required="required"> <span> </span> </td>  -->
        </tr>
        <tr>
            <td>Falta de suporte às atividades docentes</td>
            <td> <input type="radio" name="saude4" value="1" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude4" value="2" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude4" value="3" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude4" value="4" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude4" value="5" required="required"> <span> </span> </td> 
            <!-- <td> <input type="radio" name="saude4" value="6" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude4" value="7" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude4" value="8" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude4" value="9" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude4" value="10" required="required"> <span> </span> </td> -->
        </tr>
        <tr>
            <td>Relações competitivas entre colegas</td>
            <td> <input type="radio" name="saude5" value="1" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude5" value="2" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude5" value="3" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude5" value="4" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude5" value="5" required="required"> <span> </span> </td> 
            <!-- <td> <input type="radio" name="saude5" value="6" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude5" value="7" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude5" value="8" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude5" value="9" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude5" value="10" required="required"> <span> </span> </td> -->
        </tr>
        <tr>
            <td>Mudança de perfil dos alunos nos últimos tempos</td>
            <td> <input type="radio" name="saude6" value="1" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude6" value="2" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude6" value="3" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude6" value="4" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude6" value="5" required="required"> <span> </span> </td> 
            <!-- <td> <input type="radio" name="saude6" value="6" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude6" value="7" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude6" value="8" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude6" value="9" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude6" value="10" required="required"> <span> </span> </td> -->
        </tr>
        <tr>
            <td>Mudanças das regras da aposentadoria</td>
            <td> <input type="radio" name="saude7" value="1" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude7" value="2" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude7" value="3" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude7" value="4" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude7" value="5" required="required"> <span> </span> </td> 
            <!-- <td> <input type="radio" name="saude7" value="6" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude7" value="7" required="required"> <span> </span> </td> 
            <td> <input type="radio" name="saude7" value="8" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude7" value="9" required="required"> <span> </span> </td>
            <td> <input type="radio" name="saude7" value="10" required="required"> <span> </span> </td>  -->
        </tr>
    </table>
    
    <br><br><br><br><br>
    <div class="element-separator"><hr><h3 class="section-break-title"> (5.2) Avalie a frequência com que as condições a seguir fazem parte do seu cotidiano segundo a legenda:
    <br> <span>1 – Nunca</span>
    <br> <span>2 – Raramente </span>
    <br> <span>3 – Às vezes: algumas vezes por mês </span>
    <br> <span>4 – Frequentemente: algumas vezes por semana </span>
    <br> <span>5 – Muito Frequentemente: (quase) todos os dias </span>
        </h3></div>
    <table style="width:100%">
      <tr>
        <th>Condições</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
      </tr>
    
      <tr>
          <td> Sinto-me esgotado(a) ao final de um dia de trabalho </td>
          <td> <input type="radio" name="saude8" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude8" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude8" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude8" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude8" value="5" required="required"><span> </span> </td>
      </tr>

      <tr>
          <td> Sinto-me como se estivesse no meu limite </td>
          <td> <input type="radio" name="saude9" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude9" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude9" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude9" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude9" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto-me emocionalmente exausto(a) com meu trabalho </td>
          <td> <input type="radio" name="saude10" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude10" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude10" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude10" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude10" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto-me frustrado(a) com meu trabalho  </td>
          <td> <input type="radio" name="saude11" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude11" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude11" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude11" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude11" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto-me esgotado(a) com meu trabalho </td>
          <td> <input type="radio" name="saude12" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude12" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude12" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude12" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude12" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto que estou trabalhando demais neste emprego </td>
          <td> <input type="radio" name="saude13" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude13" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude13" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude13" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude13" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Trabalhar diretamente com pessoas me deixa muito estressado(a) </td>
          <td> <input type="radio" name="saude14" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude14" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude14" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude14" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude14" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Trabalhar com pessoas o dia todo me exige um grande esforço </td>
          <td> <input type="radio" name="saude15" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude15" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude15" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude15" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude15" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto-me cansado(a) quando tenho de iniciar outro dia de trabalho </td>
          <td> <input type="radio" name="saude16" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude16" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude16" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude16" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude16" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto-me cheio de energia </td>
          <td> <input type="radio" name="saude17" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude17" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude17" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude17" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude17" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto que posso criar um ambiente tranquilo para as pessoas </td>
          <td> <input type="radio" name="saude18" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude18" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude18" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude18" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude18" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto que influencio positivamente a vida dos outros através do meu trabalho </td>
          <td> <input type="radio" name="saude19" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude19" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude19" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude19" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude19" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Lido de forma adequada com os problemas das pessoas </td>
          <td> <input type="radio" name="saude20" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude20" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude20" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude20" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude20" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Posso entender com facilidade o que as pessoas sentem </td>
          <td> <input type="radio" name="saude21" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude21" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude21" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude21" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude21" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto que sei tratar de forma adequada os problemas emocionais no meu trabalho </td>
          <td> <input type="radio" name="saude22" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude22" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude22" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude22" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude22" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Tenho conseguido muitas realizações em minha profissão </td>
          <td> <input type="radio" name="saude23" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude23" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude23" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude23" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude23" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto que as pessoas me culpam pelos seus problemas  </td>
          <td> <input type="radio" name="saude24" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude24" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude24" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude24" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude24" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto-me cansado(a) fisicamente no trabalho </td>
          <td> <input type="radio" name="saude25" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude25" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude25" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude25" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude25" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto-me como se estivesse no limite de minhas possibilidades </td>
          <td> <input type="radio" name="saude26" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude26" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude26" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude26" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude26" value="5" required="required"><span> </span> </td>
      </tr>
      <tr>
          <td> Sinto-me esgotado(a) ao final de um dia de trabalho </td>
          <td> <input type="radio" name="saude27" value="1" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude27" value="2" required="required"><span> </span></td>
          <td> <input type="radio" name="saude27" value="3" required="required"><span> </span></td>
          <td> <input type="radio" name="saude27" value="4" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude27" value="5" required="required"><span> </span> </td>
      </tr>

        
    </table>
    
    <br><br><br><br><br>
    <div class="element-separator"><hr><h3 class="section-break-title"> (5.3) Avalie se você vive as seguintes situações. </h3> </div>
        
    <table style="width:100%">
      <tr>
        <th>Situações vividas</th>
        <th>Sim</th>
        <th>Não</th>
      </tr>

      <tr>
          <td> 1. Tem dores de cabeça frequentes? </td>
          <td> <input type="radio" name="saude28" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude28" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 2. Tem falta de apetite? </td>
          <td> <input type="radio" name="saude29" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude29" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 3. Dorme mal? </td>
          <td> <input type="radio" name="saude30" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude30" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 4. Assusta-se com facilidade? </td>
          <td> <input type="radio" name="saude31" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude31" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 5. Tem tremores nas mãos? </td>
          <td> <input type="radio" name="saude32" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude32" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 6. Sente-se nervoso(a), tenso(a) ou preocupado(a)? </td>
          <td> <input type="radio" name="saude33" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude33" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 7. Tem má digestão? </td>
          <td> <input type="radio" name="saude34" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude34" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 8. Tem dificuldades para pensar com clareza? </td>
          <td> <input type="radio" name="saude35" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude35" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 9. Tem se sentido triste ultimamente? </td>
          <td> <input type="radio" name="saude36" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude36" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 10. Tem chorado mais do que de costume? </td>
          <td> <input type="radio" name="saude37" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude37" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 11. Encontra dificuldades para realizar com satisfação suas atividades diárias? </td>
          <td> <input type="radio" name="saude38" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude38" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 12. Tem dificuldades para tomar decisões? </td>
          <td> <input type="radio" name="saude39" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude39" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 13. Tem dificuldades no serviço (seu trabalho é penoso, causa sofrimento)? </td>
          <td> <input type="radio" name="saude40" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude40" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 14. É incapaz de desempenhar um papel útil em sua vida? </td>
          <td> <input type="radio" name="saude41" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude41" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 15. Tem perdido o interesse pelas coisas? </td>
          <td> <input type="radio" name="saude42" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude42" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 16. Sente-se uma pessoa inútil, sem préstimo? </td>
          <td> <input type="radio" name="saude43" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude43" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 17. Tem tido ideias de acabar com a própria vida? </td>
          <td> <input type="radio" name="saude44" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude44" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 18. Sente-se cansado(a) o tempo todo? </td>
          <td> <input type="radio" name="saude45" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude45" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 19. Tem sensações desagradáveis no estômago? </td>
          <td> <input type="radio" name="saude46" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude46" value="Não" required="required"><span> </span></td>
      </tr>
      <tr>
          <td> 20. Cansa-se com facilidade? </td>
          <td> <input type="radio" name="saude47" value="Sim" required="required"><span> </span> </td>
          <td> <input type="radio" name="saude47" value="Não" required="required"><span> </span></td>
      </tr>
    </table>

	<div class="element-separator"><hr><h3 class="section-break-title"> (5.4) Sobre as questões a seguir, marque uma alternativa: </h3></div>
	<div class="element-radio"><label class="title">1. Com que frequência (quantas vezes por semana) você consome bebidas alcoólicas? <span class="required">*</span></label>		
        <div class="column column1">
            <label><input type="radio" name="saude48" value="0" required="required"/><span>Nunca.</span></label>
            <label><input type="radio" name="saude48" value="1" required="required"/><span>Uma vez por mês ou menos.</span></label>
            <label><input type="radio" name="saude48" value="2" required="required"/><span>Duas a quatro vezes por mês.</span></label>
            <label><input type="radio" name="saude48" value="3" required="required"/><span>Duas a três vezes por semana.</span></label>
            <label><input type="radio" name="saude48" value="4" required="required"/><span>Quatro ou mais vezes por semana.</span></label>
        </div> <span class="clearfix"></span>
    </div>
	<div class="element-radio"><label class="title">2. Nas ocasiões em que você bebe, quantas doses de bebida alcoólica costuma ingerir? <span class="required">*</span></label>		
        <div class="column column1">
            <label><input type="radio" name="saude49" value="0" required="required"/><span>1 a 2 doses.</span></label>
            <label><input type="radio" name="saude49" value="1" required="required"/><span>3 a 4 doses.</span></label>
            <label><input type="radio" name="saude49" value="2" required="required"/><span>5 a 6 doses.</span></label>
            <label><input type="radio" name="saude49" value="3" required="required"/><span>7 a 9 doses.</span></label>
            <label><input type="radio" name="saude49" value="4" required="required"/><span>10 doses ou mais.</span></label>
        </div> <span class="clearfix"></span>
    </div> 
	<div class="element-radio"><label class="title">3. Com que frequência (quantas vezes por semana) você consome cinco ou mais doses em uma única ocasião? <span class="required">*</span></label>		
        <div class="column column1">
            <label><input type="radio" name="saude50" value="0" required="required"/><span>Nunca.</span></label>
            <label><input type="radio" name="saude50" value="1" required="required"/><span>Uma vez por mês ou menos.</span></label>
            <label><input type="radio" name="saude50" value="2" required="required"/><span>Duas a quatro vezes por mês.</span></label>
            <label><input type="radio" name="saude50" value="3" required="required"/><span>Duas a três vezes por semana.</span></label>
            <label><input type="radio" name="saude50" value="4" required="required"/><span>Quatro ou mais vezes por semana.</span></label>
        </div> <span class="clearfix"></span>
    </div>
	<div class="element-radio"><label class="title">4. Com que frequência, durante o último ano, você achou que não seria capaz de parar de beber, uma vez tendo começado? <span class="required">*</span></label>		
        <div class="column column1">
            <label><input type="radio" name="saude51" value="0" required="required"/><span>Nunca.</span></label>
            <label><input type="radio" name="saude51" value="1" required="required"/><span>Uma vez por mês ou menos.</span></label>
            <label><input type="radio" name="saude51" value="2" required="required"/><span>Duas a quatro vezes por mês.</span></label>
            <label><input type="radio" name="saude51" value="3" required="required"/><span>Duas a três vezes por semana.</span></label>
            <label><input type="radio" name="saude51" value="4" required="required"/><span>Quatro ou mais vezes por semana.</span></label>
        </div> <span class="clearfix"></span>
    </div>
	<div class="element-radio"><label class="title">5. Com que frequência, durante o último ano, você não conseguiu cumprir com algum compromisso por conta da bebida? <span class="required">*</span></label>		
        <div class="column column1">
            <label><input type="radio" name="saude52" value="0" required="required"/><span>Nunca.</span></label>
            <label><input type="radio" name="saude52" value="1" required="required"/><span>Uma vez por mês ou menos.</span></label>
            <label><input type="radio" name="saude52" value="2" required="required"/><span>Duas a quatro vezes por mês.</span></label>
            <label><input type="radio" name="saude52" value="3" required="required"/><span>Duas a três vezes por semana.</span></label>
            <label><input type="radio" name="saude52" value="4" required="required"/><span>Quatro ou mais vezes por semana.</span></label>
        </div> <span class="clearfix"></span>
    </div>
	<div class="element-radio"><label class="title">6. Com que frequência, durante o último ano, depois de ter bebido muito você precisou beber pela manhã para se sentir melhor? <span class="required">*</span></label>		
        <div class="column column1">
            <label><input type="radio" name="saude53" value="0" required="required"/><span>Nunca.</span></label>
            <label><input type="radio" name="saude53" value="1" required="required"/><span>Uma vez por mês ou menos.</span></label>
            <label><input type="radio" name="saude53" value="2" required="required"/><span>Duas a quatro vezes por mês.</span></label>
            <label><input type="radio" name="saude53" value="3" required="required"/><span>Duas a três vezes por semana.</span></label>
            <label><input type="radio" name="saude53" value="4" required="required"/><span>Quatro ou mais vezes por semana.</span></label>
        </div> <span class="clearfix"></span>
    </div>
	<div class="element-radio"><label class="title">7. Com que frequência, durante o último ano, você se sentiu culpado ou com remorso após ter consumido bebida alcoólica?  <span class="required">*</span></label>		
        <div class="column column1">
            <label><input type="radio" name="saude54" value="0" required="required"/><span>Nunca.</span></label>
            <label><input type="radio" name="saude54" value="1" required="required"/><span>Uma vez por mês ou menos.</span></label>
            <label><input type="radio" name="saude54" value="2" required="required"/><span>Duas a quatro vezes por mês.</span></label>
            <label><input type="radio" name="saude54" value="3" required="required"/><span>Duas a três vezes por semana.</span></label>
            <label><input type="radio" name="saude54" value="4" required="required"/><span>Quatro ou mais vezes por semana.</span></label>
        </div> <span class="clearfix"></span>
    </div>
	<div class="element-radio"><label class="title">8. Com que frequência, durante o último ano, você não conseguiu se lembrar do que aconteceu na noite anterior devido ao consumo de bebida alcoólica? <span class="required">*</span></label>		
        <div class="column column1">
            <label><input type="radio" name="saude55" value="0" required="required"/><span>Nunca.</span></label>
            <label><input type="radio" name="saude55" value="1" required="required"/><span>Uma vez por mês ou menos.</span></label>
            <label><input type="radio" name="saude55" value="2" required="required"/><span>Duas a quatro vezes por mês.</span></label>
            <label><input type="radio" name="saude55" value="3" required="required"/><span>Duas a três vezes por semana.</span></label>
            <label><input type="radio" name="saude55" value="4" required="required"/><span>Quatro ou mais vezes por semana.</span></label>
        </div> <span class="clearfix"></span>
    </div>
	<div class="element-radio"><label class="title">9. Você já causou ferimentos ou prejuízos a você mesmo ou a outras pessoas após ter consumido bebida alcoólica? <span class="required">*</span></label>		
        <div class="column column1">
            <label><input type="radio" name="saude56" value="0" required="required"/><span>Nunca.</span></label>
            <label><input type="radio" name="saude56" value="1" required="required"/><span>Uma vez por mês ou menos.</span></label>
            <label><input type="radio" name="saude56" value="2" required="required"/><span>Duas a quatro vezes por mês.</span></label>
            <label><input type="radio" name="saude56" value="3" required="required"/><span>Duas a três vezes por semana.</span></label>
            <label><input type="radio" name="saude56" value="4" required="required"/><span>Quatro ou mais vezes por semana.</span></label>
        </div> <span class="clearfix"></span>
    </div>
	<div class="element-radio"><label class="title">10. Alguma vez você foi aconselhado por parentes, amigos, médicos ou outros profissionais de saúde a parar de beber? <span class="required">*</span></label>		
        <div class="column column1">
            <label><input type="radio" name="saude57" value="0" required="required"/><span>Nunca.</span></label>
            <label><input type="radio" name="saude57" value="1" required="required"/><span>Uma vez por mês ou menos.</span></label>
            <label><input type="radio" name="saude57" value="2" required="required"/><span>Duas a quatro vezes por mês.</span></label>
            <label><input type="radio" name="saude57" value="3" required="required"/><span>Duas a três vezes por semana.</span></label>
            <label><input type="radio" name="saude57" value="4" required="required"/><span>Quatro ou mais vezes por semana.</span></label>
        </div> <span class="clearfix"></span>
    </div>
    
    <!-- <input type="button" name="anerior" class="prev action-button" value="Voltar" />  -->
    <!-- <div class="submit"> -->
    <input type="submit" name="enviar" class="next action-button" value="Enviar"/>
    
        
    
</form>
    
</body>
</html>
