<?php

class BankAccount
{
    protected $identifier;
    protected $owner;
    protected $balance = 0;

    public function __construct($identifier, $owner)
    {
        $this->identifier = $identifier;
        $this->owner = $owner;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function depositMoney($amount)
    {
        if ($amount < 0) {
            echo 'Pas de dépôt négatif';
            return;
        }

        $this->balance += $amount;
    }

    /**
     * Return a boolean with withdraw state.
     * 
     * @param int $amount
     * 
     * @return bool
     */
    public function withdrawMoney($amount)
    {
        if ($this->balance < $amount) {
            echo 'Pas de retrait';
            return false; // Le return arrête la fonction
        }

        $this->balance -= $amount;
        return true;
    }

    public function wire($amount, BankAccount $bankAccount)
    {
        // if ($bankAccount instanceof BankAccount) {
            if ($this->withdrawMoney($amount)) {
                $bankAccount->depositMoney($amount);
            }
        // }
    }
}
