<?php
spl_autoload_register(
    function (string $namespaceClasse): void {
        $caminhoArquivo = str_replace(NOMESIS, '.', $namespaceClasse);
        $caminhoArquivo = str_replace("\\", '/', $caminhoArquivo);
        $caminhoArquivo .= ".php";
        if (file_exists($caminhoArquivo)) {
            require_once $caminhoArquivo;
        }
    }
);