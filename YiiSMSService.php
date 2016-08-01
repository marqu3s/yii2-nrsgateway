<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 01/08/16
 * Time: 13:54
 */

namespace marqu3s\yii2nrsgateway;

use yii\base\Component;
use marqu3s\nrsgateway\SMSService;

class YiiSMSService extends Component
{
    /** @var SMSService */
    private $_nrs = null;

    public $username;
    public $password;


    public function init()
    {
        if ($this->_nrs === null) {
            $this->_nrs = new SMSService($this->username, $this->password);
        }
    }
}
