<?php


namespace App\Models;
use App\TraitMagicMethods;

class Views
{
    protected $data = [];
    /**
     * @var |null
     */
    private $author;

    use TraitMagicMethods;

    public function render(string $path)
    {
        if (!file_exists($path)) {
            return false;
        }
        extract($this->data);
        ob_start();
        include($path);
        $out = ob_get_contents();
        ob_end_clean();
        return $out;
    }


}