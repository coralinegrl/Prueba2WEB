<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Shampoo',
            'price' => 5000,
            'description' => 'Shampoo Pantene Colageno 300 ml',
            'image' => 'https://jumbo.vtexassets.com/arquivos/ids/488610/Shampoo-Pantene-Colageno-300-ml.jpg?v=637916174793500000'
        ]);

        Product::create([
            'name' => 'Acondicionador',
            'price' => 5000,
            'description' => 'Acondicionador Pantene Colageno 300 ml',
            'image' => 'https://d1tjllbjmslitt.cloudfront.net/spree/products/68367/large_webp/580129-1.webp?1645539780'
        ]);

        Product::create([
            'name'=> 'Jabón',
            'price'=> 3000,
            'description'=> 'Jabón Dove 90 gr',
            'image'=> 'https://upload.wikimedia.org/wikipedia/commons/b/bf/Tualetsapo.jpg'
        ]);

        Product::create([
            'name'=> 'Cepillo de Dientes',
            'price'=> 2990,
            'description'=> 'Cepillo de Dientes Colgate',
            'image'=> 'https://d1tjllbjmslitt.cloudfront.net/spree/products/78429/large_webp/4130005-1.webp?1661385316'
        ]);

        Product::create([
            'name'=> 'Toallitas Húmedas',
            'price'=> 4990,
            'description'=> 'Toallitas Húmedas Huggies',
            'image'=> 'https://d1tjllbjmslitt.cloudfront.net/spree/products/96813/large_webp/4100568.webp?1691534414'
        ]);

        Product::create([
            'name'=> 'Pasta de Dientes',
            'price'=> 1990,
            'description'=> 'Pasta de Dientes Colgate',
            'image'=> 'https://dankmarket.cl/cdn/shop/products/Triple-140.jpg?v=1682111788'
        ]);

        Product::create([
            'name'=> 'Toalla',
            'price'=> 3000,
            'description'=> 'Toalla Grecco Turquesa Fdo Bco',
            'image'=> 'https://mallorca.cl/wp-content/uploads/2021/07/Jgo-Toallas-Grecco-Turquesa-Fdo-Bco.jpg'
        ]);

        Product::create([
            'name'=> 'Confort',
            'price'=> 6990,
            'description'=> 'Confort 4 Rollos',
            'image'=> 'https://s3.amazonaws.com/confort.c9/app/uploads/confort-chile/2018/03/06115407/DH_30m_4.png'
        ]);

        Product::create([
            'name'=> 'Perfume',
            'price'=> 30990,
            'description'=> 'Perfume de mujer',
            'image'=> 'https://belcorpchile.vtexassets.com/arquivos/ids/367275-800-800?v=638272902607670000&width=800&height=800&aspect=true'
        ]);

        Product::create([
            'name'=> 'Cotonitos',
            'price'=> 3990,
            'description'=> 'Cotonitos de algodon',
            'image'=> 'https://www.maicao.cl/on/demandware.static/-/Sites-masterCatalog_Chile/default/dwff7e2cdc/images/large/97186-simonds-cotonitos-200-unidades.jpg'
        ]);
    }
}
