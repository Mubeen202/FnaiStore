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

use common\classes\Migration;

/**
 * Class m231003_174343_translation_for_categories_fix
 */
class m231003_174343_translation_for_categories_fix extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addTranslation('admin/categories/productedit', [
            'TEXT_OVERWRITE_NON_EMPTY_FIELDS' => 'Overwrite non empty fields',
        ], true);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->removeTranslation('admin/categories/productedit', [
            'TEXT_OVERWRITE_NON_EMPTY_FIELDS'
        ]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231003_174343_translation_for_categories_fix cannot be reverted.\n";

        return false;
    }
    */
}
