<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'backimgpartner'=> $this->faker->randomElement($array = array('services-img2.jpg','services-img3.jpg','services-img4.jpg','services-img7.jpg','')),
            'imgpartner'=> $this->faker->randomElement($array = array('partner-logo1.png','partner-logo2.png','partner-logo3.png','partner-logo4.png')),
            'linkpartner' =>  $this->faker->randomElement($array = array('www.patric.dev','www.miche.com','www.smauel.com')),
            'servicepartner' =>  $this->faker->randomElement($array = array('Photo, The quick brown fox jumps over the lazy dog','Informatique, Internet, Datacenter, The quick brown fox jumps over the lazy dog','Domaine name, byuiding website, The quick brown fox jumps over the lazy dog')),
            'titlepartner' => $this->faker->company(),
            'status'=> '1',
            'langues' => '1',
        ];
    }
}
