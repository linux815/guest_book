<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="entry")
 */
class Entry
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=100)
     *
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      minMessage = "Your name must be at least {{ limit }} characters long",
     * )
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your name cannot contain a number"
     * )
     */
    private $name;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     *
     * @Assert\NotBlank()
     * @Assert\Email(message = "Your email is entered incorrectly")
     */
    private $email;

    /**
     * @var string $text
     *
     * @ORM\Column(name="text", type="text")
     *
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 10,
     *      minMessage = "Your text must be at least {{ limit }} characters long",
     * )
     */
    private $text;

    /**
     * @var string $sid
     *
     * @ORM\Column(name="sid", type="text")
    */
    private $sid;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Entry
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Entry
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Entry
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set sid
     *
     * @param string $sid
     *
     * @return Entry
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * Get sid
     *
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }
}
