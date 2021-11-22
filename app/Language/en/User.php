<?php
return [
    'model' => [
        'validation' => [
            'group_id' => [
                'required' => '"Grup ID" Zorunlu Alandır. Lütfen Tekrar Deneyin.',
                'numeric' => '"Grup ID" Sadece Sayılardan Oluşabilir. Lütfen Tekrar Deneyin.'
            ],
            'first_name' => [
                'required' => '"Adınız" Zorunlu Alandır. Lütfen Tekrar Deneyin.',
                'string' => '"Adınız" Sadece Alfabetik Karakterlerden Oluşmak Zorundadır. Lütfen Tekrar Deneyin.',
                'min_length' => '"Adınız" En Az 2 Karakterden Oluşmak Zorundadır. Lütfen Tekrar Deneyin.'
            ],
            'sur_name' => [
                'required' => '"Soyadınız" Zorunlu Alandır. Lütfen Tekrar Deneyin.',
                'string' => '"Soyadınız" Sadece Alfabetik Karakterlerden Oluşmak Zorundadır. Lütfen Tekrar Deneyin.',
                'min_length' => '"Soyadınız" En Az 2 Karakterden Oluşmak Zorundadır. Lütfen Tekrar Deneyin.'
            ],
            'email' => [
                'required' => '"Email" Zorunlu Alandır. Lütfen Tekrar Deneyin.',
                'valid_email' => '"Email" Alanı Geçerli Bir Mail Adresi İçermelidir. Lütfen Tekrar Deneyin.',
                'is_unique' => 'Girmiş Olduğunuz "Email" Adresi Sistemde Farklı Bir Kullanıcı Tarafından Kullanılıyor. Lütfen Tekrar Deneyin.',
            ],
            'phone' => [
                'required' => '"Telefon Numarası" Zorunlu Alandır. Lütfen Tekrar Deneyin.',
                'is_unique' => 'Girmiş Olduğunuz "Telefon Numarası" Sistemde Farklı Bir Kullanıcı Tarafından Kullanılıyor. Lütfen Tekrar Deneyin.',
            ],
            'password' => [
                'required' => '"Şifre" Zorunlu Alandır. Lütfen Tekrar Deneyin.',
            ],
            'verify_key' => [
                'required' => '"Doğrulama Anahtarı" Zorunlu Alandır. Lütfen Tekrar Deneyin.',
                'alpha' => '"Doğrulama Anahtarı" Sadece Alfabetik Karakterden Oluşmak Zorundadır. Lütfen Tekrar Deneyin.'
            ],
            'verify_code' => [
                'required' => '"Doğrulama Kodu" Sadece Sayılardan Oluşabilir. Lütfen Tekrar Deneyin.',
                'min_length' => '"Doğrulama Kodu" En Az 6 Karakterden Oluşmak Zorundadır. Lütfen Tekrar Deneyin.',
            ],
            'status' => [
                'required' => '"Kullanıcı Durumu" Zorunlu Alandır. Lütfen Tekrar Deneyin.',
                'string' => '"Kullanıcı Durumu" Sadece Alfabetik Karakterlerden Oluşmak Zorundadır. Lütfen Tekrar Deneyin.',
            ]
        ]
    ]
];