<?php

class Token {
    private $userTokens = [];

    public function generateToken($user) {
        $token = bin2hex(random_bytes(5)); 
        if (!isset($this->userTokens[$user])) {
            $this->userTokens[$user] = [];
        }
        if (count($this->userTokens[$user]) >= 10) {
            array_shift($this->userTokens[$user]);
        }
        $this->userTokens[$user][] = $token;
        return $token;
    }

    public function verify_token($user, $token) {
        if (isset($this->userTokens[$user]) && in_array($token, $this->userTokens[$user])) {
            $index = array_search($token, $this->userTokens[$user]);
            unset($this->userTokens[$user][$index]);
            return true;
        }
        return false;
    }
}

//  ============================

$user = 'Zero';

$nt = new Token();
$token = $nt->generateToken($user);

echo "Token: $token\n";
echo "Verify Token: " . ( $nt->verify_token($user, $token) ? "Verified" : "Unverified" );