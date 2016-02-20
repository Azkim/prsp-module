<?php namespace Anomaly\PrspModule\Author\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class AuthorTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'title',
        'audience'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'title',
        'audience',
        'content'
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete',
        'publish'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
