<?php

    const DATA_FILE_PATH = __DIR__ . '/../data/';
    const DATA_FILE_NAME = 'data.json';
    function getData()
    {
        return json_decode(file_get_contents(DATA_FILE_PATH . DATA_FILE_NAME), true) ?? [];
    }

    function saveData(array $data)
    {
        $existedData = getData() ?? [];
        array_push($existedData, $data);
        file_put_contents(DATA_FILE_PATH . DATA_FILE_NAME, json_encode($existedData));
    }

    function rewriteData(array $data)
    {
        if (empty($data)) {
            file_put_contents(DATA_FILE_PATH . DATA_FILE_NAME, '');
        } else {
            file_put_contents(DATA_FILE_PATH . DATA_FILE_NAME, json_encode($data));
        }
    }