<?php namespace Anomaly\PrspModule\Author;

use Anomaly\PrspModule\Author\Contract\AuthorRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class AuthorRepository extends EntryRepository implements AuthorRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var AuthorModel
     */
    protected $model;

    /**
     * Create a new AuthorRepository instance.
     *
     * @param AuthorModel $model
     */
    public function __construct(AuthorModel $model)
    {
        $this->model = $model;
    }
}
