<?php namespace Anomaly\StreamsModule\Group\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class GroupFormBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GroupFormBuilder extends FormBuilder
{

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [
        'group' => [
            'tabs' => [
                'general'        => [
                    'title'  => 'anomaly.module.streams::tab.general',
                    'fields' => [
                        'name',
                        'slug',
                        'description',
                        'allowed_roles',
                    ],
                ],
                'virtualization' => [
                    'title'  => 'anomaly.module.streams::tab.virtualization',
                    'fields' => [
                        'virtualize',
                        'icon',
                    ],
                ],
            ],
        ],
    ];
}
