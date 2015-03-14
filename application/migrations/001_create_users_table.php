<?php

class Migration_Create_users_table extends CI_Migration {

    public function up()
    {
        $this->load->dbforge();

        //需要创建的字段
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'pwd_hash' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'role' => array(
                'type' => 'INT',
                'unsigned' => TRUE
            )
        ));
        //添加（主）键
        $this->dbforge->add_key('id', TRUE);

        //创建表
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
