<?php
trait LogoutTrait {
    public function logout() {
        session_unset();
        session_destroy();
        echo ucfirst($this->role) . " logged out successfully!\n";
    }
}