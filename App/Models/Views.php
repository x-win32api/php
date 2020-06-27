<?php


namespace App\Models;


class Views
{
    protected $data = [];

    use TraitMagicMethods;

    public function render(string $path)
    {
        if (!file_exists($renderPatch = __DIR__ . '/../Views/' . $path . '.php')) {
            return false;
        }
        extract($this->data);
        ob_start();
        include($renderPatch);
        $out = ob_get_contents();
        ob_end_clean();
        return $out;
    }


}