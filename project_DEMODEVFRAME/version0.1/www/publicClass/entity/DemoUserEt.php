<?php
/**
 * 用户实体类
 * 对应于mpf_demo_user表
 * 
 * @since  2010-1-1
 * @author Wu ZeTao <578014287@qq.com>
 */
Class DemoUserEt Extends Et {
    
    private $uid;       /* uid */
    private $lgName;    /* 登录名 */
    private $upass;     /* 密码 */
    private $userStatus;    /* 用户状态 */
    
    /* 扩展属性 */  /* 开发规范：一般在对应实体的初始化类中构造扩展属性，例如：DemoUserEtInit::initExtOfDemoUserEt($oDemoUserEt) */

    /**
     * 构造函数
     */
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * 根据从mpf_demo_user表中读出的记录进行初始化
     *
     * @param  Array  $r  用户记录
     */
    public function initByRecord($r) {
        $this->uid = $r['uid'];
        $this->lgName = $r['lg_name'];
        $this->upass = $r['upass'];
        $this->userStatus = $r['user_status'];
    }
    
    /**
     * 判断是否是正常状态
     */
    public function isOkStatus() {
        if ($this->userStatus == Fdt::getFdt('FdtDemo.tb_demo_user.fd_user_status.ok.v')) {
            return true;
        }
        return false;
    }
    
    /**
     * 判断是否是删除状态
     */
    public function isDelStatus() {
        if ($this->userStatus == Fdt::getFdt('FdtDemo.tb_demo_user.fd_user_status.del.v')) {
            return true;
        }
        return false;
    }
    
    /**
     * 返回用户状态名
     */
    public function getUserStatusName() {
        foreach (Fdt::getFdt('FdtDemo.tb_demo_user.fd_user_status') as $v) {
            if ($v['v'] == $this->userStatus) {
                return $v['t'];
            }
        }
    }
    
    
    
    
    
    
    
    
/****** 魔术方法 Begin ******/
    /**
     * 检测对象是否有指定的属性
     *
     * @param  String  $propertyName  属性名
     * @return  Mixed  如果有则返回true，否则返回false
     */
    protected function hasProperty($propertyName) {     /* 必须的，以支持php 5.2 version */
        if (property_exists($this, $propertyName)) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * 魔术方法
     * 目前主要用于生成与对象成员属性对应的方法（用于设置（set）或读取（get）对应的成员属性）
     * 由于不能访问扩展类实例（对象）的private属性，所以需要在扩展类中复制这个函数！！！
     *
     * @param  String  $funcName  函数名（方法名）
     * @param  Array  $params  与函数名$funcName对应的参数数组
     */
    public function __call($funcName, $params) {
        if (preg_match('/^(get_|set_)(\w+)/', $funcName, $match)) {   /* 可能是对象成员属性对应的get或set方法 */
            /* 对成员属性的get方法的命名格式：get_ + 成员属性名
            例如：$oXXX->abcId的get方法名为get_abcId()，$oXXX->oMsg的get方法名为get_oMsg() */
            /* 对成员属性的set方法的命名格式：set_ + 成员属性名
            例如：$oXXX->abcId的set方法名为set_abcId()，$oXXX->oMsg的set方法名为set_oMsg() */
            $propertyName = $match[2];
            if ($this->hasProperty($propertyName)) {
                if ($match[1] == 'get_') {   /* 对象成员属性对应的get方法 */
                    return $this->$propertyName;
                } elseif ($match[1] == 'set_') { /* 对象成员属性对应的set方法 */
                    if (count($params) == 1) {
                        $this->$propertyName = $params[0];
                    } else {
                        Error::alert('__call', __METHOD__ . ',line:' . __LINE__ . '.' . 'Invalid params num!', ERR_TOP);
                    }
                } else {
                    Error::alert('__call', __METHOD__ . ',line:' . __LINE__ . '.' . "Unknown property method:$propertyName", ERR_TOP);
                }
            } else {
                Error::alert('__call', __METHOD__ . ',line:' . __LINE__ . '.' . "Unknown property:$propertyName", ERR_TOP);
            }
        } else {
            Error::alert('__call', __METHOD__ . ',line:' . __LINE__ . '.' . "Unknown function name:$funcName", ERR_TOP);
        }
    }
/****** 魔术方法 End ******/
    
}

?>