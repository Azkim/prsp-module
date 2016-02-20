<?php
/**
 * Created by PhpStorm.
 * User: Hazzy
 * Date: 1/9/2016
 * Time: 7:30 PM
 */

namespace Anomaly\PrspModule\Author;

use Illuminate\Auth\Guard;
use Anomaly\PostsModule\Post\Form\PostFormFields;

class AuthorPostFormFields extends PostFormFields
{
    public function handle(Guard $auth, PostFormBuilder $builder)
    {
        $builder->setFields(
            [
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
                'content' => 'anomaly.field_type.wysiwyg'
            ]
        );
    }
} 