<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          [  'name'=>'SAMSUNG MOBILE' ,
            'price'=>'10000' ,
            'category'=> 'Mobile',
            'description'=> 'A Smartphone with 6gb ram 124gb Internal storage',
            'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/in/sm-e236blbgins/gallery/in-galaxy-f23-4gb-ram-sm-e236blbgins-531512465?$730_584_PNG$'
        ],
          [
        'name'=>'OPPO MOBILE' ,
          'price'=>'20000' ,
          'category'=> 'Mobile',
          'description'=> 'A Smartphone with 8gb ram 256gb Internal storage',
          'gallery'=>'https://www.reliancedigital.in/medias/Oppo-CPH2359-Smart-Phones-492850898-i-1-1200Wx1200H?context=bWFzdGVyfGltYWdlc3wxMjM3MjF8aW1hZ2UvanBlZ3xpbWFnZXMvaGMwL2hhMy85ODgyMTY3Mzc3OTUwLmpwZ3xhMjJiNDgwMzNlNGZiNTYyNjdkMWExMzNjYjJkMGRhZmRlZDE4ODg5N2RkOGU2MTAwMDM5ODgzYjE4YzFkMWI3'
        ],
        [  'name'=>'SAMSUNG TV' ,
        'price'=>'30000' ,
        'category'=> 'TV',
        'description'=> 'A Television with 4gb ram ',
        'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/in/ua43bu8000klxl/gallery/in-crystaluhd-bu8000-ua43bu8000klxl-532359581?$684_547_PNG$'
],
      [  'name'=>'DELL LAPTOP' ,
      'price'=>'40000' ,
      'category'=> 'laptop computer',
      'description'=> 'A Laptop computer with 4gb ram 256gb Internal storage',
      'gallery'=>'https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/xps-notebooks/xps-13-9315/media-gallery/notebook-xps-9315-nt-blue-gallery-3.psd?fmt=png-alpha&pscan=auto&scl=1&hei=402&wid=575&qlt=100,1&resMode=sharp2&size=575,402&chrss=full'
    ],
    [  'name'=>'APPLE MACBOOK LAPTOP' ,
    'price'=>'50000' ,
    'category'=> 'laptop computer',
    'description'=> 'A macbook with 4gb ram 256gb Internal storage',
    'gallery'=>'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp-spacegray-select-202206?wid=1280&hei=1190&fmt=jpeg&qlt=90&.v=1664497359481'
    ]
        ]);
    }
}
