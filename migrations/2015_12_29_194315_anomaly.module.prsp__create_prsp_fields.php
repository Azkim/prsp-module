<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModulePrspCreatePrspFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title' =>'anomaly.field_type.text',
        'slug'        => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'title'
            ]
        ],
        'audience' => [
            'type' => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    'standard' => 'Standard Content',
                    'premium' => 'Premium Content'
                ]
            ]
        ],
        'content' => 'anomaly.field_type.textarea'
    ];

}
