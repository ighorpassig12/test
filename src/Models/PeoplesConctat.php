<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * PeoplesConctat
 *
 * @ORM\Table(name="peoples_conctat", indexes={@ORM\Index(name="fk_peoples_conctat_peoples", columns={"id_people"})})
 * @ORM\Entity
 */
class PeoplesConctat
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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var int|null
     *
     * @ORM\Column(name="telephone", type="bigint", nullable=true)
     */
    private $telephone;

    /**
     * @var \Models\Peoples
     *
     * @ORM\ManyToOne(targetEntity="Models\Peoples")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_people", referencedColumnName="id")
     * })
     */
    private $idPeople;
}
