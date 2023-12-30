<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/dbcon.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/assets/php/table-name.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/assets/php/instructors.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/assets/php/category.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/assets/php/sub-category.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/assets/php/instructors-profile.php';


?>

<!DOCTYPE html>
<html>
<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST["tablesubmit"])) {
    $select = $_POST['add-data'];
    // echo ($select);
    if($select=='1'){
        echo ('selected 1');
    }
    if($select=='2'){
        echo ('selected 2');
    }
    if($select=='3'){
        echo ('selected 3');
    }
    if($select=='category'){
        echo ('selected catg');
    }
    if($select=='custom_fieds'){
        echo ('selected cus');
    }
    if($select=='instructor_profile'){
        echo ('selected insp');
    }
    if($select=='instructors'){
        echo ('selected ins');
    }
    if($select=='sub_category'){
        echo ('selected scatg');
    }
    if($select=='video_list'){
        echo ('selected vl');
    }
    if($select=='videos'){
        echo ('selected b');
    }
}

?>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <select name="add-data">
            <option value="1">nice</option>
            <option value="2"> nice2</option>
            <option value="3"> nice3</option>
            <?php while ($row = mysqli_fetch_array($result)) {  ?>
                <option value="<?php echo "{$row[0]}"; ?>"> <?php echo "{$row[0]}\n"; ?></option>
            <?php } ?>
        </select>
        <button name="tablesubmit" type="submit">enter</button>
    </form>


</body>

</html>

<?php


?>