<?php

    namespace Config;

    use CodeIgniter\Validation\CreditCardRules;
    use CodeIgniter\Validation\FileRules;
    use CodeIgniter\Validation\FormatRules;
    use CodeIgniter\Validation\Rules;

    class Validation
    {
        //--------------------------------------------------------------------
        // Setup
        //--------------------------------------------------------------------

        /**
         * Stores the classes that contain the
         * rules that are available.
         *
         * @var string[]
         */
        public $ruleSets = [
            Rules::class,
            FormatRules::class,
            FileRules::class,
            CreditCardRules::class,
        ];

        /**
         * Specifies the views that are used to display the
         * errors.
         *
         * @var array<string, string>
         */
        public $templates = [
            'list' => 'CodeIgniter\Validation\Views\list',
            'single' => 'CodeIgniter\Validation\Views\single',
        ];

        //--------------------------------------------------------------------
        // Rules
        //--------------------------------------------------------------------

        public $register = [
            'first_name' => [
                'rules' => 'required|string|min_length[2]|max_length[70]',
                'errors' => [
                    'required' => 'Register.controller.validation.first_name.required',
                    'string' => 'Register.controller.validation.first_name.string',
                    'min_length' => 'Register.controller.validation.first_name.min_length',
                    'max_length' => 'Register.controller.validation.first_name.max_length',
                ]
            ],
            'sur_name' => [
                'rules' => 'required|string|min_length[2]|max_length[70]',
                'errors' => [
                    'required' => 'Register.controller.validation.sur_name.required',
                    'string' => 'Register.controller.validation.sur_name.string',
                    'min_length' => 'Register.controller.validation.sur_name.min_length',
                    'max_length' => 'Register.controller.validation.sur_name.max_length',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Register.controller.validation.email.required',
                    'valid_email' => 'Register.controller.validation.email.valid_email',
                ]
            ],
            'phone' => [
                'rules' => 'required|min_length[11]|max_length[22]',
                'errors' => [
                    'required' => 'Register.controller.validation.phone.required',
                    'min_length' => 'Register.controller.validation.phone.min_length',
                    'max_length' => 'Register.controller.validation.phone.max_length',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[7]|max_length[255]',
                'errors' => [
                    'required' => 'Register.controller.validation.password.required',
                    'min_length' => 'Register.controller.validation.password.min_length',
                    'max_length' => 'Register.controller.validation.password.max_length',
                ]
            ],
            'password_conf' => [
                'rules' => 'required|min_length[7]|max_length[255]|matches[password]',
                'errors' => [
                    'required' => 'Register.controller.validation.password_conf.required',
                    'min_length' => 'Register.controller.validation.password_conf.min_length',
                    'max_length' => 'Register.controller.validation.password_conf.max_length',
                    'matches' => 'Register.controller.validation.password_conf.matches',
                ]
            ],
        ];
    }
