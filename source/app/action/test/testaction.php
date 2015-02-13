<?php
/*
 * FreshFramework
 * written by Arjen Schumacher
 * 2015
 * -----------------------------------
 * e-mail:  arjen.schumacher@gmail.com
 * twitter: @onkelarie
 */

namespace app\action\test;

use base\Sendmail;

/**
 * Class constructor
 */
class TestAction
{

    /**
     * Mandatory application data
     * @var object 
     */
    protected $appData = null;

    /**
     * Template for this class
     * @var string
     */
    protected $template = 'default';

    /**
     * Class constructor
     * @param object \Base\Application
     */
    function __construct($data = null)
    {
        $this->mail = new Sendmail();
    }

    /**
     * Main function
     */
    public function run()
    {
        $this->appData->view->setTemplate($this->template);
        $this->appData->view->run();
    }

}
