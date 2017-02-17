<?php

use yii\db\Migration;

class m170217_123146_initial extends Migration
{
    public function up()
    {
        $this->createTable('region', [
           'id' => $this->primaryKey()->notNull(),
            'name' => $this->string()->notNull()
        ]);
        
        $this->createTable('city', [
           'id' => $this->primaryKey()->notNull(),
            'region_id' => $this->integer()->notNull(),
            'name' => $this->string(60)->notNull()
        ]);
        $this->addForeignKey('fk_region_id', 'city', 'region_id','region', 'id', 'CASCADE');
        
        $this->createTable('lead', [
           'id' => $this->primaryKey()->notNull(),
            'first_name' => $this->string(60)->notNull(),
            'last_name' => $this->string(60)->notNull(),
            'birthday' => $this->date()->notNull(),
            'city_id' => $this->integer()->notNull(),
            'address' => $this->string(255)->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string(15)->notNull(),
            'pasport_code' => $this->integer(),
        ]);
        $this->addForeignKey('fk_city_id', 'lead', 'city_id','city', 'id', 'CASCADE'); 
    }

    public function down()
    {
        $this->dropTable('lead');
        $this->dropTable('city');
        $this->dropTable('region');
    }
}
