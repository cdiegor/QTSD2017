<?php
// Session starts here
session_start ();
foreach ($_POST as $key => $value)
{
	$_SESSION['post'][$key] = $value;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Questionário - Passo (4/5)</title>
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
		method="post" action="pagina5.php">
		<div class="title">
			<h2>
				Questionário - Passo (4/5)
				<progress max="6" value="4">(Passo 4 de 5)</progress>
			</h2>
		</div>

		<div align="center">
			<input type="button" name="salvar" class="action-button"
				value="Salvar" />
		</div>

		<div class="element-separator">
			<hr>
			<h3 class="section-break-title">Percepção do trabalho docente</h3>
		</div>
		<!--
    <span> Qual o grau de autonomia você tem em relação às atividades listadas abaixo? </span>
    <span> Indique em cada coluna a frequência (Sempre, Frequentemente, Ocasionalmente, Nunca) referente ao grau de autonomia que você percebe em relação a cada uma das atividades listadas abaixo:</span>
    -->
		<span>(4.1) Como você percebe o seu grau de autonomia em relação às
			atividades listadas abaixo? Escolha uma alternativa para cada
			atividade.</span>
		<table style="width: 50%">
			<tr>
				<th>ATIVIDADE</th>
				<th>AUTONOMIA</th>
			</tr>
			<tr>
				<td>Ensino</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Autonomia1" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>Pesquisa</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Autonomia2" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>Extensão</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Autonomia3" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>Administrativa</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Autonomia4" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
			</tr>
		</table>

		<span>(4.2) Como você percebe o grau de reconhecimento de docentes,
			discentes e administração em relação ao seu trabalho nas atividades
			abaixo? </span> <span> Indique em cada coluna o grau de
			reconhecimento (Total, Muito, Razoável, Pouco, Nenhum) referente ao
			grau de reconhecimento que você percebe em relação a cada uma das
			atividades listadas abaixo:</span>

		<table style="width: 80%">
			<tr>
				<td></td>
				<th colspan="3">RECONHECIMENTO</th>
			</tr>
			<tr>
				<th>ATIVIDADE</th>
				<td>Docentes</td>
				<td>Discentes</td>
				<td>Administração</td>
			</tr>

			<tr>
				<td>Ensino</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon11" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon12" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon13" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>Pesquisa</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon21" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon22" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon23" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>Extensão</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon31" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon32" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon33" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>Administrativa</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon41" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon42" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
				<td>
					<div class="element-select" title="Selecione frequência">
						<div class="item-cont">
							<div class="large">
								<span><select name="Recon43" required="required">
										<option value="Escolha">Escolha uma opção</option>
										<option value="Naosei">Não sei</option>
										<option value="Total">Total</option>
										<option value="Muito">Muito</option>
										<option value="Razoavel">Razoável</option>
										<option value="Pouco">Pouco</option>
										<option value="Nenhum">Nenhum</option>
								</select><i></i><span class="icon-place"></span></span>
							</div>
						</div>
					</div>
				</td>
			</tr>

		</table>

		<!-- <input type="submit" name="anerior" class="prev action-button"
			value="Voltar" />  -->
		<input type="submit" name="proximo" class="next action-button" value="Avançar" />


	</form>

</body>
</html>
