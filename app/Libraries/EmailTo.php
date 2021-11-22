<?php

    namespace App\Libraries;

    class EmailTo
    {
        /**
         * Create Variables
         */
        protected $email;
        protected $user;

        /**
         * Constructor
         */
        public function __construct()
        {
            /**
             * Call Email Service
             */
            $this->email = \Config\Services::email();

        }

        /**
         * @return $this
         * Settings
         */
        public function settings()
        {
            $this->email->initialize([
                'protocol' => 'smtp',
                'SMTPHost' => 'smtp.yandex.com.tr',
                'SMTPUser' => 'emrekilic@mutfakyapim.com',
                'SMTPPass' => 'mutfak35',
                'SMTPPort' => '465',
                'SMTPTimeout' => '60',
                'mailType' => 'html',
                'SMTPCrypto' => 'ssl',
                'validate' => true,
                'priority' => '1'
            ]);
            $this->email->setFrom('emrekilic@mutfakyapim.com', 'Model Arıyorum');
            return $this;
        }

        /**
         * @param $user
         * setUser
         */
        public function setUser($user)
        {
            $this->user = $user;
            $this->email->setTo($this->user->getEmail());
            return $this;
        }

        /**
         * @return $this
         * Account Verify
         */
        public function accountVerify()
        {
            $this->email->setSubject('Hesabınızı Doğrulayın.');
            $this->email->setMessage(mb_convert_encoding(view('admin/email/account-verify', ["user" => $this->user]),'HTML-ENTITIES', "UTF-8"));
            return $this;
        }

        /**
         * @return $this
         * Account Verify Successfully
         */
        public function accountVerifySucces()
        {
            $this->email->setSubject('Hesabınız Başarıyla Doğrulandı.');
            $this->email->setMessage(mb_convert_encoding(view('admin/email/account-verify-success', ["user" => $this->user]),'HTML-ENTITIES', "UTF-8"));
            return $this;
        }

        /**
         * @return $this
         * Forgot Password
         */
        public function forgotPassword()
        {
            $this->email->setSubject('Şifre Sıfırlama Talebi.');
            $this->email->setMessage(mb_convert_encoding(view('admin/email/forgot-password', ["user" => $this->user]),'HTML-ENTITIES', "UTF-8"));
            return $this;
        }

        /**
         * @return $this
         * Password Change Successfully
         */
        public function passwordChangeSuccess()
        {
            $this->email->setSubject('Şifreniz Başarıyla Sıfırlandı.');
            $this->email->setMessage(mb_convert_encoding(view('admin/email/password-change-success', ["user" => $this->user]),'HTML-ENTITIES', "UTF-8"));
            return $this;
        }

        /**
         * @return bool
         * Send Email
         */
        public function send()
        {
            return $this->email->send();
        }
    }