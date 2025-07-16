<?php

class SocialMedia {
    public string $name;
}

class Facebook extends SocialMedia {
    final public function login(string $username, string $password) : bool {
        return true;
    }
}

class FakeFacebook extends Facebook {
    // public function login(string $username, string $password) : bool {
    //     return false;
    // }
}