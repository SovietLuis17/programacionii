<?php
trait SoftDeletes {
    protected $deletedAt = null;
    
    public function delete() {
        $this->deletedAt = date('Y-m-d H:i:s');
    }
    
    public function restore() {
        $this->deletedAt = null;
    }
    
    public function isDeleted() {
        return $this->deletedAt !== null;
    }
}

class User {
    use SoftDeletes;
    
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
}

$user = new User("Carlos");
$user->delete();
var_dump($user->isDeleted()); // true
$user->restore();
var_dump($user->isDeleted()); // false