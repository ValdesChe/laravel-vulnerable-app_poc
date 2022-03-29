<?php

use App\Company;
use App\Job;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Creating the target company & user for our exploitation demonstrations
        // LUMINEAU
        $lumineau = factory(Company::class)->create([
            'id'       => 1,
            'name'     => 'Lumineau Inc.',
            'email'    => 'contact@lumineau.pwn',
            'filename'    => 'lumineau.png',
            'location' => '20 Rue Pompidou, 75010 - Paris',
        ]);
        
        factory(User::class)->create([
            'name'       => 'John Smith',
            'email'      => 'support@lumineau.pwn',
            'password'   => bcrypt('3v3r_E@H4ck.$$.$8'),
            'company_id' => $lumineau->id,
            'is_support_func' => true,
        ]);



        // Creating the target company & user for our exploitation demonstrations
        // EauDF
        $eaudf = factory(Company::class)->create([
            'id'       => 2,
            'name'     => 'EauDF Inc.',
            'email'    => 'contact@eaudf.pwn',
            'filename'    => 'eaudf.png',
            'location' => '78 Boulevard Malaloum, 13010 - Marseille',
        ]);

        factory(User::class)->create([
            'name'       => 'John Smith',
            'email'      => 'support@eaudf.pwn',
            'password'   => bcrypt('Fsi_43v3r_E@013.010'),
            'company_id' => $eaudf->id,
            'is_support_func'   => true,
        ]);

        // Passing in a random password from SecLists so that you can't bypass the password attack step <3
        // $password = exec('curl -s https://raw.githubusercontent.com/danielmiessler/SecLists/master/Passwords/darkweb2017-top10000.txt | shuf -n 1');
        // Support Technique EBM
        factory(User::class)->create([
            'name'       => 'Support Technique',
            'email'      => 'admin_support@eaurp.dwn',
            'password'   => bcrypt($password),
            'is_support_tech'   => true,
        ]);

        // Creating some more dummy data to make the app feel more lively
        factory(Company::class, 5)->create([
            'is_support_func'   => true,
        ]);

    }
}
