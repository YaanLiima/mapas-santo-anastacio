<?php

return [
    'plugins' => [
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'Accessibility',
        'SpamDetector',
        'RecreatePCacheOnLogin',
        'Analytics',
        'Zammad' => [
            'namespace' => 'Zammad',
            'config' => [
                'enabled' => false,
                'url' => 'https://seu-servidor-zammad.com/assets/chat/chat.min.js',
                'background' => '#056614',
                'title' => 'Dúvidas? Fale conosco',
                'chatId' => 1,
                'instalacao' => 'cultura.santoanastacio.sp.gov.br',
                'estado' => 'SP',
            ],
        ],

        // ===== Aldir Blanc =====
        'AldirBlanc' => [
            'namespace' => 'AldirBlanc',
            'config' => [
                'homologacao_requer_validacao' => [],
                'consolidacao_requer_validacao' => ['dataprev', 'scge'],
            ],
        ],

        'AldirBlancDataprev' => [
            'namespace' => 'AldirBlancDataprev',
            'config' => [
                'exportador_requer_homologacao' => true,
                'consolidacao_requer_validacoes' => ['scge'],
            ],
        ],

        'SCGE' => [
            'namespace' => 'AldirBlancValidador',
            'config' => [
                'slug' => 'scge',
                'name' => 'SCGE',
                'exportador_requer_homologacao' => true,
                'exportador_requer_validacao' => [],
                'consolidacao_requer_validacoes' => ['dataprev'],
                'inciso1' => [
                    'CPF' => 33,
                ],
            ],
        ],
    ],
];
