<?php

namespace App;

/**
 * @method static string sendResetLink(array $credentials)
 * @method static mixed reset(array $credentials, \Closure $callback)
 * @method static void validator(\Closure $callback)
 * @method static bool validateNewPassword(array $credentials)
 *
 * @see \Illuminate\Auth\Passwords\PasswordBroker
 */
use Illuminate\Support\Facades\Facade;

class Password extends Facade
{
    /**
     * Constant representing a successfully sent reminder.
     *
     * @var string
     */
    const RESET_LINK_SENT = 'backend.passwords.sent';

    /**
     * Constant representing a successfully reset password.
     *
     * @var string
     */
    const PASSWORD_RESET = 'backend.passwords.reset';

    /**
     * Constant representing the user not found response.
     *
     * @var string
     */
    const INVALID_USER = 'backend.passwords.user';

    /**
     * Constant representing an invalid password.
     *
     * @var string
     */
    const INVALID_PASSWORD = 'backend.passwords.password';

    /**
     * Constant representing an invalid token.
     *
     * @var string
     */
    const INVALID_TOKEN = 'backend.passwords.token';

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'backend.auth.password';
    }
}
