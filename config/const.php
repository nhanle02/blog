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
];