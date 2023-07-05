<!-- If we have a post for the specific page we are on, while we are on that page show the post -->

<?php if(have_posts()){
while (have_posts()) {
  the_post();
  the_content();
 }
}
?>