<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = [
            'Engineering Fellow',
            'CEO',
            "CTO",
            'Chief Digital Officer',
            'Chief Innovation Officer',
            'VP of Engineering',
            'Director of Engineering',
            'Chief Designer',
            'Designer',
            'Chief Architect',
            'Software Architect',
            'Engineering Project Manager',
            'Project Manager',
            'Support Staff',
            'Technical Lead',
            'Team Lead',
            'Engineering Lead',
            'Principal Software Engineer',
            'Senior Software Engineer',
            'Senior App Developer',
            'Laravel Developer',
            'Wordpress Developer',
            'Fluter Developer',
            'Junior Software Developer',
            'Junior Web Developer',
            'Senior Game Developer',
            'Design Specialist',
            'Intern Software Developer',
            'Intern Designer',
            'Intern App Developer'
        ];

        $category = [
            'design', 
            'full-stack-programming',
            'front-end-programming', 
            'back-end-programming', 
            'game-dev', 
            'app-dev', 
            'customer-support', 
            'devops-sysadmin', 
            'sales-and-marketing', 
            'management-and-finance', 
            'product', 
            'others'
        ];

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

        $type = [
            'Full-Time',
            'Part-Time',
            'Contract',
            'Internship'
        ];

        $fully_remote = [
            'yes',
            'no'
        ];

        $work_region = [
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
            'title' => $title[rand(0, 29)],
            'slug' => preg_replace('/\s+/', '-', $title[rand(0, 29)]).'-'.Str::random(10),
            'category' => $category[rand(0, 11)],
            'type' => $type[rand(0, 3)],
            'logo' => env('APP_URL').'/uploads/pictures/job/sample-'.rand(1, 10).'.jpg',
            'fully_remote' => $fully_remote[rand(0,1)],
            'work_region' => $work_region[rand(0, 26)],
            'url' => $url[rand(0, 9)],
            'description' => $this->faker->paragraph(10),
            'uploaded_by' => $this->faker->email(),
            'status' => true,
        ];
    }
}
