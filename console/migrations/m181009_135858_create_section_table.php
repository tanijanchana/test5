<?php

use yii\db\Migration;

/**
 * Handles the creation of table `section`.
 */
class m181009_135858_create_section_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('section', [
            'id' => $this->primaryKey(),
            'section_code' =>$this->string(),
            'section_name' =>$this->string(),
            'status' =>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('section');
    }
}
