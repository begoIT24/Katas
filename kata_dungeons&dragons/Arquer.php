<?php

class Arquer extends Jugador {

    private string $arc;

    private int $fletxes;

    public function usarArc($fletxes){
        $fletxesRestants = $fletxes -> restarFletxa($fletxes);
        if ($fletxesRestants === 0){
            return "T'has quedat sense fletxes";
        }
    }

    public function restarFletxa($fletxes) : int {

        $fletxes--;

        if ($fletxes <= 0 ){
            return 0;
        }
        return $fletxes;
    }
}