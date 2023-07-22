<?php
    declare(strict_types=1);

    class RestauranteController extends AbstractController {
        public function list(): void {
            $this->load('restaurante/listar');
        }

        public function add(): void {
            $this->load('restaurante/adicionar');
        }

        public function save(): void {
            $this->load('restaurante/salvar');
        }
    }
?>