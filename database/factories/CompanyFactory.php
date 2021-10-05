<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $url = [
            'https://www.webfx.com/',
            'https://www.boostability.com/',
            'https://delante.co/',
            'https://www.wolfgangdigital.com/',
            'https://thisiscrowd.com/',
            'https://www.uplers.com/',
            'https://www.letsnurture.com/',
            'https://engineerbabu.com/',
            'https://studiomosaicapps.com/',
            'http://www.seoexpertsindia.com/'
        ];

        $hq = [
            "Kathmandu",
            "Pokhara",
            "Lalitpur",
            "Bhaktapur",
            "Biratnagar",
            "Birgunj",
            "Bharatpur",
            "Hetauda",
            "Dharan",
            "Butwal",
            "Dhangadi",
            "Nepalgunj",
            "Itahari",
            "Kirtipur",
            "Tulsipur",
            "Bhimdatta",
            "Siddharthanagar",
            "Birendranagar",
            "Madhyapur Thimi",
            "Dhankuta",
            "Banepa",
            "Rajbiraj",
            "Lahan",
            "Inaruwa",
            "Tansen",
            "Damak",
            "Bhadrapur"
        ];

        return [
            'name' => $this->faker->word(3),
            'slug' => preg_replace('/\s+/', '-', $this->faker->word(5)),
            'hq' => $hq[rand(0,26)],
            'logo' => env('APP_URL').'/uploads/pictures/job/sample-'.rand(1, 10).'.jpg',
            'url' => $url[rand(0, 9)],
            'description' => $this->faker->paragraph(),
            'uploaded_by' => $this->faker->email(),
            'status' => true,
        ];
    }
}
