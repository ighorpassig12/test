<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * Peoples
 *
 * @ORM\Table(name="peoples")
 * @ORM\Entity
 */
class Peoples
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cpf", type="bigint", nullable=true)
     */
    private $cpf;
}
