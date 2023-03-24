<?php
/**
 * @package PMS
 */

namespace Inc\Pages;

class Roles{
    public function register(){
        add_action( 'init', array($this, 'add_developer_role') );
        add_action( 'init', array($this, 'add_project_manager_role'));

    }

    public function add_developer_role() {
        $capabilities = array(
            'read'                      => true,
            'view_project_assignments'                => true,
            'complete_project-assignments'              => true,
            'receive_project_emails'              => true,
            'view_user_maps'             => true,

        );
    
        // Add the custom role with the capabilities of an author
        add_role( 'developer', 'Developer', $capabilities );
    }

    // Define the custom role and its capabilities
    function add_project_manager_role() {
        $capabilities = array(
            'manage_users' => true,
            'create_users' => true,
            'edit_users' => true,
            'delete_users' => true,
            'manage_options' => true,
            'view_user_maps' => true,

        );

        // Add the custom role with the capabilities of an editor
        add_role( 'project_manager', 'Project Manager', $capabilities );
    }

}