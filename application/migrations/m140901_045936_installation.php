<?php

class m140901_045936_installation extends CDbMigration
{




	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
        $this->createTable('users',array(
            'id' => 'pk',
            'username'=>'string NOT NULL',
            'password'=>'string NOT NULL',
            'first_name'=>'string NULL',
            'last_name'=>'string NULL',
            'age'=>'integer',
            'sex'=>'string DEFAULT "none"',
            'role'=>'string NOT NUll',
            'created'=>'date NOT NULL'
        ));

        $this->insert('users',array(
            'username'=>'admin',
            'password'=>'$1$vdnfJtfO$V88ODsL2nsPS0VF0bDFcr0', //123,
            'first_name'=>'James',
            'last_name'=>'Hidden',
            'age'=>33,
            'role'=>'ROLE_SUPERADMIN',
            'created'=>'2014-09-01'

        ));
	}

	public function safeDown()
	{
        $this->dropTable('users');

	}

}