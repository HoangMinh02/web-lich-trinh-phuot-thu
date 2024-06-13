<?php

define('BASE_URL', 'http://localhost:8080/web_lich_trinh_phuot_thu/');

function showError(array $errors, string $inputName): string
{
    $string = '';
    if (isset($errors[$inputName])) {
        foreach ($errors[$inputName] as $error) {
            $string .= "<span style='color:red'>$error</span><br>";
        }
    }
    return $string;
}

function saveOldData(array &$oldDatas, string $fieldName, mixed $value): void
{
    if (!isset($errors[$fieldName])) {
        $oldDatas[$fieldName] = $value;
    }
}

function prepareStatementInsert(string $table, array $datas): string
{

    //insert into user (column1, column2, column2) values (value1, value2, value3)
    $columnString = implode(',', array_keys($datas));

    $values = array_map(function ($value) {
        return sprintf("'%s'", $value);
    }, array_values($datas));

    $valueString = implode(',', $values);

    $sql = sprintf(
        "INSERT INTO %s (%s) VALUES (%s)",
        $table,
        $columnString,
        $valueString
    );

    return $sql;
}

function prepareStatementUpdate(string $table, array $datas, int $id): string
{
    $arrayTemp = [];
    foreach ($datas as $key => $data) {
        $arrayTemp[] = sprintf("%s = '%s'", $key, $data);
    }

    $query = implode(',', $arrayTemp);

    $sql = sprintf("UPDATE %s SET %s WHERE id = %s", $table, $query, $id);

    return $sql;
}

function dd(mixed $object): void
{
    echo '<pre>';
    if (is_array($object)) {
        print_r($object);
        die;
    }
    var_dump($object);
    die;
}
