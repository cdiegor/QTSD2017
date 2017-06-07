<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:600px;min-width:150px" method="post"><div class="title"><h2>Questionário</h2></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Identificação</h3></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Unidade Acadêmica/Departamento"/><span class="icon-place"></span></div></div>
	<div class="element-radio<?php frmd_add_class("radio"); ?>"><label class="title">Sexo <span class="required">*</span></label>		<div class="column column2"><label><input type="radio" name="radio" value="Masculino" required="required"/><span>Masculino</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="radio" name="radio" value="Feminino" required="required"/><span>Feminino</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-select<?php frmd_add_class("select"); ?>" title="Selecione sua faixa etária"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select" required="required">

		<option value="<30 anos"><30 anos</option>
		<option value="31-40 anos">31-40 anos</option>
		<option value="41-50 anos">41-50 anos</option>
		<option value="51-60 anos">51-60 anos</option>
		<option value="61-70 anos">61-70 anos</option>
		<option value=">70 anos">>70 anos</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select1" required="required">

		<option value="Solteiro">Solteiro</option>
		<option value="Casado">Casado</option>
		<option value="Viúvo">Viúvo</option>
		<option value="Divorciado">Divorciado</option>
		<option value="Outro">Outro</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-number<?php frmd_add_class("number"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="20" name="number" required="required" placeholder="Dependentes" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="number1" required="required" placeholder="Tempo de trabalho como docente (em anos)" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number2"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="1950" max="2016" name="number2" required="required" placeholder="Ano de ingresso na UFC como docente" value=""/><span class="icon-place"></span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Formação</h3></div>
	<div class="element-radio<?php frmd_add_class("radio1"); ?>"><label class="title">Graduação<span class="required">*</span></label>		<div class="column column1"><label><input type="radio" name="radio1" value="Lincenciatura" required="required"/><span>Lincenciatura</span></label><label><input type="radio" name="radio1" value="Bacharelado" required="required"/><span>Bacharelado</span></label><label><input type="radio" name="radio1" value="Licenciatura e Bacharelado" required="required"/><span>Licenciatura e Bacharelado</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>"><label class="title">Cursou</label>		<div class="column column1"><label><input type="checkbox" name="checkbox[]" value="Especialização"/ ><span>Especialização</span></label><label><input type="checkbox" name="checkbox[]" value="Mestrado"/ ><span>Mestrado</span></label><label><input type="checkbox" name="checkbox[]" value="Doutorado"/ ><span>Doutorado</span></label><label><input type="checkbox" name="checkbox[]" value="Pós-doutorado"/ ><span>Pós-doutorado</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-checkbox<?php frmd_add_class("checkbox1"); ?>"><label class="title">Carreira de professor</label>		<div class="column column1"><label><input type="checkbox" name="checkbox1[]" value="Ensino básico, técnico e tecnológico"/ ><span>Ensino básico, técnico e tecnológico</span></label><label><input type="checkbox" name="checkbox1[]" value="Substituto"/ ><span>Substituto</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-input<?php frmd_add_class("input1"); ?>" title="Classe e nível no magistério superior"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input1" required="required" placeholder="Classe e nível no magistério superior"/><span class="icon-place"></span></div></div>
	<div class="element-radio<?php frmd_add_class("radio2"); ?>"><label class="title">Regime de trabalho<span class="required">*</span></label>		<div class="column column1"><label><input type="radio" name="radio2" value="20h" required="required"/><span>20h</span></label><label><input type="radio" name="radio2" value="40h" required="required"/><span>40h</span></label><label><input type="radio" name="radio2" value="40h/Dedicação exclusiva" required="required"/><span>40h/Dedicação exclusiva</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio<?php frmd_add_class("radio3"); ?>"><label class="title">É sindicalizado?<span class="required">*</span></label>		<div class="column column2"><label><input type="radio" name="radio3" value="Sim" required="required"/><span>Sim</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="radio" name="radio3" value="Não" required="required"/><span>Não</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-input<?php frmd_add_class("input2"); ?>" title="Entidade sindical (caso seja sindicalizado)"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input2" placeholder="Entidade sindical (caso seja sindicalizado)"/><span class="icon-place"></span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Condições de trabalho</h3></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Subjetivação do trabalho docente</h3></div>
	<div class="element-select<?php frmd_add_class("select3"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select3" required="required">

		<option value="Sempre">Sempre</option>
		<option value="Frequentemente">Frequentemente</option>
		<option value="Ocasionalmente">Ocasionalmente</option>
		<option value="Nunca">Nunca</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select5"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select5" required="required">

		<option value="Sempre">Sempre</option>
		<option value="Frequentemente">Frequentemente</option>
		<option value="Ocasionalmente">Ocasionalmente</option>
		<option value="Nunca">Nunca</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select4"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select4" >

		<option value="Sempre">Sempre</option>
		<option value="Frequentemente">Frequentemente</option>
		<option value="Ocasionalmente">Ocasionalmente</option>
		<option value="Nunca">Nunca</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Saúde do trabalhador docente</h3></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>