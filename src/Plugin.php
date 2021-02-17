<?php


namespace ElementorWidget;


use ElementorWidget\includes\ElementorBooster;
use ElementorWidget\includes\Loader;
use ElementorWidget\includes\RequirementValidator;
use ElementorWidget\Widgets\ElementorWidget;

class Plugin
{
    /**
     * Constructor
     *
     * Loadiging default needs files, class and others
     *
     * @access  public
     * @since   1.0
     */
    public function __construct()
    {
        RequirementValidator::requirementsValidate();
        $this->loadElementorBooster();
        $this->loadElementor();
    }

    /**
     * Register all custome Elementor widgets
     */
    public function registerCustomEleWidgets()
    {
        // add Custom iframe widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new ElementorWidget());
    }

    /**
     * Initialize elementor data
     *
     * Load all elementor data
     *
     * Fired by `plugins_loaded` action hook.
     *
     * @access  public
     * @since   1.0
     */
    public function loadElementor()
    {
        Loader::addAction('elementor/widgets/widgets_registered', $this, 'registerCustomEleWidgets');
    }

    /**
     * Load Jays elementor booster things
     *
     * @access public
     * @since  1.0
     */
    public function loadElementorBooster()
    {
        new ElementorBooster();
    }

    /**
     * Run the loader to execute all of the hooks with WordPress.
     *
     * @since    1.0
     */
    public function run()
    {
        Loader::run();
    }

}