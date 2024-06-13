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
    $errors = [];
    $oldDatas = [];

    if (!empty($_POST)) {
        //Receive Data        
        $tenDiaDiem = $_POST['ten_dia_diem'] ?? null;
        $diaChi = $_POST['dia_chi'] ?? null;
        $moTa = $_POST['mo_ta'] ?? null;
        $phoBien = $_POST['pho_bien'] ?? null;
        $kinhDo = null;
        $viDo = null;


        //Validate data -> Send Error
        if (strlen(trim($tenDiaDiem)) === 0) {
            $errors['ten_dia_diem'][] = 'Tên địa điểm là bắt buộc';
        }
        if (strlen(trim($diaChi)) === 0) {
            $errors['dia_chi'][] = 'Địa chỉ là bắt buộc';
        }
        if (strlen(trim($moTa)) === 0) {
            $errors['mo_ta'][] = 'Mô tả là bắt buộc';
        }
        if (empty($phoBien)) {
            $errors['pho_bien'][] = 'Phổ biến là bắt buộc';
        }

        saveOldData($oldDatas, 'ten_dia_diem', $tenDiaDiem);
        saveOldData($oldDatas, 'dia_chi', $diaChi);
        saveOldData($oldDatas, 'mo_ta', $moTa);
        saveOldData($oldDatas, 'pho_bien', $phoBien);


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
                'ten_dia_diem' => $tenDiaDiem,
                'dia_chi' => $diaChi,
                'mo_ta' => $moTa,
                'pho_bien' => $phoBien,
                'hinh_anh' => $fieldNameNew
            ];

            $sql = prepareStatementInsert('diadiem', $datas);

            $result = mysqli_query($connect, $sql);

            if ($result) {
                echo 'Thêm địa điểm thành công';
            } else {
                echo 'Thêm địa điểm thất bại';
            }
        }
    }
    ?>

    <form method="post" enctype="multipart/form-data">
        <label for="ten_dia_diem">Tên địa điểm</label>
        <input type="text" id="ten_dia_diem" name="ten_dia_diem" value="<?= $oldDatas['ten_dia_diem'] ?? '' ?>" /><br />
        <?= showError($errors, 'ten_dia_diem') ?>

        <label for="dia_chi">Địa chỉ</label>
        <input type="text" id="dia_chi" name="dia_chi" value="<?= $oldDatas['dia_chi'] ?? '' ?>" /><br />
        <?= showError($errors, 'dia_chi') ?>

        <label for="mo_ta">Mô tả</label>
        <textarea id="mo_ta" name="mo_ta"><?= $oldDatas['mo_ta'] ?? '' ?></textarea><br />
        <?= showError($errors, 'mo_ta') ?>

        <label for="hinh_anh">Hình ảnh</label>
        <input type="file" id="hinh_anh" name="hinh_anh" /><br />
        <?= showError($errors, 'hinh_anh') ?>

        <label for="pho_bien">Role</label>
        <select id="pho_bien" name="pho_bien">
            <option value="">---Vui lòng chọn---</option>
            <option value="phoBien" <?= (isset($oldDatas['pho_bien']) && $oldDatas['pho_bien'] === 'phoBien') ? 'selected' : '' ?>>Phổ biến</option>
            <option value="khongPhoBien" <?= (isset($oldDatas['pho_bien']) && $oldDatas['pho_bien'] === 'khongPhoBien') ? 'selected' : '' ?>>Không phổ biến</option>
        </select><br>
        <?= showError($errors, 'pho_bien') ?>

        <br /><button type="submit">Thêm địa điểm</button>
    </form>
</body>


</html>