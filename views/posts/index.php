<a href='?controller=posts&action=addPosts'>Add Posts</a>
<p>Here is a list of all posts: </p>
<?php foreach ($posts as $post) { ?>
	<p>
		<?php echo $post->id; ?>
		<a href='?controller=posts&action=show&id=<?php echo $post -> id; ?>'>See content</a>
	</p>
<?php } ?>
