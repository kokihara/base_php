<?php
session_start();
$self_url = $_SERVER['PHP_SELF'];
?>

<form action="<?php echo $self_url?>" method="POST">
<input type="text" name="title">
<input type="submit" name="type" value="create">
</form>

<?php
if(isset($_POST['type']) && !empty($_POST['title'])) {
    if($_POST['type'] === 'create') {
        $_SESSION['todos'] = $_POST['title'];
        echo "新しいタスク[{$_POST['title']}]が追加されました。";
    } elseif ($_POST['type'] === 'update') {
         $_SESSION['todos'][$_POST['id']] = $_POST['title'];
         echo "タスク[{$_POST['title']}]の名前が変更されました。";
    } elseif ($_POST['type'] === 'delete') {
         array_splice($_SESSION['todos'],$_POST['id'],1);
         echo "タスク[{$_POST['title']}]が削除されました。<br>";
    }
} else {
    echo 'タスクを入力しましょう！';
}
var_dump($_SESSION);

    //配列todosの初期化を行う
if(empty($_SESSION['todos'])) {
    $_SESSION['todos'] = array();
    echo 'タスクを入力しましょう！';
    exit();
}




?>

<ul>
    <?php if(is_array($_SESSION['todos'])): ?>
    <?php for($i = 0; $i<count($_SESSION['todos']); $i++): ?>
    <li>
        <form action="<?php echo $self_url; ?>" method="POST">
            <input type="hidden" name="id" value="<?php echo $i; ?>">
            <input type="text" name="title" value="<?php echo $_SESSION['todos'][$i];?>">
            <input type="submit" name="type" value="delete">
            <input type="submit" name="type" value="update">
        </form>
    </li>
    <?php endfor; ?>
    <?php endif; ?>
</ul>