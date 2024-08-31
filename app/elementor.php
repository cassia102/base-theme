<?php

if (!function_exists('is_plugin_active')) {
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
}

if (!is_plugin_active('elementor/elementor.php')) {
    return;
}

use Elementor\Plugin;
use Elementor\Core\Settings\Manager;
use Elementor\Controls_Manager;

add_action('init', function () {

    /**
     * Register custom Elementor widget category.
     */
    add_action('elementor/elements/categories_registered', function ($elements_manager) {
        $elements_manager->add_category(
            'site',
            [
                'title' => __('Site', 'site'),
                'icon' => 'fas fa-building',
            ]
        );
    });


    /**
     * Register custom Elementor widgets.
     */
    add_action('elementor/widgets/widgets_registered', function () {
        $widgetManager = Plugin::instance()->widgets_manager;

        // $widgetManager->register(new MyWidget());
    });

    /**
     * Register custom page settings.
     */
    add_action('elementor/element/wp-page/document_settings/before_section_end', function ($post) {
        $post->add_control(
            'hr',
            [
                'type' => Controls_Manager::DIVIDER,
            ]
        );

        if (!is_front_page()) {
            $post->add_control(
                'hide_header',
                [
                    'label' => __('Hide page header', 'debonair'),
                    'type' => Controls_Manager::SWITCHER,
                ]
            );
        }
    });
});

/**
 * Get a page setting.
 *
 * @param $key
 * @param $id
 * @return array|mixed|null
 */
function get_elementor_setting($key, $id = null)
{
    $page_settings_manager = Manager::get_settings_managers('page');
    $page_settings_model = $page_settings_manager->get_model($id ?? get_the_ID());
    return $page_settings_model->get_settings($key);
}
