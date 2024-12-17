<?php

use App\Config;
use App\Db;
use Darken\Code\InvokeResponseInterface;
use Darken\Web\Response;

return new class implements InvokeResponseInterface {
    
    #[Darken\Attributes\Inject(Db::class)]
    public Db $db;

    #[Darken\Attributes\RouteParam('slug')]
    public string $slug;

    #[Darken\Attributes\Inject(Config::class)]
    public Config $config;
    
    public function __invoke(): Response
    {
        return new Response(200, [
            'Content-Type' => 'application/json'
        ], json_encode([
            'message' => 'Hello from the blog API!',
            'slug' => $this->slug,
            'time' => time(),
            'db' => $this->db->debug(),
            'debug' => $this->config->getDebugMode()
        ]));
    }
};