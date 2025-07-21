<?php get_header(); ?>
<h1>This is the header area</h1>
<?php 
while(have_posts()){
    the_post();?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
<?php
}
?>
<?php get_footer(); ?>






<p>This is the footer area</p>


<?php 
echo 2+2;

?>
<?php 
function myFirstFunction() {
    echo "<p>We are done with the first function</p>";
}
myFirstFunction();
?>

<?php 
function greet($name, $color) {
    echo "<p>Hi, my name is $name and my favourite color is $color</p>";
}
greet('John','blue');
greet('Jane','green');
?>


<h1><?php bloginfo('name');
?></h1>
<p><?php bloginfo('description');
?></p>


<?php 
$names = array('Brenda','John','Jane');
$count = 1;

while($count < 101) {
    echo "<li>$count</li>";
    $count++;

}
?>

