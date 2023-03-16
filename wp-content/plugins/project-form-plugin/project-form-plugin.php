<?php

/**
 * @package projectFormPlugin
 */
/**
 * Plugin Name: Project Form Plugin
 * Plugin URI: http://cohort8.....
 * Description: This is our project Form plugin
 * version: 1.0.0
 * Author: cohort8
 * Author URI: http://cohort8.....
 * 
 */

 if(!defined('ABSPATH')){
    die;
 }

 if(class_exists(('ProjectForm'))){
    class ProjectForm{
        public function __construct(){
            $this->pass_project_data_to_db();
        }
        public function activate(){
            $this-> $this->create_table_to_db();
            flush_rewrite_rules();
        }
        public function deactivate(){
            flush_rewrite_rules();
        }
        function create_table_db(){
            global $wpdb;
            $table =$wpdb->prefix.'project';
            $charset = $wpdb->get_charset_collate();
        
            $project ="CREATE TABLE IF NOT EXISTS".$table."(
                name text NOT NULL,
                start text NOT NULL,
                end text NOT NULL,
                description text NOT NULL,
                instruction text NOT NULL
            )$charset;";
            require_once(ABSPATH. 'wp-admin/includes/upgrade.php');
            dbDelta($project);
        }
        function pass_project_data_to_db(){
            if (isset($_POST['submitproject'])) {
                $data = array(
                    'name'=>$_POST['name'],
                    'start'=>$_POST['start'],
                    'end'=>$_POST['end'],
                    'description'=>$_POST['description'],
                    'instruction'=>$_POST['instruction'],
                );
                global $wpdb;
                $table =$wpdb->prefix.'project';
                $result=$wpdb->insert($table, $data, $format=null);
                $this->create_table_db();
                $this->pass_project_data_to_db();
        
                if ($result == true) {
                    echo "<script>alert('Message sent successfully')</script>";
                } else {
                    echo "<script>alert('Message not sent')</script>";
                }
        
            }
        }
    }
    $projects = new ProjectForm();
    register_activation_hook(__FILE__, array($projects ,'activate'));

    //deactivate
    register_deactivation_hook(__FILE__, array($projects ,'deactivate'));
 }