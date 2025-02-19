<?php
/**
 * This file is part of osCommerce ecommerce platform.
 * osCommerce the ecommerce
 *
 * @link https://www.oscommerce.com
 * @copyright Copyright (c) 2000-2022 osCommerce LTD
 *
 * Released under the GNU General Public License
 * For the full copyright and license information, please view the LICENSE.TXT file that was distributed with this source code.
 */

namespace frontend\design\boxes\checkout;

use Yii;
use yii\base\Widget;
use frontend\design\IncludeTpl;

class BillingAddress extends Widget
{

    public $file;
    public $params;
    public $settings;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $this->params['showBillAsShip'] = true;
        if ($ext = \common\helpers\Acl::checkExtensionAllowed('SplitCustomerAddresses', 'allowed')) {
            $this->params['showBillAsShip'] = false;
        }
        return IncludeTpl::widget(['file' => 'boxes/checkout/billing-address.tpl', 'params' => array_merge($this->params, ['settings' => $this->settings])]);
    }
}