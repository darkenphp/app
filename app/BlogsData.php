<?php

namespace App;

class BlogsData
{
    public function __construct(public string $apiToken)
    {
        // well, assuming we would need to auth and gather all those blogs :-)
        // ...
        // we actually don't need to do anything here   
    }

    public function getItems() : array
    {
        return [
            [
                'slug' => 'first-blog',
                'title' => 'First Blog',
                'content' => 'This is the first blog post.',
            ],
            [
                'slug' => 'second-blog',
                'title' => 'Second Blog',
                'content' => 'This is the second blog post.',
            ],
            [
                'slug' => 'third-blog',
                'title' => 'Third Blog',
                'content' => 'This is the third blog post.',
            ],
        ];
    }
    
    public function findOne(string $slug) : array|false
    {
        $blog = array_filter($this->getItems(), fn($blog) => $blog['slug'] === $slug);
        return $blog ? reset($blog) :  false;
    }
}