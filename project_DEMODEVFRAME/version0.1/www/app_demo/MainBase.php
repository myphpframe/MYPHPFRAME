<?php
require_once('./AppConfig.php');

/** 
 * 主程序基类 
 * 
 * @since  2010-1-1
 * @author Wu ZeTao <578014287@qq.com>
 */
Abstract Class MainBase extends MainApp {
    
    public static $CDemoUserEt;     /* 当前登陆用户实体对象 */
    
    public function __construct() {
        parent::__construct();
        $this->regClass();
        self::$oAppConfig = self::$oClk->newObj('AppConfig');
        $cfg = self::$oAppConfig->getAppCfg();
        self::$oDb->prepareConnect($cfg['db']['dbName'], $cfg['db']['ip'], $cfg['db']['user'], $cfg['db']['pass']);
        /* 预包含的类 */
        self::$oClk->includeClass('FdtDemo');
        self::$oClk->includeClass('DemoUserEt');
    }
    
    /**
     * 注册公共类，各个模块中都要用到的类（主要是些实体类及模块字段定义类和接口调用客户端类）
     */
    protected function regPublicClass() {
        parent::regPublicClass();
        $type = self::$oCt->getApp();
        /* DEMO模块 */
            /* 实体类 */
        self::$oClk->reg($type, 'DemoUserEt', self::$oCf->getPath(MPF_C_APP_CLASS_PATH_ET) . 'DemoUserEt.php');
            /* 模块字段定义类 */
        self::$oClk->reg($type, 'FdtDemo', self::$oCf->getPath(MPF_C_APP_CLASS_PATH_FDT) . 'FdtDemo.php');
            /* 客户端接口类 */
        /* COMMENT模块 */
    }
    
    /**
     * 注册应用类，模块中独有的类
     */
    protected function regAppClass() {
        parent::regAppClass();
        $type = self::$oCt->getApp();
        /* 实体读/写/初始化类 */
        self::$oClk->reg($type, 'DemoUserEtInit', self::$oCf->getPath(MPF_C_APP_CLASS_PATH) . 'DemoUserEtInit.php');
        self::$oClk->reg($type, 'DemoUserEtRd', self::$oCf->getPath(MPF_C_APP_CLASS_PATH) . 'DemoUserEtRd.php');
        /* 权限判断类 */
        self::$oClk->reg($type, 'AclDemoUser', self::$oCf->getPath(MPF_C_APP_CLASS_PATH) . 'AclDemoUser.php');
        /* 实体校验类 */
        /* 主程序代理类 */
        /* 工具类 */
        /* 服务端接口类 */
    }
    
    /**
     * 选择rewrite方式
     *
     * @param  String  $v  为'php'表示用php程序仿rewrite，为'normal'表示通过http服务器配置rewrite，为'none'表示不启用rewrite；
     */
    final protected function selectRewrite($v = 'none') {
        parent::selectRewrite($v);
    }
    
    /**
     * 从session初始化当前登陆用户实体对象
     */
    final protected function initCDemoUserEt() {
        if (self::$oSession->hasVar('CDemoUserEt')) {
            self::$CDemoUserEt = self::$oSession->getVar('CDemoUserEt');
            self::assign('dfvCDemoUserEt', self::$CDemoUserEt);
        }
    }
    
    /**
     * 判断是否已经登录
     *
     * @return  Boolean
     */
    final public function hasLogin() {
        if (self::$CDemoUserEt && self::$CDemoUserEt->get_uid()) {
            return true;
        }
        return false;
    }
    
}

?>