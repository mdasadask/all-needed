===================================================== Jacky Start =====================================================
com, npm, fresh --seed
php artisan migrate:fresh --seed

php artisan serve
npm install
php artisan optimize:clear

500 SERVER ERROR mean- .env / other missing

===================================================== Jacky End ===================================================== 










1. composer update
2. php artisan cache:clear
3. php artisan config:cache
4. php artisan key:generate
5. Composer dump-autoload
6. php artisan --version
7. migration table -- php artisan make:migration create_users_table

8. seeder:
i) php artisan make:seeder MangoTableSeeder
ii) create variable in seeder, insert in model and call from main(DatabaseSeeder) seeder
iii) php artisan db:seed

9. Faker is a PHP library: https://github.com/fzaninotto/Faker
i) php artisan make:factory FruitFactory --model=Fruit
ii) protected $fillable = ['name', 'description', 'status'];
iii) in factory return
return [
'name'=>$this->faker->text(30),
'description'=>$this->faker->text(),
'status'=>$this->faker->numberBetween(0, 1)
];
iv) composer dump-autoload
v) php artisan tinker > Fruit::factory()->count(5)->create()

10. composer require doctrine/dbal

11. php artisan tinker
$user = new App\Models\User();
$user->password = Hash::make('123456');
$user->email = 'asad@ihelpbd.com';
$user->name = 'Asad';
$user->save();

12. php artisan migrate:rollback --path=/database/migrations/2022_12_18_120749_create_phones_table.php

13. $user = User::select(['id', 'name', 'email'])
->with(['phone' => function ($query) {
$query->select(['user_id', 'name']);
}])
->get();

$phone = Phone::select(['user_id', 'name'])
->with(['user' => function ($query) {
$query->select(['id', 'email', 'name']);
}])
->get();

14. <td>{{ optional($single_phone->user)->name }}</td>
15. php artisan migrate
16. php artisan db:seed
17. composer update >> npm update >> npm run dev(ei command na dileo chole) >> npm run build >> php artisan key:generate
18. php artisan db:seed --class=UserModelSeeder