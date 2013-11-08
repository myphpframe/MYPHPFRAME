<?php
require_once('./MainBase.php');

/** 
 * 首页 
 * 
 * @since  2010-1-1
 * @author Wu ZeTao <578014287@qq.com>
 */
Class MainHome extends MainBase {
    
    public function __construct() {
        parent::__construct();
        self::selectRewrite();
        
        $this->initSession();
        $this->initCDemoUserEt();
    }
    
    /**
     * 登录页面
     */
    public function demo_loginPage() {
        self::$cmd = 'demo_loginPage';
        /* init */
        /* verify */
        /* acl */
        /* do */
        /* end */
        $this->setTpl('demo_loginPage.html');
    }
    
    /**
     * 登录
     */
    public function demo_login() {
        self::$cmd = 'demo_login';
        /* init */
        if (!self::$isAjax) {
            self::$oCf->pageReturn('', '', 'MainHome.php', 'demo_loginPage', '', array('status' => ERR_APP, 'info' => MainApp::$oCf->_L('cm_param_error')));
        }
        $oDemoUserEt = MainApp::$oClk->newObj('DemoUserEt');
        $oDemoUserEt->set_lgName($_POST['loginName_']);
        $oDemoUserEt->set_upass($_POST['pass_']);
        /* verify */
        /* acl */
        $oAclDemoUser = MainApp::$oClk->newObj('AclDemoUser');
        if ($oAclDemoUser->canAclDemoLogin()) {
            /* do */
            $oDemoUserEtRd = MainApp::$oClk->newObj('DemoUserEtRd');
            if ($oDemoUserEtRd->doDemoLogin($oDemoUserEt)) {
                self::$oCf->pageReturn('', '', 'MainHome.php', 'demo_ls__demoUser', '', array('status' => ERR_INFO, 'info' => MainApp::$oCf->_L('cm_act_ok')));
            } else {
                self::$oCf->pageReturn('', '', 'MainHome.php', 'demo_loginPage', '', array('status' => ERR_APP, 'info' => MainApp::$oCf->_L('cm_login_fail')));
            }
        } else {
            self::$oCf->pageReturn('', '', 'MainHome.php', 'demo_loginPage', '', array('status' => ERR_APP, 'info' => MainApp::$oCf->_L('cm_no_acl')));
        }
        /* end */
    }
    
    /**
     * 列表用户
     */
    public function demo_ls__demoUser() {
        self::$cmd = 'demo_ls__demoUser';
        $this->setTpl('demo_ls__demoUser.html');
        /* init */
        if (!$this->hasLogin()) {   /* 未登陆 */
            self::$oCf->pageReturn('', '', 'MainHome.php', 'demo_loginPage', '', array('status' => ERR_APP, 'info' => MainApp::$oCf->_L('cm_not_login')));
        }
        /* verify */
        /* acl */
        $oAclDemoUser = MainApp::$oClk->newObj('AclDemoUser');
        if ($oAclDemoUser->canAclDemoLsDemoUser($this, MainBase::$CDemoUserEt)) {
            /* do */
            $oDemoUserEtRd = MainApp::$oClk->newObj('DemoUserEtRd');
            $oAppPage = MainApp::$oClk->newObj('AppPage');
            $objsDemoUserEt = $oDemoUserEtRd->doDemoDemoUserLs($oAppPage);
            self::assign('objsDemoUserEt', $objsDemoUserEt);
            self::assign('oAppPage', $oAppPage);
        } else {
            self::$oCf->pageReturn('', '', 'MainHome.php', 'demo_loginPage', '', array('status' => ERR_APP, 'info' => MainApp::$oCf->_L('cm_no_acl')));
        }
        /* end */
    }
    
    public function run() {
        switch (self::$cmd) {
            case 'demo_loginPage':
                $this->demo_loginPage();
                break;
            case 'demo_login':
                $this->demo_login();
                break;
            case 'demo_ls__demoUser':
                $this->demo_ls__demoUser();
                break;
            default:
                $this->demo_loginPage();
                break;
        }
    }
    
    public static function cmEnd($oMain = NULL, $opt = array()) {
         parent::cmEnd();
    }
    
}

$html = new MainHome();
$html->run();
MainHome::cmEnd($html);
$html->display();

?>