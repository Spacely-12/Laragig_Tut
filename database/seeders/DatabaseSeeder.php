<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Listing::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    //     Listing::create([

    //         'title' => 'Full-Stack Developer',
    //         'email' => 'janesmith@example.com',
    //         'tags' => 'full stack, javascript, react',
    //         'heading' => 'Exciting Opportunity for Full-Stack Developers!',
    //         'company' => 'Web Solutions Inc.',
    //         'location' => 'Lagos, Nigeria',
    //         'website' => 'https://www.websolutions.com',
    //         'description' => 'We are looking for a versatile Full-Stack Developer to join our dynamic team. Expertise in React and Node.js is required, with a strong understanding of web architecture and cloud services.'

    //     ]);


    //     Listing::create([
    //         'title' => 'Backend Developer',
    //         'email' => 'mikejohnson@example.com',
    //         'tags' => 'backend, php, laravel',
    //         'heading' => 'Join Our Backend Team!',
    //         'company' => 'Code Masters Ltd.',
    //         'location' => 'Nairobi, Kenya',
    //         'website' => 'https://www.codemasters.com',
    //         'description' => 'Seeking a skilled Backend Developer proficient in Laravel and PHP. The ideal candidate will have a deep understanding of RESTful APIs, database management, and server-side logic.'
    //     ]);

    //     Listing::create([
    //         'title' => 'Front-End Developer',
    //         'email' => 'emilybrown@example.com',
    //         'tags' => 'front-end, ui/ux, javascript',
    //         'heading' => 'Creative Front-End Developers Wanted!',
    //         'company' => 'Creative Minds Studio',
    //         'location' => 'Cape Town, South Africa',
    //         'website' => 'https://www.creativeminds.com',
    //         'description' => 'We are searching for a talented Front-End Developer with a passion for UI/UX design. Must be proficient in HTML, CSS, and JavaScript, with experience in responsive design and modern frameworks.'
    //     ]);
    }
}
