<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'last_name'  => ['required', 'string', 'max:25'],
            'first_name' => ['required', 'string', 'max:25'],
            'email'      => ['required', 'string', 'max:50', 'email', Rule::unique(User::class)],
            'password'   => $this->passwordRules(),
        ])->validate();

        return User::create([
            'last_name'  => $input['last_name'],
            'first_name' => $input['first_name'],
            'email'      => $input['email'],
            'password'   => Hash::make($input['password']),
        ]);
    }
}
