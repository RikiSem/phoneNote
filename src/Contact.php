<?php

    include_once 'Json.php';

    function getContacts()
    {
        return getData();
    }

    function deleteContact(string $phone)
    {
        $contacts = getData();
        foreach ($contacts as $key => $contact) {
            if ($contact['phone'] === $phone) {
                unset($contacts[$key]);
            }
        }

        rewriteData($contacts);
    }

    function saveContact(array $data)
    {
        unset($data['type']);
        saveData($data);
    }
