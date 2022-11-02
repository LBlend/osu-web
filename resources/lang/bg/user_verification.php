<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'box' => [
        'sent' => 'Изпратихме писмо до :mail с код за потвърждение. Въведете кода.',
        'title' => 'Потвърждение на акаунт',
        'verifying' => 'Потвърждаване...',
        'issuing' => 'Издаване на нов код...',

        'info' => [
            'check_spam' => "Моля, проверете папка 'спам' ако не откривате писмото.",
            'recover' => "Ако нямате достъп до вашия имейл или не помните какво сте използвали, моля вижте :link.",
            'recover_link' => 'процедурата за възстановяване на имейл',
            'reissue' => 'Може също :reissue_link или :logout_link.',
            'reissue_link' => 'да поискате нов код',
            'logout_link' => 'излезете',
        ],
    ],

    'errors' => [
        'expired' => 'Кодът за потвърждение е с изтекъл срок, ново писмо е изпратено към пощата ви.',
        'incorrect_key' => 'Грешен код за потвърждение.',
        'retries_exceeded' => 'Грешен код за потвърждение. Лимитът за повторни опити е превишен, ново писмо е изпратено към пощата ви.',
        'reissued' => 'Нов код за потвърждение бе създаден, ново писмо е изпратено към пощата ви.',
        'unknown' => 'Изникна необичаен проблем, ново писмо е изпратено към пощата ви.',
    ],
];
