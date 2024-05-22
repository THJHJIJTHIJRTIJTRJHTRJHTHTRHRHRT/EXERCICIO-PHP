<?php
require_once 'MODEL/Projeto.php';

class ProjetoController {

    public function all() {
        $obj = new Projeto();
        $projetos = $obj->all();
        require_once 'view/Projeto-all.php';
    }

    public function create() {
        $obj = new Projeto();
        if (isset($_POST['nome'])) {
            $obj->setNome($_POST['nome']);
            $obj->setDuracao($_POST['duracao']);
            $obj->create();
            header("Location: ?classe=Projeto&acao=all");
            exit();
        } else {
            $projeto = (object)[
                'id' => null,
                'nome' => '',
                'duracao' => ''
            ];
            require_once 'view/Projeto_create.php';
        }
    }

    public function read() {
        $obj = new Projeto();
        if (isset($_GET['id'])) {
            $obj->setId($_GET['id']);
            $projeto = $obj->read();
            require_once 'view/Projeto_read.php';
        } else {
            header("Location: ?classe=Projeto&acao=all");
            exit();
        }
    }

    public function update() {
        $obj = new Projeto();
        if (isset($_GET['id'])) {
            $obj->setId($_GET['id']);
            if (isset($_POST['nome'])) {
                $obj->setNome($_POST['nome']);
                $obj->setDuracao($_POST['duracao']);
                $obj->update();
                header("Location: ?classe=Projeto&acao=read&id=" . $_GET['id']);
                exit();
            } else {
                $projeto = $obj->read();
                require_once 'view/Projeto_update.php';
            }
        } else {
            header("Location: ?classe=Projeto&acao=all");
            exit();
        }
    }

    public function delete() {
        $obj = new Projeto();
        if (isset($_GET['id'])) {
            $obj->setId($_GET['id']);
            $obj->delete();
            header("Location: ?classe=Projeto&acao=all");
            exit();
        } else {
            header("Location: ?classe=Projeto&acao=all");
            exit();
        }
    }
}
?>


