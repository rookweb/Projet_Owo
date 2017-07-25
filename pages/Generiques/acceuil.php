<?php $Auth->allow('admin'); ?>

<h1>Accueil</h1>

<form role="form" method="post">
    <fieldset>
        <!-- Change this to a button or input when using this as a form -->
        <button class="btn btn-lg btn-success btn-block">Ouvrir</button>
        <h1>
        	<h1>Session</h1>
                <pre><?php print_r($_SESSION);?></pre>
        </h1>
    </fieldset>
    </form>