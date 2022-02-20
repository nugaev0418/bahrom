<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%news}}`.
 */
class m220220_060738_add_name_uz_column_name_ru_column_to_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%news}}', 'name_uz', $this->string(255));
        $this->addColumn('{{%news}}', 'name_ru', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%news}}', 'name_uz');
        $this->dropColumn('{{%news}}', 'name_ru');
    }
}
