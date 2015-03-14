<?php

/*
 * Class Migrate
 *
 *  /index.php/admin/migrate
 * 运行之前：
 *  1. 要配置好 config/database 以及 config/migration
 *  2. 要在数据库中创建好config/database中设置好的数据库 'database'
 */
class Migrate extends CI_Controller {

    public function index()
    {
        $this->load->dbforge();

        $this->load->library('migration');
        if (!$this->migration->latest()) {
            show_error($this->migration->error_string());
        } else {
            echo 'Migration worked!';
        }
    }
}