<?php

/**
 * �ֶζ�����
 * 
 * @since  2012-7-18
 * @author Wu ZeTao <578014287@qq.com>
 */
Abstract Class Fdt {
    
    public static $df = array();     /* �������� */
    
    /**
     * ���ض�Ӧ���ֶζ���ֵ
     *
     * @param  String  $fdtPath
     * @return  fixed  ����Ѿ������򷵻�֮�����򱨴�
     */
    public static function getFdt($fdtPath) {
        $arr = explode(".", $fdtPath);
        $count = count($arr);
        if (is_array($arr) && $count > 0) {
            switch ($count) {
                case 1:
                    if (isset(self::$df[$arr[0]])) {
                        return self::$df[$arr[0]];
                    }
                break;
                case 2:
                    if (isset(self::$df[$arr[0]][$arr[1]])) {
                        return self::$df[$arr[0]][$arr[1]];
                    }
                break;
                case 3:
                    if (isset(self::$df[$arr[0]][$arr[1]][$arr[2]])) {
                        return self::$df[$arr[0]][$arr[1]][$arr[2]];
                    }
                break;
                case 4;
                    if (isset(self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]])) {
                        return self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]];
                    }
                break;
                case 5;
                    if (isset(self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]])) {
                        return self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]];
                    }
                break;
                case 6;
                    if (isset(self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]][$arr[5]])) {
                        return self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]][$arr[5]];
                    }
                break;
                case 7;
                    if (isset(self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]][$arr[5]][$arr[6]])) {
                        return self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]][$arr[5]][$arr[6]];
                    }
                break;
                case 8;
                    if (isset(self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]][$arr[5]][$arr[6]][$arr[7]])) {
                        return self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]][$arr[5]][$arr[6]][$arr[7]];
                    }
                break;
                case 9;
                    if (isset(self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]][$arr[5]][$arr[6]][$arr[7]][$arr[8]])) {
                        return self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]][$arr[5]][$arr[6]][$arr[7]][$arr[8]];
                    }
                break;
                case 10;
                    if (isset(self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]][$arr[5]][$arr[6]][$arr[7]][$arr[8]][$arr[9]])) {
                        return self::$df[$arr[0]][$arr[1]][$arr[2]][$arr[3]][$arr[4]][$arr[5]][$arr[6]][$arr[7]][$arr[8]][$arr[9]];
                    }
                break;
                default:
                break;
            }
            Error::alert('getFdt', __METHOD__ . ',line:' . __LINE__ . '.' . "Can not find field definition $fdtPath!", ERR_TOP);
        } else {
            Error::alert('getFdt', __METHOD__ . ',line:' . __LINE__ . '.' . "Can not find field definition $fdtPath!", ERR_TOP);
        }
    }
  
}

?>