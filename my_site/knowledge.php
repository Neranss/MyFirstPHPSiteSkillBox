<div>
    <h2 class="special_title">Что меня немного удивило в языке PHP</h2>
    <?php 
        $topic = "Переменные переменных - ";
        $unusualSyntax = "\${\$x}";
        $disclosure = "unusualSyntax";
        echo '<div style="text-align: center;" class="main_text">' . $topic . ${$disclosure} . '</div>';
    ?>
    <footer class="footer_text">
        <hr>
        <?php
            $a = "Я изучил основы PHP";
            $b = 15;
            $c = 2;
            $lastSymbol = chr(round($b * $c * 1.1));
            $lastText = base64_encode($a . $lastSymbol);
            echo $lastText;
        ?>
    </footer>
</div>