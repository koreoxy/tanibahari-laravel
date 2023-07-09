<?php

namespace App\Models;


class Product 
{
    private static $products = [
        [
            "name" => "Sawi",
            "slug" => "sawi",
            "category" => "Sayur",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam et sit consectetur similique aliquid ab distinctio a nam, nostrum id eum odio harum maxime soluta enim tempora omnis fuga dicta ad earum. Soluta assumenda consequatur sunt. Culpa praesentium nulla itaque suscipit. Atque iure provident eius repellat eos dolore ea. Ullam rem veritatis incidunt fuga magnam exercitationem atque ad facere, natus inventore, debitis eveniet. Officiis mollitia magni debitis non, facilis esse labore! Ratione laborum sapiente atque vel amet cum enim recusandae!",
        ],
        [
            "name" => "Kangkung",
            "slug" => "kangkung",
            "category" => "Sayur",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam et sit consectetur similique aliquid ab distinctio a nam, nostrum id eum odio harum maxime soluta enim tempora omnis fuga dicta ad earum. Soluta assumenda consequatur sunt. Culpa praesentium nulla itaque suscipit. Atque iure provident eius repellat eos dolore ea. Ullam rem veritatis incidunt fuga magnam exercitationem atque ad facere, natus inventore, debitis eveniet. Officiis mollitia magni debitis non, facilis esse labore! Ratione laborum sapiente atque vel amet cum enim recusandae!",
        ],
        [
            "name" => "Apel",
            "slug" => "apel",
            "category" => "Buah",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam et sit consectetur similique aliquid ab distinctio a nam, nostrum id eum odio harum maxime soluta enim tempora omnis fuga dicta ad earum. Soluta assumenda consequatur sunt. Culpa praesentium nulla itaque suscipit. Atque iure provident eius repellat eos dolore ea. Ullam rem veritatis incidunt fuga magnam exercitationem atque ad facere, natus inventore, debitis eveniet. Officiis mollitia magni debitis non, facilis esse labore! Ratione laborum sapiente atque vel amet cum enim recusandae!",
        ],
    ];

    public static function all()
    {
        return collect(self::$products);
    }

    public static function find($slug)
    {
        $product = static::all();
        return $product->firstWhere('slug', $slug);
    }
}
