<?php

use Illuminate\Database\Seeder;
use App\ContactForm;
class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //200個のダミーデータの生成
        factory(ContactForm::class,200)->create();
    }
}
