<?php

return [

    'title' => 'Documents',
    'empty-categories' => 'No document categories available.',

    'categories' => [

        'cat-1' => [
            'name' => 'General',
            'directory' => 'documents',
            'files' => [
                'file-1' => [
                    'name' => 'Conference Program',
                    'type' => 'pdf',
                    'filename' => '2026_cbfe_programme.pdf',
                ],
            ],
        ],

        'cat-2' => [
            'name' => 'Questionnaires',
            'directory' => 'documents/questionnaires',
            'files' => [
                'file-1' => [
                    'name' => 'You Have The Words of Eternal Life',
                    'passage' => 'John 6:25-71',
                    'type' => 'pdf',
                    'filename' => 'jn_06.25-71.q.fr.pdf',
                ],
                
                'file-2' => [
                    'name' => 'Jesus, the Light of the World',
                    'passage' => 'John 9:1-41',
                    'type' => 'pdf',
                    'filename' => 'jn_09.1-41.q.fr.pdf',
                ],
            ],
        ],          
    ],

];