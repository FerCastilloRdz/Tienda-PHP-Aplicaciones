<?php 
 require_once "../services/tokenService.php";

  class AutMiddleware{
    public static function verificarToken(){
        $headers = apache_request_headers();
        if (!isset($headers["Authorization"])){
            return ["mensaje" => "Token no proporcionado", "codigo" => 401];
        }
        $token = str_replace("Bearer", "",$headers ["Authorization"]);
        $tokenService = new TokenService();
        if (!$tokenService->verificarToken($token))
        {
            return ["mensaje" => "Token Invalido", "codigo" => 403];
        }
        return ["mensaje" => "Token Valido", "codigo" => 200];
   }
  }
?>