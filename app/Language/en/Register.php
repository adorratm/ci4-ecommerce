<?php
    return [
        'view' => [
            'title' => 'Register',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'password' => 'Password',
            'password_conf' => 'Password Confirmation',
            'contract' => 'I Agree With The Terms And Conditions.',
            'register' => 'Register',
            "wordMinLength" => "Your Password Is Too Short.",
            "wordMaxLength" => "Your Password Is Too Long.",
            "wordInvalidChar" => "Your Password Contains An Invalid Character.",
            "wordNotEmail" => "Do Not Use Your Email As Your Password.",
            "wordSimilarToUsername" => "Your Password Cannot Contain Your Username.",
            "wordTwoCharacterClasses" => "Use Different Character Classes.",
            "wordRepetitions" => "Too Many Repetitions.",
            "wordSequences" => "Your Password Contains Sequences.",
            "errorList" => "Errors:",
            "veryWeak" => "Very Weak.",
            "weak" => "Weak.",
            "normal" => "Normal.",
            "medium" => "Medium.",
            "strong" => "Strong.",
            "veryStrong" => "Very Strong.",
            "notMatch" => "The Passwords You Have Entered Do Not Match Each Other.",
            "lang" => "en",
        ],
        'controller' => [
            'validation' => [
                'first_name' => [
                    'required' => 'First Name Field Is A Required Field. Please Try Again.',
                    'string' => 'First Name Field Can Only Consist Of Alphabetical Characters. Please Try Again.',
                    'min_length' => 'First Name Field Can Be A Minimum Of 2 Characters. Please Try Again.',
                    'max_length' => 'First Name Field Can Contain A Maximum Of 70 Characters. Please Try Again.',
                ],
                'sur_name' => [
                    'required' => 'Surname Field Is A Required Field. Please Try Again.',
                    'string' => 'Surname Field Can Only Consist Of Alphabetical Characters. Please Try Again.',
                    'min_length' => 'Surname Field Can Be A Minimum Of 2 Characters. Please Try Again.',
                    'max_length' => 'Surname Field Can Contain A Maximum Of 70 Characters. Please Try Again.',
                ],
                'email' => [
                    'required' => 'Email Field Is A Required Field. Please Try Again.',
                    'valid_email' => 'Email Field Must Contain A Valid Email Address. Please Try Again.',
                ],
                'phone' => [
                    'required' => 'Phone Is A Required Field. Please Try Again.',
                    'min_length' => 'Phone Field Can Be A Minimum Of 11 Characters. Please Try Again.',
                    'max_length' => 'Phone Field Can Have A Maximum Of 22 Characters. Please Try Again.',
                ],
                'password' => [
                    'required' => 'Password Field Is A Required Field. Please Try Again.',
                    'min_length' => 'Password Field Can Be A Minimum Of 7 Characters. Please Try Again.',
                    'max_length' => 'Password Field Can Be A Maximum Of 255 Characters. Please Try Again.',
                ],
                'password_conf' => [
                    'required' => 'Password Confirmation Is A Required Field. Please Try Again.',
                    'min_length' => 'Password Confirmation Field Can Consist Of A Minimum Of 7 Characters. Please Try Again.',
                    'max_length' => 'Password Confirmation Field Can Consist Of A Maximum Of 255 Characters. Please Try Again.',
                    'matches' => 'The Passwords You Have Entered Do Not Match Each Other. Please Try Again.',
                ],
            ],
            "success_register" => 'Registration Successful. Confirmation Email Has Been Sent To Your E-mail Address You Entered. Please Check Your E-Mail.',
            "error_email" => "An Error Occurred While Sending Email."
        ]
    ];