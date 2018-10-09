<?php

use yii\db\Migration;

/**
 * Handles the creation of table `students`.
 */
class m181009_135930_create_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('students', [
            'id' => $this->primaryKey(),
            'firstname' =>$this->string(),
            'lastname' =>$this->string(),
            'section' =>$this->integer(),
            'status' =>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('students');
    }
}
