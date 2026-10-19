<?php

class Usuario {
    protected string $nombre;
    protected string $email;
    
    public function __construct(string $nombre, string $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }
    
    public function login() {
        return "Usuario {$this->email} ha iniciado sesión.";
    }
    
    public function getNombre() {
        return $this->nombre;
    }
}

class Administrador extends Usuario {
    private array $permisos;
    
    public function __construct(string $nombre, string $email, array $permisos) {
        // 1. Inicializar lo que corresponde al Padre
        parent::__construct($nombre, $email);
        
        // 2. Inicializar lo propio del Hijo
        $this->permisos = $permisos;
    }
    
    // Sobrescritura parcial del método login
    public function login() {
        // Ejecutar login normal
        $mensaje = parent::login();
        
        // Agregar seguridad extra
        return $mensaje . " [Nivel: ADMIN]";
    }
    
    public function banearUsuario(Usuario $user) {
        return "Admin {$this->getNombre()} ha baneado a {$user->getNombre()}";
    }
}

// ==========================================
// USO
// ==========================================

$admin = new Administrador("Carlos", "carlos@web.com", ['editar', 'borrar']);

// Llama al constructor del padre (Usuario) y al hijo (Admin)
echo $admin->login(); 
// Salida: Usuario carlos@web.com ha iniciado sesión. [Nivel: ADMIN]

$usuarioNormal = new Usuario("Ana", "ana@web.com");
echo "\n" . $admin->banearUsuario($usuarioNormal);
// Salida: Admin Carlos ha baneado a Ana