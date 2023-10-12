<?php

return [
    'users' => [
        'roles' => [
            '1' => 'Quản trị viên',
            '2' => 'Người viết',
            '3' => 'Người dùng'
        ],

        'status' => [
            '0' => [
                'label' => 'Chưa kích hoạt',
                'class' => 'danger',
            ],
            '1' => [
                'label' => 'Kích hoạt',
                'class' => 'success',
            ],
        ],

        'genders' => [
            '1' => 'Nam',
            '2' => 'Nữ',
            '3' => 'Khác'
        ],
    ],

    'categories' => [
        'status' => [
            '0' => [
                'label' => 'Chưa kích hoạt',
                'class' => 'danger',
            ],
            '1' => [
                'label' => 'Kích hoạt',
                'class' => 'success',
            ],
        ],
    ],

    'tags' => [
        'status' => [
            '1' => [
                'label' => 'Chưa kích hoạt',
                'class' => 'danger',
            ],
            '2' => [
                'label' => 'Kích hoạt',
                'class' => 'success',
            ],
        ],
    ],

    'posts' => [
        'status' => [
            '1' => [
                'label' => 'Chưa kích hoạt',
                'class' => 'danger',
            ],
            '2' => [
                'label' => 'Kích hoạt',
                'class' => 'success',
            ],
        ],
    ],
];