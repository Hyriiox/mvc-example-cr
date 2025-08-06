<?php

namespace Afpa\Models;

class Utilisateur
{
    private ?int $id;
    private string $email;
    private string $pseudo;
    private string $password;
    private string $fonction;

    public function __construct(string $pseudo, string $email, string $password, string $fonction, ?int $id = null)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->fonction = $fonction;
        $this->password = $password;
        $this->id = $id;
    }

    /**
     * Retourne une représentation en chaîne de caractères de l'objet.
     */
    public function __toString()
    {
        return "$this->id - $this->pseudo $this->email - $this->fonction";
    }

    /**
     * Get the value of id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of pseudo
     *
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @param string $pseudo
     *
     * @return self
     */
    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of fonction
     *
     * @return string
     */
    public function getFonction(): string
    {
        return $this->fonction;
    }

    /**
     * Set the value of fonction
     *
     * @param string $fonction
     *
     * @return self
     */
    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
