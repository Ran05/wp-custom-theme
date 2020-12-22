<div class="comments">

    <?php
    $args = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 80,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
        'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
    );
    
    
    ?>

    <?php wp_list_comments($args, $comments); 
    
    $comments_args = array(

        'label_submit' => 'Send',
        'class_submit' => 'btn btn-primary',
        'title_reply' => 'Write a reply or comment',
        'comment_notes_after' => 'Beware abuse comment',
        'comment_field' => '<p class="comment-form-comment"><label>Write Comments</label>
        <textarea id="comment" name="comment" cols="35" rows="8" maxlength="300" 
        required="required" class="form-control"></textarea></p>'

    );
    comment_form($comments_args);
    
    
    ?>



</div>