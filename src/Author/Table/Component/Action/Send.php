<?php
/**
 * Created by PhpStorm.
 * User: Hazzy
 * Date: 1/9/2016
 * Time: 6:02 PM
 */

namespace Anomaly\Streams\Platform\Ui\Table\Component\Action\Handler;

use Mail;
use Anomaly\Streams\Platform\Ui\Table\Component\Action\ActionHandler;
use Anomaly\Streams\Platform\Ui\Table\TableBuilder;
use Illuminate\Contracts\Bus\SelfHandling;

class Send extends  ActionHandler implements SelfHandling
{

    public function handle(TableBuilder $builder, array $selected)
    {
        $model = $builder->getTableModel();
        foreach ($selected as $id) {
            if ($entry = $model->find($id)) {
                Mail::send('theme::emails/welcome',['id'=> $entry->id, 'content'=> $entry->content, 'title'=> $entry->title], function ($message){
                    $message->from('hazzy@smspyro.com', 'Laravel')->subject('Job Alert');
                    $message->to('azkim100@yahoo.com');
                });
            }
        }
    }
}