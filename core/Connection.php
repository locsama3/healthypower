<?php 
    
    class Connection
    {
        private static $instance = null, $conn = null;

        private function __construct($config)
        {
            if(isset($config['pass'])){
                define('_PASS', $config['pass']);
            }else{
                define('_PASS', '');
            }
            # kết nối database
            try {

                // Cấu hình dsn
                $dsn = 'mysql:dbname=' . $config['db'] . ';host=' . $config['host'];
 
                // Cấu hình options 
                /* 
                 - Cấu hình utf-8 
                 - Cấu hình ngoại lệ khi truy vấn bị lỗi 
                */
                $options = [
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ];

                // Câu lệnh kết nối
                $connect = new PDO($dsn, $config['user'], _PASS, $options);

                self::$conn = $connect;

            } catch (Exception $e) {
                
                $mess = $e->getMessage();
                App::$app->loadError('databaseError', ['mess' => $mess]);
                die();

                /*
                if(preg_match('/Access denied for user/', $mess)){
                    die('Lỗi kết nối cơ sở dữ liệu');
                }

                if (preg_match('/Unknown database/', $mess)) {
                    die('Không tìm thấy cơ sở dữ liệu');
                }
                */

            }
        }

        public static function getInstance($config)
        {
            if(self::$instance == null){

                $connection = new Connection($config);
                self::$instance = self::$conn;
            }

            return self::$instance;
        }
    }
    
 ?>