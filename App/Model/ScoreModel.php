<?php
namespace App\Model;

/**
 * A basic model that uses a session store instead of a database
 */
class ScoreModel
{
    /**
     * Returns the players current score
     *
     * @return int
     */
    public function getPoints()
    {
        return isset($_SESSION['points']) ? $_SESSION['points'] : 0;
    }

    /**
     * Adds an amount to the players score
     *
     * @param int $amount
     */
    public function addPoints($amount)
    {
        if (isset($_SESSION['points'])) {
            $_SESSION['points'] += $amount;
        } else {
            $_SESSION['points'] = $amount;
        }
    }

    /**
     * Resets the players score
     */
    public function resetPoints()
    {
        $_SESSION['points'] = 0;
    }
}
