<?php
define('MPF_C_APPNAME', 'DEMO');    /* 模块名 */
require_once('../MpfGlobalConfig.php');

/** 
 * 模块配置 
 * 
 * @since  2010-1-1
 * @author Wu ZeTao <578014287@qq.com>
 */

/* 模块自定义常量 */


/** 
 * 模块配置类 
 */
Class AppConfig Extends AppConfigBase {

    /**
     * 构造函数
     */
    public function __construct() {
        global $mpf_config;
        parent::__construct();
        
        $this->appCfg['db'] = array (    /* 数据库配置，只有底层程序可以直接访问这个配置，其他程序一律不得直接访问。 */
            'dbName' => 'mpf_demodevframe_demo',  /* 数据库名 */
            'ip' => 'localhost',  /* ip地址 */
            'user' => 'root',  /* 用户名 */
            'pass' => '123456'  /* 密码 */
        );
        
        $this->interfaceSetting = array (    /* 模块间接口配置，只有底层程序可以直接访问这个配置，其他程序一律不得直接访问。 */
            'apps' => $mpf_config['apps'],  /* 各个模块的配置 */
            'interface' => array (  /* 接口配置 */
                'DEMO&&COMMENT' => array (     /* 假设这里进行DEMO模块与COMMENT模块的接口配置 */
                    'DEMO' => array (
                        'ip' => array ('127.0.0.1'),    /* 模块所在的若干IP */
                        'sendKey' => '123456',  /* 敏感发送key，用于敏感接口 */
                        'receiveKey' => 'aaabbb'    /* 敏感接收key，用于敏感接口 */
                    ),
                    'COMMENT' => array (
                        'ip' => array ('127.0.0.1'),
                        'sendKey' => 'aaabbb',  /* 敏感发送key，用于敏感接口 */
                        'receiveKey' => '123456'    /* 敏感接收key，用于敏感接口 */
                    )
                )
            )
        );
    }
    
}

?>