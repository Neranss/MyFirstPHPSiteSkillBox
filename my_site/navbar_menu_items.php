<?php $activePage = 0;
$pages = ['Обо мне', 'Мои проекты', 'Контакты'];
?>

<?php
    for ($currentPage = 0; $currentPage < count($pages); $currentPage += 1){
        echo '<li class=\'nav-item\'><a class=\'nav-link' . (($currentPage == $activePage) ? ' active' : '') . '\' href=\'#\'>' . $pages[$currentPage] . '</a></li>';
    }
?>