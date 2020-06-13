<?php
include_once 'database.php';

class MockUser extends User {
    public function delete(int $id) {
        echo __CLASS__.". This would delete a user with id={$id}";
        return true;
    }
}