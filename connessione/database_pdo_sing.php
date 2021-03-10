<?php

class DatabasePdoClass
{

    static $object;

    static public function getInstance()
    {
        if (!isset(self::$object)) {
            self::$object = new DatabasePdoClass();
        }
        return self::$object;
    }

    public function creaConnessione()
    {      
        // $config = array(
        //     'host' => 'localhost',
        //     'username' => 'root',
        //     'password' => '',
        //     'dbname' => 'sell-master'
        // );  
        $config = array(
            'host' => '107.180.25.194',
            'username' => 'MarceloSchneider',
            'password' => 'pfekr3sJ22VjzH8',
            'dbname' => 'sell-master',
            'port'=>'3306'
        );
        //error_reporting('E_ALL');
    
    try {
        // connessione tramite creazione di un oggetto PDO

        // $db = new PDO('mysql:charset=utf8;host=' . $config['host'] . ';port=' . $config['port'].';dbname=' . $config['dbname'], $config['username'], $config['password']);
        $db = new PDO('mysql:charset=utf8;host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "connessione riuscita";
        return $db;
    }
    // blocco catch per la gestione delle eccezioni
    catch (PDOException $e) {
        echo "connessione non riuscita";
        echo "<h1>".__LINE__ . __FILE__ . __FUNCTION__ . "  Attenzione problemi di connessione al db: " . $e->getMessage()."</h1>";
    }
    }

    public function creaConnessionelettura()
    {        

            $config = array(
                'host' => 'localhost',
                'username' => 'root',
                'password' => '',
                'dbname' => 'sell-master'
            );
            //error_reporting('E_ALL');
        
        try {
            // connessione tramite creazione di un oggetto PDO

            $db = new PDO('mysql:charset=utf8;host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "connessione riuscita";
            return $db;
        }
        // blocco catch per la gestione delle eccezioni
        catch (PDOException $e) {
            echo "connessione non riuscita";
            echo "<h1>".__LINE__ . __FILE__ . __FUNCTION__ . "  Attenzione problemi di connessione al db: " . $e->getMessage()."</h1>";
        }
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    public function __wakeup()
    {
    }
}
