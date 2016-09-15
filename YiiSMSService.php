<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 01/08/16
 * Time: 13:54
 */

namespace marqu3s\nrsgateway;

use yii\base\Component;

class YiiSMSService extends Component
{
    /** @var SMSService */
    public $nrs = null;

    public $username;
    public $password;


    public function init()
    {
        if ($this->nrs === null) {
            $this->nrs = new SMSService($this->username, $this->password);
        }
    }
}
