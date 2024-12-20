<?php

use App\BlogsData;
use Darken\Code\InvokeResponseInterface;
use Darken\Web\Response;

return new class implements InvokeResponseInterface {

    #[\Darken\Attributes\RouteParam]
    public string $slug;

    #[\Darken\Attributes\Inject]
    public BlogsData $blogs;

    public function __invoke() : Response
    {
        $blog = $this->blogs->findOne($this->slug);

        if (!$blog) {
            return new Response(404, [], json_encode([
                'error' => 'Blog not found'
            ]));
        }

        return new Response(200, [], json_encode($blog));
    }
};