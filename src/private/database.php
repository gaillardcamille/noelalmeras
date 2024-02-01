<?php
ini_set('display_errors', '1');
ini_set('extension', 'php_pdo_mysql.dll');

class DB
{
    private static $instance;
    private PDO $PDO;
    private function __construct()
    {
        $db_login = json_decode(file_get_contents("./password_bdd.json"));

        $this->PDO = new PDO(
            'mysql:host=' . $db_login->host . ';port=3306;dbname=' . $db_login->dbname . ';charset=utf8',
            $db_login->username,
            $db_login->password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getPDO()
    {
        return $this->PDO;
    }

    /**
     * Ajoute un utilisateur à la base de données.
     *
     * @param string $email L'adresse email de l'utilisateur.
     * @param string $username Le nom d'utilisateur de l'utilisateur.
     * @param string $password Le mot de passe de l'utilisateur.
     * @param int $codeIcone Le code de l'icone de l'utilisateur.
     *
     * @return bool Retourne true si l'ajout réussit, sinon retourne false.
     */
    public function getAllProducts(): array
    {
        $req = $this->PDO->prepare("SELECT * FROM `Produit`");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    /*public function nulll(): void
    {
        $req = $this->PDO->prepare(
            "INSERT INTO `UTILISATEUR` (`EMAIL`, `USERNAME`, `PASSWORD`, `CODE_ICONE`)
                SELECT :email, :username, :password, :codeIcone
                WHERE NOT EXISTS (SELECT 1 FROM `UTILISATEUR` WHERE `EMAIL` = :email);"
        );
        $req->bindParam(':email', $email);
        $req->bindParam(':username', $username);
        $req->bindParam(':password', $hashedPassword);
        $req->bindParam(':codeIcone', $codeIcone, PDO::PARAM_INT);
        //return $req->execute() && $req->rowCount() > 0;
    }*/
}

var_dump(DB::getInstance()->getAllProducts());