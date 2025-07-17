<?php
function validateLoginRequest(LoginRequest $request) {
    if (! isset($request->username)) {
        throw new ValiateException("Username is null");
    } else if (! isset($request->password)) {
        throw new ValiateException("Password is null");
    } else if (trim($request->username) == "") {
        throw new Exception("Username is empty");
    } elseif (trim($request->password) == "") {
        throw new Exception("Password is empty");
    }
}