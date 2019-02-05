<?php

use yii\db\Migration;

/**
 * Class m181018_132202_add_book_table
 */
class m181018_132202_add_book_table extends Migration
{
    use \nullref\core\traits\MigrationTrait;

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'isbn' => $this->string(),
            'image' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createTable('{{%real_book}}', [
            'id' => $this->primaryKey(),
            'book_id' => $this->string(),
            'image' => $this->string(),
            'current_place_id' => $this->integer(),
            'owner_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createTable('{{%book_has_author}}', [
            'book_id' => $this->integer()->notNull(),
            'author_id' => $this->integer()->notNull(),
        ]);

        $this->createTable('{{%author}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createTable('{{%history}}', [
            'id' => $this->primaryKey(),
            'book_id' => $this->integer(),
            'place_id' => $this->integer(),
            'user_id' => $this->integer(),
            'created_at' => $this->integer(),
        ]);

        $this->createTable('{{%place}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'owner_id' => $this->integer(),
            'lat' => $this->decimal(10, 8)->notNull(),
            'lng' => $this->decimal(11, 8)->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * @param string $table
     * @param array $columns
     * @param null $options
     */
    public function createTable($table, $columns, $options = null)
    {
        $options = $this->getTableOptions($options);
        parent::createTable($table, $columns, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        return true;
    }

}
