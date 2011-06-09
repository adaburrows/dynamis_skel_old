<?php

/*
 * Main class
 * ----------
 * Demo of a standard dynamis controller
 * =============================================================================
 */
class main extends controller {
    protected $hello;
    /*
     * initialize()
     * ------------
     * Called when app::dispatch() loads the class.
     * =========================================================================
     */
    public function initialize() {
        // Call the parent implementation of the function
        parent::initialize();
        // grab the 'hello' model
        $this->hello = self::getModel('hello');
    }

    /*
     * index()
     * -------
     * Main function called when no other method is specified in the route.
     *
     * All functions MUST return an array. This array contains key value pairs
     * used to populate variables in the view.
     * =========================================================================
     */
    public function index() {
        $data = array(
            'title' => "This is the page title."
        );
        $data['paragraph'] = "That you for trying out my framework. Enjoy building some awesome apps!";
        return $data;
    }

    /*
     * hello()
     * -------
     * Called when /hello is the relative path, because of the routes file.
     *
     * All functions MUST return an array. This array contains key value pairs
     * used to populate variables in the view.
     * =========================================================================
     */
    public function hello() {
        $data = array(
            'title' => "This is a greeting."
        );
        $data['hello'] = $this->hello->say_hi();
        return $data;
    }
}
