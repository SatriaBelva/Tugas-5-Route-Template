<?php
include_once __DIR__ . '/../config/koneksi.php';

class Contact
{
    static function getContacts($No_ID)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM kontak WHERE No_ID = ?");
        $stmt->bind_param("i", $No_ID);
        $stmt->execute();
        $result = $stmt->get_result();
        $kontak = array();
        while ($row = $result->fetch_assoc()) {
            $kontak[] = $row;
        }
        $conn->close();
        return $kontak;
    }

    static function create($data=[])
    {
        extract($data);
        global $conn;
        $stmt = $conn->prepare("INSERT INTO kontak (nomorHP, owner, No_ID) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $nomorHP, $owner, $No_ID);
        $stmt->execute();
        return $conn->insert_id;
    }

    static function getById($id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM kontak WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    static function update($data=[])
    {
        global $conn;
        $nomorHP = $data['nomorHP'];
        $owner = $data['owner'];
        $No_ID = $data['No_ID'];
        $id = $data['id'];
        $stmt = $conn->prepare("UPDATE kontak SET nomorHP = ?, owner = ?, No_ID = ? WHERE id = ?");
        $stmt->bind_param("ssii", $nomorHP, $owner, $No_ID, $id);
        $stmt->execute();
        return $stmt->affected_rows;
    }

    static function delete($id)
    {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM kontak WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->affected_rows;
    }
}

// $contactModel = new Contact($conn);