<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SlideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imageslide' => $this->faker->randomElement($array = array('home-banner2.jpg','home-banner3.jpg','home-banner4.jpg')),
            'logoslide'=> $this->faker->randomElement($array = array('small-logo.png','','partner-logo2.png','partner-logo3.png','partner-logo6.png')),
            'linkslide' =>  $this->faker->randomElement($array = array('www.patric.dev','www.miche.com','www.smauel.com')),
            'titleslide' => $this->faker->company(),
            'contentslide' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'status'=> '1',
            'langues' => '1',
            'iduser' => '1',
        ];
    }
}
