<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
    require_once('helper.php');
    // Super Global Variable => sieu toan cuc

    $errors = [];
    $oldDatas = [];

    if (!empty($_POST)) {
        //Receive Data        
        $tenLichTrinh = $_POST['ten_lich_trinh'] ?? null;
        $moTa = $_POST['mo_ta'] ?? null;
        $thoiGianBatDau = $_POST['thoi_gian_bat_dau'] ?? null;
        $thoiGianKetThuc = $_POST['thoi_gian_ket_thuc'] ?? null;


        //Validate data -> Send Error
        if (strlen(trim($tenLichTrinh)) === 0) {
            $errors['ten_lich_trinh'][] = 'Tên lịch trình là bắt buộc';
        }
        if (strlen(trim($moTa)) === 0) {
            $errors['mo_ta'][] = 'Mô tả là bắt buộc';
        }
        if (empty($thoiGianBatDau)) {
            $errors['thoi_gian_bat_dau'][] = 'Thời gian bắt đầu là bắt buộc';
        }
        if (empty($thoiGianKetThuc)) {
            $errors['thoi_gian_ket_thuc'][] = 'Thời gian kết thúc là bắt buộc';
        }

        saveOldData($oldDatas, 'ten_lich_trinh', $tenLichTrinh);
        saveOldData($oldDatas, 'mo_ta', $moTa);
        saveOldData($oldDatas, 'thoi_gian_bat_dau', $thoiGianBatDau);
        saveOldData($oldDatas, 'thoi_gian_ket_thuc', $thoiGianKetThuc);

        //No Error -> Fresh data
        //Save into Database

        if (empty($errors)) {
            //Save file into project
            $file = $_FILES['hinh_anh']['tmp_name'];
            $path = $_FILES['hinh_anh']['name'];
            $fileName = pathinfo($path, PATHINFO_FILENAME);
            $extensionFile = pathinfo($path, PATHINFO_EXTENSION);

            $fieldNameNew = $fileName . '_' . uniqid() . '.' . $extensionFile;

            move_uploaded_file($file, 'images/' . $fieldNameNew);

            //Connect Database
            require_once('database.php');

            $datas = [
                'ten_lich_trinh' => $tenLichTrinh,
                'mo_ta' => $moTa,
                'thoi_gian_bat_dau' => $thoiGianBatDau,
                'thoi_gian_ket_thuc' => $thoiGianKetThuc,
                'hinh_anh' => $fieldNameNew
            ];

            $sql = prepareStatementInsert('lichtrinh', $datas);

            $result = mysqli_query($connect, $sql);

            if ($result) {
                echo 'Thêm lịch trình thành công';
            } else {
                echo 'Thêm lịch trình thất bại';
            }
        }
    }
    ?>

    <form method="post" enctype="multipart/form-data">
        <label for="ten_lich_trinh">Tên lịch trình</label>
        <input type="text" id="ten_lich_trinh" name="ten_lich_trinh" value="<?= $oldDatas['ten_lich_trinh'] ?? '' ?>" /><br />
        <?= showError($errors, 'ten_lich_trinh') ?>

        <label for="mo_ta">Mô tả</label>
        <textarea id="mo_ta" name="mo_ta"><?= $oldDatas['mo_ta'] ?? '' ?></textarea><br />
        <?= showError($errors, 'mo_ta') ?>

        <label for="thoi_gian_bat_dau">Thời gian bắt đầu</label>
        <input type="date" id="thoi_gian_bat_dau" name="thoi_gian_bat_dau" value="<?= $oldDatas['thoi_gian_bat_dau'] ?? '' ?>" /><br />
        <?= showError($errors, 'thoi_gian_bat_dau') ?>

        <label for="thoi_gian_ket_thuc">Thời gian kết thúc</label>
        <input type="date" id="thoi_gian_ket_thuc" name="thoi_gian_ket_thuc" value="<?= $oldDatas['thoi_gian_ket_thuc'] ?? '' ?>" /><br />
        <?= showError($errors, 'thoi_gian_ket_thuc') ?>

        <label for="avatar">Ảnh đại diện</label>
        <input type="file" id="hinh_anh" name="hinh_anh" /><br />
        <?= showError($errors, 'hinh_anh') ?>



        <br /><button type="submit">Thêm lịch trình</button>
    </form>
</body>

</html>