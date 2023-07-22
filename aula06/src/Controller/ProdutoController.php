<?php
    declare(strict_types=1);

    class ProdutoController extends AbstractController {
        public function list(): void {
            $this->load('produto/listar');
        }

        public function add(): void {
            $this->load('produto/adicionar');
        }
    }
?>   