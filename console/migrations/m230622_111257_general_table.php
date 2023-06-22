<?php

use yii\db\Migration;

/**
 * Class m230622_111257_general_table
 */
class m230622_111257_general_table extends Migration
{
    public function safeUp()
    {$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%number_of_cases}}', [
            'id' => $this->primaryKey(),
            //'username' => $this->string()->notNull()->unique(),
            'date' => $this->date()->notNull(),
            'number_week' => $this->integer()->notNull(),
            'number_of_cases_children' => $this->integer()->notNull(),
            'number_of_cases_adults' => $this->integer()->notNull(),
            'number_of_cases_elderly' => $this->integer()->notNull(),
            'number_of_cases_all' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%intensive_morbidity_rate}}', [
            'id' => $this->primaryKey(),
            'number_week' => $this->integer()->notNull(),
            'year_of_morbidity' => $this->integer()
        ], $tableOptions);


        $this->addForeignKey('intensive_morbidity', 'intensive_morbidity_rate', 'year_of_morbidity', 'number_of_cases', 'id', 'SET NULL', 'CASCADE');

    }

    public function SafeDown()
    {
        $this->dropForeignKey('intensive_morbidity', 'intensive_morbidity_rate');
        $this->dropTable('{{%intensive_morbidity_rate}}');
        $this->dropTable('{{%number_of_cases}}');
    }
}
