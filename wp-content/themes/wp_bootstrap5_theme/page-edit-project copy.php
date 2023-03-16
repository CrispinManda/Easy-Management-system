<?php 
/**
 * Template Name: Edit Project
 */

get_header();
?>


<div class="container mt-5">
    <div class="row">
        <div class="col">
            <?php
            if (isset($_GET['post_id'])) {
                $post_id = intval($_GET['post_id']);
                // The Query
                $query = new WP_Query(array('post_type' => 'project', 'p' => $post_id));
                // The Loop
                if ($query->have_posts()):
                    while ($query->have_posts()) :
                        $query->the_post();
                        // your post content ( title, excerpt, thumb....)


                        
                        $project_start = get_post_meta(get_the_ID(), 'project_start', true);
                        $project_end = get_post_meta(get_the_ID(), 'project_end', true);
                        $project_status = get_post_meta(get_the_ID(), 'project_status_select', true);

                        $project_user_id = get_post_meta(get_the_ID(), 'project_user', true);

                        $project_user = '';
                        if ($project_user_id) {
                            $user_info = get_userdata($project_user_id);
                            if ($user_info) {
                                $project_user = $user_info->display_name;
                            }
                        }

            ?>
                    
            <form class="form card shadow p-4 mb-5"action="<?php echo esc_url( get_permalink() ); ?>" method="post">
    
                <h3 class="text-center text-primary">Edit Project</h3>
                <div class="form-group mt-2">
                    <label for="title"><?php _e('Enter the Project Title:', 'mytextdomain'); ?></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Project Title" value="<?php echo esc_attr( $post->post_title ); ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="content"><?php _e('Enter the Project Description:', 'mytextdomain'); ?></label>
                    <textarea rows="3" class="form-control" id="content" name="content" placeholder="Enter Project Description here"><?php echo esc_attr( $post->post_content ); ?></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="content">Start Date:</label>
                    <input type="date" class="form-control" id="start_date" name="start" placeholder="Enter Project Start Date here" value="<?php echo $project_start; ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="content">Due Date:</label>
                    <input type="date" class="form-control" id="due_date" name="deadline" placeholder="Enter Project Deadline here" value="<?php echo $project_end; ?>">
                </div>
                <div class="form-group mt-2">
                <select class="form-control" id="status" name="status">
                        <option value="Pending" <?php selected( $project_status, 'Pending' ); ?>>Pending</option>
                        <option value="In Progress" <?php selected( $project_status, 'In Progress' ); ?>>In Progress</option>
                        <option value="Completed" <?php selected( $project_status, 'Completed' ); ?>>Completed</option>
                    </select> 
                </div>
                <?php
                // Get all users with the "User" role
                $users = get_users( array(
                    'role'    => 'developer',
                    'orderby' => 'user_nicename',
                ) );
                $user_options = array();
                foreach ( $users as $user ) {
                    $user_options[ $user->ID ] = $user->display_name;
                }
                ?>
                <div class="form-group mt-2">
                    <select class="form-control" id="user" name="user">
                        <option value="">Select Developer</option>
                        <?php foreach ( $user_options as $user_id => $user_name ) : ?>
                            <option value="<?php echo $user_id; ?>" <?php selected( $project_user_id, $user_id ); ?>><?php echo $user_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mt-2 text-center">
                    <button class="btn btn-primary px-5" type="submit"><?php _e('Update', 'mytextdomain') ?></button>
                    <input type='hidden' name='update' id='update' value='update' />
                </div>
            </form>
            <?php
            
                    endwhile;
                endif;
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer();?>