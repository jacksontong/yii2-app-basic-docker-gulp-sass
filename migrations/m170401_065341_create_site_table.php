<?php

use yii\db\Migration;

/**
 * Handles the creation of table `site`.
 */
class m170401_065341_create_site_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('site', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('site');
    }
}
