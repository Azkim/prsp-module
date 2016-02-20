<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModulePrspCreateAuthorsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'authors',
        'title_column' => 'title',
        //'translatable' => 'true'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' =>
            [
                'required' => true
            ],
        'slug'  => [
            'required' => true,
            'unique'   => true
        ],
        'audience' =>
            [
                'required' => true,
            ],
        'content' =>
            [
                'required' => true,
            ]
    ];

}
