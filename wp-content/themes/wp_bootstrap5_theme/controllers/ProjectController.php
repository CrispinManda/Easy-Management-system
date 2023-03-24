<?php

class ProjectController {

    // Function to assign a project to a user
    public function assign_project($user_id, $project_id) {
        // Check if the user has already been assigned a project
        if ($this->is_assigned($user_id)) {
            return false;
        }
        
        // Assign the project to the user
        update_user_meta($user_id, 'project_id', $project_id);
        return true;
    }
    
    // Function to check if a user has been assigned a project
    public function is_assigned($user_id) {
        $project_id = get_user_meta($user_id, 'project_id', true);
        return !empty($project_id);
    }
    
    // Function to get the project assigned to a user
    public function get_assigned_project($user_id) {
        return get_user_meta($user_id, 'project_id', true);
    }
    
    // Function to reassign a project to a user
    public function reassign_project($user_id) {
        $project_id = $this->get_assigned_project($user_id);
        
        // Clear the user's assigned project
        delete_user_meta($user_id, 'project_id');
        
        // Reassign the project to another user
        $project = new Project();
        $project->reassign_project($project_id);
        
        return true;
    }
    
    // Function to get all projects assigned to a user
    public function get_user_projects($user_id) {
        $project_id = get_user_meta($user_id, 'project_id', true);
        if (!empty($project_id)) {
            $project = new Project();
            return $project->get_project($project_id);
        }
        return null;
    }
    
}
