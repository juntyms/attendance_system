<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {




        \DB::table('users')->insert(array(
            1 =>
            array(
                'id' => 2,
                'username' => 'nkashoob',
                'email' => 'nkashoob@du.edu.om',
                'name' => 'نور  محمد سعيد كشوب',
                'password' => '$2y$10$m2WLgxuyyEmRkI6mkilLOeJ6xE4URPzm.kPwarpsx/M3jWxhe13XO',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:24:36',
                'updated_at' => '2023-08-30 18:24:36',
            ),
            2 =>
            array(
                'id' => 3,
                'username' => 'zamerjeed',
                'email' => 'zamerjeed@du.edu.om',
                'name' => 'زمزم أحمد عامر جيد المهري',
                'password' => '$2y$10$nBLGCFlpiLJOscrTsF5Ggepj10madP9Jrg7tv2VxrI09ozP4ayWie',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:25:14',
                'updated_at' => '2023-08-30 18:25:14',
            ),
            3 =>
            array(
                'id' => 4,
                'username' => 'hanalmaashani',
                'email' => 'hanalmaashani@du.edu.om',
                'name' => 'حنان سالم أحمد المعشني',
                'password' => '$2y$10$XmQ51AkJ8hdyOKC6CbLur.haIE0t2pipZp.m45XqVJpn8ZIs6XSgW',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:25:52',
                'updated_at' => '2023-08-30 18:25:52',
            ),
            4 =>
            array(
                'id' => 5,
                'username' => 'abjaboob',
                'email' => 'abjaboob@du.edu.om',
                'name' => 'عبير سعيد محاد جعبوب',
                'password' => '$2y$10$9loOQ.6v.Cta9riXX943j.2FKKqSjlCVVD5adQ9kuHGbAIWfZiEuO',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:27:30',
                'updated_at' => '2023-08-30 18:27:30',
            ),
            5 =>
            array(
                'id' => 6,
                'username' => 'sqamsit',
                'email' => 'sqamsit@du.edu.om',
                'name' => 'سليمة سليم قمصيت المهري',
                'password' => '$2y$10$4NhSz3GaezHBzFWxXQgVturtnYGwzDjg4PiGhVTJeokIBBnzk.zv2',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:28:10',
                'updated_at' => '2023-08-30 18:28:10',
            ),
            6 =>
            array(
                'id' => 7,
                'username' => 'abaitsuwailim',
                'email' => 'abaitsuwailim@du.edu.om',
                'name' => 'عائشة حفيظ أحمد بيت سويلم',
                'password' => '$2y$10$CPleMNF6nEy7qUtNTTs2VuD9IVozosMuuGeQiCGaKgbTJtnnti2yO',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:28:58',
                'updated_at' => '2023-08-30 18:28:58',
            ),
            7 =>
            array(
                'id' => 8,
                'username' => 'balmahri',
                'email' => 'balmahri@du.edu.om',
                'name' => 'بشائر سالم علي المهري',
                'password' => '$2y$10$pW.fBW7WFpyT2W7ttLQHK.Ku5uJpfQCmt5OBZp.0tUAAQEX9b2hN.',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:42:09',
                'updated_at' => '2023-08-30 18:42:09',
            ),
            8 =>
            array(
                'id' => 9,
                'username' => 'mqatan',
                'email' => 'mqatan@du.edu.om',
                'name' => 'مزنة علي سهيل قطن',
                'password' => '$2y$10$jbXHvA4UTGArQ.j2xLK7OOxBkFBjgidPm0UycdkRWDmlYpfovFY2.',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:42:33',
                'updated_at' => '2023-08-30 18:42:33',
            ),
            9 =>
            array(
                'id' => 10,
                'username' => 'jbaitbaraka',
                'email' => 'jbaitbaraka@du.edu.om',
                'name' => 'جناهات خالد بيت براكة',
                'password' => '$2y$10$HeA6tTNWWP7QDWakwUKjUe5BRjtKfyp4oYBgLjFmN8obGa3aGXJfS',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:42:56',
                'updated_at' => '2023-08-30 18:42:56',
            ),
            10 =>
            array(
                'id' => 11,
                'username' => 'hkahoum',
                'email' => 'hkahoum@du.edu.om',
                'name' => 'هدى مسلم أحمد كهوم',
                'password' => '$2y$10$6BscS73/QpkzJx86akc8Ce/ylaS4y5OhdHMVSQ2nuP2DZpcWBlcby',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:43:21',
                'updated_at' => '2023-08-30 18:43:21',
            ),
            11 =>
            array(
                'id' => 12,
                'username' => 'lalamri',
                'email' => 'lalamri@du.edu.om',
                'name' => 'ليلى محمد العمري',
                'password' => '$2y$10$oWJQRwBmfWQ6sO3Ju7qEfuKx2o.2XqOf.bGeOAxwEN7FPMxkvoHle',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:43:51',
                'updated_at' => '2023-08-30 18:43:51',
            ),
            12 =>
            array(
                'id' => 13,
                'username' => 'Shadya',
                'email' => 'Shadya@du.edu.om',
                'name' => 'شادية مستهيل مبروك',
                'password' => '$2y$10$/gbn2TtmvEcKqqUacI.dvO2vo0uurgvlVG7Yu5TogumGN2FhR2CR2',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:44:21',
                'updated_at' => '2023-08-30 18:44:21',
            ),
            13 =>
            array(
                'id' => 14,
                'username' => 'salhajjim',
                'email' => 'salhajjim@du.edu.om',
                'name' => 'سهام راجي بيت الحجيم',
                'password' => '$2y$10$3k6pKJeYi5Dvsz7N9bObleLUmflU478WoHUG5EdYN37WgsRuTkETC',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:45:07',
                'updated_at' => '2023-08-30 18:45:07',
            ),
            14 =>
            array(
                'id' => 15,
                'username' => 'wqatan',
                'email' => 'wqatan@du.edu.om',
                'name' => 'وفاء بخيت قطن',
                'password' => '$2y$10$ATbGhYGqK0Y5/4TZgmY0fOxmMk64mHCY81Dws8LzUhjMuImpXpIYy',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:45:32',
                'updated_at' => '2023-08-30 18:45:32',
            ),
            15 =>
            array(
                'id' => 16,
                'username' => 'hqatan',
                'email' => 'hqatan@du.edu.om',
                'name' => 'حمدة سالم سعيد قطن',
                'password' => '$2y$10$NwKUv40QytFuO5kl.nUihO50PMw8MPu6WoHHWrrbjC1qxGHYrOyE6',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:45:58',
                'updated_at' => '2023-08-30 18:45:58',
            ),
            16 =>
            array(
                'id' => 17,
                'username' => 'fakashoob',
                'email' => 'fakashoob@du.edu.om',
                'name' => 'فاطمة سالم كشوب',
                'password' => '$2y$10$uHuoeBOdTxgboBzvnYuMdes50mxikEmMUKhCopHeBsY.RIzXzxabi',
                'cardno' => 0,
                'remember_token' => null,
                'created_at' => '2023-08-30 18:46:24',
                'updated_at' => '2023-08-30 18:46:24',
            ),
        ));


    }
}
