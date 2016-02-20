<?php namespace Anomaly\PrspModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class PrspModule extends Module
{

    /**
     * The navigation icon.
     *
     * @var string
     */
    protected $icon = 'envelope';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'author'=> [
            'buttons' => [
                'new_content'=>[
                    'text'=>'New Content',
                    'icon'=>'comments'
                ]
            ]
        ]
    ];

}
