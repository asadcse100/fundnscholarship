<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'school_college_versity' => [
            'driver'   => 'session',
            'provider' => 'school_college_versities',
        ],

        'school_college_versity' => [
            'driver'   => 'session',
            'provider' => 'school_college_versities',
        ],

        'student' => [
            'driver'   => 'session',
            'provider' => 'students',
        ],

        'individual' => [
            'driver'   => 'session',
            'provider' => 'individuals',
        ],

        'welfare' => [
            'driver'   => 'session',
            'provider' => 'welfares',
        ],

        'institution' => [
            'driver'   => 'session',
            'provider' => 'institutions',
        ],

        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],      

    //For Admin
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'admin-api' => [
            'driver' => 'token',
            'provider' => 'admins',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'school_college_versities' => [
            'driver' => 'eloquent',
            'model'  => App\SchoolCollegeVersity::class,
        ],

        'school_college_versities' => [
            'driver' => 'eloquent',
            'model'  => App\SchoolCollegeVersity::class,
        ],

        'students' => [
            'driver' => 'eloquent',
            'model'  => App\Student::class,
        ],

        'individuals' => [
            'driver' => 'eloquent',
            'model'  => App\Individual::class,
        ],

        'welfares' => [
            'driver' => 'eloquent',
            'model'  => App\Welfare::class,
        ],

        'institutions' => [
            'driver' => 'eloquent',
            'model'  => App\Institution::class,
        ],

        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],        

        //for Admin
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'school_college_versities' => [
            'provider' => 'school_college_versities',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'school_college_versities' => [
            'provider' => 'school_college_versities',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'students' => [
            'provider' => 'students',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'individuals' => [
            'provider' => 'individuals',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'welfares' => [
            'provider' => 'welfares',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'institutions' => [
            'provider' => 'institutions',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],        

        //For Admin
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
