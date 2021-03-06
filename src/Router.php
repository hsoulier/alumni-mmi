<?php

namespace App;

class Router
{

    private $viewPath;
    private $router;

    public function __construct(string $viewPath)
    {
        $this->viewPath = $viewPath;
        $this->router = new \AltoRouter();
    }

    public function get(string $mtd, string $url, string $view, ?string $name = null): self
    {
        $this->router->map($mtd, $url, $view, $name);
        return $this;
    }

    public function run(): self
    {
        $match = $this->router->match();
        $view = $match['target'];
        if ($match === false) {
            echo 'erreur de route';
            header("Location: /error");
        }
        if ($match['name'] !== "administration") {
            ob_start();
            require $this->viewPath . DIRECTORY_SEPARATOR . $view;
            $content = ob_get_clean();
            require $this->viewPath . DIRECTORY_SEPARATOR . 'layout/default.php';
        } else {
            require $this->viewPath . DIRECTORY_SEPARATOR . $view;
        }

        return $this;
    }

    public function generate(string $link, ?array $params = null)
    {
        $this->router->generate($link, $params);
    }
}
