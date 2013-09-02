<?php /* Smarty version 2.6.27, created on 2013-09-02 16:11:40
         compiled from demo_ls__demoUser.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'demo_ls__demoUser.html', 19, false),array('modifier', 'default', 'demo_ls__demoUser.html', 19, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript">
<?php echo '
'; ?>

</script>
<body>
<form id="listForm" method="post">
<table align="center" border=1 style="width:98%;">
<tr>
    <td width="30">ID</td>
    <td width="80">用户</td>
    <td width="80">密码</td>
    <td width="60">状态</td>
</tr>
<?php $_from = $this->_tpl_vars['objsDemoUserEt']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oDemoUserEt']):
?>
<tr>
    <td width="30"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oDemoUserEt']->get_uid())) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
    <td width="80">
        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oDemoUserEt']->get_lgName())) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>

    </td>
    <td width="80"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oDemoUserEt']->get_upass())) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
    <td width="60"><?php echo ((is_array($_tmp=@$this->_tpl_vars['oDemoUserEt']->getUserStatusName())) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<table align="center" cellspacing="0" cellpadding="2" style="width:98%;">
<tr><td align="right"><?php echo $this->_tpl_vars['oAppPage']->echoPage(); ?>
</td></tr>
</table>
</form>
</body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>