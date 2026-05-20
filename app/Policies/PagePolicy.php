<?php

namespace App\Policies;

use App\Models\User;

class PagePolicy
{
    public function update(User $user): bool
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }
}
