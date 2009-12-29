<?php echo $form->create(NULL, array('url' => array('action' => 'login', 'admin' => TRUE))); ?>
    <fieldset>
        <legend>Log In</legend>
        <?php $session->flash(); ?>
        <?php echo $form->input('username', array('label' => 'Email Address')); ?>
        <?php echo $form->input('password', array()); ?>
    </fieldset>
    <?php echo $form->submit('Log In'); ?>
<?php echo $form->end(); ?>