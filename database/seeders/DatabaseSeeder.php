<?php

namespace Database\Seeders;

use App\Models\Chat;
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
        $users = \App\Models\User::factory(4)->create();

        $users->each(function($user) use($users) {
            $users->filter(function($member) use($user) {
                return !$member->is($user);
            })->each(function($member) use($user) {
                $chatExists = $user->chats()->whereHas('users', function($query) use($member, $user) {
                    $query->whereIn('users.id', [$user->id, $member->id]);
                }, '=', 2)->exists();

                if(!$chatExists) {
                    $chat = Chat::create(['name' => 'test']);

                    $chat->users()->sync([$user->id, $member->id]);
                }
            });
        });
    }
}
