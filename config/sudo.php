<?php

return [

	/*
    |--------------------------------------------------------------------------
    | Sudo mode duration before password re-prompt
    |--------------------------------------------------------------------------
    |
    | The time (in minutes) that "sudo mode" is active for the existing
    | authenticated user before a reprompt. This time will reset if he logs-out
    | before the duration has been exhausted.
    |
    | Default is 120 minutes (two hours).
    |
    */
    'duration' => env("SUDO_DURATION", 120),

    /*
    |--------------------------------------------------------------------------
    | Sudo mode authentication username
    |--------------------------------------------------------------------------
    |
    | The attribute in your configured User model that represents the username
    | by which an individual authenticates.
    |
    | Default is "email".
    |
    */
    'username' => env("SUDO_USERNAME", "email"),

    /*
    |--------------------------------------------------------------------------
    | Sudo mode Auth::attempt() username key
    |--------------------------------------------------------------------------
    |
    | The username key used in the call to Auth::attempt() when trying the
    | provided user credentials. This is typically the first key in the array
    | that gets passed to Auth::attempt(). This is modifiable in order to allow
    | the package to conform to your custom auth driver.
    |
    | Default is "username".
    |
    */
    'auth_username_key' => env("SUDO_AUTH_USERNAME_KEY", "username"),

    /*
    |--------------------------------------------------------------------------
    | Sudo mode Auth::attempt() password key
    |--------------------------------------------------------------------------
    |
    | The password key used in the call to Auth::attempt() when trying the
    | provided user credentials. This is typically the second key in the array
    | that gets passed to Auth::attempt(). This is modifiable in order to allow
    | the package to conform to your custom auth driver.
    |
    | Default is "password".
    |
    */
    'auth_password_key' => env("SUDO_AUTH_PASSWORD_KEY", "password"),

    /*
    |--------------------------------------------------------------------------
    | Sudo mode prompt only while masquerading
    |--------------------------------------------------------------------------
    |
    | This value only matters when used in conjunction with the Composer
    | package csun-metalab/laravel-directory-authentication to promote
    | further integration between the two packages.
    |
    | If this value is set to true then the user will only be re-prompted for
    | his password if he is masquerading as someone else. If not, he will NOT
    | be re-prompted; he will be able to perform the "sudo mode" actions
    | without having to re-enter his password.
    |
    | Default is false.
    |
    */
    'prompt_only_while_masquerading' => env("SUDO_PROMPT_ONLY_WHILE_MASQUERADING", false),

];