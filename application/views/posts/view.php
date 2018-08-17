
<br>
<h3><?php echo $post['title']; ?></h3>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
<br>
<img class="post-thumb" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>">	
<?php echo $post['body']; ?>

<hr>
<a style="margin:2px;" class="btn btn-primary pull-left" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug']; ?>">Edit</a> <?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit"  value="Delete" class="btn btn-danger">
</form>

