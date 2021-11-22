<?php
    return [
        'view' => [
            'title' => 'Kayıt Ol',
            'first_name' => 'Adınız',
            'last_name' => 'Soyadınız',
            'email' => 'Email Adresiniz',
            'phone' => 'Telefon Numaranız',
            'password' => 'Şifreniz',
            'password_conf' => 'Tekrar Şifreniz',
            'contract' => 'Koşulları Ve Şartları Kabul Ediyorum.',
            'register' => 'Kayıt Ol',
            "wordMinLength" => "Girdiğiniz Şifre Çok Kısa.",
            "wordMaxLength" => "Parolanız Çok Uzun.",
            "wordInvalidChar" => "Şifreniz Geçersiz Bir Karakter İçeriyor.",
            "wordNotEmail" => "E-mail Adresinizi Şifreniz İçerisinde Kullanmayınız.",
            "wordSimilarToUsername" => "Kullanıcı Adınızı Şifreniz İçerisinde Kullanmayınız.",
            "wordTwoCharacterClasses" => "Başka Karakter Sınıfı Kullanınız.",
            "wordRepetitions" => "Çok Fazla Tekrar Var.",
            "wordSequences" => "Şifreniz Dizi İçermektedir.",
            "errorList" => "Hatalar:",
            "veryWeak" => "Çok Zayıf.",
            "weak" => "Zayıf.",
            "normal" => "Normal.",
            "medium" => "Orta.",
            "strong" => "Güçlü.",
            "veryStrong" => "Çok Güçlü.",
            "notMatch" => "Girmiş Olduğunuz Şifreler Birbiriyle Uyuşmuyor.",
            "lang" => "tr",
        ],
        'controller' => [
            'validation' => [
                'first_name' => [
                    'required' => 'Adınız Alanı Zorunlu Bir Alandır. Lütfen Tekrar Deneyin.',
                    'string' => 'Adınız Alanı Sadece Alfabetik Karakterlerden Oluşabilir. Lütfen Tekrar Deneyin.',
                    'min_length' => 'Adınız Alanı Minimum 2 Karakterden Oluşabilir. Lütfen Tekrar Deneyin.',
                    'max_length' => 'Adınız Alanı Maximum 70 Karakterden Oluşabilir. Lütfen Tekrar Deneyin.',
                ],
                'sur_name' => [
                    'required' => 'Soyadınız Alanı Zorunlu Bir Alandır. Lütfen Tekrar Deneyin.',
                    'string' => 'Soyadınız Alanı Sadece Alfabetik Karakterlerden Oluşabilir. Lütfen Tekrar Deneyin.',
                    'min_length' => 'Soyadınız Alanı Minimum 2 Karakterden Oluşabilir. Lütfen Tekrar Deneyin.',
                    'max_length' => 'Soyadınız Alanı Maximum 70 Karakterden Oluşabilir. Lütfen Tekrar Deneyin.',
                ],
                'email' => [
                    'required' => 'Email Alanı Zorunlu Bir Alandır. Lütfen Tekrar Deneyin.',
                    'valid_email' => 'Email Alanı Geçerli Bir Email Adresi İçermelidir. Lütfen Tekrar Deneyin.',
                ],
                'phone' => [
                    'required' => 'Telefon Numaranız Alanı Zorunlu Bir Alandır. Lütfen Tekrar Deneyin.',
                    'min_length' => 'Telefon Numaranız Alanı Minimum 11 Karakterden Oluşabilir. Lütfen Tekrar Deneyin.',
                    'max_length' => 'Telefon Numaranız Alanı Maximum 22 Karakterden Oluşabilir. Lütfen Tekrar Deneyin.',
                ],
                'password' => [
                    'required' => 'Şifreniz Alanı Zorunlu Bir Alandır. Lütfen Tekrar Deneyin.',
                    'min_length' => 'Şifreniz Alanı Minimum 7 Karakterden Oluşabilir. Lütfen Tekrar Deneyin.',
                    'max_length' => 'Şifreniz Alanı Maximum 255 Karakterden Oluşabilir. Lütfen Tekrar Deneyin.',
                ],
                'password_conf' => [
                    'required' => 'Tekrar Şifreniz Alanı Zorunlu Bir Alandır. Lütfen Tekrar Deneyin.',
                    'min_length' => 'Tekrar Şifreniz Alanı Minimum 7 Karakterden Oluşabilir. Lütfen Tekrar Deneyin.',
                    'max_length' => 'Tekrar Şifreniz Alanı Maximum 255 Karakterden Oluşabilir. Lütfen Tekrar Deneyin.',
                    'matches' => 'Girmiş Olduğunuz Şifreler Birbiriyle Eşleşmiyor. Lütfen Tekrar Deneyin.',
                ],
            ],
            "success_register" => 'Kayıt İşlemi Başarılı. Doğrulama Maili Girmiş Olduğunuz E-posta Adresinize Gönderilmiştir. Lütfen E-Postanızı Kontrol Ediniz.',
            "error_email" => "Email Gönderimi Sırasında Bir Hata Oluştu."
        ]
    ];