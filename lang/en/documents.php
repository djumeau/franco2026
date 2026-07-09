<?php

return [

    'title' => 'Documents',
    'empty-categories' => 'Documents not available.',
    'download' => 'Download',

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
                'file-1a' => [
                    'name' => 'You Have the Words of Eternal Life',
                    'passage' => 'John 6:25-71',
                    'link' => 'https://www.biblegateway.com/passage/?search=John%206%3A25-71&version=NIV',
                    'type' => 'pdf',
                    'filename' => 'jn_06.25-71.q.en.pdf',
                ],

                'file-1b' => [
                    'name' => 'You Have the Words of Eternal Life',
                    'passage' => 'John 6:25-71',
                    'link' => 'https://www.biblegateway.com/passage/?search=John%206%3A25-71&version=NIV',
                    'type' => 'docx',
                    'filename' => 'jn_06.25-71.q.en.docx',
                ],
                
                'file-2a' => [
                    'name' => 'Jesus, the Light of the World',
                    'passage' => 'John 9:1-41',
                    'link' => 'https://www.biblegateway.com/passage/?search=John%209%3A1-41&version=NIV',
                    'type' => 'pdf',
                    'filename' => 'jn_09.1-41.q.en.pdf',
                ],

                'file-2b' => [
                    'name' => 'Jesus, the Light of the World',
                    'passage' => 'John 9:1-41',
                    'link' => 'https://www.biblegateway.com/passage/?search=John%209%3A1-41&version=NIV',
                    'type' => 'docx',
                    'filename' => 'jn_09.1-41.q.en.docx',
                ],
            ],
        ],          
    ],

];