<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m190410_114032_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'last_name'=>$this->string(50),
            'first_name'=>$this->string(50),
            'email'=>$this->string(100),
            'password'=>$this->string(255),
            'login'=>$this->string(100),
            'price'=>$this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
