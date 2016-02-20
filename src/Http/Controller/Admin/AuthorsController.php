<?php namespace Anomaly\PrspModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Support\Request;
use Mail;
use Anomaly\Streams\Platform\Support\Collection;
use Anomaly\PrspModule\Author\AuthorModel;
use Anomaly\PrspModule\Author\Form\AuthorFormBuilder;
use Anomaly\PrspModule\Author\Table\AuthorTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Http\Middleware\ForceHttps;

class AuthorsController extends AdminController
{

    public function index(AuthorTableBuilder $table)
    {
        return $table->render();

    }

    /**
     * Create a new entry.
     *
     * @param AuthorFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(AuthorFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param AuthorFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(AuthorFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    public function push($id)
    {
        $model = AuthorModel::findOrNew($id);
        $show = new Collection($model);
        //$entry  = array(['id'=> $show->id, 'content'=> $show->content]);
        //dd($entry);

        Mail::send('theme::emails/welcome',['id'=> $show->id, 'content'=> $show->content], function ($message){
            $message->from('hazzy@smspyro.com', 'Laravel')/*->from('test@test.com')*/->subject('Job Alert');
            $message->to('azkim100@yahoo.com');
        });
    }


}