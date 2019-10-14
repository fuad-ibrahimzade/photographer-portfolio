<?php

use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('abouts')->insert([
            'title' => 'Mr Photographer',
            'desc' => 'Photographer based in Somewhere',
            'photo' => 'http://res.cloudinary.com/djqq6o8su/image/upload/mkvg51472rnjves4etg0',
        ]);
        \Illuminate\Support\Facades\DB::table('galleries')->insert([
        [
            'name' => 'People',
        ],
        [
            'name' => 'Landscape',
        ]
        ]);
        \Illuminate\Support\Facades\DB::table('links')->insert([
        [
            'name' => 'yourfacebookname',
        ],[
            'name' => 'yourinsntagramname',
        ],[
            'name' => 'yourtwittername',
        ],[
            'name' => 'youryourtubename',
        ]
        ]);
        \Illuminate\Support\Facades\DB::table('logos')->insert([
            'photo' => 'http://res.cloudinary.com/djqq6o8su/image/upload/iwrwnlkuxlbypgdn05kp',
        ]);
        \Illuminate\Support\Facades\DB::table('slides')->insert([
        [
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/rrcbpzjxm5mesjptu9lc',
        ],[
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/iib9veyowj3wpyirbmlo',
        ],[
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/qgo6zbmwwd0kyanaoynz',
        ]
        ]);
        \Illuminate\Support\Facades\DB::table('photos')->insert([
        [
            'gallery_id' => 1,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/tub2v7olse0lwbq9vzrv',
        ],[
            'gallery_id' => 1,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/hvxogea37wkzqv5o6kkv',
        ],[
            'gallery_id' => 1,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/dp62d2vwochkoy2y82ee',
        ],[
            'gallery_id' => 1,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/lifml3ceohhebylxgue6',
        ],[
            'gallery_id' => 1,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/ki6pdlhihsvaakimfnml',
        ],[
            'gallery_id' => 1,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/itwquw92jfpht6yi1ilk',
        ],[
            'gallery_id' => 1,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/jplpld8tp4bxvskdpdzr',
        ],[
            'gallery_id' => 2,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/vp8ahga7g1h8f6zx2d0x',
        ],[
            'gallery_id' => 2,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/ozljewvxh83ahvob1aml',
        ],[
            'gallery_id' => 2,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/tgrcyaoqx8jwi7mksakd',
        ],[
            'gallery_id' => 2,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/nnsii3wvw6gn40qcldwf',
        ],[
            'gallery_id' => 2,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/e23tgxmvw8jkeje3apjk',
        ],[
            'gallery_id' => 2,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/tb0rpo4gvhxv0cyyb31z',
        ],[
            'gallery_id' => 2,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/k90gojfb903m7hoknvs5',
        ],[
            'gallery_id' => 2,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/yqmqqvltyfgt6wbza9zg',
        ],[
            'gallery_id' => 2,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/vrlwiz6u8gcrygbruzw3',
        ],[
            'gallery_id' => 2,
            'name' => 'http://res.cloudinary.com/djqq6o8su/image/upload/xapqjqz9vs5kwhqh0cr5',
        ]
        ]);
    }
}
