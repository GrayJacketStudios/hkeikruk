<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class CloudbedsButton extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = ['use_jquery_for_ajax_calls' => true];
    public $encryptParams = false;

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.cloudbeds_button', [
            'config' => $this->config,
        ]);
    }

    public function placeholder()
{
    return 'Loading...';
}
}
