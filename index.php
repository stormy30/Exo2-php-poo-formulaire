
            <?php
            require 'form.php';
            $form = new Form($_POST);
            ?>

    <form action="#" method="post">
            <?php
            echo $form->input('username');
            echo $form->input('text');
            echo $form->submit();
            echo $form->select('option1','option2','option3');
            echo $form->textarea('votre texte', 'message');
             ?>
    </form>


