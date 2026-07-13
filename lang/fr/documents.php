<?php

return [
    'title' => 'Documents',
    'empty-categories' => 'Documents non disponibles.',
    'download' => 'Télécharger',

    'categories' => [

        'cat-1' => [
            'name' => 'Générale',
            'directory' => 'documents',
            'files' => [
                'file-1' => [
                    'name' => 'Programme',
                    'type' => 'pdf',
                    'filename' => '2026_cbfe_programme.pdf',
                ],

                'file-2' => [
                    'name' => "À lire - Détails avant la conférence",
                    'type' => 'pdf',
                    'filename' => '2026_cbfe_communique_participants_fr.pdf',                
                ],

                'file-3' => [
                    'name' => 'Visite guidée après la conférence (Invités)',
                    'type' => 'pdf',
                    'filename' => '2026_cbfe_info_fr.pdf',                
                ],

                "file-4" => [
                    "name" => "Groupe d'études biblique",
                    "type" => "pdf",
                    "filename" => "2026_cbfe_gbs.pdf",                
                ],
            ],
        ],

        'cat-2' => [
            'name' => 'Questionnaires',
            'directory' => 'documents/questionnaires',
            'files' => [
                'file-1a' => [
                    'name' => 'Tu as les paroles de la vie éternelle',
                    'passage' => 'Jean 6.25-71',
                    'link' => 'https://www.biblegateway.com/passage/?search=Jean%206%3A25-71&version=SG21',
                    'type' => 'pdf',
                    'filename' => 'jn_06.25-71.q.fr.pdf',
                ],

                'file-1b' => [
                    'name' => 'Tu as les paroles de la vie éternelle',
                    'passage' => 'Jean 6.25-71',
                    'link' => 'https://www.biblegateway.com/passage/?search=Jean%206%3A25-71&version=SG21',
                    'type' => 'docx',
                    'filename' => 'jn_06.25-71.q.fr.docx',
                ],
                
                'file-2a' => [
                    'name' => 'Jésus, la lumière du monde',
                    'passage' => 'Jean 9.1-41',
                    'link' => 'https://www.biblegateway.com/passage/?search=Jean%209%3A1-41&version=SG21',
                    'type' => 'pdf',
                    'filename' => 'jn_09.01-41.q.fr.pdf',
                ],

                'file-2b' => [
                    'name' => 'Jésus, la lumière du monde',
                    'passage' => 'Jean 9.1-41',
                    'link' => 'https://www.biblegateway.com/passage/?search=Jean%209%3A1-41&version=SG21',
                    'type' => 'docx',
                    'filename' => 'jn_09.01-41.q.fr.docx',
                ],
            ],
        ],          
    ],

];