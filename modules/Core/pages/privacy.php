<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  License: MIT
 *
 *  Site terms page
 */

// Always define page name
define('PAGE', 'privacy');
?>
<!DOCTYPE html>
<html<?php if(defined('HTML_CLASS')) echo ' class="' . HTML_CLASS . '"'; ?> lang="<?php echo (defined('HTML_LANG') ? HTML_LANG : 'en'); ?>">
<head>
    <!-- Standard Meta -->
    <meta charset="<?php echo (defined('LANG_CHARSET') ? LANG_CHARSET : 'utf-8'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <?php
    $title = $language->get('general', 'privacy_policy');
    require(ROOT_PATH . '/core/templates/header.php');
    ?>

</head>
<body>
<?php
require(ROOT_PATH . '/core/templates/navbar.php');
require(ROOT_PATH . '/core/templates/footer.php');

// Retrieve privacy policy from database
$policy = $queries->getWhere('settings', array('name', '=', 'privacy_policy'));
$policy = Output::getPurified($policy[0]->value);

$smarty->assign(array(
    'PRIVACY_POLICY' => $language->get('general', 'privacy_policy'),
    'POLICY' => $policy
));

$smarty->display(ROOT_PATH . '/custom/templates/' . TEMPLATE . '/privacy.tpl');

require(ROOT_PATH . '/core/templates/scripts.php'); ?>

</body>
</html>