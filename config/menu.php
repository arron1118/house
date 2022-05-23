<?php

return [
    [
        'url' => 'normal',
        'title' => '常规管理',
        'icon' => ['fas', 'bars'],
        'child' => [
            [
                'url' => 'dashboard',
                'title' => '控制台',
                'icon' => ['fas', 'gauge-high'],
            ],
            [
                'url' => 'users',
                'title' => '用户管理',
                'icon' => ['fas', 'users'],
                'child' => [
                    [
                        'url' => 'userList',
                        'title' => '用户列表',
                        'icon' => ['fas', 'users'],
                        'child' => [
                            [
                                'url' => 'normalUsers',
                                'title' => '普通用户',
                                'icon' => ['fas', 'users']
                            ]
                        ]
                    ],
                    [
                        'url' => 'userRecycle',
                        'title' => '回收站',
                        'icon' => ['fas', 'recycle'],
                    ]
                ],
            ]
        ],
    ],
    [
        'url' => 'system',
        'title' => '系统管理',
        'icon' => ['fab', 'windows'],
        'child' => [
            [
                'url' => '#',
                'title' => '系统设置',
                'icon' => ['fas', 'gear'],
            ]
        ]
    ]
];
