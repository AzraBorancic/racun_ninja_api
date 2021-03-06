<?php
/**
 * @OA\Schema(
 * )
 */
class LoginModel
{
    /**
     * @OA\Property(
     * description="Username or email address of user logging in.",
     * required=true
     * )
     * @var string
     */
    public $username_or_email_address;

    /**
     * @OA\Property(
     * description="Password of user logging in.",
     * required=true
     * )
     * @var string
     */
    public $password;
}
