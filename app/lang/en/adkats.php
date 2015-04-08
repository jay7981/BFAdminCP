<?php

return [

    'bans' => [
        'listing' => [
            'table' => [
                'col1' => 'ID',
                'col2' => 'Game',
                'col3' => 'Player',
                'col4' => 'Admin',
                'col5' => 'Status',
                'col6' => 'Issued',
                'col7' => 'Expires',
                'col8' => 'Enforcement',
                'col9' => 'Reason'
            ]
        ],

        'edit' => [
            'fields' => [
                'field1' => 'Player',
                'field2' => 'Admin',
                'field3' => 'Notes',
                'field4' => 'Reason',
                'field5' => 'Server',
                'field6' => 'Date &amp; Time',
                'field7' => 'Status',
                'field8' => 'Ban Type',
                'field9' => 'Enforce by GUID',
                'field10' => 'Enforce by Name',
                'field11' => 'Enforce by IP'
            ],

            'buttons' => [
                'submit' => [
                    'text1' => 'Save Changes',
                    'text2' => 'Please wait...',
                    'text3' => 'Unban'
                ],
                'cancel' => 'Cancel',
                'profile' => 'Return to Player Profile'
            ],

            'unban' => [
                'request_failed' => 'Request failed. Please try again later.',
                'prompt' => 'Enter unban reason'
            ]
        ]
    ]

];