<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'pinned_topics' => 'Закачени Теми',
    'slogan' => "опасно е да играете сами.",
    'subforums' => 'Подфоруми',
    'title' => 'osu! форум',

    'covers' => [
        'edit' => 'Промяна на корица',

        'create' => [
            '_' => 'Задай изображение за корица',
            'button' => 'Качи изображение',
            'info' => 'Размерът на изображението за корица трябва да е :dimensions. Може да се влачи изображението до тук, за качане.',
        ],

        'destroy' => [
            '_' => 'Премахни изображението от корицата',
            'confirm' => 'Сигурни ли сте, че искате да премахнете изображението на корицата?',
        ],
    ],

    'forums' => [
        'latest_post' => 'Последна публикация',

        'index' => [
            'title' => 'Начало на форум',
        ],

        'topics' => [
            'empty' => 'Няма теми!',
        ],
    ],

    'mark_as_read' => [
        'forum' => 'Отбележи форума като прочетен',
        'forums' => 'Отбележи форумите като прочетени',
        'busy' => 'Отбележи като прочетено...',
    ],

    'post' => [
        'confirm_destroy' => 'Наистина ли искате да изтриете публикацията?',
        'confirm_restore' => 'Наистина ли искате да възстановите публикацията?',
        'edited' => 'Последно редактирано от :user :when, общо :count_delimited път.|Последно редактирано от :user :when, общо :count_delimited пъти.',
        'posted_at' => 'публикувано :when',
        'posted_by' => 'публикуван от :username',

        'actions' => [
            'destroy' => 'Изтриване на публикация',
            'edit' => 'Промяна на публикация',
            'report' => 'Докладване на мнение',
            'restore' => 'Възстанови публикация',
        ],

        'create' => [
            'title' => [
                'reply' => 'Нов отговор',
            ],
        ],

        'info' => [
            'post_count' => ':count_delimited публикация|:count_delimited публикации',
            'topic_starter' => 'Автор на Темата',
        ],
    ],

    'search' => [
        'go_to_post' => 'Отиди до публикацията',
        'post_number_input' => 'въведи номер на публикация',
        'total_posts' => 'общо :posts_count публикации',
    ],

    'topic' => [
        'confirm_destroy' => 'Наистина ли изтривате темата?',
        'confirm_restore' => 'Наистина ли възстановявате темата?',
        'deleted' => 'изтрита тема',
        'go_to_latest' => 'виж най-новата публикация',
        'has_replied' => 'Вече отговорихте на тази тема',
        'in_forum' => 'в :forum',
        'latest_post' => ':when от :user',
        'latest_reply_by' => 'последно отговори :user',
        'new_topic' => 'Създай нова тема',
        'new_topic_login' => 'Моля, влез в профила си, за публикуване',
        'post_reply' => 'Публикуване',
        'reply_box_placeholder' => 'Пишете тук да отговорите',
        'reply_title_prefix' => 'Отговор',
        'started_by' => 'от :user',
        'started_by_verbose' => 'започнато от :user',

        'actions' => [
            'destroy' => 'Изтриване на тема',
            'restore' => 'Възстанови тема',
        ],

        'create' => [
            'close' => 'Затвори',
            'preview' => 'Преглед',
            // TL note: this is used in the topic reply preview, when
            // the user goes back from previewing to editing the reply
            'preview_hide' => 'Запиши',
            'submit' => 'Публикуване',

            'necropost' => [
                'default' => 'Тази тема е неактивна от известно време. Пишете тук само ако имате конкретна причина.',

                'new_topic' => [
                    '_' => "Тази тема е неактивна от известно време. Ако нямате конкретна причина да пишете тук, моля вместо това :create: .",
                    'create' => 'създай нова тема',
                ],
            ],

            'placeholder' => [
                'body' => 'Въведи съдържанието на публикацията тук',
                'title' => 'Кликни тук да зададеш заглавие',
            ],
        ],

        'jump' => [
            'enter' => 'кликни да зададеш конкретен номер на публикация',
            'first' => 'иди в началото',
            'last' => 'иди в края',
            'next' => 'напред с 10 съобщения',
            'previous' => 'назад с 10 съобщения',
        ],

        'post_edit' => [
            'cancel' => 'Отмени',
            'post' => 'Запази',
        ],
    ],

    'topic_watches' => [
        'index' => [
            'title_compact' => 'форум абонаменти',

            'box' => [
                'total' => 'Абонирани дискусии',
                'unread' => 'Дискусии с нов отговор',
            ],

            'info' => [
                'total' => 'Абонирани сте за :total дискусия/и.',
                'unread' => 'Имате :unread непрочетен/и отговор/а за дискусии от абонамента ви.',
            ],
        ],

        'topic_buttons' => [
            'remove' => [
                'confirmation' => 'Отписване на абонамент от тази дискусия?',
                'title' => 'Отписване',
            ],
        ],
    ],

    'topics' => [
        '_' => 'Дискусии',

        'actions' => [
            'login_reply' => 'Моля, влез в профила си, за да отговорите',
            'reply' => 'Отговор',
            'reply_with_quote' => 'Цитирай в отговора',
            'search' => 'Търсене',
        ],

        'create' => [
            'create_poll' => 'Създаване на анкета',

            'preview' => 'Предварителен преглед',

            'create_poll_button' => [
                'add' => 'Създай анкета',
                'remove' => 'Отмени създаването на анкета',
            ],

            'poll' => [
                'hide_results' => 'Скрий резултатите от анкетата.',
                'hide_results_info' => 'Ще бъдат показани след края на гласуването.',
                'length' => 'отворена за:',
                'length_days_suffix' => 'дни',
                'length_info' => '(остави празно за безкрайна анкета)',
                'max_options' => 'брой отговори:',
                'max_options_info' => '(възможният брой отговори, които потребител може да избере)',
                'options' => 'Отговори',
                'options_info' => 'Постави всеки отговор на нов ред. Може да се въведат до 10 отговора.',
                'title' => 'Въпрос',
                'vote_change' => 'Позволи повторно гласуване.',
                'vote_change_info' => 'Ако е включено, потребителите ще могат да променят своя глас.',
            ],
        ],

        'edit_title' => [
            'start' => 'Промени заглавие',
        ],

        'index' => [
            'feature_votes' => 'приоритет по звезди',
            'replies' => 'отговор',
            'views' => 'прегледи',
        ],

        'issue_tag_added' => [
            'to_0' => 'Премахни етикета "добавен"',
            'to_0_done' => 'Премахнат е етикетът "добавен"',
            'to_1' => 'Сложи етикет "добавен"',
            'to_1_done' => 'Сложен е етикет "добавен"',
        ],

        'issue_tag_assigned' => [
            'to_0' => 'Премахни етикета "възложен"',
            'to_0_done' => 'Премахнат е етикетът "възложен"',
            'to_1' => 'Сложи етикет "възложен"',
            'to_1_done' => 'Сложен е етикет "възложен"',
        ],

        'issue_tag_confirmed' => [
            'to_0' => 'Премахни етикета "потвърден"',
            'to_0_done' => 'Премахнат е етикетът "потвърден"',
            'to_1' => 'Сложи етикет "потвърден"',
            'to_1_done' => 'Сложен е етикет "потвърдено"',
        ],

        'issue_tag_duplicate' => [
            'to_0' => 'Премахни етикета "дубликат"',
            'to_0_done' => 'Премахната марка "дубликат"',
            'to_1' => 'Сложи етикет "дубликат"',
            'to_1_done' => 'Сложен е етикет "дубликат"',
        ],

        'issue_tag_invalid' => [
            'to_0' => 'Премахни етикета "невалиден"',
            'to_0_done' => 'Премахнат е етикетът "невалиден"',
            'to_1' => 'Сложи етикет "невалиден"',
            'to_1_done' => 'Сложен е етикет "невалиден"',
        ],

        'issue_tag_resolved' => [
            'to_0' => 'Премахни етикета "разрешен"',
            'to_0_done' => 'Премахнат е етикетът "разрешен"',
            'to_1' => 'Сложи етикет "разрешен"',
            'to_1_done' => 'Сложен е етикет "разрешен"',
        ],

        'lock' => [
            'is_locked' => 'Тази дискусия е заключена и не може да се отговари на нея',
            'to_0' => 'Отключи дискусия',
            'to_0_confirm' => 'Отключи дискусията?',
            'to_0_done' => 'Дискусията е отключена',
            'to_1' => 'Заключи дискусия',
            'to_1_confirm' => 'Заключване на дискусия?',
            'to_1_done' => 'Дискусията е заключена',
        ],

        'moderate_move' => [
            'title' => 'Премести в друг форум',
        ],

        'moderate_pin' => [
            'to_0' => 'Премахни от закачени',
            'to_0_confirm' => 'Премахни от закачени?',
            'to_0_done' => 'Темата е премахната от закачени',
            'to_1' => 'Закачи тема',
            'to_1_confirm' => 'Закачи тема?',
            'to_1_done' => 'Темата е закачена',
            'to_2' => 'Закачи темата и я отбележи като уведомление',
            'to_2_confirm' => 'Закачи темата и я отбележи като уведомление?',
            'to_2_done' => 'Темата бе закачена и я отбелязана като уведомление',
        ],

        'moderate_toggle_deleted' => [
            'show' => 'Покажи изтритите публикации',
            'hide' => 'Скрий изтритите публикации',
        ],

        'show' => [
            'deleted-posts' => 'Изтрити публикации',
            'total_posts' => 'Общ брой публикации',

            'feature_vote' => [
                'current' => 'Текущ приоритет: +:count',
                'do' => 'Разгласи тази молба',

                'info' => [
                    '_' => 'Това е :feature_request. Заявките за нови функции може да се гласуват само от :supporters.',
                    'feature_request' => 'заявка за функция',
                    'supporters' => 'поддръжници',
                ],

                'user' => [
                    'count' => '{0} няма гласове | {1} :count_delimited | [2,*] :count_delimited гласа',
                    'current' => 'Имате :votes оставащи гласа.',
                    'not_enough' => "Не разполагате с повече гласове",
                ],
            ],

            'poll' => [
                'edit' => 'Промяна на анкета',
                'edit_warning' => 'Редактиране на анкетата ще анулира текущите резултати!',
                'vote' => 'Гласувай',

                'button' => [
                    'change_vote' => 'Промяна на глас',
                    'edit' => 'Промени анкета',
                    'view_results' => 'Прескочи до резултатите',
                    'vote' => 'Гласувай',
                ],

                'detail' => [
                    'end_time' => 'Гласуването затваря в :time',
                    'ended' => 'Гласуването приключи в :time',
                    'results_hidden' => 'Резултатите ще бъдат показани след края на анкетата.',
                    'total' => 'Общ брой гласове: :count',
                ],
            ],
        ],

        'watch' => [
            'to_not_watching' => 'Не е отметнато',
            'to_watching' => 'Отметка',
            'to_watching_mail' => 'Отметка с известяване',
            'tooltip_mail_disable' => 'Включени известия. Кликни да изключиш',
            'tooltip_mail_enable' => 'Изключени известия. Кликни да включиш',
        ],
    ],
];
