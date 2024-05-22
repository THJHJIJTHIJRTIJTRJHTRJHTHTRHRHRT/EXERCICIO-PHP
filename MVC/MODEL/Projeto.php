<?php
class Projeto {
    private $id;
    private $nome;
    private $duracao;
    private $con;

    public function __construct($id = null, $nome = null, $duracao = null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->duracao = $duracao;

        // Ajuste a DSN (Data Source Name), o usuário e a senha conforme necessário
        $dsn = 'mysql:host=localhost;dbname=seu_banco_de_dados';
        $username = 'seu_usuario';
        $password = 'sua_senha';

        try {
            $this->con = new PDO($dsn, $username, $password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function all() {
        $sql = $this->con->prepare('SELECT * FROM ver_projeto');
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function create() {
        $sql = $this->con->prepare('INSERT INTO Projeto (nome, duracao) VALUES (?, ?)');
        $sql->execute([$this->nome, $this->duracao]);
    }

    public function read() {
        $sql = $this->con->prepare('SELECT * FROM ver_projeto WHERE id = ?');
        $sql->execute([$this->id]);
        $row = $sql->fetchObject();
        return $row;
    }

    public function update() {
        $sql = $this->con->prepare('UPDATE Projeto SET nome = ?, duracao = ? WHERE id = ?');
        $sql->execute([$this->nome, $this->duracao, $this->id]);
    }

    public function delete() {
        $sql = $this->con->prepare('DELETE FROM Projeto WHERE id = ?');
        $sql->execute([$this->id]);
    }
}
?>

