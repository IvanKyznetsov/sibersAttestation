<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CsvData
 *
 * @ORM\Entity
 *
 * @package AppBundle\Entity
 */
class CsvData
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true)
     */
    private $name;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName():? string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return CsvData
     */
    public function setName(string $name = null)
    {
        $this->name = $name;

        return $this;
    }
}