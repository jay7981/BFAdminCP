<?php

return [

    'admin' => [
        'users' => [
            'listing' => [
                'table'  => [
                    'col1' => 'Username',
                    'col2' => 'Email',
                    'col3' => 'Role',
                    'col4' => 'Lang',
                    'col5' => 'Status',
                    'col6' => 'Created'
                ],
                'status' => [
                    'active'   => 'Active',
                    'inactive' => 'Inactive'
                ]
            ],

            'edit'    => [
                'details' => 'Details',
                'buttons' => [
                    'save'   => 'Save Changes',
                    'cancel' => 'Cancel',
                    'delete' => 'Delete User'
                ],
                'inputs'  => [
                    'username'       => ['label' => 'Username'],
                    'email'          => ['label' => 'Email'],
                    'role'           => ['label' => 'Role'],
                    'account_status' => ['label' => 'Status'],
                    'lang'           => ['label' => 'Language']
                ]
            ]
        ]
    ]

];
