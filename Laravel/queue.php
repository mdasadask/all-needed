1. php artisan queue:table (create job table)
2. php artisan make:job SendMailJob (create job table)
3. Change sync to database in env file 
4. php artisan queue:work --queue=high,default 
5. php artisan queue:failed-table (create failed job table)