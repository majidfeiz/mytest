<!DOCTYPE html>
<html>
<head>
    <title>My MVC App</title>
</head>
<body>
<h1>Hi</h1>
<?php
switch ($_GET['url']) {
    case 'folder1':
        echo '<div>I\'m in folder1</div>';
        break;
    case 'folder2':
        echo '<div>I\'m in folder2</div>';
        break;
    default:
        echo '<div>I\'m in the homepage</div>';
        break;
}
?>
</body>
</html>