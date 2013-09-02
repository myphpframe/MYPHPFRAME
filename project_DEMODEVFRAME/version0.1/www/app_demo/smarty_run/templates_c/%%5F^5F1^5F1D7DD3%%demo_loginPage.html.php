<?php /* Smarty version 2.6.27, created on 2013-09-02 15:59:24
         compiled from demo_loginPage.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'tplEchoUrl', 'demo_loginPage.html', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" src="<?php echo @MPF_C_APP_JS_URL; ?>
demo_loginPage.js"></script>
<body onkeypress="keyDownLogin(event)">
<form method='post' action='<?php echo smarty_function_tplEchoUrl(array('mainName' => 'MainHome.php','cmd' => 'demo_login','vName' => 'isAjax','vValue' => 1), $this);?>
' id="formLogin">
<table align="center" style="width:250px;">
<tr>
    <td width='60'>用户名</td>
    <td align='left'><input type="text" name="loginName_" id="loginName" /></td>
</tr>
<tr>
    <td>密码</td>
    <td align='left'><input type="password" name="pass_" id="pass" /></td>
</tr>
<tr>
    <td colspan='2' align="center">
        <button type='button' onClick="login(jCf.$('formLogin'));">登陆</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button type='reset'>清空</button>
    </td>
</tr>
</table>
</form>
</body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>