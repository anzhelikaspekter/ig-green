<?php
$backtrace = debug_backtrace();

$callerFile = isset($backtrace[0]['file']) ? basename($backtrace[0]['file']) : '';

$listClass = '';
if ($callerFile === 'header.php') {
    $listClass = 'list--header';
} elseif ($callerFile === 'footer.php') {
    $listClass = 'list--footer';
}
?>

<ul class="list <?php echo $listClass; ?>">
    <li class="list__item active">
        <a href="#home" class="list__link">Home</a>
    </li>
    <li class="list__item">
        <a href="#mission" class="list__link">Our Mission</a>
    </li>
    <li class="list__item">
        <a href="#directions" class="list__link">Investment Directions</a>
    </li>
    <li class="list__item">
        <a href="#priorities" class="list__link">Our Priorities</a>
    </li>
</ul>