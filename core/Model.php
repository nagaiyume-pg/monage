<?php
    class Model {
        protected $db;

        public function __construct() {
            $config = require __DIR__ . '/../config/config.php';
            $this->db = new PDO(
                dsn: "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8",
                username: $config['user'],
                password: $config['password']
            );
        }
    }