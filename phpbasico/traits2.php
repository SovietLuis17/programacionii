<?php
trait Loggable {
    protected $logs = [];
    
    public function log($message) {
        $this->logs[] = [
            'time' => date('H:i:s'),
            'message' => $message
        ];
    }
    
    public function getLogs() {
        return $this->logs;
    }
    
    public function clearLogs() {
        $this->logs = [];
    }
}

class Order {
    use Loggable;
    
    public function create() {
        $this->log("Orden creada");
    }
    
    public function ship() {
        $this->log("Orden enviada");
    }
}

$order = new Order();
$order->create();
$order->ship();
print_r($order->getLogs());