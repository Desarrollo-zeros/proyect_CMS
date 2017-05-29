<?php

class Install
{
    private $db;
    private $soap;

    public function __construct()
    {
       $this->db = fopen("../application/config/database.php", "a");
        $this->soap = fopen("../application/config/soap.php", "w");
        if(!isset($_GET['id']))
        {
            die();
        }
        else
        {
            switch($_GET['id'])
            {

                case "1": $this->createConf(); break;
                case "2": $this->createInfoWebDB(); break;
                case "3": $this->createInfoAuthDB(); break;
                case "4": $this->createInfoCharactersWorldDB(); break;
                case "5": $this->soapInfo(); break;
                case "default": echo 'Warning! "error al momento de mandar informacion"'; break;

            }
        }
    }

    private function createConf(){
        require_once('../application/libraries/configeditor.php');
        $owner = fopen("../application/config/owner.php", "w");
        fwrite($owner, '<?php $config["owner"] = "'.$_POST['superadmin'].'";');
        fclose($owner);
        $distConfig = '../application/config/proyect.php.dist';
        $config = '../application/config/proyect.php';
        if(file_exists($distConfig))
            copy($distConfig, $config); // preserve the original in-case they mess up the new one

        $config = new ConfigEditor($config);

        $data['title'] = $_POST['TitleServer'];
        $data['server_name'] = $_POST['nameServer'];
        $data['realmlist'] = $_POST['realmlist'];
        $data['keywords'] = "World of warcraft,wow,private server,pvp";
        $data['description'] = "Best World of Warcraft private server in the entire world!";
        $data['security_code'] = $_POST['password1'];

        foreach($data as $key => $value)
        {
            $config->set($key, $value);
        }
        $config->save();
    }

    private function createInfoWebDB(){
        if($_POST['hostWe'] == ""){
            $_POST['hostWe'] = "127.0.0.1";
        }
        if($_POST['usuarioWe'] ==""){
            $_POST['usuarioWe'] = "root";
        }
        if($_POST['dbWe'] == ""){
            $_POST['dbWe'] = "proyect";
        }

        if($_POST['passwordWe']==""){
            $_POST['passwordWe'] = "toor";
        }


        $string = '
        $db[\'web\'] = array(
            \'dsn\'	=> \'\',
            \'hostname\' => \''.$_POST['hostWe'].'\',
            \'username\' => \''.$_POST['usuarioWe'].'\',
            \'password\' => \''.$_POST['passwordWe'].'\',
            \'database\' => \''.$_POST['dbWe'].'\',
            \'dbdriver\' => \'mysqli\',
            \'dbprefix\' => \'\',
            \'pconnect\' => FALSE,
            \'db_debug\' => (ENVIRONMENT !== \'production\'),
            \'cache_on\' => FALSE,
            \'cachedir\' => \'\',
            \'char_set\' => \'utf8\',
            \'dbcollat\' => \'utf8_general_ci\',
            \'swap_pre\' => \'\',
            \'encrypt\' => FALSE,
            \'compress\' => FALSE,
            \'stricton\' => FALSE,
            \'failover\' => array(),
            \'save_queries\' => TRUE
        );
        '."\n";
        fwrite($this->db, $string);

    }

    private function createInfoAuthDB(){


        if($_POST['hostAu'] == ""){
            $_POST['hostAu'] = "127.0.0.1";
        }
        if($_POST['usuarioAu'] ==""){
            $_POST['usuarioAu'] = "root";
        }
        if($_POST['dbAu'] == ""){
            $_POST['dbAu'] = "auth";
        }

        if($_POST['passwordAu']==""){
            $_POST['passwordAu'] = "toor";
        }

        $string = '
        $db[\'auth\'] = array(
            \'dsn\'	=> \'\',
            \'hostname\' => \''.$_POST['hostAu'].'\',
            \'username\' => \''.$_POST['usuarioAu'].'\',
            \'password\' => \''.$_POST['passwordAu'].'\',
            \'database\' => \''.$_POST['dbAu'].'\',
            \'dbdriver\' => \'mysqli\',
            \'dbprefix\' => \'\',
            \'pconnect\' => FALSE,
            \'db_debug\' => (ENVIRONMENT !== \'production\'),
            \'cache_on\' => FALSE,
            \'cachedir\' => \'\',
            \'char_set\' => \'utf8\',
            \'dbcollat\' => \'utf8_general_ci\',
            \'swap_pre\' => \'\',
            \'encrypt\' => FALSE,
            \'compress\' => FALSE,
            \'stricton\' => FALSE,
            \'failover\' => array(),
            \'save_queries\' => TRUE
        );
        '."\n";
        fwrite($this->db, $string);
    }

    private function createInfoCharactersWorldDB(){
        if($_POST['hostCW'] == ""){
            $_POST['hostCW'] = "127.0.0.1";
        }
        if($_POST['usuarioCW'] ==""){
            $_POST['usuarioCW'] = "root";
        }
        if($_POST['dbCh'] == ""){
            $_POST['dbCh'] = "characters";
        }
        if($_POST['dbWo'] ==""){
            $_POST['dbWo'] = "world";
        }
        if($_POST['passwordCW']==""){
            $_POST['passwordCW'] = "toor";
        }
        $string = '
        $db[\'characters\'] = array(
            \'dsn\'	=> \'\',
            \'hostname\' => \''.$_POST['hostCW'].'\',
            \'username\' => \''.$_POST['usuarioCW'].'\',
            \'password\' => \''.$_POST['passwordCW'].'\',
            \'database\' => \''.$_POST['dbCh'].'\',
            \'dbdriver\' => \'mysqli\',
            \'dbprefix\' => \'\',
            \'pconnect\' => FALSE,
            \'db_debug\' => (ENVIRONMENT !== \'production\'),
            \'cache_on\' => FALSE,
            \'cachedir\' => \'\',
            \'char_set\' => \'utf8\',
            \'dbcollat\' => \'utf8_general_ci\',
            \'swap_pre\' => \'\',
            \'encrypt\' => FALSE,
            \'compress\' => FALSE,
            \'stricton\' => FALSE,
            \'failover\' => array(),
            \'save_queries\' => TRUE
        );
        '."\n".'
        $db[\'world\'] = array(
            \'dsn\'	=> \'\',
            \'hostname\' => \''.$_POST['hostCW'].'\',
            \'username\' => \''.$_POST['usuarioCW'].'\',
            \'password\' => \''.$_POST['passwordCW'].'\',
            \'database\' => \''.$_POST['dbWo'].'\',
            \'dbdriver\' => \'mysqli\',
            \'dbprefix\' => \'\',
            \'pconnect\' => FALSE,
            \'db_debug\' => (ENVIRONMENT !== \'production\'),
            \'cache_on\' => FALSE,
            \'cachedir\' => \'\',
            \'char_set\' => \'utf8\',
            \'dbcollat\' => \'utf8_general_ci\',
            \'swap_pre\' => \'\',
            \'encrypt\' => FALSE,
            \'compress\' => FALSE,
            \'stricton\' => FALSE,
            \'failover\' => array(),
            \'save_queries\' => TRUE
        );  ?>';
        fwrite($this->db, $string);
        fclose($this->db);

    }

    private function  soapInfo(){
        $string =
           '<?php
           $config["SoapURL"] = "'.$_POST['SoapURL'].'"";
           $config["Port"] = "'.$_POST['Port'].'"";
           $config["UserSoap"] = "'.$_POST['UserSoap'].'"";
           $config["passwordWe"] = "'.$_POST['passwordWe'].'"";
           <?
           ';
        fwrite($this->soap, $string);
        fclose($this->soap);
        $myfile = fopen(".lock", "w") or die("Unable to open file!");
        fwrite($myfile,"Instalado");
        fclose($myfile);
        if(!file_exists(__DIR__."/install/.lock"))
        {
            header("Location: install/");
            die();
        }
    }
}

$install = new Install();
?>


